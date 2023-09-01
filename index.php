<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/hoja.css">
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <title>Desarrollo de subtemas en formato digital</title>
</head>


<body>
    <header>
        <div class="alineacion">
            <div><img src="imagenes/Encabezado.png" alt="Imagen con logos del TecNM" class="encabezado"></div>
            <div><img src="imagenes/logo.png" alt="Logo de ISC" class="encabezado"></div>
        </div>
    </header>

    <div class="content">
        <hr>
        <div class="portada">
            <h1>Administración y configuración de redes WLAN y LAN</h1>
            <hr>
            <br>
            <h2 class="semestre">Instituto Tecnológico Superior de Uruapan</h2>
            <h2 class="text">Ing. en sistemas computacionales </h2>
            <h1>Alumnos:</h1>
            <li class="text">López Solís Osvaldo Jesús --- No.Control (19040057)</li>
            <li class="text">Ponce Reyes Andrea Guadalupe --- No.Control (19040064)</li>
            <li class="text">Perez Arteaga Victor Hugo --- No.Control (19040063)</li>
            <h2 class="semestre">9no Semestre. Grupo “B” ISC</h2>
            <h1>Docente:</h1>
            <li class="text">Nahim Rios García</li>
            <div class="titulo">
                <h1>Título: </h1>
                <h2 class="tinom"> &nbsp;Desarrollo de subtemas en formato digital</h2>
            </div>
            <div class="titulo">
                <h1>Fecha de entrega: </h1>
                <h2 class="tinom"> &nbsp;--/Sep/2023</h2>
            </div>
            <h1 class="tportada">Morelia, Mich.</h1>
        </div>
        <br><br>
        <hr>
        <br>
        <div id="index">
            <h2 class="colorIndice">ÍNDICE</h2>
            <h3 style="font-style: italic;">1- Administración de la red</h3>
            <br>
            <a href="#intro">&nbsp;&nbsp; 1.1- Introducción</a>
            <br>
            <a href="#funciones">&nbsp;&nbsp; 1.1.1- Funciones de la administración de red </a>
            <br>
            <a href="#planificaci_n">&nbsp; 1.1.2- Planeación de un sistema de administación de redes</a>
            <br>
            <a style="font-size: 13px; text-align: center;" href="monitoreDeRed.php" class="arrow-button">
                1.2- >>
            </a>


            <!-- <a href="#referencias">---Referencias---</a> -->

        </div>

        <br><br>


        <div class="container">
            <hr>
            <h2 id="intro" class="subtitulo">Introducción</h2>
            <hr>
            <p>
                Dentro del ámbito informático se pueden identificar diversas especialidades, una de las cuales es la de
                Administrador de Redes.
                Esta disciplina surge debido a la necesidad de garantizar el funcionamiento adecuado de tanto el
                hardware como el software,
                manteniéndolos en operación óptima. Esto implica tareas como implementar, mantener y supervisar el
                entramado de la red.
                Las responsabilidades típicas del administrador de red abarcan asignar direcciones IP, establecer
                protocolos de enrutamiento,
                configurar tablas de enrutamiento, gestionar la autenticación, autorización de los servicios, entre
                otros.
                <br><br>
                El modelo de administración de red de la Organización internacional para la normalización (ISO) define
                cinco áreas funcionales de la
                administración de red.En el siguiente documento abarca todas las áreas funcionales.
                <br><br>
                Mencionando que suelen tratar con muchos datos estadísticos e información sobre el estado de distintas
                partes de la red, y se realizan prácticas en cada área funcional para aumentar la efectividad total de
                las prácticas y herramientas de administración actuales.
                <br><br>
                Administración de red, se mencionan 5 de las áreas funcionales del modelo de administración de red ISO.

            </p>
            <hr>
            <h2 id="funciones" class="subtitulo">Funciones de la administración de red</h2>
            <hr>
            <p>Las tareas desempeñadas por la Administración de Redes pueden ser divididas en dos amplios dominios: la
                supervisión de la red y su control. La primera categoría consiste en una labor de observación, en la
                cual se analiza y evalúa el estado y el comportamiento de los sistemas finales, dispositivos intermedios
                y las subredes que componen la infraestructura bajo administración. Por otro lado, la segunda categoría
                se enfoca en ajustar los parámetros de varios componentes y direccionar dichos componentes para ejecutar
                acciones previamente establecidas. Cada una de estas funciones principales posee áreas cruciales. En lo
                que respecta al monitoreo de la red, este se puede lograr mediante la administración del rendimiento, la
                gestión de fallos y la administración de registros. En cuanto al control de la red, este se materializa
                a través de la administración de la seguridad y la gestión de la configuración. </p>
            <a href="https://tesis.ipn.mx/bitstream/handle/123456789/8543/112.pdf?sequence=1&isAllowed=y">(Quezada
                Castillo, A.) Modelo de red para un centro de operaciones de seguridad (SOC) </a>

            <hr>
            <h2 id="planificaci_n" class="subtitulo">Planeación de un sistema de administración de redes</h2>
            <hr>
            <p>...................</p>
            <!-- <li>
                <b>Cache-aside Pattern:</b>
                Cargar datos bajo demanda en un cache desde una fuente de almacenamiento. Este patrón puede ayudar a
                mejorar la performance y ayudar a mantener la consistencia entre los datos del cache y de la fuente
                original.

            </li>
            <nav class="bodypng">
                <img src="imagenes/cache.png" alt="">
            </nav>
            <br>
            <li><b>Circuit Breaker Pattern:</b>
                Este patrón sirve para escenarios en donde se requiere tener la capacidad de manejar fallos cuando el
                tiempo para restablecer un servicio o recurso puede ser muy variable. Este patrón puede mejorar la
                estabilidad y flexibilidad de una aplicación.
            </li>
            <br>
            <nav class="bodypng">
                <img src="imagenes/circuit.png" alt="">
            </nav>
            <br>
            <li><b>Compensating Transaction Pattern:</b>
                El siguiente patrón sirve para trabajar en el escenario de tener que deshacer una serie de pasos
                realizados, que en conjunto significan una operación consistente y determinada. Esto generalmente es
                necesario cuando una o más operaciones de la serie de pasos falla.
                <br><br>
                Este tipo de patrones generalmente es necesario cuando estamos operando con distintos repositorios y no
                es posible propagar transacción o bien algunos de ellos no lo soportan, siendo necesario aplicar
                mecanismos de compensación.
            </li>

            <nav class="bodypng">
                <img src="imagenes/compensating.png" alt="">
            </nav>
            <br>
            <li><b>Competing Consumers Pattern:</b>
                Disponer de múltiples consumidores en simultaneo para procesar mensajes mensajes que son recibidos por
                un mismo canal. El patrón permite que un sistema procese varios mensajes al mismo tiempo para optimizar
                el tiempo, para mejorar la escalabilidad y para equilibrar la carga de trabajo.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/competing.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Compute Resource Consolidation Pattern:</b>
                Consolidar múltiples tareas u operaciones en una sola unidad de computo. Este patrón puede aumentar la
                reutilización de los recursos de cómputo, y reducir los costos y los gastos generales de gestión
                asociados a realizar procesamiento independientes en las aplicaciones alojadas en la nube.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/computeresources.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Command and Query Responsibility Segregation (CQRS) Pattern:</b>
                Separar las operaciones que leen datos de las que actualizan, mediante el uso de interfaces. Este patrón
                puede maximizar el rendimiento, la escalabilidad y la seguridad; mejorar la capacidad de mantenimiento y
                evolución del sistema.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/commandandquery.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Event Sourcing Pattern:</b>
                Este patrón puede simplificar las tareas en dominios complejos, evitando la necesidad de sincronizar el
                modelo de datos y el dominio de negocio; mejorar el rendimiento, escalabilidad y capacidad de respuesta;
                garantizar la coherencia de los datos transaccionales; y mantener los datos de auditoría completas y la
                historia de acciones que permiten implementar métodos de compensación.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/event.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>External Configuration Store Pattern:</b>
                Mover información de configuración del paquete de implementación de la aplicación a una ubicación
                centralizada. Este patrón puede proporcionar oportunidades para la gestión y control de los datos de
                configuración más fácil, y para el intercambio de datos de configuración de todas las aplicaciones y
                escenarios.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/external.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Federated Identity Pattern:</b>
                Delegar la autenticación a un proveedor de identidad externa. Este patrón puede simplificar el
                desarrollo, minimizar la necesidad de administración de usuarios, y mejorar la experiencia del usuario
                de la aplicación.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/federated.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Health Endpoint Monitoring Pattern:</b>
                Implementar checks sobre endpoints de la aplicación mediante la utilización de herramientas externas que
                permitan monitorearlos en intervalos definidos. Este patrón puede ayudar a verificar que las
                aplicaciones y los servicios están funcionando correctamente.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/health.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Index Table Pattern:</b>
                Crear índices en los campos de almacenamientos que con frecuencia se hace referencia en criterios de
                consultas. Este patrón puede mejorar el rendimiento de consulta, al permitir que las aplicaciones
                recuperen más rápidamente los datos de un almacén de datos.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/index.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Leader Election Pattern:</b>
                Coordinar las acciones realizadas por una colección de instancias (de tareas) en una aplicación
                distribuida por la elección de una instancia como el líder que asume la responsabilidad de la gestión de
                los otros casos. Este patrón puede ayudar a asegurar que las tareas no entren en conflicto entre sí,
                causar concurrencia de recursos compartidos, o sin querer interferir con el trabajo que otras instancias
                de tareas se están realizando.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/leader.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Materialized View Pattern:</b>
                Generar vistas pre-pobladas de los datos cuando tiene un formato que no favorece las operaciones de
                consulta. Este patrón puede ayudar a mejorar la eficacia de las consultas y la extracción de datos.
                Mejora el rendimiento de la aplicación.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/materialized.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Pipes and Filters Pattern:</b>
                Descomponer una tarea que lleva a cabo un procesamiento complejo en una serie de elementos discretos que
                pueden ser reutilizados. Este patrón puede mejorar el rendimiento, la escalabilidad y reusabilidad al
                permitir tareas que se despliegan y escala de forma independiente.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/pipes.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Sharding Pattern:</b>
                Dividir un almacén de datos en un conjunto de particiones horizontales. Este patrón puede mejorar la
                escalabilidad cuando requerimos almacenar y acceder a grandes volúmenes de datos.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/sharding.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Throttling Pattern:</b>
                Controlar el consumo de los recursos utilizados por una instancia de una aplicación. Este patrón puede
                permitir que el sistema siga funcionando y cumplir con los acuerdos de nivel de servicio, aun cuando un
                aumento de la demanda supone una carga extrema de los recursos.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/throttling.png" alt="">
                </nav>
                <br>
            </li>
            <li><b>Valet Key Pattern:</b>
                Utilice una clave que ofrece a sus clientes acceso directo restringido a un recurso o servicio
                específico con el fin de disminuir operaciones de transferencia de datos desde la aplicación. Este
                patrón es particularmente útil en aplicaciones que utilizan sistemas o colas de almacenamiento alojados
                en la nube, y puede minimizar los costos y maximizar la escalabilidad y el rendimiento.
                <br><br>
                <nav class="bodypng">
                    <img src="imagenes/valet.png" alt="">
                </nav>
                <br>
            </li>
            <hr>
            <h2 id="estandares" class="subtitulo">Estándares en Servicio</h2>
            <hr>
            <p>En los servicios de cómputo en la nube, se aplican varios estándares para garantizar la
                interoperabilidad, la seguridad y la calidad de los servicios.
                Los estándares para los servicios de Computación en la Nube se pueden clasificar en dos categorías
                principales: estándares prescriptivos y estándares evaluativos.
                <br><br>
                <hr>
                <b>Los estándares prescriptivos</b> se refieren a los estándares de comunicaciones y protocolos
                utilizados
                en la infraestructura y operación de los servicios en la nube. Algunos ejemplos de estos estándares
                incluyen:
                <hr>
            </p>
            <li><b>TCP/IP (Transmission Control Protocol/Internet Protocol):</b>
                Es el conjunto de protocolos de red que permite la comunicación entre dispositivos en Internet y redes
                privadas.
            </li>
            <br><br>
            <li><b>SNMP (Simple Network Management Protocol):</b>
                Protocolo utilizado para la gestión y supervisión de dispositivos de red.
                <br><br>
            </li>
            <li><b>HTTP (Hypertext Transfer Protocol):</b>
                Protocolo utilizado para la transferencia de información en la web.
                <br><br>
            </li>
            <li><b>OAuth (Open Authorization):</b>
                Marco de autorización utilizado para permitir que aplicaciones de terceros accedan a recursos protegidos
                en nombre de un usuario.
                <br><br>
            </li>
            <li><b>OpenID Connect:</b>
                Protocolo de autenticación y autorización basado en el estándar OAuth, utilizado para la gestión de
                identidad en aplicaciones web.
                <br><br>
            </li>
            <p>
                <hr>Por otro lado,<b> los estándares evaluativos</b> se refieren a los
                estándares utilizados para evaluar y certificar la calidad, seguridad y cumplimiento de los servicios en
                la nube. Algunos ejemplos de estos estándares incluyen:
                <hr>
            </p>

            <li><b>ISO/IEC 27001:</b>
                Estándar para la gestión de seguridad de la información.
                <br><br>
            </li>
            <li><b>CSA STAR (Cloud Security Alliance Security, Trust, Assurance and Risk):</b>
                Marco de referencia utilizado para la evaluación y certificación de la seguridad en los servicios en la
                nube.
                <br><br>
            </li>
            <li><b>FedRAMP (Federal Risk and Authorization Management Program):</b>
                Programa del gobierno de Estados Unidos para evaluar y autorizar servicios en la nube utilizados por
                agencias federales.
                <br><br>
            </li>
            <p>Estos son solo algunos ejemplos de estándares prescriptivos y evaluativos utilizados en los servicios de
                Computación en la Nube. La adopción y cumplimiento de estos estándares contribuyen a la
                interoperabilidad, seguridad y confiabilidad de los servicios en la nube.</p> -->

        </div>
    </div>

    <footer>
        <p id="referencias">Referencias bibliográficas:</p>
        <ul>
            <li>Mdeboli. (2014, 13 agosto). Patrones de Diseño Cloud. tech notes.
                <a
                    href="https://techhistories.wordpress.com/2014/03/12/patrones-de-diseo-cloud/">https://techhistories.wordpress.com/2014/03/12/patrones-de-diseo-cloud</a>
            </li>
            <li>Marqués, F. L. (2017, 15 noviembre). ¿Qué son los servicios en la nube? Tipos y ejemplos - Clinic Cloud.
                Clinic Cloud. <a
                    href="https://clinic-cloud.com/blog/servicios-en-la-nube-tipos-ejemplos/">https://clinic-cloud.com/blog/servicios-en-la-nube-tipos-ejemplos/</a>
            </li>
            <li>¿Qué es la computación en la nube? | Glosario. (s. f.). HPE México.
                <a
                    href="https://www.hpe.com/mx/es/what-is/cloud-computing.html#:~:text=La%20computaci%C3%B3n%20en%20la%20nube%20es%20un%20modelo%20de%20entrega,general%20como%20pago%20por%20consumo.">
                    https://www.hpe.com/mx/es/what-is/cloud-computing.html</a>
            </li>
            <li>¿Qué es el Cumplimiento de la Nube? (s. f.). Trend Micro.

                <a href="https://www.trendmicro.com/es_mx/what-is/cloud-security/cloud-compliance.html">
                    https://www.trendmicro.com/es_mx/what-is/cloud-security/cloud-compliance.html</a>
            </li>
            <li>Toro, R. (2020, 14 julio). ISO/IEC 27036 Seguridad de la Información en la Nube. PMG SSI - ISO 27001.
                <a href="https://www.pmg-ssi.com/2020/07/iso-iec-27036-seguridad-de-la-informacion-en-la-nube/">
                    https://www.pmg-ssi.com/2020/07/iso-iec-27036-seguridad-de-la-informacion-en-la-nube/</a>
            </li>
        </ul>
    </footer>

</body>

</html>