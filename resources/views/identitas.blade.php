```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Diri | Mirza</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            background: #F8F3EA;
            color: #352B24;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        * { box-sizing: border-box; }

        .identity {
            max-width: 1100px;
            margin: auto;
            padding: 35px 24px 65px;
        }

        .identity-nav {
            padding: 20px 5%;
            border-bottom: 1px solid #E8DCCB;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .identity-nav strong {
            font: 27px Georgia, serif;
        }

        .identity-nav a,
        .back {
            color: #765C46;
            text-decoration: none;
        }

        .eyebrow {
            color: #9B8065;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        .identity h1 {
            font: 52px Georgia, serif;
            margin: 15px 0;
        }

        .identity em {
            color: #A48769;
        }

        .back {
            display: inline-block;
            margin: 10px 0 35px;
        }

        .intro-card {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 40px;
            align-items: center;
            padding: 28px;
            background: #FFFCF7;
            border: 1px solid #E8DCCB;
            border-radius: 25px;
            box-shadow: 0 15px 40px #352b2410;
        }

        .photo {
            min-height: 340px;
            position: relative;
            display: grid;
            place-items: center;
            background: #E8DCCB;
            border-radius: 20px;
            overflow: hidden;
        }

        .photo img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .photo span {
            font: 75px Georgia, serif;
            color: #A48769;
        }

        .intro-card h2,
        .section-title {
            font: 38px Georgia, serif;
            margin: 15px 0;
        }

        .intro-card p,
        .website-card p {
            color: #857568;
            line-height: 1.9;
            font-size: 14px;
        }

        .status {
            display: inline-block;
            margin-top: 10px;
            padding: 12px 16px;
            background: #F1E8DC;
            border-radius: 30px;
            font-size: 12px;
            color: #765C46;
        }

        .details {
            padding: 65px 0 40px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .info {
            padding: 25px;
            background: #F1E8DC;
            border: 1px solid #E8DCCB;
            border-radius: 18px;
            transition: transform .25s ease;
        }

        .info:hover {
            transform: translateY(-4px);
        }

        .info small {
            color: #9B8065;
            letter-spacing: 2px;
        }

        .info h3 {
            margin-bottom: 8px;
        }

        .info p {
            color: #857568;
            font-size: 13px;
        }

        .website-card {
            padding: 35px;
            color: #FFFCF7;
            background: #352B24;
            border-radius: 22px;
        }

        .website-card .eyebrow {
            color: #D6B999;
        }

        .website-card h2 {
            font: 36px Georgia, serif;
            margin: 18px 0;
        }

        .website-card p {
            color: #E8DCCB;
            max-width: 650px;
        }

        @media (max-width: 700px) {
            .identity { padding: 30px 16px; }
            .identity h1 { font-size: 40px; }
            .intro-card { grid-template-columns: 1fr; padding: 18px; }
            .photo { min-height: 280px; }
            .intro-card h2, .section-title { font-size: 30px; }
            .info-grid { grid-template-columns: 1fr; }
            .website-card { padding: 25px; }
        }
    </style>
</head>
<body>

<nav class="identity-nav">
    <strong>MIRZA.</strong>
    <a href="{{ url('/') }}">← Kembali ke Home</a>
</nav>

<main class="identity">
    <header>
        <span class="eyebrow">GET TO KNOW ME</span>
        <h1>Identitas <em>Diri.</em></h1>
        <p>Small details, a little more about me.</p>
    </header>

    <a class="back" href="{{ url('/') }}">← Kembali ke Home</a>

    <section class="intro-card">
        <div class="photo">
            <span>M.</span>
            <img src="{{ asset('images/profile.png') }}"
                 alt="Foto profil Mirza"
                 onerror="this.remove()">
        </div>

        <div>
            <span class="eyebrow">HELLO, EVERYONE</span>
            <h2>Halo, saya <em>Mirza.</em></h2>
            <p>
                Seorang pelajar yang terus belajar, berkembang,
                dan mengeksplorasi dunia teknologi. Saya tertarik
                pada Web Development dan ingin membuat sesuatu
                yang kreatif, bermanfaat, dan bermakna.
            </p>
            <span class="status">● Open to learning new things</span>
        </div>
    </section>

    <section class="details">
        <span class="eyebrow">PERSONAL INFORMATION</span>
        <h2 class="section-title">Kenalan lebih <em>dekat.</em></h2>
        <p>Beberapa hal sederhana tentang saya.</p>

        <div class="info-grid">
            <article class="info">
                <small>01 — NAMA</small>
                <h3>Mirza handsome</h3>
                <p>Just being myself.</p>
            </article>

            <article class="info">
                <small>02 — STATUS</small>
                <h3>Pelajar</h3>
                <p>SMA Persis Serang</p>
            </article>

            <article class="info">
                <small>03 — FAVORITE SONG</small>
                <h3>Message in a bottle</h3>
                <p>A song that means something.</p>
            </article>

            <article class="info">
                <small>04 — LOKASI</small>
                <h3>Bumi Allah</h3>
                <p>Still exploring my world.</p>
            </article>
        </div>
    </section>

    <section class="website-card">
        <span class="eyebrow">ABOUT THIS WEBSITE</span>
        <h2>Small steps,<br><em>bigger dreams.</em></h2>
        <p>
            Website AboutMe adalah ruang pribadi saya untuk
            memperkenalkan diri, menyusun target masa depan,
            mencatat visi dan misi, serta mendokumentasikan
            setiap perkembangan dalam perjalanan belajar.
        </p>
        <p>— Mirza</p>
    </section>
</main>

</body>
</html>
```