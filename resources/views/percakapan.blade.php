@'
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percakapan | AboutMe</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 25px;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #F8F3EA;
            color: #352B24;
        }

        .chat-container {
            max-width: 750px;
            height: 85vh;
            min-height: 500px;
            margin: 20px auto;
            background: #FFFCF7;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(80,60,40,.08);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            padding: 22px;
            background: #E8DCCB;
            border-bottom: 1px solid #DDCEBC;
        }

        .chat-header h2 {
            margin: 0 0 7px;
            font-size: 20px;
        }

        .chat-header p {
            margin: 0;
            font-size: 13px;
            color: #765C46;
        }

        .chat-messages {
            flex: 1;
            padding: 25px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .message {
            max-width: 78%;
            padding: 13px 16px;
            border-radius: 14px;
            line-height: 1.6;
            overflow-wrap: anywhere;
            white-space: pre-wrap;
        }

        .visitor {
            align-self: flex-start;
            background: #F0E8DC;
            border-bottom-left-radius: 4px;
        }

        .admin {
            align-self: flex-end;
            background: #765C46;
            color: white;
            border-bottom-right-radius: 4px;
        }

        .sender {
            display: block;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .time {
            display: block;
            font-size: 10px;
            opacity: .7;
            margin-top: 8px;
            text-align: right;
        }

        .chat-form {
            display: flex;
            gap: 10px;
            padding: 18px;
            border-top: 1px solid #E8DCCB;
            background: #FDFBF7;
        }

        .chat-form textarea {
            flex: 1;
            resize: vertical;
            min-height: 45px;
            max-height: 100px;
            padding: 13px;
            border: 1px solid #E8DCCB;
            border-radius: 10px;
            font-family: inherit;
            font-size: 14px;
        }

        .chat-form button {
            padding: 0 20px;
            border: none;
            border-radius: 10px;
            background: #765C46;
            color: white;
            cursor: pointer;
        }

        .chat-form button:hover {
            background: #5B4636;
        }

        .back {
            display: block;
            max-width: 750px;
            margin: auto;
            color: #765C46;
            text-decoration: none;
            font-size: 13px;
        }

        .success {
            padding: 12px 18px;
            background: #EDF4E9;
            color: #42623C;
            font-size: 13px;
        }

        .error {
            padding: 10px 18px;
            color: #A33;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            body { padding: 10px; }
            .chat-container { height: 88vh; margin: 10px auto; }
            .message { max-width: 90%; }
            .chat-form button { padding: 0 13px; }
        }
    </style>
</head>

<body>

<a href="/" class="back">← Kembali ke Home</a>

<div class="chat-container">

    <div class="chat-header">
        <h2>💬 Percakapan dengan Mirza</h2>
        <p>Pengunjung: {{ $conversation->nama }}</p>
    </div>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="chat-messages">

        @forelse ($conversation->messages as $message)

            <div class="message {{ $message->sender === 'admin' ? 'admin' : 'visitor' }}">

                <span class="sender">
                    {{ $message->sender === 'admin' ? 'Mirza · Admin' : $conversation->nama . ' · Pengunjung' }}
                </span>

                {{ $message->body }}

                <span class="time">
                    {{ $message->created_at->format('H:i') }}
                </span>

            </div>

        @empty

            <p>Belum ada pesan dalam percakapan ini.</p>

        @endforelse

    </div>

    <form
        class="chat-form"
        action="{{ route('messages.store', ['token' => $conversation->access_token]) }}"
        method="POST"
    >
        @csrf

        <textarea
            name="pesan"
            placeholder="Tulis pesan kamu..."
            maxlength="5000"
            required
        >{{ old('pesan') }}</textarea>

        <button type="submit">Kirim →</button>
    </form>

</div>

</body>
</html>
'@ | Set-Content -LiteralPath .\resources\views\percakapan.blade.php -Encoding UTF8