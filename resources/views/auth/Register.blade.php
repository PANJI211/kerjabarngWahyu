<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Register</title>
</head>
<body class="bg-gradient-to-br from-orange-400 via-orange-500 to-yellow-500 min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-md">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            
            @if (session('failed'))
            <div class="mb-6 p-4 rounded-lg bg-red-50 text-red-700 border border-red-200">
                <strong>Registration Failed:</strong> {{ session('failed') }}
            </div>
            @endif
            
            <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Sign Up</h2>
            
            <form class="space-y-5" action="/Register" method="post">
                @csrf

                <div>
                    @error('Name')
                    <small class="text-red-500 text-sm">{{$message}}</small>
                    @enderror
                    <label class="block font-semibold mb-2 text-gray-700" for="name">Name</label>
                    <input
                        value="{{ old('name') }}"
                        id="name"
                        type="text"
                        name="name"
                        placeholder="Full Name"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                    />
                </div>

                <div>
                    @error('email')
                    <small class="text-red-500 text-sm">{{$message}}</small>
                    @enderror
                    <label class="block font-semibold mb-2 text-gray-700" for="email">Email</label>
                    <input
                        value="{{ old('email') }}"
                        id="email"
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                    />
                </div>
                
                <div>
                    @error('password')
                    <small class="text-red-500 text-sm">{{$message}}</small>
                    @enderror
                    <label class="block font-semibold mb-2 text-gray-700" for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Password"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                    />
                </div>

                <div>
                    @error('confirm_password')
                    <small class="text-red-500 text-sm">{{$message}}</small>
                    @enderror
                    <label class="block font-semibold mb-2 text-gray-700" for="confirm_password">Confirm Password</label>
                    <input
                        id="confirm_password"
                        type="password"
                        name="confirm_password"
                        placeholder="Confirm Password"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all"
                    />
                </div>
                
                <button
                    type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-yellow-500 text-white font-bold py-3 rounded-lg hover:from-orange-600 hover:to-yellow-600 transform hover:scale-105 transition-all duration-200 shadow-lg mt-6"
                >
                    Sign Up
                </button>
            </form>
            
            <p class="mt-6 text-center text-gray-600">
                Already have an account?
                <a href="{{ '/login' }}" class="text-orange-600 hover:text-orange-800 underline font-semibold">Sign In</a>
            </p>
        </div>
    </div>
</body>
</html>