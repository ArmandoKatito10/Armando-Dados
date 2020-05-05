<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Armando Katito">
    <title>O mantra da produtividade</title>
    
	<!-- Bootstrap CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
     <!-- Costumização por css-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">


    <link href="_bootstrap/bootstrap4.css" media="screen" rel="stylesheet" />
    <!-- Estilos customizados para listar as tarefas -->
    <!--Este está a fazer uma confusão com a outras css portanto retirar dele o encensial-->
    <link href="css/estilo.css" rel="stylesheet">
    <!--Font Awesome-->
    <script src="../_js/Fontawesome-all.js"></script>


    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.min.css">
    <!-- As fontes da Google -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<script src="../js/Fontawesome-all.js"></script>

</head>
<body>


<header class="navbar-fixed-top">
	<div class="container">
    	<div class="row">
        	<div class="header_top">
        		<div class="col-md-2">
            		<div class="logo_img">
						<a href="#"><img src="../images/logo.png" alt="logoimage"></a>
					</div>
				</div>
					
				<div class="col-md-10">
					<div class="menu_bar">	
						<nav role="navigation" class="navbar navbar-default">
							<div class="navbar-header">
                                <button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle Navegação</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
							   </div>
							   
							  <div class="collapse navbar-collapse" id="navbar">
                            
									<ul class="nav navbar-nav">
									  <li>
										  <a href="#home" class="js-target-scroll"  aria-haspopup="true"
										  aria-expanded="false"><i class="fas fa-home" data-toggle="tooltip"
										  title="Início"></i></a>
									
									</li>
									  <li>
										<a href="#blog" class="js-target-scroll" aria-haspopup="true"
										aria-expanded="false">
										<i class="fas fa-bell" data-toggle="tooltip"
										title="Notificações"></i><span class="badge badge-danger small">3</span>

									  </a>
									
									</li>
									  <li  class="dropdown">
										<a href="#"  class="dropdown-toggle" data-toggle="dropdown" 
										id="dropdownMenuLink" data-toggle="dropdown" >
										<i class="fas fa-user ml-5" data-toggle="tooltip"
										title="Seu Perfil"></i>
										Armando Katito</a>
									 	 <ul class="dropdown-menu"> 
											<li><a href="#"  title="Editar Perfil">
												<i class="fas fa-file-powerpoint"></i>editar perfil</a></li>
											<li>
												<a href="#" data-toggle="tooltip"
												title="Veja as sua Tarefas">
												 <i class="fas fa-project-diagram"></i>
												 ver tarefas</a>
											</li>
											<li><a href="Logout.php"><i class="fas fa-power-off" data-toggle="tooltip"
												title="Sair"></i>sair</a></li>
										</ul>
									  </li>
									</ul>      
                          		</div>
						</nav>
					</div>
    	        </div>
			  
			  </div>
			</div>
		</div>
</header>


<section id="services" class="padding_bottom_none our_service_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2>Cadastrar Tarefas</h2>
					<?php include ('Formulario.php'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

	<!--Conteiner das tarefas-->
	<section id="pricing" class="price_table_bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section_heading section_heading_2">
							<h2> GERENCIADOR DE TAREFAS </h2>
						
							<h4> Confira  & verifique quais tarefas concluídas & Notifique o seu team de desenvolvimento</h4>
						</div>
								
		
									<div  class="col-md-3">	
									<div id = "Pause-1" class="table-1">
										<div class = "titulo"><h4> BackLogs </h4></div>	
										<?php if($exibir_tabela) : ?>
										<?php include ('Tabelabacklog.php'); ?>
										<?php endif; ?>
									</div>
								</div>
		
								<div  class="col-md-3">	
									<div id = "Pause-2" class="table-1">
										<div class = "titulo"><h4>Em produção</h4></div>
									</div>
								</div>
								
								<div class="col-md-3">	
									<div id = "Pause-3"  class="table-1">
									<div class = "titulo"><h4>Em pause</h4></div>	
									</div>
								</div>
								
								<div  class="col-md-3">	
									<div id = "Pause-4" class="table-1">
		
									<div class = "titulo"><h4> Concluídas </h4></div>	
		
									</div>
								</div>			
					</div>
				</div>
			</div>
		</section>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/interface.js"></script> 
<script type="text/javascript"> 
	$(document).ready(function(){
	$("#menu_slide").click(function(){
		$("#navbar").slideToggle('normal');
	});
	});
 </script>
<!--Menu Js Right Menu-->
<script type="text/javascript">
$(document).ready(function(){
  $('#navbar > ul > li:has(ul)').addClass("has-sub");
  $('#navbar > ul > li > a').click(function() {
    var checkElement = $(this).next();
    $('#navbar li').removeClass('dropdown');
    $(this).closest('li').addClass('dropdown');	
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('dropdown');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#navbar ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });
});
<!--end-->
</script>
<script type="text/javascript">	
$("#navbar").on("click", function(event){
    event.stopPropagation();
});
$(".dropdown-menu").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $(".dropdown-menu").slideUp('normal');
});	

$(".navbar-header").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $("#navbar").slideUp('normal');
});		
</script>
</body>
<!-- JS Plugins -->
  </html>
