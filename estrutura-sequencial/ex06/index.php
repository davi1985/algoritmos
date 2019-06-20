<!-- 6. Faça um Programa que peça o raio de um círculo, calcule e mostre sua área. -->
<h3>Calcular Área de Cículo</h3>
<form method="post">
    <input type="text" placeholder="Digite o raio do circulo" name="radius"><br><br>
    <input type="submit" value="Fazer Conversão">
</form>

<?php 
if (!empty($_POST['radius'])) {
	$radius = floatval($_POST['radius']);
	$area = pi()*($radius*$radius);
	echo "<h3>A área do cículo é: ",number_format($area, "2"),"</h3>";
}

 ?>
