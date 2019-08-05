
<style type="text/css">
	.dstv{
		color: blue;
	}
</style>
        </div>
<?php include('include/header1.php'); ?>
        <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3 class="dstv"> TÌM KIẾM THÀNH VIÊN </h3>
		<form class="form-inline mr-auto" action ="search.php" method="GET">
  <input class="search form-control mr-sm-2" type="text" placeholder="" name="search">
             <input type="submit" name="ok" value="Search" />
            </form>

	<table class="table table-hover">			
        <?php
        	include('inc/csdlbaitest.php');
        if (isset($_REQUEST['ok'])) {
            $search = $_GET['search'];         
            $query = "SELECT * from thanhvien where firtname like '$search'";         
            $sql = mysqli_query($connect,$query);          
            $num = mysqli_num_rows($sql);          
            if (empty($search)) {
                echo "Vui lòng nhập dữ liệu tìm kiếm";
            } else {
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($sql)) {           				
                        $id = $row['id'];
                        $firtname = $row['firtname'];
                        $surname = $row['surname'];
                        $email = $row['email'];           
							 echo "<b> ID </b>: $id <br> <b>Firtname</b>: $firtname<br> <b>Surname</b>: $surname<br> <b>Email</b> : $email<br> <br><br>";
                	}
                }                
                 else {
                   echo "Không tìm thấy kết quả";

                }
              
            }

        }

        ?>  
    </table>
</div>
</div>
