$(document).ready(function () {
    $file_size = 0;

    // you want to enable the pointer events only on click;

    $('input[type=file]').change(function(e){
        $filename=$(this);
        $filename.next().html($filename.val().replace(/C:\\fakepath\\/i, '&nbsp&nbsp&nbsp&nbsp&nbsp'));
    });

});

$(document).ready(function(){
    $('#modal-seguimiento').modal('show');
    $('#modal-no-registrable').modal('show');
    $('#registration-errors').modal('show');
});

$('input[type=file]').bind('change', function() {
    //this.files[0].size gets the size of your file.
    if ( this.files[0].size > 25000000 ) {
        alert('La imagen no puede pesar más de 25Mb. Intenta una imagen más ligera.');
    }

    $file_size = this.files[0].size;
});

function validateOne(){
    var errors ="";
    subject = document.getElementById("subject").value;
    name = document.getElementById("solicitor_name").value;
    lastName = document.getElementById("last_name").value;
    mLastName = document.getElementById("m_last_name").value;
    social = document.getElementById("social").value;
    date = document.getElementById("date").value;
    phone = document.getElementById("phone").value;
    email = document.getElementById("email").value;
    street = document.getElementById("street").value;
    exterior = document.getElementById("exterior").value;
    postal = document.getElementById("postal").value;
    colony = document.getElementById("colony").value;
    town = document.getElementById("town").value;
    country = document.getElementById("country").value;

    /*if( name == null || name.length == 0 || /^\s+$/.test(name) ) {
        errors += "El nombre es obligatorio<br>";
    } else {*/
        if(name.length > 35){
            errors += "El numero de letras máximo para el nombre es de 35<br>";
        }
    //}
    if( subject == null || subject.length == 0 || /^\s+$/.test(name) ) {
        errors += "El asunto es obligatorio<br>";
    } else {
        if(subject.length > 140){
            errors += "El numero de letras máximo para el asunto es de 140<br>";
        }
    }
    /*if( lastName == null || lastName.length == 0 || /^\s+$/.test(lastName) ) {
        errors += "El apellido paterno es obligatorio<br>";
    } else {*/
        if(lastName.length > 35){
            errors += "El numero de letras máximo para el Apellido es de 35<br>";
        }
    //}
    if(mLastName.length > 35){
        errors += "El numero de letras máximo para el Apellido materno es de 35<br>";
    }
    /*if( social == null || social.length == 0 || /^\s+$/.test(social) ) {
        errors += "La razón social es obligatoria<br>";
    }*/
    /*if( date == null || date.length == 0 || /^\s+$/.test(date) ) {
        errors += "La fecha de nacimiento es obligatoria<br>";
    } else {*/
    var regExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if (!(date.match(regExPattern)) && date != '') {
        errors += "Introduce una fecha de nacimiento en formato correcto<br>";
    }
    //}
    if( phone == null || phone.length == 0 || /^\s+$/.test(phone) ) {
        errors += "El teléfono es obligatorio<br>";
    } else{
        var phonePattern=/^([0-9]+){10,15}$/;
        if (!(phone.match(phonePattern))) {
            errors +=  "Introduce tu número telefónico con clave lada mínimo 10 caracteres<br>";
        }
    }
    if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
        errors += "El correo electrónico es obligatorio<br>";
    } else{
        var emailPattern=/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        if (!(email.match(emailPattern))) {
            errors +=  "El correo electrónico debe tener un formato válido<br>";
        }
    }
    if( street == null || street.length == 0 || /^\s+$/.test(street) ) {
        errors += "La calle es obligatoria<br>";
    } else {
        if(street.length > 95){
            errors += "El numero de letras máximo para la calle es de 95<br>";
        }
    }
    if( exterior == null || exterior.length == 0 || /^\s+$/.test(exterior) ) {
        errors += "El numero exterior es obligatorio<br>";
    } else {
        if(exterior.length > 10){
            errors += "El numero de caracteres máximo para el numero exterior es de 10<br>";
        }
    }
    if( postal == null || postal.length == 0 || /^\s+$/.test(postal) ) {
        errors += "El codigo postal es obligatorio<br>";
    } else {
        if(postal.length > 10){
            errors += "El numero de caracteres máximo para el codigo postal es de 10<br>";
        }
    }
    if( colony == null || colony.length == 0 || /^\s+$/.test(colony) ) {
        errors += "La colonia es obligatoria<br>";
    } else {
        if(colony.length > 95){
            errors += "El numero de caracteres máximo para la colonia es de 95<br>";
        }
    }
    if( town == null || town.length == 0 || /^\s+$/.test(town) ) {
        errors += "El municipio es obligatorio<br>";
    } else {
        if(town.length > 95){
            errors += "El numero de caracteres máximo para la colonia es de 95<br>";
        }
    }
    if( state == null || state.length == 0 || /^\s+$/.test(state) ) {
        errors += "Elige un estado<br>";
    }
    if( country == null || country.length == 0 || /^\s+$/.test(country) ) {
        errors += "Elige un Pais<br>";
    }
    //redireccion
    if(errors=="") {
        //Cambiar al segundo tab
        $('#validationOne').attr('href', '#marca');
        $('#error').removeClass('active').addClass('hidden');
        return true;

    } else {
        //colorear los campos mal ingresados
        $("#error").removeClass('hidden').addClass('active').html("Lo sentimos :( <br>"+errors);
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    }
}

