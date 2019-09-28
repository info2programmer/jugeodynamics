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
                                <h4>Publication Year</h4>
                            </label></div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <select name="txtDate" id="txtDate" required class="form-control">
                                    <option value="">---Select Year-----</option>
                                    <option value="1973" <?php if(isset($publicationData) && $publicationData->date == "1973"): ?> selected <?php endif ?>>1973</option>
                                    <option value="1974" <?php if(isset($publicationData) && $publicationData->date == "1974"): ?> selected <?php endif ?>>1974</option>
                                    <option value="1975" <?php if(isset($publicationData) && $publicationData->date == "1975"): ?> selected <?php endif ?>>1975</option>
                                    <option value="1976" <?php if(isset($publicationData) && $publicationData->date == "1976"): ?> selected <?php endif ?>>1976</option>
                                    <option value="1977" <?php if(isset($publicationData) && $publicationData->date == "1977"): ?> selected <?php endif ?>>1977</option>
                                    <option value="1978" <?php if(isset($publicationData) && $publicationData->date == "1978"): ?> selected <?php endif ?>>1978</option>
                                    <option value="1979" <?php if(isset($publicationData) && $publicationData->date == "1979"): ?> selected <?php endif ?>>1979</option>
                                    <option value="1980" <?php if(isset($publicationData) && $publicationData->date == "1980"): ?> selected <?php endif ?>>1980</option>
                                    <option value="1981" <?php if(isset($publicationData) && $publicationData->date == "1981"): ?> selected <?php endif ?>>1981</option>
                                    <option value="1982" <?php if(isset($publicationData) && $publicationData->date == "1982"): ?> selected <?php endif ?>>1982</option>
                                    <option value="1983" <?php if(isset($publicationData) && $publicationData->date == "1983"): ?> selected <?php endif ?>>1983</option>
                                    <option value="1984" <?php if(isset($publicationData) && $publicationData->date == "1984"): ?> selected <?php endif ?>>1984</option>
                                    <option value="1985" <?php if(isset($publicationData) && $publicationData->date == "1985"): ?> selected <?php endif ?>>1985</option>
                                    <option value="1986" <?php if(isset($publicationData) && $publicationData->date == "1973"): ?> selected <?php endif ?>>1986</option>
                                    <option value="1987" <?php if(isset($publicationData) && $publicationData->date == "1987"): ?> selected <?php endif ?>>1987</option>
                                    <option value="1988" <?php if(isset($publicationData) && $publicationData->date == "1988"): ?> selected <?php endif ?>>1988</option>
                                    <option value="1989" <?php if(isset($publicationData) && $publicationData->date == "1989"): ?> selected <?php endif ?>>1989</option>
                                    <option value="1990" <?php if(isset($publicationData) && $publicationData->date == "1990"): ?> selected <?php endif ?>>1990</option>
                                    <option value="1991" <?php if(isset($publicationData) && $publicationData->date == "1991"): ?> selected <?php endif ?>>1991</option>
                                    <option value="1992" <?php if(isset($publicationData) && $publicationData->date == "1992"): ?> selected <?php endif ?>>1992</option>
                                    <option value="1993" <?php if(isset($publicationData) && $publicationData->date == "1993"): ?> selected <?php endif ?>>1993</option>
                                    <option value="1994" <?php if(isset($publicationData) && $publicationData->date == "1994"): ?> selected <?php endif ?>>1994</option>
                                    <option value="1995" <?php if(isset($publicationData) && $publicationData->date == "1995"): ?> selected <?php endif ?>>1995</option>
                                    <option value="1996" <?php if(isset($publicationData) && $publicationData->date == "1996"): ?> selected <?php endif ?>>1996</option>
                                    <option value="1997" <?php if(isset($publicationData) && $publicationData->date == "1997"): ?> selected <?php endif ?>>1997</option>
                                    <option value="1998" <?php if(isset($publicationData) && $publicationData->date == "1998"): ?> selected <?php endif ?>>1998</option>
                                    <option value="1999" <?php if(isset($publicationData) && $publicationData->date == "1999"): ?> selected <?php endif ?>>1999</option>
                                    <option value="2000" <?php if(isset($publicationData) && $publicationData->date == "2000"): ?> selected <?php endif ?>>2000</option>
                                    <option value="2001" <?php if(isset($publicationData) && $publicationData->date == "2001"): ?> selected <?php endif ?>>2001</option>
                                    <option value="2002" <?php if(isset($publicationData) && $publicationData->date == "2002"): ?> selected <?php endif ?>>2002</option>
                                    <option value="2003" <?php if(isset($publicationData) && $publicationData->date == "2003"): ?> selected <?php endif ?>>2003</option>
                                    <option value="2004" <?php if(isset($publicationData) && $publicationData->date == "2004"): ?> selected <?php endif ?>>2004</option>
                                    <option value="2005" <?php if(isset($publicationData) && $publicationData->date == "2005"): ?> selected <?php endif ?>>2005</option>
                                    <option value="2006" <?php if(isset($publicationData) && $publicationData->date == "2006"): ?> selected <?php endif ?>>2006</option>
                                    <option value="2007" <?php if(isset($publicationData) && $publicationData->date == "2007"): ?> selected <?php endif ?>>2007</option>
                                    <option value="2008" <?php if(isset($publicationData) && $publicationData->date == "2008"): ?> selected <?php endif ?>>2008</option>
                                    <option value="2009" <?php if(isset($publicationData) && $publicationData->date == "2009"): ?> selected <?php endif ?>>2009</option>
                                    <option value="2010" <?php if(isset($publicationData) && $publicationData->date == "1973"): ?> selected <?php endif ?>>2010</option>
                                    <option value="2011" <?php if(isset($publicationData) && $publicationData->date == "2011"): ?> selected <?php endif ?>>2011</option>
                                    <option value="2012" <?php if(isset($publicationData) && $publicationData->date == "2012"): ?> selected <?php endif ?>>2012</option>
                                    <option value="2013" <?php if(isset($publicationData) && $publicationData->date == "2013"): ?> selected <?php endif ?>>2013</option>
                                    <option value="2014" <?php if(isset($publicationData) && $publicationData->date == "2014"): ?> selected <?php endif ?>>2014</option>
                                    <option value="2015" <?php if(isset($publicationData) && $publicationData->date == "2015"): ?> selected <?php endif ?>>2015</option>
                                    <option value="2016" <?php if(isset($publicationData) && $publicationData->date == "2016"): ?> selected <?php endif ?>>2016</option>
                                    <option value="2017" <?php if(isset($publicationData) && $publicationData->date == "2017"): ?> selected <?php endif ?>>2017</option>
                                    <option value="2018" <?php if(isset($publicationData) && $publicationData->date == "2018"): ?> selected <?php endif ?>>2018</option>
                                    <option value="2019" <?php if(isset($publicationData) && $publicationData->date == "2019"): ?> selected <?php endif ?>>2019</option>
                                </select>
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