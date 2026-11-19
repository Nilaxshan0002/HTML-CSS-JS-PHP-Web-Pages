<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Development Consultant Services</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #6e8efb;
            --secondary: #a777e3;
            --dark: #333;
            --light: #f8f9fa;
            --gray: #6c757d;
            --success: #28a745;
        }
        
        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
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
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 100px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.07)"/></svg>');
            background-size: 100% 100%;
        }
        
        header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            position: relative;
            animation: fadeInDown 1s ease;
        }
        
        header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            animation: fadeInUp 1s ease;
        }
        
        /* Navigation */
        nav {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary);
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
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        /* Divider Line */
        .divider {
            height: 2px;
            background: linear-gradient(to right, transparent, var(--secondary), transparent);
            margin: 40px auto;
            width: 80%;
        }
        
        /* CTA Section */
        .cta-section {
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 40px 0;
            animation: fadeIn 1s ease;
        }
        
        .cta-section h2 {
            color: var(--primary);
            font-size: 2.2rem;
            margin-bottom: 20px;
        }
        
        .cta-button {
            display: inline-block;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        /* Services Section */
        .services-section h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 40px;
            color: var(--dark);
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
            text-align: center;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        /* Checklist Section */
        .checklist-section {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 40px 0;
        }
        
        .checklist-section h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--dark);
        }
        
        .checklist {
            list-style: none;
        }
        
        .checklist li {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            font-size: 1.1rem;
        }
        
        .checklist input[type="checkbox"] {
            margin-right: 15px;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        
        /* Contact Form */
        .contact-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 60px 0;
            border-radius: 10px;
        }
        
        .contact-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.2rem;
        }
        
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background: white;
            color: var(--primary);
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: bold;
            cursor: pointer;
            display: block;
            margin: 0 auto;
            transition: background 0.3s, color 0.3s;
        }
        
        .submit-btn:hover {
            background: var(--light);
            color: var(--secondary);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 40px 0;
            margin-top: 60px;
        }
        
        .social-links {
            margin: 20px 0;
        }
        
        .social-links a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s;
        }
        
        .social-links a:hover {
            transform: translateY(-5px);
        }
        
        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            border-radius: 5px;
            color: white;
            background-color: var(--success);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateX(150%);
            transition: transform 0.3s ease;
            z-index: 1000;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInDown {
            from { 
                opacity: 0;
                transform: translateY(-20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2.2rem;
            }
            
            .cta-section h2 {
                font-size: 1.8rem;
            }
            
            .service-card {
                padding: 20px;
            }
            
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 15px;
            }
            
            .nav-links li {
                margin-left: 15px;
                margin-right: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="container navbar">
            <a href="#" class="logo">AppDev Consultants</a>
            <ul class="nav-links">
                <li><a href="#services">Services</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header>
        <div class="container">
            <h1>App Development Consultant Services</h1>
            <p>We transform your innovative ideas into powerful digital solutions. Our expert team delivers cutting-edge applications tailored to your business needs, ensuring seamless performance across all platforms.</p>
        </div>
    </header>

    <div class="container">
        <div class="divider"></div>

        <section class="cta-section">
            <h2>START A PROJECT TODAY</h2>
            <p>Ready to bring your app idea to life? Let's collaborate to create something extraordinary that will elevate your business and engage your audience.</p>
            <a href="#contact" class="cta-button">Get Started</a>
        </section>

        <div class="divider"></div>

        <section id="services" class="services-section">
            <h2>Technologies We Excel In</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Algola</h3>
                    <p>Advanced search and discovery solutions powered by Algola's powerful algorithms for superior user experiences.</p>
                </div>
                <div class="service-card">
                    <h3>Kopa</h3>
                    <p>Efficient resource sharing and collaborative platforms using Kopa's innovative framework.</p>
                </div>
                <div class="service-card">
                    <h3>Object-Oriented Design</h3>
                    <p>Object-oriented design principles applied to create robust, maintainable, and scalable applications.</p>
                </div>
                <div class="service-card">
                    <h3>Scoop Odemy</h3>
                    <p>Interactive learning platforms and educational technology solutions with Scoop Odemy integration.</p>
                </div>
                <div class="service-card">
                    <h3>AWS</h3>
                    <p>Cloud infrastructure and scalable hosting solutions using Amazon Web Services for optimal performance.</p>
                </div>
                <div class="service-card">
                    <h3>Stripe</h3>
                    <p>Secure payment processing and e-commerce solutions integrated with Stripe's reliable platform.</p>
                </div>
            </div>
        </section>

        <section id="process" class="checklist-section">
            <h2>Our Development Process</h2>
            <ul class="checklist">
                <li><input type="checkbox" id="item1"><label for="item1">Initial Consultation & Requirements Gathering</label></li>
                <li><input type="checkbox" id="item2"><label for="item2">Project Planning & Timeline Development</label></li>
                <li><input type="checkbox" id="item3"><label for="item3">UI/UX Design & Prototyping</label></li>
                <li><input type="checkbox" id="item4"><label for="item4">Development Phase & Regular Updates</label></li>
                <li><input type="checkbox" id="item5"><label for="item5">Quality Assurance & Testing</label></li>
                <li><input type="checkbox" id="item6"><label for="item6">Deployment & Launch Assistance</label></li>
                <li><input type="checkbox" id="item7"><label for="item7">Post-Launch Support & Maintenance</label></li>
            </ul>
        </section>

        <section id="contact" class="contact-section">
            <h2>Get In Touch</h2>
            <form class="contact-form" method="POST" action="">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="service">Service Interested In</label>
                    <select id="service" name="service" required>
                        <option value="">Select a service</option>
                        <option value="algola">Algola</option>
                        <option value="kopa">Kopa</option>
                        <option value="oo">Object-Oriented Design</option>
                        <option value="scoop-odemy">Scoop Odemy</option>
                        <option value="aws">AWS</option>
                        <option value="stripe">Stripe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Project Details</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" name="submit" class="submit-btn">Submit Project Request</button>
            </form>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 App Development Consultant Services. All rights reserved.</p>
            <div class="social-links">
                <a href="#">📱</a>
                <a href="#">💻</a>
                <a href="#">📧</a>
            </div>
            <p>Contact us: info@appdevconsultants.com | +1 (555) 123-4567</p>
        </div>
    </footer>

    <div class="notification" id="notification">
        Thank you for your message! We'll get back to you soon.
    </div>

    <script>
        // Interactive checklist functionality
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            
            checkboxes.forEach(checkbox => {
                // Load saved state from localStorage
                const isChecked = localStorage.getItem(checkbox.id) === 'true';
                checkbox.checked = isChecked;
                updateChecklistItemStyle(checkbox);
                
                checkbox.addEventListener('change', function() {
                    // Save state to localStorage
                    localStorage.setItem(this.id, this.checked);
                    updateChecklistItemStyle(this);
                });
            });
            
            function updateChecklistItemStyle(checkbox) {
                if (checkbox.checked) {
                    checkbox.parentElement.style.textDecoration = 'line-through';
                    checkbox.parentElement.style.color = 'var(--primary)';
                } else {
                    checkbox.parentElement.style.textDecoration = 'none';
                    checkbox.parentElement.style.color = 'var(--dark)';
                }
            }
            
            // Smooth scrolling for anchor links
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
            
            // Form validation
            const contactForm = document.querySelector('.contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    const nameInput = document.getElementById('name');
                    const emailInput = document.getElementById('email');
                    const serviceInput = document.getElementById('service');
                    let isValid = true;
                    
                    if (!nameInput.value.trim()) {
                        alert('Please enter your name');
                        isValid = false;
                    }
                    
                    if (!emailInput.value.trim() || !isValidEmail(emailInput.value)) {
                        alert('Please enter a valid email address');
                        isValid = false;
                    }
                    
                    if (!serviceInput.value) {
                        alert('Please select a service');
                        isValid = false;
                    }
                    
                    if (!isValid) {
                        e.preventDefault();
                    }
                });
            }
            
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }
            
            // Show notification if form was submitted
            <?php if (isset($formSubmitted) && $formSubmitted): ?>
            setTimeout(() => {
                const notification = document.getElementById('notification');
                notification.classList.add('show');
                
                setTimeout(() => {
                    notification.classList.remove('show');
                }, 3000);
            }, 500);
            <?php endif; ?>
        });
    </script>

    <?php
    // PHP form handling
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        // Collect form data
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        $service = htmlspecialchars(trim($_POST['service']));
        $message = htmlspecialchars(trim($_POST['message']));
        
        // Validate data
        $errors = [];
        
        if (empty($name)) {
            $errors[] = "Name is required";
        }
        
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Valid email is required";
        }
        
        if (empty($service)) {
            $errors[] = "Service selection is required";
        }
        
        if (empty($message)) {
            $errors[] = "Message is required";
        }
        
        // If no errors, process the form
        if (empty($errors)) {
            // In a real application, you would:
            // 1. Save to database
            // 2. Send email notifications
            // 3. etc.
            
            // For demo purposes, we'll just set a flag to show notification
            $formSubmitted = true;
            
            // Clear form fields
            echo '<script>document.querySelector(".contact-form").reset();</script>';
        } else {
            // Show errors
            echo '<script>alert("' . implode("\\n", $errors) . '");</script>';
        }
    }
    ?>
</body>
</html>