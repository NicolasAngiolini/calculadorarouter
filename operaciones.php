<?php
function sumar($op1, $op2)
{
    include_once('header.php');
    $resultado = $op1 + $op2;

    echo ($resultado);
}

function restar($op1, $op2)
{
    include_once('header.php');
    $resultado = $op1 - $op2;

    echo ($resultado);
}
function multiplicar($op1, $op2)
{
    include_once('header.php');
    $resultado = $op1 * $op2;

    echo ($resultado);
}
function dividir($op1, $op2)
{
    include_once('header.php');
    if ($op2 != 0) {

        $resultado = $op1 / $op2;

        echo ($resultado);
    } else {
        echo ('ERROR: No se puede dividir por 0');
    }
}
function showPi()
{
    include_once('header.php');
    $pi = pi();
    echo ($pi);
}
function aboutUs()
{
    include_once('header.php');
    echo ('<body>
    
     <h1>About us</h1>
     <p> echo por losotro </p>
     <p> y el guty</p>
     </body>');
}
function home()
{
    include_once('header.php');
    echo ('<body>
    <script>
        function enviar(){
            operacion = document.getElementById("operacion").value;
            valor1 = document.getElementById("valor1").value;
            valor2 = document.getElementById("valor2").value;

            formulario = document.getElementById("formulario");
            formulario.action = ("' . BASE_URL . '" + operacion + "/" + valor1 + "/" + valor2);
            formulario.submit;
        }
    </script>
    
        <h1>Calculadora</h1>
    
        <form id="formulario" onsubmit="enviar()">
            <input type="number" id="valor1">
            <input type="number" id="valor2">
            <select id="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="dividir">Dividir</option>
                <option value="multiplicar">Multiplicar</option>
            </select>
            <input type="submit">
        </form>

    </body>

    </html>');
}

?>