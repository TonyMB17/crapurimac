  <!-- Template Main CSS Formulario -->
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

  <!-- header -->
  @include('layout.header')

  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('/assets/img/CRAC-up.jpg') }}'">
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
                      <p>Para realizar su denuncia llene los datos que en el formulario se piden. Sus datos serán
                          tratados de manera confidencial.</p>
                  </div>
                  <div class="col-lg-8">
                      <div class="content ps-lg-5">
                          <!-- formulario  -->
                          <div class="containerform">
                              <header>Formulario</header>
                              <div class="progress-bar">
                                  <div class="step">
                                      <p>Datos del <br> Denunciante</p>
                                      <div class="bullet">
                                          <span>1</span>
                                      </div>
                                      <div class="check fas fa-check"></div>
                                  </div>
                                  <div class="step">
                                      <p>Datos del <br> Denunciado</p>
                                      <div class="bullet">
                                          <span>2</span>
                                      </div>
                                      <div class="check fas fa-check"></div>
                                  </div>
                                  <div class="step">
                                      <p>Detalle de <br> la denuncia</p>
                                      <div class="bullet">
                                          <span>3</span>
                                      </div>
                                      <div class="check fas fa-check"></div>
                                  </div>
                                  <div class="step">
                                      <p>Fin de <br> la Denuncia</p>
                                      <div class="bullet">
                                          <span>4</span>
                                      </div>
                                      <div class="check fas fa-check"></div>
                                  </div>
                              </div>
                              <div class="form-outer" align="center">
                                  <form action="{{route('denuncias.store')}}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      <div class="page slide-page">
                                          <div class="field">
                                              <div class="label">DNI</div>
                                              <input name="dni" type="number" class="form-control" id="recipient-name" placeholder="DNI" required>
                                          </div>
                                          <div class="field">
                                              <div class="label">Nombre</div>
                                              <input name="nombre" type="text" class="form-control" id="message-text" placeholder="Nombre" required>
                                          </div>
                                          <div class="rowFormulario">
                                              <div class="col-md-6 field">
                                                  <div class="label">Teléfono</div>
                                                  <input name="telefono" type="number" class="form-control" id="recipient-name" placeholder="Teléfono">
                                              </div>
                                              <div class="col-md-6 field mt-3 mt-md-0">
                                                  <div class="label">Correo</div>
                                                  <input name="correo" type="email" class="form-control" id="email" placeholder="Correo Electronico" onkeyup="validarEmail(this)" required> <br>
<<<<<<< HEAD
                                                  <a b id='resultado'></a>
                                              </div>
=======
                                                  <a id='resultado'></a>
                                                </div>
>>>>>>> f64ec53738e5fc51699c7bcd8571ecf88fefa299
                                          </div>
                                          <div class="col-md-6 field">
                                              <button class="firstNext next" onclick="validarCorreo(form.correo.value)">Siguiente</button>
                                          </div>
                                      </div>

                                      <div class="page">
                                          <!-- <div class="title">Información de Contacto</div> -->
                                          <div class="field">
                                              <div class="label">Apellidos y Nombres</div>
<<<<<<< HEAD
                                              <input name="denunciado" type="text" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="field">
                                              <div class="label">Institución</div>
                                              <input name="institucion" type="text" class="form-control" id="recipient-name">
                                          </div>
=======
                                              <input name="denunciado" type="text" class="form-control" id="recipient-name" required>
                                            </div>
                                          <div class="field">
                                              <div class="label">Institución</div>
                                              <input name="institucion" type="text" class="form-control" id="recipient-name" required>
                                            </div>
>>>>>>> f64ec53738e5fc51699c7bcd8571ecf88fefa299
                                          <div class="field">
                                              <div class="label">Cargo</div>
                                              <input name="cargo" type="text" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="field btns">
                                              <button class="prev-1 prev">Atrás</button>
                                              <button class="next-1 next">Siguiente</button>
                                          </div>
                                      </div>

                                      <div class="page">
                                          <div class="field">
                                              <div class="label">Fecha</div>
                                              <input name="fecha" type="date" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="field">
                                              <div class="label">Descripción de los Hechos</div>
<<<<<<< HEAD
                                              <input name="descripcion" type="text" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="field">
                                              <div class="label">Testigos</div>
                                              <input name="testigos" type="text" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="field">
                                              <label for="message-text" class="label">Subir archivos:</label>
                                              <input name="archivo" type="file" class="form-control-file" id="exampleFormControlFile1">
                                              @error('file')
                                              <br>
                                              <span class="text-danger">
                                                  {{$message}}
                                              </span>
                                              @enderror
                                          </div>
=======
                                              <textarea name="descripcion" type="text" class="form-control" id="recipient-name" required></textarea>
                                            </div>
                                          <div class="field">
                                              <div class="label">Testigos</div>
                                              <textarea name="testigos" type="text" class="form-control" id="recipient-name" required></textarea>
                                            </div>
>>>>>>> f64ec53738e5fc51699c7bcd8571ecf88fefa299
                                          <div class="field btns">
                                              <button class="prev-2 prev">Atrás</button>
                                              <button class="next-2 next">Enviar</button>
                                          </div>
                                      </div>

                                      <div class="page">
                                          <div class="title">Datos enviados</div>
                                          <div class="field btns">
                                              <!-- <button class="prev-3 prev">Atrás</button> -->
                                              <button class="submit">Finalizar</button>
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
  <script src="{{ asset('/assets/js/script.js') }}"></script>

  <!-- footer -->
  @include('layout.footer')