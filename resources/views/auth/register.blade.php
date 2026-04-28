<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kufungu  Akaunti</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tz-gradient {
            background: linear-gradient(135deg, #1EB53A 0%, #FCD116 25%, #000000 50%, #FCD116 75%, #00A3DD 100%);
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <nav class="bg-[#000000] border-b-4 border-[#FCD116] p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-[#1EB53A] rounded-full"></div>
                <span class="text-white font-bold text-xl tracking-wider">PORTAL</span>
            </div>
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="#" class="text-white hover:text-[#00A3DD] transition">Home</a>
                <a href="#" class="text-white hover:text-[#00A3DD] transition">About</a>
                <a href="#" class="text-[#FCD116] border-b-2 border-[#FCD116]">Register</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="max-w-md w-full bg-white rounded-2xl shadow-2xl overflow-hidden border-t-8 border-[#1EB53A]">
            <div class="p-8">
                <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-2">Fungua Akaunti</h2>
                <p class="text-gray-500 text-center mb-8">Join our community today</p>



                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Jina Kamili</label>
                        <input type="text" name="name" placeholder="Paul Kunyanja" 
                            class="w-full mt-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#1EB53A] focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Barua Pepe</label>
                        <input type="email" name="email" placeholder="email@example.com" 
                            class="w-full mt-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#00A3DD] focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Password</label>
                        <input type="password" name="password" placeholder="••••••••" 
                            class="w-full mt-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#000000] focus:border-transparent outline-none transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Confirm Password</label>
                        <input type="password" name="confirm_password"placeholder="••••••••" 
                            class="w-full mt-1 px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-[#000000] focus:border-transparent outline-none transition">
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-[#1EB53A] hover:bg-[#168a2c] text-white font-bold rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200">
                        JISAJILI
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">Tayari una Akaunti ? <a href="{{ route('login') }}" class="text-[#00A3DD] font-bold hover:underline">Ingia</a></p>
                </div>
            </div>
            
            <div class="h-2 tz-gradient"></div>
        </div>
    </main>

    <footer class="bg-[#000000] text-white py-8 mt-auto border-t-4 border-[#00A3DD]">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-sm">
                    &copy; 2026 <span class="text-[#FCD116]">Longuo B Ward</span>. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-[#1EB53A] transition text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="hover:text-[#00A3DD] transition text-xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-[#FCD116] transition text-xl"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>