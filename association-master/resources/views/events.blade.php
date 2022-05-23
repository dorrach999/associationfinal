 <!-- ***** Chefs Area Starts ***** -->
 <section class="section" id="chefs">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Nos Evénements</h6>
                   

                    <h2> Un défi pour soutenir les femmes atteintes d'un cancer du sein</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($data2 as $data2)
            <div class="col-lg-4">
                <div class="chef-item">
                    <div class="thumb">
                        <div class="overlay"></div>
                        <ul class="social-icons">
                            <li><a href="#">consulter<i class="main-white-button scroll-to-section"></i></a></li>
                        </ul>
                        <img height="200" width="200" src="/eventimage/{{$data2->image}}" alt="Chef #1">
                    </div>
                    <div class="down-content">
                        <h4>{{$data2->name}}</h4>
                        <span>{{$data2->description}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** -->