<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Design Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Base Styles */
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
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 25px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-links a:hover {
            color: #ffde7d;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #ffde7d;
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            padding: 100px 0 80px;
            text-align: center;
            background: white;
            margin-bottom: 40px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                        url('https://images.unsplash.com/photo-1565106430482-8f6e74349ca1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
        }
        
        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: #2d4059;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #4a4a4a;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(106, 142, 251, 0.5);
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(106, 142, 251, 0.7);
        }
        
        /* Content Section */
        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .main-content {
            flex: 2;
            min-width: 300px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .main-content h2 {
            color: #2d4059;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #a777e3;
        }
        
        .main-content p {
            margin-bottom: 15px;
            font-size: 1.05rem;
        }
        
        .highlight {
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 600;
        }
        
        .sidebar {
            flex: 1;
            min-width: 250px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .sidebar h3 {
            color: #2d4059;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #6e8efb;
            display: flex;
            align-items: center;
        }
        
        .sidebar h3 i {
            margin-right: 10px;
            color: #6e8efb;
        }
        
        .course-list {
            list-style: none;
        }
        
        .course-list li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .course-list li:hover {
            background-color: #f9f9f9;
            padding-left: 10px;
        }
        
        .course-list li:last-child {
            border-bottom: none;
        }
        
        .course-list i {
            margin-right: 10px;
            color: #a777e3;
        }
        
        /* Skills Section */
        .skills {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 50px;
        }
        
        .skills h2 {
            color: #2d4059;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .skill-card {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .skill-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #6e8efb;
        }
        
        .skill-card h3 {
            margin-bottom: 10px;
            color: #2d4059;
        }
        
        /* Contact Form */
        .contact {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 50px;
        }
        
        .contact h2 {
            color: #2d4059;
            margin-bottom: 25px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2d4059;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #6e8efb;
            box-shadow: 0 0 0 2px rgba(110, 142, 251, 0.2);
        }
        
        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }
        
        button {
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            display: block;
            margin: 0 auto;
            width: 200px;
        }
        
        button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(110, 142, 251, 0.4);
        }
        
        /* Footer */
        footer {
            background: #2d4059;
            color: white;
            text-align: center;
            padding: 40px 0;
            margin-top: 50px;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .social-links {
            margin-bottom: 20px;
        }
        
        .social-links a {
            color: white;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            color: #6e8efb;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .content {
                flex-direction: column;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
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
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background: #2d4059;
                flex-direction: column;
                padding: 20px;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                transition: all 0.4s ease;
            }
            
            .nav-links.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
            
            .nav-links li {
                margin: 15px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <i class="fas fa-code"></i>
                    WebDesignMaster
                </div>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Web Design Courses</h1>
            <p>Learn to create beautiful, functional, and user-friendly websites with our comprehensive web design curriculum</p>
            <a href="#contact" class="cta-button">Enroll Now</a>
        </div>
    </section>

    <div class="container">
        <section class="content">
            <div class="main-content animated">
                <h2>What is Web Design?</h2>
                <p>Web design refers to the design, creation, and maintenance of websites. The terms web design and web development are often used interchangeably, however, web design typically refers to the front-end (client side) of a website, which includes its appearance, layout, and content.</p>
                <p>Web design involves a range of tasks, including <span class="highlight">graphic design</span>, <span class="highlight">user interface (UI) design</span>, <span class="highlight">user experience (UX) design</span>, and <span class="highlight">search engine optimization</span>. Successful Web Designers typically have a strong understanding of HTML, CSS, and JavaScript, as well as UX design and UI design principles.</p>
                <p>Our courses are designed to take you from beginner to professional level, providing you with the skills needed to create stunning websites that provide excellent user experiences.</p>
            </div>

            <div class="sidebar animated">
                <h3><i class="fas fa-graduation-cap"></i>Featured Courses</h3>
                <ul class="course-list">
                    <li><i class="fas fa-pencil-alt"></i>HTML5 & CSS3 Fundamentals</li>
                    <li><i class="fas fa-code"></i>JavaScript for Interactive Websites</li>
                    <li><i class="fas fa-mobile-alt"></i>Responsive Web Design</li>
                    <li><i class="fas fa-paint-brush"></i>UI/UX Design Principles</li>
                    <li><i class="fab fa-react"></i>Front-End Frameworks (React)</li>
                    <li><i class="fas fa-universal-access"></i>Web Accessibility Standards</li>
                    <li><i class="fas fa-search"></i>SEO for Web Developers</li>
                    <li><i class="fas fa-briefcase"></i>Portfolio Development</li>
                </ul>
            </div>
        </section>

        <section class="skills animated">
            <h2>Key Web Design Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <h3>HTML/CSS</h3>
                    <p>Master the building blocks of web design</p>
                </div>
                <div class="skill-card">
                    <i class="fab fa-js"></i>
                    <h3>JavaScript</h3>
                    <p>Create interactive and dynamic websites</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-palette"></i>
                    <h3>UI Design</h3>
                    <p>Design beautiful and intuitive interfaces</p>
                </div>
                <div class="skill-card">
                    <i class="fas fa-users"></i>
                    <h3>UX Design</h3>
                    <p>Create optimal experiences for users</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact animated">
            <h2>Request Course Information</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="course">Course of Interest</label>
                    <select id="course" name="course">
                        <option value="">Select a course...</option>
                        <option value="html-css">HTML5 & CSS3 Fundamentals</option>
                        <option value="javascript">JavaScript for Interactive Websites</option>
                        <option value="responsive">Responsive Web Design</option>
                        <option value="ui-ux">UI/UX Design Principles</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Tell us about your goals and experience level..." required></textarea>
                </div>
                <button type="submit">Submit Request</button>
            </form>
        </section>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <p>&copy; 2025 WebDesignMaster. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const course = document.getElementById('course').value;
            const message = document.getElementById('message').value;
            
            if (name && email && course && message) {
                // In a real application, this would submit to the server
                alert('Thank you for your inquiry! We will contact you soon.');
                this.reset();
            } else {
                alert('Please fill in all fields.');
            }
        });
        
        // Add animation class to elements on scroll
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