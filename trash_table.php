<!-- header template -->
<?php
// header template 
if (file_exists(__DIR__ . "/template/header.php")) {
    require_once __DIR__ . "/template/header.php";
} else {
    echo "<b>header.php</b> not found!";
}
?>


<div class="container mt-5">
    <a class="btn btn-primary my-3" href="index.php">All Devs</a>
    <a class="btn btn-danger my-3" href="trash_table.php">Trash Data</a>
    <div class="card mb-5">
        <div class="card-header">
            <h2>All Trash Devs Data</h2>
        </div>
        <div id="trashDevData" class="card-body">

        </div>
    </div>
</div>




<!-- footer template -->
<?php
// footer template 
if (file_exists(__DIR__ . "/template/footer.php")) {
    require_once __DIR__ . "/template/footer.php";
} else {
    echo "<b>footer.php</b> not found!";
}
?>