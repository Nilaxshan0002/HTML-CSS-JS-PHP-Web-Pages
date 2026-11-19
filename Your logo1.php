<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Template</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #ff4b1f 0%, #ff9068 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            width: 100%;
            background: linear-gradient(to bottom, #ffd700, #ffed4e);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
        }
        
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 28px;
            font-weight: 800;
            color: #ff7700;
            display: flex;
            align-items: center;
            z-index: 10;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 32px;
            background: #ff7700;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        header {
            background: rgba(255, 255, 255, 0.2);
            padding: 60px 40px 25px;
            text-align: center;
        }
        
        header h1 {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: 2px;
            color: #ff7700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            min-height: 500px;
        }
        
        .text-content {
            flex: 1;
            min-width: 300px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .text-section {
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .text-section h2 {
            font-size: 1.5rem;
            color: #d35400;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #ff7700;
            display: inline-block;
        }
        
        .text-section p {
            line-height: 1.6;
            color: #7f4c00;
            margin-bottom: 12px;
        }
        
        .image-placeholder {
            flex: 1;
            min-width: 300px;
            background: linear-gradient(135deg, #ff7700 0%, #ff5500 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .image-placeholder i {
            font-size: 5rem;
            margin-bottom: 20px;
            opacity: 0.9;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .image-placeholder h3 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .upload-btn {
            background: white;
            color: #ff7700;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        
        .upload-btn:hover {
            background: #f8f9fa;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }
        
        .remove-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: none;
        }
        
        .remove-btn:hover {
            background: #c0392b;
            transform: translateY(-3px);
        }
        
        .image-preview {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: center;
            display: none;
            z-index: 1;
        }
        
        .qr-code {
            width: 180px;
            height: 180px;
            background: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 2;
            position: relative;
        }
        
        .qr-code i {
            font-size: 5rem;
            color: #333;
            margin-bottom: 10px;
        }
        
        .qr-code p {
            color: #333;
            font-weight: 600;
            text-align: center;
        }
        
        .contact-info {
            margin-top: 20px;
            width: 100%;
            z-index: 2;
            position: relative;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(5px);
        }
        
        .contact-item i {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #fff;
            width: 30px;
            text-align: center;
        }
        
        .contact-item p {
            color: #fff;
            margin: 0;
            font-size: 1rem;
        }
        
        footer {
            background: rgba(255, 119, 0, 0.8);
            padding: 20px 40px;
            text-align: center;
            color: white;
            font-size: 0.9rem;
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 15px;
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        
        .modal h2 {
            color: #ff7700;
            margin-bottom: 20px;
        }
        
        .modal p {
            color: #7f4c00;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .close-modal {
            background: #ff7700;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .close-modal:hover {
            background: #e65c00;
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }
            
            .text-content, .image-placeholder {
                min-width: 100%;
            }
            
            .image-placeholder {
                min-height: 350px;
            }
            
            header h1 {
                font-size: 2.2rem;
            }
        }
        
        /* Animation for the image placeholder */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
        
        .image-placeholder {
            animation: pulse 8s infinite ease-in-out;
        }
        
        .text-section {
            transition: transform 0.3s ease;
        }
        
        .text-section:hover {
            transform: translateY(-5px);
        }
        
        .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-fire"></i>
            <span>BrandLogo</span>
        </div>
        
        <header>
            <h1># CONTENT</h1>
        </header>
        
        <div class="content-wrapper">
            <div class="text-content">
                <div class="text-section">
                    <h2>LOREM IPSUM SAMPLE TEXT</h2>
                    <p>Welcome to our content section. This is a placeholder paragraph designed to demonstrate layout and typography. Clear, concise text helps create a professional impression, while balanced formatting improves readability across all devices.</p>
                </div>
                
                <div class="text-section">
                    <h2>YOUR LOREM IPSUM SAMPLE TEXT</h2>
                    <p>Our services are designed to provide the highest quality and reliability. We focus on clear processes and efficient solutions to meet the needs of every client.</p>
                    <p>Our team of experts ensures that every project is handled with precision and care, maintaining consistent standards of excellence.</p>
                </div>
                
                <div class="text-section">
                    <h2>YOUR LOREM IPSUM SAMPLE TEXT</h2>
                    <p>Our team is committed to delivering exceptional results through careful planning and attention to detail. We ensure that every project is executed efficiently and meets the highest standards of quality.</p>
                    <p>We continuously strive to improve our processes, providing innovative solutions and reliable support to all our clients.</p>
                </div>
            </div>
            
            <div class="image-placeholder">
                <div class="image-preview" id="imagePreview"></div>
                <i class="fas fa-image" id="placeholderIcon"></i>
                <h3 id="placeholderText">YOUR PICTURE HERE</h3>
                
                <input type="file" id="imageUpload" accept="image/*" style="display: none;">
                
                <div class="button-group">
                    <button class="upload-btn" onclick="document.getElementById('imageUpload').click()">Upload Image</button>
                    <button class="remove-btn" id="removeImageBtn">Remove Image</button>
                </div>
                
                <div class="qr-code">
                    <i class="fas fa-qrcode"></i>
                    <p>Scan QR Code</p>
                </div>
                
                <div class="contact-info">
                    <div class="contact-item" onclick="showModal('Location', '123 Business Street, Suite 456, New York, NY 10001')">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Your Text Here Location</p>
                    </div>
                    
                    <div class="contact-item" onclick="showModal('Website', 'Visit us at: www.yourbusiness.com')">
                        <i class="fas fa-globe"></i>
                        <p>Your Text Here Website</p>
                    </div>
                    
                    <div class="contact-item" onclick="showModal('Email', 'Contact us at: info@yourbusiness.com')">
                        <i class="fas fa-envelope"></i>
                        <p>Your Text Here Email</p>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <p>© 2025 Content Template. All rights reserved.</p>
        </footer>
    </div>

    <div class="modal" id="infoModal">
        <div class="modal-content">
            <h2 id="modalTitle">Information</h2>
            <p id="modalMessage">This is a modal message.</p>
            <button class="close-modal" onclick="closeModal()">Close</button>
        </div>
    </div>

    <script>
        // Handle image upload and preview
        document.getElementById('imageUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                const preview = document.getElementById('imagePreview');
                
                reader.onload = function(e) {
                    preview.style.backgroundImage = `url(${e.target.result})`;
                    preview.style.display = 'block';
                    
                    // Hide the default placeholder elements
                    document.getElementById('placeholderIcon').style.display = 'none';
                    document.getElementById('placeholderText').style.display = 'none';
                    
                    // Show remove button
                    document.getElementById('removeImageBtn').style.display = 'block';
                    
                    // Change upload button text
                    document.querySelector('.upload-btn').innerText = 'Change Image';
                };
                
                reader.readAsDataURL(file);
            }
        });
        
        // Handle image removal
        document.getElementById('removeImageBtn').addEventListener('click', function() {
            const preview = document.getElementById('imagePreview');
            preview.style.backgroundImage = '';
            preview.style.display = 'none';
            
            // Show the default placeholder elements
            document.getElementById('placeholderIcon').style.display = 'block';
            document.getElementById('placeholderText').style.display = 'block';
            
            // Hide remove button
            this.style.display = 'none';
            
            // Reset upload button text
            document.querySelector('.upload-btn').innerText = 'Upload Image';
            
            // Clear the file input
            document.getElementById('imageUpload').value = '';
        });
        
        // Add some interactive effects to text sections
        const textSections = document.querySelectorAll('.text-section');
        
        textSections.forEach(section => {
            section.addEventListener('mouseenter', () => {
                section.style.boxShadow = '0 8px 20px rgba(0, 0, 0, 0.15)';
            });
            
            section.addEventListener('mouseleave', () => {
                section.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)';
            });
        });
        
        // Animate the QR code on hover
        const qrCode = document.querySelector('.qr-code');
        
        qrCode.addEventListener('mouseenter', () => {
            qrCode.style.transform = 'scale(1.05)';
            qrCode.style.transition = 'transform 0.3s ease';
        });
        
        qrCode.addEventListener('mouseleave', () => {
            qrCode.style.transform = 'scale(1)';
        });
        
        // Modal functions
        function showModal(title, message) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalMessage').textContent = message;
            document.getElementById('infoModal').style.display = 'flex';
        }
        
        function closeModal() {
            document.getElementById('infoModal').style.display = 'none';
        }
        
        // Close modal when clicking outside
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('infoModal');
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>