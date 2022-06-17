/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Session */

    function verifyenterkeypressed(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode == 13){
            validateuserlogin();
        }
    }

    function validateuserlogin(){
        var url = myBase_url+"index.php/Session/validatelogin";
        var user = $('#user').val();
        var pass = $('#password').val();
        $('#fountainTextG').show();
        $.post(url,
                {
                    user:user,  
                    pass: pass
                }, function(data){
                    sendresponsetouser(data);
        });
    }

    function ResetUserLogin(){

        var userreset = $("#userreset").val();
        var passreset = $("#passwordreset").val();

        if (userreset != ""  && passreset != "") {

            $.ajax({
                url:myBase_url+"index.php/Session/ResetLogin",
                type:'POST',
                data:{userreset:userreset,passreset:passreset},
                async: true,
                success:function(datos){
                    var response = JSON.parse(datos);

                    if (response == "UWOA") {

                        swal("Error","Usuario sin acceso a esta aplicación","error");
        
                    }else if(response == "IUOP"){

                        swal("Error","Usuario o contraseña incorecta","error");
                    }else{

                        swal({   
                            title: "Exito",
                            text: "Se ha reseteado la sesion con exito",   
                            type: "success",   
                            showCancelButton: false,   
                            confirmButtonColor: "#DD6B55",   
                            confirmButtonText: "OK",   
                            cancelButtonText: "No, Cancelar",   
                            closeOnConfirm: true,   
                            closeOnCancel: false 
                        }, function(isConfirm){   
                            
                            location.href = "";  
                        });
                    }

                },
                error:function(){
                    swal("Error","Ha ocurrido un error intentelo de nuevo","error");
                }
            });
        
        }else{

            swal("Cuidado", "Aun quedan campos vacios", "warning")
        }

    }

    function sendresponsetouser(data){
        var dato = data.trim();  
        if(dato.substring(0,3) === "OK-"){
            openurl(dato);
        }else if(dato.substring(0,4)==="UWOA"){
            displaymessage("Usuario sin acceso a esta aplicación" );
        }else if(dato.substring(0,4)==="IUOP"){
            displaymessage("Usuario y/o contraseña incorrectos");
        } else if(dato.substring(0,4)==="UWAS"){
            displaymessage("Usuario ya cuenta con una sesion activa");
        } else{
            displaymessage(data);
        }
    }

    function openurl(str){
        $('#fountainTextG').hide();
        var sp = str.split("-");
        var url = myBase_url+"index.php/"+sp[1];
        window.location.href = url;
    }

    function displaymessage(message){
        $('#fountainTextG').hide();
        var msg = '<div class="alert alert-danger alert-dismissable fade in">\n\
                        <button type="button" class="close close-sm" data-dismiss="alert" >\n\
                        <i class="md md-close"></i>\n\
                        </button>\n\
                        <strong>¡Error!</strong>&nbsp;'+message+'&nbsp;\n\
                </div>';
        $('#displayUserErrors').html(msg);
        setTimeout(closeresponsetouser, 10000);
    }

    function closeresponsetouser(){
        $('#displayUserErrors').children().fadeToggle(500,function(){
            $('#displayUserErrors').empty();
        });

    } 

    function LogOut(){

        $.ajax({
            url:myBase_url+"index.php/Session/logout",
            type:'GET',
            async: true,
            success:function(datos){
                swal({   
                    title: "Error",
                    text: "La sesion ha caducado, porfavor inicia sesion de nuevo",   
                    type: "error",   
                    showCancelButton: false,   
                    confirmButtonColor: "#DD6B55",   
                    confirmButtonText: "OK",   
                    cancelButtonText: "Cancelar",   
                    closeOnConfirm: false,   
                    closeOnCancel: false 
                }, function(isConfirm){ 
                        location.href = myBase_url+"index.php/Session";       
                });     
            }
        });   
    }

    function CheckUActivo(){

        $.ajax({
            url:myBase_url+"index.php/Session/EstadoU",
            type:'GET',
            async: true,
            success:function(datos){
                var obj = JSON.parse(datos);

                if(obj != ""){
                    console.log("OK");
                }else{
                    $.ajax({
                        url:myBase_url+"index.php/Session/logout",
                        type:'GET',
                        async: true,
                        success:function(datos){
                            swal({   
                                title: "Error",
                                text: "Tu cuenta ha sido eliminada, para mayor informacion acude con el administrador",   
                                type: "error",   
                                showCancelButton: false,   
                                confirmButtonColor: "#DD6B55",   
                                confirmButtonText: "OK",   
                                cancelButtonText: "Cancelar",   
                                closeOnConfirm: false,   
                                closeOnCancel: false 
                            }, function(isConfirm){ 
                                    location.href = myBase_url+"index.php/Session";       
                            }); 
                        }
                    });
                }  
            }
        });

    }

