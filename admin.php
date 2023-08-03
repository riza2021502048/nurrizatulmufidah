<?php
session_start();
include "config/config_url.php";
include "config/config_database.php";

?>
<!DOCTYPE html>
<html lang="en">

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Uts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.dataTables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Web My UTS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>"><i class="fa-solid fa-house"></i>Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isset($_GET['target']) && $_GET['target'] == 'murid' ? "active" : ""; ?>" href="<?php echo base_url(); ?>admin.php?target=murid"><i class="fa-solid fa-building-columns"></i>Murid</a>
                    </li>   
                </ul>
            </div>  
        </div>
    </nav>
    <div class="clearfix">&nbsp;</div>
    <div class="container">
        <?php include_once "content.php"; ?>
    </div>
    <script src="https://code.jquery.com/jqueri-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://kit.fontawesome.com/4af1d56044.js" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $('.table').DataTable();
            });
        </script>
</body>
</html>