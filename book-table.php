<?php include("./layout/header.php"); ?>

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>Lorem ipsum dolor sit amet</h4>
          <h2>Book a table</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="send-message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
        </div>
      </div>
      <div class="col-md-8">
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-sm-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="date" placeholder="16.06.2020" required="">
                </fieldset>
              </div>

              <div class="col-sm-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="date" placeholder="09:00" required="">
                </fieldset>
              </div>

              <div class="col-sm-6">
                <fieldset>
                  <select class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                    <option value="">7</option>
                  </select>
                </fieldset>
              </div>

              <div class="col-sm-6">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                </fieldset>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Notes" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="filled-button">Check Availability</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <img src="assets/images/team_01.jpg" class="img-fluid" alt="">

        <h5 class="text-center" style="margin-top: 15px;">John Doe</h5>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form">
          <form action="#" id="contact">
            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Pick-up location" required="">
                </fieldset>
              </div>

              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Return location" required="">
                </fieldset>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                </fieldset>
              </div>

              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Return date/time" required="">
                </fieldset>
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Enter full name" required="">

            <div class="row">
              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Enter email address" required="">
                </fieldset>
              </div>

              <div class="col-md-6">
                <fieldset>
                  <input type="text" class="form-control" placeholder="Enter phone" required="">
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>

<?php include("./layout/footer.php");
