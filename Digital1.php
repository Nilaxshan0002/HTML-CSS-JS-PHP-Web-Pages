<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Content Hub</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: #ffdd40;
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
                        url('https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
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
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background: #ffdd40;
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
            background: #ffd21f;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        /* Content Sections */
        .section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: #777;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-img {
            height: 200px;
            background-color: #6e8efb;
            background-size: cover;
            background-position: center;
        }
        
        .feature-content {
            padding: 1.5rem;
        }
        
        .feature-content h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        /* Pricing Section */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .pricing-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .pricing-card:hover {
            transform: scale(1.03);
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: #6e8efb;
            margin: 1rem 0;
        }
        
        .pricing-features {
            list-style: none;
            margin: 1.5rem 0;
            text-align: left;
        }
        
        .pricing-features li {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .pricing-features li:before {
            content: "✓";
            color: #6e8efb;
            position: absolute;
            left: 0;
        }
        
        /* Testimonials */
        .testimonials {
            background-color: #6e8efb;
            color: white;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
        }
        
        .testimonial-author {
            font-weight: 600;
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background: #333;
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
            color: #ffdd40;
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
            
            .section {
                padding: 3rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- PHP include for header - would be used in a PHP environment -->
    <?php 
    // This would be included if using PHP
    // include('header.php'); 
    ?>
    
    <header>
        <div class="header-container">
            <div class="logo">Digital<span>Content</span></div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Premium Digital Content Solutions</h1>
            <p>Transform your digital experience with our cutting-edge content platform designed for creators and businesses.</p>
            <a href="#features" class="btn">Explore Features</a>
        </div>
    </section>
    
    <section class="section" id="features">
        <div class="section-title">
            <h2>Amazing Features</h2>
            <p>Discover what makes our digital content platform stand out from the competition</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-img" style="background-image: url('https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="feature-content">
                    <h3>Content Management</h3>
                    <p>Easily organize, categorize, and manage all your digital content in one place with our intuitive system.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-img" style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="feature-content">
                    <h3>Analytics Dashboard</h3>
                    <p>Gain valuable insights into your content performance with detailed analytics and reporting tools.</p>
                </div>
            </div>
            
            <div class="feature-card">
                <div class="feature-img" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                <div class="feature-content">
                    <h3>Seamless Distribution</h3>
                    <p>Distribute your content across multiple platforms with just a few clicks, reaching your audience everywhere.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section" id="pricing">
        <div class="section-title">
            <h2>Flexible Pricing</h2>
            <p>Choose the plan that works best for your needs</p>
        </div>
        
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Starter</h3>
                <div class="price">$19<span>/month</span></div>
                <p>Perfect for individuals and small teams</p>
                <ul class="pricing-features">
                    <li>Up to 5 users</li>
                    <li>100GB storage</li>
                    <li>Basic analytics</li>
                    <li>Email support</li>
                </ul>
                <a href="#" class="btn">Get Started</a>
            </div>
            
            <div class="pricing-card">
                <h3>Professional</h3>
                <div class="price">$49<span>/month</span></div>
                <p>Ideal for growing businesses</p>
                <ul class="pricing-features">
                    <li>Up to 20 users</li>
                    <li>500GB storage</li>
                    <li>Advanced analytics</li>
                    <li>Priority support</li>
                </ul>
                <a href="#" class="btn">Get Started</a>
            </div>
            
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">$99<span>/month</span></div>
                <p>For large organizations</p>
                <ul class="pricing-features">
                    <li>Unlimited users</li>
                    <li>2TB storage</li>
                    <li>Full analytics suite</li>
                    <li>24/7 dedicated support</li>
                </ul>
                <a href="#" class="btn">Get Started</a>
            </div>
        </div>
    </section>
    
    <section class="section testimonials" id="testimonials">
        <div class="section-title">
            <h2>What Our Clients Say</h2>
            <p>Don't just take our word for it - hear from our satisfied customers</p>
        </div>
        
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "This platform has completely transformed how we manage and distribute our digital content. The analytics alone are worth the investment!"
                </div>
                <div class="testimonial-author">- Sarah Johnson, Content Director</div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "We've tried several content management systems, but none compare to the ease of use and powerful features of DigitalContent."
                </div>
                <div class="testimonial-author">- Michael Chen, Tech Startup CEO</div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-text">
                    "The customer support is exceptional. They helped us migrate all our existing content and trained our team on best practices."
                </div>
                <div class="testimonial-author">- Emily Rodriguez, Marketing Manager</div>
            </div>
        </div>
    </section>
    
    <section class="section" id="contact">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>Have questions? We'd love to hear from you</p>
        </div>
        
        <form class="contact-form" id="contactForm">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
    
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>DigitalContent provides cutting-edge solutions for managing and distributing digital content, helping businesses and creators succeed.</p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Email: info@digitalcontent.com</p>
                <p>Phone: +1 (555) 123-4567</p>
                <p>Address: 123 Digital Street, Tech City</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 DigitalContent. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // Simple form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if (name && email && message) {
                alert('Thanks for your message! We\'ll get back to you soon.');
                this.reset();
            } else {
                alert('Please fill in all fields.');
            }
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
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.feature-card, .pricing-card, .testimonial-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            
            observer.observe(card);
            
            card.classList.add('animate-in');
        });
        
        // Add a class to trigger the animation
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.feature-card, .pricing-card, .testimonial-card');
            cards.forEach(card => {
                card.classList.add('animate-in');
            });
        });
    </script>
</body>
</html>