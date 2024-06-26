<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RST Asociados</title>

    <link rel="icon" href="<?= base_url(); ?>/logoIcon.png" type="image/png" sizes="64x64" />


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/adminlte.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/dist/css/master.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <!-- jQuery -->
    <script src="<?= base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Axios -->
    <script src="https://unpkg.com/axios@0.23.0/dist/axios.min.js"></script>
    

    <!-- Mommentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!--editor de texto-->
    <script type="text/javascript" src="<?= base_url(); ?>/assets/dist/js/editor.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/dist/css/editor.css">


    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- daterangepicker -->
    <script src="<?= base_url(); ?>/assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->
    <script src="<?= base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="<?= base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url(); ?>/assets/plugins/sweetalert2/sweetalert2.min.js"></script>


    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>/assets/dist/js/adminlte.js"></script>
</head>

<body >
    <div class="wrapper" style="height:85vh">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>/assets/dist/img/logoIcon.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-white navbar-light">
        
        <img class="animation__shake img-icon"  src="<?= base_url(); ?>/assets/dist/img/fna.jpg" alt="AdminLTELogo" >

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto" >
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item" >
                    <!-- <a class="nav-link active" style="font-size: larger;" href="<?= base_url(); ?>/logout" role="button" onclick="gestionClientes('Abandona',null)"> -->
                    <a class="nav-link active" style="font-size: larger;" href="<?= base_url(); ?>/logout" role="button">
    
                        <i class="fas fa-sign-out-alt" ></i>
                        Salida Segura
                    </a>
                </li>
            </ul>
        </nav>
        <div class="" id="central">


            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-name">
                        <p class="text-center saludo" >Bienvenido!</p>
                        <p class="text-name" >Sr(a) <?= $_SESSION[ 'Nombres'] ?> </p>
                    </div>
                </div>

            </section>
            <section class="content">
                <div>
                    <div class="card-main">
                        <div class="card-tabla">
                            <div class="obligacion">
                                <div class="col-md-12 col-lg-12" style="position: relative; overflow-y: scroll; max-height: 500px;">
                                    <div class="row container-fluid m-0">
                                        <div class="col-md-12 col-lg-12 ">
                                            <h2 id="nro_obligaciones" name="nro_obligaciones" class="text-name"></h2>
                                        </div>
                                        <div class="col-md-12 col-lg-12 ">
                                        </div>
                                        <div class="col-md-12 col-lg-12 table-respon" id="tableDataCliente">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <div>
            
            <p class="text-info">
            Le informamos que los datos suministrados por usted serán tratados de acuerdo a la política de protección de datos personales y la Ley 1581 de 2012.
            </p>
        </div>
    </div>
    
    <!-- <footer id="" > -->
        <div class="center barra">
            <strong>RST Asociados<?= (date('Y') == 2021) ? '' : ' - ' . date('Y') ?></strong><br>
            <b>Version</b> 1
        </div>
        <div class="footer-bar">
        <div class="bar-segment"></div>
        <div class="bar-segment"></div>
        <div class="bar-segment"></div>
        <div class="bar-segment"></div>
        <div class="bar-segment"></div>
        <div class="bar-segment"></div>
        </div>
    <!-- </footer> -->
    
    <!-- ./wrapper -->

    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url(); ?>/assets/dist/js/demo.js"></script>
    <div class="modal fade" id="modalContentGeneral" tabindex="-1" aria-labelledby="modalAsignacionesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="width: 98%;">
                <div id="modalContent"></div>
            </div>
        </div>
    </div>

    <script>
        
        
        ValidarSesion();
        let Test = "bla";
        let obligacionData = "";
        let tronco = 1;
        

        async function ValidarSesion() {
            let dataValSesion = await axios.get("<?= base_url(); ?>/validarsesion");
            let estado = dataValSesion.data;
            

            if (estado == '0') {
                window.location.href = '<?= base_url(); ?>/';
            }

        }

        var formatter = new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            minimumFractionDigits: 0
        });

        $(window).blur(function() {
            // console.log("oculto");
            setTimeout(function(){
                // gestionClientes('Abandona',null); 
                window.location.href = '<?= base_url(); ?>/logout';
            }, 120000);
        });
        $(window).focus(function() {
            ValidarSesion();
            // console.log("en foco");
        });
        ConsultarCliente();
        let intervaloID = 0;

        function DesactivarInterval(idintterval) {
            clearInterval(idintterval);
            intervaloID = 0;
        }

        $(function() {
            document.addEventListener("visibilitychange", onchange);
            DesactivarInterval(intervaloID);
            $('#divEstadosAsesor').empty();
            $('#divMetricas').empty();
            //ValidarCambioPass();
            let user_id = "<?php echo $_SESSION['Identificacion'] ?>";

            //updateSessionData(user_id);

        });

        $(window).blur(function() {
        });
        $(window).focus(function() {
        });

        async function ConsultarCliente() {
            

            // console.log("tronco",tronco);
            
            let nombres = '<?= $_SESSION['Nombres']; ?>';
            // console.log("nombres",nombres);
            var today = new Date();
            var tdd = today.getDate();
            var tmm = today.getMonth() + 1;
            var tyyyy = today.getFullYear();
            if (tdd < 10) {
                tdd = '0' + tdd
            }
            if (tmm < 10) {
                tmm = '0' + tmm
            }
            var hr = today.getHours();
            var min = today.getMinutes();
            if (min < 10) {
                min = "0" + min;
            }
            var ampm = "AM";
            if (hr >= 12) {
                //hr -= 12;
                ampm = "PM";
            }
            today = tdd + '/' + tmm + '/' + tyyyy;
            let hora = hr + ":" + min + " " + ampm
            let contentForm = '';

            $('#divBtnGestionar').attr('style', 'display:none');

            let id_cliente = '<?= $_SESSION['Identificacion']; ?>';

            /** datos de obligaciones del cliente  */
            let Obligaciones = await axios.get("<?= base_url(); ?>/consultarobligacionescliente", {
                params: {
                    id_cliente: id_cliente
                }
            });

            let dataObligaciones_source = await axios.get("<?= base_url(); ?>/consultarobligaciones", {
                params: {
                    id_cliente: id_cliente
                }
            });
            dataObligaciones_source = dataObligaciones_source.data
            obligacionData = dataObligaciones_source;

            let dataObligaciones = Obligaciones.data
            // console.log(dataObligaciones_source);
            // console.log("dataObligaciones=",dataObligaciones);
            //-----------------------------------------------------------------------------------------------------------------------------

            if (dataObligaciones.type == 'error') {
                $('#tableDataCliente').html(dataObligaciones.message);
                $('#si_Btn').attr('style', 'display:none');
                $('#no_Btn').attr('style', 'display:none');
                $('#spanIdentificacion').html('');
                $('#spanNombre').html('');
            } else {
                //let string = dataObligaciones.message[0].banca
                let substring = "ADMINISTRA"


                //*************Toma el valor String=valor_proxima_cuota y lo combierte en un decimal y lo redondea en un entero.
                valor_proxima_cuota = dataObligaciones.message[0].valor_proxima_cuota;
                //--------------------------------------------------------
                valor_proxima_cuota_String = parseFloat(valor_proxima_cuota.replace(',', '.'));
                //--------------------------------------------------------
                numero_redondeado_valor_proxima_cuota =  Math.ceil(valor_proxima_cuota_String).toLocaleString();
                //************************************************************************************************
                

                if (typeof valor_proxima_cuota === 'number' && !isNaN(valor_proxima_cuota)) {
                    valor_proxima_cuota = formatter.format(valor_proxima_cuota);
                } else {
                    // console.error("El valor de la próxima cuota no es un número válido:", valor_proxima_cuota);
                }


                let content_juridico = `<div class="row">
                          <div class="form-group col-md">                             
                            <label for="Nombre">Nombre</label>
                                                <input type="name" class="form-control" id="Nombre" value="<?= $_SESSION['Nombres'] ?>" disabled>
                            </div>
                                <div class="form-group col-md">
                                                <label for="identificación">Identificación</label>
                                                <input type="name" class="form-control" id="identificación" value="<?= $_SESSION['Nombres'] ?>"disabled> 
                                                         </div>      
                            </div>`;
                let thPrincipal = '';
                thPrincipal += `<th></th>`;
                for (var key2 in dataObligaciones.message[0]) {

                    if (key2 == 'rownumber' || key2 == 'cons_asg_id' || key2 == 'archivo_asignacion_id' || key2 == 'fecha_registro') {} else {

                        thPrincipal += `<th>${key2.replace(/_/g,' ').toUpperCase()}</th>`;
                    }
                }
                let n=0;
                bancada =dataObligaciones.message[0].banca;
                // console.log("bancada",bancada);
                if( bancada=="TARJETA DE CREDITO"){
                    textBancada = "tarjeta de crédito";
                }else{
                    textBancada = "obligación"; 
                }

                if (dataObligaciones.message.length == 1){
                    
                    $('#nro_obligaciones').html(`A continuación podrá ver el estado de su ${textBancada}, seleccione para mas información:`);
                    // $('#nro_obligaciones').html(`Usted presenta ${dataObligaciones.message.length} obligación pendiente, seleccione para consultar:`);
                }else{
                    $('#nro_obligaciones').html(`Usted presenta ${dataObligaciones.message.length} obligaciónes pendientes, seleccione para consultar:`);
                }
                n=n+1;
                saldo_to= dataObligaciones.message[0].saldo_total;
                saldo_to_String = parseFloat(saldo_to.replace(',', '.'));
                saldo_redondeado_total =  Math.ceil(saldo_to_String).toLocaleString();


                // saldo_to =saldooo.toLocaleString();

                //------------------------------------------------
                Ncuenta= String(dataObligaciones.message[0].obligacion)

                // Obtener los últimos cuatro dígitos
                ultimosCuatroDigitos = Ncuenta.slice(-4);


                // console.log("NCUENTA=", ultimosCuatroDigitos);

                numCaracteresOcultos = Ncuenta.length - 4;
                // console.log("numCaracteresOcultos=", numCaracteresOcultos);

                asteriscos = '*'.repeat(numCaracteresOcultos);
                // console.log("asteriscos=", asteriscos);

                Cuentaresultado = asteriscos + Ncuenta.substring(numCaracteresOcultos);
                // console.log("resultado=", Cuentaresultado);
                //-----------------------------------------------
                //-----------------------prueba correo------------------------
                
                
                //-----------------------------------------------


                        let content = `
                        <div class="containerr">
                            <div class="block-data">
                                <div class="block-source">
                                    <span class="name-data">OBLIGACIÓN: </span>
                                    <div  class="result-data">
                                        <p style="height: 50%;">${Cuentaresultado}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="block-data">
                                <div class="block-source">
                                    <span class="name-data">FECHA DE VENCIMIENTO: </span>
                                    <div  class="result-data">
                                        <p style="height: 50%;">${dataObligaciones.message[0].fecha_pago}</p>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="block-data">
                                <div class="block-source">
                                    <span class="name-data">SALDO TOTAL APROX.: </span>
                                    <div  class="result-data">
                                        <p style="height: 50%;">$ ${saldo_redondeado_total}</p>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="block-data">
                                <div class="block-source">
                                    <span class="name-data">VALOR A PAGAR APROX.: </span>
                                    <div  class="result-data">
                                        <p style="height: 50%;">$ ${numero_redondeado_valor_proxima_cuota}</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                                <table class="button-table">
                            <tbody>
                        </div>
                        `;
                     

                for (var key1 in dataObligaciones.message) {
                    
                   
                    content += '<tr>';
                    content += `<td id="casillaopt">   
                                <div class="radio" >
                                <label><input type="radio" class="raious" id="data${key1}" value="${dataObligaciones.message[key1].obligacion}" name="optradio" data-key="${key1}"></label>
                                </div>
                                </td>`;                    
                    var dd = dataObligaciones.message[0]['obligacion'];
                    var replaced = dd.replace(/.(?=.{5,}$)/g, '*');
                    dataObligaciones.message[0]['obligacion'] = replaced;
                    valor_proxima_cuota = dataObligaciones.message[key1].valor_proxima_cuota.replace(/,/g, '.');
                    valor_proxima_cuota = formatter.format(parseInt(valor_proxima_cuota));
                    
                    dataObligaciones.message[key1].valor_proxima_cuota = valor_proxima_cuota;
                    



                    // console.log("------------------------------------------------")  ;
                    // console.log("P10 =",dd );
                    let nuevaCadena = "*****" + dd.slice(5);
                    // console.log("P11 =",dataObligaciones.message[0]['obligacion'] );

                    nuevoNumero = dataObligaciones.message[0]['obligacion'];

                    numeroSifrado = "*****" + dataObligaciones.message[0].replace;
                    // console.log("P12 =",nuevaCadena)  ;







                    saldo_total = dataObligaciones.message[key1].saldo_total.replace(/,/g, '.');

                    saldo_total = formatter.format(saldo_total)
                    dataObligaciones.message[key1].saldo_total = saldo_total
                        
                            
                        
                    
                    content += '</tr>';
                }
                content += `</tbody>
                    </table>`;
                
                    
                    
                $('#tableDataCliente').html(content);
                
                var radios = document.getElementsByName('optradio');
                $.each(radios, async function(i, v) { 
                    // console.log("Prueba1=",v.value)  
                    let validarObl = await axios.get("<?= base_url(); ?>/validarobligacion", {
                        params: {
                            obligacion: v.value
                        }
                    });
                    validarObl = validarObl.data;
                    // console.log(validarObl)
                    if(validarObl.type=='success') {$(`#data${i}`).attr('disabled','disabled');}         
                    $(`#data${i}`).on('click', function(event) {
                        diasMora(dataObligaciones_source, dataObligaciones);
                        
                        $('#si_Btn').removeAttr('disabled');
                        $('#no_Btn').removeAttr('disabled');
                        
                    });
                
                });
                
            }
            
            
        }

        async function diasMora(obligacion_source, obligacion_cliente){
            let botonSelected = $("input[name='optradio']:checked").data('key');
            let obligacionInfo = obligacion_cliente.message[botonSelected];
            let obligacionData = obligacion_source.message[botonSelected];
            var dd = obligacionData.obligacion;
            var replaced = dd.replace(/.(?=.{5,}$)/g, '');

            valor_cuota = obligacionData.valor_proxima_cuota;
            valor_cuota_String = parseFloat(valor_cuota.replace(',', '.'));
            valor_cuota_proxima_cuota =  Math.ceil(valor_cuota_String).toLocaleString();
            banca =obligacionData.banca;

            // console.log("banca",banca);
            // console.log("valor_cuota",valor_cuota_proxima_cuota);

            if( banca=="TARJETA DE CREDITO"){
                textBanca = "su tarjeta de crédito"
            }else{
                textBanca = " cuenta de crédito terminado en " + ultimosCuatroDigitos; 
            }


            let contModal='';
            contModal  += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel">Gestión de Obligación</h5>
                        
                </div>
                <div class="modal-body">`
                    if(obligacionData.dias_mora>0){
                    contModal += `<form method="post" id="formAutoGestion">
                        <div class="row">
                            <div class="col-md-12 col-lg-12" id="divSelHojaTip">
                                <div class="form-group w-100 text-center">
                                    <h5 name="selDiasMora" id="selDiasMora">Su obligación registra ${obligacionData.dias_mora} días en mora.</h5>
                                </div>
                            </div>
                        </div>
                        <div id="containerm" style="display:none;">
                            <h5 class="w-100 text-center" id="lblPago" name="lblPago">¿Podemos contar con el pago de esta obligación para los próximos 3 días?</h5>
                            <div class="text-center">
                                <button type="button" style="background-color:#Green; " id="si_Btn" value="btnactualizar" class="btn btn-success mb-4 " >Si</button>
                                <button type="button" style="background-color:Red; " id="no_Btn" value="btnactualizar" class="btn btn-success mb-4 " >No</button>
                            </div>
                        </div>
                    </form>`
                    
                    }else{
                    contModal += `<br> 
                        <h4 class="w-100 text-center" id="lblPago" name="lblPago" >Le informamos que se encuentra disponible el estado de ${textBanca}, con un valor aproximado de $ ${valor_cuota_proxima_cuota} con fecha para el día ${obligacionData.fecha_pago} ¿Tiene algo que manifestar?</h4>

                        <br>
                        <div class="text-center">
                        <button type="button" style="background-color:#Green; " id="si1_Btn" value="btnactualizar" class="btn btn-success mb-4 " >Si</button>
                        <button type="button" style="background-color:Red; " id="no1_Btn" value="btnactualizar" class="btn btn-success mb-4 " >No</button>
                        </div>`}
                    contModal += `</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="quitarCh()" data-dismiss="modal">Cancelar</button>
                </div>`            
            $('#modalContent').html(contModal);
            $('#modalContentGeneral').modal({
                'show': true,
                'backdrop': 'static'
            });
            
            $('#selDiasMora').html(function(e) {
                    $('#containerm').attr('style','display:block')
                });


            // $('#selDiasMora').change(function(e) {
            //             $('#containerm').attr('style','display:block')
            //         });
            $('#no_Btn').click(function(event) {
                    ModalNoPago(obligacion_source, obligacion_cliente);
                    return;
            })
            $('#si_Btn').click(function(event) {
                    
                
                    ModalSiPago(obligacion_source, obligacion_cliente);
                    return;
            })
            $('#no1_Btn').click(function(event) {
                    
                    ModalSiPago(obligacion_source, obligacion_cliente);
                    return;
            })
            $('#si1_Btn').click(function(event) {                    
                
                    ModalNoPago(obligacion_source, obligacion_cliente);
                    return;
            })
        }

        async function ModalNoPago(obligacion_source, obligacion_cliente) {

            let selDiasMora = $('#selDiasMora').val() || null;
            obligacion_source = obligacion_source || null;
            if(obligacion_source == null){}else{            
            let botonSelected = $("input[name='optradio']:checked").data('key');
            let obligacionInfo = obligacion_cliente.message[botonSelected];
            let obligacionData = obligacion_source.message[botonSelected];
            // console.log(selDiasMora);

            let contModal = '';
             contModal += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel">Gestión de Obligación</h5>
                </div>
                <div class="modal-body">
                   <form method="post" id="formAutoGestion">
                    <div class="row">`


                
                contModal += `<div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <p for="observacion">¿Desea agregar algún comentario sobre el pago de su obligación?</p>
                                <textarea class="form-control" name="observacion" id="observacion" oninput="validarTexto()" placeholder="Observacion"
                                rows=5></textarea>
                                <p style="text-align:center; width: 100%;">Un asesor nuestro se pondrá en contacto.</p>
                            </div>
                        </div>
                        <div  style="text-align:center; width: 100%;">
                                <input type="checkbox" id="checkbox" name="checkbox" checked> - Autorizo confirmación de pago por otros canales.
                            </div>
                        <hr>
                    </div>
                    </form>
                </div>`
                
                 contModal += `<div class="modal-footer">
                 <button type="button" class="btn btn-danger" onclick="quitarCh()" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="btnGuardar1" onclick="gestionClientes('No','${selDiasMora}')" ><span id="loaderGestion" >Enviar</span></button>
                </div>`;
            $('#modalContent').html(contModal);
            $('#modalContentGeneral').modal({
                'show': true,
                'backdrop': 'static'
            });

            $('#btnGuardarGestion').on('click', function(event) {
                NuevoGestion(obligacionData);
            });
             
            }
        }
        function quitarCh(){
            $("input[name='optradio']:checked").prop("checked",false);
        }
        async function ModalSiPago(obligacion_source, obligacion_cliente, nombres) {

            let selDiasMora = $('#selDiasMora').val() || null;
            let botonSelected = $("input[name='optradio']:checked").data('key');
            let obligacionInfo = obligacion_cliente.message[botonSelected];
            let obligacionData = obligacion_source.message[botonSelected];
            valor_cuota = formatter.format(obligacionData.valor_proxima_cuota);
            let contModal = '';

            //-----------------------------------------------------------------------------------------------------------
                // Obtener la fecha actual
                const fechaActual = new Date();

                // Sumarle 3 días a la fecha actual
                const diasASumar = 3;
                const nuevaFecha = new Date(fechaActual);
                nuevaFecha.setDate(fechaActual.getDate() + diasASumar);

                const fechaISO = nuevaFecha.toISOString();
                const fecha = new Date(fechaISO)
                const day = fecha.getDate();
                const mount = fecha.getMonth()+1;
                const year = fecha.getFullYear();

                // Imprimir las fechas
                // console.log('Fecha actual:', fechaActual.toISOString());
                // console.log(`Fecha después de sumar ${diasASumar} días:`, nuevaFecha.toISOString(),);
                // console.log('Fecha ISO:', fechaISO);
                // console.log('Fecha ISO:', day, mount, year);
            //-----------------------------------------------------------------------------------------------------------
            // Función para verificar si una fecha es un día festivo en Colombia
            if (obligacionData.dias_mora > 0) {
                function esFestivoColombia(fecha) {
                    // Lista de días festivos en Colombia (puedes agregar más según tu necesidad)
                    const festivosColombia = [
                        '01/01', // Año Nuevo
                        '08/01', // Día de los Reyes Magos
                        '25/03', // Día del Trabajo
                        '28/03', // Jueves Santo.
                        '29/03', // Viernes Santo.
                        '01/05', // Día del Trabajo
                        '13/05', // Día de la Ascensión.
                        '03/06', // Corpus Christi.
                        '10/06', // Día del Sagrado Corazón.
                        '01/07', // Día de San Pedro y San Pablo.
                        '20/07', // Día de la Independencia de Colombia
                        '07/08', // Batalla de Boyacá
                        '19/08', // Asunción de la Virgen
                        '14/10', // Día de la Raza
                        '04/11', // Todos los Santos
                        '11/11', // Independencia de Cartagena
                        '08/12', // Día de la Inmaculada Concepción
                        '25/12',  // Navidad
                    ];

                    // Formatear la fecha dada como DD/MM
                    const dia = fecha.getDate();
                    const mes = fecha.getMonth() + 1;
                    const fechaFormateada = `${dia < 10 ? '0' + dia : dia}/${mes < 10 ? '0' + mes : mes}`;

                    // Verificar si la fecha formateada está en la lista de festivos de Colombia
                    return festivosColombia.includes(fechaFormateada);
                }

                // Función para calcular la fecha de acuerdo excluyendo sábados, domingos y festivos en Colombia
                function calcularFechaAcuerdo(diasASumar) {
                    // Obtener la fecha actual
                    const fechaActual = new Date();
                    let nuevaFecha = new Date(fechaActual);

                    for (let i = 0; i < diasASumar;) {
                        // Aumentar un día a la fecha actual
                        nuevaFecha.setDate(nuevaFecha.getDate() + 1);

                        // Verificar si el día de la semana no es sábado (6), domingo (0) y no es festivo en Colombia
                        if (nuevaFecha.getDay() !== 6 && nuevaFecha.getDay() !== 0 && !esFestivoColombia(nuevaFecha)) {
                            i++;
                        }
                    }

                    return nuevaFecha;
                }

                // Llamada a la función para calcular la fecha de acuerdo excluyendo sábados, domingos y festivos en Colombia
                const diasASumar = 3; // Cantidad de días a sumar
                const nuevaFecha = calcularFechaAcuerdo(diasASumar);
                const tdd = nuevaFecha.getDate();
                const tmm = nuevaFecha.getMonth() + 1;
                const tyyyy = nuevaFecha.getFullYear();
                var dateAgreement = `${tdd}/${tmm}/${tyyyy}`; // Formato de fecha
//-----------------------------------------------
                contModal += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel">Gestión de Obligación</h5>
                    
                </div>
                <div class="modal-body">
                    <form method="post" id="formAutoGestion">
                        <div class="row">
                            <div class="col-md-12 col-lg-12" id="divSelHojaTip">
                                <div class="form-group w-100 text-center">
                                    <h3 >Hecho !</h3> 
                                    <p id ="cualquiera">Recuerdee que su compromiso de pago se encuentra para la fecha ${dateAgreement} por un valor aproximado de $ ${valor_cuota_proxima_cuota}. Cuando realice el pago, por favor valide el valor.</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="form-group">
                                    <p for="observacion">¿Desea agregar algún comentario sobre el pago de su obligación?</p>
                                    <textarea class="form-control" name="observacion" id="observacion" oninput="validarTexto()" placeholder="Observacion"
                                    rows=5></textarea>
                                </div>
                            </div>
                            <div  style="text-align:center; width: 100%;">
                                <input type="checkbox" id="checkbox" name="checkbox" checked> - Autorizo confirmación de pago por otros canales.
                            </div>
                        <hr>
                        </div>
                    </form>
                </div>`
            }else{
                contModal += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel">Gestión de Obligación</h5>
                    
                </div>
                <div class="modal-body">
                    <form method="post" id="formAutoGestion">
                        <div class="row">
                            <div class="col-md-12 col-lg-12" id="divSelHojaTip">
                                <div class="form-group w-100 text-center">
                                    <h3 >Hecho !</h3> 
                                    <p id ="cualquiera">Recuerde que su compromiso de pago se encuentra para la fecha ${obligacionData.fecha_pago} por un valor aproximado de $ ${valor_cuota_proxima_cuota}. Cuando realice el pago, por favor valide el valor.</p>
                                </div>
                            </div>
                          
                        <hr>
                        <div  style="text-align:center; width: 100%;">
                                <input type="checkbox" id="checkbox" name="checkbox" checked> - Autorizo confirmación de pago por otros canales.
                            </div>
                        </div>
                    </form>
                </div>`
            }
                contModal +=`<div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="quitarCh()" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" id="btnGuardar" onclick="gestionClientes('Si','${selDiasMora}')"><span id="loaderGestion" >Enviar</span></button>
                </div>`;
            $('#modalContent').html(contModal);
            SelectRama()
            $('#modalContentGeneral').modal({
                'show': true,
                'backdrop': 'static'
            });
            
        }

        function check(e) {
            tecla = (document.all) ? e.keyCode : e.which;

            //Tecla de retroceso para borrar, siempre la permite
            if (tecla == 8) {
                return true;
            }

            // Patrón de entrada, en este caso solo acepta numeros y letras
            patron = /[A-Za-z\s]/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }

        $('#btnGuardar').on('click', function(event) {
            $('#btnGuardar').attr('disabled','disabled')
        });

        // $('#btnGuardar1').on('click', function(event) {
        //     $('#btnGuardar1').attr('disabled','disabled')
        // });

        let n=1;
        async function gestionClientes(acuerdo_pago,selDiasMora){
            
            $('#nro_obligaciones').html('');
            let id_cliente = '<?= $_SESSION['Identificacion']; ?>';
            let dataObligaciones_source = await axios.get("<?= base_url(); ?>/consultarobligaciones", {
                params: {
                    id_cliente: id_cliente
                }
            });
            dataObligaciones_source = dataObligaciones_source.data
            let botonSelected = $("input[name='optradio']:checked").data('key');
            obligacionData = dataObligaciones_source.message[botonSelected] || null;
            let obligacion = '';
            if(obligacionData == null){
                obligacion = dataObligaciones_source.message[0].obligacion;
            }else{
                obligacion = obligacionData.obligacion;
            } 
            let validarObl = await axios.get("<?= base_url(); ?>/validarobligacion", {
                params: {
                    obligacion: obligacion
                }
            });
            validarObl = validarObl.data;
            // console.log(validarObl)
            if(validarObl.type=='success') {
                Swal.fire(
                    'Error!',
                    'Ya guardaste una gestion.',
                    'warning'
				);
                return 0;
            }        

            let observacion = $("#observacion").val() || null;
            let selNoPago = $('#selNoPago').val() || null;
            let contacto = $('#contacto').val() || null;
            let autorizacioncanales = $('#autorizacioncanales').val() || null;
            
//-----------------------------------------------------------------------------------------------------------
                // Obtener la fecha actual
                const fechaActual = new Date();

                // Sumarle 3 días a la fecha actual
                const diasASumar = 3;
                const nuevaFecha = new Date(fechaActual);
                nuevaFecha.setDate(fechaActual.getDate() + diasASumar);

                const fechaISO = nuevaFecha.toISOString();
                const fecha = new Date(fechaISO)
                const day = fecha.getDate();
                const mount = fecha.getMonth()+1;
                const year = fecha.getFullYear();

            //-----------------------------------------------------------------------------------------------------------
            // Función para verificar si una fecha es un día festivo en Colombia
            if (obligacionData.dias_mora > 0) {
                function esFestivoColombia(fecha) {
                    // Lista de días festivos en Colombia (puedes agregar más según tu necesidad)
                    const festivosColombia = [
                        '01/01', // Año Nuevo
                        '08/01', // Día de los Reyes Magos
                        '25/03', // Día del Trabajo
                        '28/03', // Jueves Santo.
                        '29/03', // Viernes Santo.
                        '01/05', // Día del Trabajo
                        '13/05', // Día de la Ascensión.
                        '03/06', // Corpus Christi.
                        '10/06', // Día del Sagrado Corazón.
                        '01/07', // Día de San Pedro y San Pablo.
                        '20/07', // Día de la Independencia de Colombia
                        '07/08', // Batalla de Boyacá
                        '19/08', // Asunción de la Virgen
                        '14/10', // Día de la Raza
                        '04/11', // Todos los Santos
                        '11/11', // Independencia de Cartagena
                        '08/12', // Día de la Inmaculada Concepción
                        '25/12',  // Navidad
                    ];

                    // Formatear la fecha dada como DD/MM
                    const dia = fecha.getDate();
                    const mes = fecha.getMonth() + 1;
                    const fechaFormateada = `${dia < 10 ? '0' + dia : dia}/${mes < 10 ? '0' + mes : mes}`;

                    // Verificar si la fecha formateada está en la lista de festivos de Colombia
                    return festivosColombia.includes(fechaFormateada);
                }

                // Función para calcular la fecha de acuerdo excluyendo sábados, domingos y festivos en Colombia
                function calcularFechaAcuerdo(diasASumar) {
                    // Obtener la fecha actual
                    const fechaActual = new Date();
                    let nuevaFecha = new Date(fechaActual);

                    for (let i = 0; i < diasASumar;) {
                        // Aumentar un día a la fecha actual
                        nuevaFecha.setDate(nuevaFecha.getDate() + 1);

                        // Verificar si el día de la semana no es sábado (6), domingo (0) y no es festivo en Colombia
                        if (nuevaFecha.getDay() !== 6 && nuevaFecha.getDay() !== 0 && !esFestivoColombia(nuevaFecha)) {
                            i++;
                        }
                    }

                    return nuevaFecha;
                }

                // Llamada a la función para calcular la fecha de acuerdo excluyendo sábados, domingos y festivos en Colombia
                const diasASumar = 3; // Cantidad de días a sumar
                const nuevaFecha = calcularFechaAcuerdo(diasASumar);
                const tdd = nuevaFecha.getDate();
                const tmm = nuevaFecha.getMonth() + 1;
                const tyyyy = nuevaFecha.getFullYear();
                var dateAgreement = `${tdd}/${tmm}/${tyyyy}`;
            }
            // //------------------------------------------------------------------------
            
            var checkbox = document.getElementById("checkbox");
            var resultado = document.getElementById("resultado");
            if (checkbox.checked) {
                // console.log("FECHA = ", dateAgreement)
                autorizacioncanales = "Autoriza"
                // Aquí podrías agregar código adicional para guardar la información.

                let elemento = "Recuerde que su compromiso de pago se encuentra para la fecha "+ dateAgreement + " por un valor aproximado de: " + valor_cuota_proxima_cuota + " Cuando realice el pago, por favor valide el valor.";

            let sel = '';
            if(selDiasMora == null){
                sel = selNoPago;
            }else{
                sel = selDiasMora;
            }
            const params = new URLSearchParams();
            params.append('obligacion', obligacion);
            params.append('sel', sel);
            if (acuerdo_pago== "Si"){
                params.append('observacion', elemento + " // " + observacion);
            }
            else{
                params.append('observacion', observacion);
            }
            params.append('acuerdo_pago', acuerdo_pago);
            params.append('contacto', contacto);
            params.append('autorizacioncanales', autorizacioncanales);
            let gestion = await axios.post("<?= base_url(); ?>/gestionnueva", params);

            // const elemento = obligacionData.fecha_pago;

            // console.log("BANDERA-1=", elemento);


            if(n == dataObligaciones_source.message.length ){
                $('#si_Btn').attr('disabled','disabled');
                $('#no_Btn').attr('disabled','disabled');
                $('#nro_obligaciones').html(`Ha gestionado ${n} de ${dataObligaciones_source.message.length} obligaciones`);
                $('#lblPago').html(``);
                $('#lblPago').html(`Ha gestionado con éxito todos sus productos`);
                gracias(acuerdo_pago);
            }else{
                $('#nro_obligaciones').html(`Ha gestionado ${n} de ${dataObligaciones_source.message.length} obligaciones`);
                    n=n+1;
                $('#modalContentGeneral').modal('hide');}    

            $("input[name='optradio']:checked").attr('disabled','disabled');   

                //--------------------------------------------------------
                
            } else {
                autorizacioncanales = " No Autoriza"
                // document.getElementById("botonEnviar").disabled = false;
                // Aquí podrías agregar código adicional si necesitas manejar el caso en el que no está seleccionado.
                alert("Por favor, Seleccione la autorización para poder continuar.");
                // window.alert("Bienvenido a nuestro sitio web");
                // window.open("https://javascript.info");
                // prompt("Informacion", ["Por favor, Seleccione la autorización para poder continuar."]);
                
            }   
        }
            
            // //------------------------------------------------------------------------


        function gracias(acuerdo){
            // console.log('entro');
            let contModal = '';
            if(acuerdo == 'Si'){
                contModal += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel"></h5>
                    
                </div>
                <div class="modal-body">
                    <form method="post" id="formAutoGestion">
                        <div class="row">
                            <div class="col-md-12 col-lg-12" id="divSelHojaTip">
                                <div class="form-group w-100 text-center">
                                    <h3>Información guardada con éxito!</h3> 
                                    <hr>
                                    <div class="image">
                                        <img src="<?= base_url(); ?>/assets/dist/img/logo-fna.png" style="width:13rem; height:13rem;"  alt="User Image">
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        <hr>
                        </div>
                    </form>
                </div>`}else{
                    contModal += `<div class="modal-header" style="color:#FDFEFE">
                    <h5 class="modal-title" id="contentModalLabel"></h5>
                    
                </div>
                <div class="modal-body">
                    <form method="post" id="formAutoGestion">
                        <div class="row">
                            <div class="col-md-12 col-lg-12" id="divSelHojaTip">
                                <div class="form-group w-100 text-center">
                                    <h3 >Información guardada con éxito!</h3> 
                                    <hr>
                                    <div class="image">
                                        <img src="<?= base_url(); ?>/assets/dist/img/logo-fna.png" style="width:13rem; height:13rem;"  alt="User Image">
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        <hr>
                        </div>
                    </form>
                </div>`
                }
            
                contModal +=`
                <div class="modal-boton-end">
                    <button type="button" class="btn btn-primary-green" onclick=""><span id="factura" >Factura</span></button>
                    <button type="button" class="btn btn-primary-blue" onclick=""><span id="pagar" >Pagar</span></button>
                    <button type="button" class="btn btn-primary-red" onclick="CerrarSesion()"><span id="loaderGestion" >Salir</span></button>
                </div>
                `;
        
            $('#modalContent').html(contModal);
            $('#modalContentGeneral').modal({
                'show': true,
                'backdrop': 'static'
            });

            document.getElementById('pagar').addEventListener('click', function() {
                // Redireccionar a la página deseada
                // console.log("AQUI ESTOY");
                window.open ('https://www.fna.gov.co:8081/CWC/services/cobis/web/app/index.html#!/login ', '_blank');
            });

            document.getElementById('factura').addEventListener('click', function() {
                // Redireccionar a la página deseada
                // console.log("AQUI ESTOY");
                window.open ('https://api.whatsapp.com/send?phone=573102816209', '_blank');
            });

            setTimeout(function(){
                window.location.href = '<?= base_url(); ?>/logout';
            }, 120000);
        }

        function CerrarSesion(){
            window.location.href = '<?= base_url(); ?>/logout';
        }

        function validarFecha(tronco, obligacionInfo, obligacionData) {

            var today = new Date();
            var future = new Date();
            let meses = 2
            var tdd = today.getDate();
            //var fdd = future.getDate();
            var tmm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
            //var fmm = future.getMonth() + 3; //January is 0 so need to add 1 to make it 1!
            var tyyyy = today.getFullYear();
            //var fyyyy = future.getFullYear();
            if (tdd < 10) {
                tdd = '0' + tdd
            }
            if (tmm < 10) {
                tmm = '0' + tmm
            }
            /* if (fmm > 12) {
                 fyyyy + 1
                 //fmm - 10
             }*/

            function AddMes() {
                var fecha = new Date(today);
                fecha.setMonth(fecha.getMonth() + +(meses));
                future = setFormato(fecha);
            }
            AddMes();

            function setFormato(fecha) {
                var day = ("0" + fecha.getDate()).slice(-2);
                var month = ("0" + (fecha.getMonth() + 1)).slice(-2);
                var date = fecha.getFullYear() + "-" + (month) + "-" + (day);

                return date;
            }
            let cant_cuotas;
            for (let index = 1; index <= 36; index++) {
                cant_cuotas += `<option value="${index}">${index}</option>`;
            }

            let rama = $("#selRamaGestion").find(':selected').data('name');
            //console.log(rama);
            let contentpromesa = `  <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <label>Fecha promesa</label>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label>Valor a Pagar</label>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="date" class="form-control" name="fecha_promesa" id="fecha_promesa" placeholder="Fecha Promesa" max="2022-01-17"onkeydown="return false" disabled>
                            </div>
                        </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="number" class="form-control"  name="valor_compromiso" id="valor_compromiso" placeholder="Valor total" disabled>
                                </div>
                            </div>
                        </div>`;
            let contentArregloCartera = ` <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <label>Fecha promesa</label>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label>Valor a Pagar</label>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <label>Opción</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="fecha_promesa" id="fecha_promesa" placeholder="Fecha Promesa" max="2022-01-17" onkeydown=" return false" disabled/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="valor_compromiso" id="valor_compromiso" placeholder="Valor total" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select name="selOpcionPago" id="selOpcionPago" class="form-control" disabled>
                                        <option value="">Seleccione</option>
                                        <option value="distribuida" data-name="distribuida">Distribuida</option>
                                        <option value="proxima" data-name="proxima">Próxima</option>
                                        <option value="ultima" data-name="ultima">Última</option>
                                        </select>
                                    </div>
                                </div>
                            </div>`;
            let contentTarjetaCredito = ` <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <label>Número de cuotas</label>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label>Valor a Pagar</label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <select name="selCuotaPago" id="selCuotaPago" class="form-control" disabled>
                                        <option value="">Seleccione</option>
                                        <option value="${cant_cuotas}"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="valor_compromiso" id="valor_compromiso" placeholder="Valor total" disabled>
                                    </div>
                                </div>                                        
                            </div>`;


            today = tyyyy + '-' + tmm + '-' + tdd;
            //console.log(obligacionInfo);

            if (tronco == tronco && rama == "ABONO PARCIAL" && obligacionInfo.banca == "TARJETA DE CREDITO") {
                $('#divCamposExtra').html(contentTarjetaCredito);
                $('#fecha_promesa').attr('min', today);
                $('#fecha_promesa').attr('max', future);
                $('#valor_compromiso').attr('min', 1);
                $('#valor_compromiso').attr('max', 300000000);
                $('#valor_compromiso').addClass('was-validated');

                $('#valor_compromiso').change(function(e) {
                    e.preventDefault();
                    //console.log("valor pagos");
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });
                $('#selCuotaPago').change(function(e) {
                    e.preventDefault();
                    //console.log("selector cuotas");
                    $('#valor_compromiso').removeAttr('disabled');
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });

            } else if ((tronco == tronco && rama == "ACEPTO ARREGLO DE CARTERA") || (tronco == "1" && rama == "ABONO PARCIAL")) {
                $('#divCamposExtra').html(contentArregloCartera);
                $('#fecha_promesa').attr('min', today);
                $('#fecha_promesa').attr('max', future);
                $('#valor_compromiso').attr('min', 1);
                $('#valor_compromiso').attr('max', 300000000);

                $('#valor_compromiso').change(function(e) {
                    e.preventDefault();
                    //console.log("valor pagos");

                    $('#selOpcionPago').removeAttr('disabled');
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });
                $('#fecha_promesa').change(function(e) {
                    e.preventDefault();
                    //console.log("fecha_promesa");

                    $('#valor_compromiso').removeAttr('disabled');
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });

                $('#selOpcionPago').change(function(e) {
                    e.preventDefault();
                    //console.log("selector opcion pagos ");
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });
            } else if (tronco = tronco && rama == "PROMESA") {
                $('#divCamposExtra').html(contentpromesa);
                $('#fecha_promesa').attr('min', today);
                $('#fecha_promesa').attr('max', future);
                $('#valor_compromiso').attr('min', 1);
                $('#valor_compromiso').attr('max', 300000000);

                $('#valor_compromiso').change(function(e) {
                    e.preventDefault();
                    //console.log("valor pagos");
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });
                $('#fecha_promesa').change(function(e) {
                    e.preventDefault();
                    //console.log("fecha_promesa");

                    $('#valor_compromiso').removeAttr('disabled');
                    generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
                });

            } else {
                $('#divCamposExtra').html('');
            }

        }
        $(document.body).on('keyup', `#valor_compromiso`, function(event) {
            //console.log("monto minimo", event.target.min)
            let montoMin = event.target.min
            //console.log("monto maximo", event.target.max)
            let montoMax = event.target.max
            //console.log("value", $('#valor_compromiso').val())
            let montoVal = $('#valor_compromiso').val();
            if (montoVal > montoMin && montoVal <= 300000000) {
                //console.log("monto permitido");
            } else if (montoVal < montoMin) {
                alert("el valor no puede ser 0");

                $("#clearBtn1").addClass("show");
                //console.log("monto no permitido");

                $("#valor_compromiso_err").addClass("show");
            } else {

                alert("el valor no puede superar los $300.000.000");
                //console.log("monto no permitido");
            }
        })



        async function SelectRama() {
            ValidarSesion();
            let idtronco = tronco;

            let dataRama = await axios.get("<?= base_url(); ?>/listarselrama", {
                params: {
                    idtronco
                }
            });
            // console.log(dataRama);

            let selRamaGestion = $('#selRamaGestion');

            let optRama = '';
            if (dataRama.data.type == 'error') {
                optRama += `<option value="">Seleccione</option>`;
            } else {
                optRama += `<option value="">Seleccione</option>`;
                $.each(dataRama.data.message, function(index, val) {
                    if (val.estado == "t") {
                        optRama += `<option value="${val.rama_id}" data-name="${val.rama_nombre}">${val.rama_nombre}</option>`;
                    }
                });
            }

            selRamaGestion.html(optRama);

            if (idtronco == "") {
                selRamaGestion.attr('disabled', 'disabled');
            } else {
                selRamaGestion.removeAttr('disabled');
            }
        }

        async function SelectHoja(obligacionInfo, obligacionData) {
            ValidarSesion();

            let idrama = $('#selRamaGestion').val();

            let dataHoja = await axios.get("<?= base_url(); ?>/listarselhoja", {
                params: {
                    idrama
                }
            });

            let selHojaGestion = $('#selHojaGestion');
            $('#selHojaGestion').change(function(e) {
                e.preventDefault();
                $('#fecha_promesa').removeAttr('disabled');
                $('#selCuotaPago').removeAttr('disabled');
                //console.log("selector de hoja ");
                generarObservacion(obligacionInfo.obligacion, obligacionInfo.identificacion, obligacionData);
            });

            let optRama = '';
            if (dataHoja.data.type == 'error') {
                optRama += `<option value="">Seleccione</option>`;
            } else {
                optRama += `<option value="">Seleccione</option>`;
                $.each(dataHoja.data.message, function(index, val) {
                    if (val.estado == "t") {
                        optRama += `<option value="${val.hoja_id}" data-name="${val.hoja_nombre}">${val.hoja_nombre}</option>`;
                    }
                });
            }

            selHojaGestion.html(optRama);
            //console.log("dias de mora obligacion", obligacionInfo.dias_mora);

            if (tronco == tronco && obligacionInfo.dias_mora >= 0) {
                selHojaGestion.removeAttr('disabled');
                //console.log("mora = ", obligacionInfo.dias_mora);
            } else if (idrama == "" || tronco != "1") {
                //ValidarEstadoCompromiso(tronco);
                //console.log("test");
                selHojaGestion.attr('disabled', 'disabled');
            } else {
                //console.log("test de salida");
            }

            validarFecha(tronco, obligacionInfo, obligacionData);
        }

        function generarObservacion(obligacion, identificacion, obligacionData) {
            //console.log('observacion data ->obligaciondata',obligacionData);
            let observacion_cliente = "";
            let observacion_Data = "";
            let deudor_id = identificacion
            let deuda_Data = obligacionData.obligacion
            //let tronco = $("#selTroncoGestion").find(':selected').data('name') || '';
            let rama = $("#selRamaGestion").find(':selected').data('name');

            let hoja = $("#selHojaGestion").find(':selected').data('name');
            let opcion_pago = $("#selOpcionPago").find(':selected').data('name') || "";
            let valor_pago = $('#valor_compromiso').val() || "";
            let fecha_promesa = $('#fecha_promesa').val() || "";
            let selCuotaPago = $('#selCuotaPago').val() || "";


            tronco = (tronco === "" || tronco === undefined) ? "" : tronco;
            rama = (rama === "" || rama === undefined) ? "" : rama;
            hoja = (hoja === "" || hoja === undefined) ? "" : hoja;
            observacion_cliente = obligacion + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            if (fecha_promesa != "") {
                fecha_promesa = "con fecha de: " + fecha_promesa
                observacion_cliente = obligacion + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
                observacion_Data = deuda_Data + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            }
            if (valor_pago != "") {
                valor_pago = " con un pago de:" + formatter.format(valor_pago)
                observacion_cliente = obligacion + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
                observacion_Data = deuda_Data + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            }
            if (opcion_pago != "") {
                opcion_pago = " en cuota(s): " + opcion_pago
                observacion_cliente = obligacion + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
                observacion_Data = deuda_Data + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            }
            if (selCuotaPago != "") {
                selCuotaPago = " a " + selCuotaPago + " cuotas"
                observacion_cliente = obligacion + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
                observacion_Data = deuda_Data + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            }
            observacion_Data = deuda_Data + " " + deudor_id + " " + tronco + " " + rama + " " + hoja + " " + opcion_pago + " " + valor_pago + " " + fecha_promesa + " " + selCuotaPago;
            //console.log(observacion_Data);

            Test = observacion_Data
            $('#observacion').val(observacion_cliente);
        }


        /*$(document.body).on('click', `#modalContent`, function(event) {
            console.log("click en el modal ");
            console.log(Test);
        })*/

    //-----------------------------Validar enviar numeros-------------------------------------------
    function validarTexto() {
        var textarea = document.getElementById("observacion");
            var contenido = textarea.value.trim(); // Elimina espacios al inicio y al final

            if (contenido !== '' && /^\d+$/.test(contenido)) {// Verificar si el contenido solo contiene números
                alert("El texto no puede consistir solo en números. Por favor, ingrese otro contenido.");
                return false; // Evita que se envíe el formulario
            }
        return true; // Permite enviar el formulario si no hay solo números
    }
    //------------------------------------------------------------------------
        function NuevoGestion(observacion_Data) {
            ValidarSesion();
            var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000
            });

            let selRamaGestion = $('#selRamaGestion').val();
            let selHojaGestion = $('#selHojaGestion').val();
            let observacionData = observacion_Data
            let observacion_cliente = $('#observacion').val();
            let campoOpcionPago = $('#selOpcionPago').val(); //puede estar vacío
            let campoNumeroCuotas = $('#selCuotaPago').val(); //puede estar vacío
            let campoValorCompromiso = $('#valor_compromiso').val();
            let fecha_promesa = $('#fecha_promesa').val()

            if (selRamaGestion == '' || observacion_cliente == '') {
                Toast.fire({
                    icon: 'error',
                    title: 'Debe diligenciar todos los campos.'
                });
                return false;
            }

            let bla = Test + observacion_cliente.slice(Test.length);

            let formData = 'selRamaGestion=' + selRamaGestion + '&selHojaGestion=' + selHojaGestion + '&observacion=' + bla;

            let numeroCuotas = campoNumeroCuotas;

            if (numeroCuotas == "" || numeroCuotas == undefined) {
                //console.log("numero de cuotas vacío");
                numeroCuotas = null

            }
            formData += '&cuotas=' + numeroCuotas;

            let opcionPago = campoOpcionPago
            if (opcionPago == "" || opcionPago == undefined) {
                //console.log("numero de cuotas vacío");
                opcionPago = null

            } else {
                opcionPago = "'" + opcionPago + "'"
            }
            formData += '&opcion_pago=' + opcionPago;


            let valorPago = campoValorCompromiso;
            if (valorPago == '' || valorPago == undefined) {
                valorPago = null
                //console.log("valor pago vacio");

            }
            formData += '&valor_pago=' + valorPago

            if (fecha_promesa == '' || fecha_promesa == undefined) {
                //console.log("fecha vacío");
                fecha_promesa = "-"
                //console.log(fecha_promesa);

            }
            formData += '&fecha_promesa=' + fecha_promesa;


            

          
        }
    </script>
</body>

</html>