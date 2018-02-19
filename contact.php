<!DOCTYPE html>

<html>
<head>
<title>Multi Coifas Calhas e Rufos - 11 39172490</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/menuresponsive.css" rel="stylesheet" type="text/css" media="all">


</head>

 <script type="text/javascript" charset="utf-8">
			
		var $ = jQuery.noConflict();
			$(window).load(function() {
			$('.flexslider').flexslider({
				  animation: "fade"
			});
			$(function() {
				$('.show_menu').click(function(){
						$('.menu').fadeIn();
						$('.show_menu').fadeOut();
						$('.hide_menu').fadeIn();
				});
				$('.hide_menu').click(function(){
						$('.menu').fadeOut();
						$('.show_menu').fadeIn();
						$('.hide_menu').fadeOut();
				});
			});
		  });
	 		
	</script>

<body id="top">

<div class="bgded overlay" style="background-image:url('images/calhas-residenciais.jpg');"> 

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
   
      <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> (11) 3917 2490</li> 
          <li><i class="fa fa-envelope-o"></i>atendimento@multicoifas.com.br</li>
        </ul>
      </div>
      
    </div>
  </div>
 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
        
      <div id="logo" class="fl_left">
        <h1><a href="index.html"><span style="color:blue;font-weight: 800">Multi</span> Coifas</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Produtos</a>
            <ul>
              <li><a href="calhas.html">Calhas</a></li>
              <li><a href="coifas.html">Coifas</a></li>
              <li><a href="dutos.html">Dutos</a></li>
              <li><a href="forrospvp.html">Forros PVC</a></li>
              <li><a href="drywall.html">Drywall Placas</a></li>
            </ul>
            
          
          </li>
        
          <li><a href="about.html">A Empresa</a></li>
          <li><a href="contact.php">Contato</a></li>
        </ul>
      </nav>
        
        <nav class="menurepon menurepon-right" data-focus="#first-link">
            <div class="menurepon-content">
                <ul>
                  <li class="menurepon-link"><a href="about.html">Home</a></li>
                   <li class="menurepon-submenu">
                        <button id="first-link">Produtos</button>
                        <ul>
                            <li class="menurepon-link"><a href="calhas.html">Calhas</a></li>
                            <li class="menurepon-link"><a href="coifas.html">Coifas</a></li>
                            <li class="menurepon-link"><a href="dutos.html">Dutos</a></li>
                            <li class="menurepon-link"><a href="forrospvp.html">Forros PVC</a></li>
                            <li class="menurepon-link"><a href="drywall.html">Drywall</a></li>
                        </ul>
                    </li>
                    <li class="menurepon-link"><a href="about.html">A Empresa</a></li>
                    <li class="menurepon-link"><a href="contact.php">Contato</a></li>
                   
        
	
            	
                        </ul>
                        
                                       
                
            </div>
            
            
            
        </nav>
        
         <div class="site-overlay"></div>
        
		
        <div id="container">
           
            <button class="menu-btn" style="font-size: 20px ">&#9776;</button>

            
        </div>
        
        
    </header>
  </div>
   
   
   
  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear"> 
       
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Contato</a></li>
      </ul>
       
    </div>
  </div>
   
</div>
<!-- End Top Background Image Wrapper -->
 
 
 
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
     
    
     
     
    <div class="content for_quarter"> 
       
     <?php
if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel']; 
	$ass = $_POST['ass'];
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "atendimento@multicoifas.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "atendimento@multicoifas.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato WEBSITE"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Assunto = $ass \n "; 
	$email_conteudo .= "Nome = $name \n";
	$email_conteudo .= "E-mail = $email \n";
	$email_conteudo .= "Telefone = $tel \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
	
?>
 <div id="comments">
	
	<form action="<? $PHP_SELF; ?>" method="POST"> 
	 
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">E-Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Telefone<span>*</span></label>
            <input type="tel" name="tel" id="tel" value="" size="22" required>
          </div>
          <div class="block clear">
            <div class="two first">
            <label for="assunto">Assunto <span>*</span></label>
            <input type="text" name="ass" id="ass" value="" size="22" required>
          </div>
</select>
          </div>
          <div class="block clear">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="BTEnvia" value="ENVIAR">
            &nbsp;
            <input type="reset" name="reset" value="LIMPAR">
          </div>
        </form>
        </div>
      
      </div>
      
       	
   
    
     
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
   <section class="map color-light-white" id="contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20713.059305958624!2d-46.73625185371056!3d-23.403183440584705!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf426c17efaa057cf!2sMULTI+COIFAS+PERUS!5e0!3m2!1spt-BR!2sbr!4v1476978420560" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    
 
 
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
      
    <div class="one_quarter first">
      <h6 class="title">A MultiCoifas</h6>
      <p>Multi Coifas, é uma empresa que atua no ramo há 5 anos. Contamos com um quadro de profissionais técnicos especializados.</p>
      <p>Atuamos no ramo de fabricação e instalação de calhas, rufos, coifas e tubulação para coifas, churrasqueiras e fornos.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Contato</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address> Av. Fiorelli Peccicacco, 714 - Perus, São Paulo - SP, 05201-050
          </address>
        </li>
        <li><i class="fa fa-phone"></i> (11) 3917-2490<br></li>
        <li><i class="fa fa-envelope-o"></i>atendimento@multicoifas.com.br

</li>
      </ul>
    </div>
    <div class="two_quarter">
      <h6 class="title">Serviços e Produtos</h6>
      <ul class="nospace linklist">
        <li><a href="#">Calhas </a></li>
        <li><a href="#">Coifas</a></li>
        <li><a href="#">Rufos</a></li>
        <li><a href="#">Forros PVC</a></li>
        <li><a href="#">Drywall Placa</a></li>
      </ul>
    </div>
    
      
  </footer>
</div>
 
 
 <div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
      
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">MultiCoifas</a></p>
    <p class="fl_right"><a target="_blank" href="http://www.mgee.com/" title="MGee">MGee</a></p>
      
  </div>
</div>
 
 
 
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/menuresponsive.js"></script>
</body>
</html>