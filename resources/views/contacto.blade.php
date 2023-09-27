  <!-- header -->
  @include('layout.header')

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center"
      style="background-image: url('{{ asset('/assets/img/CRAC-up.jpg') }}'">
      <div class="container position-relative d-flex flex-column align-items-center">

          <h2>CONTACTO</h2>

      </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

          <div class="row gy-4 d-flex justify-content-end">

              <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                  <div class="section-header">
                      <h2>CONTACTO</h2>

                  </div>

                  <div class="info-item d-flex">
                      <i class="bi bi-geo-alt flex-shrink-0"></i>
                      <div>
                          <h4>Ubicación:</h4>
                          <p>Jr. Puno 107 - Abancay - Apurímac - Perú</p>
                      </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex">
                      <i class="bi bi-globe flex-shrink-0"></i>
                      <div>
                          <h4>web</h4>
                          <a
                              href="https://www.regionapurimac.gob.pe/directorio/">www.regionapurimac.gob.pe/directorio/</a>
                      </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex">
                      <i class="bi bi-phone flex-shrink-0"></i>
                      <div>
                          <h4>Llamar:</h4>
                          <p>083 - 321022</p>
                      </div>
                  </div><!-- End Info Item -->

              </div>

              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">

                  <div class="section-header">
                      <h2>Envianos un mensaje</h2>

                  </div>

                  <form action="{{ route('mensajes.store') }}" method="post" class="email-form">
                      @csrf
                      <div class="row">
                          <div class="col-md-6 form-group">
                              <input type="text" name="nombre" class="form-control" id="name"
                                  placeholder="Nombre" value="{{ old('nombre') }}">
                              @error('nombre')
                                  <br>
                                  <span class="text-danger">
                                      {{ $message }}
                                  </span>
                              @enderror
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="text" class="form-control" name="email" id="email"
                                  placeholder="Correo" value="{{ old('email') }}">
                              @error('email')
                                  <br>
                                  <span class="text-danger">
                                      {{ $message }}
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group mt-3">
                          <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto"
                              value="{{ old('asunto') }}">
                          @error('asunto')
                              <br>
                              <span class="text-danger">
                                  {{ $message }}
                              </span>
                          @enderror
                      </div>
                      <div class="form-group mt-3">
                          <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje">{{ old('mensaje') }}</textarea>
                          @error('mensaje')
                              <br>
                              <span class="text-danger">
                                  {{ $message }}
                              </span>
                          @enderror
                      </div>
                      <div class="my-3">
                      </div>
                      <div class="text-center"><button type="submit"
                              style="    color: white;
                        background-color: #c33232;
                        font-size: 2em;
                        border-radius: 5px;
                        border: none;
                        width: 100%;">Enviar
                              Mensaje</button>
                      </div>
                  </form>

              </div><!-- End Contact Form -->

          </div>

      </div>
  </section><!-- End Contact Section -->

  <!-- ======= Why Choose Us Section ======= -->
  <section id="why-us" class="why-us">
      <div class="row m-4">

          <div class="section-header">
              <h2>UBÍCANOS</h2>

          </div>
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.6764553557473!2d-72.8786958002813!3d-13.637751509610498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d02de8075c541%3A0xb81a1a827337f593!2sGobierno%20Regional%20de%20Apurimac!5e0!3m2!1ses!2spe!4v1695411196015!5m2!1ses!2spe"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
  </section><!-- End Why Choose Us Section -->

  </main><!-- End #main -->


  <!-- footer -->
  @include('layout.footer')
