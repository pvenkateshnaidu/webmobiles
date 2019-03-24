 <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Add New College</h4>
        <p class="mg-b-0">Super admin manages the colleges add or delete.</p>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
		<form method="post" id="addCollege" action="<?= site_url('Dashboard/addCollege'); ?>">
          <div class="form-layout form-layout-2">
            <div class="row no-gutters">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="form-control-label">College Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="college_name" value="" placeholder="Enter firstname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Principle Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="priniciple_name" value="" placeholder="Enter lastname">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-4 mg-t--1 mg-md-t-0">
                <div class="form-group mg-md-l--1">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="college_email" value="" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->
              <div class="col-md-8">
                <div class="form-group bd-t-0-force">
                  <label class="form-control-label">Mail address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-md-4">
                <div class="form-group mg-md-l--1 bd-t-0-force">
                  <label class="form-control-label mg-b-0-force">Country: <span class="tx-danger">*</span></label>
                  <select id="select2-a" name="country" class="form-control select2-hidden-accessible" data-placeholder="Choose country" tabindex="-1" aria-hidden="true">
                    <option value="USA" selected="">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
              <button type="submit" class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-group -->
          </div><!-- form-layout -->
			</form>
			 <?php if(!empty($error_message)) { ?>
			<div class="alert alert-danger mg-t-30" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			<?php echo validation_errors(); ?>          
          </div>
			 <?php } ?>
		  <?php if(!empty($success_message)) { ?>
			<div class="alert alert-success mg-t-30" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			
		
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span><?php echo $success_message; ?></span>
            </div><!-- d-flex -->
          </div>
          <?php } ?>

        </div><!-- br-section-wrapper -->
      </div>
	 