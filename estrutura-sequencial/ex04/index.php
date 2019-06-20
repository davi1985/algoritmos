<!-- 4. Faça um Programa que peça as 4 notas bimestrais e mostre a média. -->
<h2>Cálculo de Média de Notas</h2>
<form method="post">
    <input type="number" placeholder="Digite o primeira NOTA" name="numberOne"><br><br>
    <input type="number" placeholder="Digite o segunda NOTA" name="numberTwo"><br><br>
    <input type="number" placeholder="Digite o terceira NOTA" name="numberThree"><br><br>
    <input type="number" placeholder="Digite o quarta NOTA" name="numberFour"><br><br>
    <input type="submit" value="Calcular Média">
</form>

<?php

if (isset($_POST['numberOne']) AND !empty($_POST['numberOne'])) {
	$numberOne = intval($_POST['numberOne']);
	$numberTwo = intval($_POST['numberTwo']);
	$numberThree = intval($_POST['numberThree']);
	$numberFour = intval($_POST['numberFour']);

	$media = ($numberOne + $numberTwo + $numberThree + $numberFour) / 4;

	echo "<h3>A sua média é: {$media}</hw3";
}

 ?>
