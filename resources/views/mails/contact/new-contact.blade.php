<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #333;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 20px;
        }

        div {
            margin-bottom: 10px;
            line-height: 1.5;
        }

        strong {
            font-weight: bold;
            margin-right: 10px;
        }

        .container::after {
            content: '';
            display: table;
            clear: both;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-4">New Contact Form Submission</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3"><strong>Name:</strong> {{ $full_name }}</div>
                <div class="mb-3"><strong>Email:</strong> {{ $email }}</div>
                <div class="mb-3"><strong>Phone:</strong> {{ $phone }}</div>
            </div>
            <div class="col-md-6">
                <div class="mb-3"><strong>Message:</strong></div>
                <div>{{ $text }}</div>
            </div>
        </div>
    </div>

</body>

</html>
