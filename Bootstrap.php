<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BootScroller - Modern Bootstrap Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6f42c1;
            --secondary: #6c757d;
            --success: #198754;
            --light: #f8f9fa;
            --dark: #212529;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #444;
        }
        
        .navbar {
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .hero-section {
            background: linear-gradient(135deg, #6f42c1 0%, #6610f2 100%);
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 500;
        }
        
        .btn-outline-light {
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 500;
        }
        
        .features-section {
            padding: 80px 0;
        }
        
        .feature-box {
            padding: 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .testimonials {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        
        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 20px 0;
        }
        
        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
        
        .pricing-section {
            padding: 80px 0;
        }
        
        .pricing-card {
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 0;
            margin: 20px 0;
            transition: all 0.3s ease;
        }
        
        .pricing-card:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .pricing-header {
            background: var(--primary);
            color: white;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        
        .pricing-features {
            padding: 20px;
        }
        
        .contact-section {
            background: linear-gradient(135deg, #6f42c1 0%, #6610f2 100%);
            color: white;
            padding: 80px 0;
        }
        
        footer {
            background: var(--dark);
            color: white;
            padding: 40px 0;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--primary);
        }
        
        .modal-content {
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-rocket me-2 text-primary"></i>BootScroller
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <a href="#pricing" class="btn btn-primary ms-3">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="display-4 fw-bold mb-4">BOOTSTART YOUR SITE EASILY!</h1>
                    <p class="lead mb-5">Get your BootScroller now and create stunning websites in minutes with our modern Bootstrap template.</p>
                    <a href="#pricing" class="btn btn-light btn-lg me-3">GET IT NOW</a>
                    <a href="#features" class="btn btn-outline-light btn-lg">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">AWESOME TEMPLATE FOR START AND GROW BUSINESS!</h2>
                    <p class="lead">BootScroller provides faster setup and easy growing for your online presence!</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Easy to Customize</h4>
                        <p>Includes 250+ web-based colors and multiple styling options with easy-to-use configuration.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>Modern Colors</h4>
                        <p>Based on trending web colors that make your website look fresh and professional.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4>Well Coded</h4>
                        <p>W3C valid HTML5 code with clean structure and comprehensive documentation.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Saves Time</h4>
                        <p>Save up to 72 hours of development time with our ready-to-use components.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">What Our Users Say</h2>
                    <p class="lead">Don't just take our word for it - hear from our satisfied customers</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="John Doe" class="testimonial-img">
                            <div class="ms-3">
                                <h5 class="mb-0">John Doe</h5>
                                <small class="text-muted">Web Developer</small>
                            </div>
                        </div>
                        <p class="mb-0">"This template saved me countless hours of work. The code is clean and well organized. Highly recommended!"</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Sarah Miller" class="testimonial-img">
                            <div class="ms-3">
                                <h5 class="mb-0">Sarah Miller</h5>
                                <small class="text-muted">Business Owner</small>
                            </div>
                        </div>
                        <p class="mb-0">"I was able to create a professional website for my business in just one weekend. The customization options are fantastic!"</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="Robert Johnson" class="testimonial-img">
                            <div class="ms-3">
                                <h5 class="mb-0">Robert Johnson</h5>
                                <small class="text-muted">Freelancer</small>
                            </div>
                        </div>
                        <p class="mb-0">"The support team is amazing. They helped me customize the template to fit my specific needs. Great product and service!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">Choose Your Plan</h2>
                    <p class="lead">Select the perfect plan for your needs</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="pricing-card text-center">
                        <div class="pricing-header">
                            <h3>Basic</h3>
                            <div class="price"><span class="currency">$</span><span class="value">49</span><span class="period">/one-time</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li class="mb-2">Single Website License</li>
                                <li class="mb-2">6 Months Support</li>
                                <li class="mb-2">Free Updates for 1 Year</li>
                                <li class="mb-2">Basic Components</li>
                                <li class="mb-2">Documentation</li>
                            </ul>
                            <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-plan="Basic">Get Started</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="pricing-card text-center">
                        <div class="pricing-header bg-success">
                            <h3>Professional</h3>
                            <div class="price"><span class="currency">$</span><span class="value">99</span><span class="period">/one-time</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li class="mb-2">5 Websites License</li>
                                <li class="mb-2">1 Year Support</li>
                                <li class="mb-2">Lifetime Updates</li>
                                <li class="mb-2">All Components</li>
                                <li class="mb-2">Priority Documentation</li>
                            </ul>
                            <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-plan="Professional">Get Started</button>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="pricing-card text-center">
                        <div class="pricing-header">
                            <h3>Enterprise</h3>
                            <div class="price"><span class="currency">$</span><span class="value">199</span><span class="period">/one-time</span></div>
                        </div>
                        <div class="pricing-features">
                            <ul class="list-unstyled">
                                <li class="mb-2">Unlimited Websites</li>
                                <li class="mb-2">Lifetime Support</li>
                                <li class="mb-2">Lifetime Updates</li>
                                <li class="mb-2">All Components + Extras</li>
                                <li class="mb-2">Customization Help</li>
                            </ul>
                            <button class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#purchaseModal" data-plan="Enterprise">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">Get In Touch</h2>
                    <p class="lead">Have questions? We'd love to hear from you</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-light btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-rocket me-2"></i>BootScroller</h5>
                    <p>Modern Bootstrap template for your next project.</p>
                </div>
                <div class="col-md-6 text-end">
                    <div class="social-icons">
                        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© 2023 BootScroller. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#policyModal" data-policy="privacy">Privacy Policy</a>
                    <span class="mx-2">|</span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#policyModal" data-policy="terms">Terms of Service</a>
                    <span class="mx-2">|</span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#faqModal">FAQ</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Purchase Modal -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Purchase <span id="selectedPlan"></span> Plan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="purchaseForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="card" class="form-label">Credit Card Number</label>
                            <input type="text" class="form-control" id="card" placeholder="XXXX XXXX XXXX XXXX" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="expiry" class="form-label">Expiry Date</label>
                                <input type="text" class="form-control" id="expiry" placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" placeholder="XXX" required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmPurchase">Complete Purchase</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Policy Modal -->
    <div class="modal fade" id="policyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="policyModalTitle">Privacy Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="privacyPolicy">
                        <h4>Privacy Policy</h4>
                        <p>Last updated: September 1, 2023</p>
                        <p>This Privacy Policy describes how BootScroller ("we", "us", or "our") collects, uses, and shares your personal information when you use our website.</p>
                        
                        <h5>Information We Collect</h5>
                        <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support.</p>
                        
                        <h5>How We Use Your Information</h5>
                        <p>We use the information we collect to provide, maintain, and improve our services, to process your transactions, and to communicate with you.</p>
                    </div>
                    
                    <div id="termsPolicy" style="display: none;">
                        <h4>Terms of Service</h4>
                        <p>Last updated: September 1, 2023</p>
                        
                        <h5>Agreement to Terms</h5>
                        <p>By accessing or using our website, you agree to be bound by these Terms of Service and our Privacy Policy.</p>
                        
                        <h5>Intellectual Property Rights</h5>
                        <p>The design of the BootScroller template along with all created content are trademarks of BootScroller and may not be copied or used without permission.</p>
                        
                        <h5>User Accounts</h5>
                        <p>When you create an account with us, you must provide accurate and complete information. You are responsible for safeguarding your account password.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Modal -->
    <div class="modal fade" id="faqModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Frequently Asked Questions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How do I install the template?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    After purchasing, you'll receive a download link. Simply download the ZIP file, extract it, and open the index.html file in your browser to view the template.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can I use this template for multiple projects?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    It depends on the license you purchase. The Basic license allows use for a single project, while the Professional license allows up to 5 projects, and the Enterprise license allows unlimited projects.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Do you provide support?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide support based on your plan. Basic includes 6 months of support, Professional includes 1 year, and Enterprise includes lifetime support.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
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
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });
        
        // Purchase modal functionality
        const purchaseModal = document.getElementById('purchaseModal');
        purchaseModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const plan = button.getAttribute('data-plan');
            document.getElementById('selectedPlan').textContent = plan;
        });
        
        document.getElementById('confirmPurchase').addEventListener('click', function() {
            alert('Thank you for your purchase! You will receive an email with download instructions shortly.');
            const modal = bootstrap.Modal.getInstance(purchaseModal);
            modal.hide();
        });
        
        // Policy modal functionality
        const policyModal = document.getElementById('policyModal');
        policyModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const policy = button.getAttribute('data-policy');
            
            if (policy === 'privacy') {
                document.getElementById('policyModalTitle').textContent = 'Privacy Policy';
                document.getElementById('privacyPolicy').style.display = 'block';
                document.getElementById('termsPolicy').style.display = 'none';
            } else if (policy === 'terms') {
                document.getElementById('policyModalTitle').textContent = 'Terms of Service';
                document.getElementById('privacyPolicy').style.display = 'none';
                document.getElementById('termsPolicy').style.display = 'block';
            }
        });
    </script>
</body>
</html>