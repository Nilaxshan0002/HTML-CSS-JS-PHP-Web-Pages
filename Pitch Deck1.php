<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitch Deck Templates</title>
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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            margin-bottom: 40px;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 800;
            color: #2c3e50;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: #3498db;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 32px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        nav ul li a:hover {
            color: #3498db;
        }
        
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            margin-bottom: 60px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #2c3e50;
            line-height: 1.2;
            margin-bottom: 20px;
            max-width: 800px;
        }
        
        .hero p {
            font-size: 1.5rem;
            color: #34495e;
            margin-bottom: 30px;
            max-width: 600px;
        }
        
        .cta-button {
            background: #3498db;
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }
        
        .cta-button:hover {
            background: #2980b9;
            transform: translateY(-3px);
        }
        
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            width: 300px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-icon {
            background: #3498db;
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .feature-card p {
            color: #7f8c8d;
            line-height: 1.6;
        }
        
        .templates {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .template-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .template-card:hover {
            transform: scale(1.03);
        }
        
        .template-img {
            height: 200px;
            background: linear-gradient(to right, #3498db, #2c3e50);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
        }
        
        .template-content {
            padding: 20px;
        }
        
        .template-content h3 {
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .template-content p {
            color: #7f8c8d;
            margin-bottom: 20px;
        }
        
        .template-button {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .template-button:hover {
            background: #3498db;
        }
        
        footer {
            text-align: center;
            padding: 30px 0;
            color: #7f8c8d;
            border-top: 1px solid #ddd;
            margin-top: 20px;
            width: 100%;
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin-top: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-presentation"></i>
                <div>Pitch<span>Pro</span></div>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Templates</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </header>
        
        <section class="hero">
            <h1>Win New Clients or Investors</h1>
            <p>Professional pitch deck templates to impress your audience and close deals faster</p>
            <button class="cta-button">Get Started Now</button>
        </section>
        
        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3>Beautiful Designs</h3>
                <p>Professionally designed templates that make your pitch stand out from the competition.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Quick Customization</h3>
                <p>Easily customize colors, fonts, and layouts to match your brand identity in minutes.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Data Visualization</h3>
                <p>Include charts, graphs, and infographics to make your data more compelling.</p>
            </div>
        </section>
        
        <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px; font-size: 2.5rem;">Popular Templates</h2>
        
        <section class="templates">
            <div class="template-card">
                <div class="template-img">Startup Pitch</div>
                <div class="template-content">
                    <h3>Startup Funding Deck</h3>
                    <p>Perfect for seeking investment from venture capitalists and angel investors.</p>
                    <button class="template-button">Use Template</button>
                </div>
            </div>
            
            <div class="template-card">
                <div class="template-img">Sales Proposal</div>
                <div class="template-content">
                    <h3>Enterprise Sales Deck</h3>
                    <p>Win big clients with this professional sales presentation template.</p>
                    <button class="template-button">Use Template</button>
                </div>
            </div>
            
            <div class="template-card">
                <div class="template-img">Product Launch</div>
                <div class="template-content">
                    <h3>Product Launch Presentation</h3>
                    <p>Create buzz and excitement for your new product or service.</p>
                    <button class="template-button">Use Template</button>
                </div>
            </div>
        </section>
    </div>
    
    <footer>
        <p>© 2025 PitchPro. All rights reserved.</p>
    </footer>

    <script>
        // Simple JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            const ctaButton = document.querySelector('.cta-button');
            const templateButtons = document.querySelectorAll('.template-button');
            
            // CTA button animation
            ctaButton.addEventListener('click', function() {
                alert('Thank you for your interest! Redirecting to template selection...');
            });
            
            // Template buttons functionality
            templateButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const templateName = this.parentElement.querySelector('h3').textContent;
                    alert(`You selected the "${templateName}" template!`);
                });
            });
            
            // Animate elements on scroll
            const animateOnScroll = function() {
                const features = document.querySelectorAll('.feature-card');
                const templates = document.querySelectorAll('.template-card');
                
                features.forEach(feature => {
                    const featurePosition = feature.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (featurePosition < screenPosition) {
                        feature.style.opacity = 1;
                        feature.style.transform = 'translateY(0)';
                    }
                });
                
                templates.forEach(template => {
                    const templatePosition = template.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight / 1.3;
                    
                    if (templatePosition < screenPosition) {
                        template.style.opacity = 1;
                        template.style.transform = 'scale(1)';
                    }
                });
            };
            
            // Initialize styles for animation
            document.querySelectorAll('.feature-card, .template-card').forEach(item => {
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                item.style.opacity = 0;
            });
            
            document.querySelectorAll('.feature-card').forEach(item => {
                item.style.transform = 'translateY(50px)';
            });
            
            document.querySelectorAll('.template-card').forEach(item => {
                item.style.transform = 'scale(0.9)';
            });
            
            window.addEventListener('scroll', animateOnScroll);
            // Initial call in case elements are already in view
            animateOnScroll();
        });
    </script>
</body>
</html>