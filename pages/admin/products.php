<?php include "include/header.php"; ?>

    <div class="mb-6 flex justify-between items-center">
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-search text-gray-400"></i>
            </span>
            <input type="text" class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" placeholder="Search products...">
        </div>
        <a href="?page=admin/add-product" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-lg transition-colors flex items-center gap-2">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold">Product</th>
                        <th class="p-4 font-semibold">Category</th>
                        <th class="p-4 font-semibold">Price</th>
                        <th class="p-4 font-semibold">Stock</th>
                        <th class="p-4 font-semibold">Status</th>
                        <th class="p-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                                    <img src="https://picsum.photos/100/100?random=1" alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium text-gray-900">Wireless Headphones</p>
                                    <p class="text-xs text-gray-500">SKU: WH-12345</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Electronics</td>
                        <td class="p-4 font-medium text-gray-900">$79.99</td>
                        <td class="p-4 text-gray-600">45</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                                    <img src="https://picsum.photos/100/100?random=2" alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium text-gray-900">Smart Watch Series 5</p>
                                    <p class="text-xs text-gray-500">SKU: SW-55555</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Accessories</td>
                        <td class="p-4 font-medium text-gray-900">$199.50</td>
                        <td class="p-4 text-gray-600">12</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Active</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                                    <img src="https://picsum.photos/100/100?random=3" alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium text-gray-900">Running Shoes</p>
                                    <p class="text-xs text-gray-500">SKU: RS-98765</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Fashion</td>
                        <td class="p-4 font-medium text-gray-900">$89.00</td>
                        <td class="p-4 text-gray-600">0</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Out of Stock</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                                    <img src="https://picsum.photos/100/100?random=4" alt="Product" class="w-full h-full object-cover">
                                </div>
                                <div class="ml-3">
                                    <p class="font-medium text-gray-900">Coffee Maker</p>
                                    <p class="text-xs text-gray-500">SKU: CM-11111</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Home</td>
                        <td class="p-4 font-medium text-gray-900">$45.00</td>
                        <td class="p-4 text-gray-600">23</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Low Stock</span>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <button class="text-blue-500 hover:text-blue-700 transition-colors"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-700 transition-colors"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <p class="text-sm text-gray-500">Showing 1 to 4 of 356 entries</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50">Previous</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>

<?php include "include/footer.php"; ?>