/* END - CONTROLLER: Session */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Padres */

    /* Funcion para corroborar si el usuario ya esxiste en la base de datos */
    function VerificaUser(){
        var usuario = $('#username').val();

        if(usuario != ""){
            $.ajax({
                url:    myBase_url+"index.php/Padres/CheckUsuarioExistente",
                type:   'POST',
                data:   {username:usuario},
                async:  true,
                success:function(datos){
                    var obj = JSON.parse(datos);

                    if(obj != ""){
                        swal("Error", "El usuario ya existe, intentelo de nuevo","error");
                        $('#username').val("");
                    }
                },
                error:function() {
                    swal("Error", "Ha ocurrido un error intentelo de nuevo","error");                
                }
            });
        }else {
            swal("Cuidado","El campo de usuario está vacío","warning");
        }
    }

    function GuardarPadre(){
        var nombre      = $('#nombre').val();
        var apaterno    = $('#apaterno').val();
        var amaterno    = $('#amaterno').val();
        var telefono    = $('#telefono').val();
        var direccion   = $('#direccion').val();
        var email       = $('#email').val();
        var username    = $('#username').val();
        var password    = $('#password').val();
        var nino        = $('#nino').val();

        if(nombre != "" && apaterno != "" && amaterno != "" && telefono != "" && direccion != "" && email != "" && username != "" && password != "" && nino != ""){
            $.ajax({
                url:     myBase_url+"index.php/Padres/SavePadre",
                type:    'POST',
                data:    {nombre:nombre,apaterno:apaterno,amaterno:amaterno,telefono:telefono,direccion:direccion,email:email,username:username,password:password,nino:nino},
                async:   true,
                success: function(datos){
                    swal({
                        title:              "Exito",
                        text:               "Se ha guardado el usuario con exito",
                        type:               "success",
                        showCancelButton:   false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText:  "OK",
                        cancelButtonText:   "No, Cancelar",
                        closeOnConfirm:     true,
                        closeOnCancel:      false
                    }, function(isConfirm){
                        location.href = "";
                    });
                },
            });
        }else{
            swal("Cuidado","Aun existen campos vacios","warning");
        }
    }

    function EditarPadre($id){
        var id = $id;
        $.ajax({
            url:    myBase_url+"index.php/Padres/PadrePorId",
            type:   'POST',
            data:   {id:id},
            async:  true,
            success:function(datos){
                var obj          = JSON.parse(datos);
                var id           = obj[0].id_padre;
                var nombre       = obj[0].nombre;
                var apaterno     = obj[0].apaterno;
                var amaterno     = obj[0].amaterno;
                var telefono     = obj[0].telefono;
                var direccion    = obj[0].direccion;
                var email        = obj[0].email;
                var usuario      = obj[0].username;
                var password     = obj[0].password;
                var nino         = obj[0].id_nino;
                var estado       = obj[0].estado;
                
                $('#username').attr('disabled',true);
                $('#password').attr('disabled',true);
                $('#btn-guardar').hide();
                $('#btn-update').show();
                $('#div-estado').show();

                $('#id_user').val(id);
                $('#nombre').val(nombre);
                $('#apaterno').val(apaterno);
                $('#amaterno').val(amaterno);
                $('#telefono').val(telefono);
                $('#direccion').val(direccion);
                $('#email').val(email);
                $('#username').val(usuario);
                $('#password').val(password);
                $('#nino').val(nino);
                $('#estado').val(estado);
            },
            error:function() {
                swal("Error", "Ha ocurrido un error intentelo de nuevo","error");            
            }
        });
    }

    function BorrarPadre($id){
        var id = $id;
        swal({
            title:              "ADVERTENCIA",
            text:               "¿Desea eliminar el registro del niño asociado con el padre?",
            type:               "warning",
            showCancelButton:   true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText:  "Aceptar",
            cancelButtonText:   "No, Solo el padre",
            deniedButtonText:   "Cancelar",
            closeOnConfirm:     false,
            closeOnCancel:      true
        },function(isConfirm){
            if(isConfirm){
                var id = $id;
                $.ajax({
                    url:     myBase_url+"index.php/Padres/DeleteNinoFromPadre",
                    type:    'POST',
                    data:    {id:id},
                    async:   true,
                    success: function(datos){
                        swal({
                            title:              "Exito",
                            text:               "Se ha eliminado el registro del niño con exito ",
                            type:               "success",
                            showCancelButton:   false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText:  "OK",
                            cancelButtonText:   "No, Cancelar",
                            closeOnConfirm:     true,
                            closeOnCancel:      false
                        }, function(isConfirm){
                                location.href = "";
                        });
                    },error:function (){
                        swal("Error","Ha ocurrido un error intentelo de nuevo","error");
                    }
                });
            } else {
                var id = $id;
                $.ajax({
                    url:     myBase_url+"index.php/Padres/DeletePadre",
                    type:    'POST',
                    data:    {id:id},
                    async:   true,
                    success: function(datos){
                        swal({
                            title:              "Exito",
                            text:               "Se ha borrado el usuario con exito",
                            type:               "success",
                            showCancelButton:   false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText:  "OK",
                            cancelButtonText:   "No, Cancelar",
                            closeOnConfirm:     true,
                            closeOnCancel:      false
                        }, function(isConfirm){
                            location.href = "";
                        });
                    },
                    error:function() {
                        swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                        
                    }
                });
            }
        });
    }

    function ActualizarPadre(){
        var id          = $('#id_user').val();
        var nombre      = $('#nombre').val();
        var apaterno    = $('#apaterno').val();
        var amaterno    = $('#amaterno').val();
        var telefono    = $('#telefono').val();
        var direccion   = $('#direccion').val();
        var email       = $('#email').val();
        var username    = $('#username').val();
        var password    = $('#password').val();
        var nino        = $('#nino').val();
        var estado      = $('#estado').val();

        if(id != "" && nombre != "" && apaterno != "" && amaterno != "" && telefono != "" && direccion != "" && email != "" && username != "" && password != "" && nino != "" && estado != ""){
            $.ajax({
                url:    myBase_url+"index.php/Padres/UpdatePadre",
                type:   'POST',
                data:   {id:id,nombre:nombre,apaterno:apaterno,amaterno:amaterno,telefono:telefono,direccion:direccion,email:email,username:username,password:password,nino:nino,estado:estado},
                async:  true,
                success:function(datos){
                    swal({
                        title:              "Exito",
                        text:               "Se ha actualizado el usuario con exito",
                        type:               "success",
                        showCancelButton:   false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText:  "OK",
                        cancelButtonText:   "No, Cancelar",
                        closeOnConfirm:     true,
                        closeOnCancel:      false
                    }, function(isConfirm){
                        location.href = "";
                    });
                },
                error:function() {
                    swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                },
            });
        }
    }

