<?php
    //require($_SERVER['DOCUMENT_ROOT'].'/wordpress/obsequiosespeciales.com/wp-load.php');
    //require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    session_start();
    if(isset($_SESSION['user_rol'])){
        if ($_SESSION['user_rol'] !== 'admin') {
            header('location: ../login.php');
        } else {
          if ($_SESSION['user_rol'] == 'CLIENT' || $_SESSION['user_rol'] == 'CUSTOMER') {
            header('location: ../index.php');
            exit();
          }
        }
    } else {
      //session_destroy();
      header('location: ../login.php');
      exit();
  }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="shortcut icon" type="image/png" href="../assets/Lawsuit-Analysis-Logo.png" >
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../lib/jquery-3.5.1.min.js"></script>
    <script src="../lib/FileSaver.min.js" ></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.6/xlsx.core.min.js"></script>
    <script src="https://unpkg.com/tableexport@5.2.0/dist/js/tableexport.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.8/xlsx.min.js"></script>

    <title>Lawsuit Analyzer Administrtator</title>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <style>
        .box{
            width:1270px;
            padding:20px;
            background-color:#fff;
            border:1px solid #ccc;
            border-radius:5px;
            margin-top:25px;
            box-sizing:border-box;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #F44336;
        }

    </style>



</head>


<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-balance-scale"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lawsuit Analyzer</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="../logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

           <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="../logout.php" id="userDropdown" role="button" >
                <span class="" style="color: black;">Logout</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- 
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            -->
          </div>

          <!-- Content Row KPIS
          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">KPI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">123</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">KPI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$123,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">KPI</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">KPI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">321</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->

          <!-- Content Row TABLES-->
          <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
              <button id="usersMenu" class="nav-link" type="button" onclick="changeTable('TableUsers','usersMenu')">Users</button>
            </li>
            <li class="nav-item">
              <button id="responsesMenu" class="nav-link" type="button" onclick="changeTable('TableResponses','responsesMenu')">Responses</button>
            </li>
            <li class="nav-item">
              <button id="answersMenu" class="nav-link" type="button" onclick="changeTable('TableAnswers','answersMenu')">Answers</button>
            </li>
          </ul>
          <div id="TableUsers" class="row" style="display: none;">
            <div class="col" style="text-align: center; align-items: center;" >
                <table class="table table-responsive">
                    <tr style="color: white; background-color: #9E2D2D; " >
                        <th>Id</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Registered On</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Responses</th>
                        <th>Responses Completed</th>
                    </tr>
                    <tbody id="bodyTableUsers"></tbody>
                </table>       
            </div>
          </div>

          <div id="TableResponses" class="row" style="display: none;">
            <div class="col" style="text-align: center; align-items: center;" >
                <table class="table table-responsive">
                    <tr style="color: white; background-color: #9E2D2D; " >
                        <th>Id</th>
                        <th>Email</th>
                        <th>Last Step</th>
                        <th>Start Date</th>
                        <th>Status</th>
                        <th>Order Number WC</th>
                        <th>Order Status WC</th>
                    </tr>
                    <tbody id="bodyTableResponses"></tbody>
                </table>       
            </div>
          </div>

          <div id="TableAnswers" class="row" style="display: none;">
            <div class="input-group"  style="width: 40%; margin-bottom: 2%;" >
              <input id="ridSearch" type="number" class="form-control rounded" placeholder="Response Id" aria-label="Search"
                aria-describedby="search-addon" />
              <button type="button" class="btn btn-outline-primary" onclick="searchAnsw()">
                <i class="fas fa-search"></i>
              </button>
            </div>

            <div class="col-12" style="text-align: center; align-items: center;" >
                <table class="table table-responsive">
                    <tr style="color: white; background-color: #9E2D2D; " >
                        <th>Response Id</th>
                        <th>Step</th>
                        <th>Q Number</th>
                        <th>Q Title</th>
                        <th>Answer</th>
                    </tr>
                    <tbody id="bodyTableAnswers"></tbody>
                </table>       
            </div>
          </div>          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; lawsuitanalysis.com</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Status</label>
						<input class="form-control" required></textarea>
					</div>				
				</div>

        <div class="form-group">
          <label for="statusUser">Status</label>
          <select id="statusUser" class="form-control" name="statusUser">
            <option value="ACTIVE">ACTIVE</option>
            <option value="INACTIVE">INACTIVE</option>
          </select>
        </div>

				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="button" class="btn btn-info" value="Save" >
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>

  </script>


</body>

</html>


<script>

$(document).ready(function () {

});


function searchAnsw() {
  var rid = $('#ridSearch').val();
  $.ajax({
    method:'GET',
    url:'../API/rusr.php?act=answ&rid=' + rid,
    success:function(response){
      var data = response;
      $('#bodyTableAnswers').empty()
      for (var i = 0; i < data.length; i++){
        var row = `<tr>
                <td>${data[i].id}</td>
                <td>${data[i].step_title}</td>
                <td>${data[i].q_number}</td>
                <td>${data[i].q_title}</td>
                <td>${data[i].answer}</td>
              </tr>`
        $('#bodyTableAnswers').append(row)
      };
    }
  });
}

function changeTable(targetTable,navId) {
    //Reset ALL
    $('#TableUsers').hide();
    $('#TableResponses').hide();
    $('#TableAnswers').hide();
    $('#usersMenu').removeClass('active');
    $('#responsesMenu').removeClass('active');
    $('#answersMenu').removeClass('active');
    //Load Data
    if (targetTable == 'TableUsers') {
      $.ajax({
        method:'GET',
        url:'../API/rusr.php?act=users',
        success:function(response){
          var data = response;
          $('#bodyTableUsers').empty()
          for (var i = 0; i < data.length; i++){
            var row = `<tr>
                    <td>${data[i].id}</td>
                    <td>${data[i].user_nicename}</td>
                    <td>${data[i].user_email}</td>
                    <td>${data[i].user_registered}</td>
                    <td>${data[i].user_rol}</td>
                    <td>${data[i].user_status}</td>
                    <td>${data[i].user_responses}</td>
                    <td>${data[i].response_completed}</td>
                  </tr>`
            $('#bodyTableUsers').append(row)
          };
        }
      });
    };
    if (targetTable == 'TableResponses') {
      $.ajax({
        method:'GET',
        url:'../API/rusr.php?act=resp',
        success:function(response){
          var data = response;
          $('#bodyTableResponses').empty()
          for (var i = 0; i < data.length; i++){
            var row = `<tr>
                    <td>${data[i].id}</td>
                    <td>${data[i].user_email}</td>
                    <td>${data[i].last_step}</td>
                    <td>${data[i].start_date}</td>
                    <td>${data[i].status}</td>
                    <td>${data[i].Order_Number}</td>
                    <td>${data[i].Order_Status}</td>
                  </tr>`
            $('#bodyTableResponses').append(row)
          };
        }
      });
    }
    //Show Table
    $('#' + targetTable).show();
    $('#' + navId).addClass('active');
  }

/*
$("table").tableExport({
  formats: ["xlsx","txt", "csv"], //Tipo de archivos a exportar ("xlsx","txt", "csv", "xls")
  position: 'button',  // Posicion que se muestran los botones puedes ser: (top, bottom)
  bootstrap: false,//Usar lo estilos de css de bootstrap para los botones (true, false)
});
*/

</script>