    
            <!-- Encabezado -->
            <div class="col-12">
                <div class="breadcrumb-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="breadcrumb-text">
                                    <h2>CROSSFIT</h2>
                                    <div class="bt-option">
                                        <a href="inicio">Inicio</a>
                                        <a href="clases">Clases</a>
                                        <span>CrossFit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="container bg-container mt-4">
                    <div class="row">
                        
                        <!-- Imagen -->
                        <div class="col-12 d-lg-block d-none text-center mt-4">
                            <img src="views/assets/img/background-testimonials.jpg" width="60%" height="60%" alt="Img de la clase">
                        </div>
                        
                        <div class="col-lg-6 col-12 text-lg-start text-center mt-lg-0 mt-4">
                            <h3>CrossFit <span class="badge bg-danger">Alta</span></h3>
                            <h3>Entrernador: Andrés Gómez</h3>
                        </div>

                        <div class="col-lg-6 col-12  d-lg-flex align-items-lg-end justify-content-lg-end text-center">
                            <p>0/12 <i class="fa-solid fa-user"></i> <button type="button" class="btn btn-info btn-reserva">Reservar</button></p>
                            
                        </div>

                        <div class="col-12">
                            <h5>El crossfit es un tipo de entrenamiento tipo militar, el cual consiste en desarrollar potencia, ganar control del peso corporal (por medio de la gimnasia) y realizar ejercicios funcionales de alta intensidad para mejorar la capacidad funcional.</h5>
                        </div>

                    
                        <!-- Comentarios -->
                        <div class="col-lg-8 col-12">
                            <div class="comments">
                                <h4>Comentarios <p class="float-end">3 <i class="fa fa-comment" style="color: white;"></i></p></h4>
                                <div class="comment-item">
                                    <div class="comment-img text-lg-start text-center text-lg-start text-center">
                                        <img class="foto-redonda ms-lg-0 ms-4" src="views/assets/img/img_1.jpg" alt="">
                                    </div>
                                    <div class="comment-text text-lg-start text-center">
                                        <span>01 DEC. 2023</span>
                                        <div class="rating">  
                                            ⭐⭐⭐⭐⭐
                                        </div>
                                        <h5>Pepe</h5>
                                        <p>Experiencia increible</p>
                                    </div>
                                </div>

                               
                                

                                <div class="comment-item">
                                    <div class="comment-img text-lg-start text-center">
                                        <img class="foto-redonda ms-lg-0 ms-4" src="views/assets/img/img_1.jpg" alt="">
                                    </div>
                                    <div class="comment-text text-lg-start text-center">
                                        <span>01 DEC. 2023</span>
                                        <div class="rating">  
                                            ⭐⭐⭐⭐
                                        </div>
                                        <h5>Juan</h5>
                                        <p>¡Volveré!</p>
                                    </div>
                                </div>

                                <div class="comment-item">
                                    <div class="comment-img text-lg-start text-center">
                                        <img class="foto-redonda ms-lg-0 ms-4" src="views/assets/img/img_1.jpg" alt="">
                                    </div>
                                    <div class="comment-text text-lg-start text-center">
                                        <span>01 DEC. 2023</span>
                                        <div class="rating">  
                                            ⭐⭐
                                        </div>
                                        <h5>Isabel</h5>
                                        <p>Material en mal estado</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Añadir Comentario -->
                        <div class="col-12">
                            <div class="addComment">
                                <h4>Añadir comentario</h4>
                                <form class="addComment-form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="scores">
                                                <h5>Su puntuación:</h5>
                                                <p class="rating" readonly>
                                                    <input id="radio1" type="radio" name="estrellas" value="5" />
                                                    <label for="radio1" class="icon_star"></label>
                                                    <input id="radio2" type="radio" name="estrellas" value="4" />
                                                    <label for="radio2" class="icon_star"></label>
                                                    <input id="radio3" type="radio" name="estrellas" value="3" />
                                                    <label for="radio3" class="icon_star"></label>
                                                    <input id="radio4" type="radio" name="estrellas" value="2" />
                                                    <label for="radio4" class="icon_star"></label>
                                                    <input id="radio5" type="radio" name="estrellas" value="1" />
                                                    <label for="radio5" class="icon_star"></label>
                                                </p>
                                            </div>
                                        
                                            <div class="form-addComment">
                                                <textarea name="comentario" placeholder="Comentario..."></textarea>
                                                <input type="hidden" name="usuario_id" value="<?= $usuario_id[0] ?>" />
                                                <input type="hidden" name="id_room" value="<?= $room_detail['id_room'] ?>" />
                                                <input type="hidden" name="type_room_id" value="<?= $room_detail['id'] ?>" />
                                                
                                                <button type="submit">Añadir</button>
                                            </div>
                                                
                                            
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
                