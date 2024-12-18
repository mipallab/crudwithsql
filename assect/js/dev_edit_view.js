/**
 * Edit dev data
 */

$(document).on("click", ".dev_edit", function () {
  let dev_edit_id = $(this).attr("user-id");
  console.log(dev_edit_id);

  $.ajax({
    url: "./ajax/dev_edit.php",
    type: "POST",
    data: {
      dev_ed_id: dev_edit_id,
    },
    success: (data) => {
      $(".edit-dev-data").html(data);
    },
    error: (xhr, status, error) => {
      console.error("AJAX Error:", status, error);
    },
  });
});
