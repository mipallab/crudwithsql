/**
 *
 * trash ajax code
 */

$(document).on("click", ".reset_Dev_Data", function () {
  //   alert("Dev Move to Trash");

  let dev_trash_id = $(this).attr("user-id");

  $.ajax({
    url: "./ajax/trash_reset_data.php",
    data: {
      dev_reset_trash_id: dev_trash_id,
    },
    type: "POST",
    dataType: "json",
    success: (data) => {
      let message = console.log(data);
      Swal.fire({
        title: "Data Reset Successfull",
        html: `Developer data move to Main site. This data visible in <a href="index.php" autofocus> main page</a>`,
        icon: "success",
        timer: 3000,
      });

      get_all_trash_data();
    },
    error: (xhr, status, error) => {
      console.error("AJAX Error:", status, error);
    },
  });
});
