FROM dunglas/frankenphp

ENV SERVER_NAME=www.spellbinder.eu

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /app
