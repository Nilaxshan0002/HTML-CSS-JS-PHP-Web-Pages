<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCraft - Create Websites Without Limits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #6D5DDE;
            --primary-dark: #5548c2;
            --secondary: #4ECDC4;
            --dark: #1f2937;
            --light: #f9fafb;
            --gray: #9ca3af;
            --background: linear-gradient(135deg, #e6e6ff 0%, #e0f8ff 100%);
        }

        body {
            background: var(--background);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .auth-buttons {
            display: flex;
            align-items: center;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
            margin-right: 15px;
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        /* Hero Section */
        .hero {
            padding: 160px 0 100px;
            text-align: center;
            background: linear-gradient(135deg, rgba(109, 93, 222, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 40px;
            color: var(--dark);
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-large {
            padding: 15px 30px;
            font-size: 1.1rem;
        }

        .btn-secondary {
            background: var(--secondary);
            border: 2px solid var(--secondary);
            color: white;
        }

        .btn-secondary:hover {
            background: #3bbbb3;
            border-color: #3bbbb3;
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .section-title p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
            color: var(--gray);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: var(--light);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: rgba(109, 93, 222, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .feature-icon i {
            font-size: 30px;
            color: var(--primary);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 0;
            background: linear-gradient(135deg, rgba(109, 93, 222, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            border: 2px solid var(--primary);
        }

        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Pricing */
        .pricing {
            padding: 100px 0;
            background: white;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .pricing-card {
            background: var(--light);
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .pricing-card:hover {
            transform: scale(1.03);
        }

        .pricing-card.featured {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }

        .pricing-card.featured .btn-primary {
            background: white;
            color: var(--primary);
        }

        .price {
            font-size: 3rem;
            font-weight: 700;
            margin: 20px 0;
        }

        .pricing-features {
            list-style: none;
            margin: 20px 0;
            text-align: left;
        }

        .pricing-features li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .pricing-features li i {
            color: var(--secondary);
            margin-right: 10px;
        }

        /* Contact Form */
        .contact {
            padding: 100px 0;
            background: linear-gradient(135deg, rgba(109, 93, 222, 0.1) 0%, rgba(78, 205, 196, 0.1) 100%);
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 极 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: white;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--gray);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: background 0.3s;
        }

        .social-links a:hover {
            background: var(--primary);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--gray);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--gray);
        }

        .modal-title {
            margin-bottom: 20px;
            text-align: center;
        }

        /* Share buttons */
        .share-section {
            text-align: center;
            padding: 40px 0;
            background: white;
        }

        .share-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .share-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            color: white;
        }

        .share-btn i {
            margin-right: 8px;
        }

        .facebook {
            background: #3b5998;
        }

        .facebook:hover {
            background: #334d84;
        }

        .twitter {
            background: #1da1f2;
        }

        .twitter:hover {
            background: #1a94da;
        }

        .linkedin {
            background: #0077b5;
        }

        .linkedin:hover {
            background: #00669c;
        }

        .pinterest {
            background: #bd081c;
        }

        .pinterest:hover {
            background: #a30618;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons .btn {
                width: 100%;
                max-width: 300px;
                margin-bottom: 10px;
            }

            .share-buttons {
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-drafting-compass"></i>
                    WebCraft
                </a>
                <ul class="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#templates">Templates</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="auth-buttons">
                    <a href="#" class="btn btn-outline" id="loginBtn">Log In</a>
                    <a href="#" class="btn btn-primary" id="signupBtn">Sign Up</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Create a Website Without Limits</h1>
            <p>Bring your vision to life with the website builder that gives you the tools you need to succeed. No coding needed, just creativity.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary btn-large" id="getStartedBtn">Get Started Free</a>
                <a href="#" class="btn btn-secondary btn-large" id="viewDemosBtn">View Demos</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Powerful Features</h2>
                <p>Everything you need to create a stunning website that stands out</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Drag & Drop Builder</h3>
                    <p>Easily create beautiful layouts with our intuitive drag and drop interface. No coding skills required.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Fully Responsive</h3>
                    <p>Your website will look great on any device. Our templates are optimized for mobile, tablet, and desktop.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Blazing Fast</h3>
                    <p>Enjoy optimized performance with fast loading times and smooth animations for better user experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Users Say</h2>
                <p>Join thousands of satisfied users who have created amazing websites with our platform</p>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "WebCraft has transformed how I create websites for my clients. The intuitive interface and powerful features save me hours of work."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Sarah Johnson">
                        </div>
                        <div>
                            <h4>Sarah Johnson</h4>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "I built my e-commerce store in just one weekend without any coding knowledge. The results are professional and conversion rates are high."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Michael Rodriguez">
                        </div>
                        <div>
                            <h4>Michael Rodriguez</h4>
                            <p>Online Store Owner</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "As a small business owner, WebCraft gave me the tools to create a professional website that represents my brand perfectly."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Emily Johnson">
                        </div>
                        <div>
                            <h4>Emily Johnson</h4>
                            <p>Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Share Section -->
    <section class="share-section">
        <div class="container">
            <div class="section-title">
                <h2>Share WebCraft With Friends</h2>
                <p>Help others discover the easiest way to build beautiful websites</p>
            </div>
            <div class="share-buttons">
                <a href="#" class="share-btn facebook" id="shareFacebook">
                    <i class="fab fa-facebook-f"></i> Share
                </a>
                <a href="#" class="share-btn twitter" id="shareTwitter">
                    <i class="fab fa-twitter"></i> Tweet
                </a>
                <a href="#" class="share-btn linkedin" id="shareLinkedIn">
                    <i class="fab fa-linkedin-in"></i> Share
                </a>
                <a href="#" class="share-btn pinterest" id="sharePinterest">
                    <i class="fab fa-pinterest-p"></i> Pin
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Simple Pricing</h2>
                <p>Choose the plan that works best for you. All plans include our core features.</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Basic</h3>
                    <div class="price">$9<span>/month</span></div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 1 Website</li>
                        <li><i class="fas fa-check"></i> 10 GB Storage</li>
                        <li><i class="fas fa-check"></i> Basic Support</li>
                        <li><i class="fas fa-check"></i> Free Domain</li>
                    </ul>
                    <a href="#" class="btn btn-outline pricing-btn">Get Started</a>
                </div>
                <div class="pricing-card featured">
                    <h3>Pro</h3>
                    <div class="price">$19<span>/month</span></div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> 5 Websites</li>
                        <li><i class="fas fa-check"></i> 50 GB Storage</li>
                        <li><i class="fas fa-check"></i> Priority Support</li>
                        <li><i class="fas fa-check"></i> Advanced Analytics</li>
                    </ul>
                    <a href="#" class="btn btn-primary pricing-btn">Get Started</a>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">$29<span>/month</span></div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited Websites</li>
                        <li><i class="fas fa-check"></i> 200 GB Storage</li>
                        <li><i class="fas fa-check"></i> 24/7 Support</li>
                        <li><i class="fas fa-check"></i> E-commerce Features</li>
                    </ul>
                    <a href="#" class="btn btn-outline pricing-btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Have questions? Our team is here to help you get started</p>
            </div>
            <div class="contact-form">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="Your email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="Your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>WebCraft</h3>
                    <p>The most powerful website builder for creating stunning websites without coding.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" id="footerFacebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank" id="footerTwitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank" id="footerInstagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank" id="footerLinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Product</h3>
                    <ul class="footer-links">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#templates">Templates</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#extensions">Extensions</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#press">Press</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#help">Help Center</a></li>
                        <li><a href="#community">Community</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 WebCraft. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Log In to Your Account</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email Address</label>
                    <input type="email" id="loginEmail" class="form-control" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" class="form-control" placeholder="Your password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Log In</button>
            </form>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Create an Account</h2>
            <form id="signupForm">
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" id="signupName" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email Address</label>
                    <input type="email" id="signupEmail" class="form-control" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" class="form-control" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-large" style="width: 100%;">Sign Up</button>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');
        const loginModal = document.getElementById('loginModal');
        const signupModal = document.getElementById('signupModal');
        const closeModalButtons = document.querySelectorAll('.close-modal');
        const getStartedBtn = document.getElementById('getStartedBtn');
        const viewDemosBtn = document.getElementById('viewDemosBtn');
        const pricingButtons = document.querySelectorAll('.pricing-btn');

        // Open modals
        loginBtn.addEventListener('click', function(e) {
            e.preventDefault();
            loginModal.style.display = 'flex';
        });

        signupBtn.addEventListener('click', function(e) {
            e.preventDefault();
            signupModal.style.display = 'flex';
        });

        // Close modals
        closeModalButtons.forEach(button => {
            button.addEventListener('click', function() {
                loginModal.style.display = 'none';
                signupModal.style.display = 'none';
            });
        });

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
            if (e.target === signupModal) {
                signupModal.style.display = 'none';
            }
        });

        // Form submissions
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Login functionality would be implemented here!');
            loginModal.style.display = 'none';
        });

        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Signup functionality would be implemented here!');
            signupModal.style.display = 'none';
        });

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            document.getElementById('contactForm').reset();
        });

        // Button functionality
        getStartedBtn.addEventListener('click', function(e) {
            e.preventDefault();
            signupModal.style.display = 'flex';
        });

        viewDemosBtn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Viewing website demos!');
        });

        pricingButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                signupModal.style.display = 'flex';
            });
        });

        // Social Media Sharing Functionality
        document.getElementById('shareFacebook').addEventListener('click', function(e) {
            e.preventDefault();
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Check out WebCraft - the amazing website builder!");
            window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${text}`, 'facebook-share-dialog', 'width=626,height=436');
        });

        document.getElementById('shareTwitter').addEventListener('click', function(e) {
            e.preventDefault();
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("Check out WebCraft - the amazing website builder!");
            window.open(`https://twitter.com/intent/tweet?text=${text}&url=${url}`, 'twitter-share-dialog', 'width=626,height=436');
        });

        document.getElementById('shareLinkedIn').addEventListener('click', function(e) {
            e.preventDefault();
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent("WebCraft - Create Websites Without Limits");
            const summary = encodeURIComponent("The most powerful website builder for creating stunning websites without coding.");
            window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${url}`, 'linkedin-share-dialog', 'width=626,height=436');
        });

        document.getElementById('sharePinterest').addEventListener('click', function(e) {
            e.preventDefault();
            const url = encodeURIComponent(window.location.href);
            const description = encodeURIComponent("WebCraft - Create Websites Without Limits");
            const media = encodeURIComponent("https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80");
            window.open(`https://pinterest.com/pin/create/button/?url=${url}&description=${description}&media=${media}`, 'pinterest-share-dialog', 'width=626,height=436');
        });

        // Footer social media links (already have target="_blank")
        // Adding confirmation for footer social links
        const footerSocialLinks = document.querySelectorAll('.social-links a');
        footerSocialLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Allow default behavior (opening in new tab) but add a confirmation
                if(!confirm('You are about to visit our social media page. Continue?')) {
                    e.preventDefault();
                }
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Simple animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.feature-card, .testimonial-card, .pricing-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>