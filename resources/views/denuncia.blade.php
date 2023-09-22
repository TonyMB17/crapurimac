  <!-- Template Main CSS Formulario -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  
  <!-- header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>DENUNCIAS</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Denuncias</h2>

        </div>

        <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                       <h4><strong>HAZ TU DENUNCIA</strong></h4>
                       <p>Para realizar su denuncia  llene los datos que en el formulario se piden. Sus datos serán tratados de manera confidencial.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                           <!-- formulario  -->
                           <div class="containerform">
                            <header>Registrar Cliente</header>
                            <div class="progress-bar">
                              <div class="step">
                                <p>Paso 1</p>
                                <div class="bullet">
                                  <span>1</span>
                                </div>
                                <div class="check fas fa-check"></div>
                              </div>
                              <div class="step">
                                <p>Paso 2</p>
                                <div class="bullet">
                                  <span>2</span>
                                </div>
                                <div class="check fas fa-check"></div>
                              </div>
                              <div class="step">
                                <p>Paso 3</p>
                                <div class="bullet">
                                  <span>3</span>
                                </div>
                                <div class="check fas fa-check"></div>
                              </div>
                              <div class="step">
                                <p>Fin</p>
                                <div class="bullet">
                                  <span>4</span>
                                </div>
                                <div class="check fas fa-check"></div>
                              </div>
                            </div>
                            <div class="form-outer" align="center">
                              <form action="#" >
                                <div class="page slide-page">
                                  <div class="field">
                                    <div class="label">Nombre Completo</div>
                                    <input type="text">
                                  </div>
                                  <div class="field">
                                    <div class="label">Apellidos</div>
                                    <input type="text">
                                  </div>
                                  <div class="field">
                                    <button class="firstNext next">Siguiente</button>
                                  </div>
                                </div>

                                <div class="page">
                                  <div class="title">Información de Contacto</div>
                                  <div class="field">
                                    <div class="label">Correo Electronico</div>
                                    <input type="text">
                                  </div>
                                  <div class="field">
                                    <div class="label">Número de Telefono</div>
                                    <input type="Number">
                                  </div>
                                  <div class="field btns">
                                    <button class="prev-1 prev">Atrás</button>
                                    <button class="next-1 next">Siguiente</button>
                                  </div>
                                </div>

                                <div class="page">
                                  <div class="field">
                                    <div class="label">Fecha de Nacimiento</div>
                                    <input type="datetime-local">
                                  </div>
                                  <div class="field">
                                    <div class="label">Genero</div>
                                    <select>
                                      <option>Masculino</option>
                                      <option>Femenino</option>
                                    </select>
                                  </div>
                                  <div class="field btns">
                                    <button class="prev-2 prev">Atrás</button>
                                    <button class="next-2 next">Siguiente</button>
                                  </div>
                                </div>

                                <div class="page">
                                  <div class="title">Datos de Login</div>
                                  <div class="field">
                                    <div class="label">Usuario</div>
                                    <input type="text">
                                  </div>
                                  <div class="field">
                                    <div class="label">Clave</div>
                                    <input type="password">
                                  </div>
                                  <div class="field btns">
                                    <button class="prev-3 prev">Atrás</button>
                                    <button class="submit">Enviar</button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- Template Main JS Formualrio -->
  <script src="{{asset('/assets/js/script.js')}}"></script>

  <!-- footer -->
  @include('layout.footer')

  
