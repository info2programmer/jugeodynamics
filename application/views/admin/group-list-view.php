<section id="mainBody">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb" style="background-color: #006393;font-family: 'Kodchasan', sans-serif;color:#FFFFFF;">
                    <li><a href="<?php echo base_url() ?>dashboard.html" style="color:#FFFFFF;">Dashboard</a></li>
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
                <a class="btn btn-info" href="<?php echo base_url() ?>create-publication.html">ADD PUBLICATION</a>
            </div>

            <div class="col-md-12 col-sm-12">
                <h4>&nbsp;</h4>
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="background-color: #70d3f7;">Sl</th>
                            <th style="background-color: #70d3f7;">Date</th>
                            <th style="background-color: #70d3f7;">Title</th>
                            <th style="background-color: #70d3f7;">Content</th>
                            <th style="background-color: #70d3f7;">Type</th>
                            <th style="background-color: #70d3f7;">Created</th>
                            <th style="background-color: #70d3f7;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        <?php foreach ($publicationList as $list) : ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td><?php echo $list->date ?></td>
                                <td><?php echo $list->title ?></td>
                                <td><?php echo $list->content ?></td>
                                <td><?php echo $list->categoy === 1 ? 'Under Review' : 'Published' ?></td>
                                <td><?php echo $list->created ?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/publication_managment/deletePublication/<?php echo $list->id ?>" onclick="return confirm('Are you want to delete this Publication?')">Delete</a>
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url() ?>admin/publication_managment/editPublication/<?php echo $list->id ?>">Edit</a>
                                    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/publication_managment/changePublicationStatus/<?php echo $list->id ?>/<?php if ($list->publisher) : ?>0<?php else : ?>1<?php endif ?>"><?php if ($list->publisher) : ?>Un-Publish Now<?php else : ?>Publish Now<?php endif ?> </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Date</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Type</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>