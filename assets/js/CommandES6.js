// Manejador
var log = (function () {
    var log = "";
    return {
        add: function (msg) { log += msg + "<br>"; },
        show: function () {
            swal({
                title: 'Expendido!',
                html: log,
                type: 'success'
            });
            log = "";
        },
    }
})();
class Expendedor {
    constructor(unidades) {
        var valorDelBillete = unidades;
        var sucesor;
        this.siguiente = function (expendedor) {
            sucesor = expendedor;
        };
        this.cambiar = function (cantidad) {
            var numeroDeBilletes = Math.floor(cantidad / valorDelBillete);
            var noDispensable = cantidad - (numeroDeBilletes * valorDelBillete);
            if (numeroDeBilletes > 0) {
                log.add(numeroDeBilletes + ' billetes de $' +
                    valorDelBillete + ' dispensado.');
            }
            if (noDispensable > 0 && sucesor) {
                sucesor.cambiar(noDispensable);
            }
            else if (noDispensable) {
                log.add('No se ha podido dar cambio de ' + noDispensable );
            }
        };
    }
}

// Cliente
class MaquinaDeCambio {
    constructor(expendedor) {
        var expendedorInicial = expendedor;
        this.darCambioDe = function (cantidad) {
            expendedorInicial.cambiar(cantidad);
        };
    }
}

// Manejadores Concreto
var expendedorDeUnaUnidad = new Expendedor(1);
var expendedorDeCincoUnidades = new Expendedor(5);
var expendedorDeDiezUnidades = new Expendedor(10);
var expendedorDeVeinteUnidades = new Expendedor(20);
var expendedorDeCincuentaUnidades = new Expendedor(50);

// Establecer cadena:
expendedorDeCincuentaUnidades.siguiente(expendedorDeVeinteUnidades);
expendedorDeVeinteUnidades.siguiente(expendedorDeDiezUnidades);
expendedorDeDiezUnidades.siguiente(expendedorDeCincoUnidades);
expendedorDeCincoUnidades.siguiente(expendedorDeUnaUnidad);



function mostrarCambio(capturarInput) {
    // Capturamos cajaInput
    var capturarInput = $(".cajaES6").val();
    // Ejemplo de uso
    var maquinaDeCambio = new MaquinaDeCambio(expendedorDeCincuentaUnidades);
    maquinaDeCambio.darCambioDe(capturarInput);
    log.show();
    log.clear();
}
