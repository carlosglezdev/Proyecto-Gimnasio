
                    <!-- Encabezado -->
                    <div class="col-12">
                        <div class="breadcrumb-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="breadcrumb-text">
                                            <h2>Deadlift</h2>
                                            <div class="bt-option">
                                                <a href="inicio">Inicio</a>
                                                <a href="perfil">Mi perfil</a>
                                                <a href="mispesos">Mis pesos</a>
                                                <span>Deadlift</span>
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

                                <!-- Tabla Registro -->
                                <div class="col-lg-8 col-12">
                                    <table class="table text-center">
                                        <thead>
                                          <tr>
                                            <th>Fecha</th>
                                            <th>Reps</th>
                                            <th>Peso</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>20/12/2023</td>
                                            <td>5</td>
                                            <td>100 Kg</td>
                                            <td><button class="btnEliminar">Eliminar</button></td>
                                          </tr>
                                          <tr>
                                            <td>06/05/2023</td>
                                            <td>3</td>
                                            <td>150</td>
                                            <td><button class="btnEliminar">Eliminar</button></td>
                                          </tr>
                                          <tr>
                                            <td>20/12/2023</td>
                                            <td>2</td>
                                            <td>130 Kg</td>
                                            <td><button class="btnEliminar">Eliminar</button></td>
                                          </tr>
                                          <tr>
                                            <td>19/02/2023</td>
                                            <td>3</td>
                                            <td>150</td>
                                            <td><button class="btnEliminar">Eliminar</button></td>
                                          </tr>
                                          <tr>
                                            <td>01/12/2023</td>
                                            <td>1</td>
                                            <td>170 Kg</td>
                                            <td><button class="btnEliminar">Eliminar</button></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Formulario Añadir Peso -->
                                <div class="col-lg-4 col-12">
                                    <div class="addWeight p-2">
                                        <div class="title-weight">
                                            <h4>Añadir Peso</h4>
                                            <hr>
                                        </div>

                                        <div class="datos-addWeight">
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <label for="fecha">Fecha: </label>
                                                    <input type="date" name="fecha" id="fecha">
                                                </div>

                                                <div class="form-group mt-1">
                                                    <label for="repeticiones">Repeticiones: </label>
                                                    <input type="number" min="0" name="repeticiones" id="repeticiones" style="width: 38%;">
                                                </div>

                                                <div class="form-group mt-1">
                                                    <label for="peso">Peso (Kg):</label>
                                                    <input type="number" min="0" name="peso" id="peso" style="width: 48%;">
                                                </div>

                                                <button class="btnAddWeight mt-3">Añadir</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gráfica -->
                                <div class="col-12 mt-4">
                                    <div class="grafica-pesos">
                                        <!-- <img src="assets/img/carrusel_1.jpg" alt=""> -->
                                        <h1>GRÁFICA</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
           