<div class="modal fade" tabindex="-1" role="login" id="loginModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <form action="<?php echo base_url()?>user/login" method="post">
			<div class="form-group" >
			  <input name="Username" class="form-control" placeholder="Username">
      </div>
      <div class="form-group">
			  <input name="Password" type="password" class="form-control" placeholder="Password">
			</div>
			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
		  </form>
      </div>
    </div>
  </div>
</div>