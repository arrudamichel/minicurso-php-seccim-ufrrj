<?php
function nomeFamilaNascimento($fnome, $ano) {
    echo "$fnome. Nascido em $ano <br>";
}

nomeFamilaNascimento("Silva", "1957");

function setAltura($minhaAltura = 50) {
    echo "A altura é : $minhaAltura <br>";
}

setAltura(350);
setAltura(); // Setará o padrão
?>