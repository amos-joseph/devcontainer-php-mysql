php-fpm81
chmod 777 /var/run/php/php8-fpm.sock 
chmod 755 /usr/share/nginx/html/* 
nginx -g 'daemon off;'