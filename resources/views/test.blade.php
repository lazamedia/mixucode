<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Jasa Website</title>
    <!-- SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f0f4f8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            display: flex;
            flex-direction: row;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #4f46e5; /* Biru Ungu */
            color: #ffffff;
            padding: 40px 25px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            position: relative;
        }

        .sidebar h2 {
            margin-bottom: 40px;
            font-size: 24px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 15px;
        }

        .steps {
            list-style: none;
            padding: 0;
            position: relative;
        }

        .steps li {
            margin-bottom: 60px; /* Ditambah dari 50px menjadi 60px untuk lebih banyak jarak */
            cursor: pointer;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
            position: relative;
        }

        .steps li:last-child {
            margin-bottom: 0;
        }

        .steps li .step-number {
            width: 35px;
            height: 35px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
            position: relative;
            z-index: 1;
            flex-shrink: 0;
            font-size: 16px;
        }

        .steps li.completed .step-number {
            background-color: #10b981; /* Hijau */
            color: #ffffff;
        }

        .steps li.active .step-number {
            background-color: #ffffff;
            color: #4f46e5;
        }

        /* Connecting lines */
        .steps li::after {
            content: '';
            position: absolute;
            top: 42px; /* Posisi di bawah step-number */
            left: 16px; /* Tengah step-number */
            width: 2px;
            height: 40px; /* Dikurangi dari 50px menjadi 40px untuk menghindari overlapping */
            background-color: #a1a1aa;
            z-index: 0;
        }

        .steps li.completed::after {
            background-color: #10b981;
        }

        .steps li.active::after {
            background-color: #ffffff;
        }

        .steps li:last-child::after {
            display: none;
        }

        .steps li.active,
        .steps li.completed {
            color: #ffffff;
            font-weight: 600;
        }

        .steps li.completed {
            color: #a5f3fc;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 50px 40px;
        }

        .form-step {
            display: none;
            animation: slideIn 0.4s ease-in-out;
        }

        .form-step.active {
            display: block;
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-size: 15px;
            color: #374151;
        }

        .form-group input, 
        .form-group select, 
        .form-group textarea {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus, 
        .form-group select:focus, 
        .form-group textarea:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 8px rgba(79, 70, 229, 0.4);
        }

        /* Selection Boxes */
        .selection-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .selection-box {
            flex: 1;
            min-width: 150px;
            padding: 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            position: relative;
            user-select: none;
        }

        .selection-box input {
            display: none;
        }

        .selection-box.selected {
            background-color: #4f46e5;
            color: #ffffff;
            border-color: #4f46e5;
        }

        .selection-box.selected::after {
            content: '✔';
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #10b981;
            color: #ffffff;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        /* Tooltip Styles */
        .tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
            margin-left: 5px;
            color: #4f46e5;
            font-weight: bold;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 200px;
            background-color: #374151;
            color: #ffffff;
            text-align: left;
            border-radius: 6px;
            padding: 10px;
            position: absolute;
            z-index: 1;
            bottom: 125%; /* Position above the icon */
            left: 50%;
            margin-left: -100px;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 14px;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }

        /* Toggle Switch for Maintenance */
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        .toggle-switch input:checked + .slider {
            background-color: #4f46e5;
        }

        .toggle-switch input:checked + .slider:before {
            transform: translateX(26px);
        }

        /* Maintenance Tooltip */
        .maintenance-tooltip {
            margin-left: 10px;
            font-size: 18px;
            color: #4f46e5;
        }

        /* Button Group */
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .button-group button {
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            background-color: #4f46e5;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .button-group button:hover {
            background-color: #4338ca;
            transform: translateY(-3px);
        }

        .button-group button:disabled {
            background-color: #9ca3af;
            cursor: not-allowed;
        }

        #submitBtn {
            background-color: #10b981; /* Hijau */
        }

        #submitBtn:hover {
            background-color: #059669;
        }

        #summary-content {
            background-color: #f3f4f6;
            padding: 25px 20px;
            border-radius: 8px;
            box-shadow: inset 0 0 8px rgba(0,0,0,0.05);
        }

        #summary-content h3 {
            margin-bottom: 20px;
            color: #4f46e5;
            font-size: 20px;
            border-bottom: 2px solid #d1d5db;
            padding-bottom: 10px;
        }

        /* Rapi dan Sejajar Vertikal */
        #summary-content .summary-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        #summary-content .summary-item strong {
            width: 150px; /* Lebar tetap untuk label */
            display: inline-block;
            color: #4b5563;
        }

        #summary-content .summary-item span {
            color: #4b5563;
            word-break: break-word;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                display: flex;
                padding: 20px 0px;
                box-sizing: border-box;
                justify-content: center;
                text-align: center;
            }
            .sidebar h2{
                margin-bottom: 20px;
            }
            .sidebar .s-t {
                display: none;
            }
            .main-content {
                padding: 30px 25px;
            }
            .steps {
                display: flex;
                justify-content: center;
            }
            .steps li .step-number{
                margin-left: 30px;
                margin-top: 0;
            }

            .steps li::after,
            .steps li.completed::after,
            .steps li.active::after {
                width: 2px;
                height: 30px;
                left: 10px;
                top: 2px;
                transform: rotate(90deg);
                position: relative;
            }
            .steps li:last-child{
                margin-top: 0; 
                margin-bottom: 0px;
            }
            .steps li .step-number {
                margin-right: 15px;
            }

            .steps li {
                margin-bottom: 0px;
            }

            .button-group {
                flex-direction: column;
                gap: 15px;
            }

            .button-group button {
                width: 100%;
            }

            .selection-group {
                flex-direction: column;
            }

            /* Adjust summary items for mobile */
            #summary-content .summary-item {
                flex-direction: column;
                align-items: flex-start;
            }

            #summary-content .summary-item strong {
                width: auto;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Mixucode</h2>
            <ul class="steps">
                <li class="active">
                    <span class="step-number">1</span>
                    <div class="s-t">Data Diri</div>
                </li>
                <li>
                    <span class="step-number">2</span>
                    <div class="s-t">Layanan</div>
                </li>
                <li>
                    <span class="step-number">3</span>
                    <div class="s-t">Pembayaran</div>
                </li>
                <li>
                    <span class="step-number">4</span>
                    <div class="s-t">Konfirmasi</div>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <form id="form" action="{{ route('order.store') }}" method="POST">
                <!-- Step 1: Data Diri -->
                <div class="form-step active">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_wa">Nomor WhatsApp</label>
                        <input type="tel" id="nomor_wa" name="nomor_wa" placeholder="Masukkan nomor WhatsApp Anda" required pattern="[0-9]{10,15}" title="Masukkan nomor WA yang valid">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="text" id="nama_usaha" name="nama_usaha" placeholder="Masukkan nama usaha Anda" required>
                    </div>
                </div>

                <!-- Step 2: Layanan -->
                <div class="form-step">
                    <div class="form-group">
                        <label for="nama_domain">Nama Domain</label>
                        <input type="text" id="nama_domain" name="nama_domain" placeholder="Masukkan nama domain yang diinginkan" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Website</label>
                        <div class="selection-group" id="jenis_website_group">
                            <div class="selection-box" data-group="jenis_website" data-value="Landing Page">
                                <input type="radio" name="jenis_website" value="Landing Page" required>
                                Landing Page
                                <div class="tooltip">?
                                    <span class="tooltiptext">Sebuah halaman tunggal yang fokus pada pemasaran atau promosi produk/jasa tertentu.</span>
                                </div>
                            </div>
                            <div class="selection-box" data-group="jenis_website" data-value="Portofolio">
                                <input type="radio" name="jenis_website" value="Portofolio" required>
                                Portofolio
                                <div class="tooltip">?
                                    <span class="tooltiptext">Sebuah website yang menampilkan karya dan proyek Anda.</span>
                                </div>
                            </div>
                            <div class="selection-box" data-group="jenis_website" data-value="Custom">
                                <input type="radio" name="jenis_website" value="Custom" required>
                                Custom
                                <div class="tooltip">?
                                    <span class="tooltiptext">Website yang dikustomisasi sesuai dengan kebutuhan spesifik Anda.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="langganan">Langganan</label>
                        <select id="langganan" name="langganan" required>
                            <option value="">-- Pilih Durasi Langganan --</option>
                            <option value="1 Tahun">1 Tahun</option>
                            <option value="2 Tahun">2 Tahun</option>
                            <option value="3 Tahun">3 Tahun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Maintenance <span class="tooltip">?
                            <span class="tooltiptext">Apakah Anda memerlukan layanan pemeliharaan website setelah peluncuran?</span>
                        </span></label>
                        <label class="toggle-switch">
                            <input type="checkbox" id="maintenance" name="maintenance">
                            <span class="slider"></span>
                        </label>
                        <span id="maintenance-label" style="margin-left: 10px; font-size: 16px; color: #374151;"></span>
                    </div>
                    <div class="form-group">
                        <label>Teknologi</label>
                        <div class="selection-group" id="teknologi_group">
                            <div class="selection-box" data-group="teknologi" data-value="WordPress ">
                                <input type="radio" name="teknologi" value="WordPress " required>
                                WordPress 
                                <div class="tooltip">?
                                    <span class="tooltiptext">Platform CMS populer yang mudah digunakan dan memiliki banyak plugin.</span>
                                </div>
                            </div>
                            <div class="selection-box" data-group="teknologi" data-value="Laravel ">
                                <input type="radio" name="teknologi" value="Laravel " required>
                                Laravel 
                                <div class="tooltip">?
                                    <span class="tooltiptext">Framework PHP yang kuat untuk aplikasi web kustom dan skala besar.</span>
                                </div>
                            </div>
                            <div class="selection-box" data-group="teknologi" data-value="HTML/CSS ">
                                <input type="radio" name="teknologi" value="HTML/CSS " required>
                                HTML/CSS 
                                <div class="tooltip">?
                                    <span class="tooltiptext">Website statis yang dibangun dengan HTML dan CSS sederhana.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Pembayaran -->
                <div class="form-step">
                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <div class="selection-group" id="metode_pembayaran_group">
                            <div class="selection-box" data-group="metode_pembayaran" data-value="BSI" data-rekening="BSI - 1234567890 a.n. PT. Contoh BSI">
                                <input type="radio" name="metode_pembayaran" value="BSI" required>
                                BSI
                            </div>
                            <div class="selection-box" data-group="metode_pembayaran" data-value="BRI" data-rekening="BRI - 0987654321 a.n. PT. Contoh BRI">
                                <input type="radio" name="metode_pembayaran" value="BRI" required>
                                BRI
                            </div>
                            <div class="selection-box" data-group="metode_pembayaran" data-value="DANA" data-rekening="DANA - 081234567890">
                                <input type="radio" name="metode_pembayaran" value="DANA" required>
                                DANA
                            </div>
                        </div>
                        <!-- Area untuk menampilkan nomor rekening -->
                        <div id="rekening-info" style="margin-top: 15px; font-size: 14px; color: #4b5563;"></div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi (Opsional)</label>
                        <textarea id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi tambahan jika ada" rows="4"></textarea>
                    </div>
                </div>

                <!-- Step 4: Konfirmasi -->
                <div class="form-step">
                    <div id="summary-content">
                        <!-- Ringkasan data akan ditampilkan di sini -->
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="button-group">
                    <button type="button" id="prevBtn" style="display: none;">Kembali</button>
                    <button type="button" id="nextBtn">Selanjutnya</button>
                    <button type="submit" id="submitBtn" style="display: none;">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('form');
    const steps = Array.from(document.querySelectorAll('.form-step'));
    const stepIndicators = Array.from(document.querySelectorAll('.steps li'));
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const rekeningInfo = document.getElementById('rekening-info');
    let currentStep = 0;

    showStep(currentStep);

    // Fungsi untuk menampilkan langkah yang aktif
    function showStep(step) {
        steps.forEach((formStep, index) => {
            formStep.classList.toggle('active', index === step);
        });

        // Update indikator sidebar
        stepIndicators.forEach((indicator, index) => {
            if (index < step) {
                indicator.classList.add('completed');
                indicator.classList.remove('active');
                indicator.querySelector('.step-number').innerHTML = '&#10004;'; // Centang
            } else if (index === step) {
                indicator.classList.add('active');
                indicator.classList.remove('completed');
                indicator.querySelector('.step-number').innerHTML = index + 1;
            } else {
                indicator.classList.remove('active', 'completed');
                indicator.querySelector('.step-number').innerHTML = index + 1;
            }
        });

        // Update tombol navigasi
        prevBtn.style.display = step === 0 ? 'none' : 'inline-block';
        nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline-block';
        submitBtn.style.display = step === steps.length - 1 ? 'inline-block' : 'none';

        if (step === steps.length - 1) {
            generateSummary(); // Pastikan ringkasan ditampilkan saat di langkah konfirmasi
        }

        // Re-initialize selection boxes dan toggle switch untuk mempertahankan state
        initializeSelectionBoxes();
        initializeToggleSwitch();

        // Jika di langkah pembayaran, tampilkan nomor rekening jika sudah dipilih
        if (step === 2) {
            displayRekeningInfo();
        } else {
            rekeningInfo.innerHTML = '';
        }
    }

    // Fungsi untuk validasi form
    function validateForm() {
        const inputs = steps[currentStep].querySelectorAll('input, select, textarea');
        let valid = true;
        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.reportValidity();
                valid = false;
            }
        });
        return valid;
    }

    // Fungsi untuk meng-generate ringkasan data
    function generateSummary() {
        const data = {
            "Nama Lengkap": document.getElementById('nama_lengkap').value,
            "Nomor WhatsApp": document.getElementById('nomor_wa').value,
            "Email": document.getElementById('email').value,
            "Nama Usaha": document.getElementById('nama_usaha').value,
            "Nama Domain": document.getElementById('nama_domain').value,
            "Jenis Website": getSelectedValue('jenis_website'),
            "Langganan": document.getElementById('langganan').value,
            "Maintenance": document.getElementById('maintenance').checked ? "Ya" : "Tidak",
            "Teknologi": getSelectedValue('teknologi'),
            "Metode Pembayaran": getMetodePembayaranDetail(),
            "Deskripsi": document.getElementById('deskripsi').value || "Tidak ada"
        };

        let summaryContent = `<h3>Detail Pesanan Anda</h3>`;
        for (const [key, value] of Object.entries(data)) {
            summaryContent += `
                <div class="summary-item">
                    <strong>${key}</strong>
                    <span>: ${escapeHTML(value)}</span>
                </div>
            `;
        }

        document.getElementById('summary-content').innerHTML = summaryContent;
    }

    // Fungsi untuk mendapatkan nilai pilihan yang dipilih
    function getSelectedValue(name) {
        const options = document.getElementsByName(name);
        for (let option of options) {
            if (option.checked) {
                return option.value;
            }
        }
        return '';
    }

    // Fungsi untuk mendapatkan detail Metode Pembayaran termasuk nomor rekening
    function getMetodePembayaranDetail() {
        const metodePembayaran = getSelectedValue('metode_pembayaran');
        if (metodePembayaran) {
            const selectedBox = document.querySelector(`.selection-box[data-group="metode_pembayaran"][data-value="${metodePembayaran}"]`);
            const rekening = selectedBox.getAttribute('data-rekening');
            return rekening;
        }
        return '';
    }

    // Fungsi untuk menghindari XSS
    function escapeHTML(str) {
        if (!str) return '';
        return str.replace(/[&<>'"]/g, function(tag) {
            const charsToReplace = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            };
            return charsToReplace[tag] || tag;
        });
    }

    // Fungsi untuk menginisialisasi ulang selection boxes berdasarkan nilai yang dipilih
    function initializeSelectionBoxes() {
        const selectionGroups = document.querySelectorAll('.selection-group');
        selectionGroups.forEach(group => {
            const groupName = group.getAttribute('id').replace('_group', '');
            const selectedValue = getSelectedValue(groupName);
            const boxes = group.querySelectorAll('.selection-box');
            boxes.forEach(box => {
                const input = box.querySelector('input[type="radio"]');
                if (input.value === selectedValue) {
                    box.classList.add('selected');
                    input.checked = true;
                } else {
                    box.classList.remove('selected');
                    input.checked = false;
                }
            });
        });
    }

    // Fungsi untuk menginisialisasi ulang toggle switch
    function initializeToggleSwitch() {
        const maintenanceCheckbox = document.getElementById('maintenance');
        const maintenanceLabel = document.getElementById('maintenance-label');
        maintenanceLabel.textContent = maintenanceCheckbox.checked ? "" : ""; //ya atau tidak
    }

    // Fungsi untuk menampilkan nomor rekening berdasarkan pilihan pembayaran
    function displayRekeningInfo() {
        const metodePembayaran = getSelectedValue('metode_pembayaran');
        if (metodePembayaran) {
            const selectedBox = document.querySelector(`.selection-box[data-group="metode_pembayaran"][data-value="${metodePembayaran}"]`);
            const rekening = selectedBox.getAttribute('data-rekening');
            rekeningInfo.innerHTML = rekening;
        } else {
            rekeningInfo.innerHTML = '';
        }
    }

    // Event Listener untuk tombol "Next"
    nextBtn.addEventListener('click', () => {
        if (validateForm()) {
            currentStep++;
            showStep(currentStep);
        }
    });

    // Event Listener untuk tombol "Kembali"
    prevBtn.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Event Listener untuk klik pada indikator sidebar
    stepIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            if (index <= currentStep) {
                currentStep = index;
                showStep(currentStep);
            }
        });
    });

    // Event Listener untuk selection boxes
    const selectionBoxes = document.querySelectorAll('.selection-box');
    selectionBoxes.forEach(box => {
        box.addEventListener('click', () => {
            const group = box.getAttribute('data-group');
            const value = box.getAttribute('data-value');
            const groupBoxes = document.querySelectorAll(`.selection-box[data-group="${group}"]`);
            groupBoxes.forEach(b => {
                if (b.getAttribute('data-value') === value) {
                    b.classList.add('selected');
                    b.querySelector('input[type="radio"]').checked = true;
                } else {
                    b.classList.remove('selected');
                    b.querySelector('input[type="radio"]').checked = false;
                }
            });

            // Jika grup adalah metode_pembayaran, tampilkan nomor rekening
            if (group === 'metode_pembayaran') {
                displayRekeningInfo();
            }
        });
    });

    // Event Listener untuk toggle switch (Maintenance)
    const maintenanceCheckbox = document.getElementById('maintenance');
    const maintenanceLabel = document.getElementById('maintenance-label');
    maintenanceCheckbox.addEventListener('change', () => {
        maintenanceLabel.textContent = maintenanceCheckbox.checked ? "" : ""; //ya atau tidak
    });

    // Event Listener untuk form submit
    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Mencegah form dari submit default

        if (validateForm()) {
            // Mengumpulkan data formulir sebagai FormData
            const formData = new FormData(form);

            // Mendapatkan token CSRF dari meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Menambahkan maintenance checkbox sebagai boolean
            formData.set('maintenance', maintenanceCheckbox.checked ? '1' : '0');

            // Log data yang akan dikirim untuk debugging
            console.log('Data yang akan dikirim:', Object.fromEntries(formData.entries()));

            // Mengirim data ke backend menggunakan fetch
            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(async response => {
                // Log status dan headers untuk debugging
                console.log('Status Response:', response.status);
                console.log('Headers Response:', response.headers);

                if (!response.ok) {
                    // Coba parse error message dari response
                    let errorData;
                    try {
                        errorData = await response.json();
                        console.error('Error Response JSON:', errorData);
                    } catch (parseError) {
                        console.error('Tidak dapat mengurai response JSON:', parseError);
                        throw { message: 'Response bukan JSON atau tidak dapat diurai.' };
                    }
                    throw errorData;
                }
                return response.json();
            })
            .then(data => {
                console.log('Response dari server:', data);
                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: data.message,
                        confirmButtonText: 'OK'
                    }).then(() => {
                        form.reset();
                        // Reset indikator langkah
                        stepIndicators.forEach((indicator, index) => {
                            indicator.classList.remove('completed', 'active');
                            indicator.querySelector('.step-number').innerHTML = index + 1;
                        });
                        currentStep = 0;
                        showStep(currentStep);
                        rekeningInfo.innerHTML = '';
                    });
                } else {
                    // Jika status bukan 'success', tampilkan pesan error umum
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan!',
                        text: data.message || 'Tidak dapat memproses permintaan Anda.',
                    });
                }
            })
            .catch(error => {
                if (error.errors) {
                    let errorMessages = '';
                    for (const [field, messages] of Object.entries(error.errors)) {
                        errorMessages += `${field}: ${messages.join(', ')}<br>`;
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan!',
                        html: errorMessages,
                    });
                } else if (error.message) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan!',
                        text: error.message,
                    });
                } else {
                    console.error('Error saat mengirim data:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi Kesalahan!',
                        text: 'Tidak dapat mengirim data formulir.',
                    });
                }
            });
        }
    });

    // Inisialisasi ulang selection boxes dan toggle switch saat halaman dimuat
    initializeSelectionBoxes();
    initializeToggleSwitch();
});

    </script>
</body>
</html>
