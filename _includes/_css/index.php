<?php
echo PHP_EOL;
include "general.css";
echo PHP_EOL . "/**********************/" . PHP_EOL;
include "menu_principal.css";
echo PHP_EOL . "/**********************/" . PHP_EOL;
include "footer.css";


if ($slug == "buscador") {
    echo PHP_EOL . "/**********************/" . PHP_EOL;
    include "badge.css";
    echo PHP_EOL;
}


if ($slug == "organigrama") {
    echo PHP_EOL . "/**********************/" . PHP_EOL;
    include "organigrama.css";
    echo PHP_EOL;
}


if ($slug == "organigrama2") {
    echo PHP_EOL . "/**********************/" . PHP_EOL;
    include "organigrama2.css";
    echo PHP_EOL;
}
