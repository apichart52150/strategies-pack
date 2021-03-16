$('#sa-warning').click(function () {
  var id = $(this).data("id");
  Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then(function (result) {
      if (result.value) {
        Swal.fire("Deleted!", "Your file has been deleted.", "success");
      }
  });
});
