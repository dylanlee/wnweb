IMAGE_NAME = stac-browser:v1
CONTAINER_NAME = stac-container

.PHONY: all nginx_setup run_container docker_image docker_check

all: nginx_setup docker_image run_container

/etc/nginx/conf.d/nginx.conf: /home/dylan/wnweb/nginx.conf
	# Copy nginx configuration
	sudo cp /home/dylan/wnweb/nginx.conf /etc/nginx/conf.d/

nginx_setup: /etc/nginx/conf.d/nginx.conf 
	# Start nginx
	sudo systemctl start nginx

	# Reload nginx configuration
	sudo systemctl reload nginx

# Rule for building docker image
docker_image: ./stac-browser
	# Check if docker image exists, if not then build it
	if [ -z "$$(docker images -q $(IMAGE_NAME))" ]; then \
                cd ./stac-browser && docker build -t $(IMAGE_NAME) --build-arg catalogURL=https://viirs1day.s3.amazonaws.com/catalog.json .; \
        fi

./stac-browser:
	#Clone EODAG git repository if it doesn't exist
	if [ ! -d "/home/dylan/wnweb/stac-browser" ]; then \
                git clone https://github.com/radiantearth/stac-browser.git /home/dylan/wnweb/stac-browser; \
        fi

run_container: docker_image
	docker run --name $(CONTAINER_NAME) -p 8080:8080 --rm $(IMAGE_NAME)

