<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Website Template</title>
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
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #6c63ff;
            --light: #f8f9fa;
            --dark: #2d3748;
            --accent: #ff6b6b;
            --background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        body {
            color: var(--dark);
            line-height: 1.6;
            background: var(--background);
            min-height: 100vh;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 0.5rem;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            margin-left: 2rem;
            position: relative;
        }
        
        .nav-link {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            transition: color 0.3s;
            padding: 0.5rem 0;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }
        
        /* Hero Section */
        .hero {
            padding: 10rem 0 6rem;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(108, 99, 255, 0.1) 100%);
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.2) 0%, rgba(108, 99, 255, 0.2) 100%);
            top: -150px;
            right: -150px;
            z-index: 0;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.2) 0%, rgba(108, 99, 255, 0.2) 100%);
            bottom: -100px;
            left: -100px;
            z-index: 0;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
            line-height: 1.2;
        }
        
        .hero-title span {
            color: var(--primary);
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            color: var(--secondary);
            margin-bottom: 2.5rem;
        }
        
        .btn {
            display: inline-block;
            padding: 1rem 2.2rem;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid var(--primary);
            box-shadow: 0 4px 10px rgba(67, 97, 238, 0.3);
        }
        
        .btn:hover {
            background-color: transparent;
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(67, 97, 238, 0.4);
        }
        
        /* Features Section */
        .features {
            padding: 6rem 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3.5rem;
            color: var(--dark);
        }
        
        .section-title span {
            color: var(--primary);
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }
        
        .feature-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            text-align: center;
            border-top: 5px solid var(--primary);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.1) 0%, rgba(108, 99, 255, 0.1) 100%);
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 1.5rem;
        }
        
        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1.2rem;
            color: var(--dark);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 6rem 0;
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.05) 0%, rgba(108, 99, 255, 0.05) 100%);
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }
        
        .testimonial-card {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            font-size: 5rem;
            color: rgba(67, 97, 238, 0.1);
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            line-height: 1;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            margin-right: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        /* CTA Section */
        .cta {
            padding: 6rem 0;
            text-align: center;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .cta::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            top: -150px;
            right: -150px;
        }
        
        .cta::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            bottom: -100px;
            left: -100px;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        .cta-text {
            margin-bottom: 2.5rem;
            font-size: 1.2rem;
            position: relative;
            z-index: 1;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-btn {
            background-color: white;
            color: var(--primary);
            position: relative;
            z-index: 1;
        }
        
        .cta-btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
            color: var(--primary-dark);
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 5rem 0 2rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2.5rem;
            margin-bottom: 3rem;
        }
        
        .footer-heading {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: white;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-link {
            margin-bottom: 0.8rem;
        }
        
        .footer-link a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
            display: inline-block;
        }
        
        .footer-link a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .social-link:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #4a5568;
            color: #94a3b8;
            font-size: 0.9rem;
        }
        
        /* Section Spacing */
        section {
            scroll-margin-top: 80px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 80px;
                flex-direction: column;
                background-color: white;
                width: 100%;
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
                padding: 2rem;
                transition: 0.4s;
                z-index: 999;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-item {
                margin: 1.5rem 0;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo"><i class="fas fa-code"></i>WebCraft</a>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Professional Website Templates for <span>Crafting Online Excellence</span> in 2024</h1>
                <p class="hero-subtitle">Build stunning websites with our professionally designed templates. Perfect for businesses, portfolios, and e-commerce.</p>
                <a href="#services" class="btn">READ MORE</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="services" class="features">
        <div class="container">
            <h2 class="section-title">Our <span>Services</span></h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="feature-title">Web Development</h3>
                    <p>We build responsive, modern websites using the latest technologies and frameworks to ensure your site stands out.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="feature-title">UI/UX Design</h3>
                    <p>Our designers create intuitive and beautiful interfaces that enhance user experience and drive engagement.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Mobile Apps</h3>
                    <p>We develop cross-platform mobile applications that provide seamless experiences on all devices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="testimonials">
        <div class="container">
            <h2 class="section-title">Our <span>Portfolio</span></h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"These templates helped us launch our new business website in record time. The quality is exceptional!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JD</div>
                        <div>
                            <h4>John Doe</h4>
                            <p>CEO, TechStart</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The responsive design works perfectly across all devices. Our mobile conversion rate increased by 30%."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SA</div>
                        <div>
                            <h4>Sarah Anderson</h4>
                            <p>Marketing Director</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The code is clean and well-organized, making customization a breeze even for our junior developers."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MJ</div>
                        <div>
                            <h4>Michael Johnson</h4>
                            <p>Lead Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="features">
        <div class="container">
            <h2 class="section-title">About <span>Us</span></h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3 class="feature-title">Our Story</h3>
                    <p>Founded in 2020, we've been helping businesses establish their online presence with cutting-edge web solutions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Our Team</h3>
                    <p>We're a team of passionate designers and developers dedicated to creating exceptional digital experiences.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="feature-title">Our Mission</h3>
                    <p>To empower businesses with beautiful, functional websites that drive growth and success in the digital world.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="cta">
        <div class="container">
            <h2 class="cta-title">Get In Touch With Us</h2>
            <p class="cta-text">Have a project in mind or want to discuss how we can help your business? Contact us today for a free consultation.</p>
            <a href="#contact-form" class="btn cta-btn">Get Started</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-heading">WebCraft</h3>
                    <p>Creating professional website templates for businesses and individuals since 2020.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#home">Home</a></li>
                        <li class="footer-link"><a href="#services">Services</a></li>
                        <li class="footer-link"><a href="#portfolio">Portfolio</a></li>
                        <li class="footer-link"><a href="#about">About</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-heading">Resources</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Documentation</a></li>
                        <li class="footer-link"><a href="#">Tutorials</a></li>
                        <li class="footer-link"><a href="#">Blog</a></li>
                        <li class="footer-link"><a href="#">Support</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-heading">Contact Us</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><i class="fas fa-envelope"></i> Email: info@webcraft.com</li>
                        <li class="footer-link"><i class="fas fa-phone"></i> Phone: +1 (555) 123-4567</li>
                        <li class="footer-link"><i class="fas fa-map-marker-alt"></i> Address: 123 Web Street, Digital City</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2024 WebCraft. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        
        // Close menu when clicking on a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
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
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Sticky header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.boxShadow = '0 2px 15px rgba(0, 0, 0, 0.1)';
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });
    </script>
</body>
</html>