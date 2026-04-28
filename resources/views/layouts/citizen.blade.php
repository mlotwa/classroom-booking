<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav class="fixed w-full z-10 top-0 bg-[#000000] border-b-4 border-[#FCD116] h-16 flex items-center px-6 justify-between">
        <div class="flex items-center">
            <div class="w-8 h-8 bg-[#1EB53A] rounded-full mr-3"></div>
            <span class="text-white font-bold text-xl tracking-wider">CITIZEN PORTAL</span>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-white text-sm hidden md:block">Welcome, <span class="text-[#00A3DD] font-semibold">User</span></span>
            <button class="bg-[#1EB53A] text-white px-4 py-1 rounded hover:bg-opacity-80 transition text-sm">Logout</button>
        </div>
    </nav>

    <div class="flex pt-16">
        <aside class="w-64 bg-[#000000] h-[calc(100vh-64px)] fixed shadow-xl border-r border-gray-800">
            <div class="p-4 space-y-2">
                <a href="#" class="flex items-center text-white p-3 rounded-lg bg-[#1EB53A] transition">
                    <i class="fas fa-home mr-3"></i> Dashboard
                </a>
                <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                    <i class="fas fa-file-alt mr-3 text-[#00A3DD]"></i> My Requests
                </a>
                <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                    <i class="fas fa-plus-circle mr-3 text-[#FCD116]"></i> New Request
                </a>
                <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                    <i class="fas fa-history mr-3"></i> History
                </a>
                <hr class="border-gray-800 my-4">
                <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                    <i class="fas fa-user-cog mr-3"></i> Settings
                </a>
            </div>
        </aside>

        <main class="ml-64 w-full p-8">
            <div class="container mx-auto">
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Citizen Overview</h1>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="md:col-span-2 bg-white rounded-xl shadow-md overflow-hidden border-l-8 border-[#1EB53A]">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-bold text-[#000000]">Personal Information</h3>
                                <span class="bg-[#00A3DD] text-white text-xs px-2 py-1 rounded">Active Citizen</span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-bold">Full Name</p>
                                    <p class="text-gray-800 font-medium">John Doe</p>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-bold">Email</p>
                                    <p class="text-gray-800 font-medium">john.doe@example.com</p>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-bold">Ward/Location</p>
                                    <p class="text-gray-400 italic text-sm">Not provided yet</p>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-500 uppercase font-bold">Phone</p>
                                    <p class="text-gray-400 italic text-sm">Not provided yet</p>
                                </div>
                            </div>
                            <button class="mt-6 text-sm font-bold text-[#1EB53A] hover:underline">
                                <i class="fas fa-edit mr-1"></i> Update My Profile
                            </button>
                        </div>
                    </div>

                    <div class="bg-[#00A3DD] rounded-xl shadow-md p-6 text-white flex flex-col justify-between">
                        <div>
                            <h3 class="text-lg font-bold mb-2">Need Assistance?</h3>
                            <p class="text-sm opacity-90">Submit a new request to your local ward office for immediate tracking.</p>
                        </div>
                        <button class="mt-4 bg-white text-[#00A3DD] font-bold py-2 px-4 rounded hover:bg-[#FCD116] hover:text-black transition">
                            Create Request
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="bg-gray-50 border-b border-gray-100 p-4 font-bold text-gray-700">
                        My Recent Requests
                    </div>
                    <div class="p-6 text-center py-12">
                        <i class="fas fa-folder-open text-gray-300 text-5xl mb-4"></i>
                        <p class="text-gray-500">You haven't submitted any requests yet. Information added here will appear once you start using the system.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>