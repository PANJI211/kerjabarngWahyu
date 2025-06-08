<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register</title>
</head>
<body class="bg-white flex items-center justify-center min-h-screen relative overflow-hidden">
    <!-- Background Images -->
    <img src="{{ asset('imgs/komtol.png') }}" alt="Decoration Left"
         class="absolute left-10 top-10 w-40 rotate-12 -z-10 ">
    <img src="{{ asset('imgs/ayan.png') }}" alt="Decoration Right"
         class="absolute right-10 bottom-10 w-40 -rotate-12 -z-10">

    <!-- Register Form -->
    <div class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white w-full max-w-md p-8 rounded-xl shadow-lg">
        <h2 class="text-3xl font-bold mb-6 text-center">Sign Up</h2>

        <form action="#" class="space-y-4 text-sm">
            <div>
                <label for="username" class="block font-semibold mb-1">Username</label>
                <input id="username" type="text" placeholder="Username" required
                       class="w-full px-3 py-2 rounded-md text-black bg-white focus:outline-none focus:ring-2 focus:ring-orange-300" />
            </div>
            <div>
                <label for="email" class="block font-semibold mb-1">Email</label>
                <input id="email" type="email" placeholder="Email" required
                       class="w-full px-3 py-2 rounded-md text-black bg-white focus:outline-none focus:ring-2 focus:ring-orange-300" />
            </div>
            <div>
                <label for="password" class="block font-semibold mb-1">Password</label>
                <input id="password" type="password" placeholder="Password" required
                       class="w-full px-3 py-2 rounded-md text-black bg-white focus:outline-none focus:ring-2 focus:ring-orange-300" />
            </div>
            <div>
                <label for="confirm_password" class="block font-semibold mb-1">Confirm Password</label>
                <input id="confirm_password" type="password" placeholder="Confirm Password" required
                       class="w-full px-3 py-2 rounded-md text-black bg-white focus:outline-none focus:ring-2 focus:ring-orange-300" />
                <div class="text-xs text-right mt-1">
                    <a href="#" class="text-white underline">Forgot <strong>Password?</strong></a>
                </div>
            </div>

            <button type="submit"
                    class="w-full bg-white text-orange-500 font-semibold py-2 rounded-md hover:bg-gray-100 transition">
                Sign Up
            </button>
        </form>

        <p class="mt-4 text-center text-sm">
            Already have an account?
            <a href="/login" class="underline font-semibold">Sign In</a>
        </p>
    </div>
</body>
</html>
