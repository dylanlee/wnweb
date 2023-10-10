.PHONY: all nginx_setup php_step

all: php_step nginx_setup

php_step:
	@NEWEST_PAGE=$$(find /home/dylan/wnweb/pages -type f -printf '%T@ %p\n' | sort -n | tail -1 | cut -f2- -d" "); \
	CHANGED_SRC=$$(find /home/dylan/wnweb/src -type f -newer "$$NEWEST_PAGE" -print); \
	if [ -n "$$CHANGED_SRC" ]; then \
		echo "Files in src have been modified after pages. Running php gen.php..."; \
		php gen.php; \
	else \
		echo "No newer files in src compared to pages."; \
	fi

/etc/nginx/conf.d/nginx.conf: /home/dylan/wnweb/nginx.conf
	# Copy nginx configuration
	sudo cp /home/dylan/wnweb/nginx.conf /etc/nginx/conf.d/

nginx_setup: /etc/nginx/conf.d/nginx.conf 
	# Start nginx
	sudo systemctl start nginx

	# Reload nginx configuration
	sudo systemctl reload nginx
