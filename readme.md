# Laravel Create Frontend

This package adds a Laravel helper method to include the js and css files from [create-frontend](https://github.com/optimistdigital/create-frontend) in your html.
It grabs the right path for the versioned files from asset-manifest.json

## Usage

#### 1. Install the package:

`composer require optimistdigital/laravel-create-frontend`

#### 2. Add this to your html:

`<script src="{{ frontend('app.js') }}"></script>`

#### 3. For production, also include css:

`<link rel="stylesheet" type="text/css" href={{ frontend('app.css') }}>`
