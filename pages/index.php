
<?php include "include/header.php"; ?>

    <!-- Hero Section -->
    <section class="hero-section bg-light py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold mb-4">Welcome to EShop</h1>
                    <p class="lead mb-4">Discover amazing products at unbeatable prices. Shop now and enjoy fast delivery!</p>
                    <a href="products.html" class="btn btn-primary btn-lg">Start Shopping</a>
                </div>
                <div class="col-md-6">
                    <img src="https://picsum.photos/500/400?random=1" alt="Shopping" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Products</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Wireless Headphones</h5>
                            <p class="card-text text-muted">High-quality sound with noise cancellation</p>
                            <p class="text-primary fw-bold">$79.99</p>
                            <button class="btn btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Smart Watch</h5>
                            <p class="card-text text-muted">Track your fitness and stay connected</p>
                            <p class="text-primary fw-bold">$199.99</p>
                            <button class="btn btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card product-card h-100">
                        <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Bag</h5>
                            <p class="card-text text-muted">Durable and stylish travel companion</p>
                            <p class="text-primary fw-bold">$49.99</p>
                            <button class="btn btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="products.html" class="btn btn-outline-primary btn-lg">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section bg-light py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <i class="fas fa-shipping-fast display-4 text-primary mb-3"></i>
                    <h5>Fast Shipping</h5>
                    <p>Get your orders delivered quickly to your doorstep</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-shield-alt display-4 text-primary mb-3"></i>
                    <h5>Secure Payment</h5>
                    <p>Safe and encrypted payment methods</p>
                </div>
                <div class="col-md-4 mb-4">
                    <i class="fas fa-undo display-4 text-primary mb-3"></i>
                    <h5>Easy Returns</h5>
                    <p>30-day money-back guarantee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
   <?php include "include/footer.php"; ?>