<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Mirza Kafie</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        :root {
            --cream: #f8f3ea;
            --paper: #fffcf7;
            --beige: #e8dccb;
            --sand: #d8c1a8;
            --latte: #b79b7d;
            --mocha: #765c46;
            --espresso: #352b24;
            --muted: #857568;
            --line: #e5d7c6;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 90px; }
        body {
            margin: 0;
            background: var(--cream);
            color: var(--espresso);
            font-family: "Segoe UI", Arial, sans-serif;
        }
        a { color: inherit; }
        .home-page {
            min-height: 100vh;
            overflow: hidden;
            background:
                radial-gradient(ellipse at 2% 12%, #eadfce 0, transparent 28%),
                radial-gradient(ellipse at 98% 40%, #efe4d6 0, transparent 30%),
                var(--cream);
        }
        .wrap { width: min(1180px, calc(100% - 48px)); margin-inline: auto; }
        .home-nav {
            position: sticky; top: 0; z-index: 50;
            border-bottom: 1px solid #e5d7c6;
            background: #f8f3eaeF;
            backdrop-filter: blur(16px);
        }
        .nav-inner {
            width: min(1280px, calc(100% - 48px)); min-height: 68px;
            margin: auto; display: flex; align-items: center;
            justify-content: space-between; gap: 24px;
        }
        .home-logo {
            display: inline-flex; align-items: center; gap: 10px;
            flex-shrink: 0; text-decoration: none; color: var(--espresso);
            font-size: 15px; font-weight: 800; letter-spacing: 2px;
        }
        .logo-mark {
            font-family: Georgia, serif; font-size: 32px; font-style: italic;
            font-weight: 500; letter-spacing: -4px; color: var(--mocha);
        }
        .nav-links { display: flex; align-items: center; justify-content: flex-end; flex-wrap: wrap; gap: 4px; }
        .nav-links a {
            padding: 10px 12px; border-radius: 24px; text-decoration: none;
            color: var(--mocha); font-size: 12px; font-weight: 650;
            transition: background .25s ease, color .25s ease, transform .25s ease;
        }
        .nav-links a:hover, .nav-links a.active {
            background: var(--beige); color: var(--espresso); transform: translateY(-1px);
        }
        .hero {
            position: relative; display: grid; grid-template-columns: 1.05fr .95fr;
            align-items: center; gap: clamp(35px, 6vw, 90px);
            min-height: 510px; padding-top: 48px; padding-bottom: 54px;
        }
        .hero-copy { position: relative; z-index: 2; animation: rise .8s ease both; }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 9px;
            padding: 9px 15px; border: 1px solid var(--line);
            border-radius: 30px; background: #fffcf780;
            color: var(--mocha); font-size: 10px; font-weight: 800; letter-spacing: 2px;
        }
        .eyebrow-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--latte); }
        .hero h1 {
            margin: 22px 0 12px; font-family: Georgia, "Times New Roman", serif;
            font-size: clamp(48px, 6.5vw, 78px); font-weight: 500;
            line-height: .99; letter-spacing: -2.5px;
        }
        .hero h1 span { color: #a47d5d; font-style: italic; }
        .hero-role { margin: 0 0 17px; color: var(--espresso); font-size: 15px; font-weight: 650; }
        .hero-role span { padding-inline: 7px; color: var(--latte); }
        .hero-description { max-width: 540px; margin: 0; color: var(--muted); font-size: 14px; line-height: 1.95; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 11px; margin-top: 24px; }
        .btn {
            display: inline-flex; align-items: center; justify-content: center; gap: 10px;
            min-height: 43px; padding: 11px 20px; border: 1px solid var(--mocha);
            border-radius: 28px; background: var(--mocha); color: var(--paper);
            text-decoration: none; font-size: 12px; font-weight: 750;
            transition: transform .25s ease, background .25s ease, box-shadow .25s ease;
        }
        .btn:hover { transform: translateY(-3px); background: #49372b; box-shadow: 0 10px 22px #765c4620; }
        .btn-outline { background: transparent; color: var(--mocha); border-color: var(--latte); }
        .btn-outline:hover { background: var(--beige); color: var(--espresso); }
        .hero-note { margin-top: 23px; color: var(--mocha); font: italic 15px Georgia, serif; }
        .hero-visual { position: relative; width: min(100%, 400px); justify-self: center; animation: rise .9s .12s ease both; }
        .portrait-frame {
            position: relative; padding: 10px; border: 1px solid var(--latte);
            border-radius: 210px 210px 34px 34px; background: #fffcf7b8;
            box-shadow: 0 25px 65px #765c4618; transform: rotate(1.5deg);
            transition: transform .4s ease;
        }
        .portrait-frame:hover { transform: rotate(0) translateY(-5px); }
        .portrait-frame img {
            display: block; width: 100%; height: 390px; object-fit: cover;
            object-position: center; border-radius: 200px 200px 26px 26px; background: var(--beige);
        }
        .portrait-placeholder {
            display: none; height: 390px; align-items: center; justify-content: center;
            border-radius: 200px 200px 26px 26px;
            background: linear-gradient(145deg, var(--beige), var(--sand));
            color: var(--mocha); font: italic 80px Georgia, serif;
        }
        .profile-label {
            position: absolute; right: -18px; bottom: 24px; display: flex; align-items: center;
            gap: 12px; max-width: 270px; padding: 13px 18px;
            border: 1px solid #e8dccb; border-radius: 40px;
            background: #765c46ed; color: var(--paper); box-shadow: 0 12px 35px #352b2418;
        }
        .profile-icon {
            display: grid; place-items: center; flex-shrink: 0; width: 38px; height: 38px;
            border-radius: 50%; background: #fffcf72c; font-size: 18px;
        }
        .profile-label strong { display: block; margin-bottom: 3px; font-size: 13px; }
        .profile-label span { display: block; color: #f1e4d5; font-size: 10px; line-height: 1.5; }
        .scribble { position: absolute; color: #9c795b; font: italic 15px Georgia, serif; line-height: 1.35; }
        .scribble-left { left: -75px; top: 38%; transform: rotate(-9deg); }
        .scribble-right { right: -64px; top: 5%; transform: rotate(8deg); }
        .quick-links { padding: 18px 0 28px; border-top: 1px solid #e8dccb; border-bottom: 1px solid #e8dccb; background: #fffcf75c; }
        .page-grid { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); gap: 14px; }
        .page-card {
            display: flex; flex-direction: column; min-height: 168px; padding: 17px 16px;
            border: 1px solid var(--line); border-radius: 18px; background: #fffcf76b;
            color: var(--espresso); text-decoration: none;
            transition: transform .28s ease, background .28s ease, box-shadow .28s ease;
        }
        .page-card:hover { transform: translateY(-5px); background: var(--paper); box-shadow: 0 14px 28px #765c4612; }
        .card-icon {
            display: grid; place-items: center; width: 40px; height: 40px; margin-bottom: 12px;
            border-radius: 50%; background: #f0e5d6; color: var(--mocha); font-size: 20px;
        }
        .page-card h3 { margin: 0 0 7px; font-size: 13px; font-weight: 750; }
        .page-card p { flex: 1; margin: 0 0 12px; color: var(--muted); font-size: 11px; line-height: 1.65; }
        .card-arrow { display: grid; place-items: center; width: 27px; height: 27px; border-radius: 50%; background: var(--beige); color: var(--espresso); font-size: 17px; }
        .section { padding: 58px 0; }
        .about-grid { display: grid; grid-template-columns: 1.05fr 1fr .9fr; align-items: center; gap: 35px; }
        .section-tag { display: inline-block; padding: 7px 13px; border-radius: 20px; background: var(--beige); color: var(--mocha); font-size: 11px; font-weight: 750; }
        .about-copy h2 { margin: 14px 0; font: 500 clamp(28px, 3vw, 38px)/1.13 Georgia, serif; letter-spacing: -.6px; }
        .about-copy h2 span { color: #a47d5d; font-style: italic; }
        .about-copy p { margin: 0; color: var(--muted); font-size: 13px; line-height: 1.9; }
        .handwritten { margin-top: 19px !important; color: #a18465 !important; font: italic 15px Georgia, serif !important; transform: rotate(-3deg); }
        .skills { padding: 5px 0; }
        .skills-title { display: flex; align-items: center; gap: 10px; margin: 0 0 18px; font-size: 15px; }
        .skills-title span { display: grid; place-items: center; width: 32px; height: 32px; border-radius: 50%; background: var(--beige); }
        .skill { display: grid; grid-template-columns: 28px 1fr 35px; align-items: center; gap: 10px; margin: 13px 0; }
        .skill-icon { display: grid; place-items: center; width: 27px; height: 27px; border-radius: 8px; background: var(--beige); font-size: 12px; font-weight: 800; }
        .skill-info { min-width: 0; }
        .skill-name { margin-bottom: 6px; color: var(--mocha); font-size: 11px; }
        .skill-track { height: 5px; overflow: hidden; border-radius: 20px; background: #e2d7ca; }
        .skill-fill { height: 100%; border-radius: inherit; background: linear-gradient(90deg, var(--mocha), var(--latte)); }
        .skill-value { color: var(--muted); font-size: 10px; text-align: right; }
        .quote-card {
            min-height: 245px; display: flex; flex-direction: column; justify-content: flex-start;
            padding: 24px; border: 1px solid #e5d7c6; border-radius: 22px;
            background: linear-gradient(180deg, #ead9c6de, #fffcf7e8);
        }
        .quote-mark { color: #a18465; font: bold 42px Georgia, serif; line-height: .8; }
        .quote-card blockquote { margin: 13px 0 15px; font: 16px/1.55 Georgia, serif; }
        .quote-card p { margin: auto 0 0; color: var(--muted); font-size: 11px; }
        .dream-section { padding-top: 10px; }
        .dream-banner {
            display: grid; grid-template-columns: 1fr auto; align-items: center; gap: 28px;
            padding: 35px 38px; border-radius: 25px;
            background: linear-gradient(120deg, #49372b, #765c46); color: var(--paper);
            box-shadow: 0 20px 45px #765c4617;
        }
        .dream-banner small { color: #e8dccb; font-size: 10px; font-weight: 800; letter-spacing: 2px; }
        .dream-banner h2 { margin: 12px 0; font: 500 clamp(27px, 4vw, 39px)/1.2 Georgia, serif; }
        .dream-banner p { max-width: 760px; margin: 0; color: #f0e4d7; font-size: 13px; line-height: 1.9; }
        .dream-symbol { font-size: 52px; }
        .dream-banner .btn { margin-top: 20px; border-color: var(--paper); background: var(--paper); color: var(--mocha); }
        .dream-banner .btn:hover { background: var(--beige); }
        .home-quote { padding: 45px 20px 15px; text-align: center; }
        .home-quote .quote-mark { font-size: 48px; }
        .home-quote blockquote { max-width: 760px; margin: 10px auto 16px; font: italic clamp(22px, 3.3vw, 31px)/1.5 Georgia, serif; }
        .home-quote p { color: var(--muted); font-size: 10px; font-weight: 750; letter-spacing: 2px; }
        .home-footer { margin-top: 20px; padding: 24px 0; background: #49372b; color: #f1e4d5; }
        .footer-inner { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .footer-brand { display: flex; align-items: center; gap: 12px; }
        .footer-brand .logo-mark { color: var(--paper); font-size: 34px; }
        .footer-brand strong { display: block; font-size: 12px; letter-spacing: 1.5px; }
        .footer-brand span:last-child { display: block; margin-top: 4px; color: #d9c7b4; font-size: 10px; }
        .footer-center { color: #e8dccb; font-size: 10px; text-align: center; }
        .footer-copy { color: #d9c7b4; font-size: 10px; text-align: right; }
        @keyframes rise { from { opacity: 0; transform: translateY(18px); } to { opacity: 1; transform: translateY(0); } }
        @media (max-width: 1050px) {
            .nav-inner { align-items: flex-start; flex-direction: column; justify-content: center; padding: 12px 0; gap: 8px; }
            .nav-links { justify-content: flex-start; }
            .page-grid { grid-template-columns: repeat(4, minmax(0, 1fr)); }
            .about-grid { grid-template-columns: 1fr 1fr; }
            .quote-card { grid-column: 1 / -1; min-height: 160px; }
        }
        @media (max-width: 720px) {
            .wrap, .nav-inner { width: calc(100% - 30px); }
            .hero { grid-template-columns: 1fr; gap: 38px; padding-top: 42px; }
            .hero h1 { font-size: clamp(48px, 12vw, 70px); }
            .hero-visual { max-width: 330px; }
            .portrait-frame img, .portrait-placeholder { height: 340px; }
            .scribble-left { left: -22px; }
            .scribble-right { right: -18px; }
            .page-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .about-grid { grid-template-columns: 1fr; gap: 30px; }
            .quote-card { grid-column: auto; }
            .dream-banner { grid-template-columns: 1fr; padding: 27px; }
            .dream-symbol { display: none; }
            .footer-inner { align-items: flex-start; flex-direction: column; }
            .footer-center { text-align: left; }
            .footer-copy { text-align: left; }
        }
        @media (max-width: 420px) {
            .nav-links a { padding: 8px 9px; font-size: 11px; }
            .page-grid { gap: 10px; }
            .page-card { padding: 15px; }
            .profile-label { right: -4px; bottom: 18px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { animation: none !important; transition: none !important; scroll-behavior: auto !important; }
        }
    </style>
</head>
<body>
<div class="home-page">
    <nav class="home-nav">
        <div class="nav-inner">
            <a class="home-logo" href="{{ url('/') }}"><span class="logo-mark">M.</span> MIRZA</a>
            <div class="nav-links">
                <a class="active" href="{{ url('/') }}">⌂ &nbsp;Home</a>
                <a href="{{ url('/identitas') }}">♙ &nbsp;Identitas</a>
                <a href="{{ url('/tentang') }}">▤ &nbsp;Tentang</a>
                <a href="{{ url('/visi') }}">◎ &nbsp;Visi</a>
                <a href="{{ url('/misi') }}">▧ &nbsp;Misi</a>
                <a href="{{ url('/target') }}">◉ &nbsp;Target</a>
                <a href="{{ url('/progress') }}">▥ &nbsp;Progress</a>
                <a href="{{ url('/adventure') }}">♧ &nbsp;Adventure</a>
                
                <a href="{{ route('diary.index') }}">♧ &nbsp;Diary</a>
                <a href="{{ route('conversation.create') }}">✉ &nbsp;Pesan</a>
                
@auth
    @if (auth()->user()->is_admin)
        <a href="{{ route('admin.inbox') }}">
            ✉ &nbsp;Inbox Admin
        </a>
    @endif
@endauth


            
            
               

                



            </div>
        </div>
    </nav>

    <main>
        <section class="wrap hero" id="home">
            <div class="hero-copy">
                <div class="eyebrow"><span class="eyebrow-dot"></span> MY PERSONAL SPACE</div>
                <h1>Hello, I'm<br><span>Mirza Kafie.</span></h1>
                <p class="hero-role">Pelajar <span>•</span> Terus Belajar, Terus Bertumbuh</p>
                <p class="hero-description">
                    Selamat datang di ruang kecilku. Di sini aku berbagi tentang diriku,
                    hal-hal yang ingin kucapai, dan perjalanan yang sedang kujalani
                    untuk menjadi pribadi yang lebih baik.
                </p>
                <div class="hero-actions">
                    <a href="{{ url('/identitas') }}" class="btn">Kenali Aku <span aria-hidden="true">→</span></a>
                    <a href="{{ url('/target') }}" class="btn btn-outline">Lihat Impianku</a>
                </div>
                <div class="hero-note">“Growing quietly, dreaming deeply.”</div>
            </div>

            <div class="hero-visual">
                <div class="scribble scribble-left">✧<br>Better<br>version<br>of me</div>
                <div class="portrait-frame">
                    <img src="{{ asset('images/profile.png') }}" alt="Foto profil Mirza Kafie"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="portrait-placeholder">M.</div>
                </div>
                <div class="scribble scribble-right">✧ Small<br>steps, big<br>dreams</div>
                <div class="profile-label">
                    <div class="profile-icon" aria-hidden="true">♙</div>
                    <div><strong>Mirza Kafie</strong><span>Pelajar · Terus Belajar, Terus Bertumbuh</span></div>
                </div>
            </div>
        </section>

        <section class="quick-links" id="explore">
            <div class="wrap page-grid">
                <a class="page-card" href="{{ url('/identitas') }}">
                    <div class="card-icon">♙</div><h3>Identitas</h3>
                    <p>Kenali lebih dekat siapa aku.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/visi') }}">
                    <div class="card-icon">◎</div><h3>Visi</h3>
                    <p>Apa yang ingin kucapai di masa depan.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/misi') }}">
                    <div class="card-icon">⌖</div><h3>Misi</h3>
                    <p>Langkah-langkah yang akan aku lakukan.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/tentang') }}">
                    <div class="card-icon">▤</div><h3>Tentang</h3>
                    <p>Cerita dan perjalanan saya sejauh ini.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/target') }}">
                    <div class="card-icon">◉</div><h3>Target</h3>
                    <p>Rencana dan tujuan yang ingin dicapai.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/progress') }}">
                    <div class="card-icon">▥</div><h3>Progress</h3>
                    <p>Perkembangan dan pencapaian saya.</p><span class="card-arrow">›</span>
                </a>
                <a class="page-card" href="{{ url('/adventure') }}">
                    <div class="card-icon">♧</div><h3>Adventure</h3>
                    <p>Game petualangan buatanku sendiri.</p><span class="card-arrow">›</span>
                </a>
            </div>
        </section>

        <section class="wrap section" id="about">
            <div class="about-grid">
                <div class="about-copy">
                    <span class="section-tag">Tentang Saya</span>
                    <h2>Kenapa Saya<br><span>Membuat Website Ini?</span></h2>
                    <p>
                        Saya membuat website ini sebagai tempat untuk mengenalkan diri,
                        berbagi mimpi, dan mendokumentasikan perjalanan saya, baik di dunia
                        pendidikan, teknologi, maupun hal-hal yang saya sukai.
                    </p>
                    <p class="handwritten">Terus belajar,<br>terus berkembang. ↗</p>
                </div>

                <div class="skills">
                    <h3 class="skills-title"><span>⚙</span> Hal yang Sedang Kupelajari</h3>
                    <div class="skill">
                        <span class="skill-icon">📘</span><div class="skill-info">
                            <div class="skill-name">Pelajaran Sekolah</div><div class="skill-track"><div class="skill-fill" style="width:75%"></div></div>
                        </div><span class="skill-value">75%</span>
                    </div>
                    <div class="skill">
                        <span class="skill-icon">💻</span><div class="skill-info">
                            <div class="skill-name">Komputer & Teknologi</div><div class="skill-track"><div class="skill-fill" style="width:60%"></div></div>
                        </div><span class="skill-value">60%</span>
                    </div>
                    <div class="skill">
                        <span class="skill-icon">🌱</span><div class="skill-info">
                            <div class="skill-name">Pengembangan Diri</div><div class="skill-track"><div class="skill-fill" style="width:70%"></div></div>
                        </div><span class="skill-value">70%</span>
                    </div>
                    <div class="skill">
                        <span class="skill-icon">🗣️</span><div class="skill-info">
                            <div class="skill-name">Belajar Bahasa Inggris</div><div class="skill-track"><div class="skill-fill" style="width:45%"></div></div>
                        </div><span class="skill-value">45%</span>
                    </div>
                </div>

                <div class="quote-card">
                    <div class="quote-mark">“</div>
                    <blockquote>Bukan tentang menjadi yang terbaik, tapi tentang menjadi versi terbaik dari diri sendiri.</blockquote>
                    <p>— Mirza Kafie</p>
                </div>
            </div>
        </section>

        <section class="wrap dream-section" id="dreams">
            <div class="dream-banner">
                <div>
                    <small>MY BIGGEST REASON</small>
                    <h2>Aku ingin tumbuh,<br>bukan hanya untuk diriku sendiri.</h2>
                    <p>
                        Salah satu impian terbesarku adalah membahagiakan orang tua.
                        Aku ingin suatu hari nanti bisa mengajak mereka berkeliling dunia
                        dan beribadah umrah bersama. Semoga setiap usaha kecil hari ini
                        menjadi bagian dari jalan menuju impian itu.
                    </p>
                    <a href="{{ url('/target') }}" class="btn">Kenali Targetku →</a>
                </div>
                <div class="dream-symbol" aria-hidden="true">🤎</div>
            </div>
            <div class="home-quote">
                <div class="quote-mark">“</div>
                <blockquote>Aku tidak harus menjadi yang terbaik di antara semua orang. Aku hanya ingin terus menjadi lebih baik dari diriku yang kemarin.</blockquote>
                <p>MY JOURNEY · MY GROWTH · MY STORY</p>
            </div>
        </section>
    </main>

    <footer class="home-footer">
        <div class="wrap footer-inner">
            <div class="footer-brand">
                <span class="logo-mark">M.</span>
                <div><strong>MIRZA KAFIE</strong><span>Pelajar · Terus Belajar, Terus Bertumbuh</span></div>
            </div>
            <div class="footer-center">♡ &nbsp; Terima kasih sudah berkunjung! &nbsp; ♡</div>
            <div class="footer-copy">© {{ date('Y') }} Mirza Kafie. All rights reserved.</div>
        </div>
  div>
</body>
</html>  </footer>
</
