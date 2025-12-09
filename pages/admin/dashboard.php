<?php include "include/header.php"; ?>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-primary">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Sales</p>
                    <h3 class="text-2xl font-bold text-gray-800">$124,592</h3>
                </div>
                <div class="p-3 bg-primary/10 rounded-full text-primary">
                    <i class="fas fa-dollar-sign text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center font-medium">
                    <i class="fas fa-arrow-up mr-1"></i> 12.5%
                </span>
                <span class="text-gray-400 ml-2">vs last month</span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-secondary">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Orders</p>
                    <h3 class="text-2xl font-bold text-gray-800">1,452</h3>
                </div>
                <div class="p-3 bg-secondary/10 rounded-full text-secondary">
                    <i class="fas fa-shopping-bag text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-green-500 flex items-center font-medium">
                    <i class="fas fa-arrow-up mr-1"></i> 8.2%
                </span>
                <span class="text-gray-400 ml-2">vs last month</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Products</p>
                    <h3 class="text-2xl font-bold text-gray-800">356</h3>
                </div>
                <div class="p-3 bg-blue-100 rounded-full text-blue-500">
                    <i class="fas fa-box text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-blue-500 flex items-center font-medium">
                    <i class="fas fa-plus mr-1"></i> 24
                </span>
                <span class="text-gray-400 ml-2">new items</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">New Customers</p>
                    <h3 class="text-2xl font-bold text-gray-800">89</h3>
                </div>
                <div class="p-3 bg-orange-100 rounded-full text-orange-500">
                    <i class="fas fa-users text-xl"></i>
                </div>
            </div>
            <div class="mt-4 flex items-center text-sm">
                <span class="text-red-500 flex items-center font-medium">
                    <i class="fas fa-arrow-down mr-1"></i> 2.1%
                </span>
                <span class="text-gray-400 ml-2">vs last month</span>
            </div>
        </div>
    </div>

    <!-- Recent Orders & Top Products -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Orders -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                <h3 class="text-lg font-bold text-gray-800">Recent Orders</h3>
                <button class="text-primary hover:text-primary-dark text-sm font-medium">View All</button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider">
                            <th class="p-4 font-semibold">Order ID</th>
                            <th class="p-4 font-semibold">Customer</th>
                            <th class="p-4 font-semibold">Product</th>
                            <th class="p-4 font-semibold">Amount</th>
                            <th class="p-4 font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 font-medium text-gray-900">#ORD-7829</td>
                            <td class="p-4 text-gray-600">John Doe</td>
                            <td class="p-4 text-gray-600">Wireless Headphones</td>
                            <td class="p-4 font-medium text-gray-900">$79.99</td>
                            <td class="p-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 font-medium text-gray-900">#ORD-7828</td>
                            <td class="p-4 text-gray-600">Jane Smith</td>
                            <td class="p-4 text-gray-600">Smart Watch Series 5</td>
                            <td class="p-4 font-medium text-gray-900">$199.50</td>
                            <td class="p-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 font-medium text-gray-900">#ORD-7827</td>
                            <td class="p-4 text-gray-600">Robert Johnson</td>
                            <td class="p-4 text-gray-600">Gaming Mouse</td>
                            <td class="p-4 font-medium text-gray-900">$45.00</td>
                            <td class="p-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Processing</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 font-medium text-gray-900">#ORD-7826</td>
                            <td class="p-4 text-gray-600">Emily Davis</td>
                            <td class="p-4 text-gray-600">Mechanical Keyboard</td>
                            <td class="p-4 font-medium text-gray-900">$120.00</td>
                            <td class="p-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Completed</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="p-4 font-medium text-gray-900">#ORD-7825</td>
                            <td class="p-4 text-gray-600">Michael Wilson</td>
                            <td class="p-4 text-gray-600">USB-C Hub</td>
                            <td class="p-4 font-medium text-gray-900">$35.99</td>
                            <td class="p-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Cancelled</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Top Products -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-800">Top Selling Products</h3>
            </div>
            <div class="p-6 space-y-6">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                        <img src="https://picsum.photos/100/100?random=1" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="text-sm font-medium text-gray-900">Wireless Headphones</h4>
                        <p class="text-xs text-gray-500">Electronics</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900">$12.5k</p>
                        <p class="text-xs text-green-500">124 sales</p>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                        <img src="https://picsum.photos/100/100?random=2" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="text-sm font-medium text-gray-900">Smart Watch</h4>
                        <p class="text-xs text-gray-500">Accessories</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900">$9.8k</p>
                        <p class="text-xs text-green-500">89 sales</p>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                        <img src="https://picsum.photos/100/100?random=3" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="text-sm font-medium text-gray-900">Running Shoes</h4>
                        <p class="text-xs text-gray-500">Fashion</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900">$8.2k</p>
                        <p class="text-xs text-green-500">65 sales</p>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 overflow-hidden">
                        <img src="https://picsum.photos/100/100?random=4" alt="Product" class="w-full h-full object-cover">
                    </div>
                    <div class="ml-4 flex-1">
                        <h4 class="text-sm font-medium text-gray-900">Coffee Maker</h4>
                        <p class="text-xs text-gray-500">Home</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-bold text-gray-900">$5.4k</p>
                        <p class="text-xs text-green-500">42 sales</p>
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-gray-100 text-center">
                <a href="#" class="text-primary text-sm font-medium hover:underline">View All Products</a>
            </div>
        </div>
    </div>

<?php include "include/footer.php"; ?>
