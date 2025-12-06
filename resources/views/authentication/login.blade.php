<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ultra-Transparent Glass UI</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background: #121223;
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
        }

        /* GLASS CONTAINER */
        .glass-box {
            width: 100%;
            max-width: 420px;
            padding: 40px 35px;
            background: rgba(255,255,255,0.03);
            border-radius: 24px;
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(35px);
            -webkit-backdrop-filter: blur(35px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.4);
            text-align: center;
            animation: fadeIn 1s ease;
        }

        /* HEADER */
        .glass-box h2 {
            font-size: 2.2em;
            font-weight: 800;
            margin: 0 0 25px;
            color: #4A90E2;
        }

        /* INPUTS */
        .input-field {
            width: 90%;
            padding: 14px;
            margin: 12px 0;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 12px;
            color: white;
            font-size: 1em;
        }

        .input-field:focus {
            outline: none;
            border-color: #4A90E2;
        }

        /* BUTTON */
        .login-btn {
            width: 100%;
            padding: 14px;
            background: #4A90E2;
            color: white;
            font-weight: 700;
            border: none;
            border-radius: 14px;
            font-size: 1.1em;
            margin-top: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(74,144,226,0.4);
        }

        /* ERROR ALIGNMENT */
        .error-box {
            color: #ff4d4d;
            font-size: 0.9em;
            margin-bottom: 15px;
            text-align: left;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

    <div class="glass-box">

        <h2>Login</h2>

        @if($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>[{{ $error }}]</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.form') }}" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Enter Email" required class="input-field">

            <input type="password" name="password" placeholder="Enter Password" required class="input-field">

            <button class="login-btn">Login</button>
        </form>

    </div>

</body>
</html>
    