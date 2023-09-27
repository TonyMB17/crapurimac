<!-- header -->
@include('layout.header')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
    <div class="container position-relative d-flex flex-column align-items-center">

      <h2>DETALLE NOTICIA</h2>

    </div>
  </div><!-- End Breadcrumbs -->


  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>DETALLE NOTICIA</h2>
      </div>

      <div class="row gy-4" data-aos="fade-up">

        <div class="col-lg-8">
          <div class="content ps-lg-5">
            <P>Capacitan a Gerentes y Trabajadores del Gore Apurímac en Integridad Pública para Fortalecer Capacidad Preventiva ante Actos de Corrupción</p>
            <ul>
              <li><i class="bi bi-calendar-event-fill"></i> Setiembre 26, 2023</li>
              <li><i class="bi bi-watch"></i> 10:28 am</li>
            </ul>
            <a style="text-align: justify">La corrupción socava los cimientos de la sociedad, pero juntos podemos construir un futuro más justo y transparente. Cada acto de integridad es un paso hacia un mundo mejor. Luchemos juntos contra la corrupción, porque la honestidad es la base de un mañana más brillante.<br><br></a><br>

            <embed src="{{asset('/assets/pdf/PLAN DE ANTICORRUPCION.pdf')}}" type="application/pdf" width="700px" height="630px">
          </div>
        </div>

        <div class="col-lg-4">
          <!-- <img id="borde" src="{{ asset('/assets/img/presentacion/Flag_Map_of_Apurimac.png') }}" class="img-fluid" alt=""> -->

          <!-- Denuncia -->
          <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="width: 80%">
                <div class="post-box">
                  <div class="post-img"><img src="{{ asset('/assets/img/presentacion/Flag_Map_of_Apurimac.png') }}" class="img-fluid" alt=""></div>
                  <div class="meta">
                    <span class="post-date">Setiembre 26, 2023</span>
                    <span class="post-author"> / 10:28 am</span>
                  </div>
                  <h3 class="post-title">Capacitan a Gerentes y Trabajadores del Gore Apurímac en Integridad Pública para Fortalecer Capacidad Preventiva ante Actos de Corrupción</h3>
                  <p>La corrupción socava los cimientos de la sociedad, pero juntos podemos construir un futuro más justo y transparente. Cada acto de integridad es un paso hacia un mundo mejor....</p>
                  <a href="blog-details.html" class="readmore stretched-link"><span>Leer más</span><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>

            </div>
          </section><!-- End Recent Blog Posts Section -->
        </div>


      </div>

    </div>
  </section><!-- End About Section -->

</main><!-- End #main -->

<!-- footer -->
@include('layout.footer')