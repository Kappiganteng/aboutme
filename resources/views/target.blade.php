
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dreams | Mirza</title>

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

        .dream-page {
            min-height: 100vh;
            padding: 34px 20px 55px;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 5% 10%, #E8DCCB 0, transparent 32%),
                radial-gradient(ellipse at 95% 50%, #EDE2D3 0, transparent 30%),
                #F8F3EA;
        }

        .dream-wrap {
            width: 100%;
            max-width: 1050px;
            margin: auto;
        }

        .dream-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 55px;
        }

        .dream-brand {
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .dream-brand span {
            color: #A18465;
        }

        .back-link {
            display: inline-block;
            text-decoration: none;
            color: #765C46;
            border: 1px solid #D9C8B4;
            padding: 10px 17px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            transition: .25s ease;
        }

        .back-link:hover {
            background: #765C46;
            color: white;
            transform: translateY(-2px);
        }

        .dream-hero {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 48px;
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

        .dream-hero h1 {
            margin: 20px 0 15px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(38px, 7vw, 65px);
            line-height: 1.12;
            font-weight: 500;
            letter-spacing: -1.5px;
        }

        .dream-hero h1 span {
            color: #A18465;
            font-style: italic;
        }

        .dream-hero p {
            max-width: 600px;
            margin: auto;
            color: #857568;
            font-size: 15px;
            line-height: 1.9;
        }

        .dream-highlight {
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 25px;
            padding: 35px 38px;
            margin-bottom: 25px;
            border-radius: 27px;
            background: linear-gradient(125deg, #49372B, #765C46);
            color: #FFFCF7;
            box-shadow: 0 18px 45px #765C4620;
            animation: rise .8s .1s ease both;
        }

        .dream-highlight::after {
            content: "♡";
            position: absolute;
            right: 100px;
            bottom: -85px;
            font-size: 220px;
            line-height: 1;
            color: #FFFFFF08;
            pointer-events: none;
        }

        .highlight-label {
            color: #E8DCCB;
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .dream-highlight h2 {
            position: relative;
            z-index: 1;
            max-width: 650px;
            margin: 13px 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(26px, 4vw, 39px);
            font-weight: 500;
            line-height: 1.25;
        }

        .dream-highlight p {
            position: relative;
            z-index: 1;
            max-width: 610px;
            margin: 0;
            color: #E8DCCB;
            font-size: 14px;
            line-height: 1.9;
        }

        .highlight-icon {
            position: relative;
            z-index: 1;
            display: grid;
            place-items: center;
            width: 82px;
            height: 82px;
            flex-shrink: 0;
            border: 1px solid #FFFFFF40;
            border-radius: 50%;
            background: #FFFFFF0D;
            font-size: 36px;
        }

        .section-heading {
            margin: 42px 0 20px;
        }

        .section-heading small {
            color: #A18465;
            letter-spacing: 2px;
            font-weight: 800;
            font-size: 11px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            margin: 8px 0 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(25px, 4vw, 34px);
            font-weight: 500;
        }

        .dream-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .dream-card {
            min-width: 0;
            padding: 25px 23px;
            border: 1px solid #E8DCCB;
            border-radius: 22px;
            background: #FFFCF7CC;
            box-shadow: 0 10px 30px #765C4608;
            transition: transform .3s ease, box-shadow .3s ease;
            animation: rise .7s ease both;
        }

        .dream-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 17px 35px #765C4618;
        }

        .dream-number {
            color: #B79B7D;
            font-size: 12px;
            letter-spacing: 2px;
            font-weight: 800;
        }

        .dream-icon {
            display: grid;
            place-items: center;
            width: 53px;
            height: 53px;
            margin: 21px 0 17px;
            border-radius: 17px;
            background: #F0E5D6;
            font-size: 26px;
        }

        .dream-card h3 {
            margin: 0 0 11px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 22px;
            font-weight: 600;
        }

        .dream-card p {
            margin: 0;
            color: #857568;
            font-size: 13px;
            line-height: 1.9;
        }

        .dream-quote {
            position: relative;
            margin-top: 30px;
            padding: 35px 30px;
            border: 1px solid #E8DCCB;
            border-radius: 25px;
            text-align: center;
            background: linear-gradient(135deg, #F1E7D9, #FFFCF7);
            animation: rise .8s .2s ease both;
        }

        .quote-mark {
            color: #B79B7D;
            font-family: Georgia, serif;
            font-size: 45px;
            line-height: 1;
        }

        .dream-quote blockquote {
            max-width: 700px;
            margin: 10px auto 15px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(19px, 3vw, 27px);
            line-height: 1.6;
            font-style: italic;
        }

        .dream-quote p {
            margin: 0;
            color: #857568;
            font-size: 12px;
            letter-spacing: 1px;
        }

        .dream-footer {
            padding-top: 32px;
            text-align: center;
            color: #857568;
            font-size: 12px;
            line-height: 1.8;
        }

        .dream-footer strong {
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

        @media (max-width: 760px) {
            .dream-grid {
                grid-template-columns: 1fr;
            }

            .dream-card {
                padding: 23px;
            }

            .dream-card .dream-icon {
                margin-top: 15px;
            }

            .dream-highlight {
                grid-template-columns: 1fr;
                padding: 28px 25px;
            }

            .highlight-icon {
                width: 62px;
                height: 62px;
                font-size: 29px;
            }

            .dream-nav {
                margin-bottom: 40px;
            }

            .dream-hero {
                margin-bottom: 35px;
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
    <main class="dream-page">
        <div class="dream-wrap">

            <nav class="dream-nav">
                <div class="dream-brand">MIRZA<span>.</span></div>
                <a href="{{ url('/') }}" class="back-link">← Kembali ke Home</a>
            </nav>

            <header class="dream-hero">
                <span class="eyebrow">My Dreams & Life Goals</span>
                <h1>My Biggest Dreams,<br><span>My Parents.</span></h1>
                <p>
                    Setiap orang punya impian yang ingin diwujudkan.
                    Kalau aku, salah satu impian terbesarku adalah melihat
                    orang tuaku bahagia dan bisa membalas sedikit dari
                    semua kasih sayang yang telah mereka berikan.
                </p>
            </header>

            <section class="dream-highlight">
                <div>
                    <span class="highlight-label">The biggest dream of my life</span>
                    <h2>Mengajak Ayah dan Ibu ke Tanah Suci.</h2>
                    <p>
                        Aku ingin suatu hari nanti bisa mengajak kedua
                        orang tuaku menunaikan ibadah umrah. Melihat mereka
                        beribadah dengan bahagia akan menjadi salah satu
                        momen paling berharga dalam hidupku.
                    </p>
                </div>
                <div class="highlight-icon" aria-hidden="true">🕋</div>
            </section>

            <div class="section-heading">
                <small>Things I want to achieve</small>
                <h2>Tiga impian yang ingin kuwujudkan.</h2>
            </div>

            <section class="dream-grid">
                <article class="dream-card">
                    <div class="dream-number">01 / FAMILY</div>
                    <div class="dream-icon" aria-hidden="true">🤎</div>
                    <h3>Membahagiakan Orang Tua</h3>
                    <p>
                        Aku ingin menjadi anak yang bisa mereka banggakan,
                        membuat mereka tersenyum, dan membantu mereka
                        menikmati hidup dengan lebih tenang.
                    </p>
                </article>

                <article class="dream-card">
                    <div class="dream-number">02 / JOURNEY</div>
                    <div class="dream-icon" aria-hidden="true">🌍</div>
                    <h3>Keliling Dunia Bersama</h3>
                    <p>
                        Aku ingin mengajak Ayah dan Ibu melihat indahnya
                        dunia, mengunjungi tempat-tempat baru, dan
                        menciptakan kenangan indah bersama mereka.
                    </p>
                </article>

                <article class="dream-card">
                    <div class="dream-number">03 / SPIRITUAL</div>
                    <div class="dream-icon" aria-hidden="true">🕋</div>
                    <h3>Umrah Bersama Orang Tua</h3>
                    <p>
                        Ini impian yang paling besar bagiku. Semoga Allah
                        memberiku kesempatan, rezeki, dan umur yang
                        berkah agar kami bisa beribadah bersama di Tanah Suci.
                    </p>
                </article>
            </section>

            <section class="dream-quote">
                <div class="quote-mark" aria-hidden="true">“</div>
                <blockquote>
                    Aku tidak ingin sukses hanya untuk diriku sendiri.
                    Aku ingin sukses agar bisa membahagiakan dua orang
                    yang telah berjuang dan menyayangiku sejak awal hidupku.
                </blockquote>
                <p>MY REASON TO KEEP GROWING</p>
            </section>

            <footer class="dream-footer">
                <strong>Pelan-pelan, satu per satu.</strong><br>
                Semoga setiap langkah kecil hari ini mendekatkanku
                pada impian besar esok hari. Aamiin. 🤎
                <br><br>
                © {{ date('Y') }} Mirza · Made with love
            </footer>

        </div>
    </main>
</body>
</html>
