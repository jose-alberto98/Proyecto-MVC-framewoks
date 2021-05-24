<div class="col-md-8 col-md-offset-1" >
<table class="table table-hover">
	<tr>
		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Correo</td>
	</tr>
	<?php
	    while ($user = $resultUser->fetch_object()): ?> 
		    <tr>
			    <td><?=$user->nombre?></td>
			    <td><?=$user->apellido?></td>
			    <td><?=$user->email?></td>
		</tr>
	    <?php endwhile; ?>
</table>
</div>