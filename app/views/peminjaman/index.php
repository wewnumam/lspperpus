<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Buku Dipinjam</h3>
            <?php Flasher::flash(); ?>
            <ul class="list-group">
                <?php foreach( $data['peminjaman'] as $p ) : ?>
                <li class="list-group-item">
                    <?= $p['judul']; ?>
                    <?php if($p['dikembalikan'] > 0): ?>
                    <a class="badge badge-success float-right text-white">dikembalikan</a>
                    <?php else: ?>
                    <a class="badge badge-danger float-right text-white">belum dikembalikan</a>
                    <?php endif ?>
                    <a href="<?= BASEURL; ?>/peminjaman/detail/<?= $p['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>