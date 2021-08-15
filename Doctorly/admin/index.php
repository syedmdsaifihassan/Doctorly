<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
<?php  include_once '../inc/head.php';?>
    <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-white mb-4">Bootstrap 4 Login Form</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" name="password">
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description small text-dark">Remember me on this computer</span>
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-success btn-lg float-right" id="btnLogin" name="submit" value="submit">
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->


<?php

include('../connection.php');

if(isset($_POST['submit'])){

     $i=0;
    $user = $_POST['uname1'];
    $pass= $_POST['password'];

    $sql = "SELECT * FROM adminlogin";

    $run = mysqli_query($conn,$sql);

    while($data=mysqli_fetch_assoc($run)){

        $userdata = $data['username'];
        $passwo = $data['password'];

        if( $user==$userdata && $pass==$passwo){
              $i++;
        }
    }
    if($i==0){
        ?>
        <script type="text/javascript">
            alert('username and password is wroung');
            window.open('index.php',"_self");
        </script>
        <?php
    }
    else{
         header('location:form.php');
    }
}

?>