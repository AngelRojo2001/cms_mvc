<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BackEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="/views/images/icono.jpg">

	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/style.css">
	<link rel="stylesheet" href="views/css/fonts.css">
    <link rel="stylesheet" href="views/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="views/css/jquery-ui.min.css">
	<link rel="stylesheet" href="views/css/sweetalert.css">
	<link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">
	<link rel="stylesheet" href="views/css/jquery-ui.min.css">

	<script src="views/js/jquery-2.2.0.min.js"></script>
	<script src="views/js/bootstrap.min.js"></script>
	<script src="views/js/jquery.fancybox.js"></script>
	<script src="views/js/jquery.dataTables.min.js"></script>
	<script src="views/js/dataTables.bootstrap.min.js"></script>
	<script src="views/js/dataTables.responsive.min.js"></script>
	<script src="views/js/responsive.bootstrap.min.js"></script>
	<script src="views/js/jquery-ui.min.js"></script>
	<script src="views/js/sweetalert.min.js"></script>

</head>

<body>

	<div class="container-fluid">

		<section class="row">

		

		<!--=====================================
		COLUMNA CONTENIDO        
		======================================-->
		
			

			<!--=====================================
			SUSCRIPTORES         
			======================================-->
			
			<div id="suscriptores" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
			 
			 <div>

				<table id="tablaSuscriptores" class="table table-striped dt-responsive nowrap">
			    <thead>
			      <tr>
			        <th>Usuario</th>
			        <th>Contraseña</th>
			        <th>Email</th>
			        <th>Acciones</th>
                    <th></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>John</td>
			        <td>Doe</td>
			        <td>john@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			      <tr>
			        <td>Mary</td>
			        <td>Moe</td>
			        <td>mary@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			      <tr>
			        <td>July</td>
			        <td>Dooley</td>
			        <td>july@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			        <tr>
			        <td>John</td>
			        <td>Doe</td>
			        <td>john@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			      <tr>
			        <td>Mary</td>
			        <td>Moe</td>
			        <td>mary@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			      <tr>
			        <td>July</td>
			        <td>Dooley</td>
			        <td>july@example.com</td>
			        <td><span class="btn btn-danger fa fa-times quitarSuscriptor"></span></td>
                    <td></td>
			      </tr>
			    </tbody>
			  </table>

			  <button class="btn btn-warning pull-right" style="margin:20px;">Imprimir Suscriptores</button>
			  </div>

    		</div>
		
			<!--====  Fin de SUSCRIPTORES  ====-->

		<!--====  Fin de COLUMNA CONTENIDO  ====-->

		</section>
	
	</div>

	<script src="views/js/script.js"></script>
	
</body>

</html>