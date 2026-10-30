
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Diary — Mirza</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --cream: #F8F3EA;
            --beige: #E8DCCB;
            --latte: #B79B7D;
            --mocha: #765C46;
            --espresso: #352B24;
            --white: #FFFCF7;
            --muted: #857568;
        }

        .diary-page {
            min-height: 100vh;
            background: var(--cream);
            color: var(--espresso);
            font-family: "Segoe UI", Arial, sans-serif;
            padding: 28px 20px 60px;
        }

        .diary-wrap {
            max-width: 1080px;
            margin: auto;
        }

        .diary-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 34px;
        }

        .diary-brand {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .diary-link {
            text-decoration: none;
            color: var(--mocha);
            font-size: 14px;
            font-weight: 700;
            padding: 11px 17px;
            border: 1px solid var(--beige);
            border-radius: 30px;
            transition: .25s ease;
        }

        .diary-link:hover {
            background: var(--beige);
            transform: translateY(-2px);
        }

        .diary-hero {
            position: relative;
            overflow: hidden;
            background: var(--beige);
            border-radius: 28px;
            padding: 42px;
            margin-bottom: 26px;
            animation: rise .6s ease both;
        }

        .diary-eyebrow {
            color: var(--mocha);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .diary-hero h1 {
            margin: 12px 0;
            font-family: Georgia, serif;
            font-size: clamp(38px, 7vw, 66px);
            font-weight: 500;
            letter-spacing: -2px;
        }

        .diary-hero p {
            max-width: 490px;
            color: #6D5949;
            line-height: 1.8;
            margin-bottom: 0;
        }

        .diary-mark {
            position: absolute;
            right: 38px;
            top: 20px;
            font-family: Georgia, serif;
            font-size: 110px;
            color: #B79B7D;
            opacity: .45;
            transform: rotate(10deg);
        }

        .diary-grid {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: 24px;
            align-items: start;
        }

        .diary-card {
            background: var(--white);
            border: 1px solid rgba(183, 155, 125, .25);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(53, 43, 36, .045);
            animation: rise .7s ease both;
        }

        .diary-card h2 {
            font-family: Georgia, serif;
            font-size: 27px;
            font-weight: 500;
            margin: 0 0 7px;
        }

        .diary-subtitle {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.7;
            margin: 0 0 23px;
        }

        .diary-field {
            margin-bottom: 17px;
        }

        .diary-field label {
            display: block;
            margin-bottom: 8px;
            color: var(--mocha);
            font-size: 12px;
            font-weight: 800;
        }

        .diary-field input,
        .diary-field select,
        .diary-field textarea {
            box-sizing: border-box;
            width: 100%;
            border: 1px solid #E7DCCD;
            background: #FFFEFB;
            border-radius: 13px;
            padding: 13px 14px;
            font: inherit;
            font-size: 14px;
            color: var(--espresso);
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }

        .diary-field input:focus,
        .diary-field select:focus,
        .diary-field textarea:focus {
            border-color: var(--latte);
            box-shadow: 0 0 0 3px rgba(183, 155, 125, .14);
        }

        .diary-field textarea {
            min-height: 150px;
            resize: vertical;
            line-height: 1.8;
        }

        .diary-submit {
            width: 100%;
            border: 0;
            border-radius: 14px;
            background: var(--espresso);
            color: var(--white);
            padding: 15px 18px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s ease;
        }

        .diary-submit:hover {
            background: var(--mocha);
            transform: translateY(-2px);
        }

        .diary-alert {
            border-radius: 12px;
            padding: 13px 15px;
            margin-bottom: 18px;
            font-size: 13px;
            line-height: 1.7;
        }

        .diary-success {
            background: #EDF2E7;
            color: #42533A;
        }

        .diary-error {
            background: #F8E9E5;
            color: #8B4136;
        }

        .diary-entry {
            padding: 20px 0;
            border-bottom: 1px solid #EDE3D7;
        }

        .diary-entry:first-child {
            padding-top: 5px;
        }

        .diary-entry:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .diary-entry-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 10px;
        }

        .diary-date {
            color: var(--muted);
            font-size: 12px;
        }

        .diary-mood {
            border-radius: 30px;
            background: #F1E7DA;
            color: var(--mocha);
            padding: 6px 10px;
            font-size: 11px;
            font-weight: 700;
        }

        .diary-entry h3 {
            margin: 0 0 9px;
            font-family: Georgia, serif;
            font-size: 22px;
            font-weight: 500;
            overflow-wrap: anywhere;
        }

        .diary-entry p {
            margin: 0;
            color: #75675A;
            font-size: 14px;
            line-height: 1.85;
            white-space: pre-wrap;
            overflow-wrap: anywhere;
        }

        .diary-empty {
            padding: 35px 12px;
            text-align: center;
            color: var(--muted);
            line-height: 1.8;
        }

        .diary-empty span {
            display: block;
            font-size: 38px;
            margin-bottom: 12px;
        }

        .diary-footer {
            text-align: center;
            color: var(--muted);
            font-size: 12px;
            margin-top: 35px;
        }

        @keyframes rise {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 760px) {
            .diary-page { padding: 20px 14px 40px; }
            .diary-hero { padding: 30px 24px; }
            .diary-mark { right: 12px; top: 15px; font-size: 75px; }
            .diary-grid { grid-template-columns: 1fr; }
            .diary-card { padding: 23px; }
            .diary-hero h1 { letter-spacing: -1px; }
        }

        @media (prefers-reduced-motion: reduce) {
            .diary-page *, .diary-page *::before, .diary-page *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body>
<div class="diary-page">
    <div class="diary-wrap">

        <nav class="diary-nav">
            <div class="diary-brand">M. / PERSONAL SPACE</div>
            <a class="diary-link" href="{{ url('/') }}">← Back to About Me</a>
        </nav>

        <header class="diary-hero">
            <div class="diary-mark" aria-hidden="true">“</div>
            <div class="diary-eyebrow">A little space for myself</div>
            <h1>My Diary<span style="color:var(--mocha)">.</span></h1>
            <p>
                Setiap hari punya cerita. Simpan hal-hal kecil yang berarti,
                kenangan yang ingin diingat, dan perjalanan diri yang terus berkembang.
            </p>
        </header>

        <main class="diary-grid">
            <section class="diary-card">
                <h2>Write a story.</h2>
                <p class="diary-subtitle">
                    Nggak harus sempurna. Tulis saja apa yang ingin kamu kenang hari ini.
                </p>

                @if (session('success'))
                    <div class="diary-alert diary-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="diary-alert diary-error">
                        Ada yang perlu diperbaiki:
                        <ul style="margin-bottom:0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('diary.store') }}" method="POST">
                    @csrf

                    <div class="diary-field">
                        <label for="title">JUDUL CERITA</label>
                        <input
                            id="title"
                            type="text"
                            name="title"
                            maxlength="255"
                            value="{{ old('title') }}"
                            placeholder="Hari yang ingin kuingat..."
                            required
                        >
                    </div>

                    <div class="diary-field">
                        <label for="entry_date">TANGGAL</label>
                        <input
                            id="entry_date"
                            type="date"
                            name="entry_date"
                            value="{{ old('entry_date', date('Y-m-d')) }}"
                            required
                        >
                    </div>

                    <div class="diary-field">
                        <label for="mood">SUASANA HATI</label>
                        <select id="mood" name="mood">
                            <option value="">Pilih suasana hati</option>
                            @foreach (['Senang', 'Tenang', 'Bersyukur', 'Bersemangat', 'Lelah', 'Sedih', 'Campur aduk'] as $mood)
                                <option value="{{ $mood }}" @selected(old('mood') === $mood)>
                                    {{ $mood }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="diary-field">
                        <label for="content">CERITAKAN HARI INI</label>
                        <textarea
                            id="content"
                            name="content"
                            placeholder="Hari ini aku belajar bahwa..."
                            required
                        >{{ old('content') }}</textarea>
                    </div>

                    <button class="diary-submit" type="submit">
                        Save my story &nbsp; ↗
                    </button>
                </form>
            </section>

            <section class="diary-card">
                <h2>Little memories.</h2>
                <p class="diary-subtitle">
                    Kumpulan cerita yang sudah kamu simpan.
                </p>

                @forelse ($diaries as $diary)
                    <article class="diary-entry">
                        <div class="diary-entry-top">
                            <span class="diary-date">
                                {{ $diary->entry_date->format('d M Y') }}
                            </span>

                            @if ($diary->mood)
                                <span class="diary-mood">
                                    {{ $diary->mood }}
                                </span>
                            @endif
                        </div>

                        <h3>{{ $diary->title }}</h3>
                        <p>{{ $diary->content }}</p>
                    </article>
                @empty
                    <div class="diary-empty">
                        <span>✧</span>
                        Belum ada cerita di sini.<br>
                        Mulai tulis kenangan pertamamu hari ini.
                    </div>
                @endforelse
            </section>
        </main>

        <footer class="diary-footer">
            Made with care · Mirza's personal space
        </footer>

    </div>
</div>
</body>
</html>
