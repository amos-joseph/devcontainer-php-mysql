FROM mcr.microsoft.com/devcontainers/base:alpine-3.18

RUN apk update && apk upgrade && \
    apk add bash curl && \
    apk add nginx && \
    apk add php81 php81-fpm php81-opcache php81-phar && \
    apk add php81-gd php81-zlib php81-curl php81-mbstring && \
    apk add php81-pdo_mysql

COPY config/nginx /etc/nginx
COPY config/php /etc/php81
COPY scripts /usr/share/scripts
RUN chmod +x /usr/share/scripts/startup.sh && \
    chmod +x /usr/share/scripts/install-composer.sh
WORKDIR /usr/share/scripts
RUN ./install-composer.sh && \
    mv composer.phar /usr/local/bin/composer
RUN mkdir /var/run/php
EXPOSE 80
EXPOSE 443

ENTRYPOINT "/usr/share/scripts/startup.sh"