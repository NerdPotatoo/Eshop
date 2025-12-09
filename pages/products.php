<?php include "include/header.php"; ?>

    <!-- Page Title -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Our Products</h1>
            <p class="text-gray-600">Explore our wide range of quality products</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Sidebar Filters -->
                <div class="w-full md:w-1/4">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h5 class="text-xl font-bold mb-6 text-gray-900">Filters</h5>
                        
                        <!-- Category Filter -->
                        <div class="mb-6">
                            <h6 class="font-semibold text-gray-900 mb-3">Category</h6>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="electronics" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="electronics" class="ml-2 text-gray-700">Electronics</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="accessories" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="accessories" class="ml-2 text-gray-700">Accessories</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="clothing" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="clothing" class="ml-2 text-gray-700">Clothing</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="home" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="home" class="ml-2 text-gray-700">Home & Garden</label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="mb-6">
                            <h6 class="font-semibold text-gray-900 mb-3">Price Range</h6>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="price1" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="price1" class="ml-2 text-gray-700">Under $50</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="price2" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="price2" class="ml-2 text-gray-700">$50 - $100</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="price3" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="price3" class="ml-2 text-gray-700">$100 - $200</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="price4" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="price4" class="ml-2 text-gray-700">Over $200</label>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="mb-6">
                            <h6 class="font-semibold text-gray-900 mb-3">Rating</h6>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="rating5" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="rating5" class="ml-2 text-gray-700 flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i> 5 Stars
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="rating4" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="rating4" class="ml-2 text-gray-700 flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i> 4 Stars & Up
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="rating3" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="rating3" class="ml-2 text-gray-700 flex items-center">
                                        <i class="fas fa-star text-yellow-400 mr-1"></i> 3 Stars & Up
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-primary hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded transition duration-300">Apply Filters</button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="w-full md:w-3/4">
                    <!-- Sort Options -->
                    <div class="flex justify-end mb-6">
                        <select class="form-select block w-48 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm rounded-md" id="sortSelect">
                            <option selected>Sort by</option>
                            <option value="popularity">Popularity</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="newest">Newest</option>
                        </select>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Product 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=2" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">Wireless Headphones</h5>
                                <p class="text-gray-600 text-sm mb-3">High-quality sound with noise cancellation</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$79.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- Product 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=3" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">Smart Watch</h5>
                                <p class="text-gray-600 text-sm mb-3">Track your fitness and stay connected</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$199.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- Product 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=4" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">Laptop Bag</h5>
                                <p class="text-gray-600 text-sm mb-3">Durable and stylish travel companion</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$49.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                         <!-- Product 4 -->
                         <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=5" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">Gaming Mouse</h5>
                                <p class="text-gray-600 text-sm mb-3">Precision control for gamers</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$29.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                         <!-- Product 5 -->
                         <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=6" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">Mechanical Keyboard</h5>
                                <p class="text-gray-600 text-sm mb-3">Tactile feedback for typing</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$89.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                         <!-- Product 6 -->
                         <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                            <img src="https://picsum.photos/300/200?random=7" class="w-full h-48 object-cover" alt="Product">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold text-gray-900 mb-1">4K Monitor</h5>
                                <p class="text-gray-600 text-sm mb-3">Stunning visuals for work and play</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-xl font-bold text-primary">$299.99</span>
                                    <button class="bg-primary hover:bg-indigo-700 text-white py-1 px-3 rounded transition duration-300">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "include/footer.php"; ?>