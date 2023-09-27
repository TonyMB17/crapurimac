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
        <h2>{{$noticias->titulo}}</h2>
      </div>

      <div class="row gy-4" data-aos="fade-up">

        <div class="col-lg-8">
          <div class="content ps-lg-5">
            <P>{{$noticias->titulo}}</p>
            <ul>
              <li><i class="bi bi-calendar-event-fill"></i>{{$noticias->created_at->format('d F Y')}}</li>
              <li><i class="bi bi-watch"></i>{{$noticias->created_at->format('g:i a')}}</li>
            </ul>
            <a style="text-align: justify">{{$noticias->descripcion}}<br><br></a><br>            
          </div>
          <img src="{{ asset($noticias->featured) }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-4">
          <!-- Denuncia -->
          <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

              <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100" style="width: 80%">
                <div class="post-box">
                  <div class="post-img"><img src="{{ asset($noticias->featured) }}" class="img-fluid" alt=""></div>
                  <div class="meta">
                    <span class="post-date">{{$noticias->created_at->format('d F Y')}}</span>
                    <span class="post-author"> / {{$noticias->created_at->format('g:i a')}}</span>
                  </div>
                  <h3 class="post-title">{{$noticias->titulo}}</h3>                  
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