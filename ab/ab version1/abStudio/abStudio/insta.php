







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feed</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .instagram-feed {
            margin: 20px auto;
            max-width: 800px;
        }
        .instagram-post {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }
        .instagram-post img {
            width: 100%;
            height: auto;
        }
        .instagram-caption {
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center my-4">Instagram Feed</h1>
    <div class="instagram-feed">
        <!-- Instagram posts will be embedded here -->
        <div class="instagram-post">
            <img src="https://via.placeholder.com/800x600" alt="Instagram Post">
            <div class="instagram-caption">
                <p>Caption for the Instagram post goes here.</p>
            </div>
        </div>
        <div class="instagram-post">
            <img src="https://via.placeholder.com/800x600" alt="Instagram Post">
            <div class="instagram-caption">
                <p>Caption for the Instagram post goes here.</p>
            </div>
        </div>
        <!-- Add more posts as needed -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>