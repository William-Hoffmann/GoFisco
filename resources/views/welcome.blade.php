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
	
	<!-- Brand Logo -->
	<a class="navbar-brand mr-auto" href="#"><img src="/img/logo.png" alt="GoFisco" class="brand"></a>
	
	<!-- Mobile Button -->
	<button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
	
	<!-- Menu -->
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav ml-auto">
		
		<!-- Bigger Devices -->
        @auth
		<li class="nav-item dropdown d-none d-lg-block">
			<div class="btn-group">
			  <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				{{ Auth::user()->name }}
			  </button>
			  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
				<a class="dropdown-item" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Sair') }}</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			  </div>
			</div>
		</li>
		@else
		<li class="nav-item mt-2 mb-2">
		  @if (Route::has('login'))
			<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
		  @endif
		</li>
		<li class="nav-item mt-2 mb-2">
		  @if (Route::has('register'))
			<a class="nav-link" href="{{ route('register') }}">{{ __('Criar Conta') }}</a>
		  @endif
		</li>
		@endauth
     
		<!-- Smaller Devices -->
		<li class="nav-item dropdown d-lg-none mt-2 mb-2">
		@auth
			<a class="nav-link dropdown-toggle" href="#" data-target="#smallerscreenuser" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
			  {{ Auth::user()->name }}
			</a>				
			<div class="collapse navbar-collapse" id="smallerscreenuser">
				<ul class="navbar-nav ml-auto">
					<li class="sub-item"><a class="dropdown-item" href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
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

