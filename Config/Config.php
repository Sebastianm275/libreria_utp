<?php 
	const BASE_URL = "https://libreriautp-production-c982.up.railway.app";

	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "containers-us-west-100.railway.app";
	const DB_NAME = "railway";
	const DB_USER = "root";
	const DB_PASSWORD = "EFfueSTHHCkce9YLgMFQ";
	const DB_CHARSET = "utf8";
	const DB_PORT= "6631";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	//const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";
	//LIVE PAYPAL
	const URLPAYPAL = "https://api-m.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Libreria UTP";
	const EMAIL_REMITENTE = "no-reply@libreriautp.com";
	const NOMBRE_EMPESA = "Libreria UTP";
	const WEB_EMPRESA = "www.sagesoft.com";

	const DESCRIPCION = "Tienda online de libros de la UTP.";
	const SHAREDHASH = "LibreriaUTP";

	//Datos Empresa
	const DIRECCION = "Cra. 27 #10-02, Pereira, Risaralda";
	const TELEMPRESA = "+(502)78787845";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "libreria.utp@gmail.com";
	const EMAIL_PEDIDOS = "libreria.utp@gmail.com"; 
	const EMAIL_SUSCRIPCION = "libreria.utp@gmail.com";
	const EMAIL_CONTACTO = "libreria.utp@gmail.com";

	const CAT_SLIDER = "1,2,3,4,5,6";
	const CAT_BANNER = "7,8,9";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'sagesoft';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/lireria_utp";
	const INSTAGRAM = "https://www.instagram.com/libreriautp/";
	

 ?>