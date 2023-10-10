  <!-- header -->
  @include('layout.header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/assets/img/CRAC-up.jpg')}}'">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>PLAN DE TRABAJO</h2>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
          <div class="row m-4">

            <div class="section-header">
              <h2>Plan de Trabajo</h2>
              <span>El Plan Anual de Trabajo es el documento que contiene la programación de actividades a
                realizar durante el año, así como el cronograma anual de las sesiones. Es aprobado por
                mayoría simple por la Comisión y su elaboración corresponde al/a la Secretario/a Técnico/a,
                quien también es responsable del seguimiento y monitoreo.</span>
            </div>
            <embed src="{{asset('/assets/pdf/PLAN DE ANTICORRUPCION.pdf')}}" type="application/pdf" width="420px" height="630px">
          </div>
        </section><!-- End Why Choose Us Section -->

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->


  <!-- footer -->
  @include('layout.footer')