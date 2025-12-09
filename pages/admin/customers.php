<?php include "include/header.php"; ?>

    <div class="mb-6 flex justify-between items-center">
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-search text-gray-400"></i>
            </span>
            <input type="text" class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" placeholder="Search customers...">
        </div>
        <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors flex items-center gap-2">
            <i class="fas fa-download"></i> Export CSV
        </button>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold">Customer</th>
                        <th class="p-4 font-semibold">Email</th>
                        <th class="p-4 font-semibold">Phone</th>
                        <th class="p-4 font-semibold">Orders</th>
                        <th class="p-4 font-semibold">Total Spent</th>
                        <th class="p-4 font-semibold">Joined</th>
                        <th class="p-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold mr-3">JD</div>
                                <div>
                                    <p class="font-medium text-gray-900">John Doe</p>
                                    <p class="text-xs text-gray-500">New York, USA</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">john.doe@example.com</td>
                        <td class="p-4 text-gray-600">+1 (555) 123-4567</td>
                        <td class="p-4 text-gray-900">12</td>
                        <td class="p-4 font-medium text-gray-900">$1,245.00</td>
                        <td class="p-4 text-gray-600">Jan 15, 2023</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-secondary/10 text-secondary flex items-center justify-center font-bold mr-3">JS</div>
                                <div>
                                    <p class="font-medium text-gray-900">Jane Smith</p>
                                    <p class="text-xs text-gray-500">London, UK</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">jane.smith@example.com</td>
                        <td class="p-4 text-gray-600">+44 20 7123 4567</td>
                        <td class="p-4 text-gray-900">8</td>
                        <td class="p-4 font-medium text-gray-900">$850.50</td>
                        <td class="p-4 text-gray-600">Feb 20, 2023</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold mr-3">RJ</div>
                                <div>
                                    <p class="font-medium text-gray-900">Robert Johnson</p>
                                    <p class="text-xs text-gray-500">Toronto, Canada</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">robert.j@example.com</td>
                        <td class="p-4 text-gray-600">+1 (416) 555-0123</td>
                        <td class="p-4 text-gray-900">5</td>
                        <td class="p-4 font-medium text-gray-900">$420.00</td>
                        <td class="p-4 text-gray-600">Mar 10, 2023</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold mr-3">ED</div>
                                <div>
                                    <p class="font-medium text-gray-900">Emily Davis</p>
                                    <p class="text-xs text-gray-500">Sydney, Australia</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">emily.d@example.com</td>
                        <td class="p-4 text-gray-600">+61 2 9876 5432</td>
                        <td class="p-4 text-gray-900">15</td>
                        <td class="p-4 font-medium text-gray-900">$2,100.00</td>
                        <td class="p-4 text-gray-600">Apr 05, 2023</td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <p class="text-sm text-gray-500">Showing 1 to 4 of 89 entries</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50">Previous</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>

<?php include "include/footer.php"; ?>
