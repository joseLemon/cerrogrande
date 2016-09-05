<?php get_header(); ?>
<div class="wrapper registro forma-registro spacing">
    <div class="container tab-content">
        <div name="error" id="error" class="alert alert-danger hidden"></div>
        <form action="<?php echo home_url().'/submitsolicitor';?>" id="solicitorForm" method="post" enctype="multipart/form-data">
            <div role="tabpanel" class="form-container light-spacing tab-pane fade in active" id="registro">
                <h1 class="header blue text-center">Formato de Solicitud</h1>
                <div class="row">
                    <div class="col-sm-3 ">
                        <label for="solicitor_name">Nombre(s)</label><input type="text" id="solicitor_name" name="solicitor_name">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="last_name">Apellido Paterno</label><input type="text" id="last_name" name="last_name">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="m_last_name">Apellido Materno</label><input type="text" id="m_last_name" name="m_last_name">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="social">Razón Social</label><input type="text" id="social" name="social">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 ">
                        <label for="date">Fecha de Nacimiento</label><input type="text" id="date" name="date" placeholder="">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="phone">Teléfono</label><input type="text" id="phone" name="phone">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="email">Correo electrónico</label><input type="text" id="email" name="email">
                    </div>
                </div>
                <hr>
                <h2 class="header blue text-center">Domicilio</h2>
                <div class="row">
                    <div class="col-sm-3 ">
                        <label for="street">Calle</label><input type="text" id="street" name="street">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="exterior">Número Exterior</label><input type="text" id="exterior" name="exterior">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="interior">Número Interior</label><input type="text" id="interior" name="interior">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="postal">Código Postal</label><input type="text" id="postal" name="postal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 ">
                        <label for="colony">Colonia</label><input type="text" id="colony" name="colony">
                    </div>
                    <div class="col-sm-3 ">
                        <label for="town">Municipio</label><input type="text" id="town" name="town">
                    </div>
                    <div class="col-sm-2 ">
                        <label for="locality">Localidad</label><input type="text" id="locality" name="locality">
                    </div>
                    <div class="col-sm-2 ">
                        <label for="state">Estado</label>
                        <select name="state" id="state">
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                    </div>
                    <div class="col-sm-2 ">
                        <label for="country">País</label>
                        <select id="country" name="country">
                            <option value="Mxico">México</option>
                        </select>
                    </div>
                </div>
                <h1 class="header blue text-center">Texto de Ejemplo para registrar</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea name="text" id="text" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="nav" role="tablist">
                    <!--<a id="validationOne" href="" onclick="validateOne()" class="btn btn-primary center-block text-center smoothScroll" aria-controls="marca" role="tab" data-toggle="tab">Siguiente</a>-->
                    <input class="black btn center-block" type="submit" name="submit" id="submit" value="Guardar">
                </div>
            </div>

            <div role="tabpanel" class="form-container spacing tab-pane fade" id="marca">
                <h1 class="header blue text-center">Texto de Ejemplo para registrar</h1>
                <div class="row">
                    <!--<div class="col-sm-6">
<label for="options">Opciones</label>
<select name="options" id="options">
<?php $brands = $wpdb->get_results("SELECT brand_type_id, name FROM brand_types");
foreach($brands as $brand){ ?>
<option value="<?php echo $brand->brand_type_id ?>"><?php echo $brand->name ?></option>
<?php }?>
</select>
<label for="option"></label>
<label class="marca-margin" for="attach">Adjunta tu logotipo</label>
<input type="file" name="design" id="design_upload" class="inputfile">
<label for="design_upload" id="design"></label>
<input type="file" name="three_dimensional" id="three_dimensional_upload" class="inputfile">
<label for="three_dimensional_upload" id="three_dimensional"></label>
</div>
<div class="col-sm-6">
<label for="text">Denominación o texto de tu marca</label>
<textarea class="hidden" name="text" id="text" cols="30" rows="10"></textarea>
</div>
-->
                    <div class="col-sm-12">
                        <textarea name="text" id="text" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row nav" role="tablist">
                    <div class="col-sm-6">
                        <a href="#registro" class="white green-btn small-btn center-block text-center smoothScroll" aria-controls="registro" role="tab" data-toggle="tab">Anterior</a>
                    </div>
                    <div class="col-sm-6">
                        <a id="validationTwo" onclick="validateTwo()" href="" class="white green-btn small-btn center-block text-center smoothScroll" aria-controls="giro" role="tab" data-toggle="tab">Siguiente</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php get_footer(); ?>