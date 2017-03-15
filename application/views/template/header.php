<?php $this->load->helper('url'); ?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">


    	* {
    		margin:0;
    		padding:0;
    	}

    	html,body {
    		height:100%;
    	}

    	* html #tudo {
    		height:100%;
    	}

    	.logo_torneio {
    		float: left ; 
    		margin-left:20px;
    		

    	}
    	.backimagem {
    		float: left ; 
    		width: 200px; 
    		height: 100px; 
    		background: linear-gradient(white, #cccccc);

    	}
    	.header_vermelho {
    		height: 50px; 
    		background-color: #922A36;

    	}
    	.header_preto {
    		width: auto; 
    		height: 50px; 
    		background-color: #262626;
    	}

    	.logo_evora {
    		position:fixed;
    		top:1%;
    		left:25%;
    		float: left;
    		clear:both;
  
	    	}
	    
	    .logo_associacao {
	    	position:fixed;
	    	top:1%;
	    	left:55%;
	    	float: left;
	    	background-color:;
	    	clear:both;
	    	
	    }

	    
	    }

	    .logo_insta {
	    	float:right;
	    	width:20px;
	    	height: 20px;
	    	
	    	background-color:#A52A2A ;
	    	

	    }

	    .logo_fb {
	    	float:right;
	    	
	    	background-color: #A52A2A;
	    	margin-right:10px;
	    	margin-top: 10px;
	    }

	    .rodape {
	    	position:absolute;
	    	bottom:0;
	    	width:100%;
	    	line-height: 35px;
	    	text-align:center;
	    	height:50px;
	    	background:#262626;
	    	width:100%;
	    }


	    #copyright {
	    	font-color:white;
	    }

	    p {
	    	font-color:white;
	    }


	   	

    </style>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	
</head>
<body style="margin: 0px">
<div style="min-width: 800px">
<div class="header_vermelho">
	<div class="backimagem">
		<div class="logo_torneio">

			<img class="logo_torneio" src="<?php echo base_url();?>assets/images/logo torneio.png">
		</div>
	</div>


	<div class="row" style="background-color: #922A36; margin-left: 200px; height: 100%">
		
			<div class="col-xs-5">
				<img src="<?php echo base_url();?>assets/images/uevora-logo.png" style="margin-left:140px ; margin-top:3px">
			</div>
			<div class="col-xs-5">
				<img src="<?php echo base_url();?>assets/images/aaue-logo.png" style="margin-left:20px ; margin-top:3px; position:center">
			</div>

		    <div class="col-xs-2"> 
		    		<img src="<?php echo base_url();?>assets/images/instagram.svg" style="max-height: 20px; margin-top:16px; margin-left:30px">
		    		<img src="<?php echo base_url();?>assets/images/facebook.svg" style="max-height: 20px; margin-top:16px; ">
		    </div>
		    	
		    
		</div>
	</div>
	
</div>
		
		
	</div>

	



	<div class="header_preto"> </div>
		
			


	<div>

	</div>


	<div class="rodape"> 
		<p id="copyright"> Copyright © 2017 AAUE.Todos os direitos reservados</p>

	</div>


</div>