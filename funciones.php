<?Php 
$nombre ;
$Apellido;
$nombres = array("ana","juan","camila");
$nombres1 = "ana";



function concatenar($nombre, $Apellido){
    echo "en una funcion es: ". $nombre.' '.$Apellido; 

}

concatenar("edwin ", "gallego");

function sumarNumeros($numeros){
    $suma=0;
    
    for ($i=0; $i < 6; $i++) { 
        $suma =  $suma + $numeros[$i];
        
        # $sumacode...
    }
    echo"la suma  es: ". $suma;
}
$numeros = array(1,2,3,4,5,6);
sumarNumeros($numeros);
var_dump(is_array($nombres));
var_dump($nombres1);

?>