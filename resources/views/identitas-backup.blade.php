```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identitas Diri - AboutMe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .identity-page {
            min-height: 100vh;
            padding: 55px 0 80px;
            background:
                radial-gradient(ellipse at 10% 5%, #e8d8c3 0%, transparent 35%),
                linear-gradient(135deg, #fbf7f0, #f4ebdf);
        }

        .identity-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 45px;
            flex-wrap: wrap;
        }

        .identity-label {
            color: #927354;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 4px;
            margin-bottom: 12px;
        }

        .identity-heading {
            color: #352b24;
            font-size: clamp(34px, 5vw, 55px);
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .identity-heading span {
            color: #a88765;
        }

        .identity-back {
            display: inline-block;
            padding: 12px 20px;
            border: 1px solid #d9c6b0;
            border-radius: 50px;
            color: #765c46;
            background: rgba(255, 252, 247, .7);
            transition: .3s ease;
        }

        .identity-back:hover {
            background: #765c46;
            color: white;
            transform: translateY(-3px);
        }

        .identity-layout {
            display: grid;
            grid-template-columns: .85fr 1.4fr;
            gap: 25px;
            align-items: stretch;
        }

        .identity-intro,
        .identity-details,
        .identity-web {
            border: 1px solid rgba(183, 155, 125, .35);
            border-radius: 28px;
            background: rgba(255, 252, 247, .82);
            box-shadow: 0 20px 55px rgba(53, 43, 36, .07);
            animation: identityEnter .7s ease both;
        }

        .identity-intro {
            padding: 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(150deg, #765c46, #4b382c);
            color: #fffaf3;
            position: relative;
            overflow: hidden;
        }

        .identity-intro::after {
            content: "M";
            position: absolute;
            right: -10px;
            bottom: -75px;
            font-size: 240px;
            font-weight: 900;
            line-height: 1;
            color: rgba(255, 255, 255, .055);
            pointer-events: none;
        }

        .identity-avatar {
            width: 82px;
            height: 82px;
            display: grid;
            place-items: center;
            border-radius: 25px;
            background: #e8d8c3;
            color: #765c46;
            font-size: 34px;
            font-weight: 800;
            margin-bottom: 28px;
            border: 1px solid rgba(255,255,255,.4);
        }

        .identity-intro .eyebrow {
            color: #e4c9a9;
            font-size: 11px;
            letter-spacing: 3px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .identity-intro h2 {
            font-size: 32px;
            line-height: 1.2;
            margin-bottom: 16px;
        }

        .identity-intro p {
            color: #e8ded2;
            font-size: 14px;
            line-height: 1.9;
        }

        .identity-status {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-top: 28px;
            font-size: 12px;
            color: #f2e8dc;
        }

        .identity-status span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #c9d8a8;
        }

        .identity-details {
            padding: 35px;
            animation-delay: .1s;
        }

        .identity-section-label {
            color: #a88765;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 3px;
            margin-bottom: 8px;
        }

        .identity-details h2,
        .identity-web h2 {
            font-size: 25px;
            color: #352b24;
            margin-bottom: 25px;
        }

        .identity-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        .identity-item {
            padding: 19px;
            background: #f8f2e9;
            border: 1px solid #eee2d2;
            border-radius: 17px;
            min-width: 0;
            transition: .25s ease;
        }

        .identity-item:hover {
            transform: translateY(-4px);
            background: #f0e4d4;
            border-color: #d6bda2;
        }

        .identity-item small {
            display: block;
            color: #927b65;
            font-size: 11px;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }

        .identity-item strong {
            display: block;
            color: #49382c;
            font-size: 14px;
            overflow-wrap: anywhere;
        }

        .identity-web {
            margin-top: 25px;
            padding: 30px 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            animation-delay: .2s;
        }

        .identity-web h2 {
            margin-bottom: 8px;
        }

        .identity-web p {
            max-width: 650px;
            color: #857568;
            font-size: 14px;
            line-height: 1.9;
        }

        .identity-web-mark {
            flex-shrink: 0;
            width: 65px;
            height: 65px;
            display: grid;
            place-items: center;
            border-radius: 20px;
            background: #e8d8c3;
            color: #765c46;
            font-size: 27px;
        }

        @keyframes identityEnter {
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
            .identity-page {
                padding-top: 35px;
            }

            .identity-layout {
                grid-template-columns: 1fr;
            }

            .identity-intro,
            .identity-details {
                padding: 26px;
            }

            .identity-list {
                grid-template-columns: 1fr 1fr;
            }

            .identity-web {
                padding: 25px;
            }
        }

        @media (max-width: 430px) {
            .identity-list {
                grid-template-columns: 1fr;
            }

            .identity-web {
                align-items: flex-start;
            }

            .identity-web-mark {
                width: 48px;
                height: 48px;
                border-radius: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .identity-intro,
            .identity-details,
            .identity-web {
                animation: none;
            }

            .identity-item,
            .identity-back {
                transition: none;
            }
        }
    </style>
</head>

<body>
    <main class="identity-page">
        <div class="container">

            <header class="identity-top">
                <div>
                    <p class="identity-label">GET TO KNOW ME</p>
                    <h1 class="identity-heading">
                        Identitas <span>Diri.</span>
                    </h1>
                </div>

                <a href="/" class="identity-back">
                    ← Kembali ke Home
                </a>
            </header>

            <section class="identity-layout">

                <article class="identity-intro">
                    <div class="identity-avatar">M.</div>

                    <p class="eyebrow">HELLO, EVERYONE</p>
                    <h2>Halo, saya Mirza.</h2>

                    <p>
                        Seorang pelajar yang terus belajar, berkembang,
                        dan mengeksplorasi dunia teknologi. Saya tertarik
                        pada Web Development dan ingin membuat sesuatu
                        yang kreatif, bermanfaat, dan bermakna.
                    </p>

                    <div class="identity-status">
                        <span></span>
                        Open to learning new things
                    </div>
                </article>

                <article class="identity-details">
                    <p class="identity-section-label">PERSONAL INFORMATION</p>
                    <h2>Kenalan lebih dekat</h2>

                    <div class="identity-list">
                        <div class="identity-item">
                            <small>NAMA</small>
                            <strong>Mirza handsome</strong>
                        </div>

                        <div class="identity-item">
                            <small>STATUS</small>
                            <strong>Pelajar SMA Persis Serang</strong>
                        </div>

                        <div class="identity-item">
                            <small>FAVORITE SONG</small>
                            <strong>About You</strong>
                        </div>

                        <div class="identity-item">
                            <small>LOKASI</small>
                            <strong>Bumi Allah</strong>
                        </div>
                    </div>
                </article>

            </section>

            <section class="identity-web">
                <div>
                    <p class="identity-section-label">ABOUT THIS WEBSITE</p>
                    <h2>Small steps, bigger dreams.</h2>
                    <p>
                        Website AboutMe adalah ruang pribadi saya untuk
                        memperkenalkan diri, menyusun target masa depan,
                        mencatat visi dan misi, serta mendokumentasikan
                        setiap perkembangan dalam perjalanan belajar.
                    </p>
                </div>

                <div class="identity-web-mark">✦</div>
            </section>

        </div>
    </main>
</body>
</html>
```