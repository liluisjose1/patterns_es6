// //ES6 Pattern Strategy
// Luis Iraheta & Yenifer Garcia
var Shipping = function () {
    this.company = "";
};

Shipping.prototype = {
    setStrategy: function (company) {
        this.company = company;
    },

    calculate: function (package) {
        return this.company.calculate(package);
    }
};

var DHL = function () {
    this.calculate = function (package) {
        // calculations...
        return "$99.95";
    }
};

var TNT = function () {
    this.calculate = function (package) {
        // calculations...
        return "$99.98";
    }
};
// log_s helper

var log_s = (function () {
    var log_s = "";

    return {
        add: function (msg_s) { log_s += msg_s + "\n"; },
        show: function () {
            swal({
                title: "Estrategia",
                text: log_s,
                type: 'success'
            }); log_s = "";
        }
    }
})();

function run_s_1() {
    var package = { from: "715w16q12", to: "14554w0012", weigth: "10kg" };

    // the 3 strategies

    var dhl = new DHL();

    var shipping = new Shipping();

    shipping.setStrategy(dhl);
    log_s.add("DHL Strategy: " + shipping.calculate(package));

    log_s.show();
}
function run_s_2() {
    var package = { from: "715w16q12", to: "14554w0012", weigth: "10kg" };

    // the 3 strategies

    var tnt = new TNT();

    var shipping = new Shipping();

    shipping.setStrategy(tnt);
    log_s.add("TNT Strategy: " + shipping.calculate(package));

    log_s.show();
}