/* END - CONTROLLER: Padres */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Alumnos */

    function GuardarAlumno(){
        var nombre         = $('#nombre').val();
        var apaterno       = $('#apaterno').val();
        var amaterno       = $('#amaterno').val();
        var tel_emergencia = $('#tel_emergencia').val();
        var nivel          = $('#nivel').val();

        if(nombre != "" && apaterno != "" && amaterno != "" && tel_emergencia != "" && nivel != ""){
            $.ajax({
                url:     myBase_url+"index.php/Alumnos/SaveAlumno",
                type:    'POST',
                data:    {nombre:nombre,apaterno:apaterno,amaterno:amaterno,tel_emergencia:tel_emergencia,nivel:nivel},
                async:   true,
                success: function(datos){
                    swal({
                        title:              "Exito",
                        text:               "Se ha guardado el alumno con exito",
                        type:               "success",
                        showCancelButton:   false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText:  "OK",
                        cancelButtonText:   "No, Cancelar",
                        closeOnConfirm:     true,
                        closeOnCancel:      false
                    }, function(isConfirm){
                        location.href = "";
                    });
                },
            });
        }else{
            swal("Cuidado","Aun existen campos vacios","warning");
        }
    }

    function EditarAlumno($id){
        var id = $id;
        $.ajax({
            url:     myBase_url+"index.php/Alumnos/AlumnoPorId",
            type:    'POST',
            data:    {id:id},
            async:   true,
            success: function(datos){
                var obj            = JSON.parse(datos);
                var id             = obj[0].id_nino;
                var nombre         = obj[0].nombre_nino;
                var apaterno       = obj[0].apaterno_nino;
                var amaterno       = obj[0].amaterno_nino;
                var tel_emergencia = obj[0].tel_emergencia;
                var nivel          = obj[0].nivel;
                var estado         = obj[0].estado_nino;
                var padre          = obj[0].id_padre;
                
                $('#btn-guardar').hide();
                $('#btn-update').show();
                $('#div-estado').show();
                $('#div-padre').show();

                $('#id_alumno').val(id);
                $('#nombre').val(nombre);
                $('#apaterno').val(apaterno);
                $('#amaterno').val(amaterno);
                $('#tel_emergencia').val(tel_emergencia);
                $('#nivel').val(nivel);
                $('#estado').val(estado);
                $('#padre').val(padre);
            },
            error:function() {
                swal("Error", "Ha ocurrido un error intentelo de nuevo","error");            
            }
        });
    }

    function BorrarAlumno($id){
        var id = $id;
        swal({
            title:              "ADVERTENCIA",
            text:               "¿Estás seguro?",
            type:               "warning",
            showCancelButton:   true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText:  "Aceptar",
            cancelButtonText:   "Cancelar",
            closeOnConfirm:     false,
            closeOnCancel:      true
        },function(isConfirm){
            if(isConfirm){
                var id = $id;
                $.ajax({
                    url:     myBase_url+"index.php/Alumnos/DeleteAlumno",
                    type:    'POST',
                    data:    {id:id},
                    async:   true,
                    success: function(datos){
                        swal({
                            title:              "Exito",
                            text:               "Se ha borrado el alumno con exito",
                            type:               "success",
                            showCancelButton:   false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText:  "OK",
                            cancelButtonText:   "No, Cancelar",
                            closeOnConfirm:     true,
                            closeOnCancel:      false
                        }, function(isConfirm){
                            location.href = "";
                        });
                    },
                    error:function() {
                        swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                        
                    }
                });
            }
            /* if(isConfirm){
                var id = $id;
                $.ajax({
                    url:     myBase_url+"index.php/Alumnos/DeletePadreFromAlumno",
                    type:    'POST',
                    data:    {id:id},
                    async:   true,
                    success: function(datos){
                        swal({
                            title:              "Exito",
                            text:               "Se ha eliminado el registro del padre con exito ",
                            type:               "success",
                            showCancelButton:   false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText:  "OK",
                            cancelButtonText:   "No, Cancelar",
                            closeOnConfirm:     true,
                            closeOnCancel:      false
                        }, function(isConfirm){
                                location.href = "";
                        });
                    },error:function (){
                        swal("Error","Ha ocurrido un error intentelo de nuevo","error");
                    }
                });
            } else {
                var id = $id;
                $.ajax({
                    url:     myBase_url+"index.php/Alumnos/DeleteAlumno",
                    type:    'POST',
                    data:    {id:id},
                    async:   true,
                    success: function(datos){
                        swal({
                            title:              "Exito",
                            text:               "Se ha borrado el alumno con exito",
                            type:               "success",
                            showCancelButton:   false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText:  "OK",
                            cancelButtonText:   "No, Cancelar",
                            closeOnConfirm:     true,
                            closeOnCancel:      false
                        }, function(isConfirm){
                            location.href = "";
                        });
                    },
                    error:function() {
                        swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                        
                    }
                });
            } */
        });
    }

    function ActualizarAlumno(){
        var id             = $('#id_alumno').val();
        var nombre         = $('#nombre').val();
        var apaterno       = $('#apaterno').val();
        var amaterno       = $('#amaterno').val();
        var tel_emergencia = $('#tel_emergencia').val();
        var nivel          = $('#nivel').val();
        var estado         = $('#estado').val();
        var padre          = $('#padre').val();

        if(id != "" && nombre != "" && apaterno != "" && amaterno != "" && tel_emergencia != "" && nivel != "" && padre != "" && estado != ""){
            $.ajax({
                url:     myBase_url+"index.php/Alumnos/UpdateAlumno",
                type:    'POST',
                data:    {id:id,nombre:nombre,apaterno:apaterno,amaterno:amaterno,tel_emergencia:tel_emergencia,nivel:nivel,padre:padre,estado:estado},
                async:   true,
                success: function(datos){
                    swal({
                        title:              "Exito",
                        text:               "Se ha actualizado el alumno con exito",
                        type:               "success",
                        showCancelButton:   false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText:  "OK",
                        cancelButtonText:   "No, Cancelar",
                        closeOnConfirm:     true,
                        closeOnCancel:      false
                    }, function(isConfirm){
                        location.href = "";
                    });
                },
                error:function() {
                    swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                },
            });
        }
    }

