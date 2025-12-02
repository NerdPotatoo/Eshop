<?php include "include/header.php"; ?>

    <!-- Page Title -->
    <section class="page-title bg-light py-4">
        <div class="container">
            <h1 class="mb-0">Contact Us</h1>
            <p class="text-muted">We'd love to hear from you. Send us a message!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section py-5">
        <div class="container">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">
                                123 Shopping Street<br>
                                Commerce City, CC 12345<br>
                                United States
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-phone display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Phone</h5>
                            <p class="card-text">
                                +1 (555) 123-4567<br>
                                Mon-Fri: 9AM - 6PM<br>
                                Sat-Sun: 10AM - 4PM
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope display-4 text-primary mb-3"></i>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">
                                support@eshop.com<br>
                                sales@eshop.com<br>
                                info@eshop.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <h2 class="mb-4">Send Us a Message</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number (Optional)</label>
                            <input type="tel" class="form-control" id="phone" placeholder="(555) 123-4567">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" required>
                                <option value="">Select a subject</option>
                                <option value="order">Order Inquiry</option>
                                <option value="product">Product Question</option>
                                <option value="return">Return/Refund</option>
                                <option value="feedback">Feedback</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message here..." required></textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="subscribe" checked>
                            <label class="form-check-label" for="subscribe">
                                Subscribe to our newsletter for updates and offers
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is your return policy?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer a 30-day money-back guarantee on all products. If you're not satisfied, simply contact our support team for a hassle-free return.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How long does shipping take?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Standard shipping typically takes 5-7 business days. We also offer express shipping (2-3 days) for an additional fee.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you offer international shipping?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we ship to over 100 countries worldwide. International shipping costs vary by location and are calculated at checkout.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Is my payment information secure?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely. We use SSL encryption and PCI DSS compliance to ensure your payment information is secure.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Can I cancel my order?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Orders can be cancelled within 24 hours of placement. After that, the item may have already shipped. Contact support for assistance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php"; ?>
