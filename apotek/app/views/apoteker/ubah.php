<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/apoteker/ubahData" method="POST" class="formisi">
        <table>
            <tr>
                <td><input type="hidden" value="<?= $data['apotekerId']['id_apoteker'] ?>" readonly name="id_apoteker" id="id_apoteker"></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" value="<?= $data['apotekerId']['username'] ?>" name=" username" id="username"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td>:</td>
                <td><input type="text" value="<?= md5($data['apotekerId']['pass']) ?>" name=" pass" id="pass"></td>
            </tr>
            <tr>
                <td><label for="nama_apoteker">Nama Apoteker</label></td>
                <td>:</td>
                <td><input type="text" value="<?= $data['apotekerId']['nama_apoteker'] ?>" name=" nama_apoteker" id="nama_apoteker"></td>
            </tr>
            <tr>
                <td><label for="telp">Telepon</label></td>
                <td>:</td>
                <td><input type="text" value="<?= $data['apotekerId']['telp'] ?>" name=" telp" id="telp"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="buttonsimpan" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="<?= BASEURL; ?>/apoteker/index/"><button class="button_kembali">Kembali</button></a>
</article>