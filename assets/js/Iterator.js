// //ES6 Pattern Iterator
// Luis Iraheta & Yenifer Garcia
//AL IMPLEMENTAR LAS CLASES CON ES6 NO ES NECESARIO LLAMAR LOS METODOS CON prototype.
class Iterator {
    constructor(items) {
        this.index = 0;
        this.items = items;
    }

    first() {
        this.reset();
        return this.next();
    }
    next() {
        return this.items[this.index++];
    }
    hasNext() {
        return this.index <= this.items.length;
    }
    reset() {
        this.index = 0;
    }
    //ES6 PATTERN
    each(callback) {
        for (var item = this.first(); this.hasNext(); item = this.next()) {
            callback(item);
        }
    }
}


// log_iter helper

var log_iter = (function () {
    var log_iter = "";

    return {
        add: function (msg_iter) { log_iter += msg_iter + "<br>"; },
        show: function () {
            swal({
                title: 'Datos de Cliente!',
                html: log_iter,
                type: 'info'
            }); log_iter = "";
        }
    }
})();

function run_iterator() {
    var nombres = document.getElementById("nombre").value;
    var apellidos = document.getElementById("apellido").value;
    var dui = document.getElementById("dui").value;


    var items = ["Nombre: " + nombres, "Apellidos: " + apellidos, "DUI: " + dui];
    var iter = new Iterator(items);

    // using Iterator's each method

    iter.each(function(item) {
        log_iter.add(item);
    });

    log_iter.show();
}