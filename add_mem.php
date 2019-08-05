<?php include('include/header1.php');?>
<div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <style type="text/css">
            .add1{
             color: red;
            font-size: 20px;
            text-align: center;
            }
            .done{
             color: blue;
             text-align: center;
             font-size: 20px;
            text-decoration: none;
            }
            .tit1{
                color: blue;
                text-align: center;
                font-size: 30px;
            }
        </style>
            <?php
                include ('inc/csdlbaitest.php');
                if(($_SERVER['REQUEST_METHOD']) =='POST'){
                    if(empty($_POST['id']) || empty($_POST['firtname']) || empty($_POST['surname']) || empty($_POST['email'])){
                        echo "<p class='add1'> Vui lòng không để trống </p> ";
                    }
                        else{         
                             $id = $_POST['id']; 
                             $firtname = $_POST['firtname'];          
                             $surname = $_POST['surname'];   
                             $email=$_POST['email'];             
                             $query = "INSERT INTO thanhvien(id,firtname,surname,email) VALUES
                        ('{$id}','{$firtname}','{$surname}','{$email}')"; 
                        $them = mysqli_query($connect, $query);
                             if($them){
                                echo " <p class='done'> Thêm thành viên thành công </p>";
                             }
                             else{
                                echo "<p class='add1'> Thêm thành viên thất bại </p>";
                            }

                        }
                    }

            ?>
            <form name='add_don' method="POST">
            <div class="form-gr">

                <p class="tit1"><b> MEMBER </b></p>
            <label class="tit2"><b>ID</b></label><br>
               <input type="text" name="id" class="form-ctr" placeholder="">
            <style type="text/css">
                .form-ctr{
                    width: 100%;
                    font-size: 20px;
                }
            </style>
            </div>         
               <div class="form-gr">
            <label tit2><b>Firtname</b></label><br>
               <input type="text" name="firtname" class="form-ctr" placeholder="">
           </div>
               <div class="form-gr">
            <label tit2><b>Surname</b></label><br>
               <input type="text" name="surname" class="form-ctr" placeholder="">   
               </div>  
               <div class="form-gr">
            <label tit2><b>Email</b></label><br>
               <input type="text" name="email" class="form-ctr" placeholder="">
           </div>       
             <div class="form-gr1">
              <input class="form-ctr"type="submit" name="" value="Hoàn thành">
            </div> 
            </form> 
          </div>
        </div>

