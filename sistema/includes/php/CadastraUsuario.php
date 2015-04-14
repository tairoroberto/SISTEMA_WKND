<?php

	/********************************************************************************************/
	/* 					Inclui a classe de conexão com o banco 									*/
	/********************************************************************************************/
    include('conexao/Conexao.class.php');
 
     /********************************************************************************************/
    /*			Variáveis para inserção no banco de dados, insere a Categoria		*/
    /********************************************************************************************/
 
    $insereUsuario = new Conexao();
    $insereUsuario->conectar();
    $insereUsuario->selecionarDB();

    $buscarUsuario = new Conexao();
    $buscarUsuario->conectar();
    $buscarUsuario->selecionarDB();

    $Imagem1;
    $NomeImagem1 = null;
    $CaminhoImagem1;

    $error =  array();


    $Holding;
    $Requerente;
    $Imovel;
    $Oportunidade;
    $Orcamento;
    $Faq;
    $LinksUteis;
    $Processos;
    $Servicos;
    $Tarefas;
    $Incorporacao;    
    $Calendario;

    $SelectProcesso = "";
    $SelectProcessoAux;
    $SelectProcessoArray;

    /********************************************************************************************/
    /*                      Função para inserir imagem1 no banco de dados                       */
    /********************************************************************************************/

