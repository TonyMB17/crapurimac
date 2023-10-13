  <!-- header -->
  @include('layout.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-xl-4">
                  <blockquote data-aos="fade-up" data-aos-delay="100">
                      <p>Implementación de lineamientos y estándares de cumplimiento en materia de <span
                              style="color: red;"><b>integridad y lucha contra la corrupción</b></span> en el
                          departamento de Apurímac</p>
                  </blockquote>
                  <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                      <a href="{{ route('presentacion') }}" class="btn-get-started">Leer Más</a>
                  </div>

              </div>
          </div>
      </div>
  </section><!-- End Hero Section -->

  <main id="main">

      <!-- ======= Why Choose Us Section ======= -->
      <section id="why-us" class="recent-posts" style="background: #a3a3a33b;">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>DOCUMENTOS</h2>

              </div>

              <!-- ======= Services Cards Section ======= -->
              <section id="services-cards" class="services-cards">
                  <div class="container aos-init aos-animate" data-aos="fade-up">

                      <div class="row gy-2" style="justify-content: center; text-align: center">

                          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                              <a href="{{ route('marco') }}" class="readmore stretched-link"
                                  style="justify-content: center;">
                                  <div class="post-box">
                                      <div class="post-img"><img src="assets/img/Sin título-2.jpg" class="img-fluid"
                                              alt="" style="width: 50%; height: auto;"></div>
                                      <h3 class="post-title" style="text-align: center;"><span>MARCO NORMATIVO</span>
                                      </h3>

                                  </div>
                              </a>
                          </div>

                          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                              <a href="{{ route('plan') }}" class="readmore stretched-link"
                                  style="justify-content: center;">
                                  <div class="post-box">
                                      <div class="post-img"><img src="assets/img/Sin título-3.jpg" class="img-fluid"
                                              alt="" style="width: 50%; height: auto;"></div>
                                      <h3 class="post-title" style="text-align: center;"><span>PLAN ANUAL DE
                                              TRABAJO</span></h3>
                                  </div>
                              </a>
                          </div>

                      </div>

                  </div>
              </section><!-- End Services Cards Section -->

          </div>
      </section><!-- End Why Choose Us Section -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-posts" class="recent-posts">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>NOTICIAS</h2>

              </div>

              <div class="row gy-5">

                  @foreach ($noticias as $noticia)
                      <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                          <div class="post-box">
                              <div class="post-img"><img src="{{ asset($noticia->featured) }}" class="img-fluid"
                                      alt="">
                              </div>
                              <div class="meta">
                                  <span class="post-author">{{ $noticia->created_at->format('d F Y') }}
                                      {{ $noticia->created_at->format('g:i a') }}</span>
                                  <span class="post-date"> / NOTICIAS</span>
                              </div>
                              <h3 class="post-title">{{ $noticia->titulo }}</h3>
                              <a href="{{ route('detallenoticia', $noticia->id) }}"
                                  class="readmore stretched-link"><span></span></a>
                          </div>
                      </div>
                  @endforeach

              </div>

          </div>
      </section><!-- End Recent Blog Posts Section -->


      <!-- ======= Instituciones Miembros Section ======= -->
      <section id="testimonials" class="testimonials" style="background: #a3a3a33b;">
          <div class="container" data-aos="fade-up">

              <div class="section-header">
                  <h2>INSTITUCIONES MIEMBROS</h2>

              </div>

              <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="300" data-interval="1000">
                  <div class="swiper-wrapper">

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/logo-ab.png" class="testimonial-img"
                                      alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide altura">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/GOREAPU.png" class="testimonial-img"
                                      alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/Poder_Judicial_del_Peru.png"
                                      class="testimonial-img" alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/ministerio-publico.jpg"
                                      class="testimonial-img" alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/procuraduria.png"
                                      class="testimonial-img" alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/Camara.png" class="testimonial-img"
                                      alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/Mesa.jpg" class="testimonial-img"
                                      alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/MRExteriores.png"
                                      class="testimonial-img" alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                          <div class="testimonial-item">
                              <div class="profile mt-auto">
                                  <img src="assets/img/Instituciones Miembros/Defensoria del pueblo.jpg"
                                      class="testimonial-img" alt="">
                                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                              </div>
                          </div>
                      </div><!-- End testimonial item -->

                  </div>
                  <div class="swiper-pagination"></div>
              </div>

          </div>
      </section><!-- End Instituciones Miembros Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include('layout.footer')
