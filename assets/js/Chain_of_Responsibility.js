// //ES6 Pattern Chain of Responsibility
// Luis Iraheta & Yenifer Garcia
//AL IMPLEMENTAR LAS CLASES CON ES6 NO ES NECESARIO LLAMAR LOS METODOS CON prototype.
class Request {
    constructor(amount) {
        this.amount = amount;
        log_cor.add("Cantidad : $" + amount + '<br>');
    }
    get(bill) {
        var count = Math.floor(this.amount / bill);
        this.amount -= count * bill;
        log_cor.add("Dispensado " + count + " $" + bill + " billetes");
        return this;
    }

}
// log_cor helper 

var log_cor = (function () {
    var log_cor = "";

    return {
        add: function (msg_cor) { log_cor += msg_cor + "<br>"; },
        show: function () {
            swal({
                title: 'Expendido!',
                html: log_cor,
                type: 'success'
            }); log_cor = "";
        }
    }
})();

function run_Chain_of_Responsibility() {
    var cantidad = document.getElementById("caja_cor").value;
    var request = new Request(cantidad);

    request.get(100).get(50).get(20).get(10).get(5).get(1);

    log_cor.show();
}