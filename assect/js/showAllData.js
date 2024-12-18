/**
 *
 * Show All data ajax code
 */

$(document).ready(function () {
  get_all_data = () => {
    $.ajax({
      url: "./ajax/show-all.php",
      type: "POST",
      success: (data) => {
        $("#devAllData").html(data);
      },
      error: (error) => {},
    });
  };

  get_all_data();
});