$('#updateForm').submit(function (e) {
    $validation = validateOne(e);
    if(!$validation) {
        e.preventDefault();
    }
});

$('#solicitorForm').submit(function (e) {
    $validation = validateOne(e);
    if(!$validation) {
        e.preventDefault();
    }
});

function validateTwo(e){
    var errors ="";
    options = document.getElementById("options").value;
    if( options == null || options.length == 0 || /^\s+$/.test(options) ) {
        errors += "Elige una opción de tu tipo de marca<br>";
    }
    if( $file_size > 25000000 ) {
        errors += "La imagen no puede pesar más de 25Mb. Intenta una imagen más ligera<br>";
    }
    //redireccion
    if(errors==""){
        //Cambiar al segundo tab
        $('#validationTwo').attr('href', '#giro');
        $('#error').removeClass('active').addClass('hidden');
    } else{
        //colorear los campos mal ingresados
        $("#error").html(errors);
        $("#error").removeClass('hidden').addClass('active').html("Lo sentimos :( <br>"+errors);
        e.preventDefault();
    }
}

function validateTree(e){
    var errors ="";
    description = document.getElementById("description").value;
    used = $('#b_used').is(":checked");
    street = document.getElementById("b_street").value;
    exterior = document.getElementById("b_exterior").value;
    postal = document.getElementById("b_postal").value;
    colony = document.getElementById("b_colony").value;
    town = document.getElementById("b_town").value;
    country = document.getElementById("b_country").value;
    if( description == null || description.length == 0 || /^\s+$/.test(description) ) {
        errors += "La descripción es obligatoria<br>";
    } else {
        if(description.length > 500){
            errors += "El numero de letras máximo para la descripcion es de 500<br>";
        }
    }
    if(used) {
        if( street == null || street.length == 0 || /^\s+$/.test(street) ) {
            errors += "La calle es obligatoria<br>";
        } else {
            if(street.length > 95){
                errors += "El numero de letras máximo para la calle es de 95<br>";
            }
        }
        if( exterior == null || exterior.length == 0 || /^\s+$/.test(exterior) ) {
            errors += "El numero exterior es obligatorio<br>";
        } else {
            if(exterior.length > 10){
                errors += "El numero de caracteres máximo para el numero exterior es de 10<br>";
            }
        }
        if( postal == null || postal.length == 0 || /^\s+$/.test(postal) ) {
            errors += "El codigo postal es obligatorio<br>";
        } else {
            if(postal.length > 10){
                errors += "El numero de caracteres máximo para el codigo postal es de 10<br>";
            }
        }
        if( colony == null || colony.length == 0 || /^\s+$/.test(colony) ) {
            errors += "La colonia es obligatoria<br>";
        } else {
            if(colony.length > 95){
                errors += "El numero de caracteres máximo para la colonia es de 95<br>";
            }
        }
        if( town == null || town.length == 0 || /^\s+$/.test(town) ) {
            errors += "El municipio es obligatorio<br>";
        } else {
            if(town.length > 95){
                errors += "El numero de caracteres máximo para la colonia es de 95<br>";
            }
        }
        if( state == null || state.length == 0 || /^\s+$/.test(state) ) {
            errors += "Elige un estado<br>";
        }
        if( country == null || country.length == 0 || /^\s+$/.test(country) ) {
            errors += "Elige un País<br>";
        }
    }
    if( !$('#productos').is(":checked") && !$('#servicios').is(":checked") ) {
        errors += "Se debe especificar el giro comercial<br>";
    }
    if( $('#productos').is(":checked") ) {
        if( !$('#fabrication').is(":checked") && !$('#commercialization').is(":checked") ) {
            errors += "Se debe especificar el tipo de producto<br>";
        }
    }
    if( !$('#used').is(":checked") && !$('#notUsed').is(":checked") ) {
        errors += "Se debe especificar si la marca ha sido utilizada<br>";
    }
    if( !$('#termsConditions').is(":checked") ) {
        errors += "Debes de aceptar nuestros términos y condiciones para proceder<br>";
    }

    //redireccion
    if(errors==""){
        //Cambiar al segundo tab
        $('#error').removeClass('active').addClass('hidden');

    } else{
        //colorear los campos mal ingresados
        $("#error").html(errors);
        $("#error").removeClass('hidden').addClass('active').html("Lo sentimos :( <br>"+errors);
        e.preventDefault();
        setTimeout(function () {
            $('html, body').stop().animate({
                'scrollTop': $('.wrapper').offset().top
            }, 500, 'swing' ); 
        }, 300 );
    }
}