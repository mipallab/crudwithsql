/**
 *
 * delete ajax code
 */

$(document).on("click", ".delete_Dev_Data", function () {
  //   alert("Dev Move to Trash");

  let dev_delete_id = $(this).attr("user-id");

  $.ajax({
    url: "./ajax/delete_dev.php",
    data: {
      dev_delete_id: dev_delete_id,
    },
    type: "POST",
    dataType: "json",
    success: (data) => {
      let message2 = console.log(data);
      let message = console.log(data.parse);
      Swal.fire({
        title: "Data Delete Successfully!",
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
