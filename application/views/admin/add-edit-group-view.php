<section id="mainBody">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb" style="background-color: #006393;font-family: 'Kodchasan', sans-serif;color:#FFFFFF;">
                    <li><a href="<?php echo base_url() ?>dashboard.html" style="color:#FFFFFF;">DASHBOARD</a></li>
                    <li><a href="<?php echo base_url() ?>manage-group.html" style="color:#FFFFFF;">GROUP MANAGEMENT</a></li>
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
                <?php if ($this->session->flashdata('error_message')) : ?>
                <h4 class="alert alert-warning"><?php echo $this->session->flashdata('error_message') ?></h4>
                <?php elseif ($this->session->flashdata('success_message')) : ?>
                <h4 class="alert alert-success"><?php echo $this->session->flashdata('success_message') ?></h4>
                <?php endif ?>
            </div>

            <div class="col-md-12 col-sm-12">
                <h4>&nbsp;</h4>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Member Name</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" value="<?php if (isset($groupData)) : ?><?php echo $groupData->name ?><?php endif ?>" name="name" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <?php if (isset($groupData)) : ?>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Old Image</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <img src="<?php echo base_url() ?>assets/front/group-image/<?php echo $groupData->image ?>" alt="" srcset="" width="200">
                                <input type="hidden" name="txtOldImage" value="<?php echo $groupData->image ?>">
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Member Image</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="file" value="" name="imageFile" class="form-control" <?php if (!isset($groupData)) : ?>required<?php endif ?> />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>About <sup>150 character max</sup></h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea maxlength='150' name="about" class="form-control"><?php if (isset($groupData)) : ?><?php echo $groupData->about ?><?php endif ?></textarea>
                                <div id="countElement"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Link 1</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" value="<?php if (isset($groupData)) : ?><?php echo $groupData->link1 ?><?php endif ?>" name="link1" class="form-control"  />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Link 2</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" value="<?php if (isset($groupData)) : ?><?php echo $groupData->link2 ?><?php endif ?>" name="link2" class="form-control"  />
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-md-3">
                            <h4>&nbsp;</h4>
                        </div>
                        <div class="col-md-9">
                            <button class="btn btn-success" type="submit" name="btnSubmit" value="submit"><?php if (isset($groupData)) : ?>Update Data<?php else : ?>Submit<?php endif ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
      var textarea = document.querySelector("textarea");

        textarea.addEventListener("input", function(){
            var maxlength = this.getAttribute("maxlength");
            var currentLength = this.value.length;

            if( currentLength >= maxlength ){
                $('#countElement').html("You have reached the maximum number of characters.");
            }else{
                $('#countElement').html(maxlength - currentLength + " chars left");
            }
        });
    </script>
</section> 