<!DOCTYPE html>
<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="select * from categories where id=$id";
$res=mysqli_query($con,$query);
$row1=mysqli_fetch_array($res);
?><?php
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Category
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

                   
                    
   
							
                                                      
                                              
         
<div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<center>
<form class="form-horizontal " role="form" method="post" name="availability_form" enctype="multipart/form-data">                                                    
                                              <div class="form-group">
						<label class="control-label col-md-2 col-sm-2 col-xs-12">Name</label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" value="<?php echo $row1['name'];?>" class="form-control" name="name"/>
									</div></div>   <br/>
                                                   		<div class="form-group">
								<br/>
                                                               <div class="col-md-12 col-sm-12 col-xs-12">
								<center><input type="submit" class="btn btn-success pull-right-container" name="s"  value="Update"></center>
								</div> </div><br/>
                                                                <br/>
                                                                <br/></form></center>
<br/>
     </div>
     </form>
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


if(isset($_REQUEST['s']))
{
    $fname=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
  $newfname=rand(111,111111).'-'.$fname;
  $destination="upload/$newfname";
  $res=move_uploaded_file($tmpname,$destination);
    extract($_REQUEST);
    $query="update categories set name='$name' where id=$id";
     $res1=mysqli_query($con,$query);
      $res=move_uploaded_file($tmpname,$destination);
    if($res1)
    {
        
        echo "<script>window.location='Sub_Category.php'</script>";
    }
 else {
        
 echo "<script> alert('Record added')</script>";
        echo "<script>window.location='Edit_Sub_Category.php'</script>";
     
 }
}

?>

