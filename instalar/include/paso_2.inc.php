<?php
/*******************************************************************************
* instalar/include/paso_2.inc.php
*
* Segundo paso de la instalaci�n
*

PHPfileNavigator versi�n 2.3.0

Copyright (C) 2004-2005 Lito <lito@eordes.com>

http://phpfilenavigator.litoweb.net/

Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los
t�rminos de la Licencia P�blica General de GNU seg�n es publicada por la Free
Software Foundation, bien de la versi�n 2 de dicha Licencia o bien (seg�n su
elecci�n) de cualquier versi�n posterior. 

Este programa se distribuye con la esperanza de que sea �til, pero SIN NINGUNA
GARANT�A, incluso sin la garant�a MERCANTIL impl�cita o sin garantizar la
CONVENIENCIA PARA UN PROP�SITO PARTICULAR. V�ase la Licencia P�blica General de
GNU para m�s detalles. 

Deber�a haber recibido una copia de la Licencia P�blica General junto con este
programa. Si no ha sido as�, escriba a la Free Software Foundation, Inc., en
675 Mass Ave, Cambridge, MA 02139, EEUU. 
*******************************************************************************/

defined('OK') or die();

$erros = false;
$comprobar = array();

if (is_writable($PFN_paths['servidor'])) {
	$comprobar[0] = 1;
} else {
	$erros = true;
}

if (is_writable($PFN_paths['conf'])) {
	$comprobar[1] = 1;
} else {
	$erros = true;
}

if (($basicas['version'] > 0) && is_writable($PFN_paths['conf'].'basicas.inc.php')) {
	$comprobar[2] = 1;
} elseif ($basicas['version'] == 0) {
	$comprobar[2] = 1;
} else {
	$erros = true;
}

include ($PFN_paths['instalar'].'plantillas/paso_2.inc.php');
?>
