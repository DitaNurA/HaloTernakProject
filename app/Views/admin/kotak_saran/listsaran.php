<!-- app/Views/admin/kotak_saran/listsaran.php -->
<?= $this->section('listsaran'); ?>
<!-- List Saran -->
<div class="mt-4">
    <!-- Contoh Saran -->
    <div class="grid grid-cols-1 gap-4">
        <?php for ($i = 0; $i < 5; $i++): ?>
        <div class="bg-white shadow p-4 rounded-lg">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Nama Pengguna <?= $i+1 ?></h2>
                    <span class="text-gray-500 text-sm">No. Telp: 0812xxxxxxx</span>
                </div>
                <!-- Tombol untuk toggle detail -->
                <button id="toggleButton-<?= $i ?>" class="bg-blue-500 text-white text-sm px-2 py-1 rounded" onclick="toggleDetail(<?= $i ?>)">
                    Lihat Saran
                </button>
            </div>

            <!-- Detail yang disembunyikan awalnya -->
            <div id="detail-<?= $i ?>" class="mt-4 hidden">
                <p class="text-gray-700 text-sm bg-blue-50 p-2 rounded">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <!-- Tombol Kirim Pesan di dalam detail -->
                <div class="mt-2">
                    <button class="bg-green-500 text-white text-sm px-4 py-2 rounded" onclick="sendWhatsApp(<?= $i ?>)">
                        Kirim Pesan
                    </button>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan atau menyembunyikan detail saran
    function toggleDetail(index) {
        const detailElement = document.getElementById(`detail-${index}`);
        const toggleButton = document.getElementById(`toggleButton-${index}`);

        // Jika detail saat ini tersembunyi, maka tampilkan
        if (detailElement.classList.contains('hidden')) {
            detailElement.classList.remove('hidden');
            // Ubah teks tombol menjadi 'X'
            toggleButton.textContent = 'X';
            toggleButton.classList.remove('bg-blue-500');
            toggleButton.classList.add('bg-red-500');
        } else {
            // Jika detail ditampilkan, sembunyikan kembali
            detailElement.classList.add('hidden');
            // Ubah kembali teks tombol menjadi 'Lihat Saran'
            toggleButton.textContent = 'Lihat Saran';
            toggleButton.classList.remove('bg-red-500');
            toggleButton.classList.add('bg-blue-500');
        }
    }

    // Fungsi untuk membuka WhatsApp
    function sendWhatsApp(index) {
        const phone = '0812xxxxxxx'; // Ubah sesuai dengan nomor telepon yang diinginkan
        const url = `https://wa.me/${phone}`;
        window.open(url, '_blank');
    }
</script>
<?= $this->endSection(); ?>
