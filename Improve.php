<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamCode | Tools for Apple Ecosystem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global Styles */
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
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--primary);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
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
            color: var(--secondary);
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
            color: var(--secondary);
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, #1a2530 100%);
            color: white;
            padding: 5rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--secondary);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Products Section */
        .products {
            padding: 5rem 0;
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
            color: #777;
            max-width: 600px;
            margin: 0 auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-img {
            height: 200px;
            background: linear-gradient(45deg, #6a89cc, #4a69bd);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
        }

        .product-content {
            padding: 1.5rem;
        }

        .product-content h3 {
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .product-content p {
            color: #777;
            margin-bottom: 1rem;
        }

        /* Features Section */
        .features {
            background-color: var(--light);
            padding: 5rem 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        /* Contact Section */
        .contact {
            padding: 5rem 0;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--primary);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            min-height: 150px;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-links {
            display: flex;
            list-style: none;
            margin: 1rem 0;
        }

        .social-links li {
            margin: 0 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.8rem;
            transition: all 0.3s;
            display: inline-block;
        }

        .social-links a:hover {
            color: var(--secondary);
            transform: translateY(-5px);
        }

        /* Download Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 500px;
            width: 90%;
            text-align: center;
        }

        .modal-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--primary);
                padding: 1rem 0;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 0.5rem 0;
                text-align: center;
            }

            .hamburger {
                display: block;
            }

            .hero h1 {
                font-size: 2.5rem;
            }
            
            .modal-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Dream<span>Code</span></a>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="hamburger">☰</div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>We Improve Your Everyday</h1>
            <p>DreamCode is a company specialized in the development of innovative tools for Mac, iPhone and iPad. We create simple yet powerful applications that enhance digital workflows.</p>
            <a href="#products" class="btn">Explore Our Apps</a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Our Applications</h2>
                <p>Take a look at our innovative solutions. You can download them for free and experience the difference.</p>
            </div>
            <div class="product-grid">
                <div class="product-card">
                    <div class="product-img">📱</div>
                    <div class="product-content">
                        <h3>FlowTask</h3>
                        <p>Streamline your workflow with our intuitive task management app designed specifically for macOS.</p>
                        <a href="#" class="btn download-btn" data-app="FlowTask">Download</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">📊</div>
                    <div class="product-content">
                        <h3>DataVisual</h3>
                        <p>Transform complex data into beautiful, understandable visualizations on your iPad.</p>
                        <a href="#" class="btn download-btn" data-app="DataVisual">Download</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img">🎨</div>
                    <div class="product-content">
                        <h3>DesignMate</h3>
                        <p>The ultimate design companion for creative professionals working on iPhone and iPad.</p>
                        <a href="#" class="btn download-btn" data-app="DesignMate">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Our Tools</h2>
                <p>We focus on creating seamless experiences that integrate perfectly with your Apple ecosystem.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Optimized Performance</h3>
                    <p>Our applications are finely tuned for Apple hardware, ensuring smooth and efficient operation.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔄</div>
                    <h3>Seamless Sync</h3>
                    <p>Your data stays updated across all your devices through iCloud integration.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Privacy Focused</h3>
                    <p>We prioritize your data security with end-to-end encryption and privacy protections.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>Have questions or want to learn more about our products? Reach out to our team.</p>
            </div>
            <form class="contact-form" id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <a href="#" class="logo">Dream<span>Code</span></a>
                <p>Creating innovative tools for the Apple ecosystem</p>
                <ul class="social-links">
                    <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <p>&copy; 2023 DreamCode. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Download Modal -->
    <div class="modal" id="downloadModal">
        <div class="modal-content">
            <h2 id="modalAppName">Download App</h2>
            <p>Select your platform to download:</p>
            <div class="modal-buttons">
                <a href="#" class="btn" id="macDownload"><i class="fab fa-apple"></i> macOS</a>
                <a href="#" class="btn" id="iosDownload"><i class="fab fa-apple"></i> iOS</a>
                <a href="#" class="btn" id="ipadDownload"><i class="fab fa-apple"></i> iPadOS</a>
            </div>
            <button class="btn" style="margin-top: 20px; background: var(--accent)" id="closeModal">Cancel</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close mobile nav when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Form Submission Handling
        const contactForm = document.getElementById('contactForm');
        
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            // Simple validation
            if (name && email && message) {
                // In a real implementation, you would send this data to a server
                alert(`Thank you for your message, ${name}! We'll get back to you soon.`);
                contactForm.reset();
            } else {
                alert('Please fill in all fields.');
            }
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
                }
            });
        });

        // Download functionality
        const downloadButtons = document.querySelectorAll('.download-btn');
        const downloadModal = document.getElementById('downloadModal');
        const modalAppName = document.getElementById('modalAppName');
        const macDownload = document.getElementById('macDownload');
        const iosDownload = document.getElementById('iosDownload');
        const ipadDownload = document.getElementById('ipadDownload');
        const closeModal = document.getElementById('closeModal');

        downloadButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const appName = this.getAttribute('data-app');
                modalAppName.textContent = `Download ${appName}`;
                
                // Set download links based on the app
                macDownload.href = `https://example.com/download/${appName.toLowerCase()}_mac.dmg`;
                iosDownload.href = `https://example.com/download/${appName.toLowerCase()}_ios.zip`;
                ipadDownload.href = `https://example.com/download/${appName.toLowerCase()}_ipad.zip`;
                
                downloadModal.style.display = 'flex';
            });
        });

        // Close modal when clicking cancel
        closeModal.addEventListener('click', function() {
            downloadModal.style.display = 'none';
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function(e) {
            if (e.target === downloadModal) {
                downloadModal.style.display = 'none';
            }
        });

        // Simulate PHP processing (for demonstration)
        console.log("PHP processed successfully");
    </script>
</body>
</html>