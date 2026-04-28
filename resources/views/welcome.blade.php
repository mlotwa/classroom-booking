<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Ward Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .tz-hero-gradient {
            background: linear-gradient(135deg, #1EB53A 0%, #000000 100%);
        }
        .tz-accent-line {
            height: 4px;
            background: linear-gradient(to right, #1EB53A, #FCD116, #000000, #FCD116, #00A3DD);
        }
    </style>
</head>
<body class="bg-white font-sans overflow-x-hidden">

    <nav class="bg-white border-b border-gray-100 py-4 shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-[#000000] flex items-center justify-center rounded-lg">
                    <i class="fas fa-governance text-[#FCD116] text-xl"></i>
                </div>
                <span class="text-2xl font-black tracking-tighter text-gray-900">WARD<span class="text-[#1EB53A]">CONNECT</span></span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="text-gray-600 hover:text-[#1EB53A] font-medium">About System</a>
                <a href="#features" class="text-gray-600 hover:text-[#1EB53A] font-medium">Features</a>
                <a href="/login" class="text-gray-900 font-bold border-2 border-[#000000] px-6 py-2 rounded-full hover:bg-[#000000] hover:text-white transition">Login</a>
                <a href="/register" class="bg-[#1EB53A] text-white px-6 py-2.5 rounded-full font-bold shadow-lg hover:shadow-[#1EB53A]/30 transition">Get Started</a>
            </div>
        </div>
    </nav>

    <header class="tz-hero-gradient py-24 px-6 text-white text-center relative overflow-hidden">
        <div class="container mx-auto relative z-10">
            <h1 class="text-5xl md:text-7xl font-black mb-6 leading-tight">
                Modernizing Citizen <br> <span class="text-[#FCD116]">Services in Tanzania</span>
            </h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto mb-10">
                A unified digital platform for Longuo B ward citizens to track requests, communicate with officers, and access government services efficiently.
            </p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
                <a href="/register" class="bg-[#FCD116] text-black px-10 py-4 rounded-xl font-black text-lg shadow-xl hover:scale-105 transition transform">
                    Register Now
                </a>
                <a href="#about" class="bg-transparent border-2 border-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-white hover:text-black transition">
                    Learn More
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full tz-accent-line"></div>
    </header>

    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row items-center border border-gray-100">
                
                <div class="w-full md:w-1/2 h-80 md:h-[500px] bg-gray-200 flex items-center justify-center relative">
                    <div class="text-center p-8">
                        <i class="fas fa-image text-6xl text-gray-400 mb-4"></i>
                        <p class="text-gray-500 font-medium italic">Replace this container with your system screenshot or a local landscape image</p>
                    </div>
                    <div class="absolute top-6 left-6 bg-[#00A3DD] text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">
                        Digital Tanzania
                    </div>
                </div>

                <div class="w-full md:w-1/2 p-10 md:p-16">
                    <h2 class="text-3xl font-black text-gray-900 mb-6">
                        Bridging the Gap Between <br> <span class="text-[#1EB53A]">Citizens & Leadership</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        This system is designed specifically for the **Longuo B ward** area. It allows citizens to move away from manual paperwork. By creating an account, you can submit formal requests to the Ward Officer and track the progress in real-time.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-[#1EB53A] mr-3"></i> 
                            Real-time tracking of request status.
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-[#FCD116] mr-3"></i> 
                            Secure digital records for all citizens.
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check-circle text-[#00A3DD] mr-3"></i> 
                            Direct communication with Ward Dispatchers.
                        </li>
                    </ul>
                    <a href="/register" class="inline-block text-[#1EB53A] font-black border-b-2 border-[#1EB53A] hover:text-[#00A3DD] hover:border-[#00A3DD] transition">
                        Explore the Dashboard <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-sm font-bold text-[#00A3DD] uppercase tracking-[0.3em] mb-4 text-center">System Core</h3>
            <h2 class="text-4xl font-black text-gray-900 mb-16">Designed for Simplicity</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-16 h-16 bg-[#1EB53A]/10 text-[#1EB53A] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-[#1EB53A] group-hover:text-white transition">
                        <i class="fas fa-user-shield text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Secure Login</h4>
                    <p class="text-gray-500">Your personal data is encrypted and managed according to national standards.</p>
                </div>

                <div class="p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-16 h-16 bg-[#FCD116]/10 text-[#FCD116] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-[#FCD116] group-hover:text-black transition">
                        <i class="fas fa-paper-plane text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Quick Submission</h4>
                    <p class="text-gray-500">Submit requests for permits, letters, or reports in under 2 minutes.</p>
                </div>

                <div class="p-8 rounded-2xl border border-gray-100 hover:shadow-xl transition group">
                    <div class="w-16 h-16 bg-[#00A3DD]/10 text-[#00A3DD] rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-[#00A3DD] group-hover:text-white transition">
                        <i class="fas fa-mobile-alt text-2xl"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Mobile Ready</h4>
                    <p class="text-gray-500">Access the system from your smartphone or tablet anywhere in the ward.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#000000] text-white py-12">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center border-b border-gray-800 pb-8">
            <div class="mb-6 md:mb-0">
                <div class="text-2xl font-black mb-2">WARD<span class="text-[#FCD116]">CONNECT</span></div>
                <p class="text-gray-400 text-sm">Serving the Longuo B Community.</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-[#1EB53A]"><i class="fab fa-facebook-f text-xl"></i></a>
                <a href="#" class="text-gray-400 hover:text-[#00A3DD]"><i class="fab fa-twitter text-xl"></i></a>
            </div>
        </div>
        <p class="text-center text-gray-600 text-xs mt-8">
            &copy; 2026 Government of Tanzania | Developed for Citizen Request Tracking.
        </p>
    </footer>

</body>
</html>