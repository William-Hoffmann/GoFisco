<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
	
	<!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="/css/normalizer.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/app.css">

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
 
	<!-- Brand Logo -->
    <a class="navbar-brand mr-auto" href="/home"><img src="/img/logo.png" alt="GoFisco" class="brand"></a>
	
	<!-- Mobile Button -->
    <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	
	<!-- Menu -->
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav ml-auto">
		
		<!-- Bigger Devices -->
		@auth
		<li class="nav-item dropdown d-none d-lg-block">
			<div class="btn-group">
			  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				{{ Auth::user()->name }}
			  </button>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="#">Perfil</a>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			  </div>
			</div>
		</li>
		@endauth
		
		<!-- Smaller Devices -->
		<li class="nav-item dropdown d-lg-none mt-2 mb-2">
			<a class="nav-link dropdown-toggle" href="#" data-target="#smallerscreenmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
			  Menu
			</a>
			<div class="collapse navbar-collapse row" id="smallerscreenmenu">
				<ul class="navbar-nav ml-auto col-6">
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/search/ncm">Consulta NCM</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/search/cest">Consulta CEST</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/search/mva">Consulta MVA</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/search/grupo">Consulta por Grupo</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/tools/ajuste">Ajuste de MVA</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/tools/calculadora">Calculadora Tributária</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/tools/simulador">Simulador de NFe</a></li>
				</ul>
				<ul class="navbar-nav ml-auto col-6">
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/tools/pautas">Pautas Fiscais</a></li>
					<li class="sub-item"><a class="dropdown-item" href="/dashboard/tools/pautas">Figura Fiscal Maker</a></li>
					<li class="sub-item"><a class="dropdown-item" href="#">Inf.Fiscais</a></li>
					<li class="sub-item"><a class="dropdown-item" href="#">Fórum</a></li>
					<li class="sub-item"><a class="dropdown-item" href="#">Entrar em Contato</a></li>
					<li class="sub-item"><a class="dropdown-item" href="#">Ajuda</a></li>
				</ul>
			</div>
		</li>
		<li class="nav-item dropdown d-lg-none mt-2 mb-2">
		@auth
			<a class="nav-link dropdown-toggle" href="#" data-target="#smallerscreenuser" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
			  {{ Auth::user()->name }}
			</a>				
			<div class="collapse navbar-collapse" id="smallerscreenuser">
				<ul class="navbar-nav ml-auto">
					<li class="sub-item"><a class="dropdown-item" href="#">Perfil</a></li>
					<li class="sub-item"><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a></li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
				</ul>
			</div>
		@endauth
		</li>
			
		</ul>
	</div>
	
  </nav>
</header>

<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-lg-block">
        <ul class="list-group sticky-top sticky-offset">
            <!-- Separator -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>CONSULTAS</small>
            </li>
            <!-- /END Separator -->
            <a href="/dashboard/search/ncm" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center effect">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Consulta de NCM</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <a href="/dashboard/search/cest" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Consulta de CEST</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <a href="/dashboard/search/mva" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Consulta por MVA [%]</span>
                </div>
            </a>
			<a href="/dashboard/search/grupo" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Consulta por Grupo</span>
                </div>
            </a>
            <!-- Separator -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>FERRAMENTAS</small>
            </li>
            <!-- /END Separator -->
            <a href="/dashboard/tools/ajuste" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Ajuste de MVA</span>
                </div>
            </a>
            <a href="/dashboard/tools/calculadora" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Calculadora Tributária</span>
                </div>
            </a>
			<a href="/dashboard/tools/simulador" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Simulador de NFe</span>
                </div>
            </a>
			<a href="/dashboard/tools/pautas" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Pautas Fiscais</span>
                </div>
            </a>
			<a href="/dashboard/tools/ffm" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">FFM - Figura Fiscal Maker</span>
                </div>
            </a>
            <!-- Separator -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>INFO</small>
            </li>
            <!-- /END Separator -->
			<a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Informações Fiscais</span>
                </div>
            </a>
			<a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Fórum</span>
                </div>
            </a>
			<a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Entrar em Contato</span>
                </div>
            </a>
			<a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Ajuda</span>
                </div>
            </a>
			<li class="list-group-item sidebar-separator text-muted d-flex align-items-center menu-collapsed">
                <small>GoFisco tool v1.0a</small>
            </li>
        </ul>
        <!-- List Group END-->
    </div>
    <!-- sidebar-container END -->
    
    <div class="col py-3">
		@yield('content')
    </div> 

</div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="/js/collapse-menus.js"></script>
	@yield('js')
	<script type="text/javascript">
		$(document).ready( function () {
			$('#dtable').DataTable({
				paging: false,
				searching: false,
				"language": {
					"info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
					"infoEmpty": "Mostrando 0 até 0 de 0 registros"
				}
			});
			
			$(function() {
				$('.mask').maskMoney({ decimal: '.', thousands: '', precision: 2 });
			});			
		});
	</script>

</body>
</html>
