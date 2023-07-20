IMAGE_NAME = stac-browser:v1
CONTAINER_NAME = stac-container

.PHONY: all nginx_setup run_container docker_image docker_check

all: nginx_setup docker_check docker_image run_container

/etc/nginx/conf.d/nginx.conf: /home/dylan/wnweb/nginx.conf
	# Copy nginx configuration
	sudo cp /home/dylan/wnweb/nginx.conf /etc/nginx/conf.d/

/etc/nginx/ssl/cert.pem: /etc/nginx/ssl/done
	# This rule does nothing but depend on the sentinel file
	
/etc/nginx/ssl/key.pem: /etc/nginx/ssl/done

/etc/nginx/ssl/done:
	# Generate certificate and key
	sudo mkdir -p /etc/nginx/ssl/
	sudo openssl req -x509 -newkey rsa:4096 -keyout /etc/nginx/ssl/key.pem -out /etc/nginx/ssl/cert.pem -days 365 -nodes -subj '/CN=localhost'
	# Touch the sentinel file to signal that the certificate and key have been generated
	touch /etc/nginx/ssl/done

nginx_setup: /etc/nginx/conf.d/nginx.conf /etc/nginx/ssl/cert.pem /etc/nginx/ssl/key.pem
	# Start nginx
	sudo systemctl start nginx

	# Reload nginx configuration
	sudo systemctl reload nginx

docker_check:	
	if [ -z "$$(docker images -q $(IMAGE_NAME))" ]; then exit 1; fi

# Rule for building docker image
docker_image: docker_check ./stac-browser
	# Run docker command. 
	cd ./stac-browser && docker build -t $(IMAGE_NAME) --build-arg catalogURL=https://viirs1day.s3.amazonaws.com/catalog.json .

./stac-browser:
	#Clone EODAG git repository if it doesn't exist
	if [ ! -d "/home/dylan/wnweb/stac-browser" ]; then \
		git clone https://github.com/radiantearth/stac-browser.git /home/dylan/wnweb/stac-browser; \
	fi

run_container: docker_image
	docker run --name $(CONTAINER_NAME) -p 8080:8080 --rm $(IMAGE_NAME)
	
