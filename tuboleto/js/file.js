
function registrar()
{
	document.location="registroUsuario.php";
}

function cancelar_registro()
{
	document.location="index.php";
}

function cerrar_session()
{
	document.location="index.php";
}

function cancelar1()
{
	document.location="menu1.php";
}

function cancelar2()
{
	document.location="menu2.php";
}

function regresar1()
{
	document.location="menu1.php";
}

function regresar2()
{
	document.location="menu2.php";
}

function inicio()
{
	document.location="index.php";
}

function cancelar_edicion()
{
	document.location="listado.php";
}

function cambiar_fecha(obj)
{
	var index = obj.selectedIndex;
	var fecha_aux = document.getElementById("fecha"+index);
	var fecha = document.getElementById("fecha");
	fecha.value = fecha_aux.value;
}

function cambiar_cedula(obj)
{
	var index = obj.selectedIndex;
	var ced_aux = document.getElementById("cedula"+index);
	var ced = document.getElementById("cedula");
	ced.value = ced_aux.value;
}

function ver_registro(pos,total)
{
	for(var i=0;i<total;i++)
	{
		document.getElementById("vista"+i).style.display='none';
	}
	document.getElementById("vista"+pos).style.display='block';
}

function eliminar_registro(id)
{
	var resp = confirm("¿Desea eliminar este registro?");

	if(resp)
	{
		document.location="listado.php?eliminar="+id;
	}
	
}