/**
 *
 * status ajax code
 */

$(document).on("click", ".dev_view", function () {
  let dev_id = $(this).attr("user-id");

  $.ajax({
    url: "./ajax/dev_view.php",
    type: "POST",
    data: {
      dev_id: dev_id,
    },
    success: (data) => {
      $(".show-dev-single-data").html(data);
      console.log("single show data success");
    },
    error: (xhr, status, error) => {
      console.error("AJAX Error:", status, error);
    },
  });
});
