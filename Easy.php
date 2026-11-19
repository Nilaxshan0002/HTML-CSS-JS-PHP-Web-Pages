<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Website Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            scroll-behavior: smooth;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 32px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 4px;
        }
        
        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        /* Hero Section */
        .hero {
            padding: 80px 0;
            text-align: center;
            background-color: white;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }
        
        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        .hero p {
            font-size: 18px;
            color: #718096;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 14px 30px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(110, 142, 251, 0.4);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(110, 142, 251, 0.6);
        }
        
        /* Features Section */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: #2d3748;
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #718096;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 28px;
        }
        
        .feature-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .feature-card p {
            color: #718096;
        }
        
        /* Templates Section */
        .templates {
            margin-bottom: 60px;
        }
        
        .template-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .template-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .template-card:hover {
            transform: scale(1.03);
        }
        
        .template-img {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            font-weight: 600;
            position: relative;
            overflow: hidden;
        }
        
        .template-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .template-content {
            padding: 20px;
        }
        
        .template-content h3 {
            margin-bottom: 10px;
            color: #2d3748;
        }
        
        .template-content p {
            color: #718096;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        /* Pricing Section */
        .pricing {
            background: white;
            padding: 60px 0;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
        }
        
        .pricing-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .pricing-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease;
            border: 2px solid transparent;
        }
        
        .pricing-card:hover {
            transform: scale(1.03);
            border-color: #6e8efb;
        }
        
        .pricing-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #2d3748;
        }
        
        .price {
            font-size: 42px;
            font-weight: 700;
            color: #6e8efb;
            margin-bottom: 20px;
        }
        
        .price span {
            font-size: 16px;
            color: #718096;
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 25px;
        }
        
        .pricing-features li {
            padding: 8px 0;
            color: #718096;
            border-bottom: 1px solid #e2e8f0;
        }
        
        /* Testimonials */
        .testimonials {
            margin-bottom: 60px;
        }
        
        .testimonial-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-text {
            font-style: italic;
            color: #4a5568;
            margin-bottom: 20px;
            position: relative;
            padding-left: 20px;
        }
        
        .testimonial-text:before {
            content: """;
            font-size: 60px;
            color: #6e8efb;
            position: absolute;
            left: -15px;
            top: -20px;
            opacity: 0.2;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 15px;
            overflow: hidden;
            border: 3px solid #6e8efb;
        }
        
        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-details h4 {
            color: #2d3748;
        }
        
        .author-details p {
            color: #718096;
            font-size: 14px;
        }
        
        /* Footer */
        footer {
            background: #2d3748;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #a777e3;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 12px;
        }
        
        .footer-column ul li a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-column ul li a:hover {
            color: #6e8efb;
        }
        
        .footer-column p {
            color: #cbd5e0;
            line-height: 1.8;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background: #4a5568;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        
        .social-links a:hover {
            background: #6e8efb;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #4a5568;
            color: #cbd5e0;
            font-size: 14px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
            
            .hero h1 {
                font-size: 32px;
            }
            
            .hero p {
                font-size: 16px;
            }
        }
        
        /* Form Styles */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #2d3748;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #6e8efb;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: white;
            padding: 40px;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #718096;
        }
        
        .modal-title {
            margin-bottom: 20px;
            color: #2d3748;
        }
        
        /* Notification */
        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 25px;
            background: #48bb78;
            color: white;
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .notification.show {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-rocket"></i> EASY WEBSITE BUILDER
            </div>
            <nav>
                <ul>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#templates">Templates</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Create Stunning Websites Without Coding</h1>
            <p>Our easy-to-use website builder helps you create professional websites in minutes. No technical skills required - just drag, drop, and publish!</p>
            <a href="#" class="btn" id="getStartedBtn">Get Started Now</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container" id="features">
        <div class="section-title">
            <h2>Powerful Features</h2>
            <p>Everything you need to create a beautiful website that stands out</p>
        </div>
        <div class="features">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>Responsive Design</h3>
                <p>Your website will look great on any device - desktop, tablet, or mobile.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
                <h3>Drag & Drop Editor</h3>
                <p>Easily customize your site with our intuitive drag and drop interface.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                <h3>SEO Tools</h3>
                <p>Optimize your website for search engines with our built-in SEO tools.</p>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section class="container" id="templates">
        <div class="section-title">
            <h2>Beautiful Templates</h2>
            <p>Choose from dozens of professionally designed templates</p>
        </div>
        <div class="template-gallery">
            <div class="template-card">
                <div class="template-img">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Business Template">
                </div>
                <div class="template-content">
                    <h3>Professional Business</h3>
                    <p>Perfect for corporate websites and small businesses.</p>
                    <a href="#" class="btn">Use Template</a>
                </div>
            </div>
            <div class="template-card">
                <div class="template-img">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Portfolio Template">
                </div>
                <div class="template-content">
                    <h3>Creative Portfolio</h3>
                    <p>Showcase your work in style with this elegant template.</p>
                    <a href="#" class="btn">Use Template</a>
                </div>
            </div>
            <div class="template-card">
                <div class="template-img">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="E-commerce Template">
                </div>
                <div class="template-content">
                    <h3>Online Store</h3>
                    <p>Start selling online with this powerful e-commerce template.</p>
                    <a href="#" class="btn">Use Template</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="container" id="pricing">
        <div class="section-title">
            <h2>Simple Pricing</h2>
            <p>Choose the plan that works best for you</p>
        </div>
        <div class="pricing">
            <div class="pricing-cards">
                <div class="pricing-card">
                    <h3>Basic</h3>
                    <div class="price">$9<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>1 Website</li>
                        <li>10 GB Storage</li>
                        <li>Basic Support</li>
                        <li>Free Domain</li>
                    </ul>
                    <a href="#" class="btn">Get Started</a>
                </div>
                <div class="pricing-card">
                    <h3>Pro</h3>
                    <div class="price">$19<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>5 Websites</li>
                        <li>50 GB Storage</li>
                        <li>Priority Support</li>
                        <li>Free SSL Certificate</li>
                    </ul>
                    <a href="#" class="btn">Get Started</a>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">$29<span>/month</span></div>
                    <ul class="pricing-features">
                        <li>Unlimited Websites</li>
                        <li>100 GB Storage</li>
                        <li>24/7 Support</li>
                        <li>Advanced Analytics</li>
                    </ul>
                    <a href="#" class="btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container" id="testimonials">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Join thousands of satisfied users who have built their websites with our platform</p>
        </div>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    This website builder is amazing! I was able to create a professional site for my business in just a few hours without any coding knowledge.
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                    </div>
                    <div class="author-details">
                        <h4>John Doe</h4>
                        <p>Small Business Owner</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-text">
                    The templates are stunning and the editor is so easy to use. I've recommended this to all my friends who need a website.
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Miller">
                    </div>
                    <div class="author-details">
                        <h4>Sarah Miller</h4>
                        <p>Freelancer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container" id="contact">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>Have questions? Our team is here to help you</p>
        </div>
        <div class="contact-form">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Easy Website Builder</h3>
                    <p>Creating beautiful websites has never been easier. Our intuitive platform helps you build the website of your dreams in minutes.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#templates">Templates</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#help">Help Center</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#documentation">Documentation</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <p>1234 Web Street, Suite 567</p>
                    <p>San Francisco, CA 94107</p>
                    <p>Email: info@easywebsitebuilder.com</p>
                    <p>Phone: (123) 456-7890</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Easy Website Builder. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Get Started Modal -->
    <div class="modal" id="getStartedModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Get Started</h2>
            <form id="signupForm">
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" id="signupName" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email Address</label>
                    <input type="email" id="signupEmail" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn">Create Account</button>
            </form>
        </div>
    </div>

    <!-- Notification -->
    <div class="notification" id="notification">
        Your message has been sent successfully!
    </div>

    <script>
        // DOM Elements
        const getStartedBtn = document.getElementById('getStartedBtn');
        const getStartedModal = document.getElementById('getStartedModal');
        const closeModal = document.querySelector('.close-modal');
        const contactForm = document.getElementById('contactForm');
        const signupForm = document.getElementById('signupForm');
        const notification = document.getElementById('notification');

        // Show modal when Get Started button is clicked
        getStartedBtn.addEventListener('click', function(e) {
            e.preventDefault();
            getStartedModal.style.display = 'flex';
        });

        // Close modal when X is clicked
        closeModal.addEventListener('click', function() {
            getStartedModal.style.display = 'none';
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function(e) {
            if (e.target === getStartedModal) {
                getStartedModal.style.display = 'none';
            }
        });

        // Handle contact form submission
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            setTimeout(function() {
                contactForm.reset();
                showNotification('Your message has been sent successfully!');
            }, 500);
        });

        // Handle signup form submission
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate form submission
            setTimeout(function() {
                signupForm.reset();
                getStartedModal.style.display = 'none';
                showNotification('Account created successfully! Welcome to Easy Website Builder.');
            }, 500);
        });

        // Show notification function
        function showNotification(message) {
            notification.textContent = message;
            notification.classList.add('show');
            
            // Hide notification after 3 seconds
            setTimeout(function() {
                notification.classList.remove('show');
            }, 3000);
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('nav a, .footer-column a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId.startsWith('#')) {
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                } else {
                    // External links
                    window.location.href = targetId;
                }
            });
        });

        // Template use buttons
        document.querySelectorAll('.template-card .btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                getStartedModal.style.display = 'flex';
            });
        });

        // Pricing plan buttons
        document.querySelectorAll('.pricing-card .btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                getStartedModal.style.display = 'flex';
            });
        });
    </script>
</body>
</html>