<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Administrator</title>

  <!--CSS-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/fontawesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/utiladmin.css">
  <link rel="stylesheet" type="text/css" href="css/mainadmin.css">
  
  
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
  <section id="container" class="">
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" style="color: white;" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>ADMINISTRATOR</b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="/login">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion" style="display: block;">
          <p class="centered"><a href="profile.html"><img src="https://www.xovi.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin</h5>
          <li class="mt">
            <a href="javascript:;" class="/">
              <i class="fa fa-home"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu dcjq-parent-li">
          <a class="javascript:;" href="/admin-input">
              <i class="fa fa-book"></i>
              <span>Input</span>
            </a>
          </li>
          <li class="sub-menu dcjq-parent-li">
          <a class="active" href="/admin-update">
              <i class="fa fa-book"></i>
              <span>Edit</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
    <!--main content start-->
    <section id="main-content" style="margin-left: 210px;">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12 main-chart">
            <div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Input Data
				</span>

				<label class="label-input100" for="name">Nama Fasilitas Kesehatan *</label>
				<div class="wrap-input100 validate-input">
                <div style="width: 100%;">
                <div class="custom-select" style="width:100%">
                    <select>
                        <option value="0">Select:</option>
                        <option value="1">...</option>
                        <option value="2">...</option>
                        <option value="3">...</option>
                    </select>
                    </div>
                    </div>
					<span class="focus-input100"></span>
        </div>
        
        <label class="label-input100" for="name">Deskripsi *</label>
				<div class="wrap-input100 validate-input">
					<textarea id="email" class="input100 form-control" type="text" placeholder="Deskripsi" row="3"></textarea>
					<span class="focus-input100"></span>
				</div>

        <label class="label-input100" for="name">Jenis Fasilitas Kesehatan *</label>
				<div class="wrap-input100 validate-input">
        <fieldset class="" style="padding: 10px">
          <div class="row">
            <div class="col-sm-10">
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="RumahSakit" name="JenisFaskes" checked>
                  Rumah Sakit
                </label>
              </div>
              <br>
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="Klinik" name="JenisFaskes">
                  Klinik
                </label>
              </div>
              <br>
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="Puskesmas" name="JenisFaskes">
                  Puskesmas
                </label>
              </div>
              <br>
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="Lab" name="JenisFaskes">
                  Lab.
                </label>
              </div>
              <br>
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="Lainnya" name="JenisFaskes">
                  Lainnya
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <span class="focus-input100"></span>
				</div>

        <label class="label-input100" for="name">Jenis Test yang Tersedia *</label>
				<div class="wrap-input100 validate-input">
        <fieldset class="" style="padding: 10px">
          <div class="row">
            <div class="col-sm-10">
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="Rapid" name="JenisTest" checked>
                  Rapid
                </label>
              </div>
              <br>
              <div class="form-check">
                <label class="radioCs">
                  <input type="radio" value="PCR" name="JenisTest">
                  PCR/Swab
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Range Harga *</label>
				<div class="wrap-input100">
					<input id="phone" class="input100 form-control" type="text" placeholder="Range Harga">
					<span class="focus-input100"></span>
				</div>

        <label class="label-input100" for="email">Telepon *</label>
				<div class="wrap-input100">
					<input id="phone" class="input100 form-control" type="text" name="phone" placeholder="Telepon">
					<span class="focus-input100"></span>
				</div>

        <label class="label-input100" for="email">Alamat *</label>
				<div class="wrap-input100">
					<input id="phone" class="input100 form-control" type="text" placeholder="Alamat">
					<span class="focus-input100"></span>
        </div>
        
        <div class="box-map">
          <div class="content-box-map">
          <img src="https://miro.medium.com/max/4064/1*qYUvh-EtES8dtgKiBRiLsA.png" class="align-self-center mr-3" style="width:100%; height:100%; border-radius: 10px">
          </div>  
        </div>
        <br>
        <div class="box-pickimage">
          <div class="content-box-pickimage">
          <a href="#"><img src="data:image/png;base64,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" class="align-self-center mr-3" style="width:100%; height:100%; border-radius: 10px"></a>
          </div>  
        </div>

				<div class="container-contact100-form-btn">
                <button class="contact100-form-btn" style="margin-right:5px;">
						<span>
							Save Edit
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
                    </button>    
                     <button class="contact100-form-btn" style="margin-left:5px;">
						<span>
							Delete
							<i class="zmdi zmdi-arrow-right m-l-8"></i>
						</span>
                    </button>
				</div>
			</form>
		</div>
        </div>
      </section>
    </section>
    <!--main content end-->
    
  </section>
  <!-- js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="js/jquery.sparkline.js"></script>
  <script src="js/common-scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 3px; z-index: auto; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; left: 207px; height: 658px; opacity: 0; display: none;"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; background: rgb(64, 64, 64); top: 655px; left: 0px; position: fixed; cursor: default; display: none; width: 207px; opacity: 0;"><div style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div>
  <script type="text/javascript" src="js/jquery.gritter.js"></script>
  <script type="text/javascript" src="js/gritter-conf.js"></script>
    </body>
</html>