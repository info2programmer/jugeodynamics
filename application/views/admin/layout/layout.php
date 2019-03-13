<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/ckeditor.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/ck.js"></script>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet" />

<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/css/ckeditor.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/css/neo.css" rel="stylesheet">

</head>

<body>



<div class="nav-side-menu">
    <div class="brand">JUGEODYNAMICS<br /><span style="font-size:14px;">Hello There, how is your day going?</span></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                
                 <li <?php if($this->uri->segment(1) == "dashboard"): ?> class="active" <?php endif ?>>
                  <a href="<?php echo base_url() ?>dashboard.html"><i class="fa fa-th-large fa-lg"></i> Dashboard</a>
                </li>
                
                <li data-toggle="collapse" data-target="#company" class="collapsed <?php if($this->uri->segment(1) == "change-password"): ?> active <?php endif ?>" >
                  <a href="#"><i class="fa fa-bank fa-lg"></i> Account Settings <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="company">
                    <li><a href="<?php echo base_url() ?>change-password.html">Change Password</a></li>
                </ul>
                
                <li  data-toggle="collapse" data-target="#about" class="collapsed">
                  <a href="#"><i class="fa fa-cog fa-lg"></i> Home Settings <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="about">
                    <li><a href="<?php echo base_url() ?>manage-slider.html">Slider Management</a></li>
                    <li><a href="<?php echo base_url() ?>manage-news.html">News Update</a></li>
                </ul>

                <!-- <li  data-toggle="collapse" data-target="#purchase" class="collapsed">
                  <a href="#"><i class="fa fa-cart-plus fa-lg"></i> Purchase Management<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="purchase">
                    <li class="active"><a href="#">Add Vendor</a></li>
                    <li><a href="#">Purchase Order</a></li>
                    <li><a href="#">Add Products & Manage Stock</a></li>
                    <li><a href="#">Purchase Return</a></li>
                    <li><a href="#">Stock Report</a></li>
                    <li><a href="#">Purchase Report</a></li>
                    <li><a href="#">Petty Cash Book Entry</a></li>
                </ul>
                
                <li  data-toggle="collapse" data-target="#sales" class="collapsed">
                  <a href="#"><i class="fa fa-file-text-o fa-lg"></i> Sales Management <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="sales">
                    <li class="active"><a href="#">Make Sale Invoice</a></li>
                    <li><a href="#">Sales Return</a></li>
                    <li><a href="#">Sales & Invoice Report</a></li>
                </ul> -->
                
                
                
               <!-- <li  data-toggle="collapse" data-target="#projects" class="collapsed">
                  <a href="#"><i class="fa fa-star fa-lg"></i>Projects <span class="arrow"></span></a>
                </li>
                	<ul class="sub-menu collapse" id="projects">
                    
                    <li  data-toggle="collapse" data-target="#nevada" class="collapsed active">
                      <a href="#">Nevada, USA<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="nevada">
                        <li><a href="#">   BAY STATE SILVER PROJECT</a></li>
                        <li><a href="#">   COUNTY LINE DIATOMITE PROJECT</a></li>
                        <li><a href="#">   GARFIELD SILVER-GOLD-COPPER PROJECT</a></li>

                        <li  data-toggle="collapse" data-target="#pozz" class="collapsed active">
                            <a href="#">  POZZ PROJECT<span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse" id="pozz">
                            <li><a href="#">     OVERVIEW</a></li>
                            <li><a href="#">     CS DEPOSIT</a></li>
                            <li><a href="#">     POZZ ASH DEPOSIT</a></li>
                        </ul>
                        
                        <li><a href="#">   NEWARK PROJECT</a></li>
                        <li><a href="#">   CLAYTON PROJECT</a></li>
                    </ul>
                    
                    <li  data-toggle="collapse" data-target="#australia" class="collapsed active">
                      <a href="#">Australia<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="australia">
                        <li><a href="#">   ...</a></li>
                        <li><a href="#">   ...</a></li>
                        <li><a href="#">   ...</a></li>
                    </ul>
                    
                    <li  data-toggle="collapse" data-target="#ireland" class="collapsed active">
                      <a href="#">Ireland<span class="arrow"></span></a>
                    </li>
                    <ul class="sub-menu collapse" id="ireland">
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">...</a></li>
                    </ul>
                    
                </ul> -->
                
                
                <!-- <li  data-toggle="collapse" data-target="#finance" class="collapsed">
                  <a href="#"><i class="fa fa-copy fa-lg"></i> Financial Reports <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="finance">
                    <li class="active"><a href="#">Income & Expenditure</a></li>
                    <li><a href="#">Ledger-wise Report</a></li>
                    <li><a href="#">Petty Cash Book Report</a></li>
                </ul>
				 -->
                
                <li <?php if($this->uri->segment(1) == "create-research" || $this->uri->segment(1) == "manage-research"): ?> class="active" <?php endif ?>>
                  <a href="<?php echo base_url() ?>manage-research.html"><i class="fa fa-copy fa-lg"></i> Reseach Management</a>
                </li>
                
                <li class="">
                  <a href="<?php echo base_url() ?>logout.html"><i class="fa fa-sign-out fa-lg"></i> Log Out</a>
                </li>
            
            </ul>

     </div>
