<?php include "include/header.php"; ?>
    <!-- Page Title -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Shopping Cart</h1>
            <p class="text-gray-600">Review and manage your items</p>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Cart Items -->
                <div class="w-full md:w-2/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6 border-b border-gray-200">
                            <h5 class="text-xl font-bold text-gray-900">Cart Items</h5>
                        </div>

                        <!-- Sample Cart Items -->
                        <div class="p-6 space-y-6">
                            <div class="flex flex-col sm:flex-row items-center border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                <div class="w-full sm:w-24 h-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200 mb-4 sm:mb-0">
                                    <img src="https://picsum.photos/100/100?random=15" class="w-full h-full object-cover object-center" alt="Product">
                                </div>
                                <div class="sm:ml-6 flex-1 flex flex-col sm:flex-row items-center justify-between w-full">
                                    <div class="text-center sm:text-left mb-4 sm:mb-0">
                                        <h6 class="text-lg font-medium text-gray-900">Wireless Headphones</h6>
                                        <p class="text-sm text-gray-500">SKU: WH-12345</p>
                                        <p class="text-primary font-bold mt-1">$79.99</p>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center border border-gray-300 rounded-md">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">-</button>
                                            <input type="text" class="w-12 text-center border-l border-r border-gray-300 py-1 focus:outline-none" value="1">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">+</button>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-gray-900 mb-2">$79.99</p>
                                            <button class="text-red-500 hover:text-red-700 transition duration-300">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row items-center border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                <div class="w-full sm:w-24 h-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200 mb-4 sm:mb-0">
                                    <img src="https://picsum.photos/100/100?random=16" class="w-full h-full object-cover object-center" alt="Product">
                                </div>
                                <div class="sm:ml-6 flex-1 flex flex-col sm:flex-row items-center justify-between w-full">
                                    <div class="text-center sm:text-left mb-4 sm:mb-0">
                                        <h6 class="text-lg font-medium text-gray-900">Smart Watch</h6>
                                        <p class="text-sm text-gray-500">SKU: SW-54321</p>
                                        <p class="text-primary font-bold mt-1">$199.99</p>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center border border-gray-300 rounded-md">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">-</button>
                                            <input type="text" class="w-12 text-center border-l border-r border-gray-300 py-1 focus:outline-none" value="1">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">+</button>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-gray-900 mb-2">$199.99</p>
                                            <button class="text-red-500 hover:text-red-700 transition duration-300">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row items-center border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                <div class="w-full sm:w-24 h-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200 mb-4 sm:mb-0">
                                    <img src="https://picsum.photos/100/100?random=17" class="w-full h-full object-cover object-center" alt="Product">
                                </div>
                                <div class="sm:ml-6 flex-1 flex flex-col sm:flex-row items-center justify-between w-full">
                                    <div class="text-center sm:text-left mb-4 sm:mb-0">
                                        <h6 class="text-lg font-medium text-gray-900">USB-C Cable</h6>
                                        <p class="text-sm text-gray-500">SKU: USB-99999</p>
                                        <p class="text-primary font-bold mt-1">$12.99</p>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center border border-gray-300 rounded-md">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">-</button>
                                            <input type="text" class="w-12 text-center border-l border-r border-gray-300 py-1 focus:outline-none" value="2">
                                            <button class="px-3 py-1 text-gray-600 hover:bg-gray-100 transition duration-300">+</button>
                                        </div>
                                        <div class="text-right">
                                            <p class="font-bold text-gray-900 mb-2">$25.98</p>
                                            <button class="text-red-500 hover:text-red-700 transition duration-300">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200 flex justify-between items-center">
                            <a href="?page=products" class="text-primary hover:text-indigo-700 font-medium flex items-center transition duration-300">
                                <i class="fas fa-arrow-left mr-2"></i> Continue Shopping
                            </a>
                            <button class="text-red-500 hover:text-red-700 font-medium transition duration-300">Clear Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="w-full md:w-1/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden sticky top-24">
                        <div class="p-6 border-b border-gray-200">
                            <h5 class="text-xl font-bold text-gray-900">Order Summary</h5>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex justify-between text-gray-600">
                                <span>Subtotal</span>
                                <span>$305.96</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Shipping</span>
                                <span class="text-green-600 font-medium">FREE</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Tax</span>
                                <span>$30.60</span>
                            </div>
                            <div class="border-t border-gray-200 pt-4 flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-900">Total</span>
                                <span class="text-2xl font-bold text-primary">$336.56</span>
                            </div>
                            
                            <div class="mt-6">
                                <label for="coupon" class="block text-sm font-medium text-gray-700 mb-2">Coupon Code</label>
                                <div class="flex space-x-2">
                                    <input type="text" id="coupon" class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Enter code">
                                    <button class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded-md transition duration-300">Apply</button>
                                </div>
                            </div>
                            
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-md transition duration-300 shadow-md mt-6">
                                <i class="fas fa-lock mr-2"></i> Proceed to Checkout
                            </button>
                            
                            <div class="mt-4 text-center">
                                <p class="text-xs text-gray-500 mb-2">We accept:</p>
                                <div class="flex justify-center space-x-3 text-gray-400 text-2xl">
                                    <i class="fab fa-cc-visa hover:text-blue-600 transition duration-300"></i>
                                    <i class="fab fa-cc-mastercard hover:text-red-600 transition duration-300"></i>
                                    <i class="fab fa-cc-amex hover:text-blue-400 transition duration-300"></i>
                                    <i class="fab fa-cc-paypal hover:text-blue-800 transition duration-300"></i>
                                </div>
                            </div>

                            <div class="mt-6 text-center space-y-2">
                                <p class="text-xs text-gray-500 flex items-center justify-center">
                                    <i class="fas fa-shield-alt text-green-500 mr-1"></i> 100% Secure Checkout
                                </p>
                                <p class="text-xs text-gray-500 flex items-center justify-center">
                                    <i class="fas fa-undo text-green-500 mr-1"></i> 30-Day Money Back Guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Products -->
            <div class="mt-16">
                <h4 class="text-2xl font-bold text-gray-900 mb-8">You Might Also Like</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <img src="https://picsum.photos/300/200?random=18" class="w-full h-40 object-cover" alt="Product">
                        <div class="p-4">
                            <h6 class="text-lg font-semibold text-gray-900 mb-1">Wireless Mouse</h6>
                            <p class="text-primary font-bold mb-3">$34.99</p>
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 rounded transition duration-300 text-sm">Add to Cart</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <img src="https://picsum.photos/300/200?random=19" class="w-full h-40 object-cover" alt="Product">
                        <div class="p-4">
                            <h6 class="text-lg font-semibold text-gray-900 mb-1">Keyboard</h6>
                            <p class="text-primary font-bold mb-3">$59.99</p>
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 rounded transition duration-300 text-sm">Add to Cart</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <img src="https://picsum.photos/300/200?random=20" class="w-full h-40 object-cover" alt="Product">
                        <div class="p-4">
                            <h6 class="text-lg font-semibold text-gray-900 mb-1">Screen Protector</h6>
                            <p class="text-primary font-bold mb-3">$9.99</p>
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 rounded transition duration-300 text-sm">Add to Cart</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <img src="https://picsum.photos/300/200?random=21" class="w-full h-40 object-cover" alt="Product">
                        <div class="p-4">
                            <h6 class="text-lg font-semibold text-gray-900 mb-1">Power Bank</h6>
                            <p class="text-primary font-bold mb-3">$44.99</p>
                            <button class="w-full bg-primary hover:bg-indigo-700 text-white py-2 rounded transition duration-300 text-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
