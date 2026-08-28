<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sampaikan Pengaduan | SAPA SPI UIN Kendari</title>

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
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(900px, calc(100% - 32px));
            margin: auto;
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
            padding: 45px 0 80px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .page-label {
            display: inline-block;

            padding: 7px 12px;
            border-radius: 30px;

            background: var(--primary-light);
            color: var(--primary);

            font-size: 11px;
            font-weight: 700;

            margin-bottom: 13px;
        }

        .page-header h1 {
            font-size: 32px;
            letter-spacing: -.8px;
            margin-bottom: 9px;
        }

        .page-header p {
            color: var(--text);
            font-size: 13px;
        }

        /* =========================
           FORM CARD
        ========================== */

        .form-card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 18px;

            overflow: hidden;

            box-shadow: 0 15px 45px rgba(16, 37, 27, .06);
        }

        .form-section {
            padding: 30px;
            border-bottom: 1px solid var(--border);
        }

        .form-section:last-child {
            border-bottom: none;
        }

        .section-heading {
            display: flex;
            gap: 13px;
            align-items: flex-start;

            margin-bottom: 25px;
        }

        .section-number {
            min-width: 34px;
            height: 34px;

            border-radius: 10px;

            background: var(--primary);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 800;
        }

        .section-heading h2 {
            font-size: 16px;
            margin-bottom: 3px;
        }

        .section-heading p {
            color: var(--muted);
            font-size: 11px;
        }

        /* =========================
           FORM ELEMENT
        ========================== */

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 12px;
            font-weight: 600;
        }

        label span {
            color: var(--danger);
        }

        input,
        select,
        textarea {
            width: 100%;

            border: 1px solid var(--border);
            border-radius: 9px;

            padding: 12px 13px;

            font-family: inherit;
            font-size: 13px;

            color: var(--dark);
            background: white;

            outline: none;

            transition: .2s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);

            box-shadow:
                0 0 0 3px rgba(8, 116, 67, .08);
        }

        textarea {
            min-height: 160px;
            resize: vertical;
        }

        .helper {
            font-size: 10px;
            color: var(--muted);
        }

        /* =========================
           PRIVACY
        ========================== */

        .privacy-box {
            display: flex;
            gap: 13px;

            padding: 17px;

            background: var(--light);
            border: 1px solid var(--border);
            border-radius: 11px;

            margin-top: 22px;
        }

        .privacy-box input {
            width: 17px;
            height: 17px;

            margin-top: 2px;

            accent-color: var(--primary);
        }

        .privacy-box label {
            cursor: pointer;
        }

        .privacy-box strong {
            display: block;

            font-size: 12px;

            margin-bottom: 3px;
        }

        .privacy-box p {
            font-size: 10px;
            color: var(--muted);
            font-weight: 400;
        }

        /* =========================
           FILE UPLOAD
        ========================== */

        .file-upload {
            display: block;

            border: 1.5px dashed #cbd8d1;
            border-radius: 11px;

            padding: 30px;

            text-align: center;

            cursor: pointer;

            transition: .2s;
        }

        .file-upload:hover {
            border-color: var(--primary);
            background: var(--primary-light);
        }

        .file-upload i {
            display: block;

            font-size: 28px;

            color: var(--primary);

            margin-bottom: 8px;
        }

        .file-upload strong {
            display: block;
            font-size: 12px;
        }

        .file-upload small {
            display: block;

            color: var(--muted);

            font-size: 10px;

            margin-top: 4px;
        }

        .file-list {
            margin-top: 12px;
        }

        .file-item {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 10px 12px;

            border-radius: 8px;

            background: var(--light);

            font-size: 11px;

            margin-top: 6px;
        }

        .file-item button {
            border: none;
            background: none;

            color: var(--danger);

            cursor: pointer;

            font-size: 13px;
        }

        /* =========================
           NOTICE
        ========================== */

        .notice {
            margin-top: 20px;

            padding: 14px 16px;

            background: #fffaf0;

            border: 1px solid #f1dfad;

            border-radius: 10px;

            display: flex;
            gap: 10px;

            font-size: 10px;

            color: #735b21;
        }

        .notice i {
            font-size: 15px;
        }

        /* =========================
           AGREEMENT
        ========================== */

        .agreement {
            display: flex;
            gap: 10px;

            align-items: flex-start;

            margin-top: 22px;
        }

        .agreement input {
            width: 17px;
            height: 17px;

            margin-top: 2px;

            accent-color: var(--primary);
        }

        .agreement label {
            font-size: 11px;
            font-weight: 400;

            color: var(--text);

            cursor: pointer;
        }

        /* =========================
           ACTION
        ========================== */

        .form-actions {
            padding: 25px 30px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            background: #fbfcfb;
        }

        .required-info {
            font-size: 10px;
            color: var(--muted);
        }

        .btn {
            border: none;
            cursor: pointer;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 13px 21px;

            border-radius: 9px;

            font-family: inherit;
            font-size: 12px;
            font-weight: 700;

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

        .btn-primary:disabled {
            opacity: .6;
            cursor: not-allowed;
            transform: none;
        }

        /* =========================
           MOBILE
        ========================== */

        @media(max-width: 650px) {

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: auto;
            }

            .form-section {
                padding: 23px 20px;
            }

            .form-actions {
                padding: 20px;

                flex-direction: column;
                align-items: stretch;

                gap: 15px;
            }

            .btn {
                width: 100%;
            }

            .page-header h1 {
                font-size: 27px;
            }

            .page {
                padding-top: 30px;
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
                    <strong>SAPA SPI</strong>
                    <span>UIN Kendari</span>
                </div>

            </a>


            <a href="/" class="back-link">

                <i class="bi bi-arrow-left"></i>

                Kembali

            </a>

        </div>

    </header>


    <!-- =========================
         CONTENT
    ========================== -->

    <main class="page">

        <div class="container">

            <!-- PAGE HEADER -->

            <div class="page-header">

                <div class="page-label">
                    FORMULIR PENGADUAN
                </div>

                <h1>
                    Sampaikan Aspirasi & Pengaduan
                </h1>

                <p>
                    Sampaikan informasi dengan jelas agar dapat
                    ditindaklanjuti sesuai prosedur yang berlaku.
                </p>

            </div>


            <!-- FORM -->

            <form
                class="form-card"
                @submit.prevent="submitForm"
            >

                <!-- =========================
                     01 IDENTITAS
                ========================== -->

                <section class="form-section">

                    <div class="section-heading">

                        <div class="section-number">
                            01
                        </div>

                        <div>

                            <h2>
                                Identitas Pelapor
                            </h2>

                            <p>
                                Informasi ini digunakan untuk keperluan
                                komunikasi dan penanganan laporan.
                            </p>

                        </div>

                    </div>


                    <div class="form-grid">

                        <!-- NAMA -->

                        <div class="form-group">

                            <label>
                                Nama Lengkap <span>*</span>
                            </label>

                            <input
                                type="text"
                                v-model="form.name"
                                placeholder="Masukkan nama lengkap"
                                maxlength="100"
                                required
                            >

                        </div>


                        <!-- HP -->

                        <div class="form-group">

                            <label>
                                Nomor HP
                            </label>

                            <input
                                type="tel"
                                v-model="form.phone"
                                placeholder="Contoh: 081234567890"
                                maxlength="20"
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="form-group full">

                            <label>
                                Email
                            </label>

                            <input
                                type="email"
                                v-model="form.email"
                                placeholder="Contoh: nama@email.com"
                                maxlength="150"
                            >

                            <small class="helper">
                                Email dapat digunakan untuk pemulihan akses
                                apabila Anda lupa nomor pengaduan.
                            </small>

                        </div>

                    </div>


                    <!-- PRIVACY -->

                    <div class="privacy-box">

                        <input
                            type="checkbox"
                            id="privacy"
                            v-model="form.private"
                        >

                        <label for="privacy">

                            <strong>
                                Rahasiakan identitas saya
                            </strong>

                            <p>
                                Identitas pelapor tidak akan ditampilkan
                                kepada pihak yang tidak berkepentingan.
                            </p>

                        </label>

                    </div>

                </section>


                <!-- =========================
                     02 DETAIL LAPORAN
                ========================== -->

                <section class="form-section">

                    <div class="section-heading">

                        <div class="section-number">
                            02
                        </div>

                        <div>

                            <h2>
                                Detail Laporan
                            </h2>

                            <p>
                                Jelaskan informasi pengaduan secara lengkap.
                            </p>

                        </div>

                    </div>


                    <div class="form-grid">

                        <!-- JENIS -->

                        <div class="form-group">

                            <label>
                                Jenis Laporan <span>*</span>
                            </label>

                            <select
                                v-model="form.category"
                                required
                            >

                                <option value="">
                                    Pilih jenis laporan
                                </option>

                                <option value="pengaduan">
                                    Pengaduan
                                </option>

                                <option value="aspirasi">
                                    Aspirasi
                                </option>

                                <option value="informasi">
                                    Informasi
                                </option>

                                <option value="pelanggaran">
                                    Dugaan Pelanggaran
                                </option>

                            </select>

                        </div>


                        <!-- TANGGAL -->

                        <div class="form-group">

                            <label>
                                Tanggal Kejadian
                            </label>

                            <input
                                type="date"
                                v-model="form.date"
                            >

                        </div>


                        <!-- JUDUL -->

                        <div class="form-group full">

                            <label>
                                Judul Laporan <span>*</span>
                            </label>

                            <input
                                type="text"
                                v-model="form.title"
                                placeholder="Tuliskan judul laporan secara singkat"
                                maxlength="150"
                                required
                            >

                        </div>


                        <!-- LOKASI -->

                        <div class="form-group full">

                            <label>
                                Lokasi Kejadian
                            </label>

                            <input
                                type="text"
                                v-model="form.location"
                                placeholder="Contoh: Fakultas ... / Gedung ..."
                                maxlength="200"
                            >

                        </div>


                        <!-- URAIAN -->

                        <div class="form-group full">

                            <label>
                                Uraian Laporan <span>*</span>
                            </label>

                            <textarea
                                v-model="form.description"
                                placeholder="Jelaskan apa yang terjadi, kapan terjadi, pihak yang terlibat, dan informasi lain yang menurut Anda penting."
                                required
                            ></textarea>

                            <small class="helper">
                                Jelaskan berdasarkan fakta yang Anda ketahui.
                            </small>

                        </div>

                    </div>

                </section>


                <!-- =========================
                     03 LAMPIRAN
                ========================== -->

                <section class="form-section">

                    <div class="section-heading">

                        <div class="section-number">
                            03
                        </div>

                        <div>

                            <h2>
                                Lampiran & Konfirmasi
                            </h2>

                            <p>
                                Tambahkan bukti pendukung jika tersedia.
                            </p>

                        </div>

                    </div>


                    <!-- FILE UPLOAD -->

                    <label class="file-upload">

                        <input
                            type="file"
                            multiple
                            hidden
                            @change="handleFiles"
                            accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xls,.xlsx"
                        >

                        <i class="bi bi-cloud-arrow-up"></i>

                        <strong>
                            Klik untuk mengunggah lampiran
                        </strong>

                        <small>
                            JPG, PNG, PDF, DOC, DOCX, XLS, XLSX
                            · Maks. 10 MB/file
                        </small>

                    </label>


                    <!-- FILE LIST -->

                    <div
                        class="file-list"
                        v-if="files.length > 0"
                    >

                        <div
                            class="file-item"
                            v-for="(file, index) in files"
                            :key="index"
                        >

                            <span>

                                <i class="bi bi-paperclip"></i>

                                @{{ file.name }}

                            </span>


                            <button
                                type="button"
                                @click="removeFile(index)"
                                title="Hapus file"
                            >

                                <i class="bi bi-x-lg"></i>

                            </button>

                        </div>

                    </div>


                    <!-- NOTICE -->

                    <div class="notice">

                        <i class="bi bi-info-circle"></i>

                        <div>

                            Setelah laporan dikirim, Anda akan memperoleh
                            <strong>Nomor Pengaduan dan Kode Akses</strong>
                            yang dapat digunakan untuk memantau perkembangan
                            laporan.

                        </div>

                    </div>


                    <!-- AGREEMENT -->

                    <div class="agreement">

                        <input
                            type="checkbox"
                            id="agreement"
                            v-model="form.agreement"
                            required
                        >

                        <label for="agreement">

                            Saya menyatakan bahwa informasi yang saya
                            sampaikan adalah benar sesuai dengan pengetahuan
                            saya dan bersedia laporan ini diproses sesuai
                            dengan ketentuan yang berlaku.

                        </label>

                    </div>

                </section>


                <!-- =========================
                     ACTION
                ========================== -->

                <div class="form-actions">

                    <div class="required-info">

                        <span style="color:#c0392b">
                            *
                        </span>

                        Wajib diisi

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
                                : 'bi-send-fill'"
                        ></i>

                        @{{ loading
                            ? 'Mengirim...'
                            : 'Kirim Pengaduan'
                        }}

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>


<!-- =========================
     VUE
========================= -->

<script>

const { createApp } = Vue;

createApp({

    data() {

        return {

            loading: false,

            files: [],

            form: {

                name: '',
                phone: '',
                email: '',

                private: false,

                category: '',
                date: '',
                title: '',
                location: '',
                description: '',

                agreement: false

            }

        };

    },


    methods: {

        handleFiles(event) {

            const selectedFiles =
                Array.from(event.target.files);

            const maxSize =
                10 * 1024 * 1024;

            selectedFiles.forEach(file => {

                if (file.size > maxSize) {

                    alert(
                        `${file.name} melebihi ukuran maksimal 10 MB.`
                    );

                    return;

                }

                this.files.push(file);

            });

            event.target.value = '';

        },


        removeFile(index) {

            this.files.splice(index, 1);

        },


        submitForm() {

            this.loading = true;

            /*
             * SEMENTARA
             *
             * Nanti akan diganti dengan:
             *
             * axios.post('/pengaduan', ...)
             *
             * untuk menyimpan data ke Laravel.
             */

            setTimeout(() => {

                this.loading = false;

                alert(
                    'Form berhasil divalidasi. Selanjutnya kita akan menghubungkannya dengan database Laravel.'
                );

            }, 1000);

        }

    }

}).mount('#app');

</script>

</body>

</html>