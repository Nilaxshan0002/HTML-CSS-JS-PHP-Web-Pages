<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoPro - Professional Videography Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a1a1a;
            --secondary: #f5f5f5;
            --accent: #ff3d00;
            --text: #333;
            --light-text: #777;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: var(--secondary);
            color: var(--text);
            line-height: 1.6;
        }
        
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }
        
        .logo span {
            color: var(--accent);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 2rem;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        .menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1536240478700-b869070f9279?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 1rem;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        .btn {
            display: inline-block;
            background: var(--accent);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s;
        }
        
        .btn:hover {
            background: #e03500;
        }
        
        .section {
            padding: 5rem 2rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }
        
        .section-title p {
            color: var(--light-text);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }
        
        .service-card p {
            color: var(--light-text);
            margin-bottom: 1.5rem;
        }
        
        .portfolio {
            background-color: #f9f9f9;
        }
        
        .portfolio-filters {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        
        .filter-btn {
            background: white;
            border: 1px solid #ddd;
            padding: 0.5rem 1.5rem;
            margin: 0.5rem;
            cursor: pointer;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background: var(--accent);
            color: white;
            border-color: var(--accent);
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 250px;
        }
        
        .portfolio-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .portfolio-item:hover img {
            transform: scale(1.1);
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
            padding: 1rem;
            text-align: center;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-overlay h3 {
            color: white;
            margin-bottom: 0.5rem;
        }
        
        .portfolio-overlay p {
            color: #ddd;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            align-items: center;
        }
        
        .about-image {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }
        
        .about-text p {
            margin-bottom: 1rem;
            color: var(--light-text);
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .team-member {
            text-align: center;
        }
        
        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .team-member h3 {
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        .team-member p {
            color: var(--light-text);
        }
        
        .contact {
            background-color: #f9f9f9;
        }
        
        .contact-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .contact-form .form-group {
            margin-bottom: 1.5rem;
        }
        
        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .contact-form textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        footer {
            background: var(--primary);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            margin: 2rem 0;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1.5rem;
            margin: 0 1rem;
            border-radius: 50%;
            transition: all 0.3s;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-5px);
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        
        .close-modal {
            float: right;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--primary);
                padding: 1rem 0;
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links li {
                margin: 1rem 0;
                text-align: center;
            }
            
            .menu-btn {
                display: block;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .section {
                padding: 3rem 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <nav>
            <a href="#" class="logo">Video<span>Pro</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">☰</div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Professional Videography Services</h1>
            <p>We create stunning visual stories that capture your most important moments and help your brand stand out.</p>
            <a href="#contact" class="btn">Get in Touch</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>We offer a comprehensive range of videography services to meet all your needs</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <h3>Wedding Videography</h3>
                <p>Capture your special day with beautiful, cinematic footage that you'll cherish forever. Our team specializes in telling your unique love story.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <h3>Commercial Videos</h3>
                <p>Professional promotional content that showcases your business, products, or services in the best light to attract more customers.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <h3>Event Coverage</h3>
                <p>From corporate events to private parties, we document your important occasions with professional equipment and editing.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <h3>Documentary Filming</h3>
                <p>Tell compelling real-life stories through our documentary filmmaking services for organizations and individuals.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <h3>Video Editing</h3>
                <p>Professional post-production services to transform your raw footage into polished, engaging content.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
            
            <div class="service-card">
                <h3>Aerial Videography</h3>
                <p>Stunning drone footage that adds a dramatic perspective to any project, from real estate to events.</p>
                <a href="#" class="btn learn-more-btn">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section portfolio">
        <div class="section-title">
            <h2>Our Portfolio</h2>
            <p>Browse through our recent work and see the quality we deliver</p>
        </div>
        
        <div class="portfolio-filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="wedding">Weddings</button>
            <button class="filter-btn" data-filter="commercial">Commercial</button>
            <button class="filter-btn" data-filter="events">Events</button>
            <button class="filter-btn" data-filter="documentary">Documentary</button>
        </div>
        
        <div class="portfolio-grid">
            <div class="portfolio-item" data-category="wedding">
                <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Wedding Video">
                <div class="portfolio-overlay">
                    <h3>Sarah & John's Wedding</h3>
                    <p>Beautiful outdoor ceremony captured with multiple cameras</p>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="commercial">
                <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Commercial Video">
                <div class="portfolio-overlay">
                    <h3>Tech Product Launch</h3>
                    <p>Promotional video for a new tech product</p>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="events">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Event Video">
                <div class="portfolio-overlay">
                    <h3>Annual Business Conference</h3>
                    <p>Full coverage of a corporate event with multiple speakers</p>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="documentary">
                <img src="https://images.unsplash.com/photo-1440404653325-ab127d49abc1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Documentary Video">
                <div class="portfolio-overlay">
                    <h3>Community Stories</h3>
                    <p>Documentary about local artisans preserving traditional crafts</p>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="wedding">
                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Wedding Video">
                <div class="portfolio-overlay">
                    <h3>Beach Wedding</h3>
                    <p>Sunset ceremony captured with cinematic techniques</p>
                </div>
            </div>
            
            <div class="portfolio-item" data-category="commercial">
                <img src="https://images.unsplash.com/photo-1460881680858-30d872d5b530?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Commercial Video">
                <div class="portfolio-overlay">
                    <h3>Fashion Brand Campaign</h3>
                    <p>Dynamic video showcasing a new clothing collection</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="section-title">
            <h2>About Us</h2>
            <p>Learn more about our team and approach</p>
        </div>
        
        <div class="about-content">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Our Team">
            </div>
            
            <div class="about-text">
                <h2>We Tell Stories Through Video</h2>
                <p>Founded in 2023, our videography studio brings together a team of passionate professionals with years of experience in film production, editing, and visual storytelling.</p>
                <p>We believe that every project has a unique story to tell, and we're dedicated to capturing that story in the most compelling way possible.</p>
                <p>Using state-of-the-art equipment and innovative techniques, we deliver high-quality video content that exceeds our clients' expectations.</p>
                <a href="#contact" class="btn">Get to Know Us</a>
            </div>
        </div>
        
        <div class="team-grid">
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team Member">
                <h3>Michael Johnson</h3>
                <p>Lead Videographer</p>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team Member">
                <h3>Sarah Williams</h3>
                <p>Video Editor</p>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team Member">
                <h3>David Chen</h3>
                <p>Drone Operator</p>
            </div>
            
            <div class="team-member">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team Member">
                <h3>Emily Rodriguez</h3>
                <p>Production Manager</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Reach out to discuss your project or request a quote</p>
        </div>
        
        <div class="contact-container">
            <form class="contact-form" id="contactForm">
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
                
                <button type="submit" class="btn" id="sendMessageBtn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <h3>VideoPro</h3>
            <p>Professional videography services for all occasions</p>
            
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://vimeo.com" target="_blank"><i class="fab fa-vimeo-v"></i></a>
            </div>
            
            <p>&copy; 2023 VideoPro. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal" id="successModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Message Sent!</h2>
            <p>Thank you for contacting us. We'll get back to you soon.</p>
            <button class="btn" id="closeModalBtn">OK</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        document.querySelector('.menu-btn').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });
        
        // Portfolio filtering
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Get filter value
                const filterValue = button.getAttribute('data-filter');
                
                // Show/hide portfolio items based on filter
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
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
                    
                    // Close mobile menu if open
                    document.querySelector('.nav-links').classList.remove('active');
                }
            });
        });
        
        // Learn More buttons functionality
        document.querySelectorAll('.learn-more-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const serviceTitle = this.parentElement.querySelector('h3').textContent;
                alert(`You clicked to learn more about: ${serviceTitle}`);
            });
        });
        
        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show the modal
            document.getElementById('successModal').style.display = 'flex';
            
            // Reset the form
            this.reset();
        });
        
        // Close modal functionality
        document.querySelector('.close-modal').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
        });
        
        document.getElementById('closeModalBtn').addEventListener('click', function() {
            document.getElementById('successModal').style.display = 'none';
        });
        
        // Close modal if clicked outside
        window.addEventListener('click', function(e) {
            const modal = document.getElementById('successModal');
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
    </script>
</body>
</html>