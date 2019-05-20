<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title;?></title>
  <base href="<?php echo base_url() ?>" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="theme/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="theme/plugins/iCheck/all.css">
  
<!-- DataTables -->
  <link rel="stylesheet" href="theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="theme/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="theme/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="theme/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <script type="text/javascript" src="themes/plugins/ckeditor/ckeditor.js"></script>
    <script src="themes/js/jquery.min.js"></script>
    <script src="themes/js/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="theme/bower_components/select2/dist/css/select2.min.css">
<?php
//echo site_url().'/'.'primary_menu';

if(current_url() !== site_url().'/'.'primary_menu'){

    echo ' <script src="themes/js/jquery-3.3.1.min.js"></script>';
}

?>
   



		<?php
    if(isset($styles))
    {
        foreach($styles as $style =>$st)
        {
        ?>
            <link href="<?php echo $st;?>.css" rel="stylesheet" media="screen">
        <?php
        }
    }
    ?>
    <script>
        var BASE_URL = "<?php echo base_url(); ?>";
        var LIST_MAX_LEVELS = "<?php echo $this->config->item('max_levels', 'adjacency_list');?>";
    </script>

    <?php
    if(isset($scripts))
    {
        foreach($scripts as $script =>$sc)
        {
        ?>
            <script src="<?php echo $sc;?>.js" type="text/javascript"></script>
        <?php
        }
    }
    ?>
		
		</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>D</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DASHBOARD</b> </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <?php
        $user_id= $this->session->userdata('admin_id');
        $this->db->where('user_id', $user_id);
        $detail = $this->db->get('igc_users')->row_array();
        ?>
        </a>
            
          </li>
          <!-- unchecked products -->
          <li class="dropdown messages-menu">
            <!-- for the unbought items -->
              <?php 
                  $this->load->model('crud_model','crud');
                  $unchecked_rows=$this->crud->get_and_or_where_row("products",array('delete_status' => 0,'admin_status'=>0,'status'=>1),array('seller_ref >' => 0 ,'seller_user_ref >' => 0 ));
                  $unchecked=$this->crud->get_and_or_where("products",array('delete_status' => 0,'admin_status'=>0,'status'=>1),array('seller_ref >' => 0 ,'seller_user_ref >' => 0 ));
                 
             ?>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="unchecked">
              <i class="fa fa-bell"></i>
              <span class="label label-warning"><?php echo ($unchecked_rows=="0")?"":"$unchecked_rows"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have <?php echo ($unchecked_rows=="0")?"No":"$unchecked_rows"; ?> non Permitted items to buy.</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php 
                    foreach ($unchecked as $key => $rows) {
                       if($rows['seller_ref'] !="")
                    {
                          $sellers = $this->crud->get_detail($rows['seller_ref'],"seller_id","igc_sellers"); 
                     }
                    elseif ($rows['seller_user_ref'] !="") 
                       {
                             $sellers_users = $this->crud->get_detail($rows['seller_user_ref'],"user_id","igc_sellers_users"); 
                               $sellers =$this->crud->get_detail($sellers_users['seller_id'],"seller_id","igc_sellers"); 
                       }
                ?>
                      <li><!-- start listing unbought data -->
                        <a href="<?php echo site_url('product/unchecked_list/'.$rows['product_id']); ?>">
                          <div class="pull-left">
                               <i class="fa fa-product-hunt"></i>
                          </div>
                            <h4>
                               <?php echo $rows['product_title']; ?>
                              
                               <?php echo $sellers['company_name']; ?>

                               <small><?php echo $rows['counts']; ?></small>
                            </h4>

                        </a>
                      </li>
                <?php
                        # code...
                      }
                ?>
                  
                  <!-- end message -->
                 
                </ul>
              </li>
              <li class="footer"><a href="<?php echo site_url('product/check_list/0'); ?>">See All Unchecked Product List</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu" style="background-color: #1b926c;">
            <a href="<?php echo base_url(); ?>../" target="_blank" >VISIT SITE</a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                 <?php echo $this->session->userdata('username');?>
                  <small>Member since Nov. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    Last access : <?php echo date_converter($detail['last_login']);?>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('profile');?>" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout');?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li>
          <a href="<?php echo site_url('dashboard'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard </span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>News Management </span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('news/add_news'); ?>"><i class="fa fa-plus"></i>Add New</a></li>
            <li><a href="<?php echo site_url('news'); ?>"><i class="fa fa-circle-o"></i>All News</a></li>


          </ul>
        </li>

    

          <li class="treeview">
              <a href="#">
                  <i class="fa fa-files-o"></i>
                  <span>Category Management </span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('news_category/category'); ?>"><i class="fa fa-plus"></i>Add New</a></li>
                  <li><a href="<?php echo site_url('news_category'); ?>"><i class="fa fa-circle-o"></i>Categories</a></li>

              </ul>
          </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Breaking Layout </span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('breaking'); ?>"><i class="fa fa-circle-o"></i>Manage Breaking Layouts</a></li>


          </ul>
        </li>

          <li>
              <a href="<?php echo site_url('advertisement'); ?>">
                  <i class="fa fa-sliders"></i> <span>Advertisement</span>
              </a>
          </li>


          <li>
              <a href="<?php echo site_url('category_sorting'); ?>">
                  <i class="fa fa-list"></i> <span>Primary Menu</span>
              </a>
          </li>
          
          <li>
              <a href="<?php echo site_url('team'); ?>">
                  <i class="fa fa-user"></i> <span>Team </span>
              </a>
          </li>


           <li>
              <a href="<?php echo site_url('reporter'); ?>">
                  <i class="fa fa-user"></i> <span>Reporter </span>
              </a>
          </li>


           <li>
              <a href="<?php echo site_url('guest'); ?>">
                  <i class="fa fa-user"></i> <span>Guest </span>
              </a>
          </li>



          <li>
              <a href="<?php echo site_url('user'); ?>">
                  <i class="fa fa-users"></i> <span>User </span>
              </a>
          </li>
          
          <li>
              <a href="<?php echo site_url('contact_message'); ?>">
                  <i class="fa fa-commenting-o"></i> <span>Feedback </span>
              </a>
          </li>
          
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-envelope"></i> <span>Newsletter </span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('newsletter'); ?>"><i class="fa fa-circle-o"></i> Create Newsletter</a></li>
                  <li><a href="<?php echo site_url('newsletter/groups'); ?>"><i class="fa fa-circle-o"></i>Create Group/Campaign</a></li>
                  <li><a href="<?php echo site_url('subscribers'); ?>"><i class="fa fa-circle-o"></i> Subscribers</a></li>

              </ul>
          </li>

          <li>
              <a href="<?php echo site_url('media'); ?>">
                  <i class="fa fa-medium"></i> <span>Media </span>
              </a>
          </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Settings </span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('site_settings'); ?>"><i class="fa fa-circle-o"></i> Site Setting</a></li>
            <li><a href="<?php echo site_url('mail_setting'); ?>"><i class="fa fa-circle-o"></i> Email Setting</a></li>

            <li><a href="<?php echo site_url('pictures'); ?>"><i class="fa fa-circle-o"></i> Basic image Setting</a></li>
          </ul>
        </li>
        

        

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>