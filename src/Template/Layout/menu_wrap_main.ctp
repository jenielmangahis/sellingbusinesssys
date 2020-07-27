<?php use Cake\Utility\Inflector; ?>
<?php use Cake\Utility\Text; ?>
<?php use Cake\ORM\TableRegistry; ?>
<?php 
  $this->CompanyDetails = TableRegistry::get('CompanyDetails'); 
  $companyDetails = $this->CompanyDetails->get(1);
?>
<!-- top header -->
<?php if( empty($hdr_user_data) || $hdr_user_data->group_id == 1  ){ ?>
<div class="top-header" id="home">
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button" class="btn btn-top" data-toggle="modal" data-target="#signInModal"><i class="fa fa-unlock-alt" style="color: #ff3131;"></i> <a href="#">Sign In </a></button>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-top" data-toggle="modal" data-target="#signUpModal"><i class="fa fa-pencil-square-o" style="color: #ff3131;"></i><a href="#"> Sign Up </a></button>
    </div>
  </div>
</div>
<!--------Signin------>
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signInModalLabel">Sign-In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frm-user-login">
        <div class="modal-body user-login-container">   
            <div class="pull-right">
              <a href="#" onclick="fb_login();"><img class="fb-login-image" src="<?php echo $this->Url->build("/webroot/img/fb_login.png") ?>" border="0" alt=""></a>              
              <span class="g-signin"
                  data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
                  data-clientid="198113573941-vlvsqfp8bq55ah8abrbe1fiu8k2rsu4v.apps.googleusercontent.com"
                  data-redirecturi="postmessage"
                  data-accesstype="offline"
                  data-cookiepolicy="single_host_origin"
                  data-callback="signInCallback">
              </span>
            </div>    
            <br/><br/>
            <div class="err-container"></div>                  
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" name="username" class="form-control" id="username" placeholder="name@example.com">
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="">
            </div>                
        </div>
        <div class="modal-footer">
          <button type="su" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Sign In" class="btn btn-primary btn-user-signin">  
          <div style="float:right; font-size: 80%; position: relative; top:0px;"><a href="<?= $this->Url->build('/forgot_password') ?>" style="color:#f91111 !important;">Forgot password?</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-----//signin--->


<!--------Signup------>
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUpModalLabel">Sign-Up</h5>
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
              <option value="owner">Shopowner</option>
              <option value="tenant">Buyer</option>
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

          <div class="checkbox">            
            <label><input type="checkbox" name="terms_conditions" id="terms_conditions"> Terms and Conditions</label>
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

<div class="modal fade" id="termsConditionModal" tabindex="-1" role="dialog" aria-labelledby="termsConditionModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsConditionModalLabel">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="frm-user-registration">
      <div class="modal-body" style="height:300px;overflow:auto;">       
          <?php echo $terms_conditions_content; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>       
      </div>
      </form>
    </div>
  </div>
</div>
<!-----//signup--->
<?php }else{ ?>
<div class="top-header" id="home">
  <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <?php 
        if( $hdr_user_data->group_id == 4 ){
          $dashboard_url = $this->Url->build('/owner/dashboard');
        }else{
          $dashboard_url = $this->Url->build('/tenant/dashboard');
        }
      ?>
      <a class="btn btn-top" href="<?php echo $dashboard_url; ?>"><i class="fa fa-user" style="color: #ff3131;"></i> Dashboard</a>
    </div>
    <div class="btn-group">
      <a class="btn btn-top" href="<?php echo $this->Url->build('/users/logout'); ?>"><i class="fa fa-unlock-alt" style="color: #ff3131;"></i> Sign out </a>
    </div>
  </div>
</div>
<?php } ?>
<!-- //top header -->

<section class="top-section">
  <div class="container">
    <div class="media-container-row container">
      <div class="card col-12 col-md-6 align-center col-lg-4 header-middle">        
        <?= $this->Form->create(null,[                
          'url' => ['controller' => 'search', 'action' => ''],
          'class' => '',
          'type' => 'GET'
        ]) ?>
          <input type="search" name="search" name="query" placeholder="Search here..." required="" value="<?= isset($query) ? $query : '' ?>">
          <input type="submit" value=" ">
          <div class="clearfix"></div>
        <?= $this->Form->end() ?>


      </div>
      <div class="card col-8 col-md-6 align-center col-lg-4">
        <div class="img-responsive">
          <h1>Rental App</h1>
        </div>


      </div>
      <div class="card col-12 col-md-6 align-center col-lg-4">
        <ul class="social-nav model-3d-0 footer-social social">
          <li class="share"></li>
          <li>
            <a href="<?= $companyDetails->facebook ?>" class="facebook">
              <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="<?= $companyDetails->twitter ?>" class="twitter">
              <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="<?= $companyDetails->instagram ?>" class="instagram">
              <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
              <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
            </a>
          </li>
          <li>
            <a href="<?= $companyDetails->linkedin ?>" class="pinterest">
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
          <li class="nav-item <?php echo $front_nav_selected == 'home' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo $this->Url->build("/"); ?>">Home</a>
          </li>
          <li class="nav-item <?php echo $front_nav_selected == 'about-us' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo $this->Url->build("/about-us"); ?>">About</a>
          </li>
          <li class="nav-item dropdown has-mega-menu <?php echo $front_nav_selected == 'products' ? 'active' : ''; ?>">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
            <div class="dropdown-menu">
              <?php foreach($productCategories as $category){ ?>
                <?php $category_slug = Inflector::slug($category->name, "-"); ?>
                <a class="dropdown-item" href="<?php echo $this->Url->build('/products/listing/' . $category->id . '/' . $category_slug); ?>"><?php echo $category->name; ?></a>
              <?php } ?>
            </div>
          </li>
          <li class="nav-item <?php echo $front_nav_selected == 'faq' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo $this->Url->build('/faq'); ?>">FAQs</a>
          </li>
          <li class="nav-item <?php echo $front_nav_selected == 'contact-us' ? 'active' : ''; ?>">
            <a class="nav-link" href="<?php echo $this->Url->build("/contact-us"); ?>">Contact Us</a>
          </li>

          <li class="nav-item" style="background-color: #ff3131;margin-left:5px;">
            <a class="nav-link" href="<?php echo $this->Url->build('/cart') ?>"><i class="fa fa-shopping-cart"></i> Cart</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</section>