
<?php include "include/header.php"; ?>

    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">Welcome to <span class="text-primary">EShop</span></h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">Discover amazing products at unbeatable prices. Shop now and enjoy fast delivery! Experience the best online shopping with us.</p>
                    <a href="?page=products" class="inline-block bg-primary hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 shadow-lg transform hover:-translate-y-1">Start Shopping</a>
                </div>
                <div class="md:w-1/2 md:pl-10">
                    <img src="https://picsum.photos/600/400?random=1" alt="Shopping" class="rounded-lg shadow-2xl w-full object-cover transform hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=2" class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <button class="bg-white text-gray-900 py-2 px-4 rounded-full font-bold hover:bg-primary hover:text-white transition duration-300">Quick View</button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-semibold text-gray-900 mb-2">Wireless Headphones</h5>
                        <p class="text-gray-600 mb-4 text-sm">High-quality sound with noise cancellation</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$79.99</span>
                            <button class="bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=3" class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <button class="bg-white text-gray-900 py-2 px-4 rounded-full font-bold hover:bg-primary hover:text-white transition duration-300">Quick View</button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-semibold text-gray-900 mb-2">Smart Watch</h5>
                        <p class="text-gray-600 mb-4 text-sm">Track your fitness and stay connected</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$199.99</span>
                            <button class="bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 group">
                    <div class="relative overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=4" class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500" alt="Product">
                        <div class="absolute inset-0 bg-black bg-opacity-20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <button class="bg-white text-gray-900 py-2 px-4 rounded-full font-bold hover:bg-primary hover:text-white transition duration-300">Quick View</button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h5 class="text-xl font-semibold text-gray-900 mb-2">Laptop Bag</h5>
                        <p class="text-gray-600 mb-4 text-sm">Durable and stylish travel companion</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-primary">$49.99</span>
                            <button class="bg-primary hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition duration-300 flex items-center">
                                <i class="fas fa-cart-plus mr-2"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <a href="?page=products" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold py-3 px-8 rounded-full transition duration-300">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6 rounded-lg hover:bg-gray-50 transition duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-indigo-100 text-primary mb-6">
                        <i class="fas fa-shipping-fast text-3xl"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Fast Shipping</h5>
                    <p class="text-gray-600">Get your orders delivered quickly to your doorstep with our express delivery partners.</p>
                </div>
                <div class="p-6 rounded-lg hover:bg-gray-50 transition duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-green-100 text-green-600 mb-6">
                        <i class="fas fa-shield-alt text-3xl"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Secure Payment</h5>
                    <p class="text-gray-600">Safe and encrypted payment methods. We ensure your data is always protected.</p>
                </div>
                <div class="p-6 rounded-lg hover:bg-gray-50 transition duration-300">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-yellow-100 text-yellow-600 mb-6">
                        <i class="fas fa-undo text-3xl"></i>
                    </div>
                    <h5 class="text-xl font-bold text-gray-900 mb-2">Easy Returns</h5>
                    <p class="text-gray-600">30-day money-back guarantee. Not satisfied? Return it hassle-free.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <?php include "include/footer.php"; ?>