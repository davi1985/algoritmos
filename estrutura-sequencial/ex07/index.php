<!-- 7. Faça um Programa que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário. -->
<h3>Calcular Área de um Quadrado em Metros</h3>
<form method="post">
    <input type="text" placeholder="Digite o lado" name="side"><br><br>
    <input type="submit" value="Fazer Conversão">
</form>

<?php 
if (!empty($_POST['side'])) {
	$side = floatval($_POST['side']);

	$areaCentimeter = $side * $side*100;
	$areaMeter = $side * $side;
	$areaDoubleCentimeter = $areaCentimeter * $areaCentimeter;
	$areaDoubleMeters = $areaMeter * $areaMeter / 100;
	echo "<h3>Área do quadrado em cm: {$areaCentimeter}</h3>";
	echo "<h3>Área do quadrado em m: {$areaMeter}</h3>";
	echo "<h3>Dobro da Área em cm: {$areaDoubleCentimeter}</h3>";
	echo "<h3>Dobro da Área em m: {$areaDoubleMeters}</h3>";

	var_dump([
		$areaMeter,
		$areaCentimeter,
		$areaDoubleMeters,
		$areaDoubleCentimeter
	]);

}


 ?>
