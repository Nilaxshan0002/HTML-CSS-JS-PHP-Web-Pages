<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCraft Pro | Professional Web Development Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #2563eb;
            --secondary: #3b82f6;
            --accent: #7c3aed;
            --light: #f8fafc;
            --dark: #1e293b;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }

        body {
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            font-size: 28px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-links a:hover {
            color: #e0f2fe;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
        }

        /* Hero Section */
        .hero {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80') no-repeat center center/cover;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .section-title p {
            color: #64748b;
            max-width: 700px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: var(--light);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }

        /* Quality Section */
        .quality {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .quality-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .quality-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .quality-content p {
            font-size: 18px;
            max-width: 800px;
            margin-bottom: 30px;
        }

        .quality-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            width: 100%;
            margin-top: 40px;
        }

        .quality-feature {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .quality-feature i {
            font-size: 36px;
            margin-bottom: 15px;
            color: #e0f2fe;
        }

        /* Portfolio Section */
        .portfolio {
            padding: 80px 0;
            background: #f8fafc;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .portfolio-item {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .portfolio-img {
            height: 200px;
            overflow: hidden;
        }

        .portfolio-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .portfolio-item:hover .portfolio-img img {
            transform: scale(1.1);
        }

        .portfolio-info {
            padding: 20px;
        }

        .portfolio-info h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* Testimonials Section */
        .testimonials {
            padding: 80px 0;
            background: white;
        }

        .testimonials-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial {
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .testimonial-content {
            margin-bottom: 20px;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 5px;
        }

        /* Contact Form */
        .contact {
            padding: 80px 0;
            background: #f8fafc;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #cbd5e1;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--secondary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: var(--primary);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: all 0.5s ease;
            }

            .nav-links.active {
                left: 0;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span>WebCraft Pro</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Professional Web Development Services</h1>
                <p>We are a solution-oriented digital agency and talent network. We channel creativity, technical expertise, and strategic thinking to build exceptional digital experiences.</p>
                <a href="#contact" class="btn">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a comprehensive range of web development services to help your business thrive online</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Custom Web Development</h3>
                    <p>Tailor-made websites and web applications designed to meet your specific business requirements and goals.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-Commerce Solutions</h3>
                    <p>Complete online store development with secure payment processing and inventory management.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Responsive Design</h3>
                    <p>Websites that look and function perfectly on all devices, from desktops to smartphones.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Optimization</h3>
                    <p>Search engine optimized websites that rank higher and attract more organic traffic.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Maintenance & Support</h3>
                    <p>Ongoing website maintenance, updates, and technical support to keep your site running smoothly.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <p>Faster loading times and improved performance for better user experience and conversions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section class="quality">
        <div class="container">
            <div class="quality-content">
                <h2>Our Commitment to Quality</h2>
                <p>At WebCraft Pro, we believe that quality is not just a feature—it's a fundamental principle that guides everything we do. From the initial consultation to the final delivery, we maintain the highest standards of excellence.</p>
                
                <div class="quality-features">
                    <div class="quality-feature">
                        <i class="fas fa-medal"></i>
                        <h3>Premium Quality</h3>
                        <p>We deliver exceptional quality in every project we undertake.</p>
                    </div>
                    <div class="quality-feature">
                        <i class="fas fa-clock"></i>
                        <h3>On-Time Delivery</h3>
                        <p>Your projects are delivered on schedule, every time.</p>
                    </div>
                    <div class="quality-feature">
                        <i class="fas fa-headset"></i>
                        <h3>24/7 Support</h3>
                        <p>Round-the-clock support for all your technical needs.</p>
                    </div>
                    <div class="quality-feature">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Innovative Solutions</h3>
                        <p>Creative and cutting-edge approaches to complex challenges.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>Our Portfolio</h2>
                <p>Explore some of our recent projects and see the quality of our work</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="E-Commerce Website">
                    </div>
                    <div class="portfolio-info">
                        <h3>E-Commerce Store</h3>
                        <p>Fully responsive online store with payment integration</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Corporate Website">
                    </div>
                    <div class="portfolio-info">
                        <h3>Corporate Website</h3>
                        <p>Modern corporate website with admin dashboard</p>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-img">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Web Application">
                    </div>
                    <div class="portfolio-info">
                        <h3>Web Application</h3>
                        <p>Custom CRM solution for business management</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Client Testimonials</h2>
                <p>See what our clients have to say about our services</p>
            </div>
            <div class="testimonials-container">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"WebCraft Pro transformed our online presence. Their team delivered a stunning website that perfectly captures our brand identity and has significantly increased our conversion rates."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Johnson">
                        <div class="author-info">
                            <h4>Sarah Johnson</h4>
                            <p>Marketing Director, TechSolutions Inc.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-content">
                        <p>"The e-commerce website developed by WebCraft Pro has exceeded our expectations. The user experience is seamless, and we've seen a 40% increase in online sales since launch."</p>
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        <div class="author-info">
                            <h4>Michael Chen</h4>
                            <p>CEO, FashionForward Retail</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with us for a free consultation</p>
            </div>
            <div class="contact-form">
                <form id="contactForm" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" name="service" class="form-control" required>
                            <option value="">Select a service</option>
                            <option value="web-development">Custom Web Development</option>
                            <option value="ecommerce">E-Commerce Solutions</option>
                            <option value="responsive-design">Responsive Design</option>
                            <option value="seo">SEO Optimization</option>
                            <option value="maintenance">Maintenance & Support</option>
                            <option value="optimization">Performance Optimization</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
                <div id="formMessage" style="margin-top: 20px;"></div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>WebCraft Pro</h3>
                    <p>Providing innovative web development solutions since 2015. We help businesses grow and thrive in the digital landscape.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">E-Commerce Solutions</a></li>
                        <li><a href="#">Responsive Design</a></li>
                        <li><a href="#">SEO Optimization</a></li>
                        <li><a href="#">Maintenance & Support</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Connect With Us</h3>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p>Email: info@webcraftpro.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2015 - 2023 WebCraft Pro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactive Features -->
    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', (e) => {
            e.stopPropagation();
            navLinks.classList.toggle('active');
            hamburger.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile nav when clicking outside
        document.addEventListener('click', (e) => {
            if (navLinks.classList.contains('active') && !e.target.closest('.nav-links') && !e.target.closest('.hamburger')) {
                navLinks.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });

        // Close mobile nav when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Form Submission with Validation
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');

        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            if (name === '' || email === '' || service === '' || message === '') {
                showMessage('Please fill in all required fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }
            
            // Simulate form submission
            showMessage('Thank you for your message! We will get back to you soon.', 'success');
            contactForm.reset();
        });

        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function showMessage(text, type) {
            formMessage.textContent = text;
            formMessage.className = type;
            formMessage.style.display = 'block';
            formMessage.style.padding = '10px';
            formMessage.style.borderRadius = '5px';
            formMessage.style.marginTop = '20px';
            
            if (type === 'error') {
                formMessage.style.backgroundColor = '#ffebee';
                formMessage.style.color = '#c62828';
            } else {
                formMessage.style.backgroundColor = '#e8f5e9';
                formMessage.style.color = '#2e7d32';
            }
            
            // Hide message after 5 seconds
            setTimeout(() => {
                formMessage.style.display = 'none';
            }, 5000);
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Prevent social media links from being affected by smooth scrolling
        document.querySelectorAll('.social-links a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.stopPropagation();
                // Let the default behavior (opening in new tab) happen
            });
        });
    </script>
</body>
</html>