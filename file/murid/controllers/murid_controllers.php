<?php
$db = __database();
$opsi = $_GET['action'];
// start input
if ($opsi == "input") {
    $data = [
        'nm_siswi' => $_POST['nm_siswi'],
        'kd_pelajaran' => $_POST['kd_pelajaran'],
        'nilai' => $_POST['nilai'],
        'nm_ustadzah' => $_POST['nm_ustadzah'],
    ];
    $simpan = __simpan($db, "murid", $data);
    if ($simpan){
?>
        <script>
            window.location.href = 'admin.php?target=murid';
        </script>
    <?php
    }else {
        echo "gagal simpan" . $db->error;
    }
}
// end kondisi input
?>