<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration/Login Landing Page</title>
    <style>
        /* (Your CSS styles here) */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap');
        
        :root {
            --accent-color: #4A90E2; 
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background: #121223; /* Dark background */
            color: #ffffff;
            min-height: 100vh;
            display: flex; 
            justify-content: center; 
            align-items: center; 
            overflow: hidden; 
        }
        
        .main-content {
            text-align: center;
            max-width: 90%;
        }

        /* PREMIUM iOS LIQUID GLASS EFFECT para sa Content Area */
        .liquid-glass-card {
            background: rgba(255, 255, 255, 0.02); 
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3); 
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 80px 60px;
            margin: 0;
            position: relative;
        }

        /* Shine Effect inside the card */
        .liquid-glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.02) 0%, rgba(255, 255, 255, 0.0) 70%);
            border-radius: 24px;
            pointer-events: none;
        }

        /* Styling para sa Text */
        .greeting-text {
            font-size: 5em; 
            font-weight: 800; 
            line-height: 1.1;
            margin-bottom: 5px;
            text-align: left;
        }

        .name-text {
            font-size: 6em; 
            font-weight: 800;
            line-height: 1.1;
            margin-top: 0;
            margin-bottom: 50px;
            text-align: left;
        }

        /* Styling para sa Buttons */
        .button-container {
            display: flex;
            justify-content: flex-start;
            gap: 20px;
            margin-top: 30px;
        }

        /* Ginawang Pangkalahatan na Link/Button Style */
        .action-link { 
            padding: 15px 40px;
            font-size: 1.2em;
            font-weight: 600;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-transform: capitalize;
            min-width: 150px;
            text-decoration: none; /* Inalis ang underline */
            display: inline-block; /* Mahalaga para gumana ang padding */
            text-align: center;
        }

        /* Login Link/Button Style */
        .login-link {
            background-color: #ffffff; 
            color: #121223;
            border: 1px solid #ffffff;
        }

        .login-link:hover {
            background-color: var(--accent-color);
            border: 1px solid var(--accent-color);
            color: #ffffff;
            box-shadow: 0 6px 15px rgba(74, 144, 226, 0.4);
        }

        /* Register Link/Button Style */
        .register-link {
            background-color: rgba(255, 255, 255, 0.1); 
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .register-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid #ffffff;
        }

        /* Media Queries para sa responsiveness */
        @media (max-width: 768px) {
            .liquid-glass-card {
                padding: 40px 30px;
            }
            .greeting-text {
                font-size: 3em;
            }
            .name-text {
                font-size: 4em;
                margin-bottom: 30px;
            }
            .action-link {
                padding: 12px 25px;
                font-size: 1em;
                min-width: 120px;
            }
            .button-container {
                gap: 15px;
                justify-content: center;
            }
            .greeting-text, .name-text {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="liquid-glass-card">
            
            <h1 class="greeting-text">HI</h1>
            <h1 class="name-text">Mark Angel Sarmiento</h1>
            
            <div class="button-container">
                <a href="{{ route('register.form') }}" class="action-link register-link">Register</a> 
                
                <a href="{{ route('login.form') }}" class="action-link login-link">Login</a>
            </div>
            
        </div>
    </div>
</body>
</html>