<form method="post">
    <input type="number" placeholder="Digite um número" name="number"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php
// 2. Faça um Programa que peça um número e então mostre a mensagem: "O número informado foi [número]".
if (!empty($_POST['number'])) {
    $number = intval($_POST['number']);
    echo "<h2>O número informado foi: {$number}</h2>";
}
