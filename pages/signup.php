<?php include "include/header.php"; ?>

    <!-- Signup Section -->
    <section class="signup-section py-5 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <i class="fas fa-user-plus display-4 text-primary mb-3"></i>
                                <h2 class="card-title">Create Your Account</h2>
                                <p class="text-muted">Join EShop and start shopping today!</p>
                            </div>

                            <form id="signupForm">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                                    </div>
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            <input type="tel" class="form-control" id="phone" placeholder="(555) 123-4567">
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="dob" class="form-label">Date of Birth</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            <input type="date" class="form-control" id="dob">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        <input type="text" class="form-control" id="address" placeholder="Street Address" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="City" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" placeholder="State" required>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="zip" class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" id="zip" placeholder="ZIP" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country" required>
                                        <option value="">Select Country</option>
                                        <option value="USA">United States</option>
                                        <option value="CAN">Canada</option>
                                        <option value="MEX">Mexico</option>
                                        <option value="UK">United Kingdom</option>
                                        <option value="AUS">Australia</option>
                                        <option value="IND">India</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <hr class="my-4">

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password" placeholder="Create a strong password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    <small class="form-text text-muted">
                                        <i class="fas fa-info-circle"></i> 
                                        Password must be at least 8 characters with uppercase, lowercase, and numbers.
                                    </small>
                                </div>

                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter your password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="text-decoration-none">Terms of Service</a> and <a href="#" class="text-decoration-none">Privacy Policy</a>
                                    </label>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="newsletter" checked>
                                    <label class="form-check-label" for="newsletter">
                                        Subscribe to our newsletter for exclusive offers and updates
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">
                                    <i class="fas fa-user-check"></i> Create Account
                                </button>

                                <div class="divider text-center my-4">
                                    <span class="bg-white px-2 text-muted">OR</span>
                                </div>

                                <button type="button" class="btn btn-outline-secondary btn-lg w-100 mb-2">
                                    <i class="fab fa-google"></i> Sign Up with Google
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-lg w-100 mb-3">
                                    <i class="fab fa-facebook-f"></i> Sign Up with Facebook
                                </button>

                                <div class="text-center">
                                    <p class="text-muted">Already have an account? <a href="?page=login" class="text-decoration-none fw-bold">Sign in here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php include "include/footer.php"; ?>
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Toggle confirm password visibility
        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            const confirmPasswordInput = document.getElementById('confirmPassword');
            const icon = this.querySelector('i');
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                confirmPasswordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Signup form validation and submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;

            // Validate password match
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            // Validate password strength
            if (password.length < 8) {
                alert('Password must be at least 8 characters long!');
                return;
            }

            if (!/[A-Z]/.test(password) || !/[a-z]/.test(password) || !/[0-9]/.test(password)) {
                alert('Password must contain uppercase, lowercase, and numbers!');
                return;
            }

            // Validate terms acceptance
            if (!terms) {
                alert('Please accept the Terms of Service and Privacy Policy!');
                return;
            }

            // Show success message
            alert(`Welcome ${firstName}! Your account has been created successfully.\nA confirmation email will be sent to ${email}`);
            
            // Optionally redirect to login
            // window.location.href = 'login.html';
        });

        // Real-time password validation indicator
        const passwordInput = document.getElementById('password');
        const passwordFeedback = document.createElement('div');
        passwordFeedback.id = 'passwordStrength';
        passwordFeedback.className = 'mt-2';

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let feedbackText = '';
            let feedbackClass = '';

            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password)) strength++;
            if (/[A-Z]/.test(password)) strength++;
            if (/[0-9]/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            if (strength === 0) {
                feedbackText = '';
                feedbackClass = '';
            } else if (strength < 2) {
                feedbackText = '⚠️ Weak password';
                feedbackClass = 'text-danger';
            } else if (strength < 4) {
                feedbackText = '⚡ Fair password';
                feedbackClass = 'text-warning';
            } else {
                feedbackText = '✓ Strong password';
                feedbackClass = 'text-success';
            }

            if (document.getElementById('passwordStrength')) {
                document.getElementById('passwordStrength').textContent = feedbackText;
                document.getElementById('passwordStrength').className = `mt-2 ${feedbackClass} small fw-bold`;
            } else if (feedbackText) {
                passwordFeedback.textContent = feedbackText;
                passwordFeedback.className = `mt-2 ${feedbackClass} small fw-bold`;
                this.parentNode.appendChild(passwordFeedback);
            }
        });
    </script>
</body>
</html>
