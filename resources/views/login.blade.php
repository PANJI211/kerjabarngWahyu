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
      <div class="bg-orange-400 text-white max-w-2xl h-[500px] p-10 rounded-2xl items-center flex-1">
        <h2 class="text-4xl font-bold mb-6 text-center">Sign In</h2>
       

        <form class="space-y-4" onsubmit="event.preventDefault(); window.location.href='/Home';">

          <div>
            <label class="block font-semibold mb-1" for="Username">Username</label>
            <input
              id="Username"
              type="text"
              placeholder="Username"
              required
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />
          </div>
          <div>
            <label class="block font-semibold mb-1" for="Email">Email</label>
            <input
              id="Email"
              type="email"
              placeholder="Email"
              required
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />
          </div>
          <div>
            <label class="block font-semibold mb-1" for="password">Password</label>
            <input
            id="password"
            type="password"
            placeholder="Password"
            required  
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
            Sign In
          </button>
          
          
        </form>
        <p class="mt-6 text-center text-white">
          Don't have an account?
          <a href="/Register" class="underline font-semibold">Sign Up</a>
        </p>
      </div>

  
  </body>
</html>