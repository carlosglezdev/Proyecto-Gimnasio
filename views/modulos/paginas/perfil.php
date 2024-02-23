
                
                    <!-- Encabezado -->
                    <div class="col-12">
                        <div class="breadcrumb-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="breadcrumb-text">
                                            <h2>MI PERFIL</h2>
                                            <div class="bt-option">
                                                <a href="inicio">Inicio</a>
                                                <span>Mi Perfil</span> <!-- Hay que poner la flechita '>' -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-lg-6 col-12 text-center">
                                    <div class="imagen-user">
                                        <img class="imgUser" src="views/assets/img/img_1.jpg" alt="">
                                    </div>

                                    <div class="datos-user">
                                        <p>
                                            Nombre: Pepe <br>
                                            Apellidos: López Pérez <br>
                                            Constraseña: pepe123 <br>
                                            Email: pepe@gmail.com <br>
                                            Fecha nacimiento: 01/08/2005 <br>
                                            Teléfono: 678 15 97 63 <br>
                                            Peso: 80 kg <br>
                                            Altura: 185 cm <br>
                                            Clase más reservada: CrossFit

                                        </p>

                                        <div class="col-12">
                                            <button class="btnEditar">Editar</button>
                                        </div>
                                        
                                        <div class="col-12 mt-4">
                                            <a class="btnMisPesos" href="mispesos">Mis pesos</a>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12 bg-historial" id="historial-section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="title-historial mt-3">
                                                <h2>Mi Historial</h2>
                                            </div>
                                            
                                            
                                            <div class="col-lg-10 col-12">
                                                <div class="calculate-IMC p-2 mt-4">
                                                    <div class="title-imc">
                                                        <h4>Calcular IMC</h4>
                                                        <hr>
                                                    </div>

                                                    <div class="datos-imc">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <label for="estatura">Estatura (cm):</label>
                                                                <input type="number" min="0" name="estatura" id="estatura">
                                                            </div>

                                                            <div class="form-group mt-1">
                                                                <label for="peso">Peso (Kg):</label>
                                                                <input type="number" min="0" name="peso" id="peso">
                                                            </div>

                                                            <button class="btnCalcular mt-3">Calcular</button>

                                                            <div class="form-group mt-2">
                                                                <label for="resultado">Resultado:</label>
                                                                <input type="text" name="resultado" id="resultado" readonly>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="col-lg-10 col-12">
                                                <div class="grafica-table mt-4">
                                                    <div class="tabs-to-dropdown text-center">
                                                        <div class="nav-wrapper d-flex align-items-center justify-content-center bg-grafica-table">
                                                            <ul class="nav nav-pills d-none d-md-flex" id="pills-tab" role="tablist">
                                                                <li class="nav-item color-blue" role="presentation">
                                                                    <a class="nav-link active" id="pills-company-tab color-white" data-toggle="pill" href="#pills-grafica" role="tab" aria-controls="pills-grafica" aria-selected="true">Gráfica</a>
                                                                </li>
                                                                <li class="nav-item color-blue" role="presentation">
                                                                    <a class="nav-link" id="pills-product-tab" data-toggle="pill" href="#pills-tabla" role="tab" aria-controls="pills-tabla" aria-selected="false">Tabla</a>
                                                                </li>
                                                            </ul>   
                                                        </div>
                                    
                                                        <!-- Gráfica -->
                                                        <div class="tab-content" id="pills-tabContent mb-4">
                                                            <div class="tab-pane fade show active" id="pills-grafica" role="tabpanel" aria-labelledby="pills-grafica-tab">
                                                                <div class="container-fluid">
                                                                    <table style="border-collapse: collapse; ; width: 70%; margin: 0 auto; transform: scale(1.5);">
                                                                        <tr class="border-bottom">
                                                                            <th>Hora</th>
                                                                            <th>Clase</th>
                                                                            <th>Acción</th>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                           
                                                            <!-- Tabla -->
                                                            <div class="tab-pane fade" id="pills-tabla" role="tabpanel" aria-labelledby="pills-tabla-tab">
                                                                <div class="container-fluid">
                                                                    <table style="border-collapse: collapse; ; width: 70%; margin: 0 auto; transform: scale(1.5);">
                                                                        <tr class="border-bottom color-white">
                                                                            <th>Estatura</th>
                                                                            <th>Peso</th>
                                                                            <th>IMC</th>
                                                                        </tr>
                                                                        <tr class="border-bottom color-white">
                                                                            <td>151</td>
                                                                            <td>48</td>
                                                                            <td>17,4</td>
                                                                        </tr>
                                                                        <tr class="border-bottom color-white">
                                                                            <td>153</td>
                                                                            <td>46,2</td>
                                                                            <td>18,78</td>
                                                                        </tr>
                                                                        <tr class="border-bottom color-white">
                                                                            <td>151</td>
                                                                            <td>48</td>
                                                                            <td>17,4</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            