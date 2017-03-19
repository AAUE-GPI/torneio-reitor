<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Torneio do Reitor</title>
		<link rel='shortcut icon' type='image/x-icon' href="<?php echo base_url()?>assets/imgs/favicon.ico" />
	  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
	</head>

	<header>
		<div class="flex">
		  <a href="<?php echo base_url()?>" id="logo">
		    <img src="<?php echo base_url()?>assets/imgs/logotorneio.png">
		  </a>

		  <div class="flex col">
		  	<div class="flex" id="barra_cima">
		      <a class="flex logos_univ_aaue" href="http://www.uevora.pt/"
						 target="_blank">
		        <img src="<?php echo base_url()?>assets/imgs/uevora-logo.png" class="logo_barra_cima">
		      </a>

		      <a class="flex logos_univ_aaue" href="http://www.aaue.pt/"
						 target="_blank">
		        <img src="<?php echo base_url()?>assets/imgs/aaue-logo.png" class="logo_barra_cima">
		      </a>

		      <div class="flex social">
		        <a href="https://www.instagram.com/aauevora/"
							 target="_blank"
							 class="icones_social">
		          <img src="<?php echo base_url()?>assets/imgs/instagram.svg">
		        </a>

		        <a href="https://www.facebook.com/AAUEvora/"
							 target="_blank"
							 class="icones_social">
		          <img src="<?php echo base_url()?>assets/imgs/facebook.svg">
		        </a>
		      </div>
		    </div>

	      <div class="flex" id="barra_baixo">

	        <div class="flex botoes_header">

	          <div class="botao_header dropdown" href="#">
	            <a class="botao_header"
	               href="https://drive.google.com/file/d/0BwUuAycNvGeSNGVTOEZneG1Pbjg/view"
								 target="_blank">
	              <button class="header-dropdown"
	                      type="button"
	                      aria-haspopup="true" aria-expanded="true">
	                REGULAMENTO
	              </button>

	            </a>
	          </div>

	          <div class="botao_header dropdown" href="#">
	            <button class="header-dropdown dropdown-toggle"
	                    type="button"
	                    data-toggle="dropdown"
	                    aria-haspopup="true" aria-expanded="true">
											XV TORNEIO MASCULINO
	                    <span class="caret"></span>
	            </button>
	            <ul class="header-menu" aria-labelledby="torneio-masculino">
	              <li><a href="<?php echo base_url()?>index.php/calendario/">Calendário</a></li>
	              <li><a href="#">Melhores<wbr> Marcadores</a></li>
	              <li><a href="#">Disciplina</a></li>
	              <li><a href="<?php echo base_url()?>index.php/equipas/">Equipas</a></li>
	              <li><a href="<?php echo base_url()?>index.php/premios/">Prémios</a></li>
	            </ul>
	          </div>

	          <div class="botao_header dropdown" href="#">
	            <button class="header-dropdown dropdown-toggle"
	                    type="button"
	                    data-toggle="dropdown"
	                    aria-haspopup="true" aria-expanded="true">
											VIII TORNEIO FEMININO
	                    <span class="caret"></span>
	            </button>
	            <ul class="header-menu" aria-labelledby="torneio-masculino">
	              <li>
	                <a href="#"
	                   target="_blank">
	                  Ficha de<wbr> Inscrição
	                </a>
	              </li>
	            </ul>
	          </div>

	          <div class="botao_header dropdown" href="#">
	            <a class="botao_header"
	               href="#">
	              <button class="header-dropdown"
	                      type="button"
	                      aria-haspopup="true" aria-expanded="true">
	                NOTÍCIAS
	              </button>

	            </a>
	          </div>

	          <div class="botao_header dropdown" href="#">
	            <button class="header-dropdown dropdown-toggle"
	                    type="button"
	                    data-toggle="dropdown"
	                    aria-haspopup="true" aria-expanded="true">
											REITOR TIPS
	                    <span class="caret"></span>
	            </button>

	            <ul class="header-menu" aria-labelledby="torneio-masculino">
	              <li>
	                <a href="https://drive.google.com/file/d/0BxZZnUa-6Wx9ZlEySTJIcmljUU9wZGZfQ2EtQWdabXJRNGs4/view?usp=sharing"
	                   target="_blank">
	                  Regulamento Reitor Tips
	                </a>
	              </li>

	              <li><a href="#">Boletim de Jogo</a></li>

	              <li><a href="<?php echo base_url()?>index.php/faq/">FAQ</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
		  </div>
		</div>
	</header>

	<body>
