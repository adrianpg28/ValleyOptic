# ValleyOptic
Sistema de intentario y administracion Optica
En primer lugar tenemos los archivos "datos.php" y "conexion.php" los cuáles realizarán la conexión entre el sitema y BD "SistemaInventarioAdministracion.sql"-
Seguido por la página principal es "indexa.php", la cuál tendrá los las siguientes opciones, "ingresoPaciente.php", "datos.php", "ingresodeStock", acompañado de sus inserts,
los cuáles permitirán ingresar los datos a la base de datos ya mencionadas. Por otro lado, tenemos buscadores, "buscador.php" y "buscador1.php" sirven para buscar pacientes, donde "buscador1.php" es una herramienta la cuál permite filtrar por un dato ingresado, teniendo como primary Key el rut del paciente.
A su vez, también tenemos "buscador_lentes.php" que cumple la misma función que el buscador de pacientes, solo que su primaryKey es el ID de lente.
Además, tenemos losa archivos "eliminar***.php", "modificar***.php", los cuáles sirven para eliminar datos de la base de datos.
Lo más importante de esto, es que a partir de los datos ingresados, tenemos los archivos "fpdf" que sirven para generar una orden de trabajo en PDF y a su vez imprimirla.
Por último tenemos la rendición la cuál sirve para ingresar datos monetarios y sumarlos con un algoritmo para obtener obtener la ganancia total del día.


