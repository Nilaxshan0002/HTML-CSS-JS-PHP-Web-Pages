<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoderGirl | Web Developer & Designer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary-color: #6c63ff;
            --secondary-color: #1a1a1a;
            --text-color: #f5f5f5;
            --light-text: #b0b0b0;
            --background: #0d0d0d;
            --dark-background: #000;
            --card-bg: #1a1a1a;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--text-color);
            background-color: var(--background);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            background: var(--primary-color);
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #5752d4;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(108, 99, 255, 0.3);
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            font-size: 2.5rem;
            color: var(--text-color);
        }

        .section-title span {
            color: var(--primary-color);
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 0;
            background: rgba(13, 13, 13, 0.95);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        header.sticky {
            padding: 15px 0;
            background: rgba(13, 13, 13, 0.98);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }

        .logo span {
            color: var(--text-color);
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .bar {
            display: block;
            width: 25px;
            height: 3px;
            margin: 5px auto;
            background-color: var(--text-color);
            transition: all 0.3s ease;
        }

        /* Home Section */
        .home {
            display: flex;
            align-items: center;
            min-height: 100vh;
            padding-top: 80px;
            background: linear-gradient(to right, #0d0d0d 50%, #1a1a1a 50%);
            position: relative;
            overflow: hidden;
        }

        .home::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%);
            opacity: 0.1;
        }

        .home-content {
            max-width: 600px;
            z-index: 1;
            margin-left: 50px;
        }

        .hello {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .home-content h1 {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 20px;
            background: linear-gradient(45deg, var(--primary-color), #fff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .home-content p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: var(--light-text);
        }

        .home-img {
            flex: 1;
            text-align: left;
            position: relative;
            margin-left: 50px;
        }

        .home-img::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 380px;
            height: 380px;
            border: 2px solid var(--primary-color);
            border-radius: 50%;
            z-index: -1;
        }

        .home-img img {
            max-width: 350px;
            border-radius: 50%;
            border: 10px solid #1a1a1a;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            transition: all 0.5s ease;
        }

        .home-img img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 40px rgba(108, 99, 255, 0.4);
        }

        .social-icons {
            margin-top: 30px;
        }

        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            margin-right: 15px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background: #5752d4;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.4);
        }

        /* Services Section */
        .services {
            background-color: var(--secondary-color);
            position: relative;
            overflow: hidden;
        }

        .services::before {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%);
            opacity: 0.05;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-box {
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
            border-bottom: 3px solid var(--primary-color);
        }

        .service-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
        }

        .service-box i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .service-box h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .service-box p {
            color: var(--light-text);
        }

        /* Contact Section */
        .contact {
            position: relative;
            overflow: hidden;
        }

        .contact::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-color) 0%, transparent 70%);
            opacity: 0.05;
            z-index: -1;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border-bottom: 3px solid var(--primary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #333;
            border-radius: 5px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #0d0d0d;
            color: var(--text-color);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(108, 99, 255, 0.3);
            outline: none;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Register Form */
        .register-container {
            display: none;
            max-width: 500px;
            margin: 50px auto;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border-bottom: 3px solid var(--primary-color);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        /* Footer */
        footer {
            background: var(--dark-background);
            color: #fff;
            padding: 30px 0;
            text-align: center;
            position: relative;
        }

        .footer-text p {
            font-size: 1.1rem;
            color: var(--light-text);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .home {
                background: linear-gradient(to bottom, #0d0d0d 50%, #1a1a1a 50%);
                padding: 120px 0 50px;
                text-align: center;
            }

            .home-content, .home-img {
                text-align: center;
                margin: 0 auto;
            }

            .home-content {
                margin-bottom: 50px;
                margin-left: 0;
            }
            
            .home-img {
                margin-left: 0;
            }
            
            .home-img::before {
                width: 320px;
                height: 320px;
            }
            
            .home-img img {
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .hamburger.active .bar:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active .bar:nth-child(1) {
                transform: translateY(8px) rotate(45deg);
            }

            .hamburger.active .bar:nth-child(3) {
                transform: translateY(-8px) rotate(-45deg);
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                gap: 0;
                flex-direction: column;
                background: var(--card-bg);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
                padding: 20px 0;
                z-index: 999;
            }

            .nav-item {
                margin: 16px 0;
            }

            .nav-menu.active {
                left: 0;
            }

            .home-content h1 {
                font-size: 2.5rem;
            }
            
            .home-img::before {
                width: 280px;
                height: 280px;
            }
            
            .home-img img {
                max-width: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Coder<span>Girl</span></a>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="#" class="nav-link" id="registerBtn">Register</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Home Section -->
    <section class="home" id="home">
        <div class="container" style="display: flex; align-items: center;">
            <div class="home-img">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="CoderGirl">
            </div>
            <div class="home-content">
                <div class="hello">Hello,</div>
                <h1>It's Me CoderGirl</h1>
                <p>I'm a Web Developer & Designer creating beautiful and functional web projects. I specialize in front-end development and user experience design with a passion for clean code and pixel-perfect designs.</p>
                <a href="#contact" class="btn">Hire Me</a>
                <div class="social-icons">
                    <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">My <span>Services</span></h2>
            <div class="services-container">
                <div class="service-box">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                    <p>Custom website development using modern technologies like HTML5, CSS3, JavaScript, and PHP to create responsive and dynamic websites.</p>
                </div>
                <div class="service-box">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Web Design</h3>
                    <p>Creative and user-friendly designs that enhance user experience and reflect your brand identity across all devices.</p>
                </div>
                <div class="service-box">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Responsive Design</h3>
                    <p>Websites that look great and function perfectly on all devices from desktops to smartphones and tablets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <h2 class="section-title">Contact <span>Me</span></h2>
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" class="form-control" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Register Form -->
    <div class="container">
        <div class="register-container" id="registerContainer">
            <h2>Create an Account</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="reg-name">Full Name</label>
                    <input type="text" id="reg-name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="reg-email">Email Address</label>
                    <input type="email" id="reg-email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="reg-password">Password</label>
                    <input type="password" id="reg-password" class="form-control" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-text">
                <p>&copy; 2023 CoderGirl. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Sticky Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', function() {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            
            // Close menu when a link is clicked
            if (this.getAttribute('href') !== '#') {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            }
        }));

        // Register Form Toggle
        const registerBtn = document.getElementById('registerBtn');
        const registerContainer = document.getElementById('registerContainer');

        registerBtn.addEventListener('click', function(e) {
            e.preventDefault();
            registerContainer.style.display = registerContainer.style.display === 'block' ? 'none' : 'block';
            window.scrollTo({
                top: registerContainer.offsetTop - 100,
                behavior: 'smooth'
            });
        });

        // Form Submissions
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value
            };
            
            // In a real application, you would send this data to a server
            console.log('Contact Form Submitted:', formData);
            alert('Thank you for your message! I will get back to you soon.');
            this.reset();
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = {
                name: document.getElementById('reg-name').value,
                email: document.getElementById('reg-email').value,
                password: document.getElementById('reg-password').value
            };
            
            // In a real application, you would send this data to a server
            console.log('Registration Form Submitted:', formData);
            alert('Registration successful! Welcome to the community.');
            this.reset();
            registerContainer.style.display = 'none';
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                if (this.getAttribute('href') === '#') return;
                
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>