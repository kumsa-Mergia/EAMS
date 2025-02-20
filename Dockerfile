# Use a specific PHP version and base image.  It's generally better to avoid 'latest'
# unless you specifically need it and understand the implications.  Alpine
# images are smaller, but sometimes require extra dependencies.  Debian-based
# images are often a good balance.

FROM php:8.2-apache  # Example: PHP 8.2 with Apache.  Change as needed.

# Install any necessary extensions or system packages.  Combine RUN
# commands where possible to reduce image size.

RUN apt-get update && apt-get install -y \
    libzip-dev \ # Example: For zip archive support
    libpng-dev \ # Example: For image manipulation
    libjpeg62-turbo-dev \ # Example: For JPEG support
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install -j$(awk '/^processor/{print $3}' /proc/cpuinfo) zip pdo pdo_mysql gd  # Install extensions. -j utilizes all cores.

# Copy your application code into the container.
COPY . /var/www/html/  # Copies everything in the current directory to /var/www/html

# Set file permissions if needed (important for some frameworks).
# Example for Laravel:
# RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html/storage

# Expose the port your application uses (usually 80 for Apache).
EXPOSE 80

# Set environment variables if required.
# ENV APP_ENV=production
# ENV DATABASE_HOST=your_database_host

# If you need to run any commands before the server starts (e.g., migrations).
# Example for Laravel:
# RUN composer install --no-interaction --no-dev --optimize-autoloader
# RUN php artisan migrate

# The CMD instruction is already defined in the base image (starts Apache).
# If you need to override it, do so here.  For example, if you were using
# a different webserver.
# CMD ["apache2-foreground"] # This is usually not needed because of the base image.


# For production, consider using a multi-stage build to reduce image size.
# This example shows how to compile assets in a separate stage:

# FROM node:16-alpine AS builder  # Use a node image for asset compilation
# WORKDIR /app
# COPY package*.json ./
# RUN npm install
# COPY . .
# RUN npm run build  # Or your build command

# FROM php:8.2-apache  # The final image
# COPY --from=builder /app/dist /var/www/html/dist # Copy only the built assets
# COPY . /var/www/html/ # Copy the rest of the application code
# ... rest of the Dockerfile as before
