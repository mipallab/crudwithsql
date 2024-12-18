/**
 *
 * Show All Trash data ajax code
 */

$(document).ready(function () {
  get_all_trash_data = () => {
    $.ajax({
      url: "./ajax/trashAllData.php",
      type: "POST",
      success: (data) => {
        $("#trashDevData").html(data);
      },
      error: (xhr, status, error) => {
        console.error("AJAX Error:", status, error);
      },
    });
  };

  get_all_trash_data();
});
