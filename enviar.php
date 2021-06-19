<?php

$nome = $_POST['name'];
$email = $_POST['email'];
$massage = $_POST['message'];

$arquivo = "
<style type = 'text/css'>
body{
    margin:opx;
    font-family:Calibri;
    fonte-size:12px;
    color:#000000;
}
a{
    color: #666666;
    text-decoration:none;
}
a:hover{
    color:#FF0000;
    text-decoration:none;
}
</style>
<html>
<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
<tr>
<td>
<tr>
    <td width='500'>Nome:$nome</td>
    </tr>
    <tr>
    <td width='320'>E-mail:<b>$email</b></td>
</tr>
<tr>
    <td width='320'>Telefone:<b>$telefone</b></td>
    </tr>
<tr>
    <td width='320'>Opções:$escolhas</td>
</tr>
<tr>
    <td width='320'>Mensagem:$nome</td>
</tr>
</td>
</tr>
<tr>
<td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
</tr>
</table>
</html>
";
$emailenviar = "keila_dcardoso@hotmail.com";
    $destino = "kd.keke1@gmail.com";
    $assunto = "Contato Paulo Di Mello";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: $nome <$email>';

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }
?>