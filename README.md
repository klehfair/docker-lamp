# LAMP stack built with Docker Compose
A basic LAMP stack environment built using Docker Compose. It consists of the following:

- PHP (Version 8.2)
- Apache
- MySQL (MySQL 8)
- phpMyAdmin

## Installation

- Clone this repository on your local computer
- configure .env as needed
- Run command `docker-compose up -d`.

Your LAMP stack is now ready!! You can access it via `http://localhost`.

### Configuration

This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.
To make it easy, just copy the content from `sample.env` file and update the environment variable values as per your need.

### Configuration Variables

There are following configuration variables available and you can customize them by overwritting in your own `.env` file.

---

## Laravel Setup
- Laravel version 10.48.16

## Initial Deployment (After setup docker)
- Go in to **html** folder
- Set up your `.env` file at this folder. To make it easy, just copy the content from `.env.example` file and use as per your need.
- run **composer install** 
- run **php artisan migrate**
- run **php artisan db:seed --class=AddProducts** to create default role and permission
you can edit default seeder at **database/seeders/** folder

## API visit
URL: `http:://localhost/api/products`
Effective parameters:
- page (for pagination purposes)
- name (search for product name, wild card)
- category (search for category, need to match full category name)
- min_price (search for minimum price, float)
- max_price (search for maximum price, float)