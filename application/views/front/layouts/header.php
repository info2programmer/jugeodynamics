<header>

  <div class="header-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <h1><a class="navbar-brand" href="<?php echo base_url()  ?>">
            <img src="<?php echo base_url() ?>assets/front/images/logo.png">
          </a></h1>
        <button class="navbar-toggler ml-lg-auto ml-sm-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav text-center ml-auto">
            <li class="nav-item active  mr-lg-3 mt-lg-0 mt-4">
              <a class="hover-fill" href="<?php echo base_url() ?>" data-txthover="Home">Home</a>
            </li>
            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
              <a class="hover-fill" href="<?php echo base_url() ?>research" data-txthover="Research">Research</a>
            </li>
            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
              <a class="hover-fill" href="<?php echo base_url() ?>publication" data-txthover="Publications">Publications</a>
            </li>
            <li class="nav-item dropdown mr-lg-3 my-lg-0 my-4">
              <a class=" hover-fill" data-txthover="Group" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Group
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php $data = $this->db->query("SELECT * FROM ju_grouptype")->result();
                foreach ($data as $list) {
                  echo "<a class='hover-fill' href='" . base_url() . "group/" . $list->id . "' >" . $list->group_name . "</a>";
                }
                ?>

              </div>
            </li>
            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
              <a class="hover-fill" href="<?php echo base_url() ?>lab" data-txthover="Lab">Lab</a>
            </li>
            <li class="nav-item  mr-lg-3 mt-lg-0 mt-4">
              <!-- <a class="hover-fill" href="<?php echo base_url() ?>group" data-txthover="Group">Group</a> -->

            </li>
            <li class="nav-item">
              <a class="hover-fill" href="<?php echo base_url() ?>contact" data-txthover="Contact">contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>