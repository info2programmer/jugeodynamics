<section id="mainBody">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb" style="background-color: #006393;font-family: 'Kodchasan', sans-serif;color:#FFFFFF;">
          <li><a href="<?php echo base_url() ?>dashboard.html" style="color:#FFFFFF;">DASHBOARD</a></li>
          <li><a href="#" style="color:#FFFFFF;"><?php echo $pageName ?></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="mainBody">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 col-sm-12">
          <?php if($this->session->flashdata('error_message')): ?>
            <h4 class="alert alert-warning"><?php echo $this->session->flashdata('error_message') ?></h4>
          <?php elseif($this->session->flashdata('success_message')): ?>
            <h4 class="alert alert-success"><?php echo $this->session->flashdata('success_message') ?></h4>    
          <?php endif ?>
      </div>
      
      <div class="col-md-12 col-sm-12">
        <h4>&nbsp;</h4>
        <form action="" method="post">
        	<div class="row">
            	<div class="col-md-3"><label for=""><h4>Current Password</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="password" value="" name="txtCurrentPassword" class="form-control" placeholder="Enter your current password" required />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-3"><label for=""><h4>New Password</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="password" value="" name="txtNewPassword" class="form-control" placeholder="Enter new passwod" required />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-3"><label for=""><h4>Again New Password</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="password" value="" name="txtReNewPassword" class="form-control" placeholder="Re-Enter your new passwod" required />
                    </div>
                </div>
            </div>
            
            
            <div class="row">
            	<div class="col-md-3"><h4>&nbsp;</h4></div>
                <div class="col-md-9">
                    <button class="btn btn-success" type="submit" name="btnSubmit" value="submit">Submit</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>