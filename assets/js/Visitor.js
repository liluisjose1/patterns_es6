// //ES6 Pattern Visitor
// Luis Iraheta & Yenifer Garcia

class Employee {
    constructor(name, salary, vacation) {
        var self = this;
        this.accept = function (visitor) {
            visitor.visit(self);
        };
        this.getName = function () {
            return name;
        };
        this.getSalary = function () {
            return salary;
        };
        this.setSalary = function (sal) {
            salary = sal;
        };
        this.getVacation = function () {
            return vacation;
        };
        this.setVacation = function (vac) {
            vacation = vac;
        };
    }
}

class ExtraSalary {
    constructor() {
        this.visit = function (emp) {
            emp.setSalary(emp.getSalary() * 1.1);
        };
    }
}

class ExtraVacation {
    constructor() {
        this.visit = function (emp) {
            emp.setVacation(emp.getVacation() + 2);
        };
    }
}

// log_vis helper
var log_vis = (function () {
    var log_vis = "";

    return {
        add: function (msg_vis) { log_vis += msg_vis + "<br>"; },
        show: function () {
            swal({
                title: 'Datos de Empleado!',
                html: log_vis,
                type: 'success'
            }); log_vis = "";
        }
    }
})();

function run_visitor() {

    n1 = document.getElementById("nombre1").value;
    sb = document.getElementById("sbase1").value;
    dv = document.getElementById("dvaca1").value;

    var employees = [
        new Employee(n1, sb, parseInt(dv)),
    ];

    var visitorSalary = new ExtraSalary();
    var visitorVacation = new ExtraVacation();

    for (var i = 0, len = employees.length; i < len; i++) {
        var emp = employees[i];

        emp.accept(visitorSalary);
        emp.accept(visitorVacation);
        log_vis.add(emp.getName() + ": $" + emp.getSalary().toFixed(2) +
            " y " + emp.getVacation() + " dias de vacación");
    }

    log_vis.show();
}