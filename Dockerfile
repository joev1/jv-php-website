FROM ubuntu:18.04
ENV DEBIAN_FRONTEND noninteractive
WORKDIR /app
RUN apt update && \
    apt upgrade -y && \
    apt install -y php-cli php-mysql php-xdebug curl git && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY entrypoint.sh /usr/local/bin
RUN chmod 777 /usr/local/bin/entrypoint.sh \
    && ln -s /usr/local/bin/entrypoint.sh /
ENTRYPOINT ["entrypoint.sh"]
