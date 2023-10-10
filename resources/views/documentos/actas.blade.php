  <!-- header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>ACTAS</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
      <div>
          <div id="poster1" class="marco">
            <a href="{{ asset('/assets/pdf/ACTA DE INSTALACION  C.R.A.pdf')}}" target="_blank">
              <div class="icon-list d-flex" >
                <div id="pdf" >
                  <i  class="bi bi-file-earmark-pdf-fill" ></i>
                </div >
                <div style="display: flex; align-items:center">
                  <span style="margin-left: 1em; color:rgb(37, 37, 37); font-size: 18px;">Acta de instalacion C.R.A.</span>
                </div>
              </div><!-- End Icon List Item-->
            </a>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include('layout.footer')