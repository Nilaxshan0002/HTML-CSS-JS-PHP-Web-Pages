<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Corp - Annual Business Report 2050</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            color: white;
            padding: 50px 20px;
            text-align: center;
            position: relative;
        }
        
        .logo-container {
            position: absolute;
            top: 20px;
            left: 30px;
            display: flex;
            align-items: center;
        }
        
        .logo-circle {
            width: 60px;
            height: 60px;
            background: #68c9e0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 20px rgba(104, 201, 224, 0.7);
        }
        
        .logo-text {
            color: white;
            font-size: 32px;
            font-weight: 800;
            font-family: 'Georgia', serif;
        }
        
        .company-name {
            font-size: 3.8rem;
            font-weight: 700;
            letter-spacing: 3px;
            margin-bottom: 15px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .report-title {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }
        
        .report-year {
            font-size: 6rem;
            font-weight: 800;
            opacity: 0.9;
            margin-top: 10px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
        }
        
        /* Navigation */
        nav {
            background: #2c3e50;
            padding: 18px;
        }
        
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            flex-wrap: wrap;
        }
        
        nav li {
            margin: 0 20px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        
        nav a i {
            margin-right: 8px;
        }
        
        nav a:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        /* Main Content */
        .content {
            padding: 45px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
        }
        
        @media (max-width: 900px) {
            .content {
                grid-template-columns: 1fr;
            }
            
            .company-name {
                font-size: 2.8rem;
            }
            
            .report-year {
                font-size: 4.5rem;
            }
            
            .logo-container {
                position: relative;
                top: 0;
                left: 0;
                justify-content: center;
                margin-bottom: 20px;
            }
        }
        
        .card {
            background: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 5px solid #4ca1af;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }
        
        .card h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #68c9e0;
            display: flex;
            align-items: center;
        }
        
        .card h2 i {
            margin-right: 12px;
            color: #4ca1af;
        }
        
        .card p {
            margin-bottom: 18px;
            font-size: 17px;
            line-height: 1.7;
        }
        
        .highlight {
            background: linear-gradient(120deg, #68c9e0 0%, #4ca1af 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin: 25px 0;
            box-shadow: 0 5px 15px rgba(76, 161, 175, 0.3);
        }
        
        .highlight h3 {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .highlight h3 i {
            margin-right: 10px;
        }
        
        /* Charts Section */
        .charts {
            padding: 45px;
            background: #f1f5f9;
        }
        
        .charts h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #2c3e50;
            font-size: 2.2rem;
        }
        
        .chart-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            margin-top: 25px;
        }
        
        @media (max-width: 900px) {
            .chart-container {
                grid-template-columns: 1fr;
            }
        }
        
        .chart {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        
        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 35px;
        }
        
        .footer-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .footer-content p {
            margin: 15px 0;
            font-size: 17px;
        }
        
        .footer-content .generated {
            color: #68c9e0;
            font-weight: 500;
        }
        
        /* Print Styles */
        @media print {
            body {
                background: white;
                padding: 0;
            }
            
            .container {
                box-shadow: none;
                border-radius: 0;
            }
            
            nav {
                display: none;
            }
            
            .card:hover {
                transform: none;
                box-shadow: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo-container">
                <div class="logo-circle">
                    <div class="logo-text">T</div>
                </div>
            </div>
            <h1 class="company-name">IT Corp</h1>
            <h2 class="report-title">Annual Business Report</h2>
            <div class="report-year">2050</div>
        </header>
        
        <nav>
            <ul>
                <li><a href="#executive"><i class="fas fa-chart-line"></i> Executive Summary</a></li>
                <li><a href="#financials"><i class="fas fa-dollar-sign"></i> Financial Overview</a></li>
                <li><a href="#performance"><i class="fas fa-tachometer-alt"></i> Performance Metrics</a></li>
                <li><a href="#forecast"><i class="fas fa-project-diagram"></i> 2051 Forecast</a></li>
            </ul>
        </nav>
        
        <div class="content">
            <div class="card">
                <h2 id="executive"><i class="fas fa-chart-line"></i> Executive Summary</h2>
                <p>IT Corp has demonstrated exceptional growth and innovation throughout 2050, solidifying our position as a market leader in technology solutions. Our strategic investments in AI and quantum computing have yielded significant returns.</p>
                
                <div class="highlight">
                    <h3><i class="fas fa-star"></i> Yearly Achievement</h3>
                    <p>Revenue increased by 28% compared to the previous fiscal year, while operational costs were reduced by 12% through optimized processes and automation.</p>
                </div>
                
                <p>Our expansion into emerging markets has proven highly successful, with Asia-Pacific operations exceeding targets by 42%. Customer satisfaction scores reached an all-time high of 94% across all product lines.</p>
            </div>
            
            <div class="card">
                <h2 id="financials"><i class="fas fa-dollar-sign"></i> Financial Highlights</h2>
                <p><strong>Q4 Revenue:</strong> $4.5B (up 15% YoY)</p>
                <p><strong>Annual Revenue:</strong> $16.2B (up 28% YoY)</p>
                <p><strong>Net Profit:</strong> $3.8B (up 32% YoY)</p>
                <p><strong>R&D Investment:</strong> $2.1B (up 40% YoY)</p>
                <p><strong>Market Cap:</strong> $125B (as of Dec 2050)</p>
                
                <div class="highlight">
                    <h3><i class="fas fa-trophy"></i> Stock Performance</h3>
                    <p>IT Corp shares outperformed the technology index by 18%, reaching a record high of $245 in November 2050.</p>
                </div>
            </div>
            
            <div class="card">
                <h2 id="performance"><i class="fas fa-tachometer-alt"></i> Performance Metrics</h2>
                <p>Customer satisfaction reached an all-time high of 94%, exceeding our target of 90%.</p>
                <p>Employee retention improved to 92%, well above the industry average of 78%.</p>
                <p>Product innovation cycle time reduced by 35% through enhanced agile methodologies.</p>
                
                <div class="highlight">
                    <h3><i class="fas fa-award"></i> Industry Recognition</h3>
                    <p>IT Corp received 12 industry awards for innovation, including the prestigious "Technology Pioneer" award for our work in quantum computing applications.</p>
                </div>
            </div>
            
            <div class="card">
                <h2 id="forecast"><i class="fas fa-project-diagram"></i> 2051 Forecast</h2>
                <p>Based on current growth trajectories and market analysis, we project:</p>
                <p><strong>Revenue Growth:</strong> 22-28%</p>
                <p><strong>Market Expansion:</strong> Entry into 3 new international markets</p>
                <p><strong>Product Launches:</strong> 5 major product releases scheduled</p>
                <p><strong>R&D Increase:</strong> Additional $500M allocated to quantum computing research</p>
                
                <div class="highlight">
                    <h3><i class="fas fa-lightbulb"></i> Strategic Initiatives</h3>
                    <p>Focus on sustainable technology solutions with a goal of reducing carbon footprint by 25% across all operations.</p>
                </div>
            </div>
        </div>
        
        <section class="charts">
            <h2>Performance Metrics</h2>
            <div class="chart-container">
                <div class="chart">
                    <canvas id="revenueChart" width="400" height="250"></canvas>
                </div>
                <div class="chart">
                    <canvas id="growthChart" width="400" height="250"></canvas>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="footer-content">
                <p>IT Corp Annual Business Report 2050</p>
                <p>Confidential & Proprietary Information</p>
                <p class="generated">Generated on: <?php echo date('Y-m-d H:i:s'); ?></p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Revenue Chart
            const revenueCtx = document.getElementById('revenueChart').getContext('2d');
            const revenueChart = new Chart(revenueCtx, {
                type: 'bar',
                data: {
                    labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                    datasets: [{
                        label: 'Revenue (in Billions $)',
                        data: [3.2, 3.8, 4.5, 4.7],
                        backgroundColor: [
                            'rgba(104, 201, 224, 0.7)',
                            'rgba(104, 201, 224, 0.7)',
                            'rgba(104, 201, 224, 0.7)',
                            'rgba(76, 161, 175, 0.7)'
                        ],
                        borderColor: [
                            'rgba(104, 201, 224, 1)',
                            'rgba(104, 201, 224, 1)',
                            'rgba(104, 201, 224, 1)',
                            'rgba(76, 161, 175, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Quarterly Revenue (2050)',
                            font: {
                                size: 16
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Billions USD'
                            }
                        }
                    }
                }
            });
            
            // Growth Chart
            const growthCtx = document.getElementById('growthChart').getContext('2d');
            const growthChart = new Chart(growthCtx, {
                type: 'line',
                data: {
                    labels: ['2045', '2046', '2047', '2048', '2049', '2050'],
                    datasets: [{
                        label: 'Annual Revenue Growth %',
                        data: [12, 15, 18, 22, 25, 28],
                        fill: true,
                        backgroundColor: 'rgba(104, 201, 224, 0.2)',
                        borderColor: 'rgba(76, 161, 175, 1)',
                        tension: 0.3,
                        pointBackgroundColor: 'rgba(76, 161, 175, 1)',
                        pointRadius: 6,
                        pointHoverRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Revenue Growth (2045-2050)',
                            font: {
                                size: 16
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Growth Percentage'
                            }
                        }
                    }
                }
            });
            
            // Smooth scrolling for navigation
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>