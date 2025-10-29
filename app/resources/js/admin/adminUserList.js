
// TABLE PAGINATION
$(document).ready(function () {
    $('#usersTable').DataTable({
        pageLength: 5
    });

});

// TABLE PAGINATION END

// VALUE FILLER OF UPDATE USER MODAL
document.querySelectorAll(".userListUpdateBtn").forEach(button => {
  button.addEventListener("click", (event) => {
    event.preventDefault();

    const userId = button.getAttribute("data-user-id");
    const firstName = button.getAttribute("data-user-firstname");
    const lastName = button.getAttribute("data-user-lastname");
    const userEmail = button.getAttribute("data-user-email"); 

    document.getElementById('modal_user_id').value = userId; 
    document.getElementById('modal_firstname').value = firstName; 
    document.getElementById('modal_lastname').value = lastName; 
    document.getElementById('modal_email').value = userEmail; 
  });
});
// VALUE FILLER OF UPDATE USER MODAL END

// DELETE CONFIRMATION DIALOG ON DELETE USER BUTTON
document.querySelectorAll('.userListDeleteBtn').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const url = btn.getAttribute('href');
    Swal.fire({
      title: 'Are you sure?',
      text: "This action cannot be undone.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete user',
      cancelButtonText: 'Cancel'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  });
});
// DELETE CONFIRMATION DIALOG ON DELETE USER BUTTON END



