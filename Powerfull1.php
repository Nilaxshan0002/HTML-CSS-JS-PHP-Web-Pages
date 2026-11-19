<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerConnect - Find Your Dream Job</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #2563eb;
            --secondary: #3b82f6;
            --accent: #10b981;
            --dark: #1f2937;
            --light: #f9fafb;
            --gray: #6b7280;
            --light-gray: #e5e7eb;
        }
        
        body {
            background-color: var(--light);
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
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
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
            margin-left: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }
        
        .nav-links a i {
            margin-right: 8px;
            font-size: 18px;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--dark);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 20px;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #0da271;
            transform: translateY(-2px);
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
            background-color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 15px;
        }
        
        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            text-align: center;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--primary);
            margin-bottom: 20px;
            background-color: rgba(37, 99, 235, 0.1);
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px;
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }
        
        /* Statistics Section */
        .statistics {
            background-color: var(--primary);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .stat-item {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px 20px;
            border-radius: 10px;
        }
        
        .stat-item h3 {
            font-size: 48px;
            margin-bottom: 10px;
        }
        
        /* Job Listings */
        .job-listings {
            padding: 80px 0;
            background-color: var(--light);
        }
        
        .filters {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .filter-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--light-gray);
            border-radius: 5px;
            font-size: 16px;
        }
        
        .jobs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .job-card {
            background-color: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        
        .job-card:hover {
            transform: translateY(-5px);
        }
        
        .job-card h3 {
            margin-bottom: 10px;
            font-size: 20px;
            color: var(--primary);
        }
        
        .company {
            color: var(--gray);
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .job-meta span {
            background-color: var(--light);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
            margin-right: 10px;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        /* Testimonials */
        .testimonials {
            padding: 80px 0;
            background-color: white;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: var(--light);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            background-color: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--primary);
            overflow: hidden;
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Newsletter */
        .newsletter {
            padding: 80px 0;
            text-align: center;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 30px auto 0;
            display: flex;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 15px;
            border: none;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }
        
        .newsletter-form button {
            padding: 15px 25px;
            background-color: var(--accent);
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        
        .newsletter-form button:hover {
            background-color: #0da271;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }
        
        .footer-links a i {
            margin-right: 10px;
        }
        
        .footer-links a:hover {
            color: white;
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
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            border-radius: 50%;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #374151;
            color: #9ca3af;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
            
            .nav-links.active {
                display: flex;
            }
            
            .nav-links li {
                margin: 15px 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input {
                border-radius: 5px;
                margin-bottom: 10px;
            }
            
            .newsletter-form button {
                border-radius: 5px;
            }
            
            .filter-form {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo"><i class="fas fa-briefcase"></i>CareerConnect</a>
                <ul class="nav-links">
                    <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="#job-listings"><i class="fas fa-list"></i>Job Listings</a></li>
                    <li><a href="#resources"><i class="fas fa-book-open"></i>Career Resources</a></li>
                    <li><a href="#employers"><i class="fas fa-building"></i>Employers</a></li>
                    <li><a href="#about"><i class="fas fa-info-circle"></i>About Us</a></li>
                    <li><a href="#contact"><i class="fas fa-envelope"></i>Contact</a></li>
                </ul>
                <button class="mobile-menu-btn"><i class="fas fa-bars"></i></button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Find Your Dream Career Today</h1>
            <p>Connect with top employers and discover opportunities that match your skills and aspirations.</p>
            <a href="#job-listings" class="btn">Browse Jobs</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose CareerConnect?</h2>
                <p>We provide the tools and resources to help you advance your career journey</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>Personalized Job Matches</h3>
                    <p>Our advanced algorithm matches you with jobs that fit your skills, experience, and preferences.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-handshake"></i></div>
                    <h3>Employer Connections</h3>
                    <p>Directly connect with hiring managers and recruiters from top companies.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Career Resources</h3>
                    <p>Access resume builders, interview tips, and career development resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="statistics">
        <div class="container">
            <div class="section-title">
                <h2>Career Statistics</h2>
                <p>We've helped thousands of professionals find their perfect career path</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>15,000+</h3>
                    <p>Job Listings</p>
                </div>
                <div class="stat-item">
                    <h3>9,500+</h3>
                    <p>Successful Hires</p>
                </div>
                <div class="stat-item">
                    <h3>2,300+</h3>
                    <p>Partner Companies</p>
                </div>
                <div class="stat-item">
                    <h3>98%</h3>
                    <p>Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Listings Section -->
    <section class="job-listings" id="job-listings">
        <div class="container">
            <div class="section-title">
                <h2>Featured Job Opportunities</h2>
                <p>Browse through our curated selection of top career opportunities</p>
            </div>
            
            <div class="filters">
                <div class="filter-form">
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" id="keywords" placeholder="Job title or skills">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" placeholder="City or region">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select id="category">
                            <option value="">All Categories</option>
                            <option value="technology">Technology</option>
                            <option value="healthcare">Healthcare</option>
                            <option value="finance">Finance</option>
                            <option value="education">Education</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience Level</label>
                        <select id="experience">
                            <option value="">Any Experience</option>
                            <option value="entry">Entry Level</option>
                            <option value="mid">Mid Level</option>
                            <option value="senior">Senior Level</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="jobs-grid">
                <div class="job-card">
                    <h3>Frontend Developer</h3>
                    <p class="company">Tech Innovations Inc.</p>
                    <div class="job-meta">
                        <span>New York, NY</span>
                        <span>Full-time</span>
                        <span>$90,000 - $120,000</span>
                    </div>
                    <p>We're looking for a skilled frontend developer with experience in React, Vue, or Angular to join our growing team.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
                
                <div class="job-card">
                    <h3>Marketing Manager</h3>
                    <p class="company">Global Solutions Group</p>
                    <div class="job-meta">
                        <span>Remote</span>
                        <span>Full-time</span>
                        <span>$85,000 - $110,000</span>
                    </div>
                    <p>Lead our marketing initiatives and develop strategies to increase brand awareness and customer engagement.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
                
                <div class="job-card">
                    <h3>Data Analyst</h3>
                    <p class="company">Data Insights Co.</p>
                    <div class="job-meta">
                        <span>Chicago, IL</span>
                        <span>Full-time</span>
                        <span>$75,000 - $95,000</span>
                    </div>
                    <p>Analyze complex datasets to extract valuable insights and help drive business decisions.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
                
                <div class="job-card">
                    <h3>UX/UI Designer</h3>
                    <p class="company">Creative Minds Agency</p>
                    <div class="job-meta">
                        <span>San Francisco, CA</span>
                        <span>Contract</span>
                        <span>$70 - $90/hr</span>
                    </div>
                    <p>Create intuitive and visually appealing user interfaces for web and mobile applications.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
                
                <div class="job-card">
                    <h3>Project Manager</h3>
                    <p class="company">Enterprise Solutions Ltd.</p>
                    <div class="job-meta">
                        <span>Boston, MA</span>
                        <span>Full-time</span>
                        <span>$100,000 - $130,000</span>
                    </div>
                    <p>Oversee complex projects from conception to completion, ensuring timely delivery and quality results.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
                
                <div class="job-card">
                    <h3>DevOps Engineer</h3>
                    <p class="company">Cloud Systems Inc.</p>
                    <div class="job-meta">
                        <span>Remote</span>
                        <span>Full-time</span>
                        <span>$110,000 - $140,000</span>
                    </div>
                    <p>Implement and maintain our cloud infrastructure and CI/CD pipelines for optimal performance.</p>
                    <a href="#" class="btn apply-btn">Apply Now</a>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="#" class="btn">View All Jobs</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Success Stories</h2>
                <p>Hear from professionals who found their dream jobs through CareerConnect</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "CareerConnect helped me transition into a completely new industry. The resources and connections I found here were invaluable in my career change journey."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Michael Johnson">
                        </div>
                        <div>
                            <h4>Michael Johnson</h4>
                            <p>Software Engineer at TechCore</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "I was able to find my current position as Marketing Director within two weeks of using CareerConnect. The personalized job matching is incredibly accurate."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Sarah Williams">
                        </div>
                        <div>
                            <h4>Sarah Williams</h4>
                            <p>Marketing Director at Visionary Media</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        "As a recent graduate, I was struggling to find entry-level positions in my field. CareerConnect connected me with employers looking for new talent."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="David Chen">
                        </div>
                        <div>
                            <h4>David Chen</h4>
                            <p>Financial Analyst at Capital Investments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <div class="section-title">
                <h2>Stay Updated on New Opportunities</h2>
                <p>Subscribe to our newsletter and get the latest job listings and career advice</p>
            </div>
            
            <form class="newsletter-form" id="newsletterForm">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>CareerConnect</h3>
                    <p>Connecting talent with opportunity. Our platform helps job seekers and employers find the perfect match.</p>
                    <div class="social-links">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>For Job Seekers</h3>
                    <ul class="footer-links">
                        <li><a href="#job-listings"><i class="fas fa-chevron-right"></i>Browse Jobs</a></li>
                        <li><a href="#resources"><i class="fas fa-chevron-right"></i>Career Resources</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Resume Builder</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Job Alerts</a></li>
                    </ul>
                </div>
                
                <div class="footer-column" id="employers">
                    <h3>For Employers</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Post a Job</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Search Resumes</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Recruiting Solutions</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i>Pricing Plans</a></li>
                    </ul>
                </div>
                
                <div class="footer-column" id="about">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Career Street, Suite 456</li>
                        <li><i class="fas fa-city"></i> New York, NY 10001</li>
                        <li><i class="fas fa-envelope"></i> info@careerconnect.com</li>
                        <li><i class="fas fa-phone"></i> (555) 123-4567</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 CareerConnect. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Application Modal -->
    <div class="modal" id="applicationModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
        <div style="background: white; padding: 30px; border-radius: 10px; width: 90%; max-width: 500px;">
            <h2>Apply for Job</h2>
            <form id="applicationForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="resume">Upload Resume</label>
                    <input type="file" id="resume" required>
                </div>
                <div style="display: flex; justify-content: space-between; margin-top: 20px;">
                    <button type="button" class="btn" style="background: var(--gray);" onclick="document.getElementById('applicationModal').style.display = 'none'">Cancel</button>
                    <button type="submit" class="btn">Submit Application</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        const menuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });
        
        // Job Filter Functionality
        const keywordFilter = document.getElementById('keywords');
        const locationFilter = document.getElementById('location');
        const categoryFilter = document.getElementById('category');
        const experienceFilter = document.getElementById('experience');
        const jobCards = document.querySelectorAll('.job-card');
        
        const filterJobs = () => {
            const keywordValue = keywordFilter.value.toLowerCase();
            const locationValue = locationFilter.value.toLowerCase();
            const categoryValue = categoryFilter.value;
            const experienceValue = experienceFilter.value;
            
            jobCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const location = card.querySelector('.job-meta span').textContent.toLowerCase();
                const description = card.querySelector('p').textContent.toLowerCase();
                
                const matchesKeyword = title.includes(keywordValue) || description.includes(keywordValue);
                const matchesLocation = location.includes(locationValue);
                
                if ((keywordValue === '' || matchesKeyword) && 
                    (locationValue === '' || matchesLocation)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        };
        
        keywordFilter.addEventListener('input', filterJobs);
        locationFilter.addEventListener('input', filterJobs);
        categoryFilter.addEventListener('change', filterJobs);
        experienceFilter.addEventListener('change', filterJobs);
        
        // Newsletter Form Submission
        const newsletterForm = document.getElementById('newsletterForm');
        
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('input').value;
            alert(`Thank you for subscribing with: ${email}`);
            newsletterForm.reset();
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
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Application form handling
        document.querySelectorAll('.apply-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('applicationModal').style.display = 'flex';
            });
        });
        
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Application submitted successfully!');
            document.getElementById('applicationModal').style.display = 'none';
        });
        
        // Close modal when clicking outside
        document.getElementById('applicationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });
    </script>
</body>
</html>