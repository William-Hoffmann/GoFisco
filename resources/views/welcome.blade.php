<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>GoFisco.com - Ferramenta auxiliar para gestores fiscais</title>
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="/css/index.css" rel="stylesheet">
	<link href="/css/header.css" rel="stylesheet">
	<link href="/css/normalizer.css" rel="stylesheet">
	
</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
	<!-- Start Mobile First Button -->
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
    </button>
	<!-- End Mobile First Button -->
	<!-- Start Brand -->
	<a class="navbar-brand mr-auto" href="#">
		<img src="/img/logo.png" alt="GoFisco" class="brand">
	</a>
	<!-- End Brand -->
	
	<!-- Start Account Links -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
	  @if (Route::has('login'))
        @auth
			<ul class="navbar-nav ml-auto">
			@guest
			<li class="nav-item">
				<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			</li>
			@if (Route::has('register'))
				<li class="nav-item">
					<a class="nav-link" href="{{ route('register') }}">{{ __('Criar Conta') }}</a>
				</li>
			@endif
			@else
				<li class="nav-item dropdown d-none d-lg-block">
					<div class="btn-group">
					  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->name }}
					  </button>
					  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					  </div>
					</div>
				</li>
			@endguest	
		@else
			<li class="nav-item mt-2 mb-2">
			  <a class="nav-link" href="{{ route('login') }}">Fazer Login</a>
			</li>
			<li class="nav-item mt-2 mb-2">
			@if (Route::has('register'))
			  <a class="nav-link" href="{{ route('register') }}">Criar Conta</a>
			@endif
		@endauth
        </li>
	  @endif
      </ul>	  
    </div>
	<!-- End Account Links -->
  </nav>
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
    </ol>
	
    <div class="carousel-inner">
	
	  <!-- Slide 3 Database -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-sm-12 order-2">
			  <div class="carousel-caption text-center">
				<h1>BD Atualizado</h1>
				<p>O banco de dados de nossa aplicação é 100% revisada semanalmente para inclusão e remoção de informações e estamos diariamente evoluindo e melhorando nossos processos para uma plataforma cada vez mais rápida e responsiva.</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-6 order-1">
				<img src="/img/minis/carousel-db.png" alt="" class="carousel-img-db">
			</div>
			</div>
        </div>
      </div>

	  <!-- Slide 3 Diagrama -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="d-none d-md-block col-md-6 order-2">
				<img src="/img/minis/carousel-diag.png" alt="" class="carousel-img-diag">
			</div>
			<div class="col-md-6 col-sm-12 order-1">
			  <div class="carousel-caption text-center text-sm-right">
				<h1>Informações Interligadas</h1>
				<p>Nossas informações estão todas interligadas e de acesso e exportação rápida e prática.</p>
			  </div>
			</div>
			</div>
        </div>
      </div>
	  
	  <!-- Slide 4 Cadastrar -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-12 col-sm-12 order-1">
			  <div class="carousel-caption text-center big-text">
				<h1>Gostou?</h1>
				<h3>Então o você está esperando para se cadastrar e aproveitar todos os recursos, e o melhor... é de graça!</h3>
				@if (Route::has('register'))
					<a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-lg">Clique aqui e faça o seu cadastro!</button></a>
				@endif
			  </div>
			</div>
			</div>
        </div>
      </div>
	  
	  <!-- Slide 1 Pizza -->
      <div class="carousel-item active">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-sm-12 order-2">
			  <div class="carousel-caption text-center text-sm-left">
				<h1>GoFisco.com</h1>
				<p>GoFisco te ajuda a filtrar informações de forma  ágil e fácil. Com dados completos e atualizados, nossa ferramenta faz o simples e prático para que você que trabalha na área fiscal e contábil consiga realizar seus cadastros e lançamentos de forma correta.</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-6 order-1">
				<img src="/img/minis/carousel-pizza.png" alt="" class="carousel-img-pizza">
			</div>
			</div>
        </div>
      </div>	
		
    </div>
	
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
	
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
	
  <div class="container marketing">
	<hr class="featurette-divider">
    
	<div class="row">
      <div class="col-md-3 session-headings">
        <img src="/img/minis/heading-info.png" alt="Info" class="heading-icon" />
        <h2 class="heading-title">Informação</h2>
        <p>Dados completos e informações seguras e reais.</p>
      </div>
      <div class="col-md-3 session-headings">
        <img src="/img/minis/heading-time.png" alt="Info" class="heading-icon" />
        <h2 class="heading-title">Ganhe Tempo</h2>
        <p>Não perca tempo procurando informações na web. Reunimos todas em um único lugar</p>
      </div>
	  <div class="col-md-3 session-headings">
        <img src="/img/minis/heading-calc.png" alt="Info" class="heading-icon" />
        <h2 class="heading-title">Calculadora</h2>
        <p>Calcule ou simule valores de ST, MVA e mais!</p>
      </div>
	  <div class="col-md-3 session-headings">
        <img src="/img/minis/heading-excel.png" alt="Info" class="heading-icon" />
        <h2 class="heading-title">Planilhas</h2>
        <p>Exporte suas figuras fiscais criadas e outras tabelas em Excel.</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5" >
        <img src="/img/promo-img-1.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

  </div>


  <!-- FOOTER -->
  <footer class="container">
	<div class="row">
	  <div class="col-md-4"><p>© 2019 GoFisco.com</p></div>
	  <div class="col-md-4"><p><a href="#">Privacy</a></p></div>
	  <div class="col-md-4"><p><a href="#">Terms</a></p></div>
	</div>
  </footer>
  
</main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>