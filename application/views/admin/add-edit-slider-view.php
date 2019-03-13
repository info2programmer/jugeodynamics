<section id="mainBody">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb" style="background-color: #006393;font-family: 'Kodchasan', sans-serif;color:#FFFFFF;">
          <li><a href="<?php echo base_url() ?>dashboard.html" style="color:#FFFFFF;">DASHBOARD</a></li>
          <li><a href="<?php echo base_url() ?>manage-news.html" style="color:#FFFFFF;">NEWS MANAGEMENT</a></li>
          <li><?php echo $pageName ?></li>
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
        <form action="" method="post" enctype="multipart/form-data">
        <?php if(isset($sliderData)): ?>
          <div class="row">
            	<div class="col-md-3"><label for=""><h4>Old Image</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                      <img src="<?php echo base_url() ?>assets/front/slider-image/<?php echo $sliderData->slider ?>" alt="" srcset="" width="200">
                      <input type="hidden" name="txtOldImage" value="<?php echo $sliderData->slider ?>">
                    </div>
                </div>
            </div>
        <?php endif ?>
        	<div class="row">
            	<div class="col-md-3"><label for=""><h4>Slider Image</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="file" value="" name="imageFile" class="form-control" <?php if(isset($sliderData)): ?>required<?php endif ?> />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-3"><label for=""><h4>Content Line 1 </h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="text" value="<?php if(isset($sliderData)): ?><?php echo $sliderData->content_1 ?><?php endif ?>" name="txtContent1" class="form-control" placeholder="Enter Your Slider Content"  />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-3"><label for=""><h4>Content Line 2</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="text" value="<?php if(isset($sliderData)): ?><?php echo $sliderData->content_2 ?><?php endif ?>" name="txtContent2" class="form-control" placeholder="Enter Your Slider Content" />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-3"><label for=""><h4>Content Color</h4></label></div>
                <div class="col-md-9">
                    <div class="form-group">
                    	<input type="color" name="txtContentColor" class="form-control" placeholder="Select Content Color" value="<?php if(isset($sliderData)): ?><?php echo $sliderData->color ?><?php endif ?>" />
                    </div>
                </div>
            </div>
            
            
            <div class="row">
            	<div class="col-md-3"><h4>&nbsp;</h4></div>
                <div class="col-md-9">
                  <button class="btn btn-success" type="submit" name="btnSubmit" value="submit"><?php if(isset($sliderData)): ?>Update Data<?php else: ?>Submit<?php endif ?></button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>