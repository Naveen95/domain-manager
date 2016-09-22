<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Update Domain</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
      </head>
      <body class="skin-black">

                 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.5.8/angular-messages.min.js"></script>

        <script>
        var app = angular.module('app', ['ngMessages']);
        </script>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="/home1" class="logo">
                Domain Manager
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->


                            
                   
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span>{{Auth::user()->name}}<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                        <li>
                                            <a href="/logout"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left info">
                                    <p>Hello, {{Auth::user()->name}}</p>

                                   
                                </div>
                            </div>
                            <!-- search form -->

                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="/add_domain">
                                        <i class="fa fa-dashboard"></i> <span>Add new Domain</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="/purchased_domain">
                                        <i class="fa fa-gavel"></i> <span>Purchased Domain</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="/recent_purchase">
                                        <i class="fa fa-suitcase"></i> <span>Recent purchase</span>
                                    </a>
                                </li>


                                <li>
                                    <a href="/update_domain">
                                        <i class="fa fa-wrench"></i> <span>Update Domain</span>
                                    </a>
                                </li>

                                                                <li>
                                    <a href="/delete_domain">
                                        <i class="fa fa-trash-o"></i> <span>Delete Domain</span>
                                    </a>
                                </li>


                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">



                    <!-- Main row -->
                    <div class="row">




                  </div>
                    <div class="row">

                        <div class="col-md-12">



          </div><!--end col-6 -->


                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                          <section class="panel tasks-widget">
                            <header class="label label-info"style = "padding:10px;"  >
                                  Domain Update
                            </header>
                              
                            <div class="panel-body">

                                    <table class="table" style = "display:block; overflow-x:auto; table-layout:fixed;">
                                        <col width = "200px">
                                        <col width = "200px">
                                        <col width = "200px">
                                        <tr style = "padding : 20px;">
                                            <th style="width: 10px">#</th>
                                            <th>Update</th>
                                            <th>Client ID</th>
                                            <th>Client Name</th>
                                            <th>Client Business</th>
                                            <th>Reference</th>
                                            <th>Gmail</th>
                                            <th>Gmail Pass</th>
                                            <th>Client DOB</th>
                                            <th>Client Address</th>
                                            <th>Client ContactNo 1</th>
                                            
                                            <th>Domain Name</th>
                                            <th>Purchase Date</th>
                                            <th >Expiry Date</th>
                                            <th >Domain Registrar</th> 
                                            <th >Domain Email</th>
                                            <th >Domain Password</th>
                                        </tr>
                                        <?php $i =0;?>
                                        @foreach($domain_details as $domain_detail)
                                          <?php $i++; ?>
                                        <tr data-domainid = "{{$domain_detail->domain_id}}">
                                          
                                            <td class="domain_detail">{{$i}}</td>
                                            <td><a class = "edit-domain" href= "#">Edit</td>
                                            <td>{{$domain_detail->client_id}}</td>
                                            <td>{{$domain_detail->client_name}}</td>
                                            <td>{{$domain_detail->client_business}}</td>
                                            <td>{{$domain_detail->client_ref}}</td>
                                            <td>{{$domain_detail->gmail_mail}}</td>
                                            <td>{{$domain_detail->gmail_pass}}</td>
                                            <td>{{$domain_detail->client_dob}}</td>
                                            <td>{{$domain_detail->client_addr}}</td>
                                            <td>{{$domain_detail->client_no1}}</td>
                                            
                                            <td>{{$domain_detail->domain_name}}</td>
                                            <td>{{$domain_detail->domain_p_date}}</td>
                                            <td>{{$domain_detail->domain_ex_date}}</td>
                                            <td>{{$domain_detail->domain_reg}}</td>
                                            <td>{{$domain_detail->domain_acc_email}}</td>
                                            <td>{{$domain_detail->domain_acc_pass}}</td>
                                            
                                        </tr>
                                    </div>
                                    

                                        @endforeach

                                    </table>

                                    <div class="modal fade" tabindex="-1" role="dialog" id = "update-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Domain Details Update</h4>
      </div>
      <div class="modal-body" ng-app = "app" >


        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.5.8/angular-messages.min.js"></script>

       
        <form>


            <div class="form-group">
                                          <label for="exampleInputEmail1">Client ID</label>
                                          <input type="text" name = "client_id" id = "client_id" class="form-control" placeholder="Client ID" 
                                           required/>


                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Client Name</label>
                                          <input type="text" name = "client_name" id = "client_name" class="form-control" placeholder="Client Name"
                                           required/>
                                      
                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Client Business</label>
                                          <input type="text" name = "client_business" id = "client_business" class="form-control" id="exampleInputEmail1" placeholder="Client Business"
                                           required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Reference</label>
                                          <input type="text" name = "client_ref" id = "client_ref" class="form-control" id="exampleInputEmail1" placeholder="Client Reference"
                                           required/>
                                          
                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Gmail</label>
                                          <input type="text" name = "gmail_mail" id = "gmail_mail" class="form-control" id="exampleInputEmail1" placeholder="Gmail Mail"
                                           required/>
                                          


                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Gmail Pass</label>
                                          <input type="text" name = "gmail_pass" id = "gmail_pass" class="form-control" id="exampleInputEmail1" placeholder="Gmail Pass"
                                           required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Client DOB</label>
                                          <input type="text" name = "client_dob" id = "client_dob" class="form-control" id="exampleInputEmail1" placeholder="Client DOB DD-MM-YYYY"
                                           required/>
                                          
                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Client Address</label>
                                          <input type="text" name = "client_addr" id = "client_addr" class="form-control" id="exampleInputEmail1" placeholder="Client Adress" 
                                           required/ minlength = "20">
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputEmail1">Client Contact Number1</label>
                                          <input type="text" name = "client_no1" id = "client_no1" class="form-control" id="exampleInputEmail1" placeholder="Client Contact NO"
                                           required/>
                                          

                              </div>

                              <div class="form-group">
                                          <label for="exampleInputEmail1">Enter Domain Name</label>
                                          <input type="url" name = "domain_name" id = "domain_name" class="form-control" id="exampleInputEmail1" placeholder="Domain Name"
                                          required/>
                                          
                              </div>
                           
                              <div class="form-group">
                                          <label for="exampleInputPassword1">Purchase Date</label>
                                          <input type="text"  name = "domain_p_date" id = "domain_p_date" class="form-control" id="exampleInputPassword1" 
                                          placeholder="This format DD-MM-YYYY"  required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputPassword1">Domain Registrar</label>
                                          <input type="text" name = "domain_reg" id = "domain_reg" class="form-control" id="exampleInputPassword1" placeholder="Domain Registrar"
                                           required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputPassword1">Domain Expiry date</label>
                                          <input type="text" name = "domain_ex_date" id = "domain_ex_date" class="form-control" id="exampleInputPassword1" placeholder="This format DD-MM-YYYY"
                                           required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputPassword1">Domain Account email</label>
                                          <input type="email" name = "domain_acc_email" id = "domain_acc_email" class="form-control" id="exampleInputPassword1" placeholder="Email"
                                           required/>
                                          

                              </div>
                              <div class="form-group">
                                          <label for="exampleInputPassword1">Domain Account Password</label>
                                          <input type="text" name = "domain_acc_pass" id = "domain_acc_pass" class="form-control" id="exampleInputPassword1" placeholder="password"
                                           required/>
                                          

                              </div>




        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id ="update-modal">Update Changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




                              
                          </div>
                      </section>
                  </div>
              </div>
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->
        <script>
var updateURL = '{{ route('updateDomain') }}';
var token = '{{Session::token()}}';
        </script>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>
        <script src="js/app.js" type="text/javascript"></script>

        



        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
</body>
</html>