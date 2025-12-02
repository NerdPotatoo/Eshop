<?php include "include/header.php"; ?>

    <!-- Page Title -->
    <section class="page-title bg-light py-4">
        <div class="container">
            <h1 class="mb-0">Our Products</h1>
            <p class="text-muted">Explore our wide range of quality products</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Filters</h5>
                            
                            <!-- Category Filter -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Category</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="electronics">
                                    <label class="form-check-label" for="electronics">Electronics</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="accessories">
                                    <label class="form-check-label" for="accessories">Accessories</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="clothing">
                                    <label class="form-check-label" for="clothing">Clothing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="home">
                                    <label class="form-check-label" for="home">Home & Garden</label>
                                </div>
                            </div>

                            <!-- Price Filter -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Price Range</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="price1">
                                    <label class="form-check-label" for="price1">Under $50</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="price2">
                                    <label class="form-check-label" for="price2">$50 - $100</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="price3">
                                    <label class="form-check-label" for="price3">$100 - $200</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="price4">
                                    <label class="form-check-label" for="price4">Over $200</label>
                                </div>
                            </div>

                            <!-- Rating Filter -->
                            <div class="mb-4">
                                <h6 class="fw-bold">Rating</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating5">
                                    <label class="form-check-label" for="rating5">
                                        <i class="fas fa-star text-warning"></i> 5 Stars
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating4">
                                    <label class="form-check-label" for="rating4">
                                        <i class="fas fa-star text-warning"></i> 4 Stars & Up
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rating3">
                                    <label class="form-check-label" for="rating3">
                                        <i class="fas fa-star text-warning"></i> 3 Stars & Up
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn-primary w-100">Apply Filters</button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-md-9">
                    <!-- Sort Options -->
                    <div class="mb-4">
                        <select class="form-select w-25" id="sortSelect">
                            <option selected>Sort by</option>
                            <option value="popularity">Popularity</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="newest">Newest</option>
                            <option value="rating">Highest Rated</option>
                        </select>
                    </div>

                    <!-- Products -->
                    <div class="row">
                        <!-- Product 1 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <div class="position-relative">
                                    <img src="https://picsum.photos/300/200?random=5" class="card-img-top" alt="Product">
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">Sale</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Wireless Headphones</h5>
                                    <p class="card-text text-muted text-truncate">Premium sound quality with active noise cancellation</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <span class="ms-1 text-muted">(245)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$79.99</span>
                                        <span class="text-muted text-decoration-line-through ms-2">$99.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <img src="https://picsum.photos/300/200?random=6" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <h5 class="card-title">Smart Watch</h5>
                                    <p class="card-text text-muted text-truncate">Fitness tracking and health monitoring</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="ms-1 text-muted">(512)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$199.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <img src="https://picsum.photos/300/200?random=7" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <h5 class="card-title">Laptop Bag</h5>
                                    <p class="card-text text-muted text-truncate">Durable and stylish professional bag</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="ms-1 text-muted">(89)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$49.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <div class="position-relative">
                                    <img src="https://picsum.photos/300/200?random=8" class="card-img-top" alt="Product">
                                    <span class="badge bg-success position-absolute top-0 end-0 m-2">New</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">USB-C Cable</h5>
                                    <p class="card-text text-muted text-truncate">Fast charging and data transfer</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star-half-alt text-warning"></i>
                                        <span class="ms-1 text-muted">(128)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$12.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <img src="https://picsum.photos/300/200?random=9" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <h5 class="card-title">Phone Case</h5>
                                    <p class="card-text text-muted text-truncate">Protective and elegant phone cover</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="ms-1 text-muted">(356)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$24.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card product-card h-100">
                                <img src="https://picsum.photos/300/200?random=10" class="card-img-top" alt="Product">
                                <div class="card-body">
                                    <h5 class="card-title">Webcam HD</h5>
                                    <p class="card-text text-muted text-truncate">1080p resolution for clear video calls</p>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="ms-1 text-muted">(423)</span>
                                    </div>
                                    <p class="mb-2">
                                        <span class="text-primary fw-bold h5">$89.99</span>
                                    </p>
                                    <button class="btn btn-primary w-100">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Page navigation" class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

   <?php include "include/footer.php"; ?>
