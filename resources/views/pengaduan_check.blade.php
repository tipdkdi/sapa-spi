
<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Cek Pengaduan | SAPA SPI UIN Kendari</title>

    <meta name="description"
        content="Cek status pengaduan SAPA SPI UIN Kendari">

    <!-- Google Font -->

    <link rel="preconnect"
        href="https://fonts.googleapis.com">

    <link rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Vue -->

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

            --danger: #c0392b;

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

            border-bottom:
                1px solid var(--border);

        }


        .nav-inner {

            width:
                min(1120px, calc(100% - 32px));

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


        .back-link {

            display: flex;

            align-items: center;

            gap: 7px;

            color: var(--text);

            font-size: 13px;

            font-weight: 500;

        }


        .back-link:hover {

            color: var(--primary);

        }


        /* =========================
           PAGE
        ========================== */

        .page {

            min-height:
                calc(100vh - 75px);

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 50px 20px 70px;

        }


        .wrapper {

            width:
                min(530px, 100%);

        }


        .header {

            text-align: center;

            margin-bottom: 27px;

        }


        .label {

            display: inline-block;

            padding: 7px 12px;

            background:
                var(--primary-light);

            color:
                var(--primary);

            border-radius: 30px;

            font-size: 10px;

            font-weight: 700;

            margin-bottom: 12px;

        }


        .header h1 {

            font-size: 28px;

            letter-spacing: -.6px;

            margin-bottom: 8px;

        }


        .header p {

            color: var(--text);

            font-size: 12px;

            line-height: 1.7;

        }


        /* =========================
           CARD
        ========================== */

        .card {

            background: white;

            border:
                1px solid var(--border);

            border-radius: 18px;

            padding: 27px;

            box-shadow:
                0 20px 55px
                rgba(16, 37, 27, .07);

        }


        /* =========================
           TABS
        ========================== */

        .tabs {

            display: grid;

            grid-template-columns: 1fr 1fr;

            padding: 4px;

            background: var(--light);

            border-radius: 10px;

            margin-bottom: 25px;

        }


        .tab {

            border: none;

            background: transparent;

            padding: 11px 8px;

            border-radius: 7px;

            cursor: pointer;

            font-family: inherit;

            font-size: 11px;

            font-weight: 600;

            color: var(--muted);

            transition: .2s;

        }


        .tab.active {

            background: white;

            color: var(--primary);

            box-shadow:
                0 2px 7px
                rgba(16, 37, 27, .06);

        }


        /* =========================
           FORM
        ========================== */

        .form-group {

            display: flex;

            flex-direction: column;

            gap: 7px;

            margin-bottom: 18px;

        }


        .form-group label {

            font-size: 12px;

            font-weight: 600;

        }


        input {

            width: 100%;

            padding: 13px;

            border:
                1px solid var(--border);

            border-radius: 9px;

            outline: none;

            font-family: inherit;

            font-size: 13px;

            color: var(--dark);

            transition: .2s;

        }


        input:focus {

            border-color:
                var(--primary);

            box-shadow:
                0 0 0 3px
                rgba(8,116,67,.08);

        }


        .helper {

            font-size: 10px;

            color: var(--muted);

            line-height: 1.6;

        }


        /* =========================
           BUTTON
        ========================== */

        .btn {

            width: 100%;

            border: none;

            padding: 13px;

            border-radius: 9px;

            cursor: pointer;

            font-family: inherit;

            font-size: 12px;

            font-weight: 700;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            transition: .2s;

        }


        .btn-primary {

            background:
                var(--primary);

            color: white;

        }


        .btn-primary:hover {

            background:
                var(--primary-dark);

            transform:
                translateY(-1px);

        }


        .btn-primary:disabled {

            opacity: .6;

            cursor: not-allowed;

            transform: none;

        }


        /* =========================
           FORGOT
        ========================== */

        .forgot-info {

            margin-top: 20px;

            padding: 15px;

            border:
                1px solid var(--border);

            border-radius: 10px;

            background:
                var(--light);

            display: flex;

            gap: 11px;

        }


        .forgot-info i {

            color:
                var(--primary);

            font-size: 16px;

        }


        .forgot-info strong {

            display: block;

            font-size: 11px;

            margin-bottom: 3px;

        }


        .forgot-info p {

            font-size: 10px;

            color: var(--muted);

            line-height: 1.6;

        }


        .link-button {

            margin-top: 8px;

            border: none;

            background: none;

            padding: 0;

            color:
                var(--primary);

            cursor: pointer;

            font-family: inherit;

            font-size: 10px;

            font-weight: 700;

        }


        /* =========================
           RECOVERY
        ========================== */

        .recovery-options {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 10px;

            margin-bottom: 20px;

        }


        .recovery-option {

            border:
                1px solid var(--border);

            border-radius: 10px;

            padding: 15px;

            background: white;

            cursor: pointer;

            text-align: left;

            font-family: inherit;

            transition: .2s;

        }


        .recovery-option:hover {

            border-color:
                var(--primary);

        }


        .recovery-option.active {

            border-color:
                var(--primary);

            background:
                var(--primary-light);

        }


        .recovery-option i {

            color:
                var(--primary);

            font-size: 18px;

            display: block;

            margin-bottom: 8px;

        }


        .recovery-option strong {

            display: block;

            font-size: 11px;

            margin-bottom: 3px;

        }


        .recovery-option span {

            display: block;

            font-size: 9px;

            color: var(--muted);

        }


        /* =========================
           NOTICE
        ========================== */

        .notice {

            margin-top: 18px;

            padding: 13px;

            background: #fffaf0;

            border:
                1px solid #f1dfad;

            border-radius: 9px;

            color: #735b21;

            font-size: 10px;

            line-height: 1.6;

        }


        .notice i {

            margin-right: 5px;

        }


        /* =========================
           FOOTER
        ========================== */

        .footer {

            text-align: center;

            margin-top: 18px;

            color: var(--muted);

            font-size: 9px;

            line-height: 1.6;

        }


        /* =========================
           MOBILE
        ========================== */

        @media(max-width: 600px) {

            .page {

                padding:
                    35px 15px 50px;

            }


            .card {

                padding: 20px;

            }


            .header h1 {

                font-size: 24px;

            }


            .recovery-options {

                grid-template-columns: 1fr;

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


            <a href="/" class="brand">

                <div class="brand-logo">

                    <i class="bi bi-shield-check"></i>

                </div>


                <div class="brand-text">

                    <strong>
                        SAPA SPI
                    </strong>

                    <span>
                        UIN Kendari
                    </span>

                </div>

            </a>


            <a href="/" class="back-link">

                <i class="bi bi-arrow-left"></i>

                Kembali

            </a>


        </div>

    </header>


    <!-- =========================
         PAGE
    ========================== -->

    <main class="page">

        <div class="wrapper">


            <div class="header">

                <div class="label">

                    CEK PENGADUAN

                </div>


                <h1>

                    Pantau Pengaduan Anda

                </h1>


                <p>

                    Masukkan informasi pengaduan untuk melihat
                    perkembangan laporan yang telah Anda sampaikan.

                </p>

            </div>


            <div class="card">


                <!-- =========================
                     TABS
                ========================== -->

                <div class="tabs">

                    <button
                        type="button"
                        class="tab"
                        :class="{ active: mode === 'check' }"
                        @click="mode = 'check'"
                    >

                        <i class="bi bi-search"></i>

                        Cek Pengaduan

                    </button>


                    <button
                        type="button"
                        class="tab"
                        :class="{ active: mode === 'recovery' }"
                        @click="mode = 'recovery'"
                    >

                        <i class="bi bi-key"></i>

                        Lupa Akses

                    </button>

                </div>


                <!-- ==================================================
                     CEK PENGADUAN
                =================================================== -->

                <div v-if="mode === 'check'">


                    <form
                        @submit.prevent="checkComplaint"
                    >


                        <!-- NOMOR -->

                        <div class="form-group">

                            <label>

                                Nomor Pengaduan

                            </label>


                            <input
                                type="text"
                                v-model="form.ticket"
                                placeholder="Contoh: SAPA-20260828-00125"
                                autocomplete="off"
                                required
                            >


                            <span class="helper">

                                Masukkan nomor pengaduan yang
                                Anda terima setelah laporan dikirim.

                            </span>

                        </div>


                        <!-- KODE -->

                        <div class="form-group">

                            <label>

                                Kode Akses

                            </label>


                            <input
                                type="password"
                                v-model="form.access"
                                placeholder="Masukkan kode akses"
                                autocomplete="off"
                                required
                            >


                            <span class="helper">

                                Kode akses digunakan untuk memastikan
                                bahwa Anda adalah pemilik laporan.

                            </span>

                        </div>


                        <!-- BUTTON -->

                        <button
                            type="submit"
                            class="btn btn-primary"
                            :disabled="loading"
                        >

                            <i
                                class="bi"
                                :class="loading
                                    ? 'bi-arrow-repeat'
                                    : 'bi-search'"
                            ></i>


                            @{{ loading
                                ? 'Memeriksa...'
                                : 'Lihat Status Pengaduan'
                            }}

                        </button>


                    </form>


                    <!-- FORGOT -->

                    <div class="forgot-info">

                        <i class="bi bi-info-circle"></i>


                        <div>

                            <strong>

                                Lupa Nomor Pengaduan atau Kode Akses?

                            </strong>


                            <p>

                                Jangan khawatir. Anda dapat melakukan
                                pemulihan akses menggunakan email atau
                                nomor HP yang terdaftar saat membuat
                                pengaduan.

                            </p>


                            <button
                                type="button"
                                class="link-button"
                                @click="mode = 'recovery'"
                            >

                                Pulihkan Akses

                                <i class="bi bi-arrow-right"></i>

                            </button>

                        </div>

                    </div>


                </div>


                <!-- ==================================================
                     RECOVERY
                =================================================== -->

                <div v-if="mode === 'recovery'">


                    <div
                        class="helper"
                        style="margin-bottom:17px"
                    >

                        Pilih metode yang ingin digunakan
                        untuk memulihkan akses pengaduan.

                    </div>


                    <!-- OPTIONS -->

                    <div class="recovery-options">


                        <button
                            type="button"
                            class="recovery-option"
                            :class="{
                                active:
                                recoveryMethod === 'email'
                            }"
                            @click="
                                recoveryMethod = 'email'
                            "
                        >

                            <i class="bi bi-envelope"></i>


                            <strong>

                                Melalui Email

                            </strong>


                            <span>

                                Kode pemulihan dikirim
                                ke email terdaftar.

                            </span>

                        </button>


                        <button
                            type="button"
                            class="recovery-option"
                            :class="{
                                active:
                                recoveryMethod === 'phone'
                            }"
                            @click="
                                recoveryMethod = 'phone'
                            "
                        >

                            <i class="bi bi-phone"></i>


                            <strong>

                                Melalui Nomor HP

                            </strong>


                            <span>

                                Verifikasi menggunakan
                                nomor HP terdaftar.

                            </span>

                        </button>


                    </div>


                    <!-- RECOVERY FORM -->

                    <form
                        @submit.prevent="recoverAccess"
                    >


                        <div class="form-group">


                            <label>

                                @{{ recoveryMethod === 'email'
                                    ? 'Alamat Email'
                                    : 'Nomor HP'
                                }}

                            </label>


                            <input
                                :type="
                                    recoveryMethod === 'email'
                                    ? 'email'
                                    : 'tel'
                                "
                                v-model="recoveryValue"
                                :placeholder="
                                    recoveryMethod === 'email'
                                    ? 'Contoh: nama@email.com'
                                    : 'Contoh: 081234567890'
                                "
                                required
                            >


                            <span class="helper">

                                Gunakan email atau nomor HP
                                yang digunakan saat membuat pengaduan.

                            </span>


                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary"
                            :disabled="loading"
                        >

                            <i
                                class="bi"
                                :class="loading
                                    ? 'bi-arrow-repeat'
                                    : 'bi-send'"
                            ></i>


                            @{{ loading
                                ? 'Memproses...'
                                : 'Kirim Permintaan Pemulihan'
                            }}


                        </button>


                    </form>


                    <!-- NOTICE -->

                    <div class="notice">

                        <i class="bi bi-shield-lock"></i>

                        Untuk menjaga keamanan laporan,
                        sistem tidak akan menampilkan informasi
                        pengaduan sebelum proses verifikasi
                        berhasil dilakukan.

                    </div>


                    <button
                        type="button"
                        class="link-button"
                        style="margin-top:18px"
                        @click="mode = 'check'"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Kembali ke Cek Pengaduan

                    </button>


                </div>


            </div>


            <div class="footer">

                SAPA SPI · Sarana Aspirasi dan Pengaduan

                <br>

                UIN Kendari

            </div>


        </div>

    </main>

</div>


<!-- =========================
     VUE
========================== -->

<script>

const { createApp } = Vue;


createApp({

    data() {

        return {

            mode: 'check',

            loading: false,


            form: {

                ticket: '',

                access: ''

            },


            recoveryMethod: 'email',

            recoveryValue: ''

        };

    },


    methods: {


        checkComplaint() {

            this.loading = true;


            /*
             * SEMENTARA
             *
             * Nanti:
             *
             * axios.post('/pengaduan/cek', {
             *     ticket: this.form.ticket,
             *     access: this.form.access
             * })
             */


            setTimeout(() => {

                this.loading = false;


                alert(
                    'Tahap pengecekan akan kita hubungkan ke database Laravel.'
                );


            }, 1000);

        },


        recoverAccess() {

            this.loading = true;


            /*
             * SEMENTARA
             *
             * Nanti:
             *
             * axios.post('/pengaduan/recovery', {
             *     method: this.recoveryMethod,
             *     value: this.recoveryValue
             * })
             */


            setTimeout(() => {

                this.loading = false;


                alert(
                    'Permintaan pemulihan akan kita hubungkan ke sistem verifikasi Laravel.'
                );


            }, 1000);

        }

    }

}).mount('#app');

</script>


</body>

</html>
