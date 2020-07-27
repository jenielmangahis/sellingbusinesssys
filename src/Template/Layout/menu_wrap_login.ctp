<?php use Cake\Utility\Inflector; ?>
<?php use Cake\Utility\Text; ?>
<!-- top header -->
<div class="top-header" id="home">
<!--------Signup------>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frm-user-registration">
      <div class="modal-body user-registration-container">
        <div class="err-container"></div>            
          <div class="form-group">
            <label for="exampleFormControlInput1">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Middlename</label>
            <input type="text" name="middlename" class="form-control" id="middlename" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Lastname</label>
            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Register as</label>
            <select class="form-control" name="group" id="group">
              <option value="owner">Owner</option>
              <option value="tenant">Tenant</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
          </div>              
          <div class="form-group">
            <label for="exampleFormControlInput1">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="Sign Up" class="btn btn-primary btn-user-signup">            
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- //top header -->

<section class="top-section">
  <div class="container">
    <div class="media-container-row container">
      <div class="card col-12 col-md-6 align-center col-lg-4 header-middle">
        <form action="#" method="post">
          <input type="search" name="search" placeholder="Search here..." required="">
          <input type="submit" value=" ">
          <div class="clearfix"></div>
        </form>


      </div>
      <div class="card col-12 col-md-6 align-center col-lg-4">
        <div class="img-responsive">
          <img src="<?= $this->Url->build("/webroot/images/logo.png") ?>" alt="" media-simple="true" style="width:100%">
        </div>


      </div>
      <div class="card col-12 col-md-6 align-center col-lg-4">
        <ul class="social-nav model-3d-0 footer-social social">
          <li class="share">Share On : </li>
          <li>
            <a href="#" class="facebook">
              <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="#" class="twitter">
              <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="#" class="instagram">
              <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="#" class="pinterest">
              <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="">
  <!-- Navigation -->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href=""></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build("/"); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build("/about-us"); ?>">About</a>
          </li>
          <li class="nav-item dropdown has-mega-menu">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
            <div class="dropdown-menu">
              <?php foreach($productCategories as $category){ ?>
                <?php $category_slug = Inflector::slug($category->name, "-"); ?>
                <a class="dropdown-item" href="<?php echo $this->Url->build('/products/listing/' . $category->id . '/' . $category_slug); ?>"><?php echo $category->name; ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">FAQs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->Url->build("/contact-us"); ?>">Contact Us</a>
          </li>

          <li class="nav-item" style="background-color: #ff3131;">
            <a class="nav-link" href="<?php echo $this->Url->build('/cart') ?>"><i class="fa fa-shopping-cart"></i> Cart</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</section>