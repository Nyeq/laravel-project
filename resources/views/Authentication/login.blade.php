<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: "Poppins", sans-serif;
            background: linear-gradient(120deg, #4e54c8, #8f94fb);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 400px;
            background: #ffffff;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.15);
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            text-align: center;
            color: #4e54c8;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin: 8px 0 18px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #4e54c8;
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 1.1rem;
        }

        button:hover {
            background: #3c41a4;
            transform: scale(1.03);
        }

        .error-list {
            color: red;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .link {
            margin-top: 15px;
            text-align: center;
        }

        a {
            color: #4e54c8;
            text-decoration: none;
            font-weight: 600;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Login</h2>

        @if($errors->any())
            <div class="error-list">
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <div class="link">
            Don’t have an account? <a href="{{ route('register.form') }}">Register</a>
        </div>
    </div>

</body>
</html>
