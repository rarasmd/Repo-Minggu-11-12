<style>
    td,
    th {
        border: 2px solid black;
        text-align: left;
        padding: 1px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>


<table align="center" cellpadding=3 cellspacing=3>
    <?php
    $kalimat = $datas['nama'];
    $sub_kalimat = substr($kalimat, 0, 5);
    ?>
    <tr>
        <td align="center">Cetak Profil <?= $sub_kalimat; ?></td>
    </tr>
    <tr>
        <td align="center"><img src="assets/logo/<?= $datas['logo']; ?>" style="width:50%"></td>

    </tr>
    <tr>
        <td align="center">
            <?= $datas['nama']; ?>
            <br>
            <?= $datas['alamat']; ?>
        </td>
    </tr>

</table>