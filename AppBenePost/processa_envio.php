<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);

//print_r($_POST);
class Mensagem {
    private $para =null;
    private $assunto = null;
    private $mensagem = null;
    public $status = array( 'codigo_status' => null, 'descricao_status' => '');
public function __get ($atributo){
    return $this->$atributo;

}
public function __set ($atributo, $valor){
    $this->$atributo = $valor;
}
public function mensagemValida(){
    //com o operador ternário ||, podemos fazer uma verificação de condição, se a condição for verdadeira, retorna o valor da condição, se não, retorna outro valor
    if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
        return false;
    }
    return true;
}
}
$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);
//verifica se a mensagem é válida
if(!$mensagem->mensagemValida()){
    echo 'Mensagem enviada com sucesso!';
    header('Location: index.php');
} 
   

    //configurações do servidor de email
    $mail = new PHPMailer(true);

try {
    //configuracao do servidor de email
    $mail->SMTPDebug = false;                      //Desativa o debug
    $mail->isSMTP();                                            //Ativa o SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Seta o host do servidor de email
    $mail->SMTPAuth   = true;                                   //Ativa a autenticação
    $mail->Username   = 'benetesla@gmail.com';                     //SMTP usuário
    $mail->Password  = '#369369#69';                               //SMTP senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Desativa o uso de SSL
    $mail->Port = 465;                                    //TCP porta do servidor de email

    //Recebe os dados do formulário
    $mail->setFrom('benetesla@gmail.com', 'Benetesla');
    $mail->addAddress($mensagem-> __get('para'));     //Adiciona um destinatário

    //Content
   $mail->isHTML(true);                                  //envia como HTML
			$mail->Subject = $mensagem->__get('assunto');
			$mail->Body    = $mensagem->__get('mensagem');
			$mail->AltBody = 'É necessario utilizar um client que suporte HTML para ter acesso total ao conteúdo dessa mensagem';

			$mail->send();
    $mensagem->status['codigo_status'] = 1;
    $mensagem->status['descricao_status'] = 'Mensagem enviada com sucesso!';
    
} catch (Exception $e) {
    $mensagem->status['codigo_status'] = 2;
    $mensagem->status['descricao_status'] = 'Erro ao enviar mensagem: ' . $mail->ErrorInfo;
   
}
?>
<html>
	<head>
		<meta charset="utf-8" />
    	<title>BenePost</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
	*{
		margin: 0;
		padding: 0;
	}
	body{
		
		background-color: gray;
		color: black;
		font-family: 'Roboto', sans-serif;
	
	 
	}
</style>
	</head>

	<body>

		<div class="container">
			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>BenePost</h2>
				<p class="lead">Este servico de email foi criado por benevanio!</p>
			</div>

			<div class="row">
				<div class="col-md-12">

					<?php if($mensagem->status['codigo_status'] == 1) { ?>

						<div class="container">
							<h1 class="display-4 text-success">Sucesso</h1>
							<p><?= $mensagem->status['descricao_status'] ?></p>
							<a href="index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
						</div>

					<?php } ?>

					<?php if($mensagem->status['codigo_status'] == 2) { ?>

						<div class="container">
							<h1 class="display-4 text-danger">Ops!</h1>
							<p><?= $mensagem->status['descricao_status'] ?></p>
							<a href="index.php" class="btn btn-secondary btn-lg mt-6 text-white">Voltar</a>
						</div>

					<?php } ?>

				</div>
			</div>
		</div>

	</body>
</html>