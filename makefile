.PHONY: all nginx_setup 

all: nginx_setup

/etc/nginx/conf.d/nginx.conf: /home/dylan/wnweb/nginx.conf
	# Copy nginx configuration
	sudo cp /home/dylan/wnweb/nginx.conf /etc/nginx/conf.d/

nginx_setup: /etc/nginx/conf.d/nginx.conf 
	# Start nginx
	sudo systemctl start nginx

	# Reload nginx configuration
	sudo systemctl reload nginx
