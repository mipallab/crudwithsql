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
    <a class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#insertData" href="#">Add Data</a>
    <a class="btn btn-danger my-3" href="trash_table.php">Trash Data</a>
    <div class="card mb-5">
        <div class="card-header">
            <h2>All Devs</h2>
        </div>
        <div id="devAllData" class="card-body">

        </div>
    </div>
</div>


<!-- insert data model -->
<div class="modal fade" id="insertData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Add Developer</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="dev_form" enctype="multipart/form-data">
                    <!-- full name field -->
                    <div class="field mb-3">
                        <label class="mb-2" for="fullName">Full Name</label>
                        <input class="form-control" id="fullName" type="text" name="fullname">
                    </div>
                    <!-- email field -->
                    <div class="field mb-3">
                        <label class="mb-2" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email">
                    </div>
                    <!-- Skill field -->
                    <div class="field mb-3">
                        <label class="mb-2" for="skill">Skill</label>
                        <input class="form-control" id="skill" type="text" name="skill">
                    </div>
                    <!-- Location field -->
                    <div class="field mb-3">
                        <label class="mb-2" for="Location">Location</label>
                        <input class="form-control" id="Location" type="text" name="location">
                    </div>
                    <!-- preview image  -->
                    <div class="field mb-3 border">
                        <img class="w-100" id="prevPhoto"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyDgkPQavzX7KwcLzeAsf0fgOx_-D51F3fag&s"
                            alt="">
                    </div>
                    <!-- form_submit field -->
                    <div class="field mb-3">
                        <input class="form-control" id="form_submit" type="hidden" name="form_submit" value="submit">
                    </div>
                    <!-- photo field -->
                    <div class="field mb-3">
                        <label class="mb-2" for="devPhoto">Photo</label>
                        <input class="form-control" id="devPhoto" type="file" name="dev_photo">
                        <small class="text-sm muted">only support [jpg,png]</small>
                    </div>
                    <div class="field-btn">
                        <input id="dev_form_submit" type="submit" class="btn btn-primary" name="create_dev"
                            value="Submit">
                        <input class="btn btn-secondary" type="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit data model -->
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content edit-dev-data">

        </div>
    </div>
</div>

<!-- view data model -->
<div class="modal fade" id="viewData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content show-dev-single-data">

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