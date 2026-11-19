<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspiration Hub | Stay Informed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #4e54c8;
            --secondary: #8f94fb;
            --accent: #ff6b6b;
            --dark: #333;
            --light: #f8f9fa;
            --gray: #6c757d;
        }

        body {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: var(--dark);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .logo i {
            color: var(--accent);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        nav a:hover {
            color: var(--primary);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--primary);
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.6rem 1.2rem;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
        }

        .hero {
            text-align: center;
            padding: 4rem 2rem;
            color: white;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        .search-bar {
            max-width: 600px;
            margin: 2rem auto;
            display: flex;
            background: white;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .search-bar input {
            flex: 1;
            padding: 1rem 1.5rem;
            border: none;
            outline: none;
            font-size: 1rem;
        }

        .search-bar button {
            padding: 1rem 1.5rem;
            background: var(--primary);
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        .search-bar button:hover {
            background: var(--secondary);
        }

        main {
            flex: 1;
            background: var(--light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--dark);
        }

        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        .cards-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .card-img {
            height: 200px;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .card:hover .card-img img {
            transform: scale(1.05);
        }

        .card-content {
            padding: 1.5rem;
        }

        .card h3 {
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .card p {
            color: var(--gray);
            margin-bottom: 1rem;
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            color: var(--gray);
            font-size: 0.9rem;
        }

        .card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
        }

        .icon-btn {
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
            transition: color 0.3s;
            font-size: 1.1rem;
        }

        .icon-btn:hover {
            color: var(--primary);
        }

        .icon-btn.liked {
            color: var(--accent);
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .category {
            padding: 0.8rem 1.5rem;
            background: white;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            border: 1px solid #eee;
        }

        .category:hover, .category.active {
            background: var(--primary);
            color: white;
        }

        .newsletter {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            padding: 4rem 2rem;
            text-align: center;
            color: white;
            margin: 2rem 0;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .newsletter p {
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 50px 0 0 50px;
            outline: none;
        }

        .newsletter-form button {
            padding: 1rem 1.5rem;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            transition: background 0.3s;
        }

        .newsletter-form button:hover {
            background: #ff5252;
        }

        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 2rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-col h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.8rem;
        }

        .footer-col ul a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-col ul a:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
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
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #ccc;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-header h2 {
            color: var(--primary);
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--gray);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }

        .form-options a {
            color: var(--primary);
            text-decoration: none;
        }

        .form-submit {
            width: 100%;
            padding: 1rem;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-submit:hover {
            background-color: var(--secondary);
        }

        .social-login {
            margin-top: 1.5rem;
            text-align: center;
        }

        .social-login p {
            margin-bottom: 1rem;
            color: var(--gray);
        }

        .social-login-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            transition: transform 0.3s;
        }

        .social-btn:hover {
            transform: translateY(-3px);
        }

        .fb-btn {
            background-color: #3b5998;
            color: white;
        }

        .google-btn {
            background-color: #dd4b39;
            color: white;
        }

        .twitter-btn {
            background-color: #1da1f2;
            color: white;
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .newsletter-form {
                flex-direction: column;
                gap: 1rem;
            }

            .newsletter-form input,
            .newsletter-form button {
                border-radius: 50px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <i class="fas fa-lightbulb"></i>
                <span>InspirationHub</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="nav-link" data-target="home">Home</a></li>
                    <li><a href="#" class="nav-link" data-target="discover">Discover</a></li>
                    <li><a href="#" class="nav-link" data-target="categories">Categories</a></li>
                    <li><a href="#" class="nav-link" data-target="trending">Trending</a></li>
                    <li><a href="#" class="nav-link" data-target="about">About</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <button class="btn btn-outline" id="loginBtn">Login</button>
                <button class="btn btn-primary" id="signupBtn">Sign Up</button>
            </div>
        </div>
    </header>

    <section class="hero" id="home">
        <h1>Be Inspired. Stay Informed.</h1>
        <p>Discover how brands and content creators are making an impact in the world</p>
        <div class="search-bar">
            <input type="text" placeholder="Search for inspiration...">
            <button><i class="fas fa-search"></i></button>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="section-title">
                <h2>Featured Inspiration</h2>
                <p>Explore the most impactful brand campaigns and creative content from around the world</p>
            </div>

            <div class="categories">
                <div class="category active" data-category="all">All</div>
                <div class="category" data-category="technology">Technology</div>
                <div class="category" data-category="fashion">Fashion</div>
                <div class="category" data-category="food">Food & Beverage</div>
                <div class="category" data-category="travel">Travel</div>
                <div class="category" data-category="sustainability">Sustainability</div>
            </div>

            <div class="cards-container">
                <div class="card" data-category="technology">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Marketing Analytics">
                    </div>
                    <div class="card-content">
                        <h3>Data-Driven Marketing Strategies</h3>
                        <p>How brands are leveraging big data to create personalized customer experiences</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 2 days ago</span>
                            <span><i class="far fa-eye"></i> 1.4k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card" data-category="fashion">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Sustainable Fashion">
                    </div>
                    <div class="card-content">
                        <h3>Sustainable Fashion Movement</h3>
                        <p>How eco-friendly brands are changing the fashion industry</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 5 days ago</span>
                            <span><i class="far fa-eye"></i> 2.7k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card" data-category="food">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Food Innovation">
                    </div>
                    <div class="card-content">
                        <h3>Food Industry Innovations</h3>
                        <p>Revolutionary approaches to sustainable food production and delivery</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 1 week ago</span>
                            <span><i class="far fa-eye"></i> 3.2k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-title" id="trending">
                <h2>Trending Now</h2>
                <p>See what's capturing attention in the creative world</p>
            </div>

            <div class="cards-container">
                <div class="card" data-category="technology">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Social Media Trends">
                    </div>
                    <div class="card-content">
                        <h3>Social Media Trends 2023</h3>
                        <p>The evolving landscape of social media and what it means for brands</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 3 days ago</span>
                            <span><i class="far fa-eye"></i> 4.1k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card" data-category="technology">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Web Design">
                    </div>
                    <div class="card-content">
                        <h3>Minimalist Web Design</h3>
                        <p>Why less is more in modern web design approaches</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 1 day ago</span>
                            <span><i class="far fa-eye"></i> 2.3k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card" data-category="sustainability">
                    <div class="card-img">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Brand Storytelling">
                    </div>
                    <div class="card-content">
                        <h3>The Power of Brand Storytelling</h3>
                        <p>How compelling narratives create emotional connections with audiences</p>
                        <div class="card-meta">
                            <span><i class="far fa-clock"></i> 4 days ago</span>
                            <span><i class="far fa-eye"></i> 3.8k views</span>
                        </div>
                        <div class="card-actions">
                            <button class="icon-btn"><i class="far fa-bookmark"></i></button>
                            <button class="icon-btn"><i class="far fa-heart"></i></button>
                            <button class="icon-btn"><i class="far fa-share-square"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="newsletter">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter to receive the latest inspiration and industry insights</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address">
                <button type="submit">Subscribe</button>
            </form>
        </section>

        <section class="container" id="about">
            <div class="section-title">
                <h2>About InspirationHub</h2>
                <p>Learn more about our mission to inspire and inform</p>
            </div>
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <p>InspirationHub is dedicated to showcasing the most innovative brand campaigns and creative content from around the world. We believe that inspiration can come from anywhere, and we're here to help you discover it.</p>
                <p>Our platform brings together marketers, designers, content creators, and anyone looking for fresh ideas to spark their next project.</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>InspirationHub</h3>
                <p>Your source for creative inspiration and marketing insights from brands around the world.</p>
                <div class="social-icons">
                    <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://pinterest.com" target="_blank"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#" class="nav-link" data-target="home">Home</a></li>
                    <li><a href="#" class="nav-link" data-target="discover">Discover</a></li>
                    <li><a href="#" class="nav-link" data-target="categories">Categories</a></li>
                    <li><a href="#" class="nav-link" data-target="trending">Trending</a></li>
                    <li><a href="#" class="nav-link" data-target="about">About Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#" data-category="technology">Technology</a></li>
                    <li><a href="#" data-category="fashion">Fashion</a></li>
                    <li><a href="#" data-category="food">Food & Beverage</a></li>
                    <li><a href="#" data-category="travel">Travel</a></li>
                    <li><a href="#" data-category="sustainability">Sustainability</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Contact Us</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 123 Inspiration St, Creative City</li>
                    <li><i class="fas fa-phone"></i> +1 (555) 123-4567</li>
                    <li><i class="fas fa-envelope"></i> info@inspirationhub.com</li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            <p>&copy; 2023 InspirationHub. All rights reserved.</p>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Login</h2>
                <button class="close-btn">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="loginEmail">Email</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="form-submit">Login</button>
            </form>
            <div class="social-login">
                <p>Or login with</p>
                <div class="social-login-buttons">
                    <button class="social-btn fb-btn"><i class="fab fa-facebook-f"></i></button>
                    <button class="social-btn google-btn"><i class="fab fa-google"></i></button>
                    <button class="social-btn twitter-btn"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Signup Modal -->
    <div class="modal" id="signupModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Create Account</h2>
                <button class="close-btn">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="signupName">Full Name</label>
                    <input type="text" id="signupName" required>
                </div>
                <div class="form-group">
                    <label for="signupEmail">Email</label>
                    <input type="email" id="signupEmail" required>
                </div>
                <div class="form-group">
                    <label for="signupPassword">Password</label>
                    <input type="password" id="signupPassword" required>
                </div>
                <div class="form-group">
                    <label for="signupConfirmPassword">Confirm Password</label>
                    <input type="password" id="signupConfirmPassword" required>
                </div>
                <div class="form-options">
                    <label>
                        <input type="checkbox" required> I agree to the <a href="#">Terms & Conditions</a>
                    </label>
                </div>
                <button type="submit" class="form-submit">Sign Up</button>
            </form>
            <div class="social-login">
                <p>Or sign up with</p>
                <div class="social-login-buttons">
                    <button class="social-btn fb-btn"><i class="fab fa-facebook-f"></i></button>
                    <button class="social-btn google-btn"><i class="fab fa-google"></i></button>
                    <button class="social-btn twitter-btn"><i class="fab fa-twitter"></i></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Modal functionality
        const loginBtn = document.getElementById('loginBtn');
        const signupBtn = document.getElementById('signupBtn');
        const loginModal = document.getElementById('loginModal');
        const signupModal = document.getElementById('signupModal');
        const closeBtns = document.querySelectorAll('.close-btn');

        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
        });

        signupBtn.addEventListener('click', () => {
            signupModal.style.display = 'flex';
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                loginModal.style.display = 'none';
                signupModal.style.display = 'none';
            });
        });

        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
            if (e.target === signupModal) {
                signupModal.style.display = 'none';
            }
        });

        // Navigation functionality
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = this.getAttribute('data-target');
                const element = document.getElementById(target);
                
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Category filtering
        document.querySelectorAll('.category').forEach(category => {
            category.addEventListener('click', function() {
                document.querySelector('.category.active').classList.remove('active');
                this.classList.add('active');
                
                const selectedCategory = this.getAttribute('data-category');
                const cards = document.querySelectorAll('.card');
                
                cards.forEach(card => {
                    if (selectedCategory === 'all' || card.getAttribute('data-category') === selectedCategory) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Footer category links
        document.querySelectorAll('.footer-col a[data-category]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.getAttribute('data-category');
                
                // Find and click the corresponding category button
                const categoryBtn = document.querySelector(`.category[data-category="${category}"]`);
                if (categoryBtn) {
                    categoryBtn.click();
                    
                    // Scroll to categories section
                    document.getElementById('categories').scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Like functionality
        document.querySelectorAll('.icon-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.querySelector('.fa-heart')) {
                    this.classList.toggle('liked');
                }
            });
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            if (email) {
                alert(`Thank you for subscribing with: ${email}`);
                this.querySelector('input').value = '';
            }
        });

        // Search functionality
        document.querySelector('.search-bar button').addEventListener('click', function() {
            const searchTerm = document.querySelector('.search-bar input').value;
            if (searchTerm) {
                alert(`Searching for: ${searchTerm}`);
            }
        });

        // Social login buttons
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                let platform = '';
                if (this.classList.contains('fb-btn')) {
                    platform = 'Facebook';
                } else if (this.classList.contains('google-btn')) {
                    platform = 'Google';
                } else if (this.classList.contains('twitter-btn')) {
                    platform = 'Twitter';
                }
                alert(`Redirecting to ${platform} login`);
            });
        });

        // Form submissions
        document.querySelectorAll('.modal form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const modal = this.closest('.modal');
                alert('Form submitted successfully!');
                modal.style.display = 'none';
            });
        });
    </script>
</body>
</html>