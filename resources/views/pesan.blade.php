
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kirim Pesan | AboutMe</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #F8F3EA;
            color: #352B24;
        }

        .container {
            width: 100%;
            max-width: 520px;
            background: #FFFCF7;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(80, 60, 40, 0.08);
        }

        .back {
            color: #765C46;
            text-decoration: none;
            font-size: 14px;
        }

        h1 {
            margin-top: 28px;
            margin-bottom: 10px;
        }

        .description {
            color: #857568;
            font-size: 14px;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 13px;
            margin-bottom: 18px;
            border: 1px solid #E8DCCB;
            border-radius: 10px;
            background: #FDFBF7;
            font-family: inherit;
            font-size: 14px;
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #B79B7D;
        }

        button {
            width: 100%;
            padding: 14px;
            background: #765C46;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background: #5B4636;
        }

        .error {
            color: #B54747;
            font-size: 13px;
            margin-bottom: 12px;
        }
    </style>
</head>

<body>

    <div class="container">

        <a href="/" class="back">← Kembali ke Home</a>

        <h1>Kirim Pesan</h1>

        <p class="description">
            Punya pertanyaan atau ingin memberikan semangat?
            Tinggalkan pesan di sini. Aku senang membaca pesanmu!
        </p>

        @if ($errors->any())
            <div class="error">
                Mohon periksa kembali data yang kamu masukkan.
            </div>
        @endif

        <form action="{{ route('conversation.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pengirim</label>

            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama kamu"
                value="{{ old('nama') }}"
                maxlength="100"
                required
            >

            @error('nama')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="nama@email.com"
                value="{{ old('email') }}"
                maxlength="255"
                required
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="pesan">Isi Pesan</label>

            <textarea
                id="pesan"
                name="pesan"
                placeholder="Tulis pesan kamu di sini..."
                maxlength="5000"
                required
            >{{ old('pesan') }}</textarea>

            @error('pesan')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">
                Kirim Pesan →
            </button>

        </form>

    </div>

</body>
</html>