/* END - CONTROLLER: Alumnos */
/* =============================================================================================================================================================================================================================== */

/* =============================================================================================================================================================================================================================== */
/* START - CONTROLLER: Padres */

function GuardarMaestro(){
    var nombre      = $('#nombre').val();
    var apaterno    = $('#apaterno').val();
    var amaterno    = $('#amaterno').val();
    var telefono    = $('#telefono').val();
    var direccion   = $('#direccion').val();
    var email       = $('#email').val();
    var username    = $('#username').val();
    var password    = $('#password').val();
    var nivel          = $('#nivel').val();

    if(nombre != "" && apaterno != "" && amaterno != "" && telefono != "" && direccion != "" && email != "" && username != "" && password != "" && nivel != ""){
        $.ajax({
            url:     myBase_url+"index.php/Maestros/SaveMaestro",
            type:    'POST',
            data:    {nombre:nombre,apaterno:apaterno,amaterno:amaterno,telefono:telefono,direccion:direccion,email:email,username:username,password:password, nivel:nivel},
            async:   true,
            success: function(datos){
                swal({
                    title:              "Exito",
                    text:               "Se ha guardado el maestro con exito",
                    type:               "success",
                    showCancelButton:   false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText:  "OK",
                    cancelButtonText:   "No, Cancelar",
                    closeOnConfirm:     true,
                    closeOnCancel:      false
                }, function(isConfirm){
                    location.href = "";
                });
            },
        });
    }else{
        swal("Cuidado","Aun existen campos vacios","warning");
    }
}

