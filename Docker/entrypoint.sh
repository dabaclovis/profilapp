#!/bin/bash
if [ ! -f ".env" ]; then
    cp .env.example .env
    php artisan key:generate
else
    echo "env file exists."
fi
