<!DOCTYPE html>
<htm>
<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App title -->
        <title>Account - The Brainic School</title>

        <!-- App CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
</head>
<body class="fixed-left">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Admin-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Admin-mod-sidemenu.php")
                    ?>

                    <!-- Sidebar -->
                                 <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div>
                                <div class="card-box">
                                    <div >
                                 <div>
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px; padding: 10px">Addmission Form</h4>

                                    <form action="#" data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <label for="userName">Applicant Name</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter applicant name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Father's Name </label>
                                            <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter father's name" class="form-control" id="emailAddress" data-parsley-id="6">
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Date of Birth </label>
                                            <input type="date" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Mobile Number </label>
                                            <input id="pass1" type="text" placeholder="Enter mobile number" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Address </label>
                                            <input id="pass1" type="text" placeholder="Enter address" required="" class="form-control" data-parsley-id="8">
                                        </div>


                                        <div class="form-group">
                                            <label for="pass1">Class </label>
                                            <input id="pass1" type="text" placeholder="Enter class" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Gender </label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Dropdown2 </label>
                                            <select type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter Subject" class="form-control">
                                                            <option value="1">menu 1</option>
                                                            <option value="2">menu 2</option>
                                                            <option value="3">menu 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="passWord2">Comment</label>
                                            <div >
                                                <textarea class="form-control" rows="5" placeholder="feedback area ....."></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


      <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

</body>
</html>