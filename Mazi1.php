<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mazi - Transforming Your Food Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --success: #27ae60;
            --warning: #f39c12;
            --gray: #7f8c8d;
            --light-gray: #bdc3c7;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Header styles */
        header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 30px;
            text-align: center;
        }

        header h1 {
            font-size: 2.8rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .tagline {
            font-size: 1.3rem;
            opacity: 0.9;
        }

        /* Navigation */
        nav {
            background-color: var(--primary);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        nav a:hover, nav a.active {
            background-color: var(--secondary);
            transform: translateY(-2px);
        }

        /* Main content */
        .main-content {
            display: flex;
            min-height: 500px;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: var(--light);
            padding: 25px;
            border-right: 1px solid var(--light-gray);
        }

        .sidebar h3 {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--secondary);
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar li {
            margin-bottom: 15px;
        }

        .sidebar a {
            color: var(--dark);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            padding: 8px;
            border-radius: 5px;
            cursor: pointer;
        }

        .sidebar a:hover {
            background-color: white;
            color: var(--secondary);
        }

        /* Content area */
        .content {
            flex: 1;
            padding: 30px;
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: var(--primary);
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-gray);
        }

        /* News section */
        .news-container {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 15px;
        }

        .news-item {
            background-color: #f8f9fa;
            padding: 18px;
            margin-bottom: 15px;
            border-radius: 8px;
            border-left: 4px solid var(--secondary);
            transition: all 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .news-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .news-content {
            flex: 1;
        }

        .news-title {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .news-time {
            font-size: 0.9rem;
            color: var(--gray);
            background-color: white;
            padding: 5px 12px;
            border-radius: 20px;
            min-width: 70px;
            text-align: center;
        }

        /* Features grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-top: 4px solid var(--secondary);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .feature-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* Footer */
        footer {
            background-color: var(--primary);
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 20px;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
        }

        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Form elements */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--light-gray);
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--secondary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary);
        }

        /* Page content styles */
        .page-content {
            display: none;
        }
        
        .page-content.active {
            display: block;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .product-img {
            height: 150px;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .product-img i {
            font-size: 3rem;
            color: var(--secondary);
        }
        
        .product-info {
            padding: 15px;
        }
        
        .product-title {
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--primary);
        }
        
        .product-price {
            color: var(--success);
            font-weight: 600;
        }
        
        /* About page */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }
        
        .team-member {
            text-align: center;
        }
        
        .member-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #f1f1f1;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .member-img i {
            font-size: 2.5rem;
            color: var(--secondary);
        }
        
        /* Contact page */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .contact-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        
        .contact-info i {
            color: var(--secondary);
            margin-right: 10px;
            width: 20px;
        }
        
        /* Cart page */
        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        
        .cart-item-img {
            width: 80px;
            height: 80px;
            background: #e1e1e1;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .cart-item-img i {
            font-size: 1.8rem;
            color: var(--secondary);
        }
        
        .cart-item-info {
            flex: 1;
        }
        
        .cart-item-title {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .cart-item-price {
            color: var(--success);
            font-weight: 600;
        }
        
        .cart-total {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid var(--light-gray);
            text-align: right;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                border-right: none;
                border-bottom: 1px solid var(--light-gray);
            }
            
            nav {
                flex-direction: column;
                align-items: center;
            }
            
            .footer-content {
                flex-direction: column;
            }
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Mazi</h1>
            <p class="tagline">Where we are trying to change your food web for the better</p>
        </header>

        <nav>
            <a class="nav-link active" data-page="home"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link" data-page="products"><i class="fas fa-utensils"></i> Products</a>
            <a class="nav-link" data-page="about"><i class="fas fa-users"></i> About Us</a>
            <a class="nav-link" data-page="news"><i class="fas fa-newspaper"></i> News</a>
            <a class="nav-link" data-page="contact"><i class="fas fa-envelope"></i> Contact</a>
        </nav>

        <div class="main-content">
            <aside class="sidebar">
                <h3>Categories</h3>
                <ul>
                    <li><a class="category-link" data-category="farming"><i class="fas fa-seedling"></i> Sustainable Farming</a></li>
                    <li><a class="category-link" data-category="supply"><i class="fas fa-truck"></i> Supply Chain</a></li>
                    <li><a class="category-link" data-category="organic"><i class="fas fa-egg"></i> Organic Products</a></li>
                    <li><a class="category-link" data-category="waste"><i class="fas fa-recycle"></i> Waste Reduction</a></li>
                    <li><a class="category-link" data-category="nutrition"><i class="fas fa-heart"></i> Nutrition</a></li>
                </ul>

                <h3>Account</h3>
                <ul>
                    <li><a class="account-link" data-action="signin"><i class="fas fa-user"></i> Sign In</a></li>
                    <li><a class="account-link" data-action="register"><i class="fas fa-user-plus"></i> Register</a></li>
                    <li><a class="account-link" data-action="cart"><i class="fas fa-shopping-cart"></i> Cart (<span id="cart-count">0</span>)</a></li>
                </ul>
            </aside>

            <main class="content">
                <!-- Home Page -->
                <div id="home-page" class="page-content active">
                    <h2 class="section-title">WHAT'S NEW?</h2>
                    
                    <div class="news-container">
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">New sustainable farming initiative launched</div>
                                <div class="news-desc">We've partnered with local farmers to promote eco-friendly practices</div>
                            </div>
                            <span class="news-time">10:04</span>
                        </div>
                        
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">Seasonal menu update for fall</div>
                                <div class="news-desc">Check out our new dishes featuring autumn harvest</div>
                            </div>
                            <span class="news-time">11:14</span>
                        </div>
                        
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">Food waste reduction program shows great results</div>
                                <div class="news-desc">Our initiatives have reduced food waste by 35% in the first year</div>
                            </div>
                            <span class="news-time">12:15</span>
                        </div>
                        
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">Community garden project starting next month</div>
                                <div class="news-desc">Join us in creating urban gardens across the city</div>
                            </div>
                            <span class="news-time">13:16</span>
                        </div>
                    </div>

                    <h2 class="section-title">KEY FEATURES</h2>
                    
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-tractor"></i>
                            </div>
                            <h3 class="feature-title">Direct from Farmers</h3>
                            <p>We connect you directly with local farmers, ensuring fresh produce and fair prices.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="feature-title">Eco-Friendly Packaging</h3>
                            <p>Our sustainable packaging solutions help reduce environmental impact.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="feature-title">Food Tracking</h3>
                            <p>Track your food's journey from farm to table with our transparency system.</p>
                        </div>
                        
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <h3 class="feature-title">Waste Reduction</h3>
                            <p>Our programs help reduce food waste at every step of the supply chain.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Products Page -->
                <div id="products-page" class="page-content">
                    <h2 class="section-title">OUR PRODUCTS</h2>
                    <p>Discover our range of sustainable and organic food products.</p>
                    
                    <div class="product-grid">
                        <div class="product-card">
                            <div class="product-img">
                                <i class="fas fa-carrot"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Organic Vegetables</div>
                                <div class="product-price">$4.99 / lb</div>
                                <button class="btn btn-primary" style="width: 100%; margin-top: 10px;">Add to Cart</button>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <div class="product-img">
                                <i class="fas fa-apple-alt"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Fresh Fruits</div>
                                <div class="product-price">$3.99 / lb</div>
                                <button class="btn btn-primary" style="width: 100%; margin-top: 10px;">Add to Cart</button>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <div class="product-img">
                                <i class="fas fa-egg"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Free-Range Eggs</div>
                                <div class="product-price">$5.99 / dozen</div>
                                <button class="btn btn-primary" style="width: 100%; margin-top: 10px;">Add to Cart</button>
                            </div>
                        </div>
                        
                        <div class="product-card">
                            <div class="product-img">
                                <i class="fas fa-wheat-alt"></i>
                            </div>
                            <div class="product-info">
                                <div class="product-title">Organic Grains</div>
                                <div class="product-price">$6.99 / lb</div>
                                <button class="btn btn-primary" style="width: 100%; margin-top: 10px;">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- About Page -->
                <div id="about-page" class="page-content">
                    <h2 class="section-title">ABOUT MAZI</h2>
                    <p>Mazi is dedicated to transforming the food web through sustainable practices, direct farmer connections, and reducing food waste.</p>
                    
                    <h3 style="margin: 25px 0 15px;">Our Mission</h3>
                    <p>To create a sustainable food ecosystem that benefits farmers, consumers, and the environment through transparency and innovation.</p>
                    
                    <h3 style="margin: 25px 0 15px;">Our Team</h3>
                    <div class="team-grid">
                        <div class="team-member">
                            <div class="member-img">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Sarah Johnson</h4>
                            <p>CEO & Founder</p>
                        </div>
                        
                        <div class="team-member">
                            <div class="member-img">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Michael Chen</h4>
                            <p>Head of Sustainability</p>
                        </div>
                        
                        <div class="team-member">
                            <div class="member-img">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Emma Rodriguez</h4>
                            <p>Farm Relations</p>
                        </div>
                    </div>
                </div>
                
                <!-- News Page -->
                <div id="news-page" class="page-content">
                    <h2 class="section-title">LATEST NEWS</h2>
                    <p>Stay updated with the latest developments at Mazi and in sustainable food practices.</p>
                    
                    <div class="news-container">
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">Mazi Wins Sustainability Award</div>
                                <div class="news-desc">We're proud to announce that Mazi has been recognized for our contributions to sustainable food systems.</div>
                            </div>
                            <span class="news-time">Sep 15</span>
                        </div>
                        
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">New Partnership with Local Farms</div>
                                <div class="news-desc">We've expanded our network to include 15 new local farms practicing regenerative agriculture.</div>
                            </div>
                            <span class="news-time">Sep 8</span>
                        </div>
                        
                        <div class="news-item">
                            <div class="news-content">
                                <div class="news-title">Reducing Food Waste by 40%</div>
                                <div class="news-desc">Our new initiatives have helped partner stores reduce food waste by 40% in the last quarter.</div>
                            </div>
                            <span class="news-time">Aug 30</span>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Page -->
                <div id="contact-page" class="page-content">
                    <h2 class="section-title">CONTACT US</h2>
                    <p>We'd love to hear from you! Reach out with questions, suggestions, or partnership inquiries.</p>
                    
                    <div class="contact-grid">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p><i class="fas fa-map-marker-alt"></i> 123 Food Street, Farmville, CA 94305</p>
                            <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                            <p><i class="fas fa-envelope"></i> info@mazi.com</p>
                            <p><i class="fas fa-clock"></i> Monday-Friday: 9am-5pm</p>
                        </div>
                        
                        <div class="contact-form">
                            <h3>Send a Message</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message" rows="5"></textarea>
                            </div>
                            <button class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                </div>
                
                <!-- Cart Page -->
                <div id="cart-page" class="page-content">
                    <h2 class="section-title">YOUR CART</h2>
                    
                    <div id="cart-items">
                        <p>Your cart is currently empty.</p>
                    </div>
                    
                    <div class="cart-total">
                        Total: $<span id="cart-total-amount">0.00</span>
                    </div>
                    
                    <button class="btn btn-primary" style="margin-top: 20px; float: right;">Checkout</button>
                </div>
                
                <!-- Sign In Page -->
                <div id="signin-page" class="page-content">
                    <h2 class="section-title">SIGN IN</h2>
                    
                    <div style="max-width: 400px; margin: 0 auto;">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Sign In</button>
                        
                        <p style="text-align: center; margin-top: 20px;">
                            Don't have an account? <a href="#" class="account-link" data-action="register" style="color: var(--secondary);">Register here</a>
                        </p>
                    </div>
                </div>
                
                <!-- Register Page -->
                <div id="register-page" class="page-content">
                    <h2 class="section-title">CREATE ACCOUNT</h2>
                    
                    <div style="max-width: 400px; margin: 0 auto;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password">
                        </div>
                        <button class="btn btn-primary" style="width: 100%;">Register</button>
                        
                        <p style="text-align: center; margin-top: 20px;">
                            Already have an account? <a href="#" class="account-link" data-action="signin" style="color: var(--secondary);">Sign in here</a>
                        </p>
                    </div>
                </div>
            </main>
        </div>

        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p>Email: info@mazi.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
                    <p>Address: 123 Food Street, Farmville</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#" class="nav-link" data-page="about">About Us</a></p>
                    <p><a href="#" class="nav-link" data-page="products">Our Products</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                    <p><a href="#">Terms of Service</a></p>
                </div>
                
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates</p>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <button class="btn btn-primary">Subscribe</button>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Mazi. All rights reserved. Transforming the food web for a better tomorrow.</p>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize the page
            console.log('Mazi website initialized');
            
            // Navigation functionality
            const navLinks = document.querySelectorAll('.nav-link');
            const pageContents = document.querySelectorAll('.page-content');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const page = this.getAttribute('data-page');
                    
                    // Update active navigation link
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show the corresponding page
                    pageContents.forEach(content => content.classList.remove('active'));
                    document.getElementById(`${page}-page`).classList.add('active');
                });
            });
            
            // Account links functionality
            const accountLinks = document.querySelectorAll('.account-link');
            
            accountLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const action = this.getAttribute('data-action');
                    
                    // Show the corresponding account page
                    pageContents.forEach(content => content.classList.remove('active'));
                    document.getElementById(`${action}-page`).classList.add('active');
                    
                    // Update navigation highlights
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                });
            });
            
            // Category links functionality
            const categoryLinks = document.querySelectorAll('.category-link');
            
            categoryLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    alert(`Showing products for category: ${category}`);
                    // In a real application, this would filter products
                    
                    // Navigate to products page
                    pageContents.forEach(content => content.classList.remove('active'));
                    document.getElementById('products-page').classList.add('active');
                    
                    // Update navigation highlights
                    navLinks.forEach(navLink => navLink.classList.remove('active'));
                    document.querySelector('.nav-link[data-page="products"]').classList.add('active');
                });
            });
            
            // Add to cart functionality
            const addToCartButtons = document.querySelectorAll('.btn-primary');
            let cartCount = 0;
            let cartTotal = 0;
            
            addToCartButtons.forEach(button => {
                if (button.textContent === 'Add to Cart') {
                    button.addEventListener('click', function() {
                        const productCard = this.closest('.product-card');
                        const productTitle = productCard.querySelector('.product-title').textContent;
                        const productPrice = parseFloat(productCard.querySelector('.product-price').textContent.replace(/[^\d.]/g, ''));
                        
                        cartCount++;
                        cartTotal += productPrice;
                        
                        document.getElementById('cart-count').textContent = cartCount;
                        
                        // Show notification
                        alert(`Added ${productTitle} to cart!`);
                    });
                }
            });
            
            // Add animation to news items when they come into view
            const newsItems = document.querySelectorAll('.news-item');
            newsItems.forEach((item, index) => {
                // Add slight delay based on index for staggered animation
                item.style.transitionDelay = `${index * 0.05}s`;
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                
                // Animate items into view
                setTimeout(() => {
                    item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, 500);
            });
            
            // Add hover effect to feature cards
            const featureCards = document.querySelectorAll('.feature-card');
            featureCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                });
            });
            
            // Simple form validation for newsletter
            const subscribeBtn = document.querySelector('.footer-content .btn-primary');
            const emailInput = document.querySelector('.footer-content input[type="email"]');
            
            subscribeBtn.addEventListener('click', () => {
                if (emailInput.value === '' || !emailInput.value.includes('@')) {
                    alert('Please enter a valid email address');
                    emailInput.focus();
                    return;
                }
                
                alert('Thanks for subscribing to our newsletter!');
                emailInput.value = '';
            });
            
            // Update time displays to show relative time
            const timeDisplays = document.querySelectorAll('.news-time');
            const now = new Date();
            
            timeDisplays.forEach(display => {
                const timeText = display.textContent;
                
                // For dates (like Sep 15)
                if (timeText.includes(' ')) {
                    display.title = `Posted on ${timeText}`;
                    return;
                }
                
                // For time strings (like 10:04)
                const [hours, minutes] = timeText.split(':');
                const newsTime = new Date(now);
                newsTime.setHours(parseInt(hours), parseInt(minutes), 0, 0);
                
                // Calculate difference in hours
                const diffHours = Math.abs(now - newsTime) / 36e5;
                
                // Update display with relative time if less than 24 hours
                if (diffHours < 24) {
                    display.title = `Posted at ${timeText}`;
                    
                    if (diffHours < 1) {
                        const diffMins = Math.floor(diffHours * 60);
                        display.textContent = `${diffMins} min ago`;
                    } else if (diffHours < 2) {
                        display.textContent = '1 hour ago';
                    } else {
                        display.textContent = `${Math.floor(diffHours)} hours ago`;
                    }
                }
            });
        });
    </script>
</body>
</html>