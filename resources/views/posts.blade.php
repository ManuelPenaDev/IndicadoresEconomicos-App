@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-ligth bg-main">
    <div class="container p-4">
      <a class="navbar-brand m-auto" href="#">
        <img src="{{asset('images/indicadoreconomico.png')}}" width="120" alt="" loading="lazy">
      </a>
    </div>
  </nav>

  <section class="container-fluid content">
    <div class="row justify-content-center">
      <div class="col-10 col-md-12">
        <nav class="text-center my-5">
          <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category">Noticias</a>
          <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline">Acerca de</a>
          <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline">Contacto</a>
        </nav>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="row">
          <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('images/laravel.png')}}" alt="Post Python">
              <div class="card-body">
                <small class="card-txt-category">Categoría: Programación</small>
                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                <div class="d-card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, perferendis.
                </div>
                <a href="#" class="post-link"><b>Leer más</b></a>
                <hr>
                <div class="row">
                  <div class="col-6 text-left">
                    <span class="card-txt-author">ManuDev</span>
                  </div>
                  <div class="col-6 text-right">
                    <span class="card-txt-date">Hace 2 semanas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Post 2 -->
          <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('images/dolar.png')}}" alt="Post Python">
              <div class="card-body">
                <small class="card-txt-category">Categoría: Programación</small>
                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                <div class="d-card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, labore.
                </div>
                <a href="#" class="post-link"><b>Leer más</b></a>
                <hr>
                <div class="row">
                  <div class="col-6 text-left">
                    <span class="card-txt-author">ManuDev</span>
                  </div>
                  <div class="col-6 text-right">
                    <span class="card-txt-date">Hace 2 semanas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Post 3 -->
          <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
              <img class="card-img-top" src="{{asset('images/dolar2.png')}}" alt="Post Python">
              <div class="card-body">
                <small class="card-txt-category">Categoría: Programación</small>
                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                <div class="d-card-text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quod?
                </div>
                <a href="#" class="post-link"><b>Leer más</b></a>
                <hr>
                <div class="row">
                  <div class="col-6 text-left">
                    <span class="card-txt-author">ManuDev</span>
                  </div>
                  <div class="col-6 text-right">
                    <span class="card-txt-date">Hace 2 semanas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <!-- Paginador -->
      </div>
    </div>
  </section>



  @endsection
</header>
</body>
</html>
