<?php
$store=model('store');
$stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
$data['title']=$stores[0]['name'];
$data['store_name']=$stores[0]['name'];
$data['sub_name']=$stores[0]['sub_name'];

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
        if(empty($title)){
            print 'PPM';
        }else{
            print $title;
        }
    ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php print site_url('template/sufee-admin/',true); ?>apple-icon.png">
    <link rel="shortcut icon" href="<?php print site_url('template/sufee-admin/',true); ?>favicon.ico">


    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/selectFX/css/cs-skin-elastic.css">
    
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php print site_url('template/sufee-admin/',true); ?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php print site_url('js/select2/dist/css/select2.css',true); ?>">
    <link rel="stylesheet" href="<?php print site_url('',true); ?>js/sweetalert/dist/sweetalert.css">


</head>
<?php
if(empty($_COOKIE['menu_display'])||$_COOKIE['menu_display']=='expand'){
    $body_calss='';
}else if($_COOKIE['menu_display']=='collapse'){
    $body_calss=' open';
}

?>
<body class="<?php print $body_calss; ?>" id="ENQUIRY_VIEWMETER">
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php print site_url('main'); ?>"><?php print $data['store_name']; ?></a>
                <a class="navbar-brand hidden" href="./"><?php print $data['sub_name']; ?></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
            <li>
                        <a href="<?php print site_url('main/dashboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                <?php
                helper('sufee');
                $menu=view('menu/sale');
                $menu.=view('menu/inventory');
                $menu.=view('menu/admin');
                print $menu;
                ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left" onClick="toggleMenu()"><i class="fa fa-angle-double-left"></i></a>
                    <div class="header-left">
                        <!--
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>
                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php print site_url('template/sufee-admin/',true); ?>images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php print site_url('template/sufee-admin/',true); ?>images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php print site_url('template/sufee-admin/',true); ?>images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="<?php print site_url('template/sufee-admin/',true); ?>images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
                        </div>
                        
-->
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php print site_url('template/sufee-admin/',true); ?>images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="<?php print site_url('user/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
<!--
                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>
-->
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php
        if(empty($title)){
            print 'PPM';
        }else{
            print $title;
        }
    ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <?php
                                $bc=explode('/',$_GET['p']);
                                $bcw='';
                                $total=count($bc);
                                $i=0;
                                foreach($bc as $sec){
                                    $i++;
                                    $class='';
                                    if($total==$i){
                                        $class=' class="active"';
                                        $bcw.='<li class="active">'.$sec.'</li>';
                                    }else{
                                        $bcw.='<li><a href="#">'.$sec.'</a></li>';
                                    }
                                }
                                print $bcw;
                            ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
        <?php
                print $content;
            ?>
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/jquery/dist/jquery.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/jquery-validation/dist/jquery.validate.min.js"></script>

                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>assets/js/main.js"></script>
                            
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                            
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/jszip/dist/jszip.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/pdfmake/build/pdfmake.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/pdfmake/build/vfs_fonts.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                            <script src="<?php print site_url('template/sufee-admin/',true); ?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
                            <script src="<?php print site_url('',true); ?>js/select2/dist/js/select2.js"></script>
                            <script src="<?php print site_url('',true); ?>js/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
    function toggleMenu(){
        jQuery(document).ready(function(){
            jQuery.ajax("<?php print site_url('setting/toggleMenu'); ?>");
        });
    }
    jQuery("#ENQUIRY_VIEWMETER").keydown(function(event) {
    if(event.which == 113) { //F2
        //alert('F2');
        var url = "?p=sale/pos";
        //return false;
    }
    else if(event.which == 114) { //F3
        //alert('F3');
        var url = "?p=sale_report/daily";
        //return false;
    }
    else if(event.which == 115) { 
        var url = "?p=inventory/product";
    }
    jQuery(location).attr('href',url);
    return false;

});
</script>
    <?php
        print systemFoot();
    ?>
</html>
