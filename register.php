<?php

require_once ('config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>User Registration Form</title>
</head>
<body>

<?php


?>
        <div class="container">
            <div class="row">
                <div class="col-md-5 offset-4">
                    <div class="box">
                        <form action="register.php" method="post">
                            <h2 class="text-center">Registration Form</h2>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="username"><b>Username</b></label>
                                        <input type="text" class="form-control" name="username" id="username" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email"><b>Email</b></label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password"><b>Password</b></label>
                                        <input type="password" class="form-control" name="password" id="password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phonenumber"><b>Phone Number</b></label>
                                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" required>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center pt-3">
                                    <button type="submit" id="register" name="create" class="btn btn-primary">Sing Up</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(function(){

            $('#register').click(function(e){

                var valid = this.form.checkValidity();
                if(valid){

                    var username    = $('#username').val();
                    var email       = $('#email').val();
                    var password    = $('#password').val();
                    var phonenumber = $('#phonenumber').val();

                    e.preventDefault();

                    $.ajax({
                       type: 'POST',
                       url: 'process.php',
                       data: {username: username, email: email, password: password, phonenumber: phonenumber},
                       success: function(data){
                        Swal.fire({
                                title: 'Success!',
                                text: data,
                                type: 'success'
                                })
                       },
                       error: function(data){
                        Swal.fire({
                                title: 'Errors!',
                                text: 'Data inserting Fail!',
                                type: 'error'
                                }) 
                       }
                    });

                }else{
                    
                }

            });

        });
    </script>
</body>
</html>