# PHPUnit Docker Container.
FROM php:7.4-rc
MAINTAINER Dominik Stypula <dominik.stypula1@gmail.com>

RUN apt-get update && apt-get install -y git

RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && \
    curl --insecure https://getcomposer.org/composer.phar -o /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR /tmp/

# Run composer and phpunit installation.
RUN composer selfupdate && \
    composer require "phpunit/phpunit" --prefer-source --no-interaction && \
    ln -s /tmp/vendor/bin/phpunit /usr/local/bin/phpunit

RUN mkdir vendor_mapped 777
COPY initialScript.sh /usr/local/bin/
RUN chmod 777 /usr/local/bin/initialScript.sh
# Set up the application directory.
VOLUME ["/app", "/tmp"]
WORKDIR /tmp/
#RUN ls /tmp/
RUN /usr/local/bin/phpunit --version

# Set up the command arguments.
ENTRYPOINT ["/usr/local/bin/initialScript.sh"]
#CMD ["--help"]