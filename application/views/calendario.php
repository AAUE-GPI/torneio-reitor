<title> AAUE :: Torneio do Reitor - Calendário </title>
<body>
 

 <div class="btn-group btn-group-justified">
 	<a href="#" class="btn btn-primary">Grupo A</a>
 	<a href="#" class="btn btn-primary">Grupo B</a>
 	<a href="#" class="btn btn-primary">Grupo C</a>
 	<a href="#" class="btn btn-primary">Grupo D</a>
 	<a href="#" class="btn btn-primary">Grupo E</a>
</div>

<div class="container">

<table class="table table-striped" style ="width:70%" align="center">
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
	 	foreach($row as $row): ?>
	 		<tr>
	 		<td><?php echo implode('</td><td>', $row); ?></td>
	 		</td>
		<?php endforeach; ?>
	</tbody>

</table></div>

<div class ="container">
<table class="table table-striped" style ="width:70%" align="center">
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

	</tbody>

</table></div>


</body>