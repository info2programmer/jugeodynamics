<section id="mainBody">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb" style="background-color: #006393;font-family: 'Kodchasan', sans-serif;color:#FFFFFF;">
                    <li><a href="<?php echo base_url() ?>dashboard.html" style="color:#FFFFFF;">DASHBOARD</a></li>
                    <li><a href="<?php echo base_url() ?>manage-publication.html" style="color:#FFFFFF;">PUBLICATION MANAGEMENT</a></li>
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
                                <h4>Publication Date</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="date" value="<?php if (isset($publicationData)) : ?><?php echo $publicationData->date ?><?php endif ?>" name="txtDate" class="form-control" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Title</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" value="<?php if (isset($publicationData)) : ?><?php echo $publicationData->title ?><?php endif ?>" name="txtTitle" class="form-control" placeholder="Enter Publication Title" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Content</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <textarea id="editor" name="txtContent" required><?php if (isset($publicationData)) : ?><?php echo $publicationData->content ?><?php endif ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3"><label for="">
                                <h4>Type</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="ddlType" id="ddlType" class="form-control" required>
                                    <option value="" selected hidden>Select</option>
                                    <option <?php if (isset($publicationData) && $publicationData->categoy == 1) : ?>selected<?php endif ?> value="1">Under Review</option>
                                    <option <?php if (isset($publicationData)  && $publicationData->categoy == 2) : ?>selected<?php endif ?> value="2">Published</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <h4>&nbsp;</h4>
                        </div>
                        <div class="col-md-9">
                            <button class="btn btn-success" type="submit" name="btnSubmit" value="submit"><?php if (isset($publicationData)) : ?>Update Data<?php else : ?>Submit<?php endif ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> 