function EditarMaestro($id){
    var id = $id;
    $.ajax({
        url:    myBase_url+"index.php/Maestros/MaestroPorId",
        type:   'POST',
        data:   {id:id},
        async:  true,
        success:function(datos){
            var obj          = JSON.parse(datos);
            var id           = obj[0].id_maestro;
            var nombre       = obj[0].nombre;
            var apaterno     = obj[0].apaterno;
            var amaterno     = obj[0].amaterno;
            var telefono     = obj[0].telefono;
            var direccion    = obj[0].direccion;
            var email        = obj[0].email;
            var usuario      = obj[0].username;
            var password     = obj[0].password;
            var role         = obj[0].role;
            var estado       = obj[0].estado;
            var nivel = obj[0].nivel;
            
            $('#username').attr('disabled',true);
            $('#password').attr('disabled',true);
            $('#btn-guardar').hide();
            $('#btn-update').show();
            $('#div-estado').show();

            $('#id_user').val(id);
            $('#nombre').val(nombre);
            $('#apaterno').val(apaterno);
            $('#amaterno').val(amaterno);
            $('#telefono').val(telefono);
            $('#direccion').val(direccion);
            $('#email').val(email);
            $('#username').val(usuario);
            $('#password').val(password);
            $('#role').val(role);
            $('#estado').val(estado);
            $('#nivel').val(nivel);
        },
        error:function() {
            swal("Error", "Ha ocurrido un error intentelo de nuevo","error");            
        }
    });
}

