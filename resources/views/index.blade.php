<!DOCTYPE html>
<html>

<head>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title> Monicos </title>

  <style>
    section {
      padding: 60px 0;
    }

    #monito {
      height: 30px;
      width: auto;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-xxl">
      <a href="#intro" class="navbar-brand">
        <img id="monito" class="img-fluid" src="/img/logomono.png" alt="">
        <span class="fw-bold text-primary">
          El mono
        </span>
      </a>
      <!-- toggle button for mobile nav -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
        aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- navbar links -->
      <div class="collapse navbar-collapse justify-content-end align-items-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item">

          </li>
          <li class="nav-item">
            <a href="#topics" class="nav-link">Sobre los monos</a>
          </li>
          <li class="nav-item">
            <a href="#reviews" class="nav-link">Opiniones</a>
          </li>
          <li class="nav-item">
            <a href="#contact" class="nav-link">Contacta con un mono</a>
          </li>
          <li class="nav-item d-md-none">
            <a href="#topics" class="nav-link">Precio adopción</a>
          </li>
          <li class="nav-item ms-2 d-none d-md-inline">
            <a href="#pricing" class="btn btn-primary">Adopta un mono</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- TEXTO INTRO Y IMAGEN INTRO -->
  <section id="intro">
    <div class="container-lg">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-2 text-primary">El mono</div>
            <div class="display-5 text-muted">Tu mejor amigo</div>
          </h1>
          <p class="lead my-4 text-muted">Adopta uno y serás muy feliz</p>
          <a href="#pricing" class="btn btn-primary btn-lg">Adopta ahora</a>
          <!-- open sidebar / offcanvas -->
          <a href="#sidebar" class="d-block mt-3 text-decoration-none" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
            Descubre otros animales
          </a>
        </div>
        <div class="col-md-5 text-center d-none d-md-block">
          <!-- TOOLTIP-->
          <span class="tt" data-bs-placement="bottom" title="Nuestro mono Juan">
            <img class="img-fluid border border-primary rounded" src="/img/mono.jpg" alt="">
          </span>
        </div>
      </div>
    </div>
  </section>

  <!-- CARDS PRECIO -->
  <section id="pricing" class="bg-clarito mt-5">
    <div class="container-lg">
      <div class="text-center">
        <h2>Planes de adopción</h2>
        <p class="lead text-muted">Escoge una adopcion que se adapte</p>
      </div>

      <div class="row my-5 align-items-center justify-content-center">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow-lg">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Me caen bien los monicos</h4>
              <p class="card-subtitile">
                1 mono
              </p>
              <p class="display-5 my-4 text-primary fw-bold">
                19,99€
              </p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                Lorem ipsum dolor, sit amet consecteur adipiscing elit.
              </p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Adopta Ahora</a>       
            </div>
          </div>
        </div>
        <div class="col-9 col-lg-4 ">
          <div class="card border-primary border-2">
            <div class="card-header text-center text-primary">Mas popular</div>
            <div class="card-body text-center py-4">
              <h4 class="card-title">Amo a los monicos</h4>
              <p class="card-subtitile">
                5 monos
              </p>
              <p class="display-5 my-4 text-primary fw-bold">
                49,99€
              </p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                Lorem ipsum dolor, sit amet consecteur adipiscing elit.
              </p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Adopta Ahora</a>

            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0 shadow-lg">
            <div class="card-body text-center py-4">
              <h4 class="card-title">Me considero mas un mono que humano</h4>
              <p class="card-subtitile">
                10 monos
              </p>
              <p class="display-5 my-4 text-primary fw-bold">
                89,99€
              </p>
              <p class="card-text mx-5 text-muted d-none d-lg-block">
                Lorem ipsum dolor, sit amet consecteur adipiscing elit.
              </p>
              <a href="#" class="btn btn-outline-primary btn-lg mt-3">Adopta Ahora</a>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ACORDEON -->
  <section id="topics">
    <div class="container-md">
      <div class="text-center">
        <h2>La vida de los monos</h2>
        <p class="lead text-muted">Un paseo rapido por su mundo</p>
      </div>

      <div class="row my-5 g-5 justify-content-around align-items-cente">
        <div class="col-6 col-lg-4">
          <img src="/img/monos.jpg" class="img-fluid" alt="monos">
        </div>

        <div class="col-lg-6">
          <!-- acordeon -->
          <div class="accordion" id="chapters">
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-1"
                  aria-expanded="true" aria-controls="chapter-1">
                  Capitulo 1 - El nacimiento de los monos
                </button>
              </h2>
              <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                  Capitulo 2 - La evolución de los monos
                </button>
              </h2>
              <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                  Capitulo 3 - El crecimiento de los monos
                </button>
              </h2>
              <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                  Chapter 4 - ¿Son casi humanos?
                </button>
              </h2>
              <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading-5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                  Capitulo 5 - Tortilla de patatas siempre con cebolla
                </button>
              </h2>
              <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                data-bs-parent="#chapters">
                <div class="accordion-body">
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem
                    consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi
                    ipsam nulla sunt alias.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- LISTAS (REVIEWS) -->

  <section id="reviews" class="bg-clarito">
    <div class="container-lg">
      <div class="text-center">
        <h2>
          <i class="bi bi-stars"></i>Reviews de los monos
        </h2>
        <p class="lead">Opiniones de la gente que ama a los monos</p>
      </div>

      <div class="row justify-content-center my-5">
        <div class="col-lg-8">
          <div class="list-group">
            <div class="list-group-item active py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">Adopta ya porfavor</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita
                est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate
                repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item list-group-item-primary py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-half"></i>
              </div>
              <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita
                est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate
                repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item list-group-item-secondary py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita
                est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate
                repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star    "></i>
              </div>
              <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita
                est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate
                repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
            <div class="list-group-item py-3">
              <div class="pb-2">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <h5 class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
              <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita
                est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate
                repellat in id quisquam.</p>
              <small>Review by Mario</small>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FORMS, FROMS GROUPS, ... -->
  <section id="contact">
    <div class="container-lg">

      <div class="text-center">
        <h2>Contacta</h2>
        <p class="lead">¿Tienes alguna pregunta? Rellena el formulario...</p>
      </div>
      <div class="row justify-content-center my-5">
        <div class="col-lg-6">

          <form>
            <label for="email" class="form-label">Correo electronico:</label>
            <div class="input-group mb-4">
              <span class="input-group-text">
                <i class="bi bi-envelope-fill text-secondary"></i>
              </span>
              <input type="text" id="email" class="form-control" placeholder="ej. Antonio@example.com" />
              <span class="input-group-text">
                <!-- TOOLTIP -->
                <span class="tt" data-bs-placement="bottom" title="Introduce un correo al que podamos responder">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
            </div>
            <label for="name" class="form-label">Nombre:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-person-fill text-secondary"></i>
              </span>
              <input type="text" id="name" class="form-control" placeholder="ej. Antonio" />
              <span class="input-group-text">
                <!-- TOOLTIP -->
                <span class="tt" data-bs-placement="bottom" title="Introduce tu nombre completo">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
            </div>

            <label for="age" class="form-label">Edad:</label>
            <div class="input-group mb-4">
              <span class="input-group-text">
                +18
              </span>
              <input type="number" id="age" class="form-control" placeholder="ej. 18..." />
            </div>
            <label for="subject" class="form-label">¿Sobre que es la pregunta?</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-chat-right-dots-fill text-secondary"></i>
              </span>
              <select class="form-select" id="subject">
                <option value="pricing" selected>Sobre los precios</option>
                <option value="content">Sobre el contenido</option>
                <option value="other">Otros</option>
              </select>
            </div>
            <div class="mb-4 mt-5 form-floating">
              <textarea class="form-control" id="query" style="height: 140px" placeholder="query"></textarea>
              <label for="query">Tu pregunta...</label>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Enviar pregunta al correo electronico</label>
            </div>
            <div class="mb-4 text-center">
              <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- MODAL TRIGGER -->
  <section class="bg-light">
    <div class="container">
      <div class="text-center">
        <h2>¡Informate cada dia!</h2>
        <p class="lead">Consigue las ultimas actualizaciones al instante...</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero exercitationem
            voluptatibus porro, hic asperiores fuga illo voluptates obcaecati deleniti veritatis sunt saepe quasi
            deserunt ex ipsum. Est possimus, aspernatur, vitae eligendi rem odit quaerat, ipsum pariatur ratione maxime
            delectus fuga minus accusamus dolores iusto maiores accusantium cumque magnam placeat quia!</p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
            Registrate Ahora
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- MODAL -->
  <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, exercitationem laboriosam nihil minus
            voluptatibus harum aliquam consequatur pariatur inventore dignissimos illum excepturi ratione ipsum sit
            iusto alias eligendi fugit laborum?</p>
          <label for="modal-email" class="form-label">Dirección de correo electronico:</label>
          <input type="email" class="form-control" id="modal-email" placeholder="e.g. Antonio@example.com">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- SIDE PANEL / OFFCANVAS -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebar-label">Otros animales</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h2 class="text-primary">LA AVESTRUZ</h2>
      <img class="img-fluid" src="/img/avestruz.jpg" alt="">
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In minima ducimus excepturi quasi tempore fugit quis
        voluptatibus aut error possimus, tenetur natus magni quam voluptatem quae eligendi repudiandae delectus eaque!
      </p>
      <!-- DROPDOWN -->
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown" data-bs-toggle="dropdown">
          Escoge un animal
        </button>
        <ul class="dropdown-menu" aria-labelledby="book-dropdown">
          <li><a class="dropdown-item" href="#">La avestruz</a></li>
          <li><a class="dropdown-item" href="#">La libelula</a></li>
          <li><a class="dropdown-item" href="#">La serpiente</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- JS para que funcionen los tooltips-->
  <script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
      new bootstrap.Tooltip(t)
    })
  </script>
</body>

</html>