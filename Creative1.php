<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #6c63ff;
            --secondary: #4a44c9;
            --accent: #ff6584;
            --dark: #2b2b2b;
            --light: #f8f9fa;
            --gray: #6c757d;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
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
                        url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 8rem 2rem;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        
        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: var(--accent);
            font-weight: 400;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 3rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .divider {
            height: 2px;
            width: 100px;
            background: var(--accent);
            margin: 3rem auto;
        }
        
        /* CTA Section */
        .cta {
            padding: 5rem 2rem;
            text-align: center;
            background: white;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: var(--dark);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .btn {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 1rem 2.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1.1rem;
        }
        
        .btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            margin-left: 1rem;
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
        
        /* Why Choose Us Section */
        .why-choose {
            padding: 5rem 2rem;
            background: var(--light);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .section-title p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .why-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .why-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: var(--gray);
            line-height: 1.8;
        }
        
        /* Services Section */
        .services {
            padding: 5rem 2rem;
            background: white;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .service-card {
            background: var(--light);
            border-radius: 10px;
            padding: 2.5rem 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            border-left: 4px solid var(--primary);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }
        
        .service-card p {
            color: var(--gray);
            line-height: 1.8;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
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
            color: var(--accent);
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
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
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
                font-size: 2.5rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
            
            .why-content {
                grid-template-columns: 1fr;
            }
            
            .btn {
                display: block;
                margin: 1rem auto;
                width: 80%;
            }
            
            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">Freelancer</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1>Freelancer</h1>
            <h2>I'm a Creative Designer & Developer</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exque vel adhantat quam ducimus consequatur voluptas doloressa, sapiente.</p>
            <div class="divider"></div>
        </div>
    </section>
    
    <section class="cta">
        <div class="container">
            <h2>GET STARTED</h2>
            <a href="#" class="btn">BUY NOW</a>
        </div>
    </section>
    
    <section class="why-choose" id="about">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>Lorem ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type not scrambled it to make a type specimen book it has survived not only five centuries.</p>
            </div>
            
            <div class="why-content">
                <div class="why-text">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum excepturi omnis dolores nihil vel culpa. Consequuntur nam necessitatibus nulla, luga natus litaque quo repellendus aliquid tempora officiis, amet autem ipsat lorem ipsum dolor sit amet consectetur adipisicing elit. Molitia, exque oalsquam iklaineg dolore rem veniam voluptas laboriosam atque tenetur</p>
                </div>
                
                <div class="why-image">
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Why Choose Us" style="width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="container">
            <div class="services-grid">
                <div class="service-card">
                    <h3>Strategy & Research</h3>
                    <p><strong>Oubisratam eodus porto consequuntur estrum corrupti temporo dolorem sit.</strong></p>
                </div>
                
                <div class="service-card">
                    <h3>Design & Development</h3>
                    <p><strong>Molitia, exque oalsquam iklaineg dolore rem veniam voluptas laboriosam.</strong></p>
                </div>
                
                <div class="service-card">
                    <h3>Management & Marketing</h3>
                    <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</strong></p>
                </div>
                
                <div class="service-card">
                    <h3>Analysing & Testing</h3>
                    <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</strong></p>
                </div>
            </div>
        </div>
    </section>
    
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Me</h3>
                    <p>I'm a creative designer and developer with a passion for building beautiful and functional digital experiences.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Design Street, Creative City</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope"></i> hello@freelancer.com</p>
                </div>
                
                <div class="footer-section">
                    <h3>Follow Me</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Freelancer Portfolio. All rights reserved.</p>
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