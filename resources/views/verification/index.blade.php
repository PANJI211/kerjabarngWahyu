<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <img src="{{ asset('imgs/komtol.png') }}" alt=""
    class="absolute left-30 w-150 rotate-25 -z-10">
    <img src="{{ asset('imgs/ayan.png') }}" alt=""
    class="absolute right-30 w-150 -z-10 -rotate-15 ">
   
      <!-- Left (Form) -->
      <div class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white max-w-2xl h-[500px] p-10 rounded-2xl items-center flex-1">

        
     @if (session('failed'))
      <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700 border border-red-300">
        <strong>Login Failed:</strong> {{ session('failed') }}
      </div>
    @endif
        <h2 class="text-4xl font-bold mb-6 text-center">please verify your account</h2>
        <a href="/send-otp" class="w-20 h-10 rounded-xl bg-blue-700">send otp tof your email</a>
        
      </div>

  
  </body>
</html>