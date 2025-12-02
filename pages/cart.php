<?php include "include/header.php"; ?>
    <!-- Page Title -->
    <section class="page-title bg-light py-4">
        <div class="container">
            <h1 class="mb-0">Shopping Cart</h1>
            <p class="text-muted">Review and manage your items</p>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="cart-section py-5">
        <div class="container">
            <div class="row">
                <!-- Cart Items -->
                <div class="col-md-8 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Cart Items</h5>

                            <!-- Sample Cart Items -->
                            <div class="cart-item border-bottom pb-3 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/100/100?random=15" class="img-fluid" alt="Product">
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Wireless Headphones</h6>
                                        <p class="text-muted small">SKU: WH-12345</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="text-primary fw-bold">$79.99</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary">-</button>
                                            <input type="text" class="form-control text-center" value="1">
                                            <button class="btn btn-outline-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="fw-bold">$79.99</p>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item border-bottom pb-3 mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/100/100?random=16" class="img-fluid" alt="Product">
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Smart Watch</h6>
                                        <p class="text-muted small">SKU: SW-54321</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="text-primary fw-bold">$199.99</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary">-</button>
                                            <input type="text" class="form-control text-center" value="1">
                                            <button class="btn btn-outline-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="fw-bold">$199.99</p>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item pb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="https://picsum.photos/100/100?random=17" class="img-fluid" alt="Product">
                                    </div>
                                    <div class="col-md-4">
                                        <h6>USB-C Cable</h6>
                                        <p class="text-muted small">SKU: USB-99999</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="text-primary fw-bold">$12.99</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm">
                                            <button class="btn btn-outline-secondary">-</button>
                                            <input type="text" class="form-control text-center" value="2">
                                            <button class="btn btn-outline-secondary">+</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="fw-bold">$25.98</p>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Continue Shopping -->
                            <div class="mt-4">
                                <a href="products.html" class="btn btn-outline-primary">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Order Summary</h5>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal:</span>
                                    <span>$305.96</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Shipping:</span>
                                    <span class="text-success">FREE</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Tax:</span>
                                    <span>$30.60</span>
                                </div>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between mb-4">
                                <h6>Total:</h6>
                                <h6 class="text-primary fw-bold">$336.56</h6>
                            </div>

                            <!-- Coupon Code -->
                            <div class="mb-4">
                                <label class="form-label">Apply Coupon Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter code">
                                    <button class="btn btn-outline-secondary">Apply</button>
                                </div>
                            </div>

                            <!-- Checkout Button -->
                            <button class="btn btn-primary btn-lg w-100 mb-2">
                                <i class="fas fa-lock"></i> Proceed to Checkout
                            </button>

                            <!-- Payment Methods -->
                            <p class="text-center text-muted small mb-3">We accept:</p>
                            <div class="text-center">
                                <i class="fab fa-cc-visa text-primary me-2"></i>
                                <i class="fab fa-cc-mastercard text-primary me-2"></i>
                                <i class="fab fa-cc-paypal text-primary me-2"></i>
                                <i class="fab fa-cc-amex text-primary"></i>
                            </div>

                            <!-- Trust Badges -->
                            <div class="mt-4 text-center">
                                <p class="text-muted small mb-2">
                                    <i class="fas fa-shield-alt text-success"></i> 100% Secure Checkout
                                </p>
                                <p class="text-muted small">
                                    <i class="fas fa-undo text-success"></i> 30-Day Money Back Guarantee
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Products -->
            <div class="row mt-5">
                <div class="col-12">
                    <h4 class="mb-4">You Might Also Like</h4>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=18" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6>Wireless Mouse</h6>
                            <p class="text-primary fw-bold">$34.99</p>
                            <button class="btn btn-sm btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=19" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6>Keyboard</h6>
                            <p class="text-primary fw-bold">$59.99</p>
                            <button class="btn btn-sm btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=20" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6>Screen Protector</h6>
                            <p class="text-primary fw-bold">$9.99</p>
                            <button class="btn btn-sm btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://picsum.photos/300/200?random=21" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h6>Power Bank</h6>
                            <p class="text-primary fw-bold">$44.99</p>
                            <button class="btn btn-sm btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
