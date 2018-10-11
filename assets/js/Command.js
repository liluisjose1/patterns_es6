 // CREAMOS LA CLASE COMANDER
 class Command {
    constructor(execute, undo, value) { // DONDE EL CONSTRUCTOR RECIBIRÁ 3 PARAMETROS.
        // IGUALAMOS LOS PARAMETROS.
        this.execute = execute;
        this.undo = undo;
        this.value = value;
    }
}
// CREAMOS FUNCIONES ANONIMAS PARA LAS OPERACIONES.
function suma(x, y) { return x + y; }
function resta(x, y) { return x - y; }
function multi(x, y) { return x * y; }
function divi(x, y) { return x / y; }

function newCalculator() {
    return function () {
        var current = 0;
        var commands = [];
        function action(command) {
            var name = command.execute.toString().substr(9, 3);
            return name.charAt(0).toUpperCase() + name.slice(1);
        }
        return {
            execute: function (command) {
                current = command.execute(current, command.value);
                commands.push(command);
                log.suma(action(command) + ": " + command.value);
            },
            undo: function () {
                var command = commands.pop();
                current = command.undo(current, command.value);
                log.suma("Undo " + action(command) + ": " + command.value);
            },
            getCurrentValue: function () {
                return current;
            }
        };
    };
}

function newDivCommand() {
    return function (value) {
        return new Command(divi, multi, value);
    };
}

function newMulCommand() {
    return function (value) {
        return new Command(multi, divi, value);
    };
}

function newSubCommand() {
    return function (value) {
        return new Command(resta, suma, value);
    };
}

function newAddCommand() {
    return function (value) {
        return new Command(suma, resta, value);
    };
}
 
var AddCommand = newAddCommand();
 
var SubCommand = newSubCommand();
 
var MulCommand = newMulCommand();
 
var DivCommand = newDivCommand();
 
var Calculator = newCalculator()
 
// log helper
 
var log = (function () {
    var log = "";
 
    return {
        suma: function (msg) { log += msg + "\n"; },
        show: function () { alert(log); log = ""; }
    }
})();
 
function run() {
    var calculator = new Calculator();
 
    // issue commands
 
    calculator.execute(new AddCommand(100));
    calculator.execute(new SubCommand(24));
    calculator.execute(new MulCommand(6));
    calculator.execute(new DivCommand(2));
 
    // reverse last two commands
 
    calculator.undo();
    calculator.undo();
 
    log.suma("\nValue: " + calculator.getCurrentValue());
    log.show();
}