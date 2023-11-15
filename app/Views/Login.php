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
   

<style>
        .prueba-foot {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 50px;
    background-color: #f2f2f200;
}

.text-food {
    text-align: center;
    font-size: small;
    color: var(--blue-dark);
    font-weight: 0 !important;
}


.footer {
    position: fixed;
}

.footer-bar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 10px;
    display: flex;
}

.footer-login {
    border-radius: 100% 100% 0px 0px;
    height: 8%;
    background: var(--white);
    padding-top: 1rem;
}

        /********************* */
        body {
        margin:0;
        }

        h1 {
        font-family: 'Lato', sans-serif;
        font-weight:300;
        letter-spacing: 2px;
        font-size:48px;
        }
        p {
        font-family: 'Lato', sans-serif;
        letter-spacing: 1px;
        font-size:14px;
        color: #333333;
        }

        .header {
        position:relative;
        text-align:center;
        background: linear-gradient(60deg, rgba(135,195,18,1) 0%, rgba(100,188,76,1) 100%);
        color:white;
        }
        .logo {
        width:50px;
        fill:white;
        padding-right:15px;
        display:inline-block;
        vertical-align: middle;
        }

        .inner-header {
        height:75vh;
        width:100%;
        margin-top: 20;
        margin: 0;
        padding: 0;
        }

        .flex { /*Flexbox for containers*/
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        }

        .waves {
        position:relative;
        width: 100%;
        height:2vh;
        margin-bottom:-7px; /*Fix for safari gap*/
        min-height:100px;
        max-height:100px;
        }

        .content {
        position:relative;
        height:9vh;
        text-align:center;
        background-color: white;
        }

        /* Animation */

        .parallax > use {
        animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
        }
        .parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
        }
        .parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
        }
        .parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
        }
        .parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
        }
        @keyframes move-forever {
        0% {
        transform: translate3d(-90px,0,0);
        }
        100% { 
            transform: translate3d(85px,0,0);
        }
        }
        /*Shrinking for mobile*/
        @media (max-width: 768px) {
        .waves {
            height:40px;
            min-height:40px;
        }
        .content {
            height:10vh;
        }
        h1 {
            font-size:24px;
        }
        .firstbtn{
            display:none;
        }
        }
        @media (min-width:769px){
            .secondbtn{
                display: none;
            }
            .icon-foot {
    margin: 0px 1rem 0 0;
    display: flex;
    text-align: center;
    align-items: flex-start;
    justify-content: center;
    flex-direction: row;
    align-content: stretch;
}
            
        }

        .main-content {
        width: 39%;
        background-color:#0c99d9;
        border-radius: 10px;
        box-shadow: -11px -11px 19px -7px yellowgreen;
        margin: 10em 30vw;
        display: flex;
        border-bottom-left-radius: 10px; 
        
        }

        .company__info {
            
        background-color:#fff;
        border-top-left-radius: 200px ;
        border-bottom-left-radius: 200px;
        border-color: red;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: #c0c5ce;
        }

        .fa-android {
        font-size: 3em;
        }
        .icon-foot{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: row;
            }

        @media screen and (max-width: 640px) {
            
            .main-content {
                width: 80%;
                margin: 10em 1vw 5em 10vw;
                border:none;
                
            }
            .company__info {
                padding: 1em;
                border:none;
            }
            .login_form {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
                border:none;
            }
        }

        @media screen and (min-width: 641px) and (max-width:800px) {
            .main-content {
                width: 80%;
                margin: 5em 10vw;
                border:none;
                
            }
            .company__info {
                padding: 1em;
                border:none;
            }
            .login_form {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
                border:none;

            }
        }

        h2 {
            color: #5c4434;
            margin:1rem;
        }

        .login_form {
        
            background-color: #0c99d9;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 10px;
            border-color:#0c99d9;
            z-index: 111;
            width:100%;
            color:#5c4434;
        }

        form {
            padding: 0 1em;
        }

        .formcontrol {
            width: 100%;
            border: 0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #c0c5ce;
            padding: 1em .5em .5em;
            padding-left: 2em;
            outline: none;
            margin: 1.5em auto;
            transition: all .5s ease;
            background-color: transparent;
            color:#fff;
        }

        .formcontrol:focus {
            border-top-color: white;
            box-shadow: 0 0 5px #c0c5ce;
            border-radius: 4px;
        }

        .der{
            align-items: center;
            justify-content: center;
            height: 4rem;
        }

        .btn {
            transition: all .5s ease;
            width: 50%;
            border-radius: 30px;
            font-weight: 600;
            background-color: #f3d129;
            border: 1px solid #c0c5ce;
            margin-top: 1.5em;
            margin-bottom: 1em;
            color:#5c4434;
        }

        .btn:hover, .btn:focus {
            background-color:#5cc404;
            color: #424949;
        }

        .footer{
            color:#343d46;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }

        input[type=number] { -moz-appearance:textfield; }
    </style>
</head>
<body>

    <div class="header">

        <!--Content before waves-->
        <div class="inner-header flex">
            <div class="container-fluid ">
		        <div class="row main-content  text-center">
			        <div class="col-md-4 text-center align-items-center company__info">
                        <img src="<?= base_url(); ?>/assets/dist/img/logo_agrario.png" style="width:120px; height:120px;"  alt="RST Image">
			        </div>
			        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				        <div class="container-fluid">					
						    <h2>Bienvenido</h2>	
                            <div class="row der secondbtn">
								    <input type="button" value="Iniciar Sesión" class="btn" onclick="IniciarSesion()">
                                
							    </div>			
						    <form autocomplete="off" method="post" id="formIngresar" control="" class="form-group">
                                
							    <div class="row der">
								    <input autocomplete="off" type="number" name="cedula" id="cedula" class="formcontrol" placeholder="Número de Documento" autocomplete="off">
							    </div>
							    <div class="row der">
								    <!-- <span class="fa fa-lock"></span> -->
								    <input type="password" name="validar" id="validar" class="formcontrol" placeholder="Ingrese codigo del mensaje" autocomplete="off">
                                
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
        <!--Waves Container-->
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
        <!--Waves end-->
    </div>
    
</body>
<footer class="prueba-foot footer-login">
    <div class="icon-foot">
        <label class="text-foot">RST Asociados todos los derechos revervados. </label>
        <img src="<?= base_url(); ?>/assets/dist/img/logoIcon.png" style="width:2rem; height:2rem;">         
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