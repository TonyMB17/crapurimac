  <!-- header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>MARCO NORMATIVO</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="background-color: #FBFBFB;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Marco Normativo</h2>

        </div>

        <div>
          @foreach($documentos as $documento)

          <div id="poster1" class="marco">
            <a href="{{ asset('/'.$documento->file)}}" target="_blank">
              <div class="icon-list d-flex" >
                <div id="pdf" >
                  <i style="width: 1em;
    height: 1em;
    position: relative;
    display: block;" class="bi bi-file-earmark-pdf-fill" ></i>
                </div >
                <div style="display: flex; align-items:center">
                  <span style="margin-left: 1em; color:rgb(37, 37, 37); font-size: 18px;">{{$documento->nombre}}</span>
                </div>
              </div><!-- End Icon List Item-->
            </a>
          </div>

          @endforeach



        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include('layout.footer')