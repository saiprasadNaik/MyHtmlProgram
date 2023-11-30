<!DOCTYPE html>
<head>
    <title>Designwave</title>
    <style>
    body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            background-image: url('metaverseee.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #bb7777;
        }

        .animated-heading {
            font-size: 48px;
            font-style: Times New Roman ;
            font-weight: 700;
            white-space: nowrap; 
            overflow: hidden; 
            animation: slide-in 3s ease-out infinite; 
            color: white;
        }

        @keyframes slide-in {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0); 
            }
        }

        .cards-container {
            display: flex;
            margin-top: 20px;
        }

        .card {
            width: 100px;
            height: 50px;
            background-color: Black;
            margin: 0 10px;
            opacity: 1;
            animation: move-up 5s ease-out infinite;
            border-style: solid;
        }

        @keyframes move-up {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-100px);
                opacity: 0;
            }
        }

        .features-section {
            padding: 50px 0;
            text-align: center;
            background-color: #425587a3;
        }

        .feature-column {
            width: 25%;
            display: inline-block;
            padding: 20px;
            box-sizing: border-box;
            transition: transform 0.3s ease-in-out;
        }

        .feature-column:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .feature-title {
            font-size: 18px;
            font-weight: bold;
        }
        
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            
        }

        .animation-container {
            position: relative;
            height: 100vh;
            
        }

        .metal-ball,
        .hexagon {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #3498db;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            animation: move-up 5s linear infinite;
        }

        .hexagon {
            background-color: #e74c3c;
            animation: move-up 7s linear infinite;
        }

        @keyframes move-up {
            0% {
                transform: translateY(100vh);
            }
            100% {
                transform: translateY(-30px);
            }
        }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .plans-section {
            position: relative;
            padding: 150px 0;
            
            overflow: hidden;
        }

        .ripples {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle at center, transparent 0%, transparent 70%, #b3b3b3 70%, #b3b3b3 100%);
            animation: ripple-motion 5s linear infinite;
        }

        @keyframes ripple-motion {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .plan {
            position: absolute;
            width: 100px;
            height: 100px;
            background-color: #ffffff;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            font-size: 16px;
            font-weight: bold;
        }

        .plan1 { animation: rotate 5s linear infinite; }
        .plan2 { animation: rotate 5s linear infinite reverse; }
        .plan3 { animation: rotate 10s linear infinite; }
        .plan4 { animation: rotate 10s linear infinite reverse; }

        @keyframes rotate {
            0% {
                transform: rotate(0deg) translateX(150px) rotate(0deg);
            }
            100% {
                transform: rotate(360deg) translateX(150px) rotate(-360deg);
            }
        }
       
        body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .about-section {
      padding: 50px;
      background-color: #70b2db;
      text-align: center;
    }

    .about-content {
      max-width: 800px;
      margin: 0 auto;
    }

    .about-content img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .about-title {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .about-text {
      font-size: 16px;
      color: #666;
      line-height: 1.6;
    }
    </style>
</head>
<body>
 
    <header style="background-color: #333; color: white; padding: 1em; display: flex; justify-content: space-between; align-items: center;">
        <div class="logo" style="width: 50px;"><img src="Designway.png" alt="Your Logo" style="width: 100%; height: auto;"></div>
        <nav style="display: flex; align-items: center;">
           
            <div class="auth-buttons" style="display: flex; padding-right:300px; ">
                <button class="login-button" style="background-color: #007a85; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px;">Login</button>
                <button class="signup-button" style="background-color: #007a85; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 5px;">Signup</button>
            </div>
            <div class="contact-info" style="margin-right: 20px; ">
                <span>Phone: 8605257481<br> </span>
                <span>Email: Saiprasadnaik26@gmail.com</span>
            </div>
            
        </nav>
    </header>

    <!-- The rest of your page content goes here -->

    <div class="hero-section">
         <em><h1 class="animated-heading">The Metaverse can change society</h1></em> 
        <div class="cards-container">
            <div class="card"> <center>Running Days</center></div>
            <div class="card"><center>Total Investments</center></div>
            <div class="card"><center>Project Scripted</center></div>
            <div class="card"><center>Total Online Visters</center></div>
            <div class="card"><center>Total withdrawals</center></div>
            <div class="card"><center>Visiters Online</center></div>
        </div>
    </div>
      
    
    <div class="features-section">
        <div class="feature-column">
            <div class="feature-icon">&#x2601;</div>
            <div class="feature-title">Best Server</div>
        </div>
        <div class="feature-column">
            <div class="feature-icon">&#128184;</div>
            <div class="feature-title">Low Commission </div>
        </div>
        <div class="feature-column">
            <div class="feature-icon">&#x2699;</div>
            <div class="feature-title">100% Secure</div>
        </div>
        <div class="feature-column">
            <div class="feature-icon">&#128065;</div>
            <div class="feature-title">Real Time Monitoring</div>
        </div>
    </div>




<div class="plans-section">
        <div class="ripples"></div>
        <div class="plan plan1">Plan 1</div>
        <div class="plan plan2">Plan 2</div>
        <div class="plan plan3">Plan 3</div>
        <div class="plan plan4">Plan 4</div>
    </div>
    <div class="animation-container">

        <!-- Metal Balls -->
        
        <div class="metal-ball" style="left: 50%;"></div>
        <div class="metal-ball" style="left: 30%;"></div>
        <div class="metal-ball" style="left: 70%;"></div>

        <!-- Hexagons -->
        <div class="hexagon" style="left: 20%;"></div>
        <div class="hexagon" style="left: 60%;"></div>
        <div class="hexagon" style="left: 90%;"></div>
    </div>
    
    <div class="about-section">
    <div class="about-content">
      <h2 class="about-title">About Meta</h2>
      <p class="about-text">
      Meta is a social technology company that combines apps and technologies under one brand. Meta's goal is to connect people around the world and create new technology to do so. Meta is also focused on bringing the metaverse to life, which is a virtual world that's an improved version of our world. 

      </p>
      <img src=data:image/jpeg;base64,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
      
    </div>
  </div>
  

</body>
</html>