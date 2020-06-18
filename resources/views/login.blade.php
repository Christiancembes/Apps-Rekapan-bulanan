<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Login</title>
</head>

            <div class="container">
                <div class="row justify-content-center"></div>
                <div class="col-lg-6">
                    <div vard mt-5>
                        <div card-body>



                            <h2>Login</h2>
                            <form method="POST" action="/login">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <button style="cursor: pointer;" type="submit" class="btn btn-primary">Login</button>
                                </div>

                                <div class="text-cente" style="margin-top: 15px">Belum punya akun? <a href="/register">Silahkan Register</a></div>
                            </form>
                    </div>
                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>


<!-- <script>
    $(document).ready(function(){
        $(".btn-login").click( function(){
            var email = $("#email").val();
            var password = $("password").val();
            var token = $("meta[name='csrf-token']").attr("content");

            if(email.length =""){

                Swal.fire({
                    type: 'warning',
                    title: 'Oops!!!',
                    text:'Alamat Email wajib di Isi !'
                });
            }else if(password.length == ""){

                Swal.fire({
                    type:'warning',
                    title:'Oops!!!',
                    text:'Password Wajib di Isi !'
                });
            }else {

                $.ajax({

                    url:"{{ url('login.check_login') }}",
                    type:"POST",
                    dataType:"JSON",
                    cache: false,
                    data: {
                        "email":email,
                        "password":password,
                        "_token":token
                    },

                    success:function(response){

                        if(response.success) {

                            Swal.fire({
                                type:'success',
                                title:'Login Success !!!',
                                text:'Anda akan di arahkan dalam 3 detik',
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false
                            })
                                .then (function(){
                                    window.location.href = "{{ url('beranda.admin') }}";
                                });
                        } else {

                            console.log(response.success);

                            Swal.fire({
                                type:'error',
                                title: 'Login Gagal',
                                text: 'Silahkan coba lagi'
                            });
                        }

                        console.log(response);
                    },

                    error:function(response){

                        Swal.fire({
                            type: 'error',
                            title:'Oops!!!',
                            text:'Server Error !!!'
                        });

                        console.log(response);
                    }
                })
            }
        })
    })


</script> -->


</html>

