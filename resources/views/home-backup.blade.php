
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Mirza</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            margin: 0;
            background: #F8F3EA;
            color: #352B24;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .home-page {
            min-height: 100vh;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 0% 10%, #E8DCCB 0, transparent 28%),
                radial-gradient(ellipse at 100% 45%, #EFE4D6 0, transparent 30%),
                #F8F3EA;
        }

        .home-wrap {
            width: min(1100px, calc(100% - 40px));
            margin: auto;
        }

        .home-nav {
            position: sticky;
            top: 0;
            z-index: 20;
            border-bottom: 1px solid #E8DCCB;
            background: #F8F3EAEF;
            backdrop-filter: blur(15px);
        }

        .nav-inner {
            width: min(1100px, calc(100% - 40px));
            min-height: 76px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .home-logo {
            flex-shrink: 0;
            color: #352B24;
            font-size: 17px;
            font-weight: 900;
            letter-spacing: 2px;
            text-decoration: none;
        }

        .home-logo span {
            color: #A18465;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            gap: 6px;
        }

        .nav-links a {
            padding: 9px 11px;
            border-radius: 20px;
            color: #765C46;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: .25s ease;
        }

        .nav-links a:hover {
            background: #E8DCCB;
            color: #352B24;
        }

        .home-hero {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            align-items: center;
            gap: 50px;
            min-height: 590px;
            padding: 65px 0 75px;
        }

        .hero-copy {
            animation: fade-up .8s ease both;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 15px;
            border: 1px solid #DCCAB6;
            border-radius: 30px;
            background: #FFFCF780;
            color: #765C46;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .hero-tag span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #9B886A;
        }

        .hero-copy h1 {
            margin: 24px 0 18px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(47px, 7vw, 78px);
            font-weight: 500;
            letter-spacing: -2px;
            line-height: 1.05;
        }

        .hero-copy h1 span {
            color: #A18465;
            font-style: italic;
        }

        .hero-copy > p {
            max-width: 550px;
            margin: 0;
            color: #857568;
            font-size: 15px;
            line-height: 2;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .home-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 12px 20px;
            border: 1px solid #765C46;
            border-radius: 30px;
            background: #765C46;
            color: #FFFCF7;
            font-size: 13px;
            font-weight: 700;
            text-decoration: none;
            transition: transform .25s ease, background .25s ease;
        }

        .home-btn:hover {
            transform: translateY(-3px);
            background: #49372B;
        }

        .home-btn.outline {
            border-color: #D9C8B4;
            background: transparent;
            color: #765C46;
        }

        .home-btn.outline:hover {
            background: #E8DCCB;
        }

        .hero-note {
            margin-top: 30px;
            color: #A18465;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 15px;
            font-style: italic;
        }

        .hero-visual {
            position: relative;
            width: 100%;
            max-width: 380px;
            justify-self: center;
            animation: fade-up .9s .15s ease both;
        }

        .portrait-frame {
            position: relative;
            padding: 13px;
            border: 1px solid #D9C8B4;
            border-radius: 190px 190px 30px 30px;
            background: #FFFCF7B8;
            box-shadow: 0 25px 65px #765C4618;
            transform: rotate(2deg);
            transition: transform .4s ease;
        }

        .portrait-frame:hover {
            transform: rotate(0deg) translateY(-5px);
        }

        .portrait-frame img {
            display: block;
            width: 100%;
            height: 390px;
            border-radius: 180px 180px 22px 22px;
            object-fit: cover;
            background: #E8DCCB;
        }

        .portrait-placeholder {
            display: none;
            height: 390px;
            align-items: center;
            justify-content: center;
            border-radius: 180px 180px 22px 22px;
            background: linear-gradient(145deg, #E8DCCB, #C7AD91);
            color: #765C46;
            font-family: Georgia, serif;
            font-size: 80px;
        }

        .profile-label {
            position: absolute;
            right: -18px;
            bottom: 35px;
            max-width: 230px;
            padding: 18px 21px;
            border: 1px solid #E8DCCB;
            border-radius: 17px;
            background: #FFFCF7;
            box-shadow: 0 12px 35px #352B2412;
            transform: rotate(-2deg);
        }

        .profile-label strong {
            display: block;
            margin-bottom: 5px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 21px;
        }

        .profile-label span {
            color: #857568;
            font-size: 11px;
            line-height: 1.6;
        }

        .section {
            padding: 70px 0;
        }

        .section-head {
            max-width: 650px;
            margin-bottom: 30px;
        }

        .section-head small {
            color: #A18465;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .section-head h2 {
            margin: 12px 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(30px, 5vw, 43px);
            font-weight: 500;
            line-height: 1.2;
        }

        .section-head p {
            margin: 0;
            color: #857568;
            font-size: 14px;
            line-height: 1.9;
        }

        .intro-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
            align-items: center;
            padding: 35px;
            border: 1px solid #E8DCCB;
            border-radius: 27px;
            background: #FFFCF7C9;
        }

        .intro-panel h3 {
            margin: 0 0 14px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 27px;
            font-weight: 500;
        }

        .intro-panel p {
            margin: 0;
            color: #857568;
            font-size: 14px;
            line-height: 2;
        }

        .intro-side {
            padding: 27px;
            border-radius: 20px;
            background: #F0E5D6;
        }

        .intro-side small {
            color: #A18465;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.5px;
        }

        .intro-side h4 {
            margin: 12px 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 25px;
            font-weight: 500;
            line-height: 1.4;
        }

        .intro-side p {
            font-size: 13px;
        }

        .page-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
        }

        .page-card {
            display: flex;
            flex-direction: column;
            min-height: 215px;
            padding: 23px;
            border: 1px solid #E8DCCB;
            border-radius: 22px;
            background: #FFFCF7C9;
            text-decoration: none;
            color: #352B24;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .page-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 17px 35px #765C4615;
        }

        .page-card .card-icon {
            display: grid;
            place-items: center;
            width: 49px;
            height: 49px;
            margin-bottom: 20px;
            border-radius: 15px;
            background: #F0E5D6;
            font-size: 23px;
        }

        .page-card h3 {
            margin: 0 0 9px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 21px;
            font-weight: 600;
        }

        .page-card p {
            flex: 1;
            margin: 0 0 18px;
            color: #857568;
            font-size: 12px;
            line-height: 1.9;
        }

        .card-link {
            color: #765C46;
            font-size: 12px;
            font-weight: 800;
        }

        .dream-banner {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 25px;
            align-items: center;
            padding: 38px;
            border-radius: 27px;
            background: linear-gradient(125deg, #49372B, #765C46);
            color: #FFFCF7;
            box-shadow: 0 20px 45px #765C4617;
        }

        .dream-banner small {
            color: #E8DCCB;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .dream-banner h2 {
            margin: 13px 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(27px, 4vw, 39px);
            font-weight: 500;
            line-height: 1.25;
        }

        .dream-banner p {
            max-width: 650px;
            margin: 0;
            color: #E8DCCB;
            font-size: 14px;
            line-height: 1.9;
        }

        .dream-symbol {
            font-size: 66px;
        }

        .home-quote {
            padding: 55px 20px 20px;
            text-align: center;
        }

        .home-quote .quote-mark {
            color: #B79B7D;
            font-family: Georgia, serif;
            font-size: 48px;
            line-height: 1;
        }

        .home-quote blockquote {
            max-width: 760px;
            margin: 10px auto 17px;
            font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(22px, 4vw, 34px);
            font-style: italic;
            line-height: 1.55;
        }

        .home-quote p {
            color: #857568;
            font-size: 12px;
            line-height: 1.9;
        }

        .home-footer {
            margin-top: 55px;
            padding: 28px 0;
            border-top: 1px solid #E8DCCB;
            color: #857568;
            font-size: 12px;
            line-height: 1.9;
            text-align: center;
        }

        .home-footer strong {
            color: #765C46;
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 850px) {
            .nav-inner {
                align-items: flex-start;
                flex-direction: column;
                justify-content: center;
                padding: 15px 0;
                gap: 10px;
            }

            .nav-links {
                justify-content: flex-start;
            }

            .home-hero {
                grid-template-columns: 1fr;
                gap: 40px;
                padding-top: 50px;
            }

            .hero-visual {
                max-width: 330px;
            }

            .portrait-frame img,
            .portrait-placeholder {
                height: 340px;
            }

            .page-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 600px) {
            .home-wrap,
            .nav-inner {
                width: calc(100% - 30px);
            }

            .nav-links {
                gap: 2px;
            }

            .nav-links a {
                padding: 8px;
                font-size: 11px;
            }

            .home-hero {
                min-height: auto;
                padding: 48px 0 55px;
            }

            .hero-copy h1 {
                letter-spacing: -1px;
            }

            .intro-panel {
                grid-template-columns: 1fr;
                padding: 22px;
            }

            .page-grid {
                grid-template-columns: 1fr;
            }

            .page-card {
                min-height: 190px;
            }

            .dream-banner {
                grid-template-columns: 1fr;
                padding: 27px;
            }

            .dream-symbol {
                font-size: 43px;
            }

            .section {
                padding: 48px 0;
            }

            .profile-label {
                right: -5px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>
<body>
<div class="home-page">

    <nav class="home-nav">
        <div class="nav-inner">
            <a class="home-logo" href="{{ url('/') }}">MIRZA<span>.</span></a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/identitas') }}">Identitas</a>
                <a href="{{ url('/tentang') }}">Tentang</a>
                <a href="{{ url('/visi') }}">Visi</a>
                <a href="{{ url('/misi') }}">Misi</a>
                <a href="{{ url('/target') }}">Target</a>
                <a href="{{ url('/progress') }}">Progress</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="home-wrap home-hero" id="home">
            <div class="hero-copy">
                <div class="hero-tag">
                    <span></span>
                    MY PERSONAL SPACE
                </div>

                <h1>Hello, I'm<br><span>Mirza.</span></h1>

                <p>
                    Selamat datang di ruang kecilku. Di sini aku berbagi
                    tentang diriku, hal-hal yang ingin kucapai, dan
                    perjalanan yang sedang kujalani untuk menjadi pribadi
                    yang lebih baik.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/identitas') }}" class="home-btn">
                        Kenali Aku →
                    </a>
                    <a href="{{ url('/target') }}" class="home-btn outline">
                        Lihat Impianku
                    </a>
                </div>

                <div class="hero-note">
                    "Growing quietly, dreaming deeply."
                </div>
            </div>

            <div class="hero-visual">
                <div class="portrait-frame">
                    <img
                        src="{{ asset('images/profile.png') }}"
                        alt="Foto profil Mirza"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >
                    <div class="portrait-placeholder">M.</div>
                </div>

                <div class="profile-label">
                    <strong>Mirza handsome</strong>
                    <span>Pelajar · Aspiring Web Developer</span>
                </div>
            </div>
        </section>

        <section class="section home-wrap" id="about">
            <div class="section-head">
                <small>A little introduction</small>
                <h2>Bukan cuma tentang siapa aku, tetapi juga siapa aku ingin menjadi.</h2>
                <p>
                    Aku percaya setiap orang punya perjalanan masing-masing.
                    Aku masih belajar, masih mencoba, dan masih punya banyak
                    hal yang ingin diwujudkan.
                </p>
            </div>

            <div class="intro-panel">
                <div>
                    <h3>Welcome to my world.</h3>
                    <p>
                        Website ini menjadi tempatku memperkenalkan diri,
                        menyimpan tujuan, dan mencatat proses perkembangan
                        diriku. Aku ingin terus menambah pengetahuan,
                        mengasah kemampuan, dan belajar dari setiap
                        pengalaman yang datang.
                    </p>
                </div>

                <div class="intro-side">
                    <small>MY PERSONAL PHILOSOPHY</small>
                    <h4>Pelan-pelan tidak apa-apa, yang penting tetap melangkah.</h4>
                    <p>
                        Tidak harus langsung hebat. Aku hanya ingin
                        terus bertumbuh dan menjadi lebih baik dari
                        diriku yang kemarin.
                    </p>
                </div>
            </div>
        </section>

        <section class="section home-wrap" id="explore">
            <div class="section-head">
                <small>Explore my pages</small>
                <h2>Get to know me better.</h2>
                <p>
                    Setiap halaman punya cerita dan tujuan tersendiri.
                    Yuk, lihat perjalanan yang sedang kubangun.
                </p>
            </div>

            <div class="page-grid">
                <a class="page-card" href="{{ url('/identitas') }}">
                    <div class="card-icon">👤</div>
                    <h3>Identitas</h3>
                    <p>
                        Kenali diriku lebih dekat, mulai dari perkenalan
                        hingga hal-hal yang kusukai.
                    </p>
                    <span class="card-link">Kenali aku →</span>
                </a>

                <a class="page-card" href="{{ url('/tentang') }}">
                    <div class="card-icon">✦</div>
                    <h3>Tentang Aku</h3>
                    <p>
                        Cerita tentang diriku, minatku, dan perjalanan
                        yang sedang aku jalani.
                    </p>
                    <span class="card-link">Baca ceritaku →</span>
                </a>

                <a class="page-card" href="{{ url('/visi') }}">
                    <div class="card-icon">🔭</div>
                    <h3>Visi</h3>
                    <p>
                        Gambaran tentang pribadi yang ingin kubangun
                        dan masa depan yang ingin kutuju.
                    </p>
                    <span class="card-link">Lihat visiku →</span>
                </a>

                <a class="page-card" href="{{ url('/misi') }}">
                    <div class="card-icon">🧭</div>
                    <h3>Misi</h3>
                    <p>
                        Hal-hal yang ingin kuusahakan untuk mendekatkan
                        diri pada impian besarku.
                    </p>
                    <span class="card-link">Lihat misiku →</span>
                </a>

                <a class="page-card" href="{{ url('/target') }}">
                    <div class="card-icon">🤎</div>
                    <h3>Target Hidup</h3>
                    <p>
                        Impianku membahagiakan orang tua, keliling dunia
                        bersama mereka, dan mengajak mereka umrah.
                    </p>
                    <span class="card-link">Lihat impianku →</span>
                </a>

                <a class="page-card" href="{{ url('/progress') }}">
                    <div class="card-icon">🌱</div>
                    <h3>Progress</h3>
                    <p>
                        Catatan tentang skill yang sedang kupelajari,
                        prosesku berkembang, dan langkah selanjutnya.
                    </p>
                    <span class="card-link">Ikuti perjalananku →</span>
                </a>
            </div>
        </section>

        <section class="section home-wrap" id="dreams">
            <div class="dream-banner">
                <div>
                    <small>My biggest reason</small>
                    <h2>Aku ingin tumbuh, bukan hanya untuk diriku sendiri.</h2>
                    <p>
                        Salah satu impian terbesarku adalah membahagiakan
                        orang tua. Aku ingin suatu hari nanti bisa mengajak
                        mereka berkeliling dunia dan beribadah umrah bersama.
                        Semoga setiap usaha kecil hari ini menjadi bagian
                        dari jalan menuju impian itu.
                    </p>
                    <div class="hero-actions">
                        <a href="{{ url('/target') }}" class="home-btn"
                           style="background:#FFFCF7;color:#49372B;border-color:#FFFCF7">
                            Kenali Targetku →
                        </a>
                    </div>
                </div>
                <div class="dream-symbol" aria-hidden="true">🕋</div>
            </div>

            <div class="home-quote">
                <div class="quote-mark">“</div>
                <blockquote>
                    Aku tidak harus menjadi yang terbaik di antara semua orang.
                    Aku hanya ingin terus menjadi lebih baik dari diriku
                    yang kemarin.
                </blockquote>
                <p>MY JOURNEY · MY GROWTH · MY STORY</p>
            </div>
        </section>
    </main>

    <footer class="home-wrap home-footer">
        <strong>MIRZA.</strong><br>
        Still learning, still growing, still chasing my dreams.
        <br>
        © {{ date('Y') }} Mirza · Made with purpose 🤎
    </footer>

</div>
</body>
</html>
