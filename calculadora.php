<body>
    <nav>
        <ul>
            <li><a href="index.html">Calculadora</li></a>
            <li><a href="pi.php">Numero Pi</li></a>
            <li><a href="about.html">Acerca de</li></a>
        </ul>
    </nav>
</body>
<?php   
    require_once('operaciones.php');


    if (!is_numeric($_REQUEST['valor1']) ||
        !is_numeric($_REQUEST['valor2'])||
        empty($_REQUEST['operacion']))
{
    echo('ERROR: Parametros incorrectos');
    die();
}

$operando1=$_REQUEST['valor1'];
$operando2=$_REQUEST['valor2'];
$operacion=$_REQUEST['operacion'];

switch($operacion){
    case'sumar':{
        $resultado = sumar($operando1,$operando2);
        break;
    }
    case'restar':{
        $resultado = restar($operando1,$operando2);
        break;
    }
    case'multiplicar':{
        $resultado = multiplicar($operando1,$operando2);
        break;
    }
    case'dividir':{
        $resultado = dividir($operando1,$operando2);
        break;
    }
}

echo('el resultado es: '.$resultado);

?>