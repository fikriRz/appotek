<article>
    <h3 class="h3 mt-3"><?= $data['judul'] ?></h3>
    <div class="row mt-3">
        <div class="col-2"></div>
        <div class="col-3">
            <label for="">Tanggal Awal:</label>
        </div>
        <div class="col-3">
            <label for="">Tanggal Akhir:</label>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-2"></div>
        <div class="col-3">
            <input class="form-control" type="date" name="tglawal" id="tglawal">
        </div>
        <div class="col-3">
            <input class="form-control" type="date" name="tglakhir" id="tglakhir">
        </div>
        <div class="col-1">
            <a href="<?= BASEURL; ?>/laporan/cari/"><button class="btn btn-outline-dark">Cari</button></a>
        </div>
    </div>
</article>