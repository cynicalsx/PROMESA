@extends('frontend.site.layouts.plantilla',['titulo'=>'Bienvenido > Inicio'])
@section('container')
<div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url({{asset ('img/slider_1_2.png')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Obtenga su admisión ahora!</h1>
                    <!-- <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenga su admisión ahora!</h2> -->
                    <a href="{{url('/register')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Preinscripcion</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url({{asset ('img/slider_1_1.png')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">CALIDAD CALIDEZ LIDERAZGO</h1>
                  </div>
                </div>
              </div>
            </div>

          </li>
          <li style="background-image: url({{asset ('img/slider_1_3.png')}}" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Todos buscamos que nuestros hijos lleguen a la cima</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      <!-- <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenga su admisión ahora!</h2>
              <a href="{{url('/register')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Preinscrición</a>
            </div>
          </div>
        </div>
      </section> -->
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h2>Colegio Nacional Cumbres Nuevo Casas Grandes</h2>
            </div>
          </div>
        </div>
      </section>

      <section  class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>Acerca de la escuela</h3>
                  <p>Somos una escuela la cual nuestro principal propósito, es que los alumnos con los que contamos o, obtengan las herramientas necesarias para luchar en la vida.</p>
                  <!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url({{asset ('img/img-video.jpg')}}">
                  <a href="https://www.youtube.com/watch?v=zDoEH4GfjxA" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>¿Por qué elegir Cumbres?</h2>
              <p class="lead">Colegio Nacional Cumbres una propuesta de educación secundaria en NCG con un modelo único y propio de Educación; ampliado y progresivo para obtener un alto desempeño académico y alto rendimiento artístico, cultural y deportivo.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Docentes Altamente Capacitados</h3>
                  <p>Los docentes que imparten clases en Cumbres cuentan con certificados de especialidad valorados a nivel internacional</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Instalaciones de Calidad</h3>
                  <p>Las instalaciones de Cumbres cuentan con equipamiento especializado y con limpieza de alta calidad</p>
                </div>
              </div>
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Cursos</h3>
                  <p>Cumbres cuenta con cursos de calidad para un mayor desarrollo de las habilidades</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Actividades Recreativas</h3>
                  <p>Se cuenta con equipos de futbol, basquetbol, tenis, atletismo, música, arte, danza,
                    entre otras actividades.</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Localización</h3>
                  <p>La institución está ubicada en un punto estratégico para la tranquilidad de los padres de familia</p>
                </div>
              </div>

              <div class="service left-icon probootstrap-animate">
                <div class="icon"><i class="icon-checkmark"></i></div>
                <div class="text">
                  <h3>Seguridad</h3>
                  <p>Se cuenta con personal encargado de verificar el acceso de
                     personal para que los alumnos estén siempre seguros para tranquilidad de los padres</p>
                </div>
              </div>

            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">

          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="300" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Estudiantes matriculados</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="50" data-speed="5000" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Maestros certificados</span>
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-library"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Pasando a las universidades</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Satisfacción de los padres</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-color: #712180">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Difusión</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Noticias destacadas</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Próximos Eventos</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_3.1.jpg')}}"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Visita al Conservatorio de Colorado springs en USA </h3>
                              <p></p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>April 18, 2019</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_5.jpg')}}"   class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Demostración en Conservatorio de Colorado springs en USA</h3>
                              <p></p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>April 22, 2019</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="{{asset ('img/img_sm_4.jpg')}}"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Veranos en Conservatory of Colorado Springs</h3>
                              <p></p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>April 18, 2019</span>

                            </div>
                          </a>
                        </div>
                        <!-- END item -->


                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="{{url('/news')}}" class="btn btn-primary">Ver todas las noticias</a></p>
                    </div>
                  </div>
                </div>

                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <p><a href="{{url('/events')}}" class="btn btn-primary">Ver todos los eventos</a></p>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </section>

      <section  class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Nuestros cursos destacados</h2>
              <p class="lead">Cumbres cuenta con una gran variedad de cursos para que los estudiantes utilicen todo su potencial </p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">

            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate"style="height: 224px;">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img_curso1.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <h3>Fúlbol</h3>
                  <p>Curso que tiene por objetivo dirigir un trabajo Técnico, pero sin ignorar la naturaleza del niño que es divertirse y jugar por intermedio de esta disciplina</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">2,928 students enrolled</span></p> -->

                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate" style="height: 224px;">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img_curso2.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <h3>Básquelbol</h3>
                  <p>Curso aborda el básquetbol desde un enfoque formativo, orientado a la iniciación en escolares de nivel básico</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">7,202 students enrolled</span></p> -->
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate" style="height: 224px;">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img_curso3.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <h3>Idioma</h3>
                  <p>Nuestros alumnos se forman en el idioma inglés con otras materias a demás de su materia en el idioma</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">12,582 students enrolled</span></p> -->
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate"style="height: 224px;">
                <div class="image">
                  <div class="image-bg">
                    <img src="{{asset ('img/img_curso4.jpg')}}">
                  </div>
                </div>
                <div class="text">
                  <h3>Computación</h3>
                  <p> Entregar las herramientas y habilidades necesarias para que el alumno sea autosuficiente en la utilización de Internet, con una breve reseña histórica además</p>
                  <!-- <p><a href="#" class="btn btn-primary">Enroll now</a> <span class="enrolled-count">9,582 students enrolled</span></p> -->
                </div>
              </div>



            </div>
          </div>
        </div>

      </section>


      <section id="S-teachers" class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Fundadores del Colegio Nacional Cumbres</h2>
              <!-- <p class="lead"></p> -->
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>IVAN ORLANDO FIERRO GARCIA</h3>
                  <p>Director General</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>THIARA IVETTE GARCIA DE ALBA</h3>
                  <p>Dirección Académica</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="clearfix visible-sm-block visible-xs-block"></div>
            <div class="col-md-4 col-sm-6">
              <div class="probootstrap-teacher text-center probootstrap-animate">
                <figure class="media">
                  <img src="img/logos.png"   class="img-responsive">
                </figure>
                <div class="text">
                  <h3>GUADALUPE TELLO LUEVANOS</h3>
                  <p>Dirección Técnico Pedagógica</p>
                  <!-- <ul class="probootstrap-footer-social">
                    <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
         </div>
      </section>
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Testimonios de Alumnos</h2>
              <p class="lead">Testimonios de alumnos egresados de la institucion</p>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/logos.png"  >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author"> &mdash; <span>Mike Fisher</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/logos.png"  >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author"> &mdash;<span>Jorge Smith</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/logos.png" >
                    </figure>
                    <blockquote class="quote">&ldquo;La institusion Cumbres a sido una de las mejores en la que e estado, ya que cuenta con un equipo de docentes altamente capacitados y unas instalaciones de calidad.&rdquo; <cite class="author">&mdash; <span>Brandon White</span></cite></blockquote>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>




    </div>
@endsection
