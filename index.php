<!--calculadora hecha unicamente con html-->
<form  action="calculator.php" method="post" style="display:inline">
    <!--input de texto plano-->
    <input type="text" name="numero1" />
    <!--etiqueta select de html, la cual crea una lista de opciones que podemos seleccionar para ir cambiando el valor de la etiqueta padre-->
    <select name="operacion" id="operacion">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="elevado">Elevado</option>
        <option value="raiz">Raiz</option>
        <option value="random">Random</option>
    </select>
    <!--input de texto plano-->
    <input type="text" name="numero2" />
    <!--input type submit (boton) el cual envia el formulario, este realiza una peticion de tipo post, como lo especifica al crear el formulario-->
    <!--la peticion tipo post va dirigida hacia el script del archivo calculator.php, para que este ejecute su logica-->
    <!--los datos son enviados de la siguiente manera {"nombre del campo del input:":"valor del campo del input", "nombre del campo del input":"valor del campo del input"}-->
    <!--asi sucesivamente con todos los campos del formulario-->
    <input type="submit" value="Calcular" />
</form>