</div>


<section id="topBar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-sm-12">
            	<?php echo $pageName ?>
            </div>
            
            <div class="col-md-3 col-sm-12">
            	<h5><i class="fa fa-thumbs-up"></i> Welcome Admin</h5>
            </div>
            <div class="col-md-2 col-sm-12">
            	<h5><i class="fa fa-sign-out"></i> <a href="<?php echo base_url() ?>logout.html" style="text-decoration:none;">Log out</a></h5>
            </div>
            
        </div>
    </div>
</section>

<!-- <section id="mainBody">
    <div class="container-fluid">
        <div class="row">
           
            <div class="col-md-4 col-sm-12">
            	<div class="alert alert-danger">
                	<p class="text-center numbertxt"><i class="fa fa-users"></i></p>
                    <p class="text-center headtext">Number of Vendors</p>
                    <p class="text-center numbertxt">26</p>
                </div>
            </div>
            
            
            <div class="col-md-4 col-sm-12">
            	<div class="alert alert-success">
                	<p class="text-center numbertxt"><i class="fa fa-archive"></i></p>
                    <p class="text-center headtext">Number of Products</p>
                    <p class="text-center numbertxt">286</p>
                </div>
            </div>
            
            
            <div class="col-md-4 col-sm-12">
            	<div class="alert alert-warning">
                	<p class="text-center numbertxt"><i class="fa fa-file-text"></i></p>
                    <p class="text-center headtext">Number of Invoice Generated</p>
                    <p class="text-center numbertxt">1026</p>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section id="mainBody">
    <div class="container-fluid">
        <div class="row">
           <h2 class="text-center">UTILITIES</h2>
            <div class="col-md-6 col-sm-12">
            	<h4>Customized Buttons</h4>
                    <button class="btn btn-default">Default</button>
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-danger">Danger</button>
                    <button class="btn btn-success">Success</button>
                    <button class="btn btn-warning">Warning</button>
                    <button class="btn btn-info">Info</button>
            </div>
            
            <div class="col-md-6 col-sm-12">
            	<h4>Customized Input Box</h4>
                    <div class="form-group">
                    	<input type="text" value="" name="" class="form-control" placeholder="Typing area . . ." />
                    </div>
   
            </div>
            
            
            <div class="col-md-6 col-sm-12">
            	<h4>Customized Collapsable Button</h4>
                      <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#demo1"><i class="fa fa-sort"></i> &nbsp;Simple collapsible</button>
                      <div id="demo1" class="collapse text-justify" style="border:1px solid #00B700; padding:16px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </div>
                      <br /><br />
                      <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"><i class="fa fa-sort"></i> &nbsp;Simple collapsible</button>
                      <div id="demo" class="collapse text-justify" style="border:1px solid #FF3333; padding:16px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      </div>
            </div>
            
            
            <div class="col-md-6 col-sm-12">
            	<h4>Customized Text Area</h4>
                    <div class="form-group">
                        <textarea value="" name="" class="form-control" placeholder="Typing area . . ." rows="4" /></textarea>
                    </div>
            </div>
            
            
             <div class="col-md-12 col-sm-12">
             	<h4>Customized Data Table</h4>
                	<table id="example" class="table table-striped table-bordered" style="width:100%;">
        <thead>
            <tr>
                <th style="background-color: #70d3f7;">Name</th>
                <th style="background-color: #70d3f7;">Position</th>
                <th style="background-color: #70d3f7;">Office</th>
                <th style="background-color: #70d3f7;">Age</th>
                <th style="background-color: #70d3f7;">Start date</th>
                <th style="background-color: #70d3f7;">Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
             </div>
            
            
            
            
            
        </div>
    </div>
</section> -->

<?php $this->load->view($mainContent) ?>

</body>

<script>
	$(document).ready(function() {
        $('#example').DataTable();
        initSample();
    } );
</script>
</html>
