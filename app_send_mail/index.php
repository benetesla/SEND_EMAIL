<html>
	<head>
		<meta charset="utf-8" />
    	<title>BenePost</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--este aplicativo foi desenvolvido durante as aulas do curso de php-->
<style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		
		background-color: gray;
		color: black;
		font-family: 'arial', sans-serif;
		overflow: hidden;
		}
</style>
	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="Logo.png" alt="" width="100" height="100">
				<h2>BenePost</h2>
				<p class="lead">Serviços de Email do Bene!</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="post">
							<div class="form-group">
								<label for="para">Para</label>
								<input name="para" type="text" class="form-control" id="para" placeholder="BeneTesla@gmail.com.br">
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea name="mensagem" class="form-control" id="mensagem"></textarea>
							</div>

							<button type="submit" class="btn btn-sucess btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>