```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misi Hidup - AboutMe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .mission-page {
            min-height: 100vh;
            padding: 55px 0 80px;
            background:
                radial-gradient(ellipse at 90% 5%, #e8d8c3 0%, transparent 35%),
                linear-gradient(135deg, #fbf7f0, #f3e9dc);
        }

        .mission-header {
            margin-bottom: 38px;
            animation: missionIn .7s ease both;
        }

        .mission-label {
            color: #a88765;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 4px;
            margin-bottom: 13px;
        }

        .mission-title {
            color: #352b24;
            font-size: clamp(36px, 6vw, 58px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .mission-title span {
            color: #a88765;
        }

        .mission-subtitle {
            max-width: 660px;
            margin-top: 15px;
            color: #857568;
            line-height: 1.9;
        }

        .mission-back {
            display: inline-block;
            margin-top: 22px;
            padding: 11px 19px;
            border: 1px solid #d9c6b0;
            border-radius: 50px;
            color: #765c46;
            background: rgba(255,252,247,.7);
            transition: .3s ease;
        }

        .mission-back:hover {
            background: #765c46;
            color: white;
            transform: translateY(-3px);
        }

        .mission-feature {
            padding: 35px;
            border-radius: 28px;
            background: linear-gradient(145deg, #765c46, #49372b);
            color: #fffaf3;
            box-shadow: 0 20px 55px rgba(53,43,36,.12);
            position: relative;
            overflow: hidden;
            margin-bottom: 25px;
            animation: missionIn .8s ease both;
        }

        .mission-feature::after {
            content: "DREAM BIG";
            position: absolute;
            right: -8px;
            bottom: -12px;
            font-size: clamp(38px, 8vw, 90px);
            font-weight: 900;
            letter-spacing: -3px;
            color: rgba(255,255,255,.055);
            pointer-events: none;
        }

        .mission-feature h2 {
            max-width: 700px;
            color: #fffaf3;
            font-size: clamp(24px, 4vw, 34px);
            line-height: 1.5;
            margin-bottom: 14px;
        }

        .mission-feature p:last-child {
            max-width: 650px;
            color: #e8ded2;
            font-size: 14px;
            line-height: 2;
        }

        .mission-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
        }

        .mission-card {
            padding: 29px;
            border: 1px solid rgba(183,155,125,.35);
            border-radius: 24px;
            background: rgba(255,252,247,.88);
            box-shadow: 0 16px 40px rgba(53,43,36,.06);
            transition: transform .3s ease, box-shadow .3s ease;
            animation: missionIn .8s ease both;
        }

        .mission-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 22px 45px rgba(53,43,36,.1);
        }

        .mission-card:nth-child(2) {
            animation-delay: .08s;
        }

        .mission-card:nth-child(3) {
            animation-delay: .16s;
        }

        .mission-card:nth-child(4) {
            animation-delay: .24s;
        }

        .mission-icon {
            width: 56px;
            height: 56px;
            display: grid;
            place-items: center;
            border-radius: 18px;
            background: #eee1d0;
            font-size: 25px;
            margin-bottom: 22px;
        }

        .mission-number {
            color: #a88765;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 3px;
            margin-bottom: 8px;
        }

        .mission-card h3 {
            color: #352b24;
            font-size: 22px;
            margin-bottom: 12px;
        }

        .mission-card p {
            color: #857568;
            font-size: 14px;
            line-height: 1.9;
        }

        .mission-tag {
            display: inline-block;
            margin-top: 18px;
            padding: 7px 12px;
            border-radius: 30px;
            background: #f4eadc;
            color: #765c46;
            font-size: 11px;
            font-weight: 700;
        }

        .mission-closing {
            margin-top: 25px;
            padding: 28px 32px;
            border: 1px solid rgba(183,155,125,.35);
            border-radius: 25px;
            background: #e8d8c3;
            animation: missionIn .9s ease both;
        }

        .mission-closing h2 {
            color: #49382c;
            font-size: 23px;
            margin-bottom: 10px;
        }

        .mission-closing p {
            color: #765c46;
            font-size: 14px;
            line-height: 2;
        }

        @keyframes missionIn {
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
            .mission-page {
                padding-top: 35px;
            }

            .mission-feature,
            .mission-card {
                padding: 25px;
            }

            .mission-grid {
                grid-template-columns: 1fr;
            }

            .mission-closing {
                padding: 24px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .mission-header,
            .mission-feature,
            .mission-card,
            .mission-closing {
                animation: none;
            }

            .mission-back,
            .mission-card {
                transition: none;
            }
        }
    </style>
</head>

<body>
    <main class="mission-page">
        <div class="container">

            <header class="mission-header">
                <p class="mission-label">MY LIFE MISSIONS</p>
                <h1 class="mission-title">
                    Misi <span>Hidup Saya.</span>
                </h1>

                <p class="mission-subtitle">
                    Impian besar membutuhkan usaha, keberanian, dan tujuan
                    yang jelas. Saya ingin membangun masa depan yang sukses
                    tanpa melupakan orang-orang yang membutuhkan bantuan.
                </p>

                <a href="/" class="mission-back">← Kembali ke Home</a>
            </header>

            <section class="mission-feature">
                <p class="mission-label" style="color:#e4c9a9;">
                    MY PURPOSE IN LIFE
                </p>

                <h2>
                    Meraih kesuksesan, membantu sesama,
                    dan meninggalkan manfaat bagi banyak orang.
                </h2>

                <p>
                    Saya ingin menjadi pribadi yang mampu mewujudkan
                    impian melalui kerja keras, membangun kehidupan
                    yang lebih baik, serta menggunakan keberhasilan
                    yang saya raih untuk memberikan dampak positif.
                </p>
            </section>

            <section class="mission-grid">

                <article class="mission-card">
                    <div class="mission-icon">🤝</div>
                    <p class="mission-number">MISSION 01</p>
                    <h3>Memberantas Kemiskinan</h3>
                    <p>
                        Saya ingin ikut membantu mengurangi kemiskinan
                        dengan membuka kesempatan, membantu keluarga
                        yang membutuhkan, serta mendukung pendidikan
                        dan kehidupan yang lebih layak bagi sesama.
                    </p>
                    <span class="mission-tag">Kepedulian Sosial</span>
                </article>

                <article class="mission-card">
                    <div class="mission-icon">🕌</div>
                    <p class="mission-number">MISSION 02</p>
                    <h3>Membangun Masjid</h3>
                    <p>
                        Saya bercita-cita membangun masjid yang nyaman
                        dan bermanfaat sebagai tempat ibadah, belajar,
                        mempererat persaudaraan, serta menjadi pusat
                        kegiatan positif bagi masyarakat.
                    </p>
                    <span class="mission-tag">Ibadah & Manfaat</span>
                </article>

                <article class="mission-card">
                    <div class="mission-icon">💻</div>
                    <p class="mission-number">MISSION 03</p>
                    <h3>Membangun Kesuksesan</h3>
                    <p>
                        Saya ingin terus mengembangkan kemampuan,
                        menambah pengalaman, dan membangun usaha
                        atau karier yang baik agar dapat mencapai
                        kemandirian finansial serta membantu keluarga.
                    </p>
                    <span class="mission-tag">Kerja Keras</span>
                </article>

                <article class="mission-card">
                    <div class="mission-icon">🏎️</div>
                    <p class="mission-number">MISSION 04</p>
                    <h3>Memiliki 5 Lamborghini</h3>
                    <p>
                        Salah satu impian pribadi saya adalah memiliki
                        lima Lamborghini. Saya menjadikannya simbol
                        ambisi dan motivasi untuk terus berusaha,
                        mengelola keuangan dengan bijak, dan meraih
                        kesuksesan melalui cara yang jujur.
                    </p>
                    <span class="mission-tag">Big Dreams</span>
                </article>

            </section>

            <section class="mission-closing">
                <h2>Impian besar, langkah nyata.</h2>
                <p>
                    Saya sadar bahwa semua tujuan ini tidak bisa dicapai
                    dalam semalam. Saya ingin memulainya dari sekarang:
                    terus belajar, menjaga prinsip hidup, bekerja keras,
                    dan menghargai setiap kesempatan. Bagi saya, sukses
                    bukan hanya tentang apa yang dimiliki, tetapi juga
                    tentang apa yang bisa diberikan kepada orang lain.
                </p>
            </section>

        </div>
    </main>
</body>
</html>
```