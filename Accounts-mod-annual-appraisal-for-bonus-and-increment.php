<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.png">

        <!-- App title -->
        <title>Account - The Brainic School</title>

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

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
<body class="smallscreen fixed-left-void">
    <div id="wrapper" class="enlarged">


                    <!--- header -->
                    <?php 
                            include_once("Accounts-mod-header.php")
                    ?>

                    <!-- header -->
        
 

                    <!--- Sidemenu -->
                    <?php 
                            include_once("Accounts-mod-sidemenu.php")
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

                                    <h4 class="header-title m-t-0 m-b-30" style="text-align: center; font-size: 22px; padding: 10px">Increment Form</h4>

                                    <form action="#" data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <label for="userName">Teacher Name *</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter teacher name" class="form-control" id="userName" data-parsley-id="4">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Teacher ID *</label>
                                            <input type="text" name="number" parsley-trigger="change" required="" placeholder="Enter teacher ID" class="form-control" id="emailAddress" data-parsley-id="6">
                                        </div>

                                        <div class="form-group">
                                            <label for="userName">Teacher old salary*</label>
                                            <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Enter tacher old salary" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Salary increment *</label>
                                            <input id="pass1" type="text" placeholder="Enter salary increment" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Teacher new salary *</label>
                                            <input id="pass1" type="text" placeholder="Enter teacher new salary" required="" class="form-control" data-parsley-id="8">
                                        </div>

                                        

                                        <div class="form-group">
                                            <label for="passWord2">Comments</label>
                                            <div >
                                                <textarea class="form-control" rows="3" placeholder="feedback area ....."></textarea>
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
                <div class="col-sm-12">
                                <div class="card-box table-responsive">
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

                                    <h4 class="header-title m-t-0 m-b-30">Increment data</h4>

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Teacher Name</th>
                                                <th>Teacher ID</th>
                                                <th>Teacher old salary</th>
                                                <th>Salary increment</th>
                                                <th>Teacher new salary</th>
                                                <th>Approved by</th>
                                                <th>Comments</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            <tr>
                                                <td>Sir Aslam</td>
                                                <td>009</td>
                                                <td>20000</td>
                                                <td>5000</td>
                                                <td>25000</td>
                                                <td>Irfan Ahmed</td>
                                                <td>for good work</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();

        </script>
</body>
</html>