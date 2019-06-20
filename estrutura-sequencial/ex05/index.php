<!-- 5. Faça um Programa que converta metros para centímetros. -->

<h3>Conversor de Metros para Centímetros</h3>
<form method="post">
    <input type="text" placeholder="Digite o valor em metros" name="meters"> m<br><br>
    <input type="submit" value="Fazer Conversão">
</form>

<?php 
if (!empty($_POST['meters'])) {
	$meters = floatval($_POST['meters']);
	$centimeters = $meters * 100;

	echo $centimeters." cm";
}
 ?>
