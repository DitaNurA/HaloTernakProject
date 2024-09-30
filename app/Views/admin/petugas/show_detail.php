<!-- app/Views/admin/petugas/show_detail.php -->
<?= $this->section('show_detail'); ?>

<div class="w-full max-w-md mx-auto bg-blue-50 p-6 rounded-xl shadow-lg text-blue-500 border border-green-500 mt-8">
    <form action="<?= base_url('petugas/update/' . $petugas['id_petugas']) ?>" method="POST" enctype="multipart/form-data">
        <?=csrf_field()?>
        <div class="mb-4">
            <label for="nama_petugas" class="block mb-2">Nama Petugas</label>
            <input type="text" name="nama_petugas" id="nama_petugas" value="<?= $petugas['nama_petugas'] ?>"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="no_registrasi" class="block mb-2">No. Registrasi</label>
            <input type="text" name="no_registrasi" id="no_registrasi" value="<?= $petugas['no_registrasi'] ?>"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="kecamatan" class="block mb-2">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan" value="<?= $petugas['kecamatan'] ?>"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="desa_binaan" class="block mb-2">Desa Binaan</label>
            <input type="text" name="desa_binaan" id="desa_binaan" value="<?= $petugas['desa_binaan'] ?>"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="nomor_hp" class="block mb-2">Nomor HP</label>
            <input type="text" name="nomor_hp" id="nomor_hp" value="<?= $petugas['nomor_hp'] ?>"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-2">Kata Sandi</label>
            <input type="password" name="password" id="password"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="status" class="block">Status</label>
            <select name="status" id="status"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500">
                <option value="approve" <?= $petugas['status'] === 'approve' ? 'selected' : '' ?>>Approve</option>
                <option value="pending" <?= $petugas['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="reject" <?= $petugas['status'] === 'reject' ? 'selected' : '' ?>>Reject</option>
            </select>
        </div>
        <div class="mb-4">
    <label for="foto">Foto Petugas</label>
    <input type="file" name="foto" id="foto" 
        class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500">

    <!-- Jika ada foto lama, tampilkan -->
    <?php if ($petugas['foto']): ?>
        <input type="hidden" name="foto_lama" value="<?= $petugas['foto'] ?>">
        <img src="<?= base_url('assets/uploads/petugas/' . $petugas['foto']) ?>" alt="Foto Petugas" class="w-20 h-20 mt-2">
        <p class="text-sm text-gray-600">File yang ada: <?= $petugas['foto'] ?></p>
    <?php endif; ?>
</div>
        <div class="flex justify-center items-center">
            <!-- Cancel Button -->
            <a href="<?= base_url('petugas') ?>" class="px-3 py-1 bg-gray-500 text-white rounded-lg mr-2">Batal</a>
            <!-- Submit Button -->
            
            <button type="submit" class="px-3 py-1 bg-blue-600 text-white rounded-lg ml-2">Ubah</button>
        </div>
        
    </form>
</div>

<?= $this->endSection(); ?>