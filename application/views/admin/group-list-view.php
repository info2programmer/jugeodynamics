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
                <a class="btn btn-info" href="<?php echo base_url() ?>create-group.html">ADD GROUP</a>
            </div>

            <div class="col-md-12 col-sm-12">
                <h4>&nbsp;</h4>
                <table id="example" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="background-color: #70d3f7;">Sl</th>
                            <th style="background-color: #70d3f7;">Name</th>
                            <th style="background-color: #70d3f7;">Image</th>
                            <th style="background-color: #70d3f7;">Link1</th>
                            <th style="background-color: #70d3f7;">Link2</th>
                            <th style="background-color: #70d3f7;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0 ?>
                        <?php foreach ($groupList as $list) : ?>
                            <tr>
                                <td><?php echo ++$i ?></td>
                                <td><?php echo $list->name ?></td>
                                <td><img src="<?php echo base_url() ?>assets/front/group-image/<?php echo $list->image ?>" width="40" height="40" ></td>
                                <td><?php echo $list->link1 ?></td>
                                <td><?php echo $list->link2 ?></td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>admin/group_managment/deleteGroup/<?php echo $list->id ?>/<?php echo urlencode($list->image) ?>" onclick="return confirm('Are you want to delete this Group Member?')">Delete</a>
                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url() ?>admin/group_managment/editGroup/<?php echo $list->id ?>">Edit</a>
                                    <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>admin/group_managment/changeGroupStatus/<?php echo $list->id ?>/<?php if ($list->publisher) : ?>0<?php else : ?>1<?php endif ?>"><?php if ($list->publisher) : ?>Un-Publish Now<?php else : ?>Publish Now<?php endif ?> </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Link1</th>
                            <th>Link2</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>