<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating WhatsApp Button</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .whatsapp-button {
            display: block;
            width: 70px;
            height: 70px;
            color: #fff;
            position: fixed;
            right: 30px;
            bottom: 30px;
            background-color: green; /* WhatsApp green */
            border-radius: 50%;
            line-height: 70px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 999;
            text-decoration: none;
        }
        .whatsapp-button img {
            width: 40px; /* Adjust icon size */
        }
    </style>
</head>
<body>

<a href="https://api.whatsapp.com/send?phone=250781420771" class="whatsapp-button" target="_blank">
    <img src="https://cdn.icon-icons.com/icons2/840/PNG/128/Whatsapp_icon-icons.com_66931.png" alt="WhatsApp">
</a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>