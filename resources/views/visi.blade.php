```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Masa Depan - AboutMe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .vision-page {
            min-height: 100vh;
            padding: 55px 0 80px;
            background:
                radial-gradient(ellipse at 90% 5%, #e8d8c3 0%, transparent 35%),
                linear-gradient(135deg, #fbf7f0, #f3e9dc);
        }

        .vision-header {
            margin-bottom: 38px;
            animation: visionEnter .7s ease both;
        }

        .vision-label {
            color: #a88765;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 4px;
            margin-bottom: 13px;
        }

        .vision-title {
            color: #352b24;
            font-size: clamp(36px, 6vw, 58px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .vision-title span {
            color: #a88765;
        }

        .vision-subtitle {
            max-width: 650px;
            margin-top: 15px;
            color: #857568;
            line-height: 1.9;
        }

        .vision-back {
            display: inline-block;
            margin-top: 22px;
            padding: 11px 19px;
            border: 1px solid #d9c6b0;
            border-radius: 50px;
            color: #765c46;
            background: rgba(255,252,247,.7);
            transition: .3s ease;
        }

        .vision-back:hover {
            background: #765c46;
            color: white;
            transform: translateY(-3px);
        }

        .vision-main {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 24px;
        }

        .vision-card,
        .vision-side-card,
        .vision-quote,
        .vision-values {
            border: 1px solid rgba(183,155,125,.35);
            border-radius: 27px;
            box-shadow: 0 18px 48px rgba(53,43,36,.07);
            animation: visionEnter .8s ease both;
        }

        .vision-card {
            padding: 38px;
            color: #fffaf3;
            background: linear-gradient(145deg, #765c46, #49372b);
            position: relative;
            overflow: hidden;
        }

        .vision-card::after {
            content: "VISION";
            position: absolute;
            right: -12px;
            bottom: 12px;
            font-size: clamp(50px, 8vw, 100px);
            font-weight: 900;
            letter-spacing: -3px;
            color: rgba(255,255,255,.055);
            pointer-events: none;
        }

        .vision-number {
            width: 58px;
            height: 58px;
            display: grid;
            place-items: center;
            border-radius: 18px;
            background: #e8d8c3;
            color: #765c46;
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 28px;
        }

        .vision-card .vision-label {
            color: #e4c9a9;
        }

        .vision-card h2 {
            font-size: clamp(25px, 3vw, 34px);
            line-height: 1.4;
            margin-bottom: 18px;
            color: #fffaf3;
        }

        .vision-card > p:last-child {
            color: #e8ded2;
            font-size: 14px;
            line-height: 2;
            max-width: 600px;
        }

        .vision-side-card {
            padding: 32px;
            background: rgba(255,252,247,.88);
            animation-delay: .12s;
        }

        .vision-side-card h2,
        .vision-values h2 {
            color: #352b24;
            font-size: 24px;
            margin-bottom: 18px;
        }

        .vision-side-card > p:not(.vision-label) {
            color: #857568;
            font-size: 14px;
            line-height: 2;
        }

        .vision-principle {
            margin-top: 24px;
            padding: 17px;
            border-radius: 16px;
            background: #f6eee3;
            border: 1px solid #eee2d2;
        }

        .vision-principle strong {
            display: block;
            color: #765c46;
            margin-bottom: 6px;
        }

        .vision-principle span {
            color: #857568;
            font-size: 13px;
            line-height: 1.8;
        }

        .vision-quote {
            margin-top: 24px;
            padding: 28px 32px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            background: #e8d8c3;
            animation-delay: .2s;
        }

        .vision-quote-mark {
            color: #a88765;
            font-size: 48px;
            line-height: 1;
            font-weight: 900;
        }

        .vision-quote blockquote {
            color: #594536;
            font-size: 17px;
            font-weight: 600;
            line-height: 1.9;
        }

        .vision-quote span {
            display: block;
            margin-top: 10px;
            color: #765c46;
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: 800;
        }

        .vision-values {
            margin-top: 24px;
            padding: 30px;
            background: rgba(255,252,247,.88);
            animation-delay: .28s;
        }

        .vision-values > p {
            color: #857568;
            font-size: 14px;
            line-height: 1.9;
            margin-bottom: 20px;
        }

        .vision-value-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .vision-value {
            padding: 19px;
            border-radius: 17px;
            background: #f6eee3;
            border: 1px solid #eee2d2;
            transition: .25s ease;
        }

        .vision-value:hover {
            transform: translateY(-4px);
            background: #f0e4d4;
        }

        .vision-value span {
            display: block;
            color: #a88765;
            font-size: 12px;
            font-weight: 900;
            margin-bottom: 9px;
        }

        .vision-value strong {
            display: block;
            color: #49382c;
            margin-bottom: 7px;
        }

        .vision-value p {
            color: #857568;
            font-size: 12px;
            line-height: 1.8;
        }

        @keyframes visionEnter {
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
            .vision-page {
                padding-top: 35px;
            }

            .vision-main {
                grid-template-columns: 1fr;
            }

            .vision-card,
            .vision-side-card,
            .vision-values {
                padding: 26px;
            }

            .vision-quote {
                padding: 23px;
            }

            .vision-value-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .vision-header,
            .vision-card,
            .vision-side-card,
            .vision-quote,
            .vision-values {
                animation: none;
            }

            .vision-back,
            .vision-value {
                transition: none;
            }
        }
    </style>
</head>

<body>
    <main class="vision-page">
        <div class="container">

            <header class="vision-header">
                <p class="vision-label">MY FUTURE DIRECTION</p>
                <h1 class="vision-title">
                    Visi <span>Masa Depan.</span>
                </h1>
                <p class="vision-subtitle">
                    Setiap orang punya perjalanan dan tujuan masing-masing.
                    Saya ingin terus bertumbuh, mengenali potensi diri,
                    dan membangun masa depan yang bisa saya banggakan.
                </p>

                <a href="/" class="vision-back">← Kembali ke Home</a>
            </header>

            <section class="vision-main">

                <article class="vision-card">
                    <div class="vision-number">01</div>
                    <p class="vision-label">MY PERSONAL VISION</p>

                    <h2>
                        Menjadi pribadi yang terus berkembang,
                        berkarakter baik, dan bermanfaat bagi sesama.
                    </h2>

                    <p>
                        Saya ingin menjadi seseorang yang memiliki
                        pengetahuan, kemampuan, dan pengalaman yang luas,
                        tanpa melupakan sikap rendah hati dan tanggung jawab.
                        Bagi saya, keberhasilan bukan hanya tentang pencapaian
                        pribadi, tetapi juga tentang bagaimana saya dapat
                        memberikan dampak positif kepada orang lain.
                    </p>
                </article>

                <article class="vision-side-card">
                    <p class="vision-label">THE WAY I SEE LIFE</p>
                    <h2>Bertumbuh, bukan sekadar berlomba.</h2>

                    <p>
                        Saya sadar bahwa setiap orang memiliki waktu dan
                        jalannya sendiri. Karena itu, saya ingin fokus
                        memperbaiki diri, belajar dari kesalahan, dan
                        tidak berhenti hanya karena perjalanan terasa sulit.
                    </p>

                    <div class="vision-principle">
                        <strong>Prinsip yang saya pegang</strong>
                        <span>
                            Tetap rendah hati saat berhasil, tetap kuat
                            saat menghadapi kesulitan, dan tetap mau belajar
                            kapan pun dibutuhkan.
                        </span>
                    </div>
                </article>

            </section>

            <section class="vision-quote">
                <div class="vision-quote-mark">“</div>
                <div>
                    <blockquote>
                        Saya tidak harus menjadi yang terbaik di antara
                        semua orang. Saya hanya ingin terus menjadi lebih
                        baik dari diri saya yang kemarin.
                    </blockquote>
                    <span>A REMINDER FOR MYSELF</span>
                </div>
            </section>

            <section class="vision-values">
                <p class="vision-label">WHAT I WANT TO BUILD</p>
                <h2>Bekal menuju masa depan</h2>
                <p>
                    Visi ini ingin saya wujudkan melalui hal-hal yang
                    saya bangun sedikit demi sedikit dalam kehidupan.
                </p>

                <div class="vision-value-grid">
                    <article class="vision-value">
                        <span>01 / KNOWLEDGE</span>
                        <strong>Terus Belajar</strong>
                        <p>Memperluas pengetahuan dan berani mencoba hal baru.</p>
                    </article>

                    <article class="vision-value">
                        <span>02 / CHARACTER</span>
                        <strong>Menjaga Karakter</strong>
                        <p>Menjadi pribadi yang jujur, disiplin, dan bertanggung jawab.</p>
                    </article>

                    <article class="vision-value">
                        <span>03 / IMPACT</span>
                        <strong>Memberi Manfaat</strong>
                        <p>Menggunakan kemampuan untuk membantu dan menginspirasi orang lain.</p>
                    </article>
                </div>
            </section>

        </div>
    </main>
</body>
</html>
```