function BorrarMaestro($id){
    var id = $id;
    swal({
        title:              "ADVERTENCIA",
        text:               "¿Está seguro que desea eliminar el registro?",
        type:               "warning",
        showCancelButton:   true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText:  "Aceptar",
        cancelButtonText:   "Cancelar",
        closeOnConfirm:     false,
        closeOnCancel:      true
    },function(isConfirm){
        if(isConfirm){
            var id = $id;
            $.ajax({
                url:     myBase_url+"index.php/Maestros/DeleteMaestro",
                type:    'POST',
                data:    {id:id},
                async:   true,
                success: function(datos){
                    swal({
                        title:              "Exito",
                        text:               "Se ha borrado el maestro con exito",
                        type:               "success",
                        showCancelButton:   false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText:  "OK",
                        cancelButtonText:   "No, Cancelar",
                        closeOnConfirm:     true,
                        closeOnCancel:      false
                    }, function(isConfirm){
                        location.href = "";
                    });
                },
                error:function() {
                    swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
                    
                }
            });
        }
    });
}

function ActualizarMaestro(){
    var id          = $('#id_user').val();
    var nombre      = $('#nombre').val();
    var apaterno    = $('#apaterno').val();
    var amaterno    = $('#amaterno').val();
    var telefono    = $('#telefono').val();
    var direccion   = $('#direccion').val();
    var email       = $('#email').val();
    var username    = $('#username').val();
    var password    = $('#password').val();
    var role        = $('#role').val();
    var estado      = $('#estado').val();

    if(id != "" && nombre != "" && apaterno != "" && amaterno != "" && telefono != "" && direccion != "" && email != "" && username != "" && password != "" && role != "" && estado != ""){
        $.ajax({
            url:    myBase_url+"index.php/Maestros/UpdateMaestro",
            type:   'POST',
            data:   {id:id,nombre:nombre,apaterno:apaterno,amaterno:amaterno,telefono:telefono,direccion:direccion,email:email,username:username,password:password,role:role,estado:estado},
            async:  true,
            success:function(datos){
                swal({
                    title:              "Exito",
                    text:               "Se ha actualizado el maestro con exito",
                    type:               "success",
                    showCancelButton:   false,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText:  "OK",
                    cancelButtonText:   "No, Cancelar",
                    closeOnConfirm:     true,
                    closeOnCancel:      false
                }, function(isConfirm){
                    location.href = "";
                });
            },
            error:function() {
                swal("Error", "Ha ocurrido un error intentelo de nuevo","error");
            },
        });
    }
}

/* END - CONTROLLER: Padres */
/* =============================================================================================================================================================================================================================== */