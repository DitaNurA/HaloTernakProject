<!-- app/Views/admin/dashboard/navbar-menu.php -->
<div id="dropdown-menu"
    class="block hidden rounded-xl mt-2 shadow-lg absolute top-16 w-auto left-0 right-0 mx-auto max-w-sm z-10">
    <ul id="menu-list" class="mt-1 p-3 bg-primary bg-opacity-10 backdrop-blur-md rounded-lg text-center">
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('petugas') ?>">Data Petugas</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('admin/peternak') ?>">Data Peternak</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('posternak') ?>">Postingan Ternak</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('admin/obat') ?>">Obat</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('edukasi') ?>">Edukasi</a></li>
        <li class="py-1 text-base font-light text-center transition ease-in-out hover:underline"><a href="<?= base_url('kotak_saran') ?>">Kotak Saran</a></li>
        <li><a href="<?= base_url('akun') ?>"><button class="button-outline-primary py-1 font-light w-full text-base rounded-md bg-primary text-white">Akun</button></a></li>
        <li><button class="py-1 border border-primary font-light w-full text-base rounded-md mt-1"><a href="<?= base_url('login_admin') ?>">Keluar</a></li>
    </ul>
</div>
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/menu.js'); ?>"></script>

