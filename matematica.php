<?php
function getFate($option)
{
    switch($option){
        case 1:
            $fate = "Serás millonario!!";
            break;
        case 2:
            $fate = "Encontrarás el amor de tu vida!";
            break;
        case 3:
            $fate = "Vivirás 200 años!";
            break;
        case 4:
            $fate = "Podrás leer la mente!";
            break;
        case 5:
            $fate = "Mueres en un accidente repentino!";
            break;
    }
    return $fate;
}

$option = rand(1,5);
$fate = getFate($option);
echo "Tu futuro es: " . $fate;


?>