  <!-- header -->
  @include('layout.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>Implementaremos lineamientos y estándares de cumplimiento en materia de <span style="color: red;"><b>integridad y lucha contra la corrupción</b></span> en el
              departamento de Apurimac</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#about" class="btn-get-started">Leer Más</a>
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

            <div class="row gy-2" style="justify-content: center;">

              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/11289728.png" class="img-fluid" alt=""  style="width: 50%; height: auto;"></div>
                  <h3 class="post-title" style="text-align: center;"><a href="#" class="readmore stretched-link"><span>MARCO NORMATIVO</span></a></h3>

                </div>
              </div>

              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                  <div class="post-img"><img src="assets/img/hoja.png" class="img-fluid" alt=""   style="width: 50%; height: auto;"></div>
                  <h3 class="post-title" style="text-align: center;"><a href="#" class="readmore stretched-link"><span>PLAN ANUAL DE TRABAJO</span></a></h3>
                </div>
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

          @foreach($noticias as $noticia)

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-box">
              <div class="post-img"><img src="{{$noticia->featured}}" class="img-fluid" alt="">
              </div>
              <div class="meta">
                <span class="post-author">{{$noticia->created_at}}</span>
                <span class="post-date"> / NOTICIAS</span>
              </div>
              <h3 class="post-title">{{$noticia->titulo}}</h3>
              <a href="#" class="readmore stretched-link"><span></span></a>
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

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/GRApurimac.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/MPAbancay.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/CSJ.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/MP Fiscalia de la Nacion.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/PGE.jpg" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/Camara.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/Mesa.jpg" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/MRExteriores.png" class="testimonial-img" alt="">
                  <!-- <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4> -->
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="profile mt-auto">
                  <img src="assets/img/Instituciones Miembros/Defensoria del pueblo.jpg" class="testimonial-img" alt="">
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