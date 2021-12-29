<!DOCTYPE html>
<?php
include ('connection.php');
?>
<html>
<?php 
include 'Head.php';
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
include 'Header.php';
?>
<?php 
include 'SideBar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Appliance Service Details
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                   

                  <div class="input-group-btn">
                   
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
           <div>                
       </div>            
                    <br>       
<div class="table-responsive">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <form class="form-horizontal " role="form" method="post" name="availability_form" enctype="multipart/form-data">
    <div class="col-md-12 col-sm-12 col-xs-12">
      
        <center>

<table class="table table-bordered table-striped table-hover">
 <thead>
<tr> 
<th>Id</th>
<th>Name</th>
 <th>Phone Number</th>
 <th>Address</th>
  <th>Area</th>
  <th>Date</th>  
   <th>Time</th> 
     <th>Service</th>
	  <th>Status</th>
 <th>Action</th>
</tr>
</thead>
  <tbody>
<?php
include("connection.php");
$query1="select * from service where main_service='Appliance'";
$res1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res1))
{    
$status=$row1['status'];
?>
<tr>
<td><?php echo $row1['id'];?></td>
<td><?php echo $row1['name'];?></td>
<td><?php echo $row1['phone_number'];?></td>
<td><?php echo $row1['address'];?></td>
<td><?php echo $row1['area'];?></td>
<td><?php echo $row1['date'];?></td>
<td><?php echo $row1['time'];?></td>
<td><?php echo $row1['service'];?></td>
<td>
<?php
if(($status)=='0')
{
?>
<a href="action2.php?status=<?php echo $row1['id'];?>" 
 class="act" onclick="return confirm('Done <?php echo $id?>');"> Pending </a>
<?php
}
if(($status)=='1')
{
?>
<a href="action2.php?status=<?php echo $row1['id'];?>" 
 class="deact" onclick="return confirm('Pending <?php echo $id?>');"> Done</a>
<?php
}
?>     
 </td> 
<?php echo"  <td><a title='Delete record' href='ApplianceService.php?id=$row1[0]'>Delete</a>";
echo"</td>";                  
?>
</tr>
 </tbody>
 <?php
}
?>
</table>
</center>
    </div>
     </form>
        </div>   
  </div>
</div>
</div>
    </div>
  <!-- /.content-wrapper -->
<?php
include 'Footer.php';
?>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
if(isset($_REQUEST['id']))
{  
$id=$_REQUEST['id'];
  $query="delete from service where id=$id";
  if(mysqli_query($con,$query))
  {
   echo "<script>confirm('Are you sure...')</script>";
         echo "<script>alert('Record deleted...')</script>";
    echo "<script>window.location='ApplianceService.php'</script>";
  }
  else
  {
  	 echo "<script>alert('Record not deleted...')</script>";
  	 echo "<script>window.location='ApplianceService.php'</script>"; 
 }
}
?>