// EShop JavaScript Functions

// Cart functionality
let cartCount = 0;

// Initialize cart from localStorage
document.addEventListener('DOMContentLoaded', function() {
    loadCart();
    initializeEventListeners();
});

// Initialize event listeners
function initializeEventListeners() {
    // Add to Cart buttons
    const addToCartButtons = document.querySelectorAll('.btn-primary');
    addToCartButtons.forEach(button => {
        if (button.textContent.includes('Add to Cart')) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                addToCart(this);
            });
        }
    });

    // Quantity controls
    const quantityButtons = document.querySelectorAll('.input-group-sm button');
    quantityButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            updateQuantity(this);
        });
    });

    // Delete buttons
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(button => {
        if (button.innerHTML.includes('fa-trash')) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                removeFromCart(this);
            });
        }
    });

    // Form submission
    const contactForm = document.querySelector('form');
    if (contactForm && contactForm.id !== 'loginForm') {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            submitContactForm(this);
        });
    }

    // Filter buttons
    const filterButton = document.querySelector('.btn-primary');
    if (filterButton && filterButton.textContent.includes('Apply Filters')) {
        filterButton.addEventListener('click', function(e) {
            e.preventDefault();
            applyFilters();
        });
    }
}

// Add to cart function
function addToCart(button) {
    cartCount++;
    updateCartBadge();
    showNotification('Product added to cart!', 'success');
    
    // Add animation to button
    button.classList.add('btn-success');
    button.innerHTML = '<i class="fas fa-check"></i> Added!';
    
    setTimeout(() => {
        button.classList.remove('btn-success');
        button.innerHTML = 'Add to Cart';
    }, 2000);
}

// Update cart badge
function updateCartBadge() {
    const badges = document.querySelectorAll('.badge');
    badges.forEach(badge => {
        if (badge.textContent.includes(cartCount - 1)) {
            badge.textContent = cartCount;
        }
    });
    
    // Also update if it's showing '0'
    const cartBadge = document.querySelector('.navbar .badge');
    if (cartBadge) {
        cartBadge.textContent = cartCount;
    }
    
    saveCart();
}

// Remove from cart
function removeFromCart(button) {
    const cartItem = button.closest('.cart-item');
    if (cartItem) {
        cartItem.style.opacity = '0.5';
        setTimeout(() => {
            cartItem.remove();
            cartCount = Math.max(0, cartCount - 1);
            updateCartBadge();
            showNotification('Product removed from cart', 'info');
        }, 300);
    }
}

// Update quantity
function updateQuantity(button) {
    const quantityInput = button.parentElement.querySelector('input');
    let quantity = parseInt(quantityInput.value);
    
    if (button.textContent.includes('+')) {
        quantity++;
    } else if (button.textContent.includes('-') && quantity > 1) {
        quantity--;
    }
    
    quantityInput.value = quantity;
    
    // Update subtotal (if visible)
    const cartItem = button.closest('.cart-item');
    if (cartItem) {
        const priceText = cartItem.querySelector('.text-primary.fw-bold');
        if (priceText) {
            const price = parseFloat(priceText.textContent.replace('$', ''));
            const totalPrice = (price * quantity).toFixed(2);
            const totalCell = cartItem.querySelector('.col-md-2:last-child .fw-bold');
            if (totalCell) {
                totalCell.textContent = '$' + totalPrice;
            }
        }
    }
}

// Show notification
function showNotification(message, type = 'info') {
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type === 'success' ? 'success' : type === 'error' ? 'danger' : 'info'} alert-dismissible fade show`;
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    const container = document.querySelector('.container');
    if (container) {
        container.insertBefore(alertDiv, container.firstChild);
        
        setTimeout(() => {
            alertDiv.remove();
        }, 5000);
    }
}

// Submit contact form
function submitContactForm(form) {
    const formData = new FormData(form);
    
    // Validate form
    if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        form.classList.add('was-validated');
        return;
    }
    
    showNotification('Thank you! Your message has been sent successfully.', 'success');
    form.reset();
}

// Apply filters
function applyFilters() {
    const checkedCategories = [];
    const checkedPrices = [];
    const checkedRatings = [];
    
    // Get checked categories
    document.querySelectorAll('input[id^="electronics"], input[id^="accessories"], input[id^="clothing"], input[id^="home"]').forEach(checkbox => {
        if (checkbox.checked) {
            checkedCategories.push(checkbox.id);
        }
    });
    
    // Get checked prices
    document.querySelectorAll('input[id^="price"]').forEach(checkbox => {
        if (checkbox.checked) {
            checkedPrices.push(checkbox.id);
        }
    });
    
    // Get checked ratings
    document.querySelectorAll('input[id^="rating"]').forEach(checkbox => {
        if (checkbox.checked) {
            checkedRatings.push(checkbox.id);
        }
    });
    
    showNotification(`Filters applied! Categories: ${checkedCategories.length || 'All'}, Prices: ${checkedPrices.length || 'All'}, Ratings: ${checkedRatings.length || 'All'}`, 'info');
}

// Save cart to localStorage
function saveCart() {
    localStorage.setItem('cartCount', cartCount);
}

// Load cart from localStorage
function loadCart() {
    const savedCartCount = localStorage.getItem('cartCount');
    if (savedCartCount) {
        cartCount = parseInt(savedCartCount);
        updateCartBadge();
    }
}

// Sort products
function sortProducts(sortValue) {
    console.log('Sorting by: ' + sortValue);
    showNotification(`Products sorted by ${sortValue}`, 'info');
}

// Search functionality
function searchProducts(searchTerm) {
    if (searchTerm.length < 2) {
        showNotification('Please enter at least 2 characters', 'info');
        return;
    }
    showNotification(`Searching for "${searchTerm}"...`, 'info');
}

// Password toggle
document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    if (togglePassword) {
        togglePassword.addEventListener('click', function() {
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
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Loading animation for buttons
document.querySelectorAll('button[type="submit"]').forEach(button => {
    button.addEventListener('click', function() {
        if (!this.classList.contains('add-to-cart-btn')) {
            this.disabled = true;
            const originalText = this.innerHTML;
            this.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
            
            setTimeout(() => {
                this.disabled = false;
                this.innerHTML = originalText;
            }, 2000);
        }
    });
});

// Active nav link
// document.addEventListener('DOMContentLoaded', function() {
//     const currentPage = window.location.pathname.split('/').pop() || 'index.html';
//     const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
//     navLinks.forEach(link => {
//         const href = link.getAttribute('href');
        
//         // Handle root path
//         if ((currentPage === '' || currentPage === '/') && href === 'index.html') {
//             link.classList.add('active');
//         }
//         // Handle other pages
//         else if (href === currentPage) {
//             link.classList.add('active');
//         }
//         // Handle index.html as home
//         else if (currentPage === 'index.html' && href === 'index.html') {
//             link.classList.add('active');
//         }
//         else {
//             link.classList.remove('active');
//         }
//     });
// });

// Mobile menu close on link click
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelector('.navbar-toggler').click();
    });
});

// Export functions for use in HTML
window.addToCart = addToCart;
window.removeFromCart = removeFromCart;
window.updateQuantity = updateQuantity;
window.sortProducts = sortProducts;
window.searchProducts = searchProducts;
