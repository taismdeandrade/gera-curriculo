
<?php
	include "./utils/header.php";
?>
	
	<h1>Preencha seu curriculo</h1>

	<form id="formulario" name="formulario" method="POST" action="dados.php">
		<div id="dados">
			<fieldset>
				<legend><strong>Seus dados</strong></legend>
				<label for="nome">Nome</label><br>
				<input type="text" name="nome" id="nome" placeholder = "Nome" required><br>
				<label for="sobrenome">Sobrenome</label><br>
				<input type="text" name="sobrenome" id="sobrenome" placeholder = "Sobrenome"><br>
				<label for="aniversario">Data de nascimento</label><br>
				<input type="date" name="aniversario" id="aniversario"><br>
			</fieldset>
		</div>
		<br>
		<div id="contatos">
			<fieldset>
				<legend><strong>Informações de contato</strong></legend>
				<label for="mail">E-mail: </label><br>
				<input type="email" name="mail" id="mail" placeholder = "seu_email@email.com" required><br>
				<label for="telefone" >Telefone: </label><br>
				<input type="tel" name="telefone" id="telefone" placeholder = "09-12345-1234" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"><br>
			</fieldset>
		</div>
		<br>
		<div id="formacao">
			<fieldset>
				<legend><strong>Formação</strong></legend>
				<label for="nivel">Selecione a sua escolaridade</label><br>
				<select id="nivel" name="nivel">
					<option>Selecione</option>
					<option>Ens. Fundamental</option>
					<option>Ens. Medio</option>
					<option>Graduação</option>
					<option>Pos-Graduação</option>
				</select>
				<br>
				<label for="curso">Curso</label><br>
				<input type="text" name="curso" id="curso" placeholder = "Curso"><br>
				<label for="instituicao">Instituição de Ensino</label><br>
				<input type="text" name="instituicao" id="instituicao" placeholder = "Instituição"><br>
				<label for="finalizado">Data de finalização</label><br>
				<input type="date" name="finalizado" id="finalizado">			
			</fieldset>
		</div>
		<br>	
		<div id="exp">
			<fieldset>
				<legend><strong>Experiências Profissionais</strong></legend>
				<label for="cargo[]">Cargo: </label>
				<input type="text" name="cargo[]" id="cargo" placeholder = "Cargo"><br>
				<label for="salario[]">Salario: </label>
				<input type="number" name="salario[]" id="salario" placeholder = "1100"><br>
				<label for="inicio[]">Periodo: </label>
				<input type="date" name="inicio[]" id="inicio"><br>
				<label for="fim[]">Até: </label>
				<input type="date" name="fim[]" id="fim"><br>
				<label for="atual[]">Emprego atual: </label>
				<select id="atual" name="atual[]">
					<option>Sim</option>
					<option>Não</option>
				</select>
				<label for="atividades[]">Atividades desenvolvidas</label><br>
				<textarea name="atividades[]" cols="40" rows="12" placeholder = "Descreva as atividades que desenvolvia na empresa."></textarea>
			</fieldset>
		</div>
		<input id="mais" type = "button" value = "Inserir mais"></input>
		<div class="maisexp">

		</div>
		<br>
		<div id="resumo">
			<label for="resume">Faça um resumo de suas experiências</label><br>
			<textarea name="resume" cols="40" rows="12" placeholder = "Faça um breve resumo de sua trajetória profissional"></textarea>
		</div>
		<button id = "enviar" type="submit">Finalizar</button>
	</form>

<?php
	include "./utils/footer.php";
?>
