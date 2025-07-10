# Use official WordPress image as the base
FROM wordpress:latest

# Set working directory
WORKDIR /var/www/html

# Copy custom theme/plugin files into the container
# (Assuming you have a "themes" and/or "plugins" directory locally)
COPY . .
# COPY ./wp-content/themes/your-theme /var/www/html/wp-content/themes/your-theme
# COPY ./wp-content/plugins/your-plugin /var/www/html/wp-content/plugins/your-plugin
# COPY ./wp-content/uploads /var/www/html/wp-content/uploads

# Optional: Install additional PHP extensions
# RUN docker-php-ext-install <extension-name>

# Set file permissions (if needed)
RUN chown -R www-data:www-data /var/www/html

# Expose the default HTTP port
EXPOSE 80

# WordPress entrypoint is already set in the base image
 