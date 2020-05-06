<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "tiago.salgado@agenciasalus.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$cargo = $_REQUEST['cargo'];
$nomeDaEmpresa = $_REQUEST['nome-da-empresa'];
$interesse = $_REQUEST['interesse'];
$mensagem = $_REQUEST['mensagem'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Cargo: " . $cargo . "\n";
$body = $body . "Nome da empresa: " . $nomeDaEmpresa . "\n";
$body = $body . "Interesse: " . $interesse . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, 'Formulario site Agencia Salus' , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>