<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduWorld - Better Education for a Better World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --success: #2ecc71;
        }

        body {
            background-color: #f9f9f9;
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
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 5px 10px;
            border-radius: 4px;
        }

        nav ul li a:hover {
            color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
        }

        .auth-buttons button {
            background: var(--accent);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
            margin-left: 10px;
        }

        .auth-buttons button:hover {
            background: #c0392b;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1522881193457-37ae97c905bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .cta-button {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .cta-button:hover {
            background: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .section-title p {
            color: #777;
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
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
            padding: 30px;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .feature-card p {
            color: #666;
            margin-bottom: 20px;
        }

        .feature-button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .feature-button:hover {
            background: var(--secondary);
        }

        /* Courses Section */
        .courses {
            padding: 80px 0;
            background: #f5f7fa;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .course-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-img {
            height: 200px;
            overflow: hidden;
        }

        .course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .course-card:hover .course-img img {
            transform: scale(1.1);
        }

        .course-content {
            padding: 20px;
        }

        .course-content h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .course-content p {
            color: #666;
            margin-bottom: 15px;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            color: #777;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .course-price {
            color: var(--accent);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .course-button {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .course-button:hover {
            background: var(--primary);
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
            background: var(--light);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: #555;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .author-details h4 {
            color: var(--primary);
            margin-bottom: 5px;
        }

        .author-details p {
            color: #777;
            font-size: 0.9rem;
        }

        /* Newsletter */
        .newsletter {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .newsletter p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 50px 0 0 50px;
            font-size: 1rem;
        }

        .newsletter-form button {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0 30px;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }

        .newsletter-form button:hover {
            background: #c0392b;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
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

        .footer-column ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: background 0.3s, transform 0.3s;
        }

        .social-icons a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #999;
            font-size: 0.9rem;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
        }

        .modal-title {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-submit {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background 0.3s;
        }

        .form-submit:hover {
            background: var(--primary);
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }

        .form-footer a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                margin-top: 20px;
                justify-content: center;
            }

            nav ul li {
                margin: 0 10px;
            }

            .auth-buttons {
                margin-top: 20px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form input {
                border-radius: 50px;
                margin-bottom: 10px;
            }

            .newsletter-form button {
                border-radius: 50px;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-graduation-cap"></i>
                EduWorld
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <button id="loginBtn">Login</button>
                <button id="registerBtn">Register</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>WE ENSURE BETTER EDUCATION FOR A BETTER WORLD</h1>
            <p>Join thousands of students from around the world learning with our online courses. Gain skills and knowledge from expert instructors.</p>
            <button class="cta-button" id="getStartedBtn">GET STARTED</button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Us</h2>
                <p>We provide the best learning experience with cutting-edge technology and expert instructors</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Learn Online Courses</h3>
                    <p>Access our courses from anywhere in the world with our state-of-the-art online learning platform.</p>
                    <button class="feature-button">Join Now</button>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>No.1 of Universities</h3>
                    <p>Ranked as the top online educational platform for 3 consecutive years by Education Excellence Awards.</p>
                    <button class="feature-button">Join Now</button>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Huge Library</h3>
                    <p>Access over 50,000 resources including eBooks, research papers, and video tutorials in our digital library.</p>
                    <button class="feature-button">Join Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Popular Courses We Offer</h2>
                <p>Explore our most popular courses and start your learning journey today</p>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" alt="Data Science">
                    </div>
                    <div class="course-content">
                        <h3>Data Science Fundamentals</h3>
                        <p>Learn the core concepts of data science and how to apply them to real-world problems.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 12 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Advanced</span>
                        </div>
                        <div class="course-price">$129.99</div>
                        <button class="course-button">Enroll Now</button>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Web Development">
                    </div>
                    <div class="course-content">
                        <h3>Full Stack Web Development</h3>
                        <p>Master both front-end and back-end technologies to become a proficient web developer.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 16 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Intermediate</span>
                        </div>
                        <div class="course-price">$149.99</div>
                        <button class="course-button">Enroll Now</button>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-img">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Artificial Intelligence">
                    </div>
                    <div class="course-content">
                        <h3>Artificial Intelligence</h3>
                        <p>Dive into the world of AI and machine learning with hands-on projects and expert guidance.</p>
                        <div class="course-meta">
                            <span><i class="far fa-clock"></i> 20 Weeks</span>
                            <span><i class="fas fa-user-graduate"></i> Advanced</span>
                        </div>
                        <div class="course-price">$199.99</div>
                        <button class="course-button">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Students Say</h2>
                <p>Hear from our students about their learning experience with us</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "The courses at EduWorld transformed my career. I went from a beginner to landing a job as a web developer in just 6 months!"
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Johnson">
                        </div>
                        <div class="author-details">
                            <h4>Sarah Johnson</h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "The instructors are amazing and the course material is top-notch. I've recommended EduWorld to all my friends interested in tech."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen">
                        </div>
                        <div class="author-details">
                            <h4>Michael Chen</h4>
                            <p>Data Scientist</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "The flexibility of learning at my own pace while working full-time was exactly what I needed. The support team is always helpful too."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emma Rodriguez">
                        </div>
                        <div class="author-details">
                            <h4>Emma Rodriguez</h4>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Stay updated with our latest courses, offers, and educational resources</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>EduWorld</h3>
                    <p>Providing quality education for a better tomorrow. Our mission is to make education accessible to everyone, everywhere.</p>
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Education St, Knowledge City</li>
                        <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@eduworld.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 EduWorld. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Login to Your Account</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email Address</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="form-submit">Login</button>
                <div class="form-footer">
                    Don't have an account? <a href="#" id="switchToRegister">Register</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Create an Account</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="registerName">Full Name</label>
                    <input type="text" id="registerName" required>
                </div>
                <div class="form-group">
                    <label for="registerEmail">Email Address</label>
                    <input type="email" id="registerEmail" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" required>
                </div>
                <div class="form-group">
                    <label for="registerConfirmPassword">Confirm Password</label>
                    <input type="password" id="registerConfirmPassword" required>
                </div>
                <button type="submit" class="form-submit">Register</button>
                <div class="form-footer">
                    Already have an account? <a href="#" id="switchToLogin">Login</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Modal functionality
            const loginModal = document.getElementById('loginModal');
            const registerModal = document.getElementById('registerModal');
            const loginBtn = document.getElementById('loginBtn');
            const registerBtn = document.getElementById('registerBtn');
            const closeModalButtons = document.querySelectorAll('.close-modal');
            const switchToRegister = document.getElementById('switchToRegister');
            const switchToLogin = document.getElementById('switchToLogin');
            const getStartedBtn = document.getElementById('getStartedBtn');

            // Open login modal
            loginBtn.addEventListener('click', function() {
                loginModal.style.display = 'flex';
            });

            // Open register modal
            registerBtn.addEventListener('click', function() {
                registerModal.style.display = 'flex';
            });

            // Open register modal from Get Started button
            getStartedBtn.addEventListener('click', function() {
                registerModal.style.display = 'flex';
            });

            // Close modals
            closeModalButtons.forEach(button => {
                button.addEventListener('click', function() {
                    loginModal.style.display = 'none';
                    registerModal.style.display = 'none';
                });
            });

            // Switch to register modal
            switchToRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'none';
                registerModal.style.display = 'flex';
            });

            // Switch to login modal
            switchToLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerModal.style.display = 'none';
                loginModal.style.display = 'flex';
            });

            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
                if (e.target === loginModal) {
                    loginModal.style.display = 'none';
                }
                if (e.target === registerModal) {
                    registerModal.style.display = 'none';
                }
            });

            // Form submissions
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');

            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = document.getElementById('loginEmail').value;
                alert(`Login successful with email: ${email}`);
                loginModal.style.display = 'none';
            });

            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const name = document.getElementById('registerName').value;
                const email = document.getElementById('registerEmail').value;
                alert(`Registration successful for: ${name} (${email})`);
                registerModal.style.display = 'none';
            });

            // Newsletter form submission
            const newsletterForm = document.querySelector('.newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = this.querySelector('input[type="email"]').value;
                    alert(`Thank you for subscribing with: ${email}`);
                    this.reset();
                });
            }

            // Course enrollment buttons
            const enrollButtons = document.querySelectorAll('.course-button');
            enrollButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const courseName = this.closest('.course-content').querySelector('h3').textContent;
                    alert(`You are enrolling in: ${courseName}`);
                });
            });

            // Feature buttons
            const featureButtons = document.querySelectorAll('.feature-button');
            featureButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const featureName = this.closest('.feature-card').querySelector('h3').textContent;
                    alert(`You are joining: ${featureName}`);
                });
            });

            // Navigation links
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    alert(`Navigating to: ${this.textContent}`);
                });
            });

            // Social media links
            const socialLinks = document.querySelectorAll('.social-icons a');
            socialLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const platform = this.querySelector('i').classList[1];
                    alert(`Opening our ${platform} page in a new tab`);
                    window.open(this.href, '_blank');
                });
            });
        });
    </script>
</body>
</html>