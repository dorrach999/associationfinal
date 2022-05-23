 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact</h6>
                        <h2>Réservez votre produit</h2>
                    </div>
                    <p>Plus la mobilisation sera forte, plus l’espoir grandira…</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Numéro de Télephone</h4>
                                <span><a href="#">+21695867357</a><br><a href="#">+21695867357</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">contact@cancerwarriors.com</a><br><a href="#">info@cancerwarriors.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-lg-6">
    <div class="contact-form">
        <form id="contact" action="{{url('reservation')}}" method="post">

            @csrf
          <div class="row">
            <div class="col-lg-12">
                <h4>Réserver Produit</h4>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="name" type="text" id="name" placeholder="Votre Nom*" required="">
              </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Adresse Email" required="">
            </fieldset>
            </div>
            <div class="col-lg-6 col-sm-12">
              <fieldset>
                <input name="phone" type="text" id="phone" placeholder="Num Tel*" required="">
              </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
              <input type="number" name="qte" placeholder="Nombre de produits">
            </div>
            <div class="col-lg-6">
                <div id="filterDate2">    
                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                    <div class="input-group-addon" >
                      <span class="glyphicon glyphicon-th"></span>
                    </div>
                  </div>
                </div>   
            </div>
            <div class="col-md-6 col-sm-12">
                <input type="time" name="time">
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="main-button-icon">Réservez Maintenant</button>
              </fieldset>
            </div>
          </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
<!-- ***** Reservation Area Ends ***** -->