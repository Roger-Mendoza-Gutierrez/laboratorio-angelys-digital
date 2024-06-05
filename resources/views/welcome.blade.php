@extends('layouts.user_template')
@section('content')
  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Nuestros Productos</span>
                <h2>Los mejores lentes del mercado</h2>
                <p>Lentes realizados y personalizados con la mejor calidad para nuestros cliente, tenemos todo tipo de material para montura y para los cristales.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Ver los productos</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> ¿Por que nuestros lentes?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Los laboratorios</span>
                <h2>Contamos con las ultimas tecnologías</h2>
                <p>Contamos con las ultimas tecnologias del mercado, tenemos alta capacidad de produccion y garantia en cuanto a marcos de nuestros lentes.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Tecnologias</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> ¿Como se fabrican?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Nuestra sucursal</span>
                <h2>Estamos a ubicados en La Paz - Bolivia</h2>
                <p>Somos un laboratorio optico que cuenta con sucursales en todo el pais, solo contactanos para mas información.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Ver en Google Maps</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> ¿Como ubicarnos?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('user_template/assets/images/service-01.png') }}" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Historial Clinico</h4>
              <p>Registramos las preferencias de los lentes y los diagnosticos realizados.</p>
              <div class="main-button">
                <a href="#">Leer más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('user_template/assets/images/service-02.png') }}" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Seleccion <br>personalizada</h4>
              <p>Podras seleccionar tus lentes de forma personalizada deacuerdo a tus preferencias.</p>
              <div class="main-button">
                <a href="#">Leer más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="{{ asset('user_template/assets/images/service-03.png') }}" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Oftalmologos capacitados</h4>
              <p>Los mejores profesionales de forma accesible para todas nuestros pacientes.</p>
              <div class="main-button">
                <a href="#">Leer más</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cómo elegir los lentes correctos?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Para elegir los lentes correctos, primero debes conocer tu receta médica. Luego, considera tu estilo de vida y las actividades diarias para seleccionar el tipo de lentes más adecuado, ya sean monofocales, bifocales o progresivos. No olvides elegir una montura que se ajuste bien a tu rostro y complemente tu estilo personal. Consultar con un optometrista siempre es una buena idea para obtener recomendaciones específicas.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Qué servicios ofrecemos?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Ofrecemos una amplia gama de servicios, incluyendo exámenes de la vista completos, ajuste y reparación de lentes, asesoramiento personalizado para la elección de monturas y lentes, y venta de lentes de contacto. Además, contamos con servicios de adaptación de lentes progresivos y soluciones para problemas específicos de visión. Nuestro objetivo es proporcionar una atención integral y personalizada a cada uno de nuestros clientes.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Por qué elegir nuestra óptica?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Elegir nuestra óptica garantiza atención personalizada y profesional por parte de nuestro equipo de expertos. Utilizamos tecnología avanzada para exámenes de la vista precisos y ofrecemos una amplia variedad de monturas y lentes de alta calidad para todos los estilos y necesidades. Además, brindamos un excelente servicio postventa y soporte continuo para asegurar tu satisfacción total. Nuestra dedicación a la excelencia nos distingue y asegura que recibas el mejor cuidado para tu salud visual.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Ofrecen soporte postventa?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    No, actualmente no ofrecemos soporte postventa. Sin embargo, nos aseguramos de proporcionar productos de alta calidad y detalladas instrucciones de cuidado para que puedas mantener tus lentes en óptimas condiciones. Si tienes alguna pregunta o necesitas asistencia, nuestro equipo está disponible para ayudarte en todo momento.
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>Sobre Nosotros</h6>
            <h2>¿Qué nos hace la mejor optica?</h2>
            <p>Nuestra óptica se destaca por la calidad y el servicio al cliente. Contamos con profesionales capacitados y tecnología avanzada para exámenes precisos. Ofrecemos una amplia variedad de monturas y lentes de alta calidad. Además, brindamos asesoramiento personalizado y excelente servicio postventa, garantizando atención integral y soluciones ópticas adaptadas a tus necesidades.</p>
            <div class="main-button">
              <a href="#">Descubre más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Tecnologia avanzada</h6>
            <h2>Ultimos equipos</h2>
          </div>
        </div>
      </div>
      {{-- <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".design">Webdesign</a>
        </li>
        <li>
          <a href="#!" data-filter=".development">Development</a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress">Wordpress</a>
        </li>
      </ul> --}}
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-01.jpg') }}" alt=""></a>
              <span class="category">Análisis de retina</span>
              <span class="price"><h6></span>
            </div>
            <div class="down-content">
              <span class="author">Escaneo del ojo</span>
              <h4>Medidas precisas</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-02.jpg') }}" alt=""></a>
              <span class="category">Compresor de lentes</span>
              <span class="price"></span>
            </div>
            <div class="down-content">
              <span class="author">Lentes seguros</span>
              <h4>Aseguramos una durabilidad</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-03.jpg') }}" alt=""></a>
              <span class="category">Corta critales</span>
              <span class="price"><h6></span>
            </div>
            <div class="down-content">
              <span class="author">Cristales a medida</span>
              <h4>Peronalizamos a tu montura</h4>
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-04.jpg') }}" alt=""></a>
              <span class="category">Development</span>
              <span class="price"><h6><em>$</em>450</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Online Learning Steps</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-05.jpg') }}" alt=""></a>
              <span class="category">Wordpress</span>
              <span class="price"><h6><em>$</em>320</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Be a WordPress Master</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="{{ asset('user_template/assets/images/course-06.jpg') }}" alt=""></a>
              <span class="category">Webdesign</span>
              <span class="price"><h6><em>$</em>240</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Full Stack Developer</h4>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="5" data-speed="1000"></h2>
                   <p class="count-text ">Doctores profecionales</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="10" data-speed="1000"></h2>
                  <p class="count-text ">Personal de atención</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="1500" data-speed="1000"></h2>
                  <p class="count-text ">Pacientes tratados</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Años de experiencia</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('user_template/assets/images/member-01.jpg') }}" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('user_template/assets/images/member-02.jpg') }}" alt="">
              <span class="category">Graphic Teacher</span>
              <h4>Cindy Walker</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('user_template/assets/images/member-03.jpg') }}" alt="">
              <span class="category">Full Stack Master</span>
              <h4>David Hutson</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="{{ asset('user_template/assets/images/member-04.jpg') }}" alt="">
              <span class="category">Digital Animator</span>
              <h4>Stella Blair</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
              <div class="author">
                <img src="{{ asset('user_template/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">Full Stack Master</span>
                <h4>Claude David</h4>
              </div>
            </div>
            <div class="item">
              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
              <div class="author">
                <img src="{{ asset('user_template/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">UI Expert</span>
                <h4>Thomas Jefferson</h4>
              </div>
            </div>
            <div class="item">
              <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
              <div class="author">
                <img src="{{ asset('user_template/assets/images/testimonial-author.jpg') }}" alt="">
                <span class="category">Digital Animator</span>
                <h4>Stella Blair</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('user_template/assets/images/event-01.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Web Design</span>
                    <h4>UI Best Practices</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>16 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>22 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('user_template/assets/images/event-02.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Front End</span>
                    <h4>New Design Trend</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>24 Feb 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>30 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$320</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="{{ asset('user_template/assets/images/event-03.jpg') }}" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Full Stack</span>
                    <h4>Web Programming</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>12 Mar 2036</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>48 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$440</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contactanos</h6>
            <h2>Siéntase libre de contactarnos en cualquier momento</h2>
            <p>Gracias por elegir nuestros servicios. Le proporcionamos la mejor información de forma totalmente gratuita.
                Puedes apoyarnos compartiendo nuestro sitio web con tus amigos.</p>
            <div class="special-offer">
              <span class="offer">Menos<br><em>10%</em></span>
              <h6>Valido: <em>06 Junio 2024</em></h6>
              <h4>¡Oferta especial! <em>10%</em> MENOS!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Nombre..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Correo electrónico..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Enviar ahora</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
