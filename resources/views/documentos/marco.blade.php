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
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Marco Normativo</h2>

        </div>    

        <div>
          @foreach($documentos as $documento)
          <div id="poster" class="marco" >
            <a href="{{ asset('/'.$documento->file)}}" target="_blank">
            <div class="icon-list d-flex">
              <i class="bi bi-filetype-pdf" style="color: #e72323; font-size: 1.3em"></i>
                <span style="margin-left: 1em; color:rgb(37, 37, 37)">{{$documento->nombre}}</span>
            </div>
          </a>
          </div><!-- End Icon List Item-->
          <br>
          @endforeach
          

          
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- footer -->
  @include('layout.footer')