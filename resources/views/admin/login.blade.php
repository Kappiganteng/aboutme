
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | AboutMe</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background: #F8F3EA;
            color: #352B24;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 38px;
            background: #FFFCF7;
            border-radius: 22px;
            box-shadow: 0 12px 35px rgba(80, 60, 40, 0.08);
        }

        .logo {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            border-radius: 16px;
            background: #E8DCCB;
            color: #765C46;
            font-size: 25px;
        }

        h1 {
            margin: 0 0 10px;
            font-size: 27px;
        }

        .description {
            margin-bottom: 28px;
            color: #857568;
            font-size: 14px;
            line-height: 1.7;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 18px;
            border: 1px solid #E8DCCB;
            border-radius: 10px;
            background: #FDFBF7;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #B79B7D;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 22px;
            color: #765C46;
            font-size: 13px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: #765C46;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #5B4636;
        }

        .error {
            margin-bottom: 16px;
            padding: 12px;
            border-radius: 9px;
            background: #FCEEEE;
            color: #A33;
            font-size: 13px;
        }

        .success {
            margin-bottom: 16px;
            padding: 12px;
            border-radius: 9px;
            background: #EDF4E9;
            color: #42623C;
            font-size: 13px;
        }

        .back {
            display: block;
            margin-top: 22px;
            text-align: center;
            color: #765C46;
            text-decoration: none;
            font-size: 13px;
        }

        .footer {
            margin-top: 28px;
            text-align: center;
            color: #A08E7D;
            font-size: 11px;
        }
    </style>
</head>

<body>

    <main class="login-card">

        <div class="logo">✉</div>

        <h1>Welcome Back, Mirza</h1>

        <p class="description">
            Masuk ke dashboard AboutMe untuk melihat
            dan membalas pesan dari pengunjung.
        </p>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.login.store') }}" method="POST">
            @csrf

            <label for="email">Email Admin</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan email admin"
                value="{{ old('email') }}"
                autocomplete="username"
                required
                autofocus
            >

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Masukkan password"
                autocomplete="current-password"
                required
            >

            <label class="remember">
                <input type="checkbox" name="remember" value="1">
                Ingat saya
            </label>

            <button type="submit">
                Masuk ke Dashboard →
            </button>

        </form>

        <a href="/" class="back">← Kembali ke AboutMe</a>

        <div class="footer">
            ABOUTME · ADMIN ACCESS
        </div>

    </main>

</body>
</html>
