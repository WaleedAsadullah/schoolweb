<!DOCTYPE html>
<htm>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>Admin - The Brainic School</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <!-- App css -->
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
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
                            <div>
                                <div class="card-box">
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

                                    <h4 class="header-title m-t-0 m-b-30">Annual appraisal form</h4>

                                    <form action="#" data-parsley-validate novalidate>
                                        <div class="form-group">
                                            <label for="userName">Employee Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   placeholder="Enter employee Name" class="form-control" id="userName">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Employee ID *</label>
                                            <input type="text" name="email" parsley-trigger="change" required
                                                   placeholder="Enter employee ID" class="form-control" id="emailAddress">
                                        </div>
                                        <div class="form-group">
                                            <label for="pass1">Position Held*</label>
                                            <input id="pass1" type="password" placeholder="Enter position held" required
                                                   class="form-control">
                                        <!-- radio button -->
                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Works to full potential</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked>
                                                <label for="inlineRadio1"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked>
                                                <label for="inlineRadio2"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio2" value="option3" name="radioInline" checked>
                                                <label for="inlineRadio2"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio2" value="option4" name="radioInline" checked>
                                                <label for="inlineRadio2"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Honesty</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline2" checked>
                                                <label for="inlineRadio1"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline2" checked>
                                                <label for="inlineRadio2"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio2" value="option3" name="radioInline2" checked>
                                                <label for="inlineRadio2"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio2" value="option4" name="radioInline2" checked>
                                                <label for="inlineRadio2"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Productivity</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline3" checked>
                                                <label for="inlineRadio1"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline3" checked>
                                                <label for="inlineRadio2"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio2" value="option3" name="radioInline3" checked>
                                                <label for="inlineRadio2"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio2" value="option4" name="radioInline3" checked>
                                                <label for="inlineRadio2"> Excellent </label>
                                            </div>
                                        </div>

                                        <div class="card-box" style="margin-top: 15px; margin-bottom: 15px; display: block; border: 2px solid #4e5b62">
                                            <div>
                                                <label>Attendance</label>
                                            </div>
                                            <div class="radio radio-inline radio-danger">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline4" checked>
                                                <label for="inlineRadio1"> Unsatisfactory </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline4" checked>
                                                <label for="inlineRadio2"> Satisfactory </label>
                                            </div>
                                            <div class="radio radio-inline radio-pink">
                                                <input type="radio" id="inlineRadio2" value="option3" name="radioInline4" checked>
                                                <label for="inlineRadio2"> Good </label>
                                            </div>
                                            <div class="radio radio-inline radio-success">
                                                <input type="radio" id="inlineRadio2" value="option4" name="radioInline4" checked>
                                                <label for="inlineRadio2"> Excellent </label>
                                            </div>
                                        </div>


                                        <!-- radoio button end -->

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
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
   

</body>
</html>