// TABLE PAGINATION
$(document).ready(function () {
    $.fn.dataTable.ext.errMode = 'none';
    $('#suppliersTable').DataTable({
        pageLength: 5
    });
});
// TABLE PAGINATION END

// DELETE CONFIRMATION DIALOG ON DELETE SUPPLIER BUTTON
document.querySelectorAll('.supplierListDeleteBtn').forEach(btn => {
    btn.addEventListener('click', function(e){
        e.preventDefault();
        const deleteSupplierUrl = btn.getAttribute('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete supplier',
        }).then((result) => {
            if(result.isConfirmed){
                window.location.href = deleteSupplierUrl;
            }
        });
    });
});
// DELETE CONFIRMATION DIALOG ON DELETE SUPPLIER BUTTON END