<!-- Modals Command-->
<div class="modal fade command-patters" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info">
                        <p class="mb-5 text-justify">
                            El patrón Command encapsula acciones como objetos. Los objetos de comando permiten sistemas
                            ligeramente acoplados al separar los objetos que emiten una solicitud de los objetos que
                            realmente procesan la solicitud. Estas solicitudes se llaman eventos y el código que
                            procesa las solicitudes se llama controladores de eventos.
                            Los objetos de comando le permiten centralizar el procesamiento de estas acciones, una para
                            cada operación. Por lo tanto, solo necesita un c omando para procesar todas las solicitudes
                            de corte, una para todas las solicitudes de copia y una para todas las solicitudes de
                            pegado.
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram">
                        <h3 class="text-center">Command Pattern Diagram</h3><br>
                        <img class="img-fluid" src="assets/images/command.jpg" alt="">
                    </div>
                    <div class="tab-pane container fade" id="example">
                        <h3 class="text-center">Command Pattern Example</h3><br>
                        <p class="text-justify">Para calcular el cambio del billete, ingresar la cantidad a cambiar en
                            la caja de texto.</p><br>

                        <input onchange="mostrarCambio('capturarInput')" required type="number" min="1" name="cajaES6"
                            class="form-control col-lg-12 cajaES6"><br>
                        <button onclick="mostrarCambio(); return false" class="btn btn-lg btn-primary col-lg-12 calcularCaja">Calcular
                            cambio!</button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modals Observador-->
<div class="modal fade pattern-observador" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info-o">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram-o">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example-o">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info-o">
                        <p class="mb-5 text-justify">
                            El patrón Observer ofrece un modelo de suscripción en el que los objetos se suscriben a un
                            evento y reciben una notificación cuando se produce el evento. Este patrón es la piedra
                            angular de la programación dirigida por eventos, incluido JavaScript. El patrón Observer
                            facilita un buen diseño orientado a objetos y promueve un acoplamiento suelto.
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram-o">
                        <h3 class="text-center">Observador Pattern Diagram</h3><br>
                        <center><img class="img-fluid" src="assets/images/observador.jpg" alt=""></center>
                    </div>
                    <div class="tab-pane container fade" id="example-o">
                        <h3 class="text-center">Observador Pattern Example</h3><br>
                        <div class="row">
                            <button onclick="run_encenter(); return false" class="btn btn-lg btn-primary col-lg-6"> <i
                                    class="ti ti-power-off"></i> Encender
                                Maquina</button>
                            <button onclick="run_apagar(); return false" class="btn btn-lg btn-primary col-lg-6"><i
                                    class="ti ti-power-off"></i>Apagar
                                Maquina</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals Chain_of_Responsibility-->
<div class="modal fade command-cor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info-cor">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram-cor">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example-cor">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info-cor">
                        <p class="mb-5 text-justify">
                            El patrón de la Cadena de responsabilidad proporciona una cadena de objetos acoplados de
                            forma flexible, uno de los cuales puede satisfacer una solicitud. Este patrón es
                            esencialmente una búsqueda lineal de un objeto que puede manejar una solicitud en
                            particular.
                            <br>
                            Un ejemplo de una cadena de responsabilidad es la propagación de eventos en la que un
                            evento se propaga a través de una serie de controles anidados, uno de los cuales puede
                            elegir manejar el evento.
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram-cor">
                        <center><img class="img-fluid" src="assets/images/chain-of-responsibility.jpg" alt=""></center>
                    </div>
                    <div class="tab-pane container fade" id="example-cor">
                        <p class="text-justify">Para calcular el cambio del billete, ingresar la cantidad a cambiar en
                            la caja de texto.</p><br>

                        <input id="caja_cor" required type="number" min="1" name="cajaES6" class="form-control col-lg-12"><br>
                        <button onclick="run_Chain_of_Responsibility(); return false" class="btn btn-lg btn-primary col-lg-12 ">Calcular
                            cambio!</button>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals Strategy-->
