<html>

<head>
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #4A90E2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card h2 {
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #444;
            border: 1px solid #555;
            color: white;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .btn-primary {
            background-color: #3B5998;
            border: none;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-google {
            background-color: #DB4437;
            border: none;
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-facebook {
            background-color: #3B5998;
            border: none;
            width: 100%;
        }

        .form-check-label {
            color: white;
        }

        .divider {
            height: 1px;
            background-color: #555;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Sign in </h2>
        <form action="proses_login.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember password</label>
            </div>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <div class="divider"></div>
            <button type="button" class="btn btn-google"><i class="fab fa-google"></i> SIGN IN WITH GOOGLE</button>
            <button type="button" class="btn btn-facebook"><i class="fab fa-facebook-f"></i> SIGN IN WITH
                FACEBOOK</button>
        </form>
    </div>
</body>

</html>