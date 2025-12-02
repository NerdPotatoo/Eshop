<?php include "include/header.php"; ?>

    <!-- Login Section -->
    <section class="login-section py-5 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <i class="fas fa-user-circle display-4 text-primary mb-3"></i>
                                <h2 class="card-title">Login to Your Account</h2>
                                <p class="text-muted">Welcome back! Please enter your details.</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                    <a href="#" class="float-end text-decoration-none">Forgot password?</a>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">Login</button>

                                <div class="divider text-center my-4">
                                    <span class="bg-white px-2 text-muted">OR</span>
                                </div>

                                <button type="button" class="btn btn-outline-secondary btn-lg w-100 mb-2">
                                    <i class="fab fa-google"></i> Login with Google
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-lg w-100 mb-3">
                                    <i class="fab fa-facebook-f"></i> Login with Facebook
                                </button>

                                <div class="text-center">
                                    <p class="text-muted">Don't have an account? <a href="?page=signup" class="text-decoration-none fw-bold">Sign up here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <i class="fas fa-shield-alt text-primary display-4 mb-2"></i>
                            <p class="small text-muted">Secure Login</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-lock text-primary display-4 mb-2"></i>
                            <p class="small text-muted">Protected Data</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-check-circle text-primary display-4 mb-2"></i>
                            <p class="small text-muted">Fast Access</p>
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
    </script>
</body>
</html>
