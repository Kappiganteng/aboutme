```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - AboutMe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .about-page {
            min-height: 100vh;
            padding: 55px 0 80px;
            background:
                radial-gradient(ellipse at 90% 10%, #e8d8c3 0%, transparent 35%),
                linear-gradient(135deg, #fbf7f0, #f3e9dc);
        }

        .about-heading {
            margin-bottom: 38px;
            animation: aboutIn .7s ease both;
        }

        .about-eyebrow {
            color: #a88765;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 4px;
            margin-bottom: 12px;
        }

        .about-title {
            color: #352b24;
            font-size: clamp(36px, 6vw, 58px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .about-title span {
            color: #a88765;
        }

        .about-subtitle {
            max-width: 620px;
            margin-top: 15px;
            color: #857568;
            line-height: 1.9;
        }

        .about-back {
            display: inline-block;
            margin-top: 22px;
            padding: 11px 19px;
            border: 1px solid #d9c6b0;
            border-radius: 50px;
            color: #765c46;
            background: rgba(255,252,247,.7);
            transition: .3s ease;
        }

        .about-back:hover {
            background: #765c46;
            color: white;
            transform: translateY(-3px);
        }

        .about-main-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 24px;
            align-items: stretch;
        }

        .about-intro-card,
        .about-hobby-card,
        .about-quote-card {
            border: 1px solid rgba(183,155,125,.35);
            border-radius: 27px;
            box-shadow: 0 18px 48px rgba(53,43,36,.07);
            animation: aboutIn .8s ease both;
        }

        .about-intro-card {
            padding: 36px;
            background: rgba(255,252,247,.88);
        }

        .about-card-label {
            color: #a88765;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 13px;
        }

        .about-intro-card h2,
        .about-hobby-card h2 {
            color: #352b24;
            font-size: 27px;
            margin-bottom: 16px;
        }

        .about-intro-card p,
        .about-hobby-card p {
            color: #857568;
            font-size: 14px;
            line-height: 2;
        }

        .about-mini-stats {
            display: grid;
            grid-template-columns: repeat(2, minmax(0,1fr));
            gap: 13px;
            margin-top: 26px;
        }

        .about-stat {
            padding: 17px;
            border-radius: 17px;
            background: #f6eee3;
            border: 1px solid #eee2d2;
        }

        .about-stat strong {
            display: block;
            color: #765c46;
            font-size: 19px;
            margin-bottom: 4px;
        }

        .about-stat span {
            color: #927b65;
            font-size: 12px;
        }

        .about-hobby-card {
            padding: 32px;
            color: #fffaf3;
            background: linear-gradient(145deg, #765c46, #49372b);
            position: relative;
            overflow: hidden;
            animation-delay: .12s;
        }

        .about-hobby-card::after {
            content: "⚽";
            position: absolute;
            right: -8px;
            top: 8px;
            font-size: 100px;
            opacity: .1;
            transform: rotate(-15deg);
        }

        .about-hobby-icon {
            width: 65px;
            height: 65px;
            display: grid;
            place-items: center;
            margin-bottom: 25px;
            border-radius: 20px;
            background: #e8d8c3;
            color: #765c46;
            font-size: 30px;
        }

        .about-hobby-card .about-card-label {
            color: #e4c9a9;
        }

        .about-hobby-card h2 {
            color: #fffaf3;
        }

        .about-hobby-card p {
            color: #e8ded2;
        }

        .about-hobby-tag {
            display: inline-block;
            margin-top: 22px;
            padding: 9px 14px;
            border: 1px solid rgba(255,250,243,.25);
            border-radius: 30px;
            color: #f5e5d2;
            font-size: 12px;
        }

        .about-quote-card {
            margin-top: 24px;
            padding: 27px 32px;
            display: flex;
            gap: 20px;
            align-items: flex-start;
            background: #e8d8c3;
            animation-delay: .2s;
        }

        .about-quote-mark {
            color: #a88765;
            font-size: 48px;
            font-weight: 800;
            line-height: 1;
        }

        .about-quote-card p {
            color: #594536;
            font-size: 15px;
            line-height: 1.9;
        }

        .about-quote-card strong {
            display: block;
            margin-top: 10px;
            color: #765c46;
            font-size: 12px;
            letter-spacing: 1px;
        }

        @keyframes aboutIn {
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
            .about-page {
                padding-top: 35px;
            }

            .about-main-grid {
                grid-template-columns: 1fr;
            }

            .about-intro-card,
            .about-hobby-card {
                padding: 26px;
            }

            .about-quote-card {
                padding: 23px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .about-heading,
            .about-intro-card,
            .about-hobby-card,
            .about-quote-card {
                animation: none;
            }
        }
    </style>
</head>

<body>
    <main class="about-page">
        <div class="container">

            <header class="about-heading">
                <p class="about-eyebrow">GET TO KNOW ME</p>
                <h1 class="about-title">
                    Tentang <span>Saya.</span>
                </h1>
                <p class="about-subtitle">
                    Mengenal lebih dekat siapa saya, apa yang saya sukai,
                    dan bagaimana saya terus bertumbuh menjadi pribadi
                    yang lebih baik.
                </p>

                <a href="/" class="about-back">← Kembali ke Home</a>
            </header>

            <section class="about-main-grid">

                <article class="about-intro-card">
                    <p class="about-card-label">01 — WHO AM I?</p>
                    <h2>Halo, saya Mirza!</h2>

                    <p>
                        Saya adalah seorang pelajar yang sedang belajar,
                        berkembang, dan berusaha mencapai berbagai tujuan
                        dalam kehidupan.
                    </p>

                    <p style="margin-top: 12px;">
                        Saya percaya bahwa setiap proses belajar merupakan
                        kesempatan untuk menjadi pribadi yang lebih baik.
                        Bagi saya, terus mencoba dan memperbaiki diri adalah
                        bagian penting dari perjalanan menuju masa depan.
                    </p>

                    <div class="about-mini-stats">
                        <div class="about-stat">
                            <strong>01</strong>
                            <span>Terus Belajar</span>
                        </div>

                        <div class="about-stat">
                            <strong>02</strong>
                            <span>Berani Berkembang</span>
                        </div>
                    </div>
                </article>

                <article class="about-hobby-card">
                    <div class="about-hobby-icon">⚽</div>
                    <p class="about-card-label">02 — MY PASSION</p>
                    <h2>Futsal Is My Thing.</h2>

                    <p>
                        Saya suka bermain futsal dan merasa punya kemampuan
                        yang kuat di bidang ini. Saya ingin terus mengasah
                        teknik, meningkatkan kerja sama tim, dan memberikan
                        permainan terbaik di setiap kesempatan.
                    </p>

                    <span class="about-hobby-tag">
                        Passion · Skill · Teamwork
                    </span>
                </article>

            </section>

            <section class="about-quote-card">
                <div class="about-quote-mark">“</div>
                <div>
                    <p>
                        Saya tidak harus menjadi sempurna hari ini.
                        Yang terpenting adalah terus belajar, berani
                        mencoba, dan menjadi lebih baik dari diri saya
                        yang kemarin.
                    </p>
                    <strong>MY PERSONAL PRINCIPLE</strong>
                </div>
            </section>

        </div>
    </main>
</body>
</html>
```