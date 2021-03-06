  <?php echo $this->partial('partials/customerRegister'); ?>

<header>
 <div class="navbar yamm  topbar  hidden-xs hidden-sm ">
  <div class="container">
  <ul class="nav navbar-nav navbar-left">
  <h3 class="number"> <i class="fa fa-phone number"></i> 0844 087 4896</h3>
  </ul>

      <ul class="nav navbar-nav navbar-right">


        <li class="dropdown  yamm-fw">  
            <a class=" dropdown-toggle fa fa-user fa-2x" data-toggle="dropdown"></a>

          <ul class="dropdown-menu">
            <li><a href="/signup/end">Sign Out</a></li>
            <li role="separator" class="divider"></li>
            
          </ul>
        <a class="fa fa-plus-circle fa-2x" href="/account/addproperty">&nbsp;Sell / Rent Property</a>
                <a class="fa fa-plus-circle fa-2x" href="/account/addproperty">&nbsp;Rent Room</a>


        <a class="fa fa-comment fa-2x   " href="/blog">&nbsp;Blog</a>
        


          <ul class="dropdown-menu" role="menu">
 <div class="row">
  <div class="col-md-4">  

<form class="form-horizontal login" data-toggle="validator" role="form" id="login" action="/signup/start" method="post">
  <h3 id="signin">Sign In</h3>  
  <div class="form-group">
    <!--<label for="name" class="col-sm-2 control-label">Name</label>-->
    <div class="col-sm-10">
    <label class="loginname">Username</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Username" required>
    </div>
  </div>
  <div class="form-group">
    <!--<label for="password" class="col-sm-2 control-label">Password</label>-->
    <div class="col-sm-10">
    <label class="loginname">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required >
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary login-button">Sign in</button>
      </div>
    </div>
  </form>
  </div>




<!-- Register-->
<div class="col-md-3">
<div class="register">
<h3 class="text-center">New Customer</h3>
<br>
<p class="text-center">New to our website? Create an account today to treat yourself withnew property</p><br>
<button type="submit"data-toggle='modal' data-target='#customerRegister' class="btn btn-success registerButton">New Customer</button>
</div>
</div>
</div><!-- /. Row end-->
    </ul><!-- /. End Dropdown menu -->
    </li>
  </ul>

  </div><!-- /.container-fluid -->
  </div>


<!-- Second nav bar -->
<div class="secondnavbar">
  <nav class="navbar yamm   navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <div class="topnavheader">
          <img src="/images/logo.png" class="logotop hidden-md hidden-lg">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        </div>
<!--       <img class="mainlogo" src="/images/logo.png" alt="log"/>
 -->    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <img src="/images/logo.png" class="logo hidden-sm hidden-xs">
      <ul class="nav navbar-nav">
       
        <li><a href="/index">Home</a></li>
  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="/about/services/#targetname1">Sell your home</a></li>
                      <li><a href="/about/services/#targetname2">Spare room</a></li>
                      <li><a href="/about/services/#targetname3">Sweet service</a></li>

                    </ul>
                  </a>
                </li>        

        <li><a href="/about/valuation">Valuation</a></li>
        <li><a href="/advice/index">Advice</a></li>
        <li><a href="/about/contact">Contact Us</a></li>
        <li><a href="/account">My Account</a></li>


      </ul>
      <!-- Form on the header -->


    </div>
   </div><!-- /.navbar-collapse -->

</nav>
</div>
  </header>
<div class="container">
       <p class="flashOutput"><?php $this->flash->output() ?></p> 
</div>

    <style>
.loginname {
  margin-left: 20%;
}

    .logotop{
      width: 30%;
    }
   .topnavheader{
      margin-top:10%;
    }

    .style input{
      height: 30px;
      width: 300px;
    }
    .logo{
    width: 13%;
    height: 44px;
    float: left;
    }
    .dropdown-menu {
      z-index: 9999;
    }
     .yamm .dropdown-menu li{
      text-align: left;
    }

    .yamm h4{
      text-align: left;
    }

    .yamm .nav,
    .yamm .collapse,
    .yamm .dropup,
    .yamm .dropdown {
      position: static;
    }
    .yamm .container {
      position: relative;

    }
    .yamm .dropdown-menu {
      left: auto;
    }
    .yamm .yamm-content {
      padding: 20px 30px;
    }
    .yamm .dropdown.yamm-fw .dropdown-menu {
      left: 0;
      right: 0;
    
    }
    .login{
      margin-left: 80px;
     margin-top: 20px;
     border-right: 1px solid silver;
    }
    .login input{
      width: 200px;
      margin-left: 50px;
}
   .login .login-button{
      margin-bottom: px;
      margin-left: 45px;
}
#bs-example-navbar-collapse-1{
  margin-top: 1%;
  font-size: 20px;
}
#bs-example-navbar-collapse-1 li{
  font-size: 20px;
  margin-left: 10px;
}

    /*  Hover affect  */
 /*   ul.nav li.dropdown:hover > ul.dropdown-menu {
    display: block;  */  

.register{

   border-right: 1px solid silver;
margin-top: 20px;
margin-bottom: 40px;
}
.registerButton {
  margin-top: 50px;
  margin-left: 80px;

}

 .modal-backdrop {
      z-index: 1;
    }


  #signin{
    margin-left: 117px;
  }

/*  first nav bar*/
.topbar{
  background-color: #44b645;
}
.topbar ul h4{
  color: white;
}
.fa-user {
  color: white;
    float: right;
    margin-right: 50px;
}
.fa-plus-circle {
  color: white;
    float: right;
    font-size: 18px;
}

.fa-comment {
    color: white;
    float: right;
    font-size: 18px;

}


/*  second nav bar*/
.secondnavbar{
  margin-top: -20px;
}

.mainlogo{
height: 90px;
  width: 192px;
  margin-top: 1px;
  margin-bottom: -21px;
}
.number {
  color: white;
}

</style>




</header>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>