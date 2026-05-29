#!/usr/bin/env bash

# Nusantara Extract & Co. - Enterprise Group Ecosystem Deployment Script
# Designed for automated execution on clean Ubuntu VPS platforms.
# Strictly professional plain text log notifications only.

set -e

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
echo "--------------------------------------------------------"
echo "Nusantara Extract & Co. - Enterprise System Setup Initiated"
echo "--------------------------------------------------------"
echo "Root directory recognized: $ROOT_DIR"

# 1. System Requirements & Dependency Verifications
echo "Checking system dependency: Docker..."
if ! command -v docker &> /dev/null; then
    echo "Docker engine not detected. Executing installation for Ubuntu..."
    sudo apt-get update -y
    sudo apt-get install -y apt-transport-https ca-certificates curl gnupg lsb-release
    sudo mkdir -p /etc/apt/keyrings
    curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
    echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
$(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
    sudo apt-get update -y
    sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin
    echo "Docker engine successfully installed."
else
    echo "Docker engine is already installed."
fi

echo "Checking system dependency: Docker Compose..."
if ! docker compose version &> /dev/null; then
    echo "Docker Compose plugin not detected. Installing..."
    sudo apt-get update -y
    sudo apt-get install -y docker-compose-plugin
    echo "Docker Compose plugin successfully installed."
else
    echo "Docker Compose plugin is already installed."
fi

# 2. Establish Network Topology
echo "Provisioning enterprise shared network: nusantara-global-network..."
if ! docker network inspect nusantara-global-network &>/dev/null; then
    docker network create nusantara-global-network
    echo "Network nusantara-global-network successfully created."
else
    echo "Network nusantara-global-network already exists."
fi

# 3. Application Deployment Configurations
APPS=(
    "parent-sso:parent-sso-db:db_nusantara_parent"
    "child-factory:child-factory-db:db_nusantara_factory"
    "child-logistics:child-logistics-db:db_nusantara_logistics"
    "child-commerce/brand-coffee:brand-coffee-db:db_commerce_coffee"
    "child-commerce/brand-wellness:brand-wellness-db:db_commerce_wellness"
)

# 4. Sequenced Deployment Orchestration
for APP_INFO in "${APPS[@]}"; do
    IFS=":" read -r APP_DIR DB_HOST DB_NAME <<< "$APP_INFO"
    echo "--------------------------------------------------------"
    echo "Starting deployment sequence for: $APP_DIR"
    echo "--------------------------------------------------------"

    cd "$ROOT_DIR/$APP_DIR"

    # A. Provision Environment Configuration
    if [ ! -f .env ]; then
        echo "Copying local environment configuration from template..."
        cp .env.example .env
    else
        echo "Existing local .env file recognized."
    fi

    # B. Inject Environment Settings
    echo "Updating environment credentials in .env..."
    sed -i 's/^DB_HOST=.*/DB_HOST='"$DB_HOST"'/' .env
    sed -i 's/^DB_DATABASE=.*/DB_DATABASE='"$DB_NAME"'/' .env
    sed -i 's/^DB_USERNAME=.*/DB_USERNAME=nusantara/' .env
    sed -i 's/^DB_PASSWORD=.*/DB_PASSWORD=root/' .env

    # C. Start Isolated Container Ecosystem
    echo "Launching container cluster via Docker Compose..."
    docker compose up -d --build

    # D. Composer Package Ingestion
    echo "Installing application Composer dependencies..."
    docker compose exec -T app composer install --no-interaction --optimize-autoloader

    # E. Cryptographic Token Setup
    echo "Generating cryptographic application key..."
    docker compose exec -T app php artisan key:generate --force

    # F. Synchronize Relational Data Schemas
    echo "Awaiting database engine validation for $DB_HOST..."
    until docker compose exec -T db mysqladmin ping -h"localhost" -u"nusantara" -p"root" --silent; do
        sleep 2
    done
    echo "Database ready. Running Laravel database migrations..."
    docker compose exec -T app php artisan migrate --force

    # G. Establish File System Permissions
    echo "Applying strict storage and framework cache file permissions..."
    docker compose exec -T app chmod -R 775 storage bootstrap/cache
    docker compose exec -T app chown -R www-data:www-data storage bootstrap/cache

    echo "Application sequence for $APP_DIR completed successfully."
    echo ""
done

echo "--------------------------------------------------------"
echo "Master deployment completed successfully for the ecosystem."
echo "--------------------------------------------------------"
