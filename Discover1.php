<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sections Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }
        
        body {
            background-color: #0a0a14;
            color: #e2e8f0;
            line-height: 1.6;
            background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .overlay {
            background-color: rgba(10, 10, 20, 0.85);
            min-height: 100vh;
            width: 100%;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: rgba(15, 23, 42, 0.8);
            padding: 20px 0;
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #6366f1;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: #94a3b8;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-links a:hover {
            color: #6366f1;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #6366f1;
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .nav-button {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .nav-button:hover {
            background-color: #4f46e5;
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero {
            padding: 120px 0 100px;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 24px;
            color: #f1f5f9;
            line-height: 1.2;
            background: linear-gradient(to right, #818cf8, #e879f9, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: gradient 3s linear infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        
        .hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #cbd5e1;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 80px;
        }
        
        .primary-button {
            background-color: #6366f1;
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        
        .primary-button:hover {
            background-color: #4f46e5;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }
        
        .secondary-button {
            background-color: transparent;
            color: #6366f1;
            border: 1px solid #6366f1;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        
        .secondary-button:hover {
            background-color: rgba(99, 102, 241, 0.1);
            transform: translateY(-3px);
        }
        
        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 100px;
        }
        
        .feature-card {
            background: rgba(15, 23, 42, 0.6);
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            cursor: pointer;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 24px;
            color: #818cf8;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 16px;
            color: #f1f5f9;
        }
        
        .feature-card p {
            color: #94a3b8;
            margin-bottom: 20px;
            line-height: 1.7;
        }
        
        .feature-link {
            color: #818cf8;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .feature-link:hover {
            color: #e879f9;
        }
        
        .feature-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .feature-link:hover i {
            transform: translateX(4px);
        }
        
        /* Filter Section */
        .filter-section {
            background: rgba(15, 23, 42, 0.6);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .filter-section h2 {
            text-align: center;
            margin-bottom: 35px;
            color: #f1f5f9;
            font-size: 2rem;
        }
        
        .filter-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
        }
        
        .filter-tag {
            background: rgba(30, 41, 59, 0.5);
            color: #cbd5e1;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .filter-tag:hover, .filter-tag.active {
            background: #6366f1;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 16px;
            margin-bottom: 80px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .cta-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .cta-input {
            flex: 1;
            padding: 16px 20px;
            border: none;
            border-radius: 8px 0 0 8px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.9);
        }
        
        .cta-button {
            background: #0f172a;
            color: white;
            border: none;
            padding: 16px 30px;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background: #1e293b;
        }
        
        /* Footer */
        footer {
            background: rgba(15, 23, 42, 0.9);
            color: white;
            padding: 80px 0 40px;
            backdrop-filter: blur(10px);
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 24px;
            color: #e2e8f0;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 12px;
        }
        
        .footer-column a {
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-column a:hover {
            color: #6366f1;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            background: rgba(30, 41, 59, 0.7);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            transition: all 0.3s ease;
            color: #cbd5e1;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: #6366f1;
            color: white;
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
        }
        
        /* Section Content (initially hidden) */
        .section-content {
            display: none;
            background: rgba(15, 23, 42, 0.7);
            padding: 40px;
            border-radius: 16px;
            margin: 40px 0;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .section-content h2 {
            color: #818cf8;
            margin-bottom: 20px;
        }
        
        .section-content p {
            color: #cbd5e1;
            line-height: 1.7;
            margin-bottom: 20px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .primary-button, .secondary-button {
                width: 100%;
                max-width: 300px;
            }
            
            .cta-form {
                flex-direction: column;
            }
            
            .cta-input {
                border-radius: 8px;
                margin-bottom: 10px;
            }
            
            .cta-button {
                border-radius: 8px;
            }
            
            .nav-links {
                display: none;
            }
            
            .feature-card {
                padding: 30px 20px;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animated {
            animation: fadeIn 1s ease-out;
        }
        
        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">SectionLib</div>
                    <ul class="nav-links">
                        <li><a href="#" data-section="home">Home</a></li>
                        <li><a href="#" data-section="sections">Sections</a></li>
                        <li><a href="#" data-section="hover-effects">Hover Effects</a></li>
                        <li><a href="#" data-section="svg">SVG</a></li>
                        <li><a href="#" data-section="sponsor">Sponsor</a></li>
                        <li><a href="#" data-section="more">More</a></li>
                    </ul>
                    <button class="nav-button" id="submit-button">Submit</button>
                    <button class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </nav>
            </div>
        </header>

        <section class="hero">
            <div class="container">
                <h1>Discover curated website section design library</h1>
                <p>Showcasing over 1,000 website sections, hover effects, and an extensive SVG library. Let's build from here.</p>
                <div class="hero-buttons">
                    <button class="primary-button" id="explore-button">Explore Library</button>
                    <button class="secondary-button" id="demo-button">View Demo</button>
                </div>
                <div class="features">
                    <div class="feature-card animated" id="feature-1">
                        <div class="feature-icon">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <h3>New content added weekly</h3>
                        <p>Fresh designs and components added regularly to keep your projects up-to-date.</p>
                        <a href="#" class="feature-link">Explore new content <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="feature-card animated" id="feature-2">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Hardened for productivity</h3>
                        <p>Components designed to save you time and streamline your development process.</p>
                        <a href="#" class="feature-link">Boost productivity <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="feature-card animated" id="feature-3">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Designed for collaboration</h3>
                        <p>Perfect for teams with consistent styling and easy-to-implement components.</p>
                        <a href="#" class="feature-link">Collaborate now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <section class="filter-section">
                <h2>Browse Section Library</h2>
                <div class="filter-tags">
                    <span class="filter-tag active" data-filter="all">All</span>
                    <span class="filter-tag" data-filter="hero">Hero Section</span>
                    <span class="filter-tag" data-filter="feature">Feature Section</span>
                    <span class="filter-tag" data-filter="cta">CTA Section</span>
                    <span class="filter-tag" data-filter="footer">Footer</span>
                    <span class="filter-tag" data-filter="testimonial">Testimonial</span>
                    <span class="filter-tag" data-filter="blog">Blog</span>
                    <span class="filter-tag" data-filter="navbar">Navbar</span>
                    <span class="filter-tag" data-filter="flat">Flat</span>
                    <span class="filter-tag" data-filter="light">Light</span>
                    <span class="filter-tag" data-filter="minimal">Minimal</span>
                    <span class="filter-tag" data-filter="animated">Animated</span>
                </div>
            </section>

            <div id="content-display">
                <!-- Content will be displayed here based on user selection -->
            </div>

            <section class="cta">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter to receive updates on new sections and features.</p>
                <form class="cta-form" id="subscribe-form">
                    <input type="email" class="cta-input" placeholder="Your email address" required>
                    <button type="submit" class="cta-button">Subscribe</button>
                </form>
            </section>
        </div>

        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="footer-column">
                        <h3>SectionLib</h3>
                        <p>A curated library of website sections and components for modern web development.</p>
                    </div>
                    <div class="footer-column">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Tutorials</a></li>
                            <li><a href="#">API Reference</a></li>
                            <li><a href="#">Community</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h3>Connect</h3>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2025 SectionLib. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Navigation functionality
        const navLinks = document.querySelectorAll('.nav-links a');
        const contentDisplay = document.getElementById('content-display');
        
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const section = link.getAttribute('data-section');
                showSection(section);
                
                // Update active state
                navLinks.forEach(l => l.parentElement.classList.remove('active'));
                link.parentElement.classList.add('active');
            });
        });
        
        // Filter tags functionality
        const filterTags = document.querySelectorAll('.filter-tag');
        
        filterTags.forEach(tag => {
            tag.addEventListener('click', () => {
                // Remove active class from all tags
                filterTags.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tag
                tag.classList.add('active');
                
                const filter = tag.getAttribute('data-filter');
                filterContent(filter);
            });
        });
        
        // Button functionality
        document.getElementById('explore-button').addEventListener('click', () => {
            showSection('sections');
        });
        
        document.getElementById('demo-button').addEventListener('click', () => {
            alert('Demo view would be displayed here. In a real application, this would show a live demo.');
        });
        
        document.getElementById('submit-button').addEventListener('click', () => {
            alert('Submit form would appear here. In a real application, this would open a submission form.');
        });
        
        // Feature cards functionality
        const featureCards = document.querySelectorAll('.feature-card');
        
        featureCards.forEach(card => {
            card.addEventListener('click', () => {
                const id = card.getAttribute('id');
                alert(`You clicked on the ${id.replace('-', ' ')}. In a real application, this would show more details.`);
            });
        });
        
        // Social media links functionality
        const socialLinks = document.querySelectorAll('.social-links a');
        
        socialLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const platform = link.querySelector('i').className.replace('fab fa-', '');
                alert(`This would navigate to our ${platform} page. In a real application, this would link to our social media profile.`);
            });
        });
        
        // Form submission
        document.getElementById('subscribe-form').addEventListener('submit', (e) => {
            e.preventDefault();
            const email = e.target.querySelector('input').value;
            
            // In a real application, this would send the email to a server
            alert('Thank you for subscribing with: ' + email);
            e.target.reset();
        });
        
        // Function to show section content
        function showSection(section) {
            let content = '';
            
            switch(section) {
                case 'home':
                    content = '<h2>Home Section</h2><p>Welcome to our website sections library. Browse our collection of curated designs.</p>';
                    break;
                case 'sections':
                    content = '<h2>Website Sections</h2><p>Explore our collection of hero sections, feature sections, CTAs, and more.</p>';
                    break;
                case 'hover-effects':
                    content = '<h2>Hover Effects</h2><p>Discover beautiful hover effects to make your website more interactive.</p>';
                    break;
                case 'svg':
                    content = '<h2>SVG Library</h2><p>Browse our extensive collection of SVG graphics and illustrations.</p>';
                    break;
                case 'sponsor':
                    content = '<h2>Sponsorship</h2><p>Learn about our sponsorship opportunities and how to support our project.</p>';
                    break;
                case 'more':
                    content = '<h2>More Resources</h2><p>Find additional resources, tutorials, and documentation.</p>';
                    break;
                default:
                    content = '<h2>Welcome</h2><p>Select a section from the navigation to explore our library.</p>';
            }
            
            contentDisplay.innerHTML = `<div class="section-content animated">${content}</div>`;
        }
        
        // Function to filter content
        function filterContent(filter) {
            let content = '';
            
            switch(filter) {
                case 'all':
                    content = '<h2>All Sections</h2><p>Displaying all available website sections.</p>';
                    break;
                case 'hero':
                    content = '<h2>Hero Sections</h2><p>Browse our collection of attention-grabbing hero sections.</p>';
                    break;
                case 'feature':
                    content = '<h2>Feature Sections</h2><p>Explore feature sections that highlight your product benefits.</p>';
                    break;
                case 'cta':
                    content = '<h2>CTA Sections</h2><p>Find effective call-to-action sections to convert your visitors.</p>';
                    break;
                case 'footer':
                    content = '<h2>Footer Designs</h2><p>Discover well-designed footer sections for your website.</p>';
                    break;
                case 'testimonial':
                    content = '<h2>Testimonial Sections</h2><p>Showcase customer testimonials with these beautiful designs.</p>';
                    break;
                case 'blog':
                    content = '<h2>Blog Sections</h2><p>Find perfect sections for displaying your blog content.</p>';
                    break;
                case 'navbar':
                    content = '<h2>Navigation Bars</h2><p>Explore responsive and stylish navigation designs.</p>';
                    break;
                default:
                    content = `<h2>${filter.charAt(0).toUpperCase() + filter.slice(1)} Designs</h2><p>Browse our ${filter} style website sections.</p>`;
            }
            
            contentDisplay.innerHTML = `<div class="section-content animated">${content}</div>`;
        }
        
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animated');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                    }
                });
            }, { threshold: 0.1 });
            
            animatedElements.forEach(element => {
                element.style.opacity = 0;
                element.style.transition = 'opacity 0.8s ease-in-out';
                observer.observe(element);
            });
        });
    </script>
</body>
</html>