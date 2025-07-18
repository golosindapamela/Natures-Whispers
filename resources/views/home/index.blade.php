<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature's Whispers</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
            crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style>
        body {
        background-color: #1f6534;
        color: white;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 40px 20px;
        margin-top: 150px;
        }

        .logo-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        }

        .logo-container img {
        width: 50px;
        }

        .logo-text {
        font-size: 26px;
        font-weight: bold;
        padding-top: 20px;
        }

        h1 {
        margin-top: 20px;
        margin-bottom: 30px;
        font-size: 32px;
        font-weight: 600;
        }

        p {
        max-width: 800px;
        margin: 0 auto 30px auto;
        font-size: 16px;
        line-height: 1.8;
        }

        .btn-custom {
        background-color: transparent;
        border: 2px solid white;
        color: white;
        padding: 10px 25px;
        margin: 5px;
        transition: 0.3s;
        }

        .btn-custom:hover {
        background-color: white;
        color: #1f6534;
        }
    </style>
    
</head>

<body>

    <div class="container text-center">
        <div class="logo-container">
            <img src="logo.png" alt="Nature's Whispers Logo">
            <span class="logo-text">Nature's Whispers</span>
        </div>

        <h1>Let's Explore The World with Us</h1>

        <p>
            Travel opens the door to unforgettable experiences and new perspectives.
            Whether you're wandering through vibrant cities, hiking scenic mountain trails,
            or relaxing on a quiet beach, every journey is a chance to discover something amazing.
            At Let’s Explore The World with Us, we believe that adventure is for everyone —
            and we’re here to inspire, guide, and share stories that make your travel dreams
            come to life. Pack your bags, follow your curiosity, and let the world surprise you.
        </p>

        <div>
            <a href="{{ route('login') }}" class="btn btn-custom">Login</a>
            <a href="{{ route('register') }}" class="btn btn-custom">Register</a>
        </div>
    </div>

</body>

</html>
