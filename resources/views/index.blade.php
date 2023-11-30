<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Transport System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
          <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-900">

        <!-- NavBar -->
        @include('components.navbar')

        <!-- Form Submit -->
        @include('components.form')

        <!-- Menu Showing Stuff  -->
        @include('components.table')

    </body>
</html>
