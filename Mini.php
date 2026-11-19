<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Hackathon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #6a11cb;
            --secondary: #2575fc;
            --accent: #ff4e50;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        section {
            padding: 60px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn:hover {
            background: white;
            color: var(--accent);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        h1, h2, h3 {
            margin-bottom: 20px;
            text-align: center;
        }
        
        /* Header Styles */
        header {
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--accent);
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 80px;
        }
        
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin-bottom: 30px;
        }
        
        /* About Section */
        .about {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            margin: 40px 0;
            backdrop-filter: blur(10px);
        }
        
        /* Countdown Timer */
        .countdown {
            text-align: center;
            margin: 40px 0;
        }
        
        .timer {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .timer-unit {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            min-width: 100px;
            backdrop-filter: blur(5px);
        }
        
        .timer-value {
            font-size: 3rem;
            font-weight: bold;
        }
        
        .timer-label {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        /* Registration Form */
        .registration {
            background: white;
            color: var(--dark);
            padding: 60px 0;
            border-radius: 20px;
        }
        
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: var(--light);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
        }
        
        .form-group textarea {
            min-height: 120px;
        }
        
        /* Schedule Section */
        .schedule {
            margin: 60px 0;
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: white;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        
        /* Prizes Section */
        .prizes {
            text-align: center;
            margin: 60px 0;
        }
        
        .prize-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        
        .prize-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 30px;
            width: 250px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s ease;
        }
        
        .prize-card:hover {
            transform: translateY(-10px);
        }
        
        .prize-card h3 {
            color: var(--accent);
            margin-bottom: 15px;
        }
        
        .prize-card p {
            font-size: 2rem;
            font-weight: bold;
        }
        
        /* FAQ Section */
        .faq {
            margin: 60px 0;
        }
        
        .accordion {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .accordion-item {
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }
        
        .accordion-header {
            padding: 20px;
            cursor: pointer;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .accordion-content {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .accordion-content.active {
            padding: 20px;
            max-height: 300px;
        }
        
        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px 0;
            text-align: center;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        
        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .social-links a:hover {
            color: var(--accent);
            background: white;
            transform: translateY(-5px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .timer {
                flex-wrap: wrap;
            }
            
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">MiniHackathon</a>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#schedule">Schedule</a></li>
                    <li><a href="#prizes">Prizes</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#register" class="btn">Register Now</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>IT'S HACKATION TIME!</h1>
            <p>ARE YOU READY? The Official Mini Hackathon website is now live! Discover the details of the competition.</p>
            <a href="#register" class="btn">Register Now</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About The Hackathon</h2>
            <p>Join us for an exciting 24-hour coding marathon where developers, designers, and innovators come together to build amazing projects, solve real-world problems, and compete for awesome prizes.</p>
            <p>Whether you're a beginner or an experienced hacker, this event is perfect for anyone looking to learn, network, and have fun while creating something incredible.</p>
        </div>
    </section>

    <!-- Countdown Timer -->
    <section class="countdown">
        <div class="container">
            <h2>Time Until Hackathon</h2>
            <div class="timer">
                <div class="timer-unit">
                    <div class="timer-value" id="days">00</div>
                    <div class="timer-label">Days</div>
                </div>
                <div class="timer-unit">
                    <div class="timer-value" id="hours">00</div>
                    <div class="timer-label">Hours</div>
                </div>
                <div class="timer-unit">
                    <div class="timer-value" id="minutes">00</div>
                    <div class="timer-label">Minutes</div>
                </div>
                <div class="timer-unit">
                    <div class="timer-value" id="seconds">00</div>
                    <div class="timer-label">Seconds</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Registration Form -->
    <section id="register" class="registration">
        <div class="container">
            <h2>Register Now</h2>
            <div class="form-container">
                <form id="registrationForm" action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="team">Team Name (if applicable)</label>
                        <input type="text" id="team" name="team">
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience Level</label>
                        <select id="experience" name="experience">
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Why do you want to participate?</label>
                        <textarea id="message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn">Submit Registration</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section id="schedule" class="schedule">
        <div class="container">
            <h2>Event Schedule</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Day 1 - Opening</h3>
                        <p>10:00 AM - Registration & Breakfast</p>
                        <p>11:00 AM - Welcome Speech</p>
                        <p>12:00 PM - Hackathon Begins</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Day 1 - Afternoon</h3>
                        <p>1:00 PM - Lunch</p>
                        <p>2:00 PM - Coding Continues</p>
                        <p>6:00 PM - Mentor Sessions</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Day 1 - Evening</h3>
                        <p>8:00 PM - Dinner</p>
                        <p>9:00 PM - Night Coding Session</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Day 2 - Finale</h3>
                        <p>8:00 AM - Breakfast</p>
                        <p>12:00 PM - Hackathon Ends</p>
                        <p>1:00 PM - Project Presentations</p>
                        <p>4:00 PM - Awards Ceremony</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prizes Section -->
    <section id="prizes" class="prizes">
        <div class="container">
            <h2>Amazing Prizes</h2>
            <div class="prize-cards">
                <div class="prize-card">
                    <h3>First Prize</h3>
                    <p>$5,000</p>
                    <p>+ Mentorship</p>
                </div>
                <div class="prize-card">
                    <h3>Second Prize</h3>
                    <p>$3,000</p>
                    <p>+ Tech Gadgets</p>
                </div>
                <div class="prize-card">
                    <h3>Third Prize</h3>
                    <p>$1,000</p>
                    <p>+ Swag Pack</p>
                </div>
                <div class="prize-card">
                    <h3>People's Choice</h3>
                    <p>$500</p>
                    <p>+ Special Gift</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">Who can participate? <span>+</span></div>
                    <div class="accordion-content">
                        <p>Anyone with a passion for coding and innovation! Students, professionals, and hobbyists are all welcome. Teams can have up to 4 members.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">What should I bring? <span>+</span></div>
                    <div class="accordion-content">
                        <p>Bring your laptop, chargers, any hardware you plan to use, and of course your creativity! We'll provide food, drinks, and snacks.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">Do I need to have a team? <span>+</span></div>
                    <div class="accordion-content">
                        <p>No, you can participate alone or join a team at the event. We'll have team formation activities at the beginning for those looking for teammates.</p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">What are the judging criteria? <span>+</span></div>
                    <div class="accordion-content">
                        <p>Projects will be judged based on creativity, technical complexity, usability, and potential impact. There will also be special category prizes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <h3>Mini Hackathon</h3>
            <p>Join us for an unforgettable coding experience</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p>&copy; 2025 Mini Hackathon. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Countdown Timer
        function updateCountdown() {
            const hackathonDate = new Date('2025-10-15T09:00:00').getTime();
            const now = new Date().getTime();
            const distance = hackathonDate - now;
            
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            document.getElementById('days').innerText = days.toString().padStart(2, '0');
            document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
            
            if (distance < 0) {
                clearInterval(countdownTimer);
                document.getElementById('days').innerText = '00';
                document.getElementById('hours').innerText = '00';
                document.getElementById('minutes').innerText = '00';
                document.getElementById('seconds').innerText = '00';
            }
        }
        
        const countdownTimer = setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // FAQ Accordion
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const isActive = content.classList.contains('active');
                
                // Close all accordion items
                document.querySelectorAll('.accordion-content').forEach(item => {
                    item.classList.remove('active');
                });
                
                document.querySelectorAll('.accordion-header span').forEach(span => {
                    span.textContent = '+';
                });
                
                // Open clicked item if it was closed
                if (!isActive) {
                    content.classList.add('active');
                    this.querySelector('span').textContent = '-';
                }
            });
        });
        
        // Form Submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for registering! We will contact you soon with more details.');
            this.reset();
        });
        
        // Smooth Scrolling for Navigation
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
                }
            });
        });
        
        // Sticky Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(0, 0, 0, 0.9)';
            } else {
                header.style.background = 'rgba(0, 0, 0, 0.7)';
            }
        });
    </script>
</body>
</html>