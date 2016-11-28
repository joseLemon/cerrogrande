<?php get_header(); ?>
    <div class="wrapper registro forma-registro spacing">
        <div class="container tab-content">
            <div name="error" id="error" class="alert alert-danger hidden"></div>
            <form action="<?php echo home_url().'/submitsolicitor';?>" id="solicitorForm" method="post" enctype="multipart/form-data">
                <div role="tabpanel" class="form-container light-spacing tab-pane fade in active" id="registro">
                    <h1 class="header text-center">Formato de Solicitud</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="user_id">Cliente</label>
                            <select name="user_id" id="user">
                                <?php $users = $wpdb->get_results("SELECT ID, user_login FROM wp_users");
                                foreach($users as $user){ ?>
                                    <option value="<?php echo $user->ID ?>">
                                        <?php
                                        echo $user->user_login;
                                        ?>
                                    </option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="subject">Asunto</label><input type="text" name="subject" id="subject">
                        </div>
                    </div>
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
                    <h2 class="header text-center">Domicilio</h2>
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
                            <!--<select name="state" id="state">
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
                            <select name="state" id="state-usa" class="hidden" disabled>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="District of Columbia">District of Columbia</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota</option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="New Hampshire">New Hampshire</option>
                                <option value="New Jersey">New Jersey</option>
                                <option value="New Mexico">New Mexico</option>
                                <option value="New York">New York</option>
                                <option value="North Carolina">North Carolina</option>
                                <option value="North Dakota">North Dakota</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oklahoma">Oklahoma</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                                <option value="Rhode Island">Rhode Island</option>
                                <option value="South Carolina">South Carolina</option>
                                <option value="South Dakota">South Dakota</option>
                                <option value="Tennessee">Tennessee</option>
                                <option value="Texas">Texas</option>
                                <option value="Utah">Utah</option>
                                <option value="Vermont">Vermont</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Washington">Washington</option>
                                <option value="West Virginia">West Virginia</option>
                                <option value="Wisconsin">Wisconsin</option>
                                <option value="Wyoming">Wyoming</option>
                            </select>-->
                            <input type="text" id="state" name="state">
                        </div>
                        <div class="col-sm-2 ">
                            <label for="country">País</label>
                            <!--<select id="country" name="country">
                                <option value="México">México</option>
                                <option value="USA">USA</option>
                            </select>-->
                            <input type="text" id="country" name="country">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="text">Comentarios</label>
                            <textarea name="text" id="text" cols="30" rows="5"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="pdf_file">PDF</label>
                            <input type="file" class="inputfile" name="pdf_file[]" id="pdf_file">
                            <label for="pdf_file"></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="25000000"/>
                        </div>
                    </div>
                    <div class="nav" role="tablist">
                        <input class="black btn center-block" type="submit" name="create" id="create" value="Guardar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        $('#user').select2();
    </script>
<?php get_footer(); ?>