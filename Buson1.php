<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buson - Business Consulting</title>
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
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Top Info Bar */
        .top-bar {
            background: #2c3e50;
            color: white;
            padding: 12px 0;
            font-size: 14px;
        }
        
        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
        }
        
        .contact-info i {
            margin-right: 8px;
            color: #4CA1AF;
        }
        
        .social-links {
            display: flex;
            align-items: center;
        }
        
        .social-links a {
            color: white;
            margin-left: 15px;
            font-size: 16px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #4CA1AF;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80') no-repeat center center/cover;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 25px 0;
        }
        
        .logo {
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
        }
        
        .logo span {
            color: #4CA1AF;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
        }
        
        .nav-links li {
            margin: 0 15px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #4CA1AF;
        }
        
        .contact-now {
            background: #ff6b6b;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .contact-now:hover {
            background: #ff5252;
            transform: translateY(-2px);
        }
        
        .menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }
        
        .hero-subtitle {
            font-size: 18px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #4CA1AF;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-title span {
            color: #4CA1AF;
        }
        
        .hero-description {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background: #4CA1AF;
            color: white;
            padding: 15px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            border: 2px solid #4CA1AF;
        }
        
        .btn:hover {
            background: transparent;
            color: #4CA1AF;
        }
        
        /* Services Section */
        .services {
            padding: 80px 0;
            background: #f9f9f9;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: #7f8c8d;
            max-width: 700px;
            margin: 0 auto;
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
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 40px;
            color: #4CA1AF;
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        
        .service-card p {
            color: #7f8c8d;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
            background: white;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        .about-text p {
            color: #7f8c8d;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            color: white;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .stat-item h3 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        /* Contact Section */
        .contact {
            padding: 80px 0;
            background: #f9f9f9;
        }
        
        .contact-form {
            max-width: 700px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .form-group textarea {
            min-height: 150px;
        }
        
        .submit-btn {
            background: #4CA1AF;
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .submit-btn:hover {
            background: #3d8b99;
        }
        
        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .footer-logo {
            font-size: 28px;
            font-weight: 700;
        }
        
        .footer-logo span {
            color: #4CA1AF;
        }
        
        .footer-links {
            display: flex;
            list-style: none;
        }
        
        .footer-links li {
            margin: 0 15px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #4CA1AF;
        }
        
        .copyright {
            margin-top: 20px;
            opacity: 0.8;
        }
        
        /* Responsive Design */
        @media (max-width: 900px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: #2c3e50;
                padding: 20px;
                text-align: center;
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links li {
                margin: 15px 0;
            }
            
            .menu-btn {
                display: block;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .top-bar-content {
                flex-direction: column;
                gap: 10px;
            }
        }
        
        @media (max-width: 600px) {
            .footer-content {
                flex-direction: column;
            }
            
            .footer-links {
                margin-top: 20px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="contact-info">
                <i class="fas fa-map-marker-alt"></i>
                <span>65/A, 17th floor, Kings land, New York</span>
                <i class="fas fa-envelope" style="margin-left: 20px;"></i>
                <span>info@consulting.com</span>
            </div>
            <div class="social-links">
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
    </div>
    
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">BUS<span>ON</span></a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#">Cases</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#contact" class="contact-now">CONTACT NOW</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
            
            <!-- Hero Section -->
            <section class="hero">
                <p class="hero-subtitle">WELCOME TO BUSON</p>
                <h1 class="hero-title">WE HELP YOU TO <span>GROW YOUR BUSINESS</span></h1>
                <p class="hero-description">Buson provides expert business consulting services to help your company reach new heights and achieve sustainable growth.</p>
                <a href="#services" class="btn">LEARN MORE</a>
            </section>
        </div>
    </header>
    
    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a wide range of services to help your business grow and succeed in today's competitive market.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Business Strategy</h3>
                    <p>Develop effective strategies to drive growth and maximize profitability.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Marketing Solutions</h3>
                    <p>Reach your target audience with tailored marketing campaigns.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Financial Planning</h3>
                    <p>Optimize your financial resources for sustainable growth.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Business Meeting">
                </div>
                <div class="about-text">
                    <h2>About Buson</h2>
                    <p>Buson is a leading business consulting firm with over 15 years of experience helping businesses of all sizes achieve their growth objectives. Our team of experts brings a wealth of knowledge and industry insights to every project.</p>
                    <p>We believe in building long-term relationships with our clients and providing tailored solutions that address their unique challenges and opportunities.</p>
                    <a href="#contact" class="btn">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>250+</h3>
                    <p>Happy Clients</p>
                </div>
                <div class="stat-item">
                    <h3>15+</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item">
                    <h3>98%</h3>
                    <p>Client Retention</p>
                </div>
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Experts</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch with us to discuss how we can help your business grow.</p>
            </div>
            
            <div class="contact-form">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">BUS<span>ON</span></div>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#">Cases</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Buson. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-links').classList.remove('active');
            });
        });
        
        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
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
        
        // Animate stats counter
        function animateStats() {
            const statItems = document.querySelectorAll('.stat-item h3');
            const values = [250, 15, 98, 50];
            const durations = [2000, 2000, 2000, 2000];
            
            statItems.forEach((stat, index) => {
                let startTime = null;
                const endValue = values[index];
                const duration = durations[index];
                
                function animate(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const progress = Math.min((timestamp - startTime) / duration, 1);
                    
                    stat.textContent = Math.floor(progress * endValue) + (index === 2 ? '%' : '+');
                    
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        stat.textContent = endValue + (index === 2 ? '%' : '+');
                    }
                }
                
                requestAnimationFrame(animate);
            });
        }
        
        // Trigger stats animation when stats section is in view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateStats();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(document.querySelector('.stats'));
    </script>
</body>
</html>