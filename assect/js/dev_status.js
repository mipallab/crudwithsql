/**
 *
 * status ajax code
 */

$(document).on("click", ".status", function () {
  let dev_id = $(this).attr("user-id");
  let dev_status = $(this).prop("checked") ? 1 : 0;

  $.ajax({
    url: "./ajax/dev_status.php",
    type: "POST",
    data: {
      dev_id: dev_id,
      dev_status: dev_status,
    },
    success: (data) => {
      Swal.fire({
        position: "top-center",
        icon: "success",
        title: "Status Update Successfull",
        showConfirmButton: false,
        timer: 2000,
      });
    },
    error: (xhr, status, error) => {
      console.error("AJAX Error:", status, error);
    },
  });
});
