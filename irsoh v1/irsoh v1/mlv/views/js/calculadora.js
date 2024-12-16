/* esto: 
const botonNumeros = document.getElementsByName ('data-number') 
es el DOM */

/* const se usa para las constantes y en este caso es para los botones q son fijos*/
const botonNumeros = document.getElementsByName ('data-number'); /* estos son arreglos porque tienen un conjunto de botones*/
const botonOpera = document.getElementsByName ('data-opera'); /* estos son arreglos porque tienen un conjunto de botones*/
const botonIgual = document.getElementsByName ('data-igual')[0]; 
const botonDelete = document.getElementsByName ('data-delete')[0];

/* var para las variables y result es un valor q va a cambiar */
var result = document.getElementById('result');

    var opeActual = '';
    var opeAnterior = '';
    var operacion = undefined;

/* vamos a agregar eventos con foreach para recorrer el arreglo*/
botonNumeros.forEach(function(boton)
{
    boton.addEventListener('click', function()
    {
        agregarNumero(boton.innerText);
    })
});
    botonOpera.forEach(function(boton)
    {
        boton.addEventListener('click', function()
        {
          selectOperacion(boton.innerText);
        })
    });

    botonIgual.addEventListener('click', function()
    {
        calcular();
        actualizarDisplay();
    });

    botonDelete.addEventListener('click', function()
    {
        clear();
        actualizarDisplay();
    });

function selectOperacion(op)
{
    if(opeActual === '') 
        return;
    if(opeAnterior !== '')
    {
        calcular();
    }

    operacion = op.toString();
    opeAnterior = opeActual;
    opeActual = '';
}

function calcular()
{
    var calculo; /* es el q guarda la operacion */
    const anterior = parseFloat(opeAnterior);
    const actual = parseFloat(opeActual);

    if(isNaN(anterior) || isNaN(actual))
        return;
    switch(operacion)
    {
        case '+':
            calculo = anterior + actual;
            break;
        case '-':
            calculo = anterior - actual;
            break;
        case 'x':
            calculo = anterior * actual;
            break;
        case '/':
            calculo = anterior / actual;
            break;
        default:
            return;
    }
    opeActual = calculo;
    operacion = undefined;
    opeAnterior = '';
}

function agregarNumero(num)
{
    /* es una cadena de texto xq el cuandro donde se muestra el resultado es un texto y estamos capturando un texto*/
    opeActual = opeActual.toString() + num.toString(); /* vamos a ir concatenando num.toString */
    actualizarDisplay();
}

function clear()
{
    opeActual = '';
    opeAnterior = '';
    operacion = undefined;
}

function actualizarDisplay()
{
    result.value = opeActual;
}

clear();