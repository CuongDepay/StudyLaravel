<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Sử dụng Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Định dạng cho phần tử div chứa nút Logout */
        .logout-btn-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1>Hello1 ok</h1>
        <!-- Phần tử div chứa nút Logout -->
        <div class="logout-btn-container">
            <form method="POST" action="/logout">
                @csrf
                <!-- Sử dụng Bootstrap Button -->
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>

    <!-- Sử dụng Bootstrap JS và jQuery (cần thiết cho Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
