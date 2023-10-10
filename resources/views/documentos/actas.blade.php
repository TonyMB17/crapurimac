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

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="row m-4">

            <div class="section-header">
              <h2>Actas</h2>
              <h3>Acta de Primera Reunión Comisión Anticorupción de Apurímac</h3>
            </div>
            <embed src="{{ asset('/assets/pdf/ACTA DE INSTALACION  C.R.A.pdf')}}" type="application/pdf" width="420px" height="630px">
          </div>
        </section><!-- End Why Choose Us Section -->

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include('layout.footer')