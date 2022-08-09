FROM php:8.0-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

#Set Working directory
WORKDIR /var/www/html

#Copy exisiting application directory contents
COPY . /var/www/html/

# Copy exisiting application directory permission 
COPY --chown=www:www . /var/www/html/

#Change current user to www
USER node

EXPOSE 8000

CMD [ "php-fpm" ]