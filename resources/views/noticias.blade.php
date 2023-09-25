  <!-- header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Noticias</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Noticias</h2>

        </div>

            <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
      <div class="container" data-aos="fade-up">       

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




      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->


  <!-- footer -->
  @include('layout.footer')