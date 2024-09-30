<!-- app/Views/admin/petugas/form_create.php -->
<?= $this->section('form'); ?>
<div class="w-full max-w-md mx-auto bg-blue-50 p-6 rounded-xl shadow-lg text-blue-500 border border-green-500 mt-8">
    <form action="<?= base_url('petugas/create') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-4">
            <label for="nama_petugas" class="block mb-2">Nama Petugas</label>
            <input type="text" name="nama_petugas" id="nama_petugas"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="no_registrasi" class="block mb-2">No. Registrasi</label>
            <input type="text" name="no_registrasi" id="no_registrasi"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="kecamatan" class="block mb-2">Kecamatan</label>
            <input type="text" name="kecamatan" id="kecamatan"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="desa_binaan" class="block mb-2">Desa Binaan</label>
            <input type="text" name="desa_binaan" id="desa_binaan"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="nomor_hp" class="block mb-2">Nomor HP</label>
            <input type="text" name="nomor_hp" id="nomor_hp"
                class="form=control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="password" class="block mb-2">Kata Sandi</label>
            <input type="password" name="password" id="password"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500"
                required>
        </div>
        <div class="mb-4">
            <label for="status" class="block">Status</label>
            <select name="status" id="status"
                class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500">
                <option value="approve">Approve</option>
                <option value="pending">Pending</option>
                <option value="reject">Reject</option>
            </select>
        </div>
        <div class="mb-4">
            <!-- Foto Petugas -->
            <label for="foto">Foto Petugas</label>
            <input type="file" name="foto" id="foto" class="form-control w-full px-3 py-1 border border-green-500 rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="flex justify-center items-center">
            <!-- Submit Button -->
            <button type="reset" class="px-3 py-1 bg-gray-500 text-white rounded-lg mr-2">Batal</button>
            <button type="submit" class="px-3 py-1 bg-blue-600 text-white rounded-lg ml-2">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>