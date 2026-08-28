
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pengaduan Berhasil | SAPA SPI UIN Kendari</title>

    <meta name="description"
        content="Pengaduan berhasil dikirim melalui SAPA SPI UIN Kendari">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <style>
        :root {
            --primary: #087443;
            --primary-dark: #055b34;
            --primary-light: #eaf7f0;
            --gold: #c89b3c;
            --dark: #10251b;
            --text: #52635a;
            --muted: #819088;
            --light: #f7faf8;
            --white: #ffffff;
            --border: #dfe8e3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f6f9f7;
            color: var(--dark);
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* =========================
           NAVBAR
        ========================== */

        .navbar {
            height: 75px;
            background: white;
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            width: min(1120px, calc(100% - 32px));
            height: 100%;
            margin: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-logo {
            width: 42px;
            height: 42px;

            border-radius: 11px;
            background: var(--primary);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 19px;
        }

        .brand-text strong {
            display: block;
            font-size: 15px;
        }

        .brand-text span {
            display: block;
            font-size: 10px;
            color: var(--muted);
        }

        /* =========================
           PAGE
        ========================== */

        .page {
            min-height: calc(100vh - 75px);

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 50px 20px 70px;
        }

        .success-wrapper {
            width: min(560px, 100%);
        }

        /* =========================
           SUCCESS CARD
        ========================== */

        .success-card {
            background: white;

            border: 1px solid var(--border);
            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 20px 60px rgba(16, 37, 27, .08);
        }

        .success-top {
            text-align: center;
            padding: 38px 30px 28px;
        }

        .success-icon {
            width: 68px;
            height: 68px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background: var(--primary-light);
            color: var(--primary);

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 32px;
        }

        .success-top h1 {
            font-size: 25px;
            letter-spacing: -.5px;

            margin-bottom: 9px;
        }

        .success-top p {
            color: var(--text);
            font-size: 12px;
            line-height: 1.7;
        }

        /* =========================
           TICKET INFO
        ========================== */

        .ticket-box {
            margin: 0 25px;

            border: 1px solid var(--border);
            border-radius: 14px;

            overflow: hidden;
        }

        .ticket-row {
            padding: 18px 20px;

            border-bottom: 1px solid var(--border);
        }

        .ticket-row:last-child {
            border-bottom: none;
        }

        .ticket-label {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 7px;
        }

        .ticket-label span {
            font-size: 10px;
            font-weight: 700;
            color: var(--muted);

            text-transform: uppercase;
            letter-spacing: .5px;
        }

        .copy-button {
            border: none;
            background: none;

            color: var(--primary);

            cursor: pointer;

            font-family: inherit;
            font-size: 10px;
            font-weight: 700;

            display: flex;
            align-items: center;
            gap: 5px;
        }

        .copy-button:hover {
            color: var(--primary-dark);
        }

        .ticket-value {
            background: var(--light);

            border-radius: 8px;

            padding: 12px;

            font-size: 18px;
            font-weight: 800;

            letter-spacing: 1.2px;

            text-align: center;

            color: var(--dark);
        }

        .access-value {
            letter-spacing: 3px;
        }

        /* =========================
           WARNING
        ========================== */

        .important {
            margin: 22px 25px 0;

            padding: 15px;

            background: #fffaf0;
            border: 1px solid #f1dfad;

            border-radius: 10px;

            display: flex;
            gap: 10px;

            color: #735b21;
        }

        .important i {
            font-size: 16px;
            margin-top: 1px;
        }

        .important strong {
            display: block;
            font-size: 11px;
            margin-bottom: 3px;
        }

        .important p {
            font-size: 10px;
            line-height: 1.6;
        }

        /* =========================
           ACTIONS
        ========================== */

        .actions {
            padding: 25px;

            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn {
            width: 100%;

            border: none;

            padding: 13px 18px;

            border-radius: 9px;

            font-family: inherit;
            font-size: 12px;
            font-weight: 700;

            cursor: pointer;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            transition: .2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: white;
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-secondary:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* =========================
           FOOTER
        ========================== */

        .footer-note {
            text-align: center;

            margin-top: 20px;

            color: var(--muted);

            font-size: 10px;
        }

        /* =========================
           MOBILE
        ========================== */

        @media(max-width: 600px) {

            .page {
                padding: 30px 15px 50px;
            }

            .success-top {
                padding: 30px 20px 25px;
            }

            .success-top h1 {
                font-size: 22px;
            }

            .ticket-box {
                margin: 0 18px;
            }

            .important {
                margin-left: 18px;
                margin-right: 18px;
            }

            .actions {
                padding: 20px 18px;
            }

            .ticket-value {
                font-size: 16px;
            }
        }
    </style>

</head>

<body>

<div id="app">

    <!-- NAVBAR -->

    <header class="navbar">

        <div class="nav-inner">

            <a href="/" class="brand">

                <div class="brand-logo">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="brand-text">

                    <strong>SAPA SPI</strong>

                    <span>
                        UIN Kendari
                    </span>

                </div>

            </a>

        </div>

    </header>


    <!-- CONTENT -->

    <main class="page">

        <div class="success-wrapper">

            <div class="success-card">

                <!-- SUCCESS -->

                <div class="success-top">

                    <div class="success-icon">

                        <i class="bi bi-check-lg"></i>

                    </div>

                    <h1>
                        Pengaduan Berhasil Dikirim
                    </h1>

                    <p>
                        Terima kasih telah menyampaikan aspirasi atau
                        pengaduan melalui SAPA SPI UIN Kendari.
                    </p>

                </div>


                <!-- TICKET -->

                <div class="ticket-box">

                    <!-- NOMOR -->

                    <div class="ticket-row">

                        <div class="ticket-label">

                            <span>
                                Nomor Pengaduan
                            </span>

                            <button
                                type="button"
                                class="copy-button"
                                @click="copyText(ticketNumber)"
                            >

                                <i class="bi bi-copy"></i>

                                @{{ copied === 'ticket'
                                    ? 'Tersalin'
                                    : 'Salin'
                                }}

                            </button>

                        </div>

                        <div class="ticket-value">

                            @{{ ticketNumber }}

                        </div>

                    </div>


                    <!-- KODE AKSES -->

                    <div class="ticket-row">

                        <div class="ticket-label">

                            <span>
                                Kode Akses
                            </span>

                            <button
                                type="button"
                                class="copy-button"
                                @click="copyText(accessCode)"
                            >

                                <i class="bi bi-copy"></i>

                                @{{ copied === 'access'
                                    ? 'Tersalin'
                                    : 'Salin'
                                }}

                            </button>

                        </div>

                        <div class="ticket-value access-value">

                            @{{ accessCode }}

                        </div>

                    </div>

                </div>


                <!-- IMPORTANT -->

                <div class="important">

                    <i class="bi bi-exclamation-triangle"></i>

                    <div>

                        <strong>
                            Simpan informasi ini
                        </strong>

                        <p>
                            Nomor Pengaduan dan Kode Akses diperlukan
                            untuk melihat perkembangan laporan Anda.
                            Jangan berikan Kode Akses kepada orang lain.
                        </p>

                    </div>

                </div>


                <!-- ACTIONS -->

                <div class="actions">

                    <button
                        type="button"
                        class="btn btn-primary"
                        @click="goToTracking"
                    >

                        <i class="bi bi-search"></i>

                        Lihat Status Pengaduan

                    </button>


                    <button
                        type="button"
                        class="btn btn-secondary"
                        @click="printPage"
                    >

                        <i class="bi bi-printer"></i>

                        Cetak / Simpan Bukti

                    </button>


                    <a
                        href="/"
                        class="btn btn-secondary"
                    >

                        <i class="bi bi-house"></i>

                        Kembali ke Beranda

                    </a>

                </div>

            </div>


            <div class="footer-note">

                SAPA SPI · Sarana Aspirasi dan Pengaduan
                <br>
                UIN Kendari

            </div>

        </div>

    </main>

</div>


<script>

const { createApp } = Vue;

createApp({

    data() {

        return {

            /*
             * DATA DUMMY
             *
             * Nanti berasal dari response Laravel
             */

            ticketNumber: 'SAPA-20260828-00125',

            accessCode: '8F7K-29PX',

            copied: ''

        };

    },


    methods: {

        async copyText(value) {

            try {

                await navigator.clipboard.writeText(value);

                if (value === this.ticketNumber) {

                    this.copied = 'ticket';

                } else {

                    this.copied = 'access';

                }

                setTimeout(() => {

                    this.copied = '';

                }, 2000);

            } catch (error) {

                alert(
                    'Gagal menyalin. Silakan salin secara manual.'
                );

            }

        },


        goToTracking() {

            /*
             * Nanti diarahkan ke:
             *
             * /pengaduan/cek
             */

            window.location.href =
                '/pengaduan/cek';

        },


        printPage() {

            window.print();

        }

    }

}).mount('#app');

</script>

</body>

</html>

