
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percakapan Admin | AboutMe</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            padding: 25px;
            background: #F8F3EA;
            color: #352B24;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 850px;
            margin: 25px auto;
            background: #FFFCF7;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(80,60,40,.08);
        }

        .header {
            padding: 25px;
            background: #E8DCCB;
        }

        .header a {
            color: #765C46;
            text-decoration: none;
            font-size: 13px;
        }

        .header h2 {
            margin: 18px 0 5px;
        }

        .header p {
            color: #765C46;
            font-size: 13px;
        }

        .messages {
            padding: 25px;
            min-height: 350px;
            max-height: 60vh;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .message {
            max-width: 78%;
            padding: 14px 17px;
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
            margin-bottom: 7px;
        }

        .time {
            display: block;
            font-size: 10px;
            opacity: .7;
            text-align: right;
            margin-top: 8px;
        }

        .reply {
            padding: 22px;
            border-top: 1px solid #E8DCCB;
            background: #FDFBF7;
        }

        .reply label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .reply textarea {
            width: 100%;
            min-height: 100px;
            resize: vertical;
            padding: 14px;
            border: 1px solid #E8DCCB;
            border-radius: 10px;
            background: white;
            font-family: inherit;
            font-size: 14px;
        }

        .reply button {
            margin-top: 12px;
            padding: 13px 22px;
            background: #765C46;
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
        }

        .reply button:hover {
            background: #5B4636;
        }

        .success {
            padding: 12px 22px;
            background: #EDF4E9;
            color: #42623C;
        }

        .errors {
            padding: 12px 22px;
            background: #FCEEEE;
            color: #A33;
        }

        @media(max-width: 600px) {
            body { padding: 10px; }
            .message { max-width: 90%; }
        }
    </style>
</head>

<body>

<div class="container">

    <header class="header">

        <a href="{{ route('admin.inbox') }}">
            ← Kembali ke Inbox
        </a>

        <h2>💬 Percakapan dengan {{ $conversation->nama }}</h2>

        <p>{{ $conversation->email }}</p>

    </header>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <section class="messages">

        @forelse ($conversation->messages as $message)

            <div class="message {{ $message->sender === 'admin' ? 'admin' : 'visitor' }}">

                <span class="sender">
                    {{ $message->sender === 'admin' ? 'Mirza · Admin' : $conversation->nama . ' · Pengunjung' }}
                </span>

                {{ $message->body }}

                <span class="time">
                    {{ $message->created_at->format('d M Y, H:i') }}
                </span>

            </div>

        @empty

            <p>Belum ada pesan.</p>

        @endforelse

    </section>

    <form
        class="reply"
        action="{{ route('admin.messages.reply', $conversation->id) }}"
        method="POST"
    >

        @csrf

        <label for="pesan">Balas Pesan</label>

        <textarea
            id="pesan"
            name="pesan"
            placeholder="Tulis balasan untuk {{ $conversation->nama }}..."
            maxlength="5000"
            required
        >{{ old('pesan') }}</textarea>

        <button type="submit">
            Kirim Balasan →
        </button>

    </form>

</div>

</body>
</html>
