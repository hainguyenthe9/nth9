<!-- <i class="fas fa-search"></i> -->
<?php include('include/header1.php'); ?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3 class="dstv"> DACH SÁCH THÀNH VIÊN </h3>
		<style type="text/css">
			.dstv{
				color: blue;
				display: inline-block;
			}
		</style>
		<table class="table table-hover">
			<thead>
				<tr>
					<th> ID </th> 
					<th> Firtname </th>
					<th> Surname</th>
					<th> Email </th>
				</tr>		
			</thead>
			<tbody>
				<?php 
				include('inc/csdlbaitest.php');
				$sql ="SELECT * FROM thanhvien";
				$query= mysqli_query($connect, $sql);
				$num = mysqli_num_rows($query);
				if($num > 0){
					while ($row = mysqli_fetch_array($query)) {
				?>
						<tr>
							<td><?php echo $row['id'] ?> </td>
							<td><?php echo $row['firtname'] ?> </td>
							<td><?php echo $row['surname'] ?> </td>
							<td><?php echo $row['email'] ?> </td>						
						</tr>								
						<?php						
					}
				}
				?>
			</tbody>
		</table>
	</div>
</div>



