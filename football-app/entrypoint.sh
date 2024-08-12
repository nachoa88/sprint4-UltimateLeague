#!/bin/sh

# Run Composer install
composer install

# Install NPM dependencies
npm install

# Build frontend assets
npm run build

# Create storage symlink
php artisan storage:link

# Execute the CMD from the Dockerfile
exec "$@"