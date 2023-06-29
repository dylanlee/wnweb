.PHONY: all nginx_setup docker_up

all: nginx_setup docker_up

# Rule for setting up nginx
nginx_setup: /etc/nginx/conf.d/eodag.conf /etc/nginx/ssl/cert.pem
	# Start nginx
	sudo systemctl start nginx

	# Reload nginx configuration
	sudo systemctl reload nginx

/etc/nginx/conf.d/eodag.conf: /home/dylan/wnweb/nginx_eodag.conf
	# Copy nginx configuration
	sudo cp /home/dylan/wnweb/nginx_eodag.conf /etc/nginx/conf.d/

/etc/nginx/ssl/cert.pem:
	# Generate certificates and link them
	sudo mkdir -p /etc/nginx/ssl/
	sudo openssl req -x509 -newkey rsa:4096 -keyout /etc/nginx/ssl/key.pem -out /etc/nginx/ssl/cert.pem -days 365 -nodes -subj '/CN=localhost'

	
# Rule for running docker compose
docker_up: ./eodag
	# Run docker compose command. Setting --build to make sure changes to code propogate
	cd ./eodag && sudo EODAG_LOGGING=3 docker-compose up --build

./eodag:
	#Clone EODAG git repository if it doesn't exist
	if [ ! -d "/home/ubuntu/wnweb/eodag" ]; then \
             git clone https://github.com/CS-SI/eodag.git /home/ubuntu/wnweb/eodag; \
        fi
	