// Se o usuário clicou no botão cadastrar efetua as ações
   if (!empty($_FILES['Foto'])){

    $Imagem1 = $_FILES["Foto"];
 
    // Se a foto estiver sido selecionada
    if (!empty($Imagem1["name"])) {
 
        // Largura máxima em pixels
        $largura = 50000000;
        // Altura máxima em pixels
        $altura = 50000000;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 100000000000;
 
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $Imagem1["type"])){
           $error[1] = "Isso não é uma imagem.";
        } 
 
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($Imagem1["tmp_name"]);
 
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
 
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
 
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($Imagem1["size"] > $tamanho) {
            $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        } 
        // Se não houver nenhum erro
        if (count($error) == 0) {
 
            // Pega extensão da imagem
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $Imagem1["name"], $ext);
 
            // Gera um nome único para a imagem
            $NomeImagem1 = md5(uniqid(time())) . "." . $ext[1];
 
            // Caminho de onde ficará a imagem
            $CaminhoImagem1 = "fotos/Funcionario/" . $NomeImagem1;
 
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Imagem1["tmp_name"], $CaminhoImagem1);
        }
 
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "";
            }
        }
    }
}else{
    $NomeImagem1 = null;
}






    /********************************************************************************************/
    /*			Verifica se os dados enviados pelo FAQ-Categoria.html estão completos 			*/
    /********************************************************************************************/

   if (isset($_POST['TipoUsuario'])){

    if ($_POST['TipoUsuario'] == "Cliente") {

            $TipoUsuario =    $_POST['TipoUsuario'];
            $Email =    $_POST['Email'];         
            $Senha =    $_POST['Senha'];
            $ConfirmaSenha =    $_POST['ConfirmaSenha'];
            $NomeExibicao =    $_POST['NomeExibicao'];
            $DataCadastro = $_POST['DataCadastro'];

            $CreditoUsuario = $_POST['CreditoUsuario'];


           if (isset($_POST['SelectProcessoArray'])) {

                $i = 0;
                $SelectProcessoArray = $_POST['SelectProcessoArray'];
                
                foreach ($SelectProcessoArray as $SelectProcessoAux) {
                   $SelectProcesso .= $SelectProcessoAux.",";
                   
                }

            }else{
                $SelectProcesso = 0;
            }


        /********************************************************************************************/
        /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"INSERT INTO Usuarios(TipoUsuario,Email,Senha,ConfirmaSenha,NomeExibicao,Entrada,Saida,Almoco,Foto,DataCadastro,PermissaoProcesso,CreditoUsuario,CreditoUsuario_final) 
                              VALUES ('$TipoUsuario','$Email','$Senha','$ConfirmaSenha','$NomeExibicao','','','','$NomeImagem1','$DataCadastro','$SelectProcesso','$CreditoUsuario','$CreditoUsuario');");
         $insereUsuario->executarQuery();


require("conexao/PHPMailer-master/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.mandprojetos.com.br"; // Endereço do servidor SMTP
$mail->SMTPSecure = "ssl"; 
$mail->Port = 465;
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Username = 'envia@mandprojetos.com.br'; // Usuário do servidor SMTP
$mail->Password = 'mand123'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "atendimento@mandprojetos.com.br"; // Seu e-mail
$mail->FromName = "Mand Projetos"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress($Email);
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mand | Link de acesso ao sistema"; // Assunto da mensagem
//retiraq os .. do endereço completando con o endereço corrrento 
//
////"Segue o endereço de acesso ao orçamento <br> \r\n 
        //<a href='http://www.mandprojetos.com.br/sistema_mand/".$Endereco."' target = '_blank'> \r\n Link de acesso ao orçamento Mand Projetos.</a>";
$mail->Body = 
"<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0' />
<title>Mand Gestão de Projetos</title>
<style type='text/css'>
html {
    width:100%
}
::-moz-selection {
background:#63bcd4;
color:#fff
}
::selection {
background:#63bcd4;
color:#fff
}
body {
    background-color:#ecf0f1;
    margin:0;
    padding:0
}
.ReadMsgBody {
    width:100%;
    background-color:#fff
}
.ExternalClass {
    width:100%;
    background-color:#fff
}
a {
    color:#63bcd4;
    text-decoration:none;
    font-weight:400;
    font-style:normal
}
a:hover {
    color:#262626;
    text-decoration:none;
    font-weight:400;
    font-style:normal
}
p, div {
    margin:0!important
}
table {
    border-collapse:collapse
}
@media only screen and (max-width:640px) {
body {
width:auto!important
}
table table {
width:100%!important
}
td[class=full_width] {
width:100%!important
}
div[class=div_scale] {
width:440px!important;
margin:0 auto!important
}
table[class=table_scale] {
width:440px!important;
margin:0 auto!important
}
td[class=td_scale] {
width:440px!important;
margin:0 auto!important
}
img[class=img_scale] {
width:100%!important;
height:auto!important
}
td[class=spacer] {
display:none!important
}
td[class=spacer_spec] {
display:none!important
}
td[class=divider] {
width:100%!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=center] {
text-align:center!important
}
td[class=social_left] {
float:left;
width:400px;
display:block!important;
text-align:center!important;
padding:20px!important
}
td[class=social_right] {
float:left;
width:400px;
display:block!important;
text-align:center!important;
padding:0 20px 20px!important
}
td[class=one_one] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half] {
width:440px!important;
padding-bottom:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_half_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_third] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third] {
width:440px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_last] {
width:440px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_alt_last] {
width:440px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth] {
width:85px!important;
display:block!important;
padding-left:20px!important;
padding-bottom:0!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth_last] {
width:85px!important;
margin-top:0!important;
display:block!important;
padding-top:20px!important;
padding-left:20px!important;
float:left;
text-align:inherit!important
}
}
@media only screen and (max-width:479px) {
body {
width:auto!important
}
table table {
width:100%!important
}
td[class=full_width] {
width:100%!important
}
div[class=div_scale] {
width:280px!important;
margin:0 auto!important
}
table[class=table_scale] {
width:280px!important;
margin:0 auto!important
}
td[class=td_scale] {
width:280px!important;
margin:0 auto!important
}
img[class=img_scale] {
width:100%!important;
height:auto!important
}
td[class=spacer] {
display:none!important
}
td[class=spacer_spec] {
display:none!important
}
td[class=divider] {
width:100%!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=center] {
text-align:center!important
}
td[class=social_left] {
float:left;
width:240px;
display:block!important;
text-align:center!important;
padding:20px!important
}
td[class=social_right] {
float:left;
width:240px;
display:block!important;
text-align:center!important;
padding:0 20px 20px!important
}
td[class=one_one] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half] {
width:280px!important;
padding-bottom:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_half_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_half_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important;
padding:0!important
}
td[class=one_third] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third] {
width:280px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=two_third_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_last] {
width:280px!important;
margin-top:40px!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_third_alt_last] {
width:280px!important;
margin-top:0!important;
display:block!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth] {
width:110px!important;
display:block!important;
padding-left:20px!important;
padding-bottom:0!important;
float:left;
text-align:inherit!important
}
td[class=one_fourth_last] {
width:110px!important;
margin-top:0!important;
display:block!important;
padding-top:20px!important;
padding-left:20px!important;
float:left;
text-align:inherit!important
}
}
</style>
</head>
<body bgcolor='#ecf0f1'>
<table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding: 20px; margin: 0;'>
  <!-- START OF VERTIXAL SPACER BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          
        </table>
      </div></td>
  </tr>
  <!-- END OF VERTIXAL SPACER BLOCK-->
  <!-- START OF HEADER FOR LOGO-->
 
  <!-- END OF HEADER FOR LOGO-->
  <!-- START OF VERTIXAL SPACER BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          <tr>
            <td class='td_scale' width='600' height='30' bgcolor='#ecf0f1' align='left' valign='middle' style='height: 30px; padding-left:0px; padding-bottom:10px;  font-size:0 ; color:#686868; font-family: Arial,sans-serif; line-height: 0; '>
            
              <p><a href='http://www.mandprojetos.com.br' target='_blank'><br /><br />
              <img src='http://www.mandprojetos.com.br/mails/sistema/images/logo.png' width='215' height='42' /></a></p>
              <p>
            </td>
          </tr>
        </table>
      </div></td>
  </tr>
  <!-- END OF VERTIXAL SPACER BLOCK-->
  <!-- START OF 1/1 COLUMN-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='padding:0; margin: 0;'>
          <tr>
            <td class='full_width' align='left' valign='top' width='600' bgcolor='#ffffff' style=''><table width='100%'>
                <!-- START OF IMAGE-->
                <tr>
                  <td valign='top' style='padding: 0px; font-size:13px ; color:#727272; font-family: Arial,sans-serif; line-height: 23px; '><img class='img_scale' src='http://www.mandprojetos.com.br/mails/sistema/images/img2.jpg' width='600' height='150' alt='image' border='0' style='display: block;' /> </td>
                </tr>
                <!-- END OF IMAGE-->
                <!-- START OF HEADING-->
                <tr>
                  <td align='left' valign='top' style='padding-top: 23px; padding-right: 30px; padding-bottom: 0; padding-left: 30px; font-size:16px ; line-height: 34px; text-transform: none; color:#1f2122; font-family: Arial,sans-serif; '> Olá ".$NomeExibicao."</td>

                </tr>
                <!-- END OF HEADING-->
                <!-- START OF TEXT-->
                <tr>
                  <td align='left' valign='top' style='padding-top: 4px; padding-right: 30px; padding-bottom: 0; padding-left: 30px; font-size:14px ; color:#999b9e; font-family: Arial,sans-serif; line-height: 24px; text-align:justify; '> Estamos precisando de alguns documentos para dar continuidade em seu processo.
 
                    <br />
                    <br />
                    Segue abaixo o link para acessar sua área no nosso sistema, quais quer dúvidas estamos a disposição pelo e-mail atendimento@mandprojetos.com.br ou <br />
                    (11) 3578-0840<br />
                    <br />
                  <strong>Link: <a href='http://www.mandprojetos.com.br/sistema/login' target='_blank'>Acesso </a> <br />
                  <strong>Login: ".$Email."<br />
                  <strong>Senha: ".$Senha." <br />
                  
                  
                  <br />
                  </strong></td>

                </tr>
                <!-- END OF TEXT-->
                
                
              </table></td>
          </tr>
        </table> 
      </div>
      <!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/1 COLUMN-->
  <!-- START OF 1/2 COLUMN TOP IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN TOP IMAGE-->
  <!-- START OF TESTIMONIAL BLOCK-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''>&nbsp;</td>
  </tr>
  <!-- END OF TESTIMONIAL BLOCK-->
  <!-- START OF 1/2 COLUMN WITH LEFT IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER--><!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN WITH LEFT IMAGE-->
  <!-- START OF 1/2 COLUMN WITH RIGHT IMAGE-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><!-- JUST A VERTICAL SPACER-->
      <div class='div_scale' style='width:600px; display: block; '>
        <table class='table_scale' width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ecf0f1' style='padding:0; margin: 0;'>
          <tr>
            
          </tr>
        </table>
      </div>
      <!-- END OF JUST A VERTICAL SPACER--></td>
  </tr>
  <!-- END OF 1/2 COLUMN WITH RIGHT IMAGE-->
  
  <!-- START FOOTER AREA-->
  <tr>
    <td class='full_width' align='center' width='100%' bgcolor='#ecf0f1' style=''><div class='div_scale' style='width:600px;'>
        <table class='table_scale' width='' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#e0e7e6' style='padding:0; margin: 0;'>
          <tr>
            <td class='full_width' align='left' valign='top' width='600' bgcolor='#e0e7e6' style=''><table width='100%'>
                <tr>
                  <td height='30' bgcolor='#e0e7e6' style='padding:0; line-height: 0;'><br /></td>
                </tr>
                <!-- START OF TEXT-->
                <tr>
                  <td align='center' valign='top' style='padding: 0px 30px; font-style: italic; font-size:12px ; color:#999b9e; font-family: Arial,sans-serif; line-height: 22px; '> Mand Gestão de Projetos - www.mandprojetos.com.br - (11) 3578-0840<br />
                    <span style='color:#1f2122;'></td>
                </tr>
                <!-- END OF TEXT-->
                <tr>
                  <td height='30' bgcolor='#e0e7e6' style='padding:0; line-height: 0;'><br /></td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div></td>
  </tr>
  <!-- END FOOTER AREA-->
