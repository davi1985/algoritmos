<p>Soma entre dois números</p>
<form method="post">
    <input type="number" placeholder="Digite o primeiro número" name="numberOne"><br><br>
    <input type="number" placeholder="Digite o segundo número" name="numberTwo"><br><br>
    <input type="submit" value="Fazer a Soma">
</form>

<?php
// 3. Faça um Programa que peça dois números e imprima a soma.

if (!empty($_POST['numberOne']) && !empty($_POST['numberTwo'])) {
    $numberOne = intval($_POST['numberOne']);
    $numberTwo = intval($_POST['numberTwo']);

    echo $numberOne + $numberTwo;
    var_dump($numberOne, $numberTwo);
}
