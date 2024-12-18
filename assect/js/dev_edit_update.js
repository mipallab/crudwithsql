/**
 * update dev data with ajax
 * */
$(document).on("submit", "#dev_edit_form", function (e) {
  e.preventDefault();

  //get form data
  const dev_edit_form_data = new FormData(e.target);

  $.ajax({
    url: "./ajax/dev_edit_update.php",
    method: "POST",
    data: dev_edit_form_data,
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
        timer: 5000,
      });

      $(".btn-close").click();

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
  console.log("Dynamic form submission prevented.");
});
