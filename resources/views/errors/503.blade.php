<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Maintenance</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0e1a4c, #3a1d6e);
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            overflow: hidden;
        }

        h1 {
            font-size: 4rem;
            text-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
        }

        p {
            font-size: 1.5rem;
            margin: 20px 0;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .container {
            position: relative;
            z-index: 2;
        }

        .animation {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
            animation: pulse 5s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 0.3;
            }
            50% {
                opacity: 1;
            }
        }

        .home-button {
            background: linear-gradient(135deg, #4fd1c5, #38b2ac);
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .home-button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <div class="animation"></div>
    <div class="container">
        <h1>Maintenance Mode</h1>
        <p>We're currently updating our systems.</p>
        <p>Please check back shortly.</p>
        <a href="/" class="home-button">Return Home</a>
    </div>
</body>
</html>
