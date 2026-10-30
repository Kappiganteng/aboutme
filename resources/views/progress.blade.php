
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Progress | Mirza</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #F8F3EA;
            color: #352B24;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .progress-page {
            min-height: 100vh;
            padding: 34px 20px 55px;
            background:
                radial-gradient(ellipse at 5% 10%, #E8DCCB 0, transparent 32%),
                radial-gradient(ellipse at 95% 50%, #EDE2D3 0, transparent 30%),
                #F8F3EA;
        }

        .progress-wrap {
            max-width: 1050px;
            margin: auto;
        }

        .progress-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 55px;
        }

        .brand {
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .brand span {
            color: #A18465;
        }

        .back-link {
            display: inline-block;
            padding: 10px 17px;
            border: 1px solid #D9C8B4;
            border-radius: 30px;
            color: #765C46;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            transition: .25s ease;
        }

        .back-link:hover {
            background: #765C46;
            color: white;
            transform: translateY(-2px);
        }

        .progress-hero {
            max-width: 760px;
            margin: 0 auto 42px;
            text-align: center;
            animation: rise .8s ease both;
        }

        .eyebrow {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 30px;
            background: #E8DCCB;
            color: #765C46;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .progress-hero h1 {
            margin: 20px 0 15px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(38px, 7vw, 64px);
            line-height: 1.12;
            font-weight: 500;
            letter-spacing: -1.5px;
        }

        .progress-hero h1 span {
            color: #A18465;
            font-style: italic;
        }

        .progress-hero p {
            max-width: 620px;
            margin: auto;
            color: #857568;
            font-size: 15px;
            line-height: 1.9;
        }

        .journey-banner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 30px 34px;
            margin-bottom: 25px;
            border-radius: 25px;
            color: #FFFCF7;
            background: linear-gradient(125deg, #49372B, #765C46);
            box-shadow: 0 18px 45px #765C4620;
            animation: rise .8s .1s ease both;
        }

        .journey-banner small {
            color: #E8DCCB;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .journey-banner h2 {
            margin: 12px 0 8px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(25px, 4vw, 36px);
            font-weight: 500;
        }

        .journey-banner p {
            max-width: 650px;
            margin: 0;
            color: #E8DCCB;
            font-size: 14px;
            line-height: 1.9;
        }

        .banner-icon {
            display: grid;
            place-items: center;
            width: 76px;
            height: 76px;
            flex-shrink: 0;
            border: 1px solid #FFFFFF40;
            border-radius: 50%;
            background: #FFFFFF0D;
            font-size: 34px;
        }

        .section-heading {
            margin: 42px 0 20px;
        }

        .section-heading small {
            color: #A18465;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            margin: 8px 0 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(25px, 4vw, 34px);
            font-weight: 500;
        }

        .skill-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .skill-card {
            padding: 25px;
            border: 1px solid #E8DCCB;
            border-radius: 22px;
            background: #FFFCF7CC;
            box-shadow: 0 10px 30px #765C4608;
            transition: transform .3s ease, box-shadow .3s ease;
            animation: rise .7s ease both;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 17px 35px #765C4618;
        }

        .skill-top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 17px;
        }

        .skill-icon {
            display: grid;
            place-items: center;
            width: 54px;
            height: 54px;
            flex-shrink: 0;
            border-radius: 17px;
            background: #F0E5D6;
            font-size: 25px;
        }

        .skill-top h3 {
            margin: 0 0 5px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 21px;
        }

        .skill-top small {
            color: #A18465;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .skill-card p {
            margin: 0;
            color: #857568;
            font-size: 13px;
            line-height: 1.9;
        }

        .journey-list {
            display: grid;
            gap: 0;
            margin-top: 22px;
            padding: 8px 25px;
            border: 1px solid #E8DCCB;
            border-radius: 23px;
            background: #FFFCF7CC;
        }

        .journey-item {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 17px;
            padding: 24px 0;
            border-bottom: 1px solid #E8DCCB;
        }

        .journey-item:last-child {
            border-bottom: none;
        }

        .step-number {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            border-radius: 15px;
            background: #F0E5D6;
            color: #765C46;
            font-size: 13px;
            font-weight: 800;
        }

        .journey-item h3 {
            margin: 0 0 7px;
            font-size: 16px;
        }

        .journey-item p {
            margin: 0;
            color: #857568;
            font-size: 13px;
            line-height: 1.9;
        }

        .mindset-card {
            margin-top: 28px;
            padding: 34px 27px;
            border-radius: 25px;
            background: linear-gradient(135deg, #F1E7D9, #FFFCF7);
            border: 1px solid #E8DCCB;
            text-align: center;
        }

        .mindset-card .quote-icon {
            color: #B79B7D;
            font-family: Georgia, serif;
            font-size: 45px;
            line-height: 1;
        }

        .mindset-card blockquote {
            max-width: 690px;
            margin: 12px auto 15px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(19px, 3vw, 27px);
            font-style: italic;
            line-height: 1.6;
        }

        .mindset-card p {
            margin: 0;
            color: #857568;
            font-size: 12px;
            line-height: 1.8;
        }

        .progress-footer {
            padding-top: 32px;
            color: #857568;
            text-align: center;
            font-size: 12px;
            line-height: 1.9;
        }

        .progress-footer strong {
            color: #765C46;
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 650px) {
            .skill-grid {
                grid-template-columns: 1fr;
            }

            .journey-banner {
                align-items: flex-start;
                flex-direction: column-reverse;
                padding: 27px 24px;
            }

            .progress-nav {
                margin-bottom: 40px;
            }

            .journey-list {
                padding: 5px 18px;
            }

            .journey-item {
                grid-template-columns: 40px 1fr;
                gap: 12px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>
<body>
    <main class="progress-page">
        <div class="progress-wrap">

            <nav class="progress-nav">
                <div class="brand">MIRZA<span>.</span></div>
                <a href="{{ url('/') }}" class="back-link">← Kembali ke Home</a>
            </nav>

            <header class="progress-hero">
                <span class="eyebrow">My Learning Journey</span>
                <h1>Little Steps,<br><span>Big Progress.</span></h1>
                <p>
                    Aku masih dalam proses belajar, mencoba hal baru,
                    dan mengasah kemampuan yang aku punya. Aku mungkin
                    belum sampai di tujuan, tetapi aku sedang berusaha
                    untuk terus berkembang setiap hari.
                </p>
            </header>

            <section class="journey-banner">
                <div>
                    <small>Currently working on myself</small>
                    <h2>Belajar hari ini, berkembang esok hari.</h2>
                    <p>
                        Bagiku, proses bukan tentang seberapa cepat aku
                        berhasil, tetapi tentang seberapa banyak aku belajar,
                        seberapa berani aku mencoba, dan seberapa konsisten
                        aku melangkah.
                    </p>
                </div>
                <div class="banner-icon" aria-hidden="true">🌱</div>
            </section>

            <div class="section-heading">
                <small>Skills I'm developing</small>
                <h2>Hal yang sedang aku pelajari.</h2>
            </div>

            <section class="skill-grid">
                <article class="skill-card">
                    <div class="skill-top">
                        <div class="skill-icon" aria-hidden="true">💻</div>
                        <div>
                            <h3>Web Development</h3>
                            <small>BUILD · CREATE · IMPROVE</small>
                        </div>
                    </div>
                    <p>
                        Aku sedang belajar membangun website menggunakan
                        Laravel, memahami struktur kode, mengatur tampilan,
                        dan memperbaiki error sedikit demi sedikit.
                    </p>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <div class="skill-icon" aria-hidden="true">🧠</div>
                        <div>
                            <h3>Problem Solving</h3>
                            <small>THINK · TRY · LEARN</small>
                        </div>
                    </div>
                    <p>
                        Aku belajar memahami masalah, mencari penyebabnya,
                        dan mencoba menyelesaikannya. Karena setiap error
                        juga bisa menjadi kesempatan untuk belajar.
                    </p>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <div class="skill-icon" aria-hidden="true">📚</div>
                        <div>
                            <h3>Knowledge & Learning</h3>
                            <small>EXPLORE · UNDERSTAND</small>
                        </div>
                    </div>
                    <p>
                        Aku ingin memperluas pengetahuan, memahami hal-hal
                        baru, dan membangun kebiasaan belajar yang bisa
                        membantuku di masa depan.
                    </p>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <div class="skill-icon" aria-hidden="true">⏳</div>
                        <div>
                            <h3>Discipline & Consistency</h3>
                            <small>SHOW UP · KEEP GOING</small>
                        </div>
                    </div>
                    <p>
                        Aku sedang belajar untuk lebih disiplin, sabar,
                        dan konsisten. Aku tahu kemampuan tidak tumbuh
                        dalam sehari, jadi aku ingin terus berproses.
                    </p>
                </article>
            </section>

            <div class="section-heading">
                <small>My next steps</small>
                <h2>Perjalanan yang ingin kulanjutkan.</h2>
            </div>

            <section class="journey-list">
                <article class="journey-item">
                    <div class="step-number">01</div>
                    <div>
                        <h3>Memperkuat Dasar Pemrograman</h3>
                        <p>
                            Memahami HTML, CSS, JavaScript, PHP, dan dasar
                            Laravel agar aku tidak sekadar mengikuti tutorial,
                            tetapi juga mengerti cara kerjanya.
                        </p>
                    </div>
                </article>

                <article class="journey-item">
                    <div class="step-number">02</div>
                    <div>
                        <h3>Mengembangkan Website Sendiri</h3>
                        <p>
                            Terus menyempurnakan website About Me ini,
                            belajar membuat fitur baru, dan berani mencoba
                            hal yang sebelumnya belum kupahami.
                        </p>
                    </div>
                </article>

                <article class="journey-item">
                    <div class="step-number">03</div>
                    <div>
                        <h3>Belajar Membuat Proyek yang Lebih Kompleks</h3>
                        <p>
                            Secara bertahap mempelajari database, autentikasi,
                            dan fitur web lainnya setelah dasar-dasarnya
                            semakin kuat.
                        </p>
                    </div>
                </article>

                <article class="journey-item">
                    <div class="step-number">04</div>
                    <div>
                        <h3>Menjadi Pribadi yang Terus Berkembang</h3>
                        <p>
                            Bukan hanya mengasah skill teknologi, tetapi
                            juga melatih tanggung jawab, pola pikir,
                            dan kemampuan menghadapi tantangan.
                        </p>
                    </div>
                </article>
            </section>

            <section class="mindset-card">
                <div class="quote-icon" aria-hidden="true">“</div>
                <blockquote>
                    Aku memang belum sehebat yang aku impikan,
                    tetapi aku tidak ingin berhenti belajar hanya
                    karena belum bisa.
                </blockquote>
                <p>
                    Fokus pada proses. Nikmati setiap kemajuan kecil.
                    Terus melangkah, meski perlahan.
                </p>
            </section>

            <footer class="progress-footer">
                <strong>Still learning. Still growing. Still becoming.</strong>
                <br>
                Ini bukan akhir dari perjalanan, melainkan bagian
                dari proses menuju masa depan yang kuimpikan.
                <br><br>
                © {{ date('Y') }} Mirza · Made with purpose 🤎
            </footer>

        </div>
    </main>
</body>
</html>
