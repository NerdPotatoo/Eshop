<?php include "include/header.php"; ?>

    <div class="mb-6 flex justify-between items-center">
        <div class="relative">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-search text-gray-400"></i>
            </span>
            <input type="text" class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-primary focus:border-primary" placeholder="Search orders...">
        </div>
        <div class="flex gap-2">
            <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors flex items-center gap-2">
                <i class="fas fa-filter"></i> Filter
            </button>
            <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors flex items-center gap-2">
                <i class="fas fa-download"></i> Export
            </button>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-600 text-xs uppercase tracking-wider">
                        <th class="p-4 font-semibold">Order ID</th>
                        <th class="p-4 font-semibold">Customer</th>
                        <th class="p-4 font-semibold">Date</th>
                        <th class="p-4 font-semibold">Total</th>
                        <th class="p-4 font-semibold">Payment</th>
                        <th class="p-4 font-semibold">Status</th>
                        <th class="p-4 font-semibold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 font-medium text-primary">#ORD-7829</td>
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs mr-2">JD</div>
                                <span class="text-gray-900">John Doe</span>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Oct 24, 2023</td>
                        <td class="p-4 font-medium text-gray-900">$79.99</td>
                        <td class="p-4 text-gray-600">Credit Card</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Completed</span>
                        </td>
                        <td class="p-4 text-right">
                            <button class="text-gray-500 hover:text-primary transition-colors"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 font-medium text-primary">#ORD-7828</td>
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-secondary/10 text-secondary flex items-center justify-center font-bold text-xs mr-2">JS</div>
                                <span class="text-gray-900">Jane Smith</span>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Oct 24, 2023</td>
                        <td class="p-4 font-medium text-gray-900">$199.50</td>
                        <td class="p-4 text-gray-600">PayPal</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span>
                        </td>
                        <td class="p-4 text-right">
                            <button class="text-gray-500 hover:text-primary transition-colors"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 font-medium text-primary">#ORD-7827</td>
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs mr-2">RJ</div>
                                <span class="text-gray-900">Robert Johnson</span>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Oct 23, 2023</td>
                        <td class="p-4 font-medium text-gray-900">$45.00</td>
                        <td class="p-4 text-gray-600">Credit Card</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Processing</span>
                        </td>
                        <td class="p-4 text-right">
                            <button class="text-gray-500 hover:text-primary transition-colors"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 font-medium text-primary">#ORD-7826</td>
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-xs mr-2">ED</div>
                                <span class="text-gray-900">Emily Davis</span>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Oct 22, 2023</td>
                        <td class="p-4 font-medium text-gray-900">$120.00</td>
                        <td class="p-4 text-gray-600">Credit Card</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Completed</span>
                        </td>
                        <td class="p-4 text-right">
                            <button class="text-gray-500 hover:text-primary transition-colors"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 font-medium text-primary">#ORD-7825</td>
                        <td class="p-4">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-red-100 text-red-600 flex items-center justify-center font-bold text-xs mr-2">MW</div>
                                <span class="text-gray-900">Michael Wilson</span>
                            </div>
                        </td>
                        <td class="p-4 text-gray-600">Oct 21, 2023</td>
                        <td class="p-4 font-medium text-gray-900">$35.99</td>
                        <td class="p-4 text-gray-600">PayPal</td>
                        <td class="p-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Cancelled</span>
                        </td>
                        <td class="p-4 text-right">
                            <button class="text-gray-500 hover:text-primary transition-colors"><i class="fas fa-eye"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-gray-100 flex justify-between items-center">
            <p class="text-sm text-gray-500">Showing 1 to 5 of 1,452 entries</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50">Previous</button>
                <button class="px-3 py-1 border border-gray-300 rounded-md text-sm text-gray-600 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>

<?php include "include/footer.php"; ?>
