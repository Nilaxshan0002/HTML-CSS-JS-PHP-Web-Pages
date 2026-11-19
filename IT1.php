<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itodo Company - Best IT Services Provider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, #1a2a6c, #2b5876);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: #4ecdc4;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 1.5rem;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 0.5rem;
            border-radius: 4px;
        }
        
        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 2rem;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #4ecdc4;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background: #4ecdc4;
            color: #333;
            padding: 0.8rem 1.8rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #3dbdb5;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* About Section */
        .about {
            padding: 5rem 2rem;
            background: white;
        }
        
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #1a2a6c;
        }
        
        .about p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: #555;
        }
        
        .divider {
            height: 2px;
            width: 100px;
            background: #4ecdc4;
            margin: 2rem auto;
        }
        
        /* Testimonial Section */
        .testimonial {
            background: #1a2a6c;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }
        
        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .testimonial-text {
            font-size: 1.5rem;
            font-style: italic;
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .testimonial-author {
            font-weight: 600;
            font-size: 1.2rem;
            color: #4ecdc4;
        }
        
        /* Services Section */
        .services {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: #1a2a6c;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #777;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 3rem;
            color: #4ecdc4;
            margin-bottom: 1.5rem;
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1a2a6c;
        }
        
        /* Footer */
        footer {
            background: #222;
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: left;
        }
        
        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #4ecdc4;
        }
        
        .footer-section p, .footer-section li {
            margin-bottom: 0.5rem;
            opacity: 0.8;
        }
        
        .footer-section ul {
            list-style: none;
        }
        
        .footer-section ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-section a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-section a:hover {
            color: #4ecdc4;
        }
        
        .footer-bottom {
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }
            
            nav ul {
                margin-top: 1rem;
            }
            
            nav ul li {
                margin: 0 0.5rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">Itodo<span>Company</span></div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1>Best IT Services Provider</h1>
            <h2>Our Itodo Company ID</h2>
            <p>Your trusted partner for innovative technology solutions and digital transformation</p>
            <a href="#services" class="btn">Our Services</a>
        </div>
    </section>
    
    <section class="about" id="about">
        <div class="container about-content">
            <h2>Our Country</h2>
            <p>Punch Techin alli odio, si pulvive eon pincerat nina. Sed quia aliquet neque. Assumit condensatean lavant non nucciat. Com tellus tellus, filosofila eu capius.</p>
            <div class="divider"></div>
            <p>We are a leading IT services provider with a strong presence in our country and beyond. Our team of experts is dedicated to delivering cutting-edge solutions that drive business growth and digital transformation.</p>
        </div>
    </section>
    
    <section class="testimonial">
        <div class="container testimonial-content">
            <div class="testimonial-text">
                "Itodo Company has transformed our business operations with their innovative IT solutions. Their team is professional, knowledgeable, and always delivers on time."
            </div>
            <div class="testimonial-author">— Pep: Gosso</div>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a comprehensive range of IT services to meet your business needs</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Software Development</h3>
                    <p>Custom software solutions tailored to your specific business requirements.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <h3>Cloud Services</h3>
                    <p>Secure and scalable cloud solutions for businesses of all sizes.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cyber Security</h3>
                    <p>Comprehensive security solutions to protect your data and systems.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Network Solutions</h3>
                    <p>Reliable network infrastructure design, implementation, and support.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Data Management</h3>
                    <p>Efficient data storage, processing, and analytics solutions.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>IT Support</h3>
                    <p>24/7 technical support to keep your systems running smoothly.</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Itodo Company</h3>
                    <p>We are a leading provider of IT services, helping businesses transform through technology innovation.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Tech Street, City, Country</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> info@itodocompany.com</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Itodo Company. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
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
        
        // Simple animation for service cards
        document.addEventListener('DOMContentLoaded', function() {
            const serviceCards = document.querySelectorAll('.service-card');
            
            serviceCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });
            
            // Trigger animations
            setTimeout(function() {
                serviceCards.forEach(card => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                });
            }, 300);
        });
    </script>
</body>
</html>