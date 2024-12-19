/**
 *
 * delete ajax code
 */

$(document).on("click", ".delete_Dev_Data", function () {
  //   alert("Dev Move to Trash");
  if (confirm("Are you sure? Dev data  delete. parmanently")) {
    let dev_delete_id = $(this).attr("user-id");

    $.ajax({
      url: "./ajax/delete_dev.php",
      data: {
        dev_delete_id: dev_delete_id,
      },
      type: "POST",

      success: (data) => {
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
  }
});
