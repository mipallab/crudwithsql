/**
 * insert dev data with ajax
 * */
$(document).ready(function () {
  $("#dev_form").submit(function (e) {
    // form defalut beheaver stop
    e.preventDefault();

    //get form data
    const dev_form_data = new FormData(e.target);

    $.ajax({
      url: "./ajax/insert-dev.php",
      method: "POST",
      data: dev_form_data,
      processData: false,
      contentType: false,
      dataType: "json",

      success: (data) => {
        console.log("Parsed Data: ", data);
        let icon_status = data.status === "success" ? "success" : "error";

        Swal.fire({
          position: "top-center",
          icon: icon_status,
          title: data.message,
          showConfirmButton: false,
          timer: 2000,
        });

        $(".btn-close").click();

        e.target.reset();
        // show all data
        get_all_data();
      },
      error: (error) => {
        console.error(error);
        Swal.fire({
          position: "top-center",
          icon: "error",
          title: "An error occurred.",
          showConfirmButton: false,
          timer: 2200,
        });
      },
    });
  });
});
