# LAMP stack built with Docker Compose
A basic LAMP stack environment built using Docker Compose. It consists of the following:

- Apache
- PHP (Version 8.2)
- MySQL (MySQL 8)
- phpMyAdmin

### Configuration

This package comes with default configuration options. You can modify them by creating `.env` file in your root directory.
To make it easy, just copy the content from `sample.env` file and update the environment variable values as per your need.

## Installation

- Clone this repository on your local computer
- configure .env as needed
- Run command `docker-compose up -d`.

>If port 80 and 443 is occupied, please edit it inside .env __HOST_MACHINE_UNSECURE_HOST_PORT__ and ____HOST_MACHINE_SECURE_HOST_PORT__

Your LAMP stack is now ready!! You can access it via `http://localhost` and phpMyAdmin via `http://localhost:8080`

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

## API Usage
URL: `http:://localhost/api/products`

Method: `GET`

Effective parameters:
- page (for pagination purposes)
- name (search for product name, wild card)
- category (search for category, need to match full category name)
- min_price (search for minimum price, float)
- max_price (search for maximum price, float)

## API Sample
Each call of API will return `status`, `msg`, `data`, if no parameter pass, by default will read page 1 and return all available product

- `status` 0 = Error calling API, 1 = Success
- `msg` Message return after call API, inclusive of error message
- `data` Search result data

### API success sample (with result)
Return info is inside `data`, below is the info of return info
- `data`: result of search data
- `links`: link to generate pagination
- `total`: total result search
- `from`: current search start from
- `to`: current search end at
- `per_page`: return data per page

```
{
    "status":1,
    "msg":"success",
    "data":{
        "data":[
            {
                "name":"Apple",
                "category":"fruit",
                "price":1
            },
            {
                "name":"Banana",
                "category":"fruit",
                "price":3
            },
            {
                "name":"Blue Berry",
                "category":"fruit",
                "price":4
            },
            {
                "name":"Orange",
                "category":"fruit",
                "price":2
            },
            {
                "name":"Strawberry",
                "category":"fruit",
                "price":3
            }
        ],
        "links":[
            {
                "url":null,
                "label":"&laquo; Previous",
                "active":false
            },
            {
                "url":"http://localhost/api/products?page=1",
                "label":"1",
                "active":true
            },
            {
                "url":null,
                "label":"Next &raquo;",
                "active":false
            }
        ],
        "current_page":1,
        "first_page_url":"http://localhost/api/products?page=1",
        "from":1,
        "last_page":1,
        "last_page_url":"http://localhost/api/products?page=1",
        "next_page_url":null,
        "path":"http://localhost/api/products",
        "per_page":10,
        "prev_page_url":null,
        "to":5,
        "total":5
    }
}
```

### API success sample (no result found)
```
{
    "status": 1,
    "msg": "No product found",
    "data": ""
}
```

### API fail sample
```
{
    "status": 0,
    "msg": "Max & min price must be decimal number."
}
```