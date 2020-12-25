 <!-- ======= About Section ======= -->
 <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      @foreach ($about as $i)
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset("img/$i->path")}}" alt="">
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="about-content" data-aos="fade-left" data-aos-delay="100">
            <h2>About Us</h2>
            <h3>{{ $i->titre }}</h3>
            <p>{{ $i->phrase1 }}</p>
            <p>{{ $i->phrase2 }}</p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i>{{ $i->skill1 }}</li>
              <li><i class="ion-android-checkmark-circle"></i>{{ $i->skill2 }}</li>
              <li><i class="ion-android-checkmark-circle"></i>{{ $i->skill3 }}</li>
            </ul>
          </div>
        </div>
      </div>
          
      @endforeach
    </div>

  </section><!-- End About Section -->