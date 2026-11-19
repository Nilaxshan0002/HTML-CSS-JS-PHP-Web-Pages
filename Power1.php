<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BizBud - Business Consulting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        :root {
            --primary-color: #1a5276;
            --secondary-color: #2e86c1;
            --accent-color: #f39c12;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --text-color: #333;
            --transition: all 0.3s ease;
        }
        
        body {
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: var(--transition);
        }
        
        .btn:hover {
            background: #e67e22;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--primary-color);
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            margin: 15px auto;
        }
        
        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin: 0 15px;
        }
        
        .nav-menu a {
            color: var(--dark-color);
            font-weight: 500;
            transition: var(--transition);
        }
        
        .nav-menu a:hover {
            color: var(--accent-color);
        }
        
        .call-now-btn {
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            transition: var(--transition);
        }
        
        .call-now-btn:hover {
            background: var(--secondary-color);
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            margin-top: 70px;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
        }
        
        .hero-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--accent-color);
            margin-bottom: 20px;
        }
        
        .service-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        /* About Section */
        .about {
            background: var(--light-color);
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        
        .about-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        /* Clients Section */
        .clients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            align-items: center;
        }
        
        .client-logo {
            filter: grayscale(100%);
            opacity: 0.7;
            transition: var(--transition);
            text-align: center;
        }
        
        .client-logo:hover {
            filter: grayscale(0);
            opacity: 1;
        }
        
        .client-logo img {
            max-width: 100%;
            height: auto;
        }
        
        /* Testimonials Section */
        .testimonials {
            background: var(--light-color);
        }
        
        .testimonials-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .testimonial {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            display: none;
        }
        
        .testimonial.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: var(--primary-color);
        }
        
        .testimonial-role {
            color: #777;
            font-size: 0.9rem;
        }
        
        .testimonial-controls {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .testimonial-control {
            background: var(--secondary-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .testimonial-control:hover {
            background: var(--primary-color);
        }
        
        /* Contact Section */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--accent-color);
        }
        
        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
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
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            border-color: var(--secondary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 134, 193, 0.2);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background: var(--accent-color);
        }
        
        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background: var(--accent-color);
        }
        
        .footer-links ul li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #bbb;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--accent-color);
            padding-left: 5px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            color: #bbb;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--accent-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content,
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                background: white;
                width: 80%;
                height: calc(100vh - 70px);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: var(--transition);
                box-shadow: 5px 0 15px rgba(0,0,0,0.1);
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 15px 0;
            }
            
            .hamburger {
                display: block;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .btn {
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">BizBud</a>
            
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#clients">Clients</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            
            <a href="tel:+1234567890" class="call-now-btn">Call Now</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1 class="hero-title">The Power of Good Advice</h1>
            <p class="hero-text">I'm a paragraph. Click here to add your own text and edit me. It's easy to edit me. Just click to edit and add your own content.</p>
            <a href="#services" class="btn">Learn More</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-briefcase"></i></div>
                    <h3 class="service-title">Business Strategy</h3>
                    <p>We help you develop strategies that position your business for sustainable growth and competitive advantage.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                    <h3 class="service-title">Financial Consulting</h3>
                    <p>Our financial experts provide insights to optimize your financial performance and investment decisions.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-rocket"></i></div>
                    <h3 class="service-title">Marketing Solutions</h3>
                    <p>We create data-driven marketing strategies that connect you with your target audience effectively.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="BizBud Team">
                </div>
                
                <div class="about-text">
                    <h2>We Provide Top Business Solutions</h2>
                    <p>BizBud is a leading consulting firm dedicated to helping businesses reach their full potential. With years of experience and a team of expert consultants, we provide tailored solutions that address your unique challenges.</p>
                    <p>Our approach combines industry expertise with innovative thinking to deliver measurable results. We believe in building long-term partnerships with our clients, working closely with you to achieve sustainable success.</p>
                    <a href="#contact" class="btn">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="section" id="clients">
        <div class="container">
            <h2 class="section-title">Our Clients</h2>
            
            <div class="clients-grid">
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/1a5276/ffffff?text=Client+1" alt="Client 1">
                </div>
                
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/2e86c1/ffffff?text=Client+2" alt="Client 2">
                </div>
                
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/2c3e50/ffffff?text=Client+3" alt="Client 3">
                </div>
                
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/f39c12/ffffff?text=Client+4" alt="Client 4">
                </div>
                
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/1a5276/ffffff?text=Client+5" alt="Client 5">
                </div>
                
                <div class="client-logo">
                    <img src="https://via.placeholder.com/150x80/2e86c1/ffffff?text=Client+6" alt="Client 6">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            
            <div class="testimonials-slider">
                <div class="testimonial active">
                    <p class="testimonial-text">"BizBud transformed our business strategy. Their insights helped us increase revenue by 40% in just one year. I highly recommend their services to any business looking to grow."</p>
                    <h4 class="testimonial-author">Sarah Johnson</h4>
                    <p class="testimonial-role">CEO, TechSolutions Inc.</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">"The financial consulting we received from BizBud was exceptional. They helped us optimize our investments and reduce costs without compromising on quality."</p>
                    <h4 class="testimonial-author">Michael Chen</h4>
                    <p class="testimonial-role">CFO, Global Ventures</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">"Working with BizBud was a game-changer for our marketing efforts. Their data-driven approach helped us reach our target audience more effectively than ever before."</p>
                    <h4 class="testimonial-author">Emily Rodriguez</h4>
                    <p class="testimonial-role">Marketing Director, BrightStar</p>
                </div>
                
                <div class="testimonial-controls">
                    <div class="testimonial-control prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="testimonial-control next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            
            <div class="contact-container">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h3>Our Address</h3>
                            <p>123 Business Street, Suite 101<br>New York, NY 10001</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h3>Phone Number</h3>
                            <p>+1 (123) 456-7890</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h3>Email Address</h3>
                            <p>info@bizbud.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday - Friday: 9AM - 5PM<br>Saturday: 10AM - 2PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm" method="POST">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                    <div id="formMessage"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <div class="footer-logo">BizBud</div>
                    <p>We provide expert business consulting services to help your organization achieve its full potential and drive sustainable growth.</p>
                    <div class="footer-social">
                        <a href="https://facebook.com" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://instagram.com" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#">Business Strategy</a></li>
                        <li><a href="#">Financial Consulting</a></li>
                        <li><a href="#">Marketing Solutions</a></li>
                        <li><a href="#">Risk Management</a></li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">HR Solutions</a></li>
                    </ul>
                </div>
                
                <div class="footer-newsletter">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter to receive updates on the latest business trends and insights.</p>
                    <form id="newsletterForm">
                        <div class="form-group">
                            <input type="email" placeholder="Your Email Address" class="form-control" required>
                        </div>
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 BizBud. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top"><i class="fas fa-arrow-up"></i></div>

    <script>
        // Navigation Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.innerHTML = navMenu.classList.contains('active') ? '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
        
        // Testimonial Slider
        const testimonials = document.querySelectorAll('.testimonial');
        const prevBtn = document.querySelector('.testimonial-control.prev');
        const nextBtn = document.querySelector('.testimonial-control.next');
        let currentTestimonial = 0;
        
        function showTestimonial(index) {
            testimonials.forEach(testimonial => testimonial.classList.remove('active'));
            testimonials[index].classList.add('active');
        }
        
        prevBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
            showTestimonial(currentTestimonial);
        });
        
        nextBtn.addEventListener('click', () => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        });
        
        // Auto-rotate testimonials
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
        
        // Back to Top Button
        const backToTopBtn = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('active');
            } else {
                backToTopBtn.classList.remove('active');
            }
        });
        
        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Form Validation and Submission
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if (name === '' || email === '' || subject === '' || message === '') {
                formMessage.textContent = 'Please fill in all fields.';
                formMessage.style.color = 'red';
                return;
            }
            
            // Email validation
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                formMessage.textContent = 'Please enter a valid email address.';
                formMessage.style.color = 'red';
                return;
            }
            
            // If validation passes, show success message
            formMessage.textContent = 'Thank you for your message! We will get back to you soon.';
            formMessage.style.color = 'green';
            
            // In a real application, you would send the form data to a server here
            // For this example, we'll just reset the form
            contactForm.reset();
            
            // Clear message after 5 seconds
            setTimeout(() => {
                formMessage.textContent = '';
            }, 5000);
        });
        
        // Newsletter Form
        const newsletterForm = document.getElementById('newsletterForm');
        
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for subscribing to our newsletter!');
            newsletterForm.reset();
        });
        
        // Smooth scrolling for navigation links
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
    </script>
</body>
</html>