# Sử dụng image cơ sở
FROM php:7.4-apache

# Thiết lập thư mục làm việc
WORKDIR /var/www/html

# Sao chép các file mã nguồn của Laravel vào thư mục làm việc
COPY . /var/www/html

# Cài đặt các gói và phụ thuộc cần thiết
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài đặt các gói Composer
RUN composer install --optimize-autoloader --no-dev

# Phân quyền thư mục lưu trữ cache và session
RUN chown -R www-data:www-data storage bootstrap/cache

# Thiết lập VirtualHost Apache (nếu sử dụng php:7.x-apache)
COPY apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Mở cổng 80 cho Apache
EXPOSE 80

# Khởi động Apache
CMD ["apache2-foreground"]
