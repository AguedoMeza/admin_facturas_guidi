<?
// conectar al servidor mysql
$link = mysql_connect('localhost', 'root', 'dragonball2');
if (!$link) {
    die('Error de conexion a mysql : ' . mysql_error());
}
//conectar a la base de datos
if (! mysql_select_db('hg_beta') ) {
    die ('error de conexión base de datos : ' . mysql_error());
}
?>