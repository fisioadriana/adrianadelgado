<?php require('./templates/header.php') ?>

<main>
  <div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active img-thumbnail">
          <img src="img/massage.jpg" height="610px" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption caroparrafo">

            <h2 class="titulo1 animated fadeInDown">
              Neurorehabilitacion
            </h2>
            <p class="text-center px-4">
              Tenemos un excelente equipo de profesionales con más de 5 años
              de experiencia en procesos de rehabilitación.
            </p>
            <a href="servicios.php" class="btnservi px-4 py-1">Servicios</a>
          </div>
        </div>
        <div class="carousel-item img-thumbnail">
          <img src="img/physiotherapy.jpg" height="610px" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption caroparrafo">
            <h2 class="titulo1 animated fadeInDown">
              Nuestras Especialidades
            </h2>
            <p class="text-center px-4">
              Terapia respiratoria y cardiovascular,
              Neurorehabilitacion,
              Rehabilitación deportiva,
              Rehabilitación geriátrica reumatologica,
              Fisioterapia obstetricia y piso pelvico,
              Fisioterapia Pediátrica,
              Terapia Neural,
              Vendaje Neuromuscular,
              Tracción Lumbar y Cervical
            </p>
            <a href="tel:+573102554610" class="btnservi px-4 py-1">Servicios</a>
          </div>
        </div>
        <div class="carousel-item img-thumbnail">
          <img src="img/stretcher.jpg" height="610px" class="d-block w-100 rounded" alt="...">
          <div class="carousel-caption caroparrafo">
            <h2 class="titulo1 animated fadeInDown">Nuevas Tecnicas</h2>
            <p class="text-center px-4">
              En Adriana Delgado contamos con aplicación de técnicas como:
              ventosas, punción seca, electropunción, vendaje neuromuscular,
              terapia neural, reflexología, digitopuntura, terapia de
              percusión y Pilates.
            </p>
            <a href="./servicios.html" class="btnservi px-4 py-1">Servicios</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev pt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon py-5" aria-hidden="true"></span>
        <span class="visually-hidden py-5">Previous</span>
      </button>
      <button class="carousel-control-next pt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon py-5" aria-hidden="true"></span>
        <span class="visually-hidden py-5">Next</span>
      </button>
    </div>
  </div>
</main>
</body>

<?php require('./templates/footer.php') ?>