<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Agency | Excellence Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #4e54c8;
            --secondary: #8f94fb;
            --accent: #ff6b6b;
            --dark: #333;
            --light: #f9f9f9;
            --transition: all 0.3s ease;
        }

        body {
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
            background-color: #f8f9fa;
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
            padding: 12px 28px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border-radius: 30px;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--dark);
        }

        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-container {
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

        .nav-menu {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            position: relative;
        }

        .language-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 120px;
            display: none;
        }

        .language-dropdown.active {
            display: block;
        }

        .language-option {
            padding: 10px 15px;
            cursor: pointer;
            transition: var(--transition);
        }

        .language-option:hover {
            background: #f5f5f5;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            padding-top: 150px;
            padding-bottom: 80px;
            background: linear-gradient(to right, rgba(78, 84, 200, 0.1), rgba(143, 148, 251, 0.1)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23f8f9fa"/><path d="M0 50 L100 50" stroke="%234e54c8" stroke-width="0.5" stroke-dasharray="5,5"/><path d="M50 0 L50 100" stroke="%234e54c8" stroke-width="0.5" stroke-dasharray="5,5"/></svg>');
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 600px;
            z-index: 2;
            position: relative;
        }

        .hero-badge {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #555;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
        }

        .hero-image {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 50%;
            z-index: 1;
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        /* Elements Section */
        .elements {
            background: var(--light);
        }

        .tab-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
        }

        .tab-btn {
            padding: 10px 20px;
            background: white;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
        }

        .tab-btn.active {
            background: var(--primary);
            color: white;
        }

        .tab-content {
            display: none;
            text-align: center;
            max-width: 700px;
        }

        .tab-content.active {
            display: block;
        }

        /* News Section */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .news-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .news-image {
            height: 200px;
            width: 100%;
            object-fit: cover;
            background-color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .news-content {
            padding: 20px;
        }

        .news-date {
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .news-title {
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-content {
            max-width: 500px;
        }

        .contact-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .contact-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #444;
            border-radius: 50%;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
            color: #bbb;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-image {
                width: 40%;
                opacity: 0.3;
            }

            .contact-container {
                flex-direction: column;
                gap: 40px;
            }

            .contact-form {
                width: 100%;
                max-width: 500px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 80px;
                left: -100%;
                background: white;
                width: 100%;
                flex-direction: column;
                gap: 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transition: 0.5s;
                padding: 20px 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-link {
                padding: 15px;
                display: block;
                text-align: center;
            }

            .hamburger {
                display: block;
            }

            .hero {
                padding-top: 120px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-actions {
                flex-direction: column;
            }

            .hero-image {
                display: none;
            }
        }

        /* PHP Simulation Styles */
        .php-simulation {
            background: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            font-family: monospace;
        }

        .server-response {
            background: #444;
            color: #0f0;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            font-family: monospace;
            white-space: pre-wrap;
        }

        .success {
            color: #4CAF50;
            font-weight: bold;
            margin: 10px 0;
        }

        .error {
            color: #f44336;
            font-weight: bold;
            margin: 10px 0;
        }

        /* Notification */
        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 15px 25px;
            background: #4CAF50;
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

        /* New styles for hidden sections */
        .hidden-section {
            display: none;
            padding: 80px 0;
        }

        .visible {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">DigitalAgency</a>
            
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#pages" class="nav-link" data-section="pages">Pages</a></li>
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#elements" class="nav-link">Elements</a></li>
                <li><a href="#news" class="nav-link">News</a></li>
            </ul>
            
            <div class="header-actions">
                <div class="language-selector">
                    <span>EN</span>
                    <i class="fas fa-chevron-down"></i>
                    <div class="language-dropdown">
                        <div class="language-option" data-lang="EN">English</div>
                        <div class="language-option" data-lang="ES">Español</div>
                        <div class="language-option" data-lang="FR">Français</div>
                        <div class="language-option" data-lang="DE">Deutsch</div>
                    </div>
                </div>
                <a href="#contact" class="btn">Contact Us →</a>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">70% Off for first 3 months</span>
                <h1 class="hero-title">Digital Agency with Excellence Services.</h1>
                <p class="hero-description">The 3 golden rules professional graphic designer don't want you to know about.</p>
                <div class="hero-actions">
                    <a href="#about" class="btn" data-section="about">More About Us</a>
                    <a href="#demo" class="btn btn-outline" data-section="demo">See live demo</a>
                </div>
            </div>
        </div>
        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAwIiBoZWlnaHQ9IjUwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjRkZGIiBmaWxsLW9wYWNpdHk9IjAuNSIvPjxjaXJjbGUgY3g9IjE1MCIgY3k9IjE1MCIgcj0iODAiIGZpbGw9IiM0RTU0QzgiIGZpbGwtb3BhY2l0eT0iMC43Ii8+PGNpcmNsZSBjeD0iNDUwIiBjeT0iMjUwIiByPSIxMDAiIGZpbGw9IiM4Rjk0RkIiIGZpbGwtb3BhY2l0eT0iMC41Ii8+PGNpcmNsZSBjeD0iMzUwIiBjeT0iMzcwIiByPSI3MCIgZmlsbD0iI0ZGNjZCNiIgZmlsbC1vcGFjaXR5PSIwLjYiLz48L3N2Zz4=" alt="Hero Illustration" class="hero-image">
    </section>

    <!-- Features Section -->
    <section class="section" id="features">
        <div class="container">
            <h2 class="section-title">Our Excellent Services</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="feature-title">Graphic Design</h3>
                    <p>Professional graphic design services that will make your brand stand out from the competition.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="feature-title">Web Development</h3>
                    <p>Custom web development solutions tailored to your specific business needs and goals.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Digital Marketing</h3>
                    <p>Data-driven digital marketing strategies to grow your online presence and increase conversions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Elements Section -->
    <section class="section elements" id="elements">
        <div class="container">
            <h2 class="section-title">Creative Elements</h2>
            <div class="tab-container">
                <div class="tabs">
                    <div class="tab-btn active" data-tab="tab1">Design</div>
                    <div class="tab-btn" data-tab="tab2">Development</div>
                    <div class="tab-btn" data-tab="tab3">Marketing</div>
                </div>
                
                <div class="tab-content active" id="tab1">
                    <h3>Innovative Design Solutions</h3>
                    <p>Our design team creates visually stunning and highly functional designs that capture your brand's essence and engage your audience.</p>
                </div>
                
                <div class="tab-content" id="tab2">
                    <h3>Cutting-Edge Development</h3>
                    <p>We use the latest technologies to build fast, secure, and scalable web applications that drive your business forward.</p>
                </div>
                
                <div class="tab-content" id="tab3">
                    <h3>Strategic Marketing Approach</h3>
                    <p>Our data-driven marketing strategies are designed to increase your visibility, engagement, and conversion rates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section" id="news">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-image">
                        Web Design Trends
                    </div>
                    <div class="news-content">
                        <div class="news-date">August 27, 2025</div>
                        <h3 class="news-title">The Future of Web Design in 2025</h3>
                        <p>Discover the latest trends that will shape the web design landscape in the coming year.</p>
                        <a href="#" class="btn-outline" style="padding: 8px 15px; margin-top: 10px;">Read More</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-image">
                        SEO Strategies
                    </div>
                    <div class="news-content">
                        <div class="news-date">August 20, 2025</div>
                        <h3 class="news-title">How to Improve Your SEO Ranking</h3>
                        <p>Learn proven strategies to boost your website's visibility in search engine results.</p>
                        <a href="#" class="btn-outline" style="padding: 8px 15px; margin-top: 10px;">Read More</a>
                    </div>
                </div>
                
                <div class="news-card">
                    <div class="news-image">
                        Responsive Design
                    </div>
                    <div class="news-content">
                        <div class="news-date">August 15, 2025</div>
                        <h3 class="news-title">Benefits of Responsive Web Design</h3>
                        <p>Find out why responsive design is crucial for your online success in today's mobile-first world.</p>
                        <a href="#" class="btn-outline" style="padding: 8px 15px; margin-top: 10px;">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PHP Contact Form Section -->
    <section class="section contact" id="contact">
        <div class="container contact-container">
            <div class="contact-content">
                <h2 class="contact-title">Call Us <a href="tel:+880762009" style="color: white;">+880.762.009</a></h2>
                <p>Have a project in mind? Let's talk about how we can help your business grow. Our team is ready to answer your questions and provide solutions tailored to your needs.</p>
            </div>
            
            <form class="contact-form" id="contactForm" method="POST">
                <div class="form-group">
                    <input type="text" class="form-input" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-input" name="message" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn" style="width: 100%">Send Message</button>
            </form>
        </div>
    </section>

    <!-- PHP Simulation Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">PHP Form Processing Simulation</h2>
            <div class="php-simulation">
                <h3>Simulated PHP Code:</h3>
                <pre>
// PHP form handling simulation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validate inputs
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send email (simulated)
        $to = "contact@digitalagency.com";
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";
        
        // In a real environment, you would use: mail($to, $subject, $body, $headers);
        $mail_sent = true; // Simulated success
        
        if ($mail_sent) {
            echo "&lt;div class='success'&gt;Thank you for your message! We'll get back to you soon.&lt;/div&gt;";
            
            // Store in database (simulated)
            $db_connection = mysqli_connect("localhost", "username", "password", "database");
            $query = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            mysqli_query($db_connection, $query);
            mysqli_close($db_connection);
        } else {
            echo "&lt;div class='error'&gt;Sorry, there was an error sending your message. Please try again.&lt;/div&gt;";
        }
    } else {
        echo "&lt;div class='error'&gt;Please fill in all required fields.&lt;/div&gt;";
    }
}
                </pre>
                
                <button id="simulatePhp" class="btn">Simulate PHP Form Processing</button>
                
                <div id="phpOutput" class="server-response">
                    // PHP response will appear here after form submission
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (for More About Us link) -->
    <section id="about" class="hidden-section">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <p>We are a digital agency focused on delivering excellence in all our services. Our team of experts is dedicated to helping your business grow through innovative digital solutions.</p>
            <div class="features-grid" style="margin-top: 40px;">
                <div class="feature-card">
                    <h3 class="feature-title">Our Mission</h3>
                    <p>To provide exceptional digital services that help businesses thrive in the digital landscape through innovation and creativity.</p>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Our Vision</h3>
                    <p>To be the leading digital agency recognized for transforming businesses through cutting-edge digital solutions.</p>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Our Values</h3>
                    <p>Excellence, Innovation, Integrity, Collaboration, and Client Success are at the core of everything we do.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Section (for See Live Demo link) -->
    <section id="demo" class="hidden-section">
        <div class="container">
            <h2 class="section-title">Live Demo</h2>
            <p>Here you would see a live demo of our work. This section would showcase our projects and capabilities.</p>
            <div style="background: white; padding: 30px; border-radius: 10px; margin-top: 30px; text-align: center;">
                <h3>Project Showcase</h3>
                <p>Our portfolio includes websites, web applications, and digital marketing campaigns for various industries.</p>
                <div style="display: flex; justify-content: center; gap: 20px; margin-top: 20px; flex-wrap: wrap;">
                    <div style="width: 200px; height: 150px; background: linear-gradient(135deg, #4e54c8, #8f94fb); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white;">E-commerce Website</div>
                    <div style="width: 200px; height: 150px; background: linear-gradient(135deg, #ff6b6b, #ff9e7d); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white;">Mobile App UI</div>
                    <div style="width: 200px; height: 150px; background: linear-gradient(135deg, #2ecc71, #1abc9c); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: white;">Brand Identity</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pages Section (for Pages link) -->
    <section id="pages" class="hidden-section">
        <div class="container">
            <h2 class="section-title">Our Pages</h2>
            <p>This section would contain links to all our important pages like Services, Portfolio, Team, etc.</p>
            <div class="features-grid" style="margin-top: 40px;">
                <div class="feature-card">
                    <h3 class="feature-title">Services</h3>
                    <p>Explore our comprehensive range of digital services designed to meet your business needs.</p>
                    <a href="#features" class="btn-outline" style="padding: 8px 15px; margin-top: 10px; display: inline-block;">View Services</a>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Portfolio</h3>
                    <p>Browse through our work and see examples of our successful projects and client collaborations.</p>
                    <a href="#demo" class="btn-outline" style="padding: 8px 15px; margin-top: 10px; display: inline-block;">View Portfolio</a>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Team</h3>
                    <p>Meet our talented team of designers, developers, and digital marketing experts.</p>
                    <a href="#about" class="btn-outline" style="padding: 8px 15px; margin-top: 10px; display: inline-block;">Meet the Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="footer-title">DigitalAgency</h3>
                    <p>Providing excellence in digital services since 2015. We help businesses grow with innovative solutions.</p>
                </div>
                
                <div>
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Services</a></li>
                        <li><a href="#elements">Portfolio</a></li>
                        <li><a href="#news">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">SEO Optimization</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-title">Connect With Us</h3>
                    <div class="social-links">
                        <a href="https://facebook.com" class="social-link" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="social-link" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" class="social-link" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2025 DigitalAgency. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Notification -->
    <div class="notification" id="notification">
        Message sent successfully!
    </div>

    <script>
        // Mobile Navigation
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Language selector functionality
        const languageSelector = document.querySelector('.language-selector');
        const languageDropdown = document.querySelector('.language-dropdown');
        const languageText = document.querySelector('.language-selector span');

        languageSelector.addEventListener('click', (e) => {
            e.stopPropagation();
            languageDropdown.classList.toggle('active');
        });

        document.querySelectorAll('.language-option').forEach(option => {
            option.addEventListener('click', () => {
                languageText.textContent = option.dataset.lang;
                languageDropdown.classList.remove('active');
                showNotification('Language changed to ' + option.textContent);
            });
        });

        // Close language dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!languageSelector.contains(e.target)) {
                languageDropdown.classList.remove('active');
            }
        });

        // Tab functionality
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                btn.classList.add('active');
                document.getElementById(btn.dataset.tab).classList.add('active');
            });
        });

        // Form submission
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            showNotification('Message sent successfully!');
            contactForm.reset();
        });

        // Smooth scrolling for anchor links and show hidden sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Show the section if it's hidden
                    if (targetElement.classList.contains('hidden-section')) {
                        targetElement.classList.add('visible');
                    }
                    
                    // Hide other sections
                    document.querySelectorAll('.hidden-section').forEach(section => {
                        if (section.id !== targetId.substring(1)) {
                            section.classList.remove('visible');
                        }
                    });
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Show section based on data-section attribute
        document.querySelectorAll('[data-section]').forEach(element => {
            element.addEventListener('click', function(e) {
                e.preventDefault();
                
                const sectionId = this.getAttribute('data-section');
                const targetElement = document.getElementById(sectionId);
                
                if (targetElement) {
                    // Hide all sections first
                    document.querySelectorAll('.hidden-section').forEach(section => {
                        section.classList.remove('visible');
                    });
                    
                    // Show the target section
                    targetElement.classList.add('visible');
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // PHP Simulation
        document.getElementById('simulatePhp').addEventListener('click', function() {
            const name = document.querySelector('input[name="name"]').value;
            const email = document.querySelector('input[name="email"]').value;
            const message = document.querySelector('textarea[name="message"]').value;
            
            let output = '';
            
            if (name && email && message) {
                output = `<div class="success">Thank you for your message, ${name}! We'll get back to you at ${email} soon.</div>`;
                output += "\n\n// Simulated database query: INSERT INTO contacts (name, email, message) ";
                output += `VALUES ('${name}', '${email}', '${message}')`;
                
                // Show success notification
                showNotification('Form processed successfully!');
            } else {
                output = `<div class="error">Please fill in all required fields.</div>`;
            }
            
            document.getElementById('phpOutput').innerHTML = output;
        });

        // Notification function
        function showNotification(message) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Make phone number clickable
        document.querySelector('.contact-title a').addEventListener('click', function() {
            showNotification('Calling +880.762.009');
        });
    </script>
</body>
</html>