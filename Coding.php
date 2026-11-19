<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodingLab - Create Amazing Websites</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #4e54c8;
            --secondary: #8f94fb;
            --accent: #ff6b6b;
            --dark: #333;
            --light: #f8f9fa;
            --gray: #6c757d;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
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
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(78, 84, 200, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(78, 84, 200, 0.4);
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--primary);
        }
        
        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            margin: 15px auto;
            border-radius: 2px;
        }
        
        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        header.scrolled {
            padding: 10px 0;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .logo span {
            color: var(--accent);
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-item {
            margin: 0 15px;
        }
        
        .nav-link {
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
        }
        
        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: var(--dark);
            transition: all 0.3s ease;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(78, 84, 200, 0.8), rgba(143, 148, 251, 0.8)), url('https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }
        
        .hero-btns {
            animation: fadeIn 1.5s ease;
        }
        
        /* About Section */
        .about-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }
        
        .about-img {
            flex: 1;
            min-width: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .about-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .about-img img:hover {
            transform: scale(1.05);
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        /* Services Section */
        .services {
            background-color: #f8f9fa;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            cursor: pointer;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .service-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        /* Service Detail Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 700px;
            position: relative;
            animation: modalFadeIn 0.3s;
        }
        
        @keyframes modalFadeIn {
            from {opacity: 0; transform: translateY(-50px);}
            to {opacity: 1; transform: translateY(0);}
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 15px;
            right: 20px;
            cursor: pointer;
        }
        
        .close:hover {
            color: var(--accent);
        }
        
        /* Contact Section */
        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .contact-details {
            margin-top: 30px;
        }
        
        .contact-detail {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-right: 15px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            outline: none;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Feedback Section */
        .feedback {
            background: linear-gradient(135deg, rgba(78, 84, 200, 0.9), rgba(143, 148, 251, 0.9)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            color: white;
        }
        
        .testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .testimonial {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .feedback-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
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
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease, transform 0.3s ease;
        }
        
        .social-link:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }
            
            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }
            
            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }
            
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                gap: 0;
                flex-direction: column;
                background-color: white;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                padding: 20px 0;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-item {
                margin: 15px 0;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .modal-content {
                width: 95%;
                margin: 20% auto;
            }
        }
        
        /* Notification */
        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 25px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .notification.show {
            transform: translateY(0);
            opacity: 1;
        }
        
        .notification.error {
            background-color: #f44336;
        }
        
        /* PHP Message */
        .php-message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
        }
        
        .php-message.error {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header id="header">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Coding<span>Lab</span></a>
                
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="#feedback" class="nav-link">Feedback</a></li>
                </ul>
                
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Create Amazing Website</h1>
                <p class="hero-subtitle">Pure HTML & CSS Only</p>
                <div class="hero-btns">
                    <a href="#services" class="btn">Our Services</a>
                    <a href="#contact" class="btn" style="background: transparent; border: 2px solid white; margin-left: 15px;">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="about-content">
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Team working together">
                </div>
                <div class="about-text">
                    <h3>We Create Beautiful Websites</h3>
                    <p>We design and develop visually appealing, user-friendly websites that help businesses stand out online. Our team focuses on creating engaging digital experiences while ensuring functionality and responsiveness.</p>
                    <p>We take pride in delivering high-quality solutions tailored to meet your unique needs, helping your brand connect effectively with your audience.</p>
                    <a href="#services" class="btn" style="margin-top: 20px;">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section services" id="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card" data-service="web-development">
                    <div class="service-icon"><i class="fas fa-code"></i></div>
                    <h3 class="service-title">Web Development</h3>
                    <p>We create responsive, modern websites using the latest technologies to ensure your website stands out.</p>
                </div>
                
                <div class="service-card" data-service="ui-design">
                    <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p>Our designers create intuitive and beautiful interfaces that enhance user experience and engagement.</p>
                </div>
                
                <div class="service-card" data-service="mobile-apps">
                    <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3 class="service-title">Mobile Apps</h3>
                    <p>We develop cross-platform mobile applications that work seamlessly on both iOS and Android devices.</p>
                </div>
                
                <div class="service-card" data-service="seo">
                    <div class="service-icon"><i class="fas fa-search"></i></div>
                    <h3 class="service-title">SEO Optimization</h3>
                    <p>Improve your website's visibility on search engines with our comprehensive SEO strategies.</p>
                </div>
                
                <div class="service-card" data-service="ecommerce">
                    <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h3 class="service-title">E-Commerce</h3>
                    <p>We build secure and scalable e-commerce solutions to help you sell products online effectively.</p>
                </div>
                
                <div class="service-card" data-service="cloud">
                    <div class="service-icon"><i class="fas fa-cloud"></i></div>
                    <h3 class="service-title">Cloud Solutions</h3>
                    <p>Leverage the power of cloud computing with our customized cloud infrastructure solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Detail Modals -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalContent"></div>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <p>Have a project in mind or need help with your website? Feel free to contact us. We're here to help you bring your ideas to life.</p>
                    
                    <div class="contact-details">
                        <div class="contact-detail">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h4>Address</h4>
                                <p>123 Tech Street, San Francisco, CA 94103</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <div class="contact-icon"><i class="fas fa-phone"></i></div>
                            <div>
                                <h4>Phone</h4>
                                <p>+1 (555) 123-4567</p>
                            </div>
                        </div>
                        
                        <div class="contact-detail">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <h4>Email</h4>
                                <p>info@codinglab.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form id="contactForm" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section class="section feedback" id="feedback">
        <div class="container">
            <h2 class="section-title" style="color: white;">Client Feedback</h2>
            
            <div class="testimonials">
                <div class="testimonial">
                    <p class="testimonial-text">"CodingLab transformed our outdated website into a modern, responsive platform. Their team was professional and delivered on time."</p>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson">
                        </div>
                        <div>
                            <h4>Sarah Johnson</h4>
                            <p>Marketing Director, TechCorp</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">"The mobile app developed by CodingLab has significantly improved our customer engagement. Their attention to detail is impressive."</p>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div>
                            <h4>Michael Chen</h4>
                            <p>CEO, StartupHub</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="feedback-form">
                <h3 style="text-align: center; margin-bottom: 20px;">Share Your Feedback</h3>
                <form id="feedbackForm" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    
                    <div class="form-group">
                        <textarea class="form-control" name="feedback" placeholder="Your Feedback" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%; background: var(--accent);">Submit Feedback</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>CodingLab</h3>
                    <p>Creating amazing digital experiences with cutting-edge web technologies and innovative design.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" class="social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="social-link" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://instagram.com" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#feedback">Feedback</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#" data-service="web-development">Web Development</a></li>
                        <li><a href="#" data-service="ui-design">UI/UX Design</a></li>
                        <li><a href="#" data-service="mobile-apps">Mobile Apps</a></li>
                        <li><a href="#" data-service="seo">SEO Optimization</a></li>
                        <li><a href="#" data-service="ecommerce">E-Commerce</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Tech Street, San Francisco, CA</li>
                        <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@codinglab.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 CodingLab. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Notification -->
    <div class="notification" id="notification"></div>

    <!-- JavaScript -->
    <script>
        // Navigation toggle
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
        
        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });
        
        document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }));
        
        // Header scroll effect
        window.addEventListener("scroll", () => {
            const header = document.getElementById("header");
            if (window.scrollY > 50) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
        
        // Form submission handling
        document.getElementById("contactForm").addEventListener("submit", function(e) {
            e.preventDefault();
            showNotification("Your message has been sent successfully!", "success");
            this.reset();
        });
        
        document.getElementById("feedbackForm").addEventListener("submit", function(e) {
            e.preventDefault();
            showNotification("Thank you for your feedback!", "success");
            this.reset();
        });
        
        // Notification function
        function showNotification(message, type = "success") {
            const notification = document.getElementById("notification");
            notification.textContent = message;
            notification.className = "notification";
            
            if (type === "error") {
                notification.classList.add("error");
            }
            
            notification.classList.add("show");
            
            setTimeout(() => {
                notification.classList.remove("show");
            }, 3000);
        }
        
        // Smooth scrolling for anchor links
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
        
        // Service Modal functionality
        const modal = document.getElementById("serviceModal");
        const modalContent = document.getElementById("modalContent");
        const closeModal = document.querySelector(".close");
        
        // Service details data
        const serviceDetails = {
            "web-development": {
                title: "Web Development",
                description: "We specialize in creating responsive, modern websites using the latest technologies. Our web development services include front-end and back-end development, CMS integration, and e-commerce solutions.",
                features: ["Responsive Design", "CMS Integration", "E-commerce Solutions", "SEO Friendly", "Fast Loading"],
                icon: "fas fa-code"
            },
            "ui-design": {
                title: "UI/UX Design",
                description: "Our designers create intuitive and beautiful interfaces that enhance user experience and engagement. We focus on creating designs that are both aesthetically pleasing and highly functional.",
                features: ["User Research", "Wireframing", "Prototyping", "Visual Design", "Usability Testing"],
                icon: "fas fa-paint-brush"
            },
            "mobile-apps": {
                title: "Mobile Apps",
                description: "We develop cross-platform mobile applications that work seamlessly on both iOS and Android devices. Our apps are designed to provide excellent user experiences and meet business objectives.",
                features: ["Cross-Platform Development", "Native iOS & Android", "API Integration", "App Store Deployment", "Maintenance & Support"],
                icon: "fas fa-mobile-alt"
            },
            "seo": {
                title: "SEO Optimization",
                description: "Improve your website's visibility on search engines with our comprehensive SEO strategies. We use white-hat techniques to help you rank higher and attract more organic traffic.",
                features: ["Keyword Research", "On-Page SEO", "Technical SEO", "Content Strategy", "Performance Analytics"],
                icon: "fas fa-search"
            },
            "ecommerce": {
                title: "E-Commerce",
                description: "We build secure and scalable e-commerce solutions to help you sell products online effectively. Our solutions are designed to convert visitors into customers and grow your business.",
                features: ["Shopping Cart", "Payment Gateway", "Inventory Management", "Order Processing", "Customer Management"],
                icon: "fas fa-shopping-cart"
            },
            "cloud": {
                title: "Cloud Solutions",
                description: "Leverage the power of cloud computing with our customized cloud infrastructure solutions. We help businesses migrate to the cloud and optimize their cloud resources.",
                features: ["Cloud Migration", "Server Management", "Database Administration", "Security & Backup", "Cost Optimization"],
                icon: "fas fa-cloud"
            }
        };
        
        // Open modal when service card is clicked
        document.querySelectorAll(".service-card, .footer-links a[data-service]").forEach(element => {
            element.addEventListener("click", function() {
                const serviceId = this.getAttribute("data-service");
                if (serviceId && serviceDetails[serviceId]) {
                    const service = serviceDetails[serviceId];
                    
                    modalContent.innerHTML = `
                        <h2>${service.title}</h2>
                        <p>${service.description}</p>
                        <h3>What We Offer:</h3>
                        <ul>
                            ${service.features.map(feature => `<li>${feature}</li>`).join('')}
                        </ul>
                        <button class="btn" style="margin-top: 20px;">Get This Service</button>
                    `;
                    
                    modal.style.display = "block";
                    
                    // Add event listener to the button in the modal
                    modalContent.querySelector("button").addEventListener("click", function() {
                        modal.style.display = "none";
                        window.location.href = "#contact";
                    });
                }
            });
        });
        
        // Close modal when X is clicked
        closeModal.addEventListener("click", function() {
            modal.style.display = "none";
        });
        
        // Close modal when clicking outside the modal content
        window.addEventListener("click", function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    </script>

    <!-- PHP Processing -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check which form was submitted
        if (isset($_POST['message'])) {
            // Contact form processing
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);
            
            // In a real application, you would process the form data here
            // For example: send an email, save to database, etc.
            
            // For this example, we'll just simulate processing
            echo "<div class='container'><div class='php-message'>Thank you for your message, $name! We will get back to you soon.</div></div>";
            
        } elseif (isset($_POST['feedback'])) {
            // Feedback form processing
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $feedback = htmlspecialchars($_POST['feedback']);
            
            // In a real application, you would process the feedback here
            // For this example, we'll just simulate processing
            echo "<div class='container'><div class='php-message'>Thank you for your feedback, $name! We appreciate your input.</div></div>";
        }
    }
    ?>
</body>
</html>