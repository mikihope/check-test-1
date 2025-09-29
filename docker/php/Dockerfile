FROM php:8.1-fpm

# 必要な拡張をインストール
RUN docker-php-ext-install pdo_mysql

# Composer を公式イメージからコピー
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www


