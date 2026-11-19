<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skwela - Learn Something New Every Day</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #4a6cfa;
            --secondary: #ff6b6b;
            --accent: #45d7c0;
            --dark: #2d3748;
            --light: #f8f9fa;
        }
        
        body {
            background-color: #f5f7ff;
            color: #333;
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
            background: linear-gradient(135deg, var(--primary), #6c8eff);
            color: white;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: 700;
        }
        
        .logo i {
            color: var(--accent);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: var(--accent);
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }
        
        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }
        
        .btn-primary {
            background: var(--secondary);
            color: white;
        }
        
        .btn-primary:hover {
            background: #ff5252;
            transform: translateY(-2px);
        }
        
        /* Hero Section */
        .hero {
            padding: 80px 0;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 400"><rect fill="%234a6cfa" width="800" height="400"/><path fill="%236c8eff" fill-opacity="0.5" d="M0 192L26.7 202.7C53.3 213 107 235 160 234.7C213.3 235 267 213 320 197.3C373.3 181 427 171 480 186.7C533.3 203 587 245 640 250.7C693.3 256 747 224 773.3 208L800 192L800 401L773.3 401C746.7 401 693 401 640 401C586.7 401 533 401 480 401C426.7 401 373 401 320 401C266.7 401 213 401 160 401C106.7 401 53 401 27 401L0 401Z"></path></svg>') no-repeat bottom;
            background-size: cover;
            color: white;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
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
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: #718096;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: rgba(74, 108, 250, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .feature-icon i {
            font-size: 30px;
            color: var(--primary);
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        /* Courses Section */
        .courses {
            padding: 80px 0;
            background: #f5f7ff;
        }
        
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .course-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
        }
        
        .course-card:hover {
            transform: translateY(-5px);
        }
        
        .course-image {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            position: relative;
            overflow: hidden;
        }
        
        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .course-image::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(74, 108, 250, 0.7), rgba(106, 136, 255, 0.7));
        }
        
        .course-image-text {
            position: absolute;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .course-content {
            padding: 20px;
        }
        
        .course-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .course-info {
            display: flex;
            justify-content: space-between;
            margin: 15px 0;
            color: #718096;
        }
        
        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background: white;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: #f5f7ff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: #4a5568;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }
        
        .author-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--primary), #6c8eff);
            color: white;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.2rem;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--accent);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: var(--accent);
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: background 0.3s;
            color: white;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background: var(--primary);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #cbd5e0;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #718096;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        .form-submit {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .form-submit:hover {
            background: #3a5bd9;
        }
        
        /* Page Sections */
        .page-section {
            display: none;
            padding: 80px 0;
        }
        
        .page-section.active {
            display: block;
        }
        
        /* Enrollment Modal */
        .enrollment-steps {
            margin: 20px 0;
        }
        
        .enrollment-step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .step-number {
            background: var(--primary);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Skwela</span>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" data-page="home">Home</a></li>
                        <li><a href="#" data-page="courses">Courses</a></li>
                        <li><a href="#" data-page="features">Features</a></li>
                        <li><a href="#" data-page="pricing">Pricing</a></li>
                        <li><a href="#" data-page="about">About</a></li>
                    </ul>
                </nav>
                <div class="auth-buttons">
                    <button class="btn btn-outline" onclick="openModal('loginModal')">Login</button>
                    <button class="btn btn-primary" onclick="openModal('registerModal')">Sign Up</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Home Section -->
    <section id="home" class="page-section active">
        <!-- Hero Section -->
        <div class="hero">
            <div class="container">
                <h1>Learn Something New Every Day</h1>
                <p>Expand your knowledge with our curated courses from experts around the world. Start your learning journey today with a free trial.</p>
                <div class="hero-buttons">
                    <button class="btn btn-primary" onclick="openModal('registerModal')">Start Learning</button>
                    <button class="btn btn-outline" data-page="courses">Explore Courses</button>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Online Training From Experts</h2>
                    <p>Our platform offers the best learning experience with courses designed by industry professionals to help you succeed.</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Learn Anywhere in the World</h3>
                        <p>Access our courses from any device, anywhere. Our platform is optimized for mobile, tablet, and desktop learning.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3>Creative Learning Videos</h3>
                        <p>Engage with high-quality video content designed to make complex topics easy to understand and remember.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <h3>Audio Learning</h3>
                        <p>Learn on the go with our audio lessons. Perfect for commuting, exercising, or whenever you have spare time.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses Section -->
        <div class="courses">
            <div class="container">
                <div class="section-title">
                    <h2>Popular Courses</h2>
                    <p>Explore our most popular courses and start your learning journey today.</p>
                </div>
                <div class="courses-grid">
                    <div class="course-card">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Web Development">
                            <div class="course-image-text">Web Development</div>
                        </div>
                        <div class="course-content">
                            <h3>Complete Web Development Bootcamp</h3>
                            <p>Learn to build modern web applications from scratch using the latest technologies.</p>
                            <div class="course-info">
                                <span><i class="far fa-clock"></i> 60 hours</span>
                                <span><i class="fas fa-user-graduate"></i> 4.8 (1200)</span>
                            </div>
                            <button class="btn btn-primary" onclick="enrollCourse('Complete Web Development Bootcamp')">Enroll Now</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Data Science">
                            <div class="course-image-text">Data Science</div>
                        </div>
                        <div class="course-content">
                            <h3>Data Science Fundamentals</h3>
                            <p>Master data analysis, visualization, and machine learning techniques.</p>
                            <div class="course-info">
                                <span><i class="far fa-clock"></i> 45 hours</span>
                                <span><i class="fas fa-user-graduate"></i> 4.7 (950)</span>
                            </div>
                            <button class="btn btn-primary" onclick="enrollCourse('Data Science Fundamentals')">Enroll Now</button>
                        </div>
                    </div>
                    <div class="course-card">
                        <div class="course-image">
                            <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8f5a07a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80" alt="Digital Marketing">
                            <div class="course-image-text">Digital Marketing</div>
                        </div>
                        <div class="course-content">
                            <h3>Digital Marketing Mastery</h3>
                            <p>Learn SEO, social media marketing, email campaigns, and analytics.</p>
                            <div class="course-info">
                                <span><i class="far fa-clock"></i> 40 hours</span>
                                <span><i class="fas fa-user-graduate"></i> 4.6 (870)</span>
                            </div>
                            <button class="btn btn-primary" onclick="enrollCourse('Digital Marketing Mastery')">Enroll Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>What Our Students Say</h2>
                    <p>Hear from our students about their learning experience with Skwela.</p>
                </div>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The courses on Skwela have transformed my career. I went from beginner to landing a job in web development in just 6 months!"
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Doe">
                            </div>
                            <div>
                                <h4>John Doe</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The video lessons are engaging and the instructors are knowledgeable. I've recommended Skwela to all my colleagues."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Miller">
                            </div>
                            <div>
                                <h4>Sarah Miller</h4>
                                <p>Data Analyst</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "As a busy professional, the audio lessons have been a game-changer. I can learn during my commute and stay productive."
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">
                                <img src="https://randomuser.me/api/portraits/men/68.jpg" alt="Robert Johnson">
                            </div>
                            <div>
                                <h4>Robert Johnson</h4>
                                <p>Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta">
            <div class="container">
                <h2>Start Your Learning Journey Today</h2>
                <p>Join thousands of students learning with Skwela. Get access to all courses with our free trial.</p>
                <button class="btn btn-primary" onclick="openModal('registerModal')">Get Started for Free</button>
            </div>
        </div>
    </section>

    <!-- Other Page Sections -->
    <section id="courses" class="page-section">
        <div class="container">
            <div class="section-title">
                <h2>All Courses</h2>
                <p>Browse our complete catalog of courses</p>
            </div>
            <div class="courses-grid">
                <!-- Courses will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <section id="features" class="page-section">
        <div class="container">
            <div class="section-title">
                <h2>Platform Features</h2>
                <p>Discover what makes Skwela the best learning platform</p>
            </div>
            <div class="features-grid">
                <!-- Features will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <section id="pricing" class="page-section">
        <div class="container">
            <div class="section-title">
                <h2>Pricing Plans</h2>
                <p>Choose the plan that works best for you</p>
            </div>
            <div class="features-grid">
                <!-- Pricing plans will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <section id="about" class="page-section">
        <div class="container">
            <div class="section-title">
                <h2>About Skwela</h2>
                <p>Learn more about our mission and team</p>
            </div>
            <div class="features-grid">
                <!-- About content will be loaded here by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Skwela</h3>
                    <p>Learn something new every day with our curated courses from experts around the world.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#" data-page="about">About Us</a></li>
                        <li><a href="#" onclick="showComingSoon()">Careers</a></li>
                        <li><a href="#" onclick="showComingSoon()">Blog</a></li>
                        <li><a href="#" onclick="showComingSoon()">Press</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#" onclick="showComingSoon()">Help Center</a></li>
                        <li><a href="#" onclick="showComingSoon()">FAQs</a></li>
                        <li><a href="#" onclick="showComingSoon()">Contact Us</a></li>
                        <li><a href="#" onclick="showComingSoon()">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter to get updates on new courses and features.</p>
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Your email address" required>
                        </div>
                        <button type="submit" class="form-submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Skwela Learning Platform. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Login to Your Account</h2>
                <button class="close-modal" onclick="closeModal('loginModal')">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" placeholder="Your password" required>
                </div>
                <button type="submit" class="form-submit">Login</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">
                Don't have an account? <a href="#" style="color: var(--primary);" onclick="openModal('registerModal'); closeModal('loginModal')">Sign Up</a>
            </p>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Create an Account</h2>
                <button class="close-modal" onclick="closeModal('registerModal')">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="register-name">Full Name</label>
                    <input type="text" id="register-name" placeholder="Your full name" required>
                </div>
                <div class="form-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" placeholder="Your email address" required>
                </div>
                <div class="form-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" placeholder="Create a password" required>
                </div>
                <button type="submit" class="form-submit">Create Account</button>
            </form>
            <p style="text-align: center; margin-top: 20px;">
                Already have an account? <a href="#" style="color: var(--primary);" onclick="openModal('loginModal'); closeModal('registerModal')">Login</a>
            </p>
        </div>
    </div>

    <!-- Enrollment Modal -->
    <div class="modal" id="enrollmentModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Enroll in <span id="enrollment-course-title"></span></h2>
                <button class="close-modal" onclick="closeModal('enrollmentModal')">&times;</button>
            </div>
            <div class="enrollment-steps">
                <div class="enrollment-step">
                    <div class="step-number">1</div>
                    <div>
                        <h3>Create an Account</h3>
                        <p>Sign up for a free account to get started with your learning journey.</p>
                        <button class="btn btn-primary" onclick="openModal('registerModal'); closeModal('enrollmentModal')">Sign Up Now</button>
                    </div>
                </div>
                <div class="enrollment-step">
                    <div class="step-number">2</div>
                    <div>
                        <h3>Choose Your Plan</h3>
                        <p>Select a subscription plan that fits your learning needs and budget.</p>
                        <button class="btn btn-outline" data-page="pricing" onclick="navigateToPage('pricing'); closeModal('enrollmentModal')">View Plans</button>
                    </div>
                </div>
                <div class="enrollment-step">
                    <div class="step-number">3</div>
                    <div>
                        <h3>Start Learning</h3>
                        <p>Access your course immediately after enrollment and begin your lessons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Page navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Set up page navigation
            const pageLinks = document.querySelectorAll('[data-page]');
            pageLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetPage = this.getAttribute('data-page');
                    navigateToPage(targetPage);
                });
            });
            
            // Set up form submissions
            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Form submitted successfully!');
                    const modals = document.querySelectorAll('.modal');
                    modals.forEach(modal => {
                        modal.style.display = 'none';
                    });
                });
            });
            
            // Load additional content for other pages
            loadCoursesPage();
            loadFeaturesPage();
            loadPricingPage();
            loadAboutPage();
        });
        
        // Navigate to a specific page
        function navigateToPage(pageId) {
            // Hide all pages
            const pages = document.querySelectorAll('.page-section');
            pages.forEach(page => {
                page.classList.remove('active');
            });
            
            // Show the target page
            document.getElementById(pageId).classList.add('active');
            
            // Scroll to top
            window.scrollTo(0, 0);
        }
        
        // Modal functionality
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        }
        
        // Course enrollment
        function enrollCourse(courseTitle) {
            document.getElementById('enrollment-course-title').textContent = courseTitle;
            openModal('enrollmentModal');
        }
        
        // Show coming soon message
        function showComingSoon() {
            alert('This feature is coming soon!');
        }
        
        // Load content for other pages
        function loadCoursesPage() {
            const coursesGrid = document.querySelector('#courses .courses-grid');
            const courses = [
                {
                    title: "Complete Web Development Bootcamp",
                    image: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                    category: "Web Development",
                    description: "Learn to build modern web applications from scratch using the latest technologies.",
                    duration: "60 hours",
                    rating: "4.8 (1200)"
                },
                {
                    title: "Data Science Fundamentals",
                    image: "https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                    category: "Data Science",
                    description: "Master data analysis, visualization, and machine learning techniques.",
                    duration: "45 hours",
                    rating: "4.7 (950)"
                },
                {
                    title: "Digital Marketing Mastery",
                    image: "https://images.unsplash.com/photo-1432888622747-4eb9a8f5a07a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1174&q=80",
                    category: "Digital Marketing",
                    description: "Learn SEO, social media marketing, email campaigns, and analytics.",
                    duration: "40 hours",
                    rating: "4.6 (870)"
                },
                {
                    title: "Mobile App Development with Flutter",
                    image: "https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80",
                    category: "Mobile Development",
                    description: "Build cross-platform mobile applications with Flutter framework.",
                    duration: "50 hours",
                    rating: "4.5 (780)"
                },
                {
                    title: "UX/UI Design Principles",
                    image: "https://images.unsplash.com/photo-1545235617-9465d2a55698?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1080&q=80",
                    category: "Design",
                    description: "Learn the fundamentals of user experience and interface design.",
                    duration: "35 hours",
                    rating: "4.7 (920)"
                },
                {
                    title: "Python for Beginners",
                    image: "https://images.unsplash.com/photo-1526318472351-c75fcf070305?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1035&q=80",
                    category: "Programming",
                    description: "Start your programming journey with Python, the versatile language.",
                    duration: "30 hours",
                    rating: "4.9 (1500)"
                }
            ];
            
            let coursesHTML = '';
            courses.forEach(course => {
                coursesHTML += `
                    <div class="course-card">
                        <div class="course-image">
                            <img src="${course.image}" alt="${course.category}">
                            <div class="course-image-text">${course.category}</div>
                        </div>
                        <div class="course-content">
                            <h3>${course.title}</h3>
                            <p>${course.description}</p>
                            <div class="course-info">
                                <span><i class="far fa-clock"></i> ${course.duration}</span>
                                <span><i class="fas fa-user-graduate"></i> ${course.rating}</span>
                            </div>
                            <button class="btn btn-primary" onclick="enrollCourse('${course.title}')">Enroll Now</button>
                        </div>
                    </div>
                `;
            });
            
            coursesGrid.innerHTML = coursesHTML;
        }
        
        function loadFeaturesPage() {
            const featuresGrid = document.querySelector('#features .features-grid');
            const features = [
                {
                    icon: "fas fa-graduation-cap",
                    title: "Expert Instructors",
                    description: "Learn from industry professionals with years of experience in their fields."
                },
                {
                    icon: "fas fa-certificate",
                    title: "Certification",
                    description: "Earn certificates that you can share with employers and on professional networks."
                },
                {
                    icon: "fas fa-mobile-alt",
                    title: "Mobile Learning",
                    description: "Access your courses on any device, anytime with our mobile app."
                },
                {
                    icon: "fas fa-comments",
                    title: "Community Support",
                    description: "Join a community of learners and get help from peers and instructors."
                },
                {
                    icon: "fas fa-chart-line",
                    title: "Progress Tracking",
                    description: "Monitor your learning progress with detailed analytics and reports."
                },
                {
                    icon: "fas fa-download",
                    title: "Offline Access",
                    description: "Download courses for offline viewing and learn without internet connection."
                }
            ];
            
            let featuresHTML = '';
            features.forEach(feature => {
                featuresHTML += `
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="${feature.icon}"></i>
                        </div>
                        <h3>${feature.title}</h3>
                        <p>${feature.description}</p>
                    </div>
                `;
            });
            
            featuresGrid.innerHTML = featuresHTML;
        }
        
        function loadPricingPage() {
            const pricingGrid = document.querySelector('#pricing .features-grid');
            const plans = [
                {
                    name: "Free",
                    price: "$0",
                    period: "forever",
                    features: ["Access to free courses", "Community support", "Limited content", "Basic learning tools"]
                },
                {
                    name: "Pro",
                    price: "$19",
                    period: "per month",
                    features: ["All courses", "Certificates", "Download content", "Priority support", "No ads"]
                },
                {
                    name: "Team",
                    price: "$99",
                    period: "per month",
                    features: ["For up to 5 users", "Team management", "Progress analytics", "Dedicated support", "Custom content"]
                }
            ];
            
            let pricingHTML = '';
            plans.forEach(plan => {
                pricingHTML += `
                    <div class="feature-card">
                        <h3>${plan.name}</h3>
                        <div style="font-size: 2.5rem; font-weight: 700; margin: 20px 0;">${plan.price}</div>
                        <div style="color: #718096; margin-bottom: 20px;">${plan.period}</div>
                        <ul style="list-style: none; margin-bottom: 30px;">
                            ${plan.features.map(feature => `<li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> ${feature}</li>`).join('')}
                        </ul>
                        <button class="btn btn-primary" onclick="enrollCourse('${plan.name} Plan')">Get Started</button>
                    </div>
                `;
            });
            
            pricingGrid.innerHTML = pricingHTML;
        }
        
        function loadAboutPage() {
            const aboutGrid = document.querySelector('#about .features-grid');
            const team = [
                {
                    name: "John Smith",
                    role: "Founder & CEO",
                    image: "https://randomuser.me/api/portraits/men/75.jpg"
                },
                {
                    name: "Emily Johnson",
                    role: "Chief Learning Officer",
                    image: "https://randomuser.me/api/portraits/women/65.jpg"
                },
                {
                    name: "Michael Brown",
                    role: "Head of Content",
                    image: "https://randomuser.me/api/portraits/men/36.jpg"
                },
                {
                    name: "Sarah Davis",
                    role: "Lead Instructor",
                    image: "https://randomuser.me/api/portraits/women/32.jpg"
                }
            ];
            
            let aboutHTML = '';
            team.forEach(member => {
                aboutHTML += `
                    <div class="feature-card" style="text-align: center;">
                        <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto 20px;">
                            <img src="${member.image}" alt="${member.name}" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h3>${member.name}</h3>
                        <p style="color: var(--primary); font-weight: 600;">${member.role}</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                `;
            });
            
            aboutGrid.innerHTML = aboutHTML;
        }
    </script>
</body>
</html>