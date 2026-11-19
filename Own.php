<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCraft - Website Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 28px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .logo-icon {
            margin-right: 10px;
            font-size: 32px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 20px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        
        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .hero {
            text-align: center;
            padding: 40px 20px;
            margin-bottom: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .hero p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(75, 108, 183, 0.4);
        }
        
        .btn-secondary {
            background: #ecf0f1;
            color: #2c3e50;
        }
        
        .btn-secondary:hover {
            background: #dfe6e9;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-content {
            padding: 25px;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: #4b6cb7;
            margin-bottom: 15px;
        }
        
        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        
        .templates {
            margin-bottom: 40px;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            font-size: 2rem;
        }
        
        .template-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .template {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .template-img {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            position: relative;
            overflow: hidden;
        }
        
        .template-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .template:hover .template-img img {
            transform: scale(1.05);
        }
        
        .template-content {
            padding: 20px;
        }
        
        .template-content h3 {
            margin-bottom: 10px;
            color: #2c3e50;
        }
        
        footer {
            text-align: center;
            padding: 30px;
            margin-top: 40px;
            background: #2c3e50;
            color: white;
            border-radius: 10px;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 100;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .close-modal {
            font-size: 1.8rem;
            cursor: pointer;
            color: #7f8c8d;
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
        }
        
        .template-preview {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .preview-image {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .preview-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .preview-details {
            padding: 10px 0;
        }
        
        .preview-details h3 {
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .feature-list {
            list-style: none;
            margin: 15px 0;
        }
        
        .feature-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .feature-list i {
            color: #4b6cb7;
            margin-right: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 20px;
                justify-content: center;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .template-preview {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <span class="logo-icon"><i class="fas fa-globe"></i></span>
                <span>WebCraft Studio</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#templates">Templates</a></li>
                    <li><a href="#" onclick="openModal('contactModal')">Contact</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <h1>Create Your Professional Website in Minutes</h1>
            <p>No coding skills required. Our intuitive website builder helps you create a stunning online presence with drag-and-drop simplicity.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary" onclick="openModal('signupModal')">Get Started</button>
                <button class="btn btn-secondary" onclick="openModal('demoModal')">View Demo</button>
            </div>
        </section>

        <section id="features" class="features">
            <div class="feature-card">
                <div class="feature-content">
                    <div class="feature-icon"><i class="fas fa-mouse-pointer"></i></div>
                    <h3>Drag & Drop Builder</h3>
                    <p>Easily create your website by dragging elements to the canvas. No technical knowledge needed.</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-content">
                    <div class="feature-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Mobile Responsive</h3>
                    <p>All websites created with our platform automatically look great on all devices.</p>
                </div>
            </div>
            <div class="feature-card">
                <div class="feature-content">
                    <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>Customizable Templates</h3>
                    <p>Choose from dozens of professionally designed templates and customize to your needs.</p>
                </div>
            </div>
        </section>

        <section id="templates" class="templates">
            <h2 class="section-title">Website Templates</h2>
            <div class="template-gallery">
                <div class="template">
                    <div class="template-img" style="background: linear-gradient(45deg, #3498db, #2c3e50);">
                        <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" alt="Business Template">
                    </div>
                    <div class="template-content">
                        <h3>Professional Business</h3>
                        <p>Clean and corporate design suitable for any business.</p>
                        <button class="btn btn-primary" style="margin-top: 15px;" onclick="openModal('businessModal')">Preview</button>
                    </div>
                </div>
                <div class="template">
                    <div class="template-img" style="background: linear-gradient(45deg, #9b59b6, #34495e);">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" alt="Portfolio Template">
                    </div>
                    <div class="template-content">
                        <h3>Creative Portfolio</h3>
                        <p>Showcase your work in style with this elegant portfolio template.</p>
                        <button class="btn btn-primary" style="margin-top: 15px;" onclick="openModal('portfolioModal')">Preview</button>
                    </div>
                </div>
                <div class="template">
                    <div class="template-img" style="background: linear-gradient(45deg, #e74c3c, #c0392b);">
                        <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80" alt="E-commerce Template">
                    </div>
                    <div class="template-content">
                        <h3>Online Store</h3>
                        <p>Complete e-commerce solution with product listings and shopping cart.</p>
                        <button class="btn btn-primary" style="margin-top: 15px;" onclick="openModal('ecommerceModal')">Preview</button>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>© 2025 WebCraft Studio. All rights reserved.</p>
            <p>Create your own website with our easy-to-use platform.</p>
        </footer>
    </div>

    <!-- Signup Modal -->
    <div id="signupModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('signupModal')">&times;</button>
            <div class="modal-header">
                <h2>Create Your Account</h2>
            </div>
            <form id="signupForm">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Create a password" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Sign Up & Get Started</button>
            </form>
        </div>
    </div>

    <!-- Demo Modal -->
    <div id="demoModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('demoModal')">&times;</button>
            <div class="modal-header">
                <h2>Website Builder Demo</h2>
            </div>
            <div class="template-preview">
                <div class="preview-image">
                    <img src="https://images.unsplash.com/photo-1610563166150-b34df4f3bcd6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Website Builder Interface">
                </div>
                <div class="preview-details">
                    <h3>Interactive Website Builder</h3>
                    <p>Experience our powerful drag-and-drop website builder with this interactive demo.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Drag and drop elements</li>
                        <li><i class="fas fa-check-circle"></i> Real-time preview</li>
                        <li><i class="fas fa-check-circle"></i> Mobile responsive editing</li>
                        <li><i class="fas fa-check-circle"></i> Dozens of pre-designed sections</li>
                    </ul>
                    <button class="btn btn-primary">Try Interactive Demo</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Template Modal -->
    <div id="businessModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('businessModal')">&times;</button>
            <div class="modal-header">
                <h2>Business Template</h2>
            </div>
            <div class="template-preview">
                <div class="preview-image">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Business Template">
                </div>
                <div class="preview-details">
                    <h3>Professional Business Template</h3>
                    <p>Perfect for corporate websites, small businesses, and professional services.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Clean, modern design</li>
                        <li><i class="fas fa-check-circle"></i> About Us and Services sections</li>
                        <li><i class="fas fa-check-circle"></i> Testimonials and team profiles</li>
                        <li><i class="fas fa-check-circle"></i> Contact form and map integration</li>
                    </ul>
                    <button class="btn btn-primary">Use This Template</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Template Modal -->
    <div id="portfolioModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('portfolioModal')">&times;</button>
            <div class="modal-header">
                <h2>Portfolio Template</h2>
            </div>
            <div class="template-preview">
                <div class="preview-image">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="Portfolio Template">
                </div>
                <div class="preview-details">
                    <h3>Creative Portfolio Template</h3>
                    <p>Ideal for designers, photographers, artists, and creatives to showcase their work.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Gallery and portfolio grid layouts</li>
                        <li><i class="fas fa-check-circle"></i> Project detail pages</li>
                        <li><i class="fas fa-check-circle"></i> About me and client testimonials</li>
                        <li><i class="fas fa-check-circle"></i> Blog integration</li>
                    </ul>
                    <button class="btn btn-primary">Use This Template</button>
                </div>
            </div>
        </div>
    </div>

    <!-- E-commerce Template Modal -->
    <div id="ecommerceModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('ecommerceModal')">&times;</button>
            <div class="modal-header">
                <h2>E-commerce Template</h2>
            </div>
            <div class="template-preview">
                <div class="preview-image">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="E-commerce Template">
                </div>
                <div class="preview-details">
                    <h3>Online Store Template</h3>
                    <p>Complete e-commerce solution with everything you need to sell products online.</p>
                    <ul class="feature-list">
                        <li><i class="fas fa-check-circle"></i> Product catalog and detail pages</li>
                        <li><i class="fas fa-check-circle"></i> Shopping cart and checkout</li>
                        <li><i class="fas fa-check-circle"></i> Payment gateway integration</li>
                        <li><i class="fas fa-check-circle"></i> Inventory management</li>
                    </ul>
                    <button class="btn btn-primary">Use This Template</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <button class="close-modal" onclick="closeModal('contactModal')">&times;</button>
            <div class="modal-header">
                <h2>Contact Us</h2>
            </div>
            <form id="contactForm">
                <div class="form-group">
                    <label for="contactName">Your Name</label>
                    <input type="text" id="contactName" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="contactEmail">Email Address</label>
                    <input type="email" id="contactEmail" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" class="form-control" rows="4" placeholder="Your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
            </form>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside of modal content
        window.onclick = function(event) {
            const modals = document.getElementsByClassName('modal');
            for (let i = 0; i < modals.length; i++) {
                if (event.target === modals[i]) {
                    modals[i].style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            }
        }
        
        // Form submission handling
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for signing up! You can now start creating your website.');
            closeModal('signupModal');
        });
        
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            closeModal('contactModal');
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
                        top: targetElement.offsetTop - 20,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>
</html>