<!DOCTYPE html>
<html lang="es">
<!--
 ████████      ██████   ██████      ██ 
    ██        ██    ██    ██  ██    ██ 
    ██        ██    ██    ██  ██    ██ 
    ██         ██████   ██████      ██                          
-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RST Asociados</title>

    <link rel="icon" href="<?= base_url(); ?>/logoIcon.png" type="image/png" sizes="64x64" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/adminlte.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <!-- /.login-box -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- jQuery -->
    <script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- AdminLTE App -->
    <!--<script src="<?= base_url(); ?>/assets/dist/js/adminlte.min.js"></script>-->

     <!-- Theme style -->
     <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/login.css">

<style>
    </style>
</head>
<body>
    <div class="header">
        <!--Content before waves-->
        <div class="inner-header flex">
            <div class="container-fluid ">
		        <div class="row main-content  text-center">
			        <div class="col-md-4 text-center align-items-center company__info fondologin">
                        <div class="fondo-login">
                            
                        </div>
                        <!-- <img src="<?= base_url(); ?>/assets/dist/img/BANCO_H_RST.png" style="width:80%; height:5rem;"  alt="RST Image"> -->
			        </div>
			        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				        <div class="container-fluid">					
						    <h2>Bienvenido</h2>	
                            <div class="row der secondbtn">
                                <input type="button" value="Iniciar Sesión" class="btn" onclick="IniciarSesion()">
                            </div>			
						    <form autocomplete="off" method="post" id="formIngresar" control="" class="form-group">
							    <div class="row der">
								    <input autocomplete="off" type="number" name="cedula" id="cedula" class="formcontrol" placeholder="Ingrese número de identificación" autocomplete="off">
							    </div>
							    <div class="row der">
								    <input type="password" name="validar" id="validar" class="formcontrol" placeholder="Ingrese código de acceso recibido" autocomplete="off">
							    </div>							
							    <div class="row der firstbtn">
								    <input type="button" value="Iniciar Sesión" class="btn" onclick="IniciarSesion()">
							    </div>
						    </form>                        
				        </div>
			        </div>
		        </div>
	        </div>
        </div>    
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </div>
</body>
<footer class="prueba-foot footer-login">
    <div class="icon-foot">
        <label class="text-foot">RST Asociados todos los derechos revervados. </label>
        <!-- <img src="<?= base_url(); ?>/assets/dist/img/logoIcon.png" style="width:2rem; height:2rem;">          -->
    </div>
</footer>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        document.getElementById("cedula").addEventListener("keydown", function(e) {
            if (e.keyCode == 13) { //checks whether the pressed key is "Enter"
                IniciarSesion();
            }
        });

        document.getElementById("validar").addEventListener("keydown", function(e) {
            if (e.keyCode == 13) { //checks whether the pressed key is "Enter"
                IniciarSesion();
            }
        });
        async function IniciarSesion()
        {
            let identificacion= $('#cedula').val();
            let username= $('#validar').val();
            if(identificacion == '' && username ==''){
                Toast.fire({
                        icon: 'error',
                        title: 'Por favor ingrese los datos'
                    })
                return null;
            }
            if(identificacion != '' && username ==''){
                Toast.fire({
                        icon: 'error',
                        title: 'Por favor ingrese el codigo enviado por mensaje de texto'
                    })
                return null;
            }
            if(identificacion == '' && username !=''){
                Toast.fire({
                        icon: 'error',
                        title: 'Por favor ingrese el numero de documento registrado'
                    })
                return null;
            }
            var data = {
                identificacion: $('#cedula').val(),
                username: $('#validar').val(),
            }

            $.ajax({
                type: "post",
                url: "<?= base_url(); ?>/login",
                data: data,
                dataType: "json",
                beforeSend: function() {},
                success: function(data) {                    
                    if (data.type == 'error') {
                        Toast.fire({
                            icon: 'error',
                            title: data.message
                        }).then((result) => {
                            if (result) {
                                console.log(result);
                            }
                        });
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: data.message
                        })
                        window.location.href = '<?= base_url(); ?>/master'                           
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }
    </script>
</html>