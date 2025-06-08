<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    
    <!-- Footer -->
    <footer class="bg-gray-200 text-gray-700 py-10 mt-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3">
                
                <!-- Menu Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Menu</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Home</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Why Choose</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Special Menu</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Regular Food</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Special Chef's</a></li>
                    </ul>
                </div>
                
                <!-- Help Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Help</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Privacy</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Terms & Condition</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-gray-800 transition duration-200">Policy</a></li>
                    </ul>
                </div>
                
                <!-- Contact Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="text-gray-600">+123 456 789</li>
                        <li class="text-gray-600">Info@Foodied.Com</li>
                        <li class="text-gray-600">1245, New York, USA</li>
                    </ul>
                </div>
                
                <!-- Newsletter Section -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Subscribe Our Newsletter</h3>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <input 
                            type="email" 
                            placeholder="Enter Your Email" 
                            class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent text-sm"
                        >
                        <button class="bg-green-500 hover:bg-green-600 text-white px-6 py-2 rounded-md transition duration-200 text-sm font-medium">
                            Subscribe
                        </button>
                    </div>
                </div>
                
            </div>
            
            <!-- Bottom Copyright -->
            <div class="mt-8 pt-6 border-t border-gray-300 text-center">
                <p class="text-gray-600">&copy; {{ date('Y') }} Kantin Sekolah. All rights reserved.</p>
                <p class="mt-2 text-sm text-gray-500">Dibuat oleh <span class="font-semibold text-gray-700">Pdev</span></p>
            </div>
        </div>
    </footer>
    
</body>
</html>