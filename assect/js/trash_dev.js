/**
 *
 * trash ajax code
 */

$(document).on("click", ".trash_Dev_Data", function () {
  let dev_trash_id = $(this).attr("user-id");

  $.ajax({
    url: "./ajax/trash.php",
    data: {
      dev_trash_id: dev_trash_id,
    },
    type: "POST",
    dataType: "json",
    success: (data) => {
      let message = console.log(data);
      Swal.fire({
        title: "Data Move to Trash",
        html: `Developer data move to trash. You can permanently delete <a href="trash_table.php" autofocus>trash page</a>`,
        icon: "info",
        timer: 3000,
      });

      get_all_data();
    },
    error: (xhr, status, error) => {
      console.error("AJAX Error:", status, error);
    },
  });
});
