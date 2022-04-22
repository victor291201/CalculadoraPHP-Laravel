<?php 
/*logica del switch para determinar el tipo de operacion que realizaremos y cambiar el contenido de la pagina dependiendo de esto*/
/*podemos acceder a los valores del arreglo enviado de la siguiente manera $_POST['nombre del input']*/
switch ($_POST['operacion']) {
    case "+":
        echo "La suma es: ".(string)((int)$_POST['numero1']+(int)$_POST['numero2']);
        break;
    case "-":
        echo "La resta es: ".(string)((int)$_POST['numero1']-(int)$_POST['numero2']);
        break;
    case "*":
        echo "La multiplicacion es: ".(string)((int)$_POST['numero1']*(int)$_POST['numero2']);
        break;
    case "/":
        echo "La division es: ".(string)((int)$_POST['numero1']/(int)$_POST['numero2']);
        break;
    case "elevado":
        /*la potencia en php se escribe de la siguiente manera pow(base,exponente)*/
        echo "La potencia es: ".(string)(pow((int)$_POST['numero1'],(int)$_POST['numero2']));
        break;
    case "raiz":
        /*dado a que php solo nos brinda una funcion sqrt() la cual aplica solo raices cuadradas, aplicamos un artificio matematico para usar potencias como si fueran raices*/
        /*como es bien sabido en matematicas la raiz de un numero es equivalente a elevarlo a una fraccion con el indice de la raiz en la parte de abajo de la fraccion*/
        echo "La raiz es: ".(string)(pow((int)$_POST['numero1'],1/(int)$_POST['numero2']));
        break;
    case "random":
        /*usamos la funcion rand(rangomaximo, rango minimo) de php la cual recibe un rango y retorna un numero aleatorio entre ese intervalo*/
        echo "El numero aleatorio es ".(string)(rand((int)$_POST['numero1'],(int)$_POST['numero2']));
        break;
    } ?>