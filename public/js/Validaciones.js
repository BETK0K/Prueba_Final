$('#registrar').click(function(event){
        var nombre, apellidos, correo, telefono, usuario, psw, ExpEmail, ExpPSW, ExpTel;
        
        nombre = $('#nombre').val();
        apellidos = $('#apellidos').val();
        correo = $('#correo').val();
        usuario = $('#usuario').val();
        psw = $('#psw').val();
        telefono = $('#telefono').val();

        ExpEmail = /^[^@\s\d]+[0-9]+[^@\s]+@[^@\s]+\.[^@\s]/;
        ExpPSW = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{8,16}$/;
        ExpTel = /^[0-9]{3}-[0-9]{3}-[0-9]{4}/;

 
        if(nombre.length == 0 || apellidos.length == 0 || correo.length == 0 || usuario.length == 0 || psw.length == 0 || telefono.length == 0 ){
            swal("Error...", "No debe haber campos vacios", "error");
        }
            else if (nombre.length > 10){
                swal("Error...", "El Nombre es muy Largo, Colocar Solo un Nombre", "error");
            }
                else if (apellidos.length > 10){
                    swal("Error...", "El Apellido es muy Largo, Colocar Solo un Apellido, ", "error");
                }
                    else if (!ExpEmail.test(correo)){
                        swal("Error...", "Correo Electronico Invalido", "error");
                   }
                        else if (usuario.length > 8){
                            swal("Error...", "El Nombre de Usuario es muy Largo, Elige uno mas Corto", "error");
                        }
                            else if (!ExpPSW.test(psw)){
                                swal("Error...", "La Contraseña debe tener las siguientes características: letras mayúscula y minúscula, números, caracteres especiales y con una longitud de mínimo 8 caracteres 16 máximo", "error");
                            }
                                else if (telefono.length > 13){
                                    swal("Error...", "Existe un Error en el Numero de Telefono, es demasiado largo", "error");
                                }
                                    //Codigo para verificar que sean numeros
                                    // else if(isNaN(telefono)){
                                    //     swal("Error...", "Numero de Telafono invalido", "error");
                                    // }

                                else if (!ExpTel.test(telefono)){
                                    swal("Error...", "Existe un Error en el Numero de Telefono: Separalo por guiones, ejemplo: 000-000-0000", "error");
                                }

                                var datos ="&nombre="+nombre+"&apellidos="+apellidos+"&correo="+correo+"&telefono="+telefono+"&usuario="+usuario+"&psw="+psw;
                                
                                //Mandamos los datos al modelo: Registro.php, por el metodo POST y la cadena que se creo anteriormente para su registgro en la BD:
                                $.ajax({
                                    url:'php/Registro.php',
                                    type:'POST',
                                    data: datos,
                                })
                            
                                //Si es satisfactoria la respuesta del modelo 
                                .done(function(res){
                                    if(res==1){//Es 1 por que se registro satifactoriamente en la BD
                                        swal("Muy bien", "Registro exitoso", "success");
                                        console.log(res);
                                    }else if (res==0){//Es 0 por que non se registro, ya que el correo ya existia en la BD
                                        swal("Error...", "El registro no fue exitoso", "error");
                                    }
                                    $('.input').val("");//Vaciamos los input de formulario una vez enviado
                                })
                            
                                //Si falla o hay error en la comunicación con el modelo
                                .fail(function(res){
                                    console.log(res);
                                    console.log("error");
                            
                                })

                                //Siempre se ejecuta en cualquiera de los casos anteriores
                                .always(function(){
                                    console.log("complete"); 
                                });

    });

    $('#restablecer').click(function(event){

        var datos ="&correo="+correo;
        
        correo = $('#correo').val();
        
                                
        //Mandamos los datos al modelo: Registro.php, por el metodo POST y la cadena que se creo anteriormente para su registgro en la BD:
        $.ajax({
            url:'php/Restablecer.php',
            type:'POST',
            data: datos,
        })
                            
        //Si es satisfactoria la respuesta del modelo 
        .done(function(res){
            if(res==1){//Es 1 por que se registro satifactoriamente en la BD
                swal("Muy bien", "Verifique su Correo para Restablecer la Contraseña", "success");
                console.log(res);
            }else if (res==0){//Es 0 por que non se registro, ya que el correo ya existia en la BD
                swal("Error...", "Correo Invalido", "error");
            }
        })
                            
        //Si falla o hay error en la comunicación con el modelo
        .fail(function(res){
            console.log(res);
            console.log("error");
        })

        //Siempre se ejecuta en cualquiera de los casos anteriores
        .always(function(){
            console.log("complete"); 
        });
    });

    $('#resta').click(function(event){
        
        var datos ="&correo="+correo+"&token="+token+"&codigo="+codigo;  

        correo = $('#correo').val();
        token = $('#token').val();
        codigo = $('#codigo').val();

        //Mandamos los datos al modelo: Registro.php, por el metodo POST y la cadena que se creo anteriormente para su registgro en la BD:
        $.ajax({
            url:'php/Verificar.php',
            type:'POST',
            data: datos,
        })
                            
        //Si es satisfactoria la respuesta del modelo 
        .done(function(res){
            if(res==1){//Es 1 por que se registro satifactoriamente en la BD
                window.location.replace("http://consultoria_web.test/verificar");
            }else if (res==0){//Es 0 por que non se registro, ya que el correo ya existia en la BD
            }
        })

        //Si falla o hay error en la comunicación con el modelo
        .fail(function(res){
            console.log(res);
            console.log("error");
        })

        //Siempre se ejecuta en cualquiera de los casos anteriores
        .always(function(){
            console.log("complete"); 
        });
    });

    $('#cambiar').click(function(event){
        var datos ="&correo="+correo+"&nueva="+nueva;  

        correo = $('#correo').val();
        nueva = $('#nueva').val();

        //Mandamos los datos al modelo: Registro.php, por el metodo POST y la cadena que se creo anteriormente para su registgro en la BD:
        $.ajax({
            url:'php/Cambiar.php',
            type:'POST',
            data: datos,
        })
                            
        //Si es satisfactoria la respuesta del modelo 
        .done(function(res){
            if(res==1){//Es 1 por que se registro satifactoriamente en la BD
                window.location.replace("http://consultoria_web.test/inicio_de_sesion");
            }else if (res==0){//Es 0 por que non se registro, ya que el correo ya existia en la BD
                swal("Error...", "Las Contraseñas no Coinciden", "error");
            }
        })

        //Si falla o hay error en la comunicación con el modelo
        .fail(function(res){
            console.log(res);
            console.log("error");
        })

        //Siempre se ejecuta en cualquiera de los casos anteriores
        .always(function(){
            console.log("complete"); 
        });
    });

    $('#ingresar').click(function(event){
        var datos ="&usuario="+usuario+"&psw="+psw;  

        usuario = $('#usuario').val();
        psw = $('#psw').val();

        //Mandamos los datos al modelo: Registro.php, por el metodo POST y la cadena que se creo anteriormente para su registgro en la BD:
        $.ajax({
            url:'php/Login.php',
            type:'POST',
            data: datos,
        })
                            
        //Si es satisfactoria la respuesta del modelo 
        .done(function(res){
            if(res==1){//Es 1 por que se registro satifactoriamente en la BD
                window.location.replace("http://consultoria_web.test/contactanos");
            }else if (res==0){//Es 0 por que non se registro, ya que el correo ya existia en la BD
                
            }
        })

        //Si falla o hay error en la comunicación con el modelo
        .fail(function(res){
            console.log(res);
            console.log("error");
        })

        //Siempre se ejecuta en cualquiera de los casos anteriores
        .always(function(){
            console.log("complete"); 
        });
    });