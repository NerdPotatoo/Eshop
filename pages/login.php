<?php include "include/header.php"; ?>

    <!-- Login Section -->
    <section class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="bg-white p-10 rounded-xl shadow-2xl">
                <div class="text-center mb-8">
                    <i class="fas fa-user-circle text-6xl text-primary mb-4"></i>
                    <h2 class="text-3xl font-extrabold text-gray-900">Login to Your Account</h2>
                    <p class="mt-2 text-sm text-gray-600">Welcome back! Please enter your details.</p>
                </div>

                <form class="mt-8 space-y-6">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none rounded-md relative block w-full px-3 py-2 pl-10 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-primary focus:border-primary focus:z-10 sm:text-sm" placeholder="your@email.com">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none rounded-md relative block w-full px-3 py-2 pl-10 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-primary focus:border-primary focus:z-10 sm:text-sm" placeholder="Enter your password">
                                <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-primary hover:text-indigo-500">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition duration-300">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-sign-in-alt text-indigo-300 group-hover:text-indigo-200"></i>
                            </span>
                            Login
                        </button>
                    </div>

                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">OR</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-3">
                        <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-google text-red-500 mr-2 text-lg"></i> Login with Google
                        </button>
                        <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 transition duration-300">
                            <i class="fab fa-facebook-f text-blue-600 mr-2 text-lg"></i> Login with Facebook
                        </button>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-sm text-gray-600">Don't have an account? <a href="?page=signup" class="font-medium text-primary hover:text-indigo-500">Sign up here</a></p>
                    </div>
                </form>
            </div>

            <!-- Features -->
            <div class="grid grid-cols-3 gap-4 text-center mt-8">
                <div>
                    <i class="fas fa-shield-alt text-primary text-3xl mb-2"></i>
                    <p class="text-xs text-gray-500 font-medium">Secure Login</p>
                </div>
                <div>
                    <i class="fas fa-lock text-primary text-3xl mb-2"></i>
                    <p class="text-xs text-gray-500 font-medium">Protected Data</p>
                </div>
                <div>
                    <i class="fas fa-check-circle text-primary text-3xl mb-2"></i>
                    <p class="text-xs text-gray-500 font-medium">Fast Access</p>
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
    </script>
</body>
</html>
