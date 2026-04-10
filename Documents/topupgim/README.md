# TopUpGim - Laravel 11

Top Up Game platform converted to Laravel 11.

## Requirements
- PHP >= 8.2
- Composer
- MySQL / SQLite

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Structure

| Route | Controller | View |
|---|---|---|
| `/` | HomeController@index | home |
| `/auth/sign-in` | AuthController@signIn | auth.sign-in |
| `/auth/register` | AuthController@register | auth.register |
| `/auth/forgot-password` | AuthController@forgotPassword | auth.forgot-password |
| `/category/{category}` | CategoryController@show | category.{name} |
| `/product/{slug}/{id}` | ProductController@show | product.{slug}.{id} |
| `/page/{slug}` | PageController@show | page.{slug} |
| `/order/pulsa` | OrderController@pulsa | order.pulsa |
| `/search` | SearchController@index | search |
