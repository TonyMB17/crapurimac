<!-- header -->
@include('layout.header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('/assets/img/CRAC-up.jpg') }}'">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>PRESENTACION</h2>
            <!-- <ol>
            <li><a href="{{route('Inicio')}}">INICIO</a></li>
            <li>PRESENTACIÓN</li>
            </ol> -->

        </div>
    </div><!-- End Breadcrumbs -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>PRESENTACIÓN</h2>
                </div>

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img id="borde" src="{{ asset('/assets/img/GRA.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <!-- <h3>Voluptatem dignissimos provident quasi</h3> -->
                            <p>La corrupción en nuestro país, desde el periodo colonial hasta nuestros días, ha sido un fenómeno insidioso, amplio, variado y global que no sólo comprende actividades públicas sino también privadas, como el ofrecimiento y la recepción de sobornos; la malversación y mala asignación de fondos y gastos públicos; los escándalos financieros y políticos; el fraude electoral, el tráfico de influencias y otras trasgresiones administrativas como el financiamiento ilegal de partidos políticos en busca de favores indebidos, los cuales limitan el desarrollo de nuestro país. </p>
                            <p>Siendo la corrupción uno de los problemas de mayor envergadura en nuestro país, conforme al Barómetro de las Américas de Latin American Public Opinion Project, en el cual se menciona que, en el 2019, un 36% de la población señala a la corrupción como el principal problema, por encima de otros temas como la economía, la seguridad, la inestabilidad política y otros.</p>
                            <p>Estos datos revelan de manera preocupante que la ciudadanía aún desconfía de ciertas instituciones públicas y evidencia que por delante queda un largo recorrido para fortalecer la legitimidad de las mismas. Es importante que el Estado peruano, a través de distintas entidades, siga realizando esfuerzos para incluir e involucrar a la ciudadanía como un medio de control contra la corrupción en el sector público del país.</p>
                            <p>Debido a ello, durante el 2022, los miembros de la Comisión Regional Anticorrupción de Apurímac, estamos priorizando un trabajo articulado y oportuno para prevenir actos de corrupción en el ámbito público y privado.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



</main><!-- End #main -->

<!-- footer -->
@include('layout.footer')
