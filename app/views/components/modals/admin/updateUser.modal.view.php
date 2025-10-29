<div class="modal fade" id="updateUserModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="" method="POST">
        <div class="modal-header">
          <h5 class="modal-title">Update User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="user_id" id="modal_user_id">

          <div class="mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="modal_firstname">
          </div>

          <div class="mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="modal_lastname">
          </div>

          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="modal_email">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>