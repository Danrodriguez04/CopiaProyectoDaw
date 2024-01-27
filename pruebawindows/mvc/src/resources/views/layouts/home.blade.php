<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLINICA LLEVANT</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVl5PA7Gou/RS6DZdSH0SFn9eqs9lmmhMfL5SkXbSBIJg1" crossorigin="anonymous">
</head>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <header>
        @include('layouts._partials.header')
        </header>
    
    
<main>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="1000">
            <img src="https://media.istockphoto.com/id/1148337618/es/foto/doctor-tranquiliza-a-la-mujer-paciente-mientras-est%C3%A1-sentada-en-el-escritorio-en-la-cl%C3%ADnica.jpg?s=2048x2048&w=is&k=20&c=YavlxiYGJfEYF4fnn9Y9PTsxauwGDpHEUgT6r3KU2s4=" class="d-block w-100" alt="sli1" style="width: 300px; height: 820px;">
            <div class="position-absolute top-2 end-2 text-white" style="font-size: 1.5rem; z-index: 1;">
                <p>Tu salud, nuestra misión</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2014/08/26/21/54/dentist-428646_1280.jpg" class="d-block w-100" alt="sli2" style="width: 300px; height: 820px;">
            <div class="position-absolute top-2 end-2 text-white" style="font-size: 1.5rem; z-index: 1;">
                <p>Cuidamos de ti, de principio a fin</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2014/12/10/20/56/medical-563427_1280.jpg" class="d-block w-100" alt="sli3" style="width: 300px; height: 820px;">
            <div class="position-absolute top-2 end-2 text-white" style="font-size: 1.5rem; z-index: 1;">
                <p>Bienestar que puedes sentir, atención que puedes confiar</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </main>

    <footer class="clinic-footer bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Contacto</h3>
                    <p>Dirección: Calle Aragón 55</p>
                    <p>Teléfono: 971 54 00 00</p>
                    <p>Email: info@clinica.llevant</p>
                </div>
                <div class="col-md-6">
                    <h3>Redes Sociales</h3>
                    <ul class="social-icons">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>