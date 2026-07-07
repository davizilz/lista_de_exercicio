<? php
function mascararCPF($CPF, $quantidade){

$mascaraCPF = str_repeat("***", $quantidade);
return substr_replace($texto, $mascara, -$quantidade);
}

echo  . mascararCPF("123.456.789-00", 3);
echo "Segurança de dados em primeiro lugar! <br>";
echo "Nunca Deixe o computador desbloqueado com seus dados pessoais!";


?>



