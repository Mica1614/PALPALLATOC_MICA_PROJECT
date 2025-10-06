<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Updated to match Diprella design with teal colors and split layout */
        :root {
            --teal-primary: #000000;
            --teal-dark: #c100f6;
            --coral: #000000;
            --yellow: #f58fce;
            --gray-light: #F8F9FA;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
        }
        
        .split-container {
            display: flex;
            height: 100vh;
        }
        
        .left-panel {
            flex: 1;
            background: rgb(2, 2, 2);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 2rem;
        }
        
        .right-panel {
            flex: 1;
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .logo {
            position: absolute;
            top: 2rem;
            left: 2rem;
            display: flex;
            align-items: center;
            font-weight: 600;
            color: #333;
        }
        
        .logo-icon {
            width: 24px;
            height: 24px;
            background: var(--teal-primary);
            border-radius: 4px;
            margin-right: 0.5rem;
        }
        
        .form-container {
            width: 100%;
            max-width: 350px;
        }
        
        .form-title {
            color: var(--teal-primary);
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .social-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .social-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: white;
            color: #666;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            border-color: var(--teal-primary);
            color: var(--teal-primary);
        }
        
        .divider {
            text-align: center;
            margin: 1.5rem 0;
            color: #999;
            font-size: 0.9rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: var(--teal-primary);
            box-shadow: 0 0 0 0.2rem rgba(78, 205, 196, 0.25);
            background: white;
        }
        
        .forgot-link {
            color: #fffdfd;
            text-decoration: none;
            font-size: 0.9rem;
            display: block;
            text-align: center;
            margin: 1rem 0;
        }
        
        .forgot-link:hover {
            color: var(--teal-primary);
        }
        
        .btn-signin {
            background: var(--teal-primary);
            border: none;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            width: 100%;
        }
        
        .btn-signin:hover {
            background: var(--teal-dark);
            transform: translateY(-2px);
        }
        
        .welcome-content {
            text-align: center;
            z-index: 2;
        }
        
        .welcome-title {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
        }
        
        .welcome-subtitle {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn-signup {
            background: transparent;
            border: 2px solid white;
            border-radius: 25px;
            padding: 0.75rem 2rem;
            color: white;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-signup:hover {
            background: white;
            color: var(--teal-primary);
        }
        
        /* Decorative shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
        }
        
        /* Enhanced floating animation with rotation and scale */
        .shape-1 {
            width: 100px;
            height: 100px;
            background: var(--coral);
            top: 10%;
            right: 10%;
            opacity: 0.8;
            animation: floatRotate 8s ease-in-out infinite;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.3);
        }
        
        /* Enhanced floating animation with different timing */
        .shape-2 {
            width: 60px;
            height: 60px;
            background: var(--yellow);
            bottom: 20%;
            left: -30px;
            opacity: 0.9;
            animation: floatRotate 6s ease-in-out infinite reverse;
            box-shadow: 0 0 30px rgba(245, 143, 206, 0.5);
        }
        
        /* Enhanced pulse animation with scale and glow */
        .right-panel::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -50px;
            right: -50px;
            animation: pulseGlow 4s ease-in-out infinite;
            box-shadow: 0 0 60px rgba(255, 255, 255, 0.3);
        }
        
        /* Enhanced anime-style background animations with more dynamic movement */
        
        /* Enhanced floating animation with rotation and scale */
        @keyframes floatRotate {
            0%, 100% {
                transform: translateY(0) translateX(0) rotate(0deg) scale(1);
            }
            25% {
                transform: translateY(-30px) translateX(20px) rotate(90deg) scale(1.1);
            }
            50% {
                transform: translateY(-15px) translateX(-20px) rotate(180deg) scale(0.9);
            }
            75% {
                transform: translateY(-40px) translateX(10px) rotate(270deg) scale(1.05);
            }
        }
        
        /* Enhanced pulse animation with glow effect */
        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(1);
                opacity: 0.1;
                box-shadow: 0 0 60px rgba(255, 255, 255, 0.3);
            }
            50% {
                transform: scale(1.3);
                opacity: 0.3;
                box-shadow: 0 0 100px rgba(255, 255, 255, 0.5);
            }
        }
        
        /* Enhanced particle floating animation with wave motion */
        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) translateX(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            50% {
                transform: translateY(50vh) translateX(50px) rotate(180deg);
                opacity: 0.8;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) translateX(-50px) rotate(360deg);
                opacity: 0;
            }
        }
        
        /* Enhanced drift animation for smoother movement */
        @keyframes drift {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }
            33% {
                transform: translate(30px, -30px) rotate(120deg);
            }
            66% {
                transform: translate(-20px, -60px) rotate(240deg);
            }
            100% {
                transform: translate(0, -90px) rotate(360deg);
            }
        }
        
        /* Added sparkling/twinkling animation for star effects */
        @keyframes sparkle {
            0%, 100% {
                opacity: 0;
                transform: scale(0);
            }
            50% {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes twinkle {
            0%, 100% {
                opacity: 0.2;
                transform: scale(0.8);
            }
            50% {
                opacity: 1;
                transform: scale(1.2);
            }
        }
        
        /* Animated background particles container */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
            pointer-events: none;
        }
        
        /* Enhanced particle styling with glow and varied animations */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: particleFloat linear infinite;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }
        
        /* Added sparkle class for twinkling star effects */
        .sparkle {
            position: absolute;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 0 0 25px rgba(255, 255, 255, 0.5);
            animation: sparkle 2s ease-in-out infinite;
        }
        
        /* Enhanced individual particle variations with more dynamic animations */
        .particle:nth-child(1) {
            left: 10%;
            width: 8px;
            height: 8px;
            animation: particleFloat 12s ease-in-out infinite, wave 3s ease-in-out infinite;
            animation-delay: 0s;
        }
        
        .particle:nth-child(2) {
            left: 20%;
            width: 12px;
            height: 12px;
            animation: particleFloat 10s ease-in-out infinite, drift 4s ease-in-out infinite;
            animation-delay: 2s;
        }
        
        .particle:nth-child(3) {
            left: 30%;
            width: 6px;
            height: 6px;
            animation: particleFloat 15s ease-in-out infinite, wave 2.5s ease-in-out infinite;
            animation-delay: 4s;
        }
        
        .particle:nth-child(4) {
            left: 40%;
            width: 10px;
            height: 10px;
            animation: particleFloat 11s ease-in-out infinite, drift 3.5s ease-in-out infinite;
            animation-delay: 1s;
        }
        
        .particle:nth-child(5) {
            left: 50%;
            width: 8px;
            height: 8px;
            animation: particleFloat 13s ease-in-out infinite, wave 4s ease-in-out infinite;
            animation-delay: 3s;
        }
        
        .particle:nth-child(6) {
            left: 60%;
            width: 14px;
            height: 14px;
            animation: particleFloat 9s ease-in-out infinite, drift 3s ease-in-out infinite;
            animation-delay: 5s;
        }
        
        .particle:nth-child(7) {
            left: 70%;
            width: 7px;
            height: 7px;
            animation: particleFloat 14s ease-in-out infinite, wave 3.5s ease-in-out infinite;
            animation-delay: 2s;
        }
        
        .particle:nth-child(8) {
            left: 80%;
            width: 9px;
            height: 9px;
            animation: particleFloat 12s ease-in-out infinite, drift 4.5s ease-in-out infinite;
            animation-delay: 4s;
        }
        
        .particle:nth-child(9) {
            left: 90%;
            width: 11px;
            height: 11px;
            animation: particleFloat 11s ease-in-out infinite, wave 2s ease-in-out infinite;
            animation-delay: 1s;
        }
        
        .particle:nth-child(10) {
            left: 15%;
            width: 8px;
            height: 8px;
            animation: particleFloat 13s ease-in-out infinite, drift 3.8s ease-in-out infinite;
            animation-delay: 3s;
        }
        
        /* Added sparkle variations with different positions and timings */
        .sparkle:nth-child(11) {
            top: 15%;
            left: 25%;
            width: 4px;
            height: 4px;
            animation-delay: 0s;
        }
        
        .sparkle:nth-child(12) {
            top: 35%;
            left: 65%;
            width: 6px;
            height: 6px;
            animation: twinkle 3s ease-in-out infinite;
            animation-delay: 0.5s;
        }
        
        .sparkle:nth-child(13) {
            top: 55%;
            left: 15%;
            width: 3px;
            height: 3px;
            animation-delay: 1s;
        }
        
        .sparkle:nth-child(14) {
            top: 75%;
            left: 80%;
            width: 5px;
            height: 5px;
            animation: twinkle 2.5s ease-in-out infinite;
            animation-delay: 1.5s;
        }
        
        .sparkle:nth-child(15) {
            top: 25%;
            left: 45%;
            width: 4px;
            height: 4px;
            animation-delay: 2s;
        }
        
        .sparkle:nth-child(16) {
            top: 65%;
            left: 35%;
            width: 6px;
            height: 6px;
            animation: twinkle 3.5s ease-in-out infinite;
            animation-delay: 2.5s;
        }
        
        .sparkle:nth-child(17) {
            top: 45%;
            left: 75%;
            width: 3px;
            height: 3px;
            animation-delay: 3s;
        }
        
        .sparkle:nth-child(18) {
            top: 85%;
            left: 55%;
            width: 5px;
            height: 5px;
            animation: twinkle 2.8s ease-in-out infinite;
            animation-delay: 0.8s;
        }
        
        .sparkle:nth-child(19) {
            top: 10%;
            left: 85%;
            width: 4px;
            height: 4px;
            animation-delay: 1.8s;
        }
        
        .sparkle:nth-child(20) {
            top: 50%;
            left: 10%;
            width: 6px;
            height: 6px;
            animation: twinkle 3.2s ease-in-out infinite;
            animation-delay: 2.2s;
        }
        
        /* Enhanced animated gradient background with smoother animation */
        .right-panel {
            background: linear-gradient(135deg, var(--teal-primary) 0%, var(--teal-dark) 50%, #8b00d4 100%);
            background-size: 300% 300%;
            animation: gradientShift 10s ease infinite;
        }
        
        /* Enhanced left panel particles with purple glow */
        .left-panel .particles .particle {
            background: rgba(193, 0, 246, 0.25);
            box-shadow: 0 0 15px rgba(193, 0, 246, 0.4);
        }
        
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            25% {
                background-position: 50% 75%;
            }
            50% {
                background-position: 100% 50%;
            }
            75% {
                background-position: 50% 25%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        /* Added wave animation for particles */
        @keyframes wave {
            0%, 100% {
                transform: translateX(0) translateY(0);
            }
            25% {
                transform: translateX(20px) translateY(-10px);
            }
            50% {
                transform: translateX(0) translateY(-20px);
            }
            75% {
                transform: translateX(-20px) translateY(-10px);
            }
        }
        
        @media (max-width: 768px) {
            .split-container {
                flex-direction: column;
            }
            
            .right-panel {
                order: -1;
                flex: 0 0 40%;
            }
            
            .left-panel {
                flex: 1;
                padding: 1rem;
            }
            
            .logo {
                position: relative;
                top: 0;
                left: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="split-container">
        <!-- Left Panel - Login Form -->
        <div class="left-panel">
            <!-- Animated particles in left panel background -->
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
            
            <div class="logo">
                <div class="logo-icon"></div>
                Diprella
            </div>
            
            <div class="form-container">
                <h1 class="form-title">Sign in to Diprella</h1>
                
                <!-- Social Login Buttons -->
                <div class="social-buttons">
                    <a href="#" class="social-btn" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="social-btn" title="Google">
                        <i class="bi bi-google"></i>
                    </a>
                    <a href="#" class="social-btn" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
                
                <div class="divider">or use your email account</div>
                
                <?php getErrors() ?>
                <?php getMessage() ?>

                <!-- Login Form -->
                <form id="loginForm" action="<?= site_url('login'); ?>" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    
                    <a href="#" class="forgot-link">Forgot your password?</a>
                    
                    <button type="submit" class="btn btn-signin text-white">
                        Sign In
                    </button>
                </form>
            </div>
            
            <!-- Decorative shapes -->
            <div class="shape shape-2"></div>
        </div>
        
        <!-- Right Panel - Welcome Message -->
        <div class="right-panel">
            <!-- Animated particles in right panel background -->
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <!-- Added sparkling star elements -->
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
                <div class="sparkle"></div>
            </div>
            
            <div class="welcome-content">
                <h2 class="welcome-title">Hello, Friend!</h2>
                <p class="welcome-subtitle">Enter your personal details<br>and start journey with us</p>
                <a href="<?= site_url('register');?>" class="btn-signup">Sign Up</a>
            </div>
            
            <!-- Decorative shapes -->
            <div class="shape shape-1"></div>
        </div>
    </div>

    <script src="<?= BASE_URL; ?>/public/js/alert.js"></script>

</body>
</html>
