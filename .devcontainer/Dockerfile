FROM mcr.microsoft.com/devcontainers/base:alpine-3.18

ENV MYSQL_DATABASE=drupal \
	MYSQL_USER=drupaladmin \
	MYSQL_PASSWORD=drupalpw \
    MYSQL_ROOT_PASSWORD=rootpw

RUN apk update && apk upgrade && \
    apk add bash curl && \
    apk add nginx && \
    apk add php81 php81-fpm php81-opcache php81-phar php81-session && \
    apk add php81-gd php81-zlib php81-curl php81-mbstring php81-mysqlnd && \
    apk add php81-pdo_mysql php81-tokenizer php81-dom php81-openssl php81-pdo  && \
    apk add php81-simplexml php81-xml && \
    apk add mariadb mariadb-client mariadb-server-utils pwgen &&  \
    rm -f /var/cache/apk/*

COPY config/nginx /etc/nginx
COPY config/php /etc/php81
COPY config/mariadb/my.cnf /etc/my.cnf
COPY scripts /usr/share/scripts
RUN chmod +x /usr/share/scripts/startup.sh && \
    chmod +x /usr/share/scripts/install-composer.sh && \
    chmod +x /usr/share/scripts/install-mariadb.sh
WORKDIR /usr/share/scripts
RUN ./install-composer.sh && \
    mv composer.phar /usr/local/bin/composer
RUN mkdir /var/run/php
EXPOSE 80
EXPOSE 443
EXPOSE 3306

ENTRYPOINT ["/usr/share/scripts/startup.sh"]