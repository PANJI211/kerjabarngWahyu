<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register</title>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">
    <img src="{{ asset('imgs/komtol.png') }}" alt=""
    class="absolute left-30 w-150 rotate-25 -z-10">
    <img src="{{ asset('imgs/ayan.png') }}" alt=""
    class="absolute right-30 w-150 -z-10 -rotate-15 ">
   
      <!-- Left (Form) -->
      <div class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white max-w-2xl h-[670px] p-10 rounded-2xl items-center flex-1">

        
     @if (session('failed'))
      <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-700 border border-red-300">
        <strong>Login Failed:</strong> {{ session('failed') }}
      </div>
    @endif
        <h2 class="text-4xl font-bold mb-6 text-center">Sign Up</h2>
        <form class="space-y-4" action="/Register" method="post" >
          @csrf

          {{-- email --}}
          @error('Name')
          <small class="text-danger">{{$message}}</small>
          @enderror
          <div>
            <label class="block font-semibold mb-1" for="name">Name</label>
            <input
            value="{{ old('name') }}"
              id="name"
              type="text"
              name="name"
              placeholder="name"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />
          </div>

          @error('email')
          <small class="text-danger">{{$message}}</small>
          @enderror
          <div>
            <label class="block font-semibold mb-1" for="Email">Email</label>
            <input
                value="{{ old('email') }}"
              id="email"
              type="email"
              name="email"
              placeholder="Email"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />
          </div>
          
          {{-- password --}}
          @error('password')
          <small class="text-danger">{{$message}}</small>
          @enderror
          <div>
            <label class="block font-semibold mb-1" for="password">Password</label>
            <input
            id="password"
            type="password"
            name="password"
            placeholder="Password"
            class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
          />
          </div>
          @error('confirm_password')
          <small class="text-danger">{{$message}}</small>
          @enderror
          <div>
            <label class="block font-semibold mb-1" for="password">confirm password</label>
            <input
            id="confirm_password"
            type="password"
            name="confirm_password"
            placeholder="confirm password"
            class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
          />
            <div class="text-sm text-right mt-1">
              <a href="#" class="text-white underline">Forgot <strong>Password?</strong></a>
            </div>
          </div>
          
            <button
            type="submit"
            class="w-full bg-white text-orange-500 font-bold py-2 rounded-md hover:bg-gray-100 transition"
          >
            Sign Up
          </button>
          
          
        </form>
        <p class="mt-6 text-center text-white">
          Don't have an account?
          <a href="{{ '/login' }}" class="underline font-semibold">Sign in</a>
        </p>
      </div>

  
  </body>
</html>