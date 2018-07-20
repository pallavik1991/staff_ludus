<!DOCTYPE html>
<html>
<head>
	<title>Add New Staff</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">
        #table_previous{
            display: none;
        }
</style>


    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


</head>
<body>

        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Logo" width="250px" height=""></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
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
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                      
                        

                        

                       
                    </div>
                </div>

               
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


	 
	<center><h1>Add New Staff</h1></center>
	<form method="POST">
		<table  align="center">
			 <tr>
				<td>Name</td>
				<td><input type="text" name="txtname" id="txtname" tabindex="1" autofocus="true" /></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="rdbgender" id="rdbmale" value="M" checked tabindex="2" />Male
					<input type="radio" name="rdbgender" id="rdbfemale" value="F" tabindex="3"/>Female
                    <input type="radio" name="rdbgender" id="rdbfemale" value="T" tabindex="4"/>TransGender
				</td>	
			</tr>
			<tr>
				<td>Designation</td>
				<td>
					<select name="ddldesignation" id="ddldesignation" tabindex="5">
						
						<option>Teaching</option>
						<option>Non-Teaching</option>
					</select>
				</td>
			</tr>
            <tr>
                <td>BirthDate</td>
                <td>
                    <input type="date" name="txtdob" id="txtdob" tabindex="6">
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <textarea name="txtaddress" id="txtaddress" tabindex="7"></textarea>
                </td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td>
                    <input type="number" name="txtmobile" id="txtmobile" tabindex="8">
                </td>
            </tr>
            <tr>
                <td>Adhaar Number</td>
                <td>
                    <input type="text" name="txtadhaar" id="txtadhaar" tabindex="9">
                </td>
            </tr>
            
            <tr>
                <td>Highest Qualification</td>
                <td>
                    <input type="text" name="txtqualification" id="txtqualification" tabindex="10">
                </td>
            </tr>
            <tr>
                <td>BloodGroup</td>
                <td>
                    <select name="ddlbloodgp" id="ddlbloodgp" tabindex="11">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Father Name</td>
                <td>
                    <input type="text" name="txtfathername" id="txtfathername" tabindex="12">
                </td>
            </tr>
            <tr>
                <td>Mother Name</td>
                <td>
                    <input type="text" name="txtmothername" id="txtmothername" tabindex="13">
                </td>
            </tr>
            <tr>
                <td>Father Adhaar Number</td>
                <td>
                    <input type="text" name="txtfatheradhaar" id="txtfatheradhaar" tabindex="14">
                </td>
            </tr>
            <tr>
                <td>Mother Adhaar Number</td>
                <td>
                    <input type="text" name="txtmotheradhaar" id="txtmotheradhaar" tabindex="15">
                </td>
            </tr>
            
            <tr>
                <td>Previous Experiences?</td>
                <td>
                    <input type="radio" name="rdbprevexp" id="rdbprevexp_yes" value="Y" tabindex="16">Yes
                    <input type="radio" name="rdbprevexp" id="rdbprevexp_no" value="N" tabindex="17" checked>No
                </td>
            </tr>
        </table>
        <table border="1" align="center" id="table_previous">
            <tr>
                <td>Experience Years</td>
                <td>
                    <input type="number" name="txtexp" id="txtexp" tabindex="18">
                </td>
            </tr>
            <tr>
                <td>Previous School Name</td>
                <td>
                    <input type="text" name="txtprevschool" id="txtprevschool" tabindex="19">
                </td>
                 <td>Previous School Code</td>
                <td>
                    <input type="text" name="txtprevschoolcode" id="txtprevschoolcode" tabindex="20">
                </td>
            </tr>
            <tr>
                <td>Previous School Address</td>
                <td>
                    <textarea name="txtprevschooladdr" id="txtprevschooladdr" tabindex="21"></textarea>
                </td>
            </tr>
        </table>
        <table align="center">
            <tr>
				<td><input type="button" name="btnadd" id="btnadd" value="Add" tabindex="22" /></td>
				<td><input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
			</tr>
		</table>
	</form>
	<br>
	<center><font color="red"><div id="div1">
	</div></font></center>



        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
	

    <script>
        $(document).ready(function(){

         $("#rdbprevexp_yes").click(function(){
                if(this.checked)
                 document.getElementById("table_previous").style.display="block";
                 
            });

            $("#rdbprevexp_no").click(function(){
                if(this.checked)
                 document.getElementById("table_previous").style.display="none";
                 
            });

             
            $("#btnadd").click(function(){
                var name="",gender="",designation="",birthdate="",qualification="",experience="",adhaarno="",bloodgp="",address="",expyears="",prevschool="",prevschooladdress="",prevschoolcode="",mobile="",fathername="",mothername="",fatheradhaar="",motheradhaar="";

                name=document.getElementById("txtname").value;
                if(document.getElementById("rdbmale").checked)
                    gender=document.getElementById("rdbmale").value;
                else
                    gender=document.getElementById("rdbfemale").value;

                designation=document.getElementById("ddldesignation").value;
                birthdate=document.getElementById("txtdob").value;
                qualification=document.getElementById("txtqualification").value;
                experience=document.getElementById("txtexp").value;
                adhaarno=document.getElementById("txtadhaar").value;
                bloodgp=document.getElementById("ddlbloodgp").value;
                address=document.getElementById("txtaddress").value;
                
                mobile=document.getElementById("txtmobile").value;
                fathername=document.getElementById("txtfathername").value;
                mothername=document.getElementById("txtmothername").value;
                fatheradhaar=document.getElementById("txtfatheradhaar").value;
                motheradhaar=document.getElementById("txtmotheradhaar").value;

                if(document.getElementById("rdbprevexp_yes").checked)
                        {
                        experience=document.getElementById("rdbprevexp_yes").value;
                        
                    }
                else
                        experience=document.getElementById("rdbprevexp_no").value;

                prevschool=document.getElementById("txtprevschool").value;
                expyears=document.getElementById("txtexp").value;
                prevschooladdress=document.getElementById("txtprevschooladdr").value;
                prevschoolcode=document.getElementById("txtprevschoolcode").value;
                


                  $.ajax({
                  type: "POST",
                  url: 'dal_addstaff.php',
                  data: ({
                    param_name:name,
                    param_gender:gender,
                    param_designation:designation,
                    param_birthdate:birthdate,
                    param_qualification:qualification,
                    param_exp:experience,
                    param_adhaar:adhaarno,
                    param_bloodgp:bloodgp,
                    param_address:address,
                    param_expyears:expyears,
                    param_prevschool:prevschool,
                    param_prevschooladdress:prevschooladdress,
                    param_prevschoolcode:prevschoolcode,
                    param_mobile:mobile,
                    param_fathername:fathername,
                    param_mothername:mothername,
                    param_fatheradhaar:fatheradhaar,
                    param_motheradhaar:motheradhaar
                    }),
                  success: function(data) {
                   document.getElementById("div1").innerHTML=data;
                   /*document.getElementById("txtname").value="";
                   document.getElementById("txtname").focus();*/
                  } 
                }); 
                });   
        });
    </script>

</body>
</html>