<div class="modal fade pattern-stratefy" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info-st">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram-st">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example-st">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info-st">
                        <p class="mb-5 text-justify">El patrón de Estrategia encapsula algoritmos (o estrategias)
                            alternativos para una tarea en particular. Permite que un método se intercambie en tiempo
                            de ejecución por cualquier otro método (estrategia) sin que el cliente se dé cuenta.
                            Esencialmente, la estrategia es un grupo de algoritmos que son intercambiables.
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram-st">
                        <center><img class="img-fluid" src="assets/images/javascript-strategy.jpg" alt=""></center>
                    </div>
                    <div class="tab-pane container fade" id="example-st">
                        <p class="text-justify">Da Click en el botón por el cual desea enviar el paquete .</p><br>

                        <div class="row">
                            <button onclick="run_s_1(); return false" class="btn btn-lg btn-primary col-lg-6">DHL
                                Express</button>
                            <button onclick="run_s_1(); return false" class="btn btn-lg btn-primary col-lg-6">TNT
                                Express</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modals Iterator-->
<div class="modal fade pattern-iterator" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info-iter">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram-iter">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example-iter">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info-iter">
                        <p class="mb-5 text-justify">El patrón de iterador permite a los clientes recorrer de manera
                            efectiva una colección de objetos. <br>

                            Una tarea de programación común es recorrer y manipular una colección de objetos. Estas
                            colecciones pueden almacenarse como una matriz o quizás algo más complejo, como un árbol o
                            una estructura gráfica. Además, es posible que deba acceder a los elementos de la colección
                            en un cierto orden, como, de frente a atrás, de atrás hacia adelante, primero la
                            profundidad (como en las búsquedas en árbol), omitir objetos numerados de manera uniforme,
                            etc. <br>
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram-iter">
                        <center><img class="img-fluid" src="assets/images/javascript-iterator.jpg" alt=""></center>
                    </div>
                    <div class="tab-pane container fade" id="example-iter">
                        <center>
                            <h3>Datos del Cliente</h3>
                        </center><br>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre" placeholder="Nombres">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="apellido" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">DUI</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="dui" placeholder="DUI">
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <button onclick="run_iterator(); return false" class="btn btn-lg btn-primary col-lg-12">Probar</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modals Visitor-->
<div class="modal fade pattern-visitor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#info-vis">Información</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#diagram-vis">Diagrama</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#example-vis">Ejemplo</a>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="info-vis">
                        <p class="mb-5 text-justify">El patrón de visitante define una nueva operación para una
                            colección de objetos sin cambiar los objetos en sí. La nueva lógica reside en un objeto
                            separado llamado el visitante. <br>

                            Los visitantes son útiles cuando se construye la extensibilidad en una biblioteca o marco.
                            Si los objetos en su proyecto proporcionan un método de "visita" que acepta un objeto
                            Visitante que puede hacer cambios en el objeto receptor, entonces está proporcionando una
                            manera fácil para que los clientes implementen futuras extensiones.
                        </p>
                    </div>
                    <div class="tab-pane container fade" id="diagram-vis">
                        <center><img class="img-fluid" src="assets/images/javascript-visitor.jpg" alt=""></center>
                    </div>
                    <div class="tab-pane container fade" id="example-vis">
                        <center>
                            <h3>Datos del Empleado</h3>
                        </center><br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Empleado</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nombre1" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form">
                                    <label for="inputPassword" class="col-sm-12 col-form-label">Salario Base</label>
                                    <div class="col-sm-12">
                                        <input type="number" min="1" class="form-control" id="sbase1" placeholder="Salario">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form">
                                    <label for="inputPassword" class="col-sm-12 col-form-label">Dias de Vacación</label>
                                    <div class="col-sm-12">
                                        <input type="number" min="1" class="form-control" id="dvaca1" placeholder="Vaciones">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <button onclick="run_visitor(); return false" class="btn btn-lg btn-primary col-lg-12">Calcular</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>