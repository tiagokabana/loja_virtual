

		<h2>Cadastro</h2>

		<form action="processar.php" method="POST">

			<input type="email" required="" placeholder="Digite seu e-mail"  name="email">

			<select name="cidades">

				<option>------</option>

				<?php

					$cidades = array(
						'1' => 'Três Corações',
						'2' => 'Lavras'
					);

					foreach ($cidades as $key => $value) {
						
						echo "<option value='$key'>$value</option>";

					}
				?>				
			</select>

			<input type="submit" name="enviar" value="Enviar">
			
		</form>
