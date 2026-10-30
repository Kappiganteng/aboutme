
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox Admin | AboutMe</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: #F8F3EA;
            color: #352B24;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #352B24;
            color: #FFFCF7;
            padding: 22px 7%;
        }

        .navbar h2 {
            margin: 0;
            letter-spacing: 1px;
        }

        .navbar p {
            color: #D9C5AE;
            font-size: 12px;
            margin-bottom: 0;
        }

        .container {
            max-width: 1050px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome {
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin-bottom: 8px;
        }

        .welcome p {
            color: #857568;
            font-size: 14px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 35px;
        }

        .stat-card {
            background: #FFFCF7;
            border: 1px solid #E8DCCB;
            border-radius: 15px;
            padding: 22px;
        }

        .stat-card h2 {
            margin: 0 0 8px;
            font-size: 30px;
            color: #765C46;
        }

        .stat-card p {
            margin: 0;
            color: #857568;
            font-size: 13px;
        }

        .inbox-card {
            background: #FFFCF7;
            padding: 25px;
            border-radius: 18px;
            border: 1px solid #E8DCCB;
        }

        .inbox-card h2 {
            margin-top: 0;
            margin-bottom: 22px;
        }

        .conversation {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 18px;
            margin-bottom: 12px;
            border: 1px solid #E8DCCB;
            border-radius: 13px;
            text-decoration: none;
            color: inherit;
            transition: .2s;
        }

        .conversation:hover {
            background: #F8F3EA;
            transform: translateY(-2px);
        }

        .avatar {
            width: 45px;
            height: 45px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #E8DCCB;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #765C46;
            font-weight: bold;
        }

        .details {
            flex: 1;
            min-width: 0;
        }

        .details h3 {
            margin: 0 0 6px;
            font-size: 15px;
        }

        .details p {
            margin: 0;
            color: #857568;
            font-size: 13px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .count {
            color: #765C46;
            font-size: 12px;
            white-space: nowrap;
        }

        .empty {
            padding: 35px;
            text-align: center;
            color: #857568;
        }

        @media (max-width: 600px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .container {
                margin-top: 25px;
            }

            .inbox-card {
                padding: 15px;
            }

            .conversation {
                padding: 12px;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <header class="navbar">
        <h2>ABOUTME.</h2>
        <p>PERSONAL ADMIN DASHBOARD</p>
    </header>

    <main class="container">

        <section class="welcome">
            <h1>Halo, Mirza! 👋</h1>
            <p>Selamat datang di pusat pesan AboutMe kamu.</p>
        </section>

        <section class="stats">

            <div class="stat-card">
                <h2>{{ $totalConversations }}</h2>
                <p>Total Percakapan</p>
            </div>

            <div class="stat-card">
                <h2>{{ $totalMessages }}</h2>
                <p>Total Pesan</p>
            </div>

            <div class="stat-card">
                <h2>{{ $unreadMessages }}</h2>
                <p>Pesan Belum Dibaca</p>
            </div>

        </section>

        <section class="inbox-card">

            <h2>✉ Pesan Masuk</h2>

            @forelse ($conversations as $conversation)

                @php
                    $lastMessage = $conversation->messages->last();
                @endphp

                <a
                    href="{{ route('admin.conversations.show', $conversation->id) }}"
                    class="conversation"
                >

                    <div class="avatar">
                        {{ strtoupper(substr($conversation->nama, 0, 1)) }}
                    </div>

                    <div class="details">

                        <h3>{{ $conversation->nama }}</h3>

                        <p>
                            {{ $lastMessage
                                ? $lastMessage->body
                                : 'Belum ada pesan.' }}
                        </p>

                    </div>

                    <div class="count">
                        {{ $conversation->messages_count }} pesan
                    </div>

                </a>

            @empty

                <div class="empty">
                    <h3>Belum ada pesan masuk</h3>
                    <p>Pesan dari pengunjung akan muncul di sini.</p>
                </div>

            @endforelse

        </section>

    </main>

</body>
</html>
