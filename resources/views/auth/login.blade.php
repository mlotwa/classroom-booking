<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jisajili | Ingia kwenye Akaunti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tz-diagonal {
            background: linear-gradient(135deg, #1EB53A 45%, #FCD116 45%, #FCD116 50%, #000000 50%, #000000 55%, #FCD116 55%, #FCD116 60%, #00A3DD 60%);
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <nav class="bg-[#000000] border-b-4 border-[#FCD116] p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-[#1EB53A] rounded-full"></div>
                <span class="text-white font-bold text-xl tracking-wider uppercase">Portal</span>
            </div>
            <div class="flex space-x-6 text-sm font-medium">
                <a href="#" class="text-white hover:text-[#00A3DD] transition">Home</a>
                <a href="{{ route('login') }}" class="text-[#FCD116] border-b-2 border-[#FCD116]">iNGIA</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-2xl overflow-hidden">
            
            <div class="h-32 tz-diagonal flex items-center justify-center">
                <div class="bg-white p-3 rounded-full shadow-lg">
                    <i class="fas fa-lock text-2xl text-[#000000]"></i>
                </div>
            </div>

            <div class="p-8 md:p-10">
                <h2 class="text-3xl font-black text-gray-900 text-center mb-2">Karibu tena</h2>
                <p class="text-gray-500 text-center mb-8">Ingiza taarifa zako</p>

                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Barua Pepe</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" name="email" placeholder="email@example.com" 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#00A3DD] focus:border-transparent outline-none transition">
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest">Password</label>
                            <a href="#" class="text-xs text-[#00A3DD] hover:underline">Forgot?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <i class="fas fa-key"></i>
                            </span>
                            <input type="password" name="password" placeholder="••••••••" 
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#000000] focus:border-transparent outline-none transition">
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="w-4 h-4 text-[#1EB53A] border-gray-300 rounded focus:ring-[#1EB53A]">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Keep me logged in</label>
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-[#000000] hover:bg-gray-900 text-white font-bold rounded-xl shadow-xl transform hover:-translate-y-1 transition duration-300 border-b-4 border-[#FCD116]">
                        JISAJILI
                    </button>
                </form>

                <div class="mt-10 text-center">
                    <p class="text-sm text-gray-600">
                        Je,  bado huna akaunti?
                        <a href="{{ route('register') }}" class="text-[#1EB53A] font-extrabold hover:underline">Fungua Akaunti</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#000000] text-white py-6 border-t-4 border-[#00A3DD]">
        <div class="container mx-auto px-4 text-center">
            <p class="text-xs opacity-70">
                &copy; 2026 <span class="text-[#FCD116]">Longuo B</span>. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>