<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./assect/js/bootstrap.bundle.min.js"></script>
<script src="./assect/js/popper.min.js"></script>
<script src="./assect/js/bootstrap.min.js"></script>
<script src="./assect/js/insert-ajax.js"></script>
<script src="./assect/js/showAllData.js"></script>
<script src="./assect/js/dev_status.js"></script>
<script src="./assect/js/dev_view.js"></script>
<script src="./assect/js/dev_edit_view.js"></script>
<script src="./assect/js/dev_edit_update.js"></script>
<script src="./assect/js/trash_dev.js"></script>
<script src="./assect/js/trashAllData.js"></script>
<script src="./assect/js/delete_dev.js"></script>
<script>
    /**
     * Photo preview for file input fields
     */
    $(document).ready(function() {
        // Generalized function for handling photo previews
        const handlePhotoPreview = (inputSelector, imgSelector) => {
            $(document).on("change", inputSelector, function(e) {
                const imgUrl = URL.createObjectURL(e.target.files[0]);
                $(imgSelector).attr("src", imgUrl);
            });
        };

        // Photo preview for dynamically loaded content
        handlePhotoPreview("#devPhoto", "#prevPhoto"); // For add form
        handlePhotoPreview("#editDevPhoto", "#newPrevPhoto"); // For edit form
    });
</script>
</body>

</html>