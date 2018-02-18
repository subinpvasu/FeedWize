
<!-- Modal -->
<div id="AccountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New Account</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="email">Account Name:</label>
      <input type="email" class="form-control" id="account_name" placeholder="Account Name" name="account_name" required="">
    </div>
      </div>
      <div class="modal-footer">
          <div class="button-section">
              <button type="button" id="account_create" class="btn btn-success">Create</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </div>
          <div class="wait-section">
              <i class="fas fa-circle-notch fa-spin org-colors" style="font-size: 25px;"></i>
          </div>
        
      </div>
    </div>

  </div>
</div>