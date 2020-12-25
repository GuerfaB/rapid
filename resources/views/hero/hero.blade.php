<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    @foreach ($banner as $i)
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>{{ $i->titre }}</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">{{ $i->boutton }}</a>
          </div>
        </div>

        <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset("img/$i->path") }}" alt="" class="img-fluid">
        </div>
      </div>

    </div>
        
    @endforeach
  </section><!-- End Hero -->

  <main id="main">