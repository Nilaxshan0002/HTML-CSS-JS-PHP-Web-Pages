<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Solutions | Discover Our Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            padding: 80px 0;
            text-align: center;
            background: url('https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') no-repeat center center/cover;
            color: white;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
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

        /* Features Section */
        .features {
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

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: var(--light);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            margin-bottom: 15px;
            color: var(--dark);
        }

        /* Offices Section */
        .offices {
            padding: 80px 0;
            background: #f8fafc;
        }

        .office-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .office-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .office-img {
            height: 200px;
            overflow: hidden;
        }

        .office-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .office-card:hover .office-img img {
            transform: scale(1.1);
        }

        .office-info {
            padding: 20px;
        }

        .office-info h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* Contact Form */
        .contact {
            padding: 80px 0;
            background: white;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--light);
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
                    <i class="fas fa-building"></i>
                    <span>BusinessSolutions</span>
                </div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#discover">Discover</a></li>
                    <li><a href="#offices">Offices</a></li>
                    <li><a href="#webpages">Webpages</a></li>
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
                <h1>Innovative Business Solutions for Growth</h1>
                <p>We help businesses transform and thrive in the digital age with cutting-edge solutions</p>
                <a href="#contact" class="btn">Get Started</a>
            </div>
        </div>
    </section>

    <!-- Features/Discover Section -->
    <section class="features" id="discover">
        <div class="container">
            <div class="section-title">
                <h2>Discover Our Services</h2>
                <p>Explore our comprehensive range of business solutions designed to drive growth and efficiency</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Custom websites and web applications tailored to your business needs</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>Data-driven marketing strategies to increase your online presence</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Applications</h3>
                    <p>Engaging mobile apps for iOS and Android to connect with your audience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Offices Section -->
    <section class="offices" id="offices">
        <div class="container">
            <div class="section-title">
                <h2>Our Offices</h2>
                <p>Visit us at any of our global locations for a consultation</p>
            </div>
            <div class="office-cards">
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="New York Office">
                    </div>
                    <div class="office-info">
                        <h3>New York Office</h3>
                        <p>123 Broadway, New York, NY 10001</p>
                        <p>Phone: +1 (212) 555-7890</p>
                    </div>
                </div>
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwa90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2065&q=80" alt="London Office">
                    </div>
                    <div class="office-info">
                        <h3>London Office</h3>
                        <p>45 Oxford Street, London, W1D 2EB</p>
                        <p>Phone: +44 20 7946 0958</p>
                    </div>
                </div>
                <div class="office-card">
                    <div class="office-img">
                        <img src="https://images.unsplash.com/photo-1542931287-023b922fa89b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Tokyo Office">
                    </div>
                    <div class="office-info">
                        <h3>Tokyo Office</h3>
                        <p>1-5-1 Marunouchi, Chiyoda-ku, Tokyo 100-0005</p>
                        <p>Phone: +81 3 1234 5678</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Webpages Section -->
    <section class="features" id="webpages">
        <div class="container">
            <div class="section-title">
                <h2>Our Webpages</h2>
                <p>Explore our specialized service pages to learn more about what we offer</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Web Design</h3>
                    <p>Beautiful, responsive designs that convert visitors into customers</p>
                    <a href="#" class="btn" style="margin-top: 15px;">Learn More</a>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-Commerce</h3>
                    <p>Complete online store solutions with secure payment processing</p>
                    <a href="#" class="btn" style="margin-top: 15px;">Learn More</a>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Hosting & Maintenance</h3>
                    <p>Reliable hosting and ongoing support for your digital assets</p>
                    <a href="#" class="btn" style="margin-top: 15px;">Learn More</a>
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
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" required>
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
                    <h3>BusinessSolutions</h3>
                    <p>Providing innovative business solutions since 2018. We help businesses grow and thrive in the digital landscape.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#discover">Discover</a></li>
                        <li><a href="#offices">Offices</a></li>
                        <li><a href="#webpages">Webpages</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Connect With Us</h3>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2018 - 2023 BusinessSolutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactive Features -->
    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
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
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if (name === '' || email === '' || subject === '' || message === '') {
                showMessage('Please fill in all fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showMessage('Please enter a valid email address.', 'error');
                return;
            }
            
            // Simulate form submission
            showMessage('Thank you for your message! We will get back to you soon.', 'success');
            contactForm.reset();
            
            // In a real implementation, you would submit the form to a server here
            // For example using fetch() or allowing the form to submit normally
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

        // Social media links are now functional with target="_blank"
    </script>
</body>
</html>