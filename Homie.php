<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect & Follow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
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
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .logo {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .tagline {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 25px;
        }
        
        .profiles {
            flex: 3;
            min-width: 300px;
            padding: 20px;
        }
        
        .section-title {
            font-size: 1.5rem;
            margin: 0 0 25px 0;
            padding-bottom: 10px;
            border-bottom: 3px solid #6a11cb;
            color: #444;
        }
        
        .profile-card {
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        
        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            border: 3px solid #6a11cb;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info {
            flex: 1;
        }
        
        .profile-name {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }
        
        .profile-title {
            color: #6c757d;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        
        .profile-stats {
            font-size: 0.85rem;
            color: #6a11cb;
            font-weight: 500;
        }
        
        .follow-btn {
            background: #6a11cb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 3px 8px rgba(106, 17, 203, 0.3);
        }
        
        .follow-btn:hover {
            background: #2575fc;
            transform: scale(1.05);
        }
        
        .follow-btn.following {
            background: #28a745;
            box-shadow: 0 3px 8px rgba(40, 167, 69, 0.3);
        }
        
        .sidebar {
            flex: 1;
            min-width: 250px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }
        
        .search-box {
            display: flex;
            margin-bottom: 25px;
        }
        
        .search-input {
            flex: 1;
            padding: 12px 18px;
            border: 2px solid #ddd;
            border-radius: 25px 0 0 25px;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .search-input:focus {
            border-color: #6a11cb;
        }
        
        .search-btn {
            background: #6a11cb;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 0 25px 25px 0;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .search-btn:hover {
            background: #2575fc;
        }
        
        .sidebar-title {
            font-size: 1.3rem;
            margin: 25px 0 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #6a11cb;
            color: #444;
        }
        
        .trending-list {
            list-style: none;
        }
        
        .trending-item {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.2s;
            cursor: pointer;
            border-radius: 5px;
            padding-left: 10px;
        }
        
        .trending-item:hover {
            background: rgba(106, 17, 203, 0.1);
        }
        
        .hashtag {
            color: #6a11cb;
            font-weight: 600;
            font-size: 1.1rem;
        }
        
        .count {
            color: #6c757d;
            font-size: 0.9rem;
            background: #eee;
            padding: 3px 8px;
            border-radius: 15px;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 25px;
            gap: 15px;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
            font-size: 1.2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .social-icon:hover {
            transform: scale(1.15);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        
        footer {
            text-align: center;
            padding: 25px;
            background: #343a40;
            color: white;
        }
        
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
            
            .profiles, .sidebar {
                width: 100%;
            }
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            background: #28a745;
            color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateX(150%);
            transition: transform 0.3s;
            z-index: 1000;
            display: flex;
            align-items: center;
        }
        
        .notification i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        .trending-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .view-all {
            color: #6a11cb;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .view-all:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Connect</div>
            <div class="tagline">Follow your favorite creators and stay connected with trending topics</div>
        </header>
        
        <div class="content">
            <div class="profiles">
                <h2 class="section-title">People to Follow</h2>
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Patrick Village">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Patrick Village</div>
                        <div class="profile-title">Food Blogger • Recipe Creator • Chef</div>
                        <div class="profile-stats">12K followers • 345 recipes</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
                
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Nasso Pistlar">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Nasso Pistlar</div>
                        <div class="profile-title">Travel Photographer • Adventurer</div>
                        <div class="profile-stats">45K followers • 128 posts</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
                
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db1604?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Marcos Motel">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Marcos Motel</div>
                        <div class="profile-title">Lifestyle Influencer • Entrepreneur</div>
                        <div class="profile-stats">89K followers • 512 posts</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
                
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Sarah Johnson">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Sarah Johnson</div>
                        <div class="profile-title">Fitness Coach • Nutritionist</div>
                        <div class="profile-stats">67K followers • 231 videos</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
                
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Michael Chen">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Michael Chen</div>
                        <div class="profile-title">Tech Reviewer • Gadget Expert</div>
                        <div class="profile-stats">102K followers • 417 reviews</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
                
                <div class="profile-card">
                    <div class="avatar">
                        <img src="https://images.unsplash.com/photo-1489424731084-a5d8b219a5bb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Emma Wilson">
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Emma Wilson</div>
                        <div class="profile-title">Fashion Designer • Style Influencer</div>
                        <div class="profile-stats">78K followers • 304 posts</div>
                    </div>
                    <button class="follow-btn" onclick="toggleFollow(this)">Follow</button>
                </div>
            </div>
            
            <div class="sidebar">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search people...">
                    <button class="search-btn"><i class="fas fa-search"></i></button>
                </div>
                
                <div class="trending-header">
                    <h3 class="sidebar-title">Trending Now</h3>
                    <a href="#" class="view-all">View all</a>
                </div>
                <ul class="trending-list">
                    <li class="trending-item" onclick="searchTrending('#SummerRecipes')">
                        <span class="hashtag">#SummerRecipes</span>
                        <span class="count">12.5K</span>
                    </li>
                    <li class="trending-item" onclick="searchTrending('#TravelDiaries')">
                        <span class="hashtag">#TravelDiaries</span>
                        <span class="count">8.7K</span>
                    </li>
                    <li class="trending-item" onclick="searchTrending('#HomeWorkout')">
                        <span class="hashtag">#HomeWorkout</span>
                        <span class="count">5.3K</span>
                    </li>
                    <li class="trending-item" onclick="searchTrending('#FoodBlogger')">
                        <span class="hashtag">#FoodBlogger</span>
                        <span class="count">4.9K</span>
                    </li>
                    <li class="trending-item" onclick="searchTrending('#ExploreWorld')">
                        <span class="hashtag">#ExploreWorld</span>
                        <span class="count">3.8K</span>
                    </li>
                </ul>
                
                <h3 class="sidebar-title">Connect With Us</h3>
                <div class="social-icons">
                    <a href="https://facebook.com" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" class="social-icon" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://youtube.com" class="social-icon" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2023 Connect - Social Follow Platform. All rights reserved.</p>
        </footer>
    </div>
    
    <div class="notification" id="notification">
        <i class="fas fa-check-circle"></i>
        <span id="notification-text"></span>
    </div>

    <script>
        // Toggle follow button
        function toggleFollow(btn) {
            if (btn.classList.contains('following')) {
                btn.classList.remove('following');
                btn.textContent = 'Follow';
                showNotification('You unfollowed ' + btn.parentElement.querySelector('.profile-name').textContent);
            } else {
                btn.classList.add('following');
                btn.textContent = 'Following';
                showNotification('You are now following ' + btn.parentElement.querySelector('.profile-name').textContent);
            }
        }
        
        // Show notification
        function showNotification(message) {
            const notification = document.getElementById('notification');
            const notificationText = document.getElementById('notification-text');
            
            notificationText.textContent = message;
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }
        
        // Search functionality
        const searchInput = document.querySelector('.search-input');
        const searchBtn = document.querySelector('.search-btn');
        const profileCards = document.querySelectorAll('.profile-card');
        
        searchBtn.addEventListener('click', performSearch);
        searchInput.addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                performSearch();
            }
        });
        
        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();
            
            profileCards.forEach(card => {
                const profileName = card.querySelector('.profile-name').textContent.toLowerCase();
                const profileTitle = card.querySelector('.profile-title').textContent.toLowerCase();
                
                if (profileName.includes(searchTerm) || profileTitle.includes(searchTerm)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
        
        // Trending tag search
        function searchTrending(tag) {
            searchInput.value = tag;
            performSearch();
        }
        
        // Initialize with some followed accounts
        window.onload = function() {
            // Follow first account by default
            const firstBtn = document.querySelector('.profile-card:first-child .follow-btn');
            toggleFollow(firstBtn);
        };
    </script>
</body>
</html>