<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Sets character encoding to UTF-8 for better text compatibility -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Makes website responsive on all devices -->
    <title>HUGO - The world's fastest framework for building websites</title>

    <style>
        /* =======================
           RESET & BASE STYLES
        ======================= */
        * {
            margin: 0; /* Removes default margins */
            padding: 0; /* Removes default padding */
            box-sizing: border-box; /* Ensures padding/border do not affect element width */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Global font */
        }

        body {
            background-color: #2a4a3e; /* Dark greenish-gray background */
            color: white; /* Default text color */
            line-height: 1.6; /* Improves text readability */
        }

        /* =======================
           HEADER & NAVIGATION
        ======================= */
        header {
            background-color: #3a5a4e; /* Darker shade for header */
            padding: 1.2rem 2rem; /* Spacing inside header */
            position: fixed; /* Keeps header on top while scrolling */
            width: 100%; /* Full width header */
            top: 0; /* Sticks to top of the page */
            z-index: 1000; /* Ensures it stays above other content */
        }

        nav {
            display: flex; /* Horizontal layout */
            justify-content: space-between; /* Space between logo and links */
            align-items: center; /* Vertically center items */
            max-width: 1200px; /* Limit width */
            margin: 0 auto; /* Center navigation */
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white; /* Logo text color */
        }

        .nav-container {
            display: flex;
            align-items: center;
            gap: 1rem; /* Space between nav links and search bar */
        }

        /* Navigation Links */
        .nav-links {
            display: flex;
            gap: 0.8rem; /* Space between links */
        }

        .nav-links a {
            color: white; /* White link text */
            text-decoration: none; /* Remove underline */
            font-weight: 500;
            padding: 0.6rem 1rem; /* Spacing inside links */
            border-radius: 4px; /* Slightly rounded corners */
            transition: all 0.3s; /* Smooth hover effect */
            display: flex;
            align-items: center;
            gap: 0.3rem; /* Space between text and checkmark */
        }

        .nav-links a:hover {
            background-color: #4a6a5e; /* Hover background */
            transform: translateY(-2px); /* Lift effect on hover */
        }

        .checkmark {
            color: white; /* White checkmarks */
            font-size: 0.8rem;
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            background-color: #4a6a5e; /* Bar background */
            padding: 0.5rem 1rem;
            border-radius: 4px;
            width: 200px;
            margin-left: 1rem;
        }

        .search-bar input {
            background: transparent; /* No background color */
            border: none; /* No border */
            color: white; /* White text */
            margin-left: 0.5rem;
            width: 100%; /* Full width inside container */
            outline: none; /* Removes default focus outline */
        }

        .search-bar input::placeholder {
            color: white; /* White placeholder text */
            opacity: 0.8; /* Slightly transparent */
        }

        /* =======================
           HERO SECTION
        ======================= */
        .hero {
            text-align: center; /* Center text and elements */
            padding: 10rem 2rem 4rem; /* Top padding accounts for fixed header */
            max-width: 800px;
            margin: 0 auto; /* Center hero section */
        }

        /* Circular Letter Design (H U G O) */
        .hugo-logo {
            display: flex;
            justify-content: center;
            gap: 1rem; /* Space between circles */
            margin-bottom: 2rem;
        }

        .circle-letter {
            width: 80px;
            height: 80px;
            border-radius: 50%; /* Makes perfect circle */
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: white; /* White letter */
        }

        /* Individual Letter Colors */
        .letter-H { background-color: #ff6b6b; } /* Red */
        .letter-U { background-color: #3b5bdb; } /* Blue */
        .letter-G { background-color: #51cf66; } /* Green */
        .letter-O { background-color: #fcc419; } /* Yellow */

        /* Hero Title & Paragraph */
        .hero h1 {
            font-size: 2.8rem;
            color: white;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .hero p {
            font-size: 1.3rem;
            color: white;
            margin-bottom: 3rem;
            line-height: 1.7;
            opacity: 0.9; /* Slight fade effect */
        }

        /* Call-to-Action Button */
        .cta-button {
            background-color: #63b3ed; /* Light blue */
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.2rem;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s; /* Smooth hover effect */
        }

        /* =======================
           RESPONSIVE DESIGN
        ======================= */
        @media (max-width: 768px) {
            nav {
                flex-direction: column; /* Stack nav items vertically */
                gap: 1rem;
                padding: 1rem;
            }
            
            .nav-container {
                flex-direction: column;
                width: 100%;
                gap: 1rem;
            }
            
            .nav-links {
                flex-wrap: wrap; /* Allow links to move to new line */
                justify-content: center;
            }
            
            .search-bar {
                width: 100%;
                margin-left: 0;
            }
            
            .hero {
                padding: 8rem 1.5rem 3rem;
            }
            
            .circle-letter {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER / NAVIGATION -->
    <header>
        <nav>
            <div class="logo">HUGO</div> <!-- Website logo -->
            <div class="nav-container">
                <!-- Navigation Links -->
                <div class="nav-links">
                    <a href="#news">News</a>
                    <a href="#docs">Docs</a>
                    <a href="#themes">Themes</a>
                    <a href="#showcase">Showcase</a>
                    <a href="#community">Community <span class="checkmark">✓</span></a>
                    <a href="#github">GitHub <span class="checkmark">✓</span></a>
                </div>
                <!-- Search Bar -->
                <div class="search-bar">
                    <!-- Search Icon (SVG) -->
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 14L11.1 11.1" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input type="text" placeholder="Search the Docs"> <!-- Search input -->
                </div>
            </div>
        </nav>
    </header>

    <!-- MAIN HERO CONTENT -->
    <main>
        <section class="hero">
            <!-- Circle Letters -->
            <div class="hugo-logo">
                <div class="circle-letter letter-H">H</div>
                <div class="circle-letter letter-U">U</div>
                <div class="circle-letter letter-G">G</div>
                <div class="circle-letter letter-O">O</div>
            </div>
            <!-- Title -->
            <h1>The world's fastest<br>framework for building<br>websites</h1>
            <!-- Description -->
            <p>Hugo is one of the most popular open-source static site generators. With its amazing speed and flexibility, Hugo makes building websites fun again.</p>
            <!-- Call-to-Action Button -->
            <button class="cta-button">Quick Start</button>
        </section>
    </main>

    <!-- JAVASCRIPT: Handles button click -->
    <script>
        document.querySelector('.cta-button').addEventListener('click', function() {
            alert('Quick Start clicked!'); // Shows alert when button is clicked
        });
    </script>

</body>
</html>
