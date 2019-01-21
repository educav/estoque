<html>
<head>

<!--  depois baixar para o projeto -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/custom.css" rel="stylesheet">

<title>Controle de estoque</title>
</head>

<body>

	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos"> Estoque Laravel </a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos">Listagem</a></li>
				</ul>


				<ul class="nav navbar-nav navbar-right">
					<li><a href="/produtos">Listagem</a></li>
					<li><a href="/produtos/novo">Novo</a></li>
				</ul>


			</div>
		</nav>
		
		



		<div class="container">@yield('conteudo')</div>


		<footer class="footer">
			<p>© Livro de Laravel da Casa do Código.</p>

		</footer>

	</div>
</body>
</html>