<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Profil Pengguna</h5>

        <ul>
            <li><strong>Username:</strong> <?= esc($username) ?></li>
            <li><strong>Role:</strong> <?= esc($role) ?></li>
            <li><strong>Email:</strong> <?= esc($email) ?></li>
            <li><strong>Waktu Login:</strong> <?= esc($login_time) ?></li>
            <li><strong>Status Login:</strong> 
                <?= $isLoggedIn ? 'Sudah Login' : 'Belum Login' ?>
            </li>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>