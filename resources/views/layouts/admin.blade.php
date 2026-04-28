<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | System Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

    <nav class="fixed w-full z-10 top-0 bg-[#000000] border-b-4 border-[#FCD116] h-16 flex items-center px-6 justify-between shadow-2xl">
        <div class="flex items-center">
            <div class="w-8 h-8 bg-[#1EB53A] rounded-sm rotate-45 mr-4 border border-[#FCD116]"></div>
            <span class="text-white font-bold text-xl tracking-tighter">ADMIN <span class="text-[#00A3DD]">SYSTEM</span></span>
        </div>
        <div class="flex items-center space-x-6">
            <div class="relative">
                <i class="fas fa-bell text-white text-lg"></i>
                <span class="absolute -top-2 -right-2 bg-red-600 text-white text-[10px] rounded-full px-1">4</span>
            </div>
            <div class="h-8 w-8 rounded-full bg-gray-600 border-2 border-[#1EB53A]"></div>
        </div>
    </nav>

    <div class="flex pt-16">
        <aside class="w-64 bg-[#000000] h-[calc(100vh-64px)] fixed overflow-y-auto border-r border-gray-800">
            <div class="p-6">
                <p class="text-gray-500 text-xs font-bold uppercase mb-4 tracking-widest">Main Management</p>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center text-white p-3 rounded-lg bg-[#1EB53A] font-semibold">
                        <i class="fas fa-users-cog mr-3"></i> User Management
                    </a>
                    <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                        <i class="fas fa-clipboard-list mr-3 text-[#FCD116]"></i> All Requests
                    </a>
                    <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                        <i class="fas fa-chart-line mr-3 text-[#00A3DD]"></i> System Reports
                    </a>
                </nav>

                <p class="text-gray-500 text-xs font-bold uppercase mt-8 mb-4 tracking-widest">System Settings</p>
                <nav class="space-y-1">
                    <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition">
                        <i class="fas fa-shield-alt mr-3"></i> Permissions
                    </a>
                    <a href="#" class="flex items-center text-gray-400 hover:text-white p-3 rounded-lg hover:bg-gray-900 transition text-red-500">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </a>
                </nav>
            </div>
        </aside>

        <main class="ml-64 w-full p-8">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">User Management</h1>
                    <p class="text-gray-600">Overview of all registered citizens and their activity.</p>
                </div>
                <button class="bg-[#00A3DD] hover:bg-[#008cc0] text-white px-6 py-2 rounded-lg font-bold shadow-lg transition">
                    <i class="fas fa-user-plus mr-2"></i> Add New User
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border-b-4 border-[#1EB53A]">
                    <p class="text-gray-500 text-sm font-bold">Total Citizens</p>
                    <p class="text-3xl font-black text-gray-800">1,284</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-b-4 border-[#FCD116]">
                    <p class="text-gray-500 text-sm font-bold">Pending Requests</p>
                    <p class="text-3xl font-black text-gray-800">42</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border-b-4 border-[#00A3DD]">
                    <p class="text-gray-500 text-sm font-bold">Active Staff</p>
                    <p class="text-3xl font-black text-gray-800">12</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-[#000000] text-white">
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold uppercase">Name & Email</th>
                            <th class="px-6 py-4 text-sm font-bold uppercase">Role</th>
                            <th class="px-6 py-4 text-sm font-bold uppercase">Requests</th>
                            <th class="px-6 py-4 text-sm font-bold uppercase text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-bold text-gray-800">Juma Hamisi</div>
                                <div class="text-xs text-gray-500">juma.h@example.com</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-bold">Citizen</span>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700">3 Open</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center space-x-2">
                                    <button title="View Requests" class="p-2 bg-blue-50 text-[#00A3DD] rounded hover:bg-[#00A3DD] hover:text-white transition">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button title="Edit Profile" class="p-2 bg-yellow-50 text-yellow-600 rounded hover:bg-[#FCD116] hover:text-black transition">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button title="Delete User" class="p-2 bg-red-50 text-red-600 rounded hover:bg-red-600 hover:text-white transition">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4">
                                <div class="font-bold text-gray-800">Amani Sarah</div>
                                <div class="text-xs text-gray-500">s.amani@domain.com</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-bold">Dispatcher</span>
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-700">12 Assigned</td>
                            <td class="px-6 py-4">
                                <div class="flex justify-center space-x-2">
                                    <button class="p-2 bg-blue-50 text-[#00A3DD] rounded hover:bg-[#00A3DD] hover:text-white transition"><i class="fas fa-eye"></i></button>
                                    <button class="p-2 bg-yellow-50 text-yellow-600 rounded hover:bg-[#FCD116] hover:text-black transition"><i class="fas fa-edit"></i></button>
                                    <button class="p-2 bg-red-50 text-red-600 rounded hover:bg-red-600 hover:text-white transition"><i class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-4 bg-gray-50 text-right text-xs text-gray-500 font-medium">
                    Showing 2 of 1,284 users
                </div>
            </div>
        </main>
    </div>

</body>
</html>