<main role="main">

  <!-- Carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="4" class=""></li>
	  <li data-target="#myCarousel" data-slide-to="5" class=""></li>
    </ol>
	
    <div class="carousel-inner">
	
	  <!-- Slide 1 Apresentação -->
      <div class="carousel-item active">
		<div class="container">
			<div class="row">
			<div class="col-md-8 col-sm-12 order-2">
			  <div class="carousel-caption text-center">
				<h4 class="text-muted"><small>Apresentando</small></h4>
				<h1 class="display-4 mb-4">GoFisco</h1>
				<h4 class="mb-2"><small><b>Mas, o que é GoFisco.com?</b></small></h4>
				<p>É uma ferramenta pensada e criada para gestores ficais de empresas e também para qualquer pessoa que precise de informações fiscais detalhadas sobre produtos.</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-4 order-1">
				<div class="carousel-img-slide-one"></div>
			</div>
			</div>
        </div>
      </div>
	
	  <!-- Slide 2 Motivo -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-12 col-sm-12 order-2">
			  <div class="carousel-caption text-center">
				<h4 class="text-muted"><small>Por que utilizar o GoFisco.com?</small></h4>
				<h3 class="mb-4">Nos próximos slides você vai ver motivos suficiente para utilizar nossa ferramenta!</h3>
				<small>Não é piada... É sério!</small>
			  </div>
			</div>
			</div>
        </div>
      </div>
	
	  <!-- Slide 3 Serviços -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-8 col-sm-12 order-1">
			  <div class="carousel-caption text-center">
				<h4 class="text-muted"><small>Disponibilidade</small></h4>
				<h1 class="display-4 mb-4">Faça mais, Procure menos</h1>
				<p>Sabemos como é frustrante achar uma informação sólida e simples na internet quando o assunto é fisco, por essa razão que o GoFisco foi criado, para agrupar e simplificar informações em um só lugar!</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-4 order-2">
				<div class="carousel-img-slide-two"></div>
			</div>
			</div>
        </div>
      </div>
	
	  <!-- Slide 4 Segurança -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-6 col-sm-12 order-2">
			  <div class="carousel-caption text-center">
				<h4 class="text-muted"><small>Segurança</small></h4>
				<h1 class="display-4 mb-4">Dados na Nuvem</h1>
				<p>Acesse informações sempre que você precisar, sem a necessidade de carregar arquivos, pen-drives ou outras formas de armazenamento.</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-6 order-1">
				<div class="carousel-img-slide-three"></div>
			</div>
			</div>
        </div>
      </div>
	
	  <!-- Slide 5  -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-8 col-sm-12 order-1">
			  <div class="carousel-caption text-center">
				<h4 class="text-muted"><small>Serviços</small></h4>
				<h1 class="display-4 mb-4">Apps Prontos</h1>
				<p>Acesso rápido e direto a cálculos fiscais, downloads e consultas!</p>
			  </div>
			</div>
			<div class="d-none d-md-block col-md-4 order-2">
				<div class="carousel-img-slide-four"></div>
			</div>
			</div>
        </div>
      </div>
	
	  <!-- Slide 6 Cadastro -->
      <div class="carousel-item">
		<div class="container">
			<div class="row">
			<div class="col-md-12 col-sm-12 order-1">
			  <div class="carousel-caption text-center big-text">
				<h1 class="display-3 mb-3">Gostou?</h1>
				<h4><small class="text-muted mb-3">Então o você está esperando para se cadastrar e aproveitar todos os recursos, e o melhor... é de graça!</small></h4>
				@if (Route::has('register'))
					<a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-success btn-lg">Clique aqui e faça o seu cadastro!</button></a>
				@endif
			  </div>
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

  <hr class="featurette-divider">

  <!-- Featurette -->
  <div class="divider-1">
	<div class="container">
		<div class="row justify-content-center">
			<p class="card-text display-4 text-center mt-5">Ainda não convencido?</p>
			<p class="card-text display-4 text-center mb-5">Olhe o que mais você pode fazer!</p>
		</div>
	</div>
  </div>
	
  <hr class="featurette-divider">
	
  <div class="container marketing">
	
    <div class="row featurette">
      <div class="col-sm-12 col-md-7 order-md-1">
        <h2 class="featurette-heading text-primary">Exporte! <span class="text-muted"> Crie planilhas com os dados pesquisados!</span></h2>
        <p class="lead">Com apenas um clique você pode exportar informações pesquisadas de NCM, CEST e MVA. Ou se preferir exportar a tabela completa com todos nossos registros! Exatamente... tudo!</p>
      </div>
      <div class="d-none d-md-block col-md-5 order-md-2">
        <div class="featurette-img-one bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"></div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-sm-12 col-md-7 order-md-2">
        <h2 class="featurette-heading text-primary">Dúvidas? <span class="text-muted"> Use o fórum para resolver seus problemas!</span></h2>
        <p class="lead">Criamos o fórum com o íntuito de os próprios usuários se ajudarem, quando você não entende uma informação ou ela não está presente.</p>
      </div>
      <div class="d-none d-md-block col-md-5 order-md-1">
        <div class="featurette-img-two bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"></div>
      </div>
    </div>

    <hr class="featurette-divider">
	
	<div class="row featurette">
      <div class="col-sm-12 col-md-7 order-md-1">
        <h2 class="featurette-heading text-primary">Calcule! <span class="text-muted"> Não quebre mais a cabeça!</span></h2>
        <p class="lead">Qualquer informação que você precisar calcular, temos a aplicação pronta, fácil e eficaz.</p>
      </div>
      <div class="d-none d-md-block col-md-5 order-md-2">
        <div class="featurette-img-three bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"></div>
      </div>
    </div>
	
  </div>
	
  <hr class="featurette-divider">
  
  <div class="divider-2">
	<div class="container">
		<div class="row justify-content-center">
			<p class="card-text display-4 text-center mt-5">E agora?</p>
			<p class="card-text display-4 text-center mb-5">#Partiu fazer o GoFisco sua ferramenta fiscal?!</p>
			@if (Route::has('register'))
				<a href="{{ route('register') }}"><button type="button" class="btn btn-primary btn-success btn-lg mb-5">Clique aqui e faça o seu cadastro!</button></a>
			@endif
		</div>
	</div>
  </div>

  <!-- Footer -->
  <footer class="footer pt-5">
	<div class="container">
    <div class="d-flex flex-wrap py-5 mb-5">
      <div class="col-12 col-lg-4">
		<div class="footer-logo"></div>
      </div>
      <div class="col-6 col-lg-4">
        <h5 class="mb-3">Sobre</h5>
        <ul>
          <li class="mb-3"><a href="/">Sobre nós</a></li>
		  <li class="mb-3"><a href="/">Termos de Uso</a></li>
		  <li class="mb-3"><a href="/">Ajuda</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-4">
        <h5 class="mb-3">Politicas</h5>
        <ul>
          <li class="mb-3"><a href="/">Privacidade</a></li>
		  <li class="mb-3"><a href="/">Termos de Uso</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="container py-4 flex-justify-between">
      <ul class="d-flex">
        <li class="mr-auto">© GoFisco 2019 - Todos direitos reservados</li>
        <li class="ml-auto">Site criado com muito esmero por <a href="#">Grupo WM</a></li>
		<li class="ml-auto"><a href="#">Voltar ao Topo</a></li>
      </ul>
    </div>
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