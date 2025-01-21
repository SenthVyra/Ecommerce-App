<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Senth Vyra E-Commerce App - Discover and shop quality products online.">
    <title>Senth Vyra E-Commerce App</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <livewire:header />
    <livewire:hero-section />
    <livewire:product-section />
  </body>
</html>
