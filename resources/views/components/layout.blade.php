<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kantin Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body class="bg-[#2F2D2E]" style="font-family: 'Nunito', sans-serif; scroll-smooth">

    @include('components.navbar')

    {{ $slot }}

    @include('components.footer')

    @vite('resources/js/app.js')
</body>
</html>
