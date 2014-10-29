<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mand | Gestão de Projetos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<!-- Inclui o arquivos para validação de campos-->
<script type="text/javascript" src="includes/js/ValidaCampos.js"></script>
<!-- -->

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body background="assets/img/work.jpg"> 
<div class="container">
  <div class="row login-container animated fadeInUp">  
        <div class="col-md-7 col-md-offset-2 tiles white no-padding">
		 <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal">Mand Gestão de Projetos</h2>
          <p>Seja bem vindo! <br>Use o seu usuario e senha para acessar o sistema</p>
          
		  
        </div>
		<div class="tiles grey p-t-20 p-b-20 text-black">
			<form class="animated fadeIn" id="frm_login" name="frm_login" method="POST" action="includes/php/validaLogin.php">     
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6 ">
                        <input name="login_Email" id="login_Email" type="text"  class="form-control" placeholder="E-mail">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="login_Senha" id="login_Senha" type="password"  class="form-control" placeholder="Senha" onkeypress="Entar(frm_login);">
                      </div>
                      
                    </div>
				<div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
				  <div class="control-group  col-md-10">
								<button type="button" class="btn btn-primary btn-cons" id="login_toggle"
                    onClick="validaLogin();document.forms[0].submit()">Entrar</button>

				  </div>
				  </div>
			  </form>
			<form id="frm_register" class="animated fadeIn" style="display:none">
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_username" id="reg_username" type="text"  class="form-control" placeholder="Username">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_pass" id="reg_pass" type="password"  class="form-control" placeholder="Password">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-12">
                        <input name="reg_mail" id="reg_mail" type="text"  class="form-control" placeholder="Mailing Address">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_first_Name" id="reg_first_Name" type="text"  class="form-control" placeholder="First Name">
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <input name="reg_first_Name" id="reg_first_Name" type="password"  class="form-control" placeholder="Last Name">
                      </div>
                    </div>	
                    <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                      <div class="col-md-12 ">
                        <input name="reg_email" id="reg_email" type="text"  class="form-control" placeholder="Email">
                      </div>
                    </div>						
			</form>
		</div>   
      </div>   
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="assets/js/login_v2.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>



</html>