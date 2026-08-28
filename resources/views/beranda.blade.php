<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SAPA SPI | UIN Kendari</title>

    <meta name="description"
        content="SAPA SPI - Sarana Aspirasi dan Pengaduan UIN Kendari">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vue 3 CDN -->
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
            --border: #e4ebe7;
            --shadow: 0 20px 60px rgba(16, 37, 27, .08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            background: var(--white);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1120px, calc(100% - 40px));
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            height: 78px;
            display: flex;
            align-items: center;
            position: relative;
            z-index: 20;
        }

        .nav-inner {
            width: min(1120px, calc(100% - 40px));
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-logo {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 800;
        }

        .brand-text strong {
            display: block;
            font-size: 16px;
            letter-spacing: -.3px;
        }

        .brand-text span {
            font-size: 11px;
            color: var(--muted);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .nav-menu a {
            font-size: 14px;
            color: var(--text);
            font-weight: 500;
            transition: .2s;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        .nav-button {
            padding: 11px 18px;
            border-radius: 9px;
            background: var(--primary);
            color: white !important;
        }

        .nav-button:hover {
            background: var(--primary-dark);
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            overflow: hidden;
            padding: 75px 0 90px;
            background:
                radial-gradient(circle at 85% 25%, rgba(8, 116, 67, .10), transparent 25%),
                linear-gradient(180deg, #ffffff 0%, #f5faf7 100%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 70px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            border-radius: 50px;
            background: var(--primary-light);
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .badge i {
            font-size: 13px;
        }

        .hero h1 {
            font-size: clamp(42px, 5vw, 64px);
            line-height: 1.05;
            letter-spacing: -2.5px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-desc {
            max-width: 580px;
            color: var(--text);
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            padding: 14px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            transition: .2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-outline {
            border: 1px solid var(--border);
            background: white;
            color: var(--dark);
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        /* Hero Card */

        .hero-card-wrapper {
            position: relative;
        }

        .hero-card {
            background: white;
            border-radius: 24px;
            padding: 25px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(8, 116, 67, .08);
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .card-header strong {
            font-size: 14px;
        }

        .status {
            font-size: 11px;
            padding: 6px 10px;
            border-radius: 20px;
            background: #fff7df;
            color: #9a7115;
            font-weight: 700;
        }

        .ticket {
            padding: 20px;
            background: var(--light);
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .ticket small {
            color: var(--muted);
            font-size: 11px;
        }

        .ticket-number {
            font-size: 22px;
            font-weight: 800;
            margin-top: 4px;
            color: var(--primary);
        }

        .progress {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 28px;
        }

        .progress::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            height: 2px;
            background: var(--border);
        }

        .progress-step {
            position: relative;
            z-index: 2;
            text-align: center;
            font-size: 10px;
            color: var(--muted);
        }

        .progress-dot {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #e3ebe6;
            margin: auto auto 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
        }

        .progress-step.active {
            color: var(--primary);
            font-weight: 700;
        }

        .progress-step.active .progress-dot {
            background: var(--primary);
            color: white;
        }

        .floating-card {
            position: absolute;
            bottom: -25px;
            left: -30px;
            background: white;
            padding: 14px 17px;
            border-radius: 13px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .10);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 12px;
            font-weight: 600;
        }

        .floating-icon {
            width: 35px;
            height: 35px;
            border-radius: 10px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* =========================
           STATISTICS
        ========================= */

        .statistics {
            margin-top: -35px;
            position: relative;
            z-index: 5;
        }

        .stats-box {
            background: white;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            border-radius: 18px;
            padding: 28px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }

        .stat {
            text-align: center;
            padding: 0 20px;
            border-right: 1px solid var(--border);
        }

        .stat:last-child {
            border: none;
        }

        .stat-number {
            font-size: 27px;
            font-weight: 800;
            color: var(--primary);
        }

        .stat-label {
            font-size: 12px;
            color: var(--muted);
            margin-top: 3px;
        }

        /* =========================
           SECTION
        ========================= */

        section {
            padding: 95px 0;
        }

        .section-header {
            text-align: center;
            max-width: 650px;
            margin: 0 auto 50px;
        }

        .section-label {
            color: var(--primary);
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 1.5px;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 34px;
            letter-spacing: -1px;
            margin-bottom: 12px;
        }

        .section-desc {
            color: var(--text);
            font-size: 14px;
        }

        /* =========================
           HOW IT WORKS
        ========================= */

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .step {
            padding: 27px;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: white;
            transition: .25s;
        }

        .step:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .step-number {
            color: var(--gold);
            font-size: 12px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .step-icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-bottom: 18px;
        }

        .step h3 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .step p {
            color: var(--text);
            font-size: 13px;
            line-height: 1.7;
        }

        /* =========================
           TYPES
        ========================= */

        .types-section {
            background: var(--light);
        }

        .types {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .type-card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            border: 1px solid var(--border);
        }

        .type-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            font-size: 18px;
        }

        .type-card h3 {
            font-size: 15px;
            margin-bottom: 7px;
        }

        .type-card p {
            font-size: 12px;
            color: var(--muted);
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            background: var(--primary);
            color: white;
            border-radius: 25px;
            padding: 55px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
        }

        .cta h2 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .cta p {
            color: rgba(255, 255, 255, .75);
            font-size: 14px;
        }

        .cta .btn {
            background: white;
            color: var(--primary);
            white-space: nowrap;
        }

        /* =========================
           FAQ
        ========================= */

        .faq-list {
            max-width: 780px;
            margin: auto;
        }

        .faq-item {
            border-bottom: 1px solid var(--border);
        }

        .faq-question {
            width: 100%;
            padding: 20px 0;
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            color: var(--dark);
            text-align: left;
        }

        .faq-answer {
            color: var(--text);
            font-size: 13px;
            padding: 0 30px 20px 0;
            line-height: 1.7;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #0d2118;
            color: white;
            padding: 55px 0 25px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 50px;
            padding-bottom: 40px;
        }

        .footer-brand {
            max-width: 350px;
        }

        .footer-brand h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .footer-brand p {
            color: rgba(255, 255, 255, .55);
            font-size: 12px;
            line-height: 1.8;
        }

        .footer-column h4 {
            font-size: 13px;
            margin-bottom: 16px;
        }

        .footer-column a {
            display: block;
            color: rgba(255, 255, 255, .55);
            font-size: 12px;
            margin-bottom: 10px;
        }

        .footer-column a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, .08);
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            color: rgba(255, 255, 255, .4);
            font-size: 11px;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 900px) {

            .nav-menu {
                display: none;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .hero {
                padding-top: 45px;
            }

            .steps,
            .types {
                grid-template-columns: repeat(2, 1fr);
            }

            .cta {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 600px) {

            .container,
            .nav-inner {
                width: min(100% - 28px, 1120px);
            }

            .hero h1 {
                font-size: 43px;
                letter-spacing: -1.8px;
            }

            .stats-box {
                grid-template-columns: repeat(2, 1fr);
                gap: 25px 0;
            }

            .stat:nth-child(2) {
                border: none;
            }

            .steps,
            .types {
                grid-template-columns: 1fr;
            }

            section {
                padding: 70px 0;
            }

            .section-title {
                font-size: 28px;
            }

            .cta {
                padding: 35px 25px;
            }

            .cta h2 {
                font-size: 25px;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 8px;
            }

            .floating-card {
                left: 10px;
            }
        }
    </style>
</head>

<body>

<div id="app">

    <!-- =========================
         NAVBAR
    ========================== -->

    <header class="navbar">
        <div class="nav-inner">

            <a href="#" class="brand">
                <div class="brand-logo">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="brand-text">
                    <strong>SAPA SPI</strong>
                    <span>UIN Kendari</span>
                </div>
            </a>

            <nav class="nav-menu">
                <a href="#beranda">Beranda</a>
                <a href="#cara-kerja">Cara Kerja</a>
                <a href="#jenis">Jenis Laporan</a>
                <a href="#faq">FAQ</a>
                <a href="/lacak" class="nav-button">
                    Lacak Pengaduan
                </a>
            </nav>

        </div>
    </header>


    <!-- =========================
         HERO
    ========================== -->

    <main id="beranda">

        <section class="hero">

            <div class="container hero-grid">

                <div>

                    <div class="badge">
                        <i class="bi bi-patch-check-fill"></i>
                        Layanan Resmi SPI UIN Kendari
                    </div>

                    <h1>
                        Suarakan Aspirasi,<br>
                        <span>Kawal Integritas.</span>
                    </h1>

                    <p class="hero-desc">
                        SAPA SPI adalah sarana bagi sivitas akademika dan masyarakat
                        untuk menyampaikan aspirasi, pengaduan, informasi, maupun
                        dugaan pelanggaran di lingkungan UIN Kendari.
                    </p>

                    <div class="hero-buttons">

                        <a href="/pengaduan" class="btn btn-primary">
                            <i class="bi bi-send-fill"></i>
                            Sampaikan Pengaduan
                        </a>

                        <a href="/lacak" class="btn btn-outline">
                            <i class="bi bi-search"></i>
                            Lacak Pengaduan
                        </a>

                    </div>

                </div>


                <div class="hero-card-wrapper">

                    <div class="hero-card">

                        <div class="card-header">
                            <strong>Status Pengaduan</strong>
                            <span class="status">
                                Dalam Proses
                            </span>
                        </div>

                        <div class="ticket">

                            <small>Nomor Pengaduan</small>

                            <div class="ticket-number">
                                SAP-2026-000123
                            </div>

                        </div>


                        <div class="progress">

                            <div class="progress-step active">
                                <div class="progress-dot">
                                    <i class="bi bi-check"></i>
                                </div>
                                Diajukan
                            </div>

                            <div class="progress-step active">
                                <div class="progress-dot">
                                    <i class="bi bi-check"></i>
                                </div>
                                Diterima
                            </div>

                            <div class="progress-step active">
                                <div class="progress-dot">
                                    <i class="bi bi-check"></i>
                                </div>
                                Verifikasi
                            </div>

                            <div class="progress-step">
                                <div class="progress-dot"></div>
                                Selesai
                            </div>

                        </div>

                    </div>


                    <div class="floating-card">

                        <div class="floating-icon">
                            <i class="bi bi-lock-fill"></i>
                        </div>

                        <div>
                            <div>Data Anda Terjaga</div>
                            <small style="color:#819088">
                                Privasi pelapor diperhatikan
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             STATISTICS
        ========================== -->

        <div class="statistics">

            <div class="container">

                <div class="stats-box">

                    <div class="stat">
                        <div class="stat-number">
                            @{{ stats.total }}
                        </div>
                        <div class="stat-label">
                            Total Laporan
                        </div>
                    </div>

                    <div class="stat">
                        <div class="stat-number">
                            @{{ stats.process }}
                        </div>
                        <div class="stat-label">
                            Sedang Diproses
                        </div>
                    </div>

                    <div class="stat">
                        <div class="stat-number">
                            @{{ stats.verification }}
                        </div>
                        <div class="stat-label">
                            Dalam Verifikasi
                        </div>
                    </div>

                    <div class="stat">
                        <div class="stat-number">
                            @{{ stats.completed }}
                        </div>
                        <div class="stat-label">
                            Telah Selesai
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             CARA KERJA
        ========================== -->

        <section id="cara-kerja">

            <div class="container">

                <div class="section-header">

                    <div class="section-label">
                        Mudah & Transparan
                    </div>

                    <h2 class="section-title">
                        Bagaimana SAPA SPI bekerja?
                    </h2>

                    <p class="section-desc">
                        Setiap laporan akan melalui proses yang terstruktur
                        agar dapat ditangani secara tepat dan bertanggung jawab.
                    </p>

                </div>


                <div class="steps">

                    <div class="step">

                        <div class="step-number">
                            01
                        </div>

                        <div class="step-icon">
                            <i class="bi bi-pencil-square"></i>
                        </div>

                        <h3>Sampaikan</h3>

                        <p>
                            Isi formulir dengan informasi yang jelas dan
                            lengkap mengenai pengaduan atau aspirasi Anda.
                        </p>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            02
                        </div>

                        <div class="step-icon">
                            <i class="bi bi-inbox"></i>
                        </div>

                        <h3>Diterima</h3>

                        <p>
                            Laporan Anda diterima dan dicatat dalam sistem
                            SAPA SPI untuk diproses.
                        </p>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            03
                        </div>

                        <div class="step-icon">
                            <i class="bi bi-search"></i>
                        </div>

                        <h3>Diverifikasi</h3>

                        <p>
                            Tim SPI melakukan pemeriksaan terhadap informasi
                            dan kelengkapan laporan.
                        </p>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            04
                        </div>

                        <div class="step-icon">
                            <i class="bi bi-check-circle"></i>
                        </div>

                        <h3>Ditindaklanjuti</h3>

                        <p>
                            Laporan yang memenuhi syarat akan ditindaklanjuti
                            sampai prosesnya selesai.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             JENIS LAPORAN
        ========================== -->

        <section id="jenis" class="types-section">

            <div class="container">

                <div class="section-header">

                    <div class="section-label">
                        Sampaikan kepada kami
                    </div>

                    <h2 class="section-title">
                        Apa yang ingin Anda sampaikan?
                    </h2>

                    <p class="section-desc">
                        SAPA SPI dapat digunakan untuk berbagai bentuk
                        aspirasi dan pengaduan.
                    </p>

                </div>


                <div class="types">

                    <div class="type-card">

                        <div class="type-icon">
                            <i class="bi bi-chat-left-text"></i>
                        </div>

                        <h3>Pengaduan</h3>

                        <p>
                            Sampaikan keluhan atau permasalahan terkait
                            layanan dan penyelenggaraan kegiatan.
                        </p>

                    </div>


                    <div class="type-card">

                        <div class="type-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>

                        <h3>Aspirasi</h3>

                        <p>
                            Berikan ide, saran, dan masukan untuk meningkatkan
                            kualitas layanan UIN Kendari.
                        </p>

                    </div>


                    <div class="type-card">

                        <div class="type-icon">
                            <i class="bi bi-info-circle"></i>
                        </div>

                        <h3>Informasi</h3>

                        <p>
                            Sampaikan informasi yang perlu diketahui atau
                            mendapatkan perhatian SPI.
                        </p>

                    </div>


                    <div class="type-card">

                        <div class="type-icon">
                            <i class="bi bi-shield-exclamation"></i>
                        </div>

                        <h3>Dugaan Pelanggaran</h3>

                        <p>
                            Laporkan dugaan pelanggaran atau penyimpangan
                            yang terjadi di lingkungan UIN Kendari.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- =========================
             CTA
        ========================== -->

        <section>

            <div class="container">

                <div class="cta">

                    <div>
                        <h2>
                            Punya sesuatu yang ingin disampaikan?
                        </h2>

                        <p>
                            Jangan ragu. Sampaikan melalui SAPA SPI.
                        </p>
                    </div>

                    <a href="/pengaduan" class="btn">
                        <i class="bi bi-send"></i>
                        Sampaikan Pengaduan
                    </a>

                </div>

            </div>

        </section>


        <!-- =========================
             FAQ
        ========================== -->

        <section id="faq">

            <div class="container">

                <div class="section-header">

                    <div class="section-label">
                        Pertanyaan Umum
                    </div>

                    <h2 class="section-title">
                        Frequently Asked Questions
                    </h2>

                </div>


                <div class="faq-list">

                    <div
                        class="faq-item"
                        v-for="(faq, index) in faqs"
                        :key="index"
                    >

                        <button
                            class="faq-question"
                            @click="toggleFaq(index)"
                        >

                            <span>
                                @{{ faq.question }}
                            </span>

                            <i
                                class="bi"
                                :class="faq.open
                                    ? 'bi-chevron-up'
                                    : 'bi-chevron-down'"
                            ></i>

                        </button>

                        <div
                            class="faq-answer"
                            v-if="faq.open"
                        >
                            @{{ faq.answer }}
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        <div class="container">

            <div class="footer-grid">

                <div class="footer-brand">

                    <h3>SAPA SPI</h3>

                    <p>
                        Sarana Aspirasi dan Pengaduan untuk mendukung
                        tata kelola yang transparan, akuntabel,
                        dan berintegritas di lingkungan UIN Kendari.
                    </p>

                </div>


                <div class="footer-column">

                    <h4>Navigasi</h4>

                    <a href="#beranda">Beranda</a>
                    <a href="#cara-kerja">Cara Kerja</a>
                    <a href="#jenis">Jenis Laporan</a>
                    <a href="#faq">FAQ</a>

                </div>


                <div class="footer-column">

                    <h4>Layanan</h4>

                    <a href="/pengaduan">Sampaikan Pengaduan</a>
                    <a href="/lacak">Lacak Pengaduan</a>

                </div>

            </div>


            <div class="footer-bottom">

                <span>
                    © @{{ new Date().getFullYear() }} SAPA SPI — UIN Kendari
                </span>

                <span>
                    Satuan Pengawasan Internal
                </span>

            </div>

        </div>

    </footer>

</div>


<!-- =========================
     VUE
========================== -->

<script>

    const { createApp } = Vue;

    createApp({

        data() {

            return {

                stats: {
                    total: 128,
                    process: 18,
                    verification: 24,
                    completed: 86
                },

                faqs: [

                    {
                        question: 'Siapa yang dapat menyampaikan pengaduan?',
                        answer: 'SAPA SPI dapat digunakan oleh sivitas akademika maupun masyarakat yang memiliki aspirasi, informasi, atau pengaduan terkait lingkungan UIN Kendari.',
                        open: false
                    },

                    {
                        question: 'Apakah identitas pelapor dirahasiakan?',
                        answer: 'SAPA SPI menyediakan pilihan untuk menjaga kerahasiaan identitas pelapor. Informasi pelapor akan dikelola sesuai dengan ketentuan dan kebutuhan penanganan laporan.',
                        open: false
                    },

                    {
                        question: 'Bagaimana cara mengetahui perkembangan pengaduan?',
                        answer: 'Setelah pengaduan dikirim, pelapor akan memperoleh nomor pengaduan dan kode akses. Keduanya dapat digunakan untuk melihat perkembangan laporan melalui halaman Lacak Pengaduan.',
                        open: false
                    },

                    {
                        question: 'Bagaimana jika saya lupa nomor pengaduan atau kode akses?',
                        answer: 'Untuk laporan yang menggunakan identitas dan kontak yang dapat diverifikasi, tersedia mekanisme pemulihan akses. Ketentuan pemulihan akan disesuaikan dengan data kontak yang diberikan saat pengaduan dibuat.',
                        open: false
                    },

                    {
                        question: 'Apakah semua laporan pasti ditindaklanjuti?',
                        answer: 'Setiap laporan akan melalui proses penerimaan dan verifikasi terlebih dahulu. Laporan yang memenuhi ketentuan dan berada dalam kewenangan SPI akan diproses sesuai prosedur yang berlaku.',
                        open: false
                    }

                ]

            }

        },

        methods: {

            toggleFaq(index) {

                this.faqs[index].open =
                    !this.faqs[index].open;

            }

        }

    }).mount('#app');

</script>

</body>
</html>