</table>
</body>
</html>";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();


    // Exibe uma mensagem de resultado
            if ($enviado){
                //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
                 echo("<script type='text/javascript'> location.href='../../usuario-cadastro.php'; alert('Cadastrado Realizado'); </script>");

            }
         
 } elseif (isset($_POST['Email'],
                         $_POST['Senha'],
                         $_POST['ConfirmaSenha'],
                         $_POST['NomeExibicao'],
                         $_POST['Entrada'],
                         $_POST['Saida'],
                         $_POST['Almoco'])){

                        $TipoUsuario =    $_POST['TipoUsuario'];
                        $Email =    $_POST['Email'];         
                        $Senha =    $_POST['Senha'];
                        $ConfirmaSenha =    $_POST['ConfirmaSenha'];
                        $NomeExibicao =    $_POST['NomeExibicao'];         
                        $Entrada =    $_POST['Entrada'];
                        $Saida =    $_POST['Saida'];
                        $Almoco =    $_POST['Almoco'];  
                        $DataCadastro = $_POST['DataCadastro'];
        /****************************************************************************************************/
        /*  Faz a verificação pra ver quais são as permições colocando as permissões enviadas nas variaveis */
        /****************************************************************************************************/       

     $Holding = $_POST['HoldingVisualizarAux']."/".$_POST['HoldingCadastrarAux']."/".$_POST['HoldingInvisivelAux'];

     $Requerente = $_POST['RequerenteVisualizarAux']."/".$_POST['RequerenteCadastrarAux']."/".$_POST['RequerenteInvisivelAux'];
             
     $Imovel = $_POST['ImovelVisualizarAux']."/".$_POST['ImovelCadastrarAux']."/".$_POST['ImovelInvisiveAux'];
                
     $Oportunidade = $_POST['OportunidadeVisualizarAux']."/".$_POST['OportunidadeCadastrarAux']."/".$_POST['OportunidadeInvisivelAux'];

     $Orcamento = $_POST['OrcamentoVisualizarAux']."/".$_POST['OrcamentoCadastrarAux']."/".$_POST['OrcamentoInvisivelAux'];

     $Faq = $_POST['FaqVisualizarAux']."/".$_POST['FaqCadastrarAux']."/".$_POST['FaqInvisivelAux'];

     $LinksUteis = $_POST['LinksUteisVisualizarAux']."/".$_POST['LinksUteisCadastrarAux']."/".$_POST['LinksUteisInvisivelAux'];

     $Processos = $_POST['ProcessosVisualizarAux']."/".$_POST['ProcessosCadastrarAux']."/".$_POST['ProcessosInvisivelAux'];

     $Servicos = $_POST['ServicosVisualizarAux']."/".$_POST['ServicosCadastrarAux']."/".$_POST['ServicosInvisivelAux'];

     $Tarefas = $_POST['TarefasVisualizarAux']."/".$_POST['TarefasCadastrarAux']."/".$_POST['TarefasInvisivelAux'];

     $Incorporacao = $_POST['IncorporacaoVisualizarAux']."/".$_POST['IncorporacaoCadastrarAux']."/".$_POST['IncorporacaoInvisivelAux'];

     $Calendario = $_POST['CalendarioVisualizarAux']."/".$_POST['CalendarioCadastrarAux']."/".$_POST['CalendarioInvisivelAux'];
                

          /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"INSERT INTO Usuarios(TipoUsuario,Email,Senha,ConfirmaSenha,NomeExibicao,Entrada,Saida,Almoco,Foto,DataCadastro,PermissaoProcesso,CreditoUsuario,CreditoUsuario_final) 
                              VALUES ('$TipoUsuario','$Email','$Senha','$ConfirmaSenha','$NomeExibicao','$Entrada','$Saida','$Almoco','$NomeImagem1','$DataCadastro','','','');");
         $insereUsuario->executarQuery();


           /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $buscarUsuario->set('sql',"SELECT IdUsuario FROM Usuarios
                                                     WHERE TipoUsuario = '$TipoUsuario' AND
                                                           Email = '$Email' AND
                                                           Senha = '$Senha' AND
                                                           ConfirmaSenha = '$ConfirmaSenha' AND
                                                           NomeExibicao = '$NomeExibicao' AND
                                                           Entrada = '$Entrada' AND
                                                           Saida = '$Saida' AND
                                                           Almoco = '$Almoco'AND
                                                           Foto = '$NomeImagem1' ");        
         $retornoUsuario = mysql_fetch_object($buscarUsuario->executarQuery()); 

          /********************************************************************************************/
         /*                      Muda a String SQL para inserir no banco                             */
        /********************************************************************************************/
         $insereUsuario->set('sql',"INSERT INTO PermissoesUsuario(Holding,Requerente,Imovel,Oportunidade,Orcamento,Faq,LinksUteis,Processos,Servicos,Tarefas,Incorporacao,Calendario,IdUsuario) 
                                                        VALUES ('$Holding','$Requerente','$Imovel','$Oportunidade','$Orcamento','$Faq','$LinksUteis','$Processos','$Servicos','$Tarefas','$Incorporacao','$Calendario','$retornoUsuario->IdUsuario');");
         $insereUsuario->executarQuery();
        //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-cadastro.php'; alert('Cadastrado realizado com sucesso'); </script>");
        }     
}else{
    //Ao acabar de inserir o usuário ele retorna para a pagina de cadstro de usuario
         echo("<script type='text/javascript'> location.href='../../usuario-cadastro.php'; alert('Cadastrado não realizado'); </script>");
}

 
