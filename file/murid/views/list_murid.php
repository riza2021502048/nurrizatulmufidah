<div class="card">
    <div class="card-header">
        <h4>List Murid</h4>
    </div>
    <div class="card-body">
        <?php
        $db = __database();
        // buat header table
        echo "<a class='btn btn-primary btn-sm' href='admin.php?target=murid&action=form'>Tambah</a><br><br>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-bordered'>
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswi</th>
            <th>Kd Pelajaran</th>
            <th>nilai</th>
            <th>Nama Ustadzah</th>
        </tr>
        </thead>
        <tbody>";
        // ambil data dari database
        $q = __ambil($db, "murid");
        $no = 1;
        while ($r = $q->fetch_array()) {
            echo "<tr>
            <td>" . $no . "</td>
            <td>" . $r['nm_siswi'] . "</td>
            <td>" . $r['kd_pelajaran'] . "</td>
            <td>" . $r['nilai'] . "</td>
            <td>" . $r['nm_ustadzah'] . "</td>
        </tr>";
            $no++;
        }
        echo "</tbody></table></div>"; ?>
    </div>
</div>