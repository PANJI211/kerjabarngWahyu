<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')  
    <title>Layout_Home</title>
</head>
<body>
    <x-navbar></x-navbar>
    <x-jumbotron></x-jumbotron>
    

    {{ $slot }}
  

    @vite('resources/js/app.js')
</body>
</html>