// //ES6 Pattern Observer
// Luis Iraheta & Yenifer Garcia
//AL IMPLEMENTAR LAS CLASES CON ES6 NO ES NECESARIO LLAMAR LOS METODOS CON prototype.
class Click {
    constructor() {
        this.handlers = []; // observers
    }
    subscribe(fn) {
        this.handlers.push(fn);
    }
    unsubscribe(fn) {
        this.handlers.push(fn);
    }

    fire(o, thisObj) {
        var scope = thisObj || window;
        this.handlers.forEach(function (item) {
            item.call(scope, o);
        });
    }

}


// log helper

var log_endendido = (function () {
    var log_endendido = "";

    return {
        add: function (msg_e) { log_endendido += msg_e + "\n"; },
        show: function () {
            swal({
                title: log_endendido,
                type: 'success'
            });
            log_endendido = "";
        }
    }
})();
var log_apagada = (function () {
    var log_apagada = "";

    return {
        add: function (msg_a) { log_apagada += msg_a + "\n"; },
        show: function () {
            swal({
                title: log_apagada,
                type: 'error'
            });
            log_apagada = "";
        }
    }
})();

function run_encenter() {
    var click = new Click();

    var clickHandler = function (item_encedida) {
        log_endendido.add(" " + item_encedida);
    };


    click.subscribe(clickHandler);
    click.fire('Endendida');

    log_endendido.show();
}
function run_apagar() {
    var click = new Click();

    var clickHandler = function (item_apagada) {
        log_apagada.add(" " + item_apagada);
    };

    click.unsubscribe(clickHandler);
    click.fire('Apagada');

    log_apagada.show();
}