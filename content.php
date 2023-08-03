<?php

if (!isset($_GET['target'])) {
?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Selamat Datang di Halaman Dasbosrd</h4>
                <div class="clearfix"></div>
            </div>

            <!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
const xValues = [50,60,70,80,90,100,110,120,130,140,150];
const yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>

</body>
</html>

<div class="x_content">
                <br>
                Web ini dibuat untuk tugas UTS pemrograman Web
                <br><br>
                Tanggal : <?php echo date("d/m/y"); ?>
            </div>
        </div>
    </div>
    <?php
}else {
    $target = $_GET['target'];
    if (empty($target)) {
    ?>
        <script>
            window.location.href = 'admin.php';
        </script>
<?php
    }

    if (!isset($_GET['action'])) {
        getContentAdmin(base_url(), $target);
    }else {
        getContentAdmin(base_url(), $target, $_GET['action']);
    }
}
?>