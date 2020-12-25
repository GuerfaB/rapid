<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">

      @foreach ($feature as $i)
      @if ($i->order === 1)
        <div class="row feature-item mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset("img/$i->path") }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
            <h4>{{ $i->titre }}</h4>
            <p>
              {{ $i->texte1 }}
            </p>
            <p>
             {{ $i->texte2 }}
            </p>
          </div>
        </div> 
      @else
        <div class="row feature-item mb-5">
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
            <h4>{{ $i->titre }}</h4>
            <p>
              {{ $i->texte1 }}
            </p>
            <p>
             {{ $i->texte2 }}
            </p>
          </div>
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset("img/$i->path") }}" class="img-fluid" alt="">
          </div>
        </div>   

      
      
      @endif
      
          
      @endforeach

     

    </div>
  </section><!-- End Features Section -->