<title> AAUE :: Torneio do Reitor - Calendário </title>
<body>
	<div class="container">

		<div class="btn-group btn-group-justified" role="group">
			<div class="btn-group" role="group">
				<button type="button" class="btn botaoGrupos">Grupo A</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn botaoGrupos">Grupo B</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn botaoGrupos">Grupo C</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn botaoGrupos">Grupo D</button>
			</div>
			<div class="btn-group" role="group">
				<button type="button" class="btn botaoGrupos">Grupo D</button>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table">
				  <table class="table tabela-riscada">
				  	<thead>
				  		<tr>
				  			<th>Jornada</th>
				  			<th>Dia</th>
				  			<th>Hora</th>
				  			<th>Local</th>
				  			<th>Equipas</th>
				  			<th>Resultado</th>
				  		</tr>
				  	</thead>

				  	<tbody>
				  		<?php 
				  		foreach($jogos as $jogos): ?>
				  		<tr>
				  			<td><?php echo implode('</td><td>', $jogos); ?></td>

				  		</tr>
				  	<?php endforeach; ?>
				  </tbody>

				</table>
		</div> 
		<div class="table-responsive">
			<table class="table">
				  <table class="table tabela-riscada">
				  	<thead>
				  		<tr>
				  			<th>Posição</th>
				  			<th>Equipa</th>
				  			<th>PTS</th>
				  			<th>JR</th>
				  			<th>GM</th>
				  			<th>GS</th>
				  			<th>DIF</th>
				  		</tr>
				  	</thead>

				  	<tbody>
				  		<?php 
				  		foreach($equipas as $equipas): ?>
				  		<tr>
				  			<td><?php echo implode('</td><td>', $equipas); ?></td>

				  		</tr>
				  	<?php endforeach; ?>
				  </tbody>

				</table>
		</div> 

	</div>
</body>