<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Account Verification</title>
</head>
<body class=" flex items-center justify-center min-h-screen">
    
    <!-- Background Images (tetap seperti aslinya) -->
    <img src="{{ asset('imgs/komtol.png') }}" alt=""
    class="absolute left-30 w-150 rotate-25 -z-10">
    <img src="{{ asset('imgs/ayan.png') }}" alt=""
    class="absolute right-30 w-150 -z-10 -rotate-15 ">
   
    <!-- Main Content -->
    <div class="w-full max-w-sm mx-4">
        
        <!-- Error Alert (tetap logic aslinya) -->
        @if (session('failed'))
        <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700 border border-red-300">
            <strong>Login Failed:</strong> {{ session('failed') }}
        </div>
        @endif

        <!-- Simple Card -->
        <div class="bg-white rounded-lg shadow-lg p-8 text-center">
            
            <!-- Title -->
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                Verification
            </h2>
            
            <!-- Subtitle --> 
            <p class="text-gray-600 mb-8 text-sm">
                Please verify your account!
            </p>
            
            <!-- Button (tetap logic aslinya) -->
            <form action="/verify" method="post" >
              @csrf
              <input type="hidden" value="register" name="type">
              
              <button type="submit" 
                 class="w-full inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-3 px-6 rounded-md transition-colors duration-200">
                  Send OTP to your email
            </button>
              
            </form>
        </div>
    </div>
</body>
</html>