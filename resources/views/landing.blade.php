  @extends('layouts/guest')

  @extends('layouts.app')

  @section('title', 'Guest')

  @section('container')
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Dokumentasi</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-lg" placeholder="Searching...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Search!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Fully Design</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Updated For Anything</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Easy to Use &amp; Customize</h2>
          <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5"></h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Agung Laksono</h5>
            <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Ahmad Najibullah</h5>
            <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Henri Sekeladi</h5>
            <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, impedit cumque? Sint placeat magnam ullam quo. Non, dolores a nulla itaque similique ab porro, dolorem ex, facere minus atque doloremque!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to be Admin? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
              <div class="col-12 col-md-12">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
