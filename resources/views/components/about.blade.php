<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>about</title>
</head>
<body>
    <div class="container mx-auto px-4 py-16 max-w-6xl">
        <!-- Main Content Card -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
            <!-- Content Section -->
            <div class="flex flex-col lg:flex-row items-center px-8 lg:px-16 pb-16">
                <!-- Text Content with Orange Bubble Background -->
                <div class="lg:w-1/2 relative mb-8 lg:mb-0 lg:mr-8">
                    <!-- Orange Bubble Background -->
                    <div class="absolute inset-0 bg-orange-500 rounded-full transform -rotate-12 scale-110"></div>
                    <!-- Text Content -->
                    <div class="relative z-10 p-8 text-white">
                        <p class="text-sm lg:text-base leading-relaxed">
                            <?php echo $about_content['description']; ?>
                        </p>
                    </div>
                </div>

                <!-- Chef Image -->
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <img src="{{asset('./imgs/white.png')}}" alt="School Canteen Chef" class="w-64 h-64 lg:w-80 lg:h-80 object-cover rounded-full shadow-lg">
                        <!-- Optional: Add chef hat overlay or styling -->
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="border-t border-gray-200 px-8 lg:px-16 py-8">
                <div class="flex flex-col sm:flex-row justify-between items-center">
                    <!-- Footer Links -->
                    <div class="flex flex-wrap gap-6 mb-4 sm:mb-0">
                        <?php foreach($about_content['footer_links'] as $link): ?>
                            <a href="#" class="text-gray-600 hover:text-orange-500 transition-colors duration-300 text-sm">
                                <?php echo $link; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>

                    <!-- Brand/Logo -->
                    <div class="flex items-center">
                        <div class="bg-black text-white px-4 py-2 rounded-full">
                            <span class="text-sm font-semibold">Kantin sekolah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>