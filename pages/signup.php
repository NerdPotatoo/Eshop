<?php include "include/header.php"; ?>

    <!-- Signup Section -->
    <section class="py-12 min-h-screen flex items-center bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden transition-colors duration-300">
                    <div class="p-8 md:p-12">
                        <div class="text-center mb-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-4">
                                <i class="fas fa-user-plus text-3xl"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Create Your Account</h2>
                            <p class="text-gray-600 dark:text-gray-400">Join EShop and start shopping today!</p>
                        </div>

                        <form id="signupForm" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">First Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        <input type="text" id="firstName" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Last Name</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        <input type="text" id="lastName" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="your@email.com" required>
                                </div>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">We'll never share your email with anyone else.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Phone Number</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-phone text-gray-400"></i>
                                        </div>
                                        <input type="tel" id="phone" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="(555) 123-4567">
                                    </div>
                                </div>

                                <div>
                                    <label for="dob" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Date of Birth</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-calendar text-gray-400"></i>
                                        </div>
                                        <input type="date" id="dob" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Address</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-map-marker-alt text-gray-400"></i>
                                    </div>
                                    <input type="text" id="address" class="pl-10 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="Street Address" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                                <div class="md:col-span-6">
                                    <label for="city" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">City</label>
                                    <input type="text" id="city" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="City" required>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="state" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">State</label>
                                    <input type="text" id="state" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="State" required>
                                </div>

                                <div class="md:col-span-3">
                                    <label for="zip" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">ZIP Code</label>
                                    <input type="text" id="zip" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="ZIP" required>
                                </div>
                            </div>

                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Country</label>
                                <select id="country" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white transition-colors" required>
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

                            <hr class="border-gray-200 dark:border-gray-700">

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="password" class="pl-10 pr-12 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="Create a strong password" required>
                                    <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 focus:outline-none">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                    <i class="fas fa-info-circle"></i> 
                                    Password must be at least 8 characters with uppercase, lowercase, and numbers.
                                </p>
                            </div>

                            <div>
                                <label for="confirmPassword" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-gray-400"></i>
                                    </div>
                                    <input type="password" id="confirmPassword" class="pl-10 pr-12 w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary bg-white dark:bg-gray-700 text-gray-900 dark:text-white placeholder-gray-400 transition-colors" placeholder="Re-enter your password" required>
                                    <button type="button" id="toggleConfirmPassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 focus:outline-none">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary/30 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary/60 dark:ring-offset-gray-800" required>
                                </div>
                                <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                                </label>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="newsletter" type="checkbox" checked class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary/30 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary/60 dark:ring-offset-gray-800">
                                </div>
                                <label for="newsletter" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Subscribe to our newsletter for exclusive offers and updates
                                </label>
                            </div>

                            <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3 px-4 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2 shadow-lg shadow-primary/30">
                                <i class="fas fa-user-check"></i> Create Account
                            </button>

                            <div class="relative flex py-2 items-center">
                                <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                                <span class="flex-shrink-0 mx-4 text-gray-400 text-sm">OR</span>
                                <div class="flex-grow border-t border-gray-300 dark:border-gray-600"></div>
                            </div>

                            <div class="space-y-3">
                                <button type="button" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <i class="fab fa-google text-red-500"></i> Sign Up with Google
                                </button>
                                <button type="button" class="w-full bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <i class="fab fa-facebook-f text-blue-600"></i> Sign Up with Facebook
                                </button>
                            </div>

                            <div class="text-center mt-6">
                                <p class="text-gray-600 dark:text-gray-400">Already have an account? <a href="?page=login" class="text-primary font-bold hover:underline">Sign in here</a></p>
                            </div>
                        </form>
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
                feedbackClass = 'text-red-500';
            } else if (strength < 4) {
                feedbackText = '⚡ Fair password';
                feedbackClass = 'text-yellow-500';
            } else {
                feedbackText = '✓ Strong password';
                feedbackClass = 'text-green-500';
            }

            if (document.getElementById('passwordStrength')) {
                document.getElementById('passwordStrength').textContent = feedbackText;
                document.getElementById('passwordStrength').className = `mt-2 ${feedbackClass} text-xs font-bold`;
            } else if (feedbackText) {
                passwordFeedback.textContent = feedbackText;
                passwordFeedback.className = `mt-2 ${feedbackClass} text-xs font-bold`;
                this.parentNode.appendChild(passwordFeedback);
            }
        });
    </script>
</body>
</html>
