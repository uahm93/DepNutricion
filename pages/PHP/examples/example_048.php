<?php


// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('miguel angel ');
$pdf->SetTitle('Reporte IMSS');
$pdf->SetSubject('Reporte IMSS');
$pdf->SetKeywords('IMSS, PDF');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 20);

// add a page
$pdf->AddPage();

//$pdf->Write(6, 'Titulo 1111', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 9);




// -----------------------------------------------------------------------------
$nombre="MIGUEL ANGEL XOCHITEMOL TZOMPANTZI";
$edad=23;
$NSS=12345678901;
$sexo="MASCULINO";
$peso_actual=90;
$fecha=date("d/m/Y");
$estatura=1.80;
$peso_ideal=81;
$datosPersonales = <<<EOD

		<p>NOMBRE:  $nombre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSS:$NSS</p>
		<p>FECHA: $fecha &nbsp;&nbsp;&nbsp;&nbsp;EDAD: $edad&nbsp;&nbsp;&nbsp;AÑOS  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEXO: $sexo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PESO ACTUAL: $peso_actual KG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p>ESTATURA:&nbsp;&nbsp;&nbsp;&nbsp;$estatura &nbsp;&nbsp;&nbsp;&nbsp; mts. PESO IDEAL:&nbsp;&nbsp;&nbsp;&nbsp; $peso_ideal &nbsp;&nbsp; kg &nbsp;&nbsp;&nbsp;&nbsp; IMC:&nbsp;&nbsp;&nbsp;&nbsp; ICC: </p>
		<p>DIAGNOSTICO:&nbsp;&nbsp;&nbsp;&nbsp; Tx DIETETICO:&nbsp;&nbsp;&nbsp;&nbsp; KCALS:&nbsp;&nbsp;&nbsp;&nbsp; </p>

EOD;

$pdf->writeHTML($datosPersonales, true, false, false, false, '');

// -----------------------------------------------------------------------------

// -----------------------------------------------------------------------------
$numero=5;
$tbl = <<<EOD
<table cellspacing="0" cellpadding="3" border="1" style="background-color:#FFFFFF;border-collapse:collapse;border:1px solid #000000;text-align: center,color:#000000;width:100%" >
	<tr>
		<td><center>ALIMENTO </center></td>
		<td>DESAYUNO</td>
		<td>COL. MATUTINA</td>
		<td>COMIDA</td>
		<td>COL. VESPERTINA</td>
		<td>CENA</td>
	</tr>
	<tr>
		<td>LECHE</td>
		<td>$numero raciones</td>
		<td>4 raciones</td>
		<td>6 raciones</td>
		<td>2 raciones</td>
		<td>3 raciones</td>
	</tr>
	<tr>
		<td>CARNE</td>
		<td>6 raciones</td>
		<td>3 raciones</td>
		<td>2 raciones</td>
		<td>4 raciones</td>
		<td>3 raciones</td>
	</tr>
	<tr>
		<td>FRUTAS</td>
		<td>4 raciones</td>
		<td>3 raciones</td>
		<td>3 raciones</td>
		<td>3 raciones</td>
		<td>5 raciones</td>
	</tr>
	<tr>
		<td>VEGETALES</td>
		<td>4 raciones</td>
		<td>3 raciones</td>
		<td>2 raciones</td>
		<td>3 raciones</td>
		<td>4 raciones</td>
	</tr>
	<tr>
		<td>PAN Y SUST.</td>
		<td>3 raciones</td>
		<td>3 raciones</td>
		<td>3 raciones</td>
		<td>4 raciones</td>
		<td>3 raciones</td>
	</tr>
	<tr>
		<td>LEGUMINOSAS</td>
		<td>3 raciones</td>
		<td>4 raciones</td>
		<td>2 raciones</td>
		<td>1 raciones</td>
		<td>5 raciones</td>
	</tr>
	<tr>
		<td>GRASAS</td>
		<td>3 raciones</td>
		<td>2 raciones</td>
		<td>5 raciones</td>
		<td>3 raciones</td>
		<td>2 raciones</td>
	</tr>
	<tr>
		<td>AZUCARES</td>
		<td>3 raciones</td>
		<td>4 raciones</td>
		<td>2 raciones</td>
		<td>1 raciones</td>
		<td>4 raciones</td>
	</tr>
</table>

EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');



$pdf->SetFont('helvetica', '', 10);

$despuesTabla = <<<EOD

<table border="0" style="background-color:#FFFFFF;border:none; solid #000000;color:#000000;width:100%" cellpadding="1" cellspacing="0">
	<tr>
		<td><u>GRUPO DE LECHE</u></td>
		<td></td>
		<td><u>GRUPO DE VEGETALES</u></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Leche descremada o light </td>
		<td>1 taza  200ml.</td>
		<td>Acelgas</td>
		<td>50 gramos</td>
	</tr>
	<tr>
		<td>Yogurt natural o light</td>
		<td>3/4 taza</td>
		<td>Col</td>
		<td>1/2 taza</td>
	</tr>
	<tr>
		<td>Queso:Hebra,panela,reques</td>
		<td>ón 30 gramos</td>
		<td>Chayote</td>
		<td>1 pieza</td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td>Chile poblano</td>
		<td>1 pieza</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Espinaca cocida</td>
		<td>3/4 taza</td>
	</tr>
	<tr>
	<td><u>GRUPO DE CARNES</u></td>
	<td></td>
		<td>Espinaca cruda</td>
		<td>2 tazas</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Huazontle</td>
		<td>50 gramos</td>
	</tr>
	<tr>
		<td>Clara de huevo</td>
		<td>2 piezas</td>
		<td>Jitomate</td>
		<td>1 pieza</td>
	</tr>
	<tr>
		<td>Atun en agua</td>
		<td>30 gramos</td>
		<td>Pimiento</td>
		<td>1 pieza</td>
	</tr>
	<tr>
		<td>Pollo sin piel</td>
		<td>30 gramos</td>
		<td>Zanahoria</td>
		<td>1/2 taza</td>
	</tr>
	<tr>
		<td>Pescado fresco</td>
		<td>45 gramos</td>
		<td>Calabacita cruda</td>
		<td>1 1/2 taza</td>
	</tr>
	<tr>
		<td>Res magra</td>
		<td>30 gramos</td>
		<td>Calabacita cocida</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Queso panela</td>
		<td>30 gramos</td>
		<td>Betabel</td>
		<td>1/4 taza</td>
	</tr>
	<tr>
		<td>Queso cottage</td>
		<td>30 gramos</td>
		<td>Chicharo</td>
		<td>3 cucharadas</td>
	</tr>
	<tr>
		<td>Soya</td>
		<td>30 gramos</td>
		<td>Hongos</td>
		<td>3/4 taza</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Haba verde</td>
		<td>1/4 taza</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Lechuga</td>
		<td>2 tazas</td>
	</tr>
	<tr>
		<td><u>GRUPO DE FRUTAS</u></td>
		<td></td>
		<td>Apio</td>
		<td>2 tazas</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Berro</td>
		<td>2 tazas</td>
	</tr>
	<tr>
		<td>Capulines</td>
		<td>1 taza</td>
		<td>Berenjena</td>
		<td>2 tazas</td>
	</tr>
	<tr>
		<td>Ciruela</td>
		<td>2 piezas</td>
		<td>Ejote</td>
		<td>1 1/2 taza</td>
	</tr>
	<tr>
		<td>Chabacanos</td>
		<td>4 piezas</td>
		<td>Flor de calabaza</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Chicozapote</td>
		<td>1/2 pieza</td>
		<td>nopales</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Durazno</td>
		<td>1 1/2 pieza</td>
		<td>romeritos</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Fresas</td>
		<td>1 taza</td>
		<td>verdolaga cocida</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Guayaba</td>
		<td>3 medianas</td>
		<td>brocoli cocido</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Higo fresco</td>
		<td>3 piezas</td>
		<td>brocoli crudo</td>
		<td>1 taza</td>
	</tr>
	<tr>
		<td>Jicama</td>
		<td>1 taza</td>
		<td>jicama</td>
		<td>1/2 taza</td>
	</tr>
	<tr>
		<td>Kiwi</td>
		<td>1 1/2 piezas</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Sandia</td>
		<td>1 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Toronja</td>
		<td>1/2 pieza</td>
		<td><u>GRUPO DE CEREALES</u></td>
		<td></td>
	</tr>
	<tr>
		<td>Tuna</td>
		<td>2 piezas</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Lima</td>
		<td>3 piezas</td>
		<td>Bolillo</td>
		<td>1/2 pieza</td>
	</tr>
	<tr>
		<td>Mandarina</td>
		<td>2 piezas medianas</td>
		<td>pan tostado integral</td>
		<td>1 rebanada</td>
	</tr>
	<tr>
		<td>Mango</td>
		<td>1/2 pieza</td>
		<td>Tortilla de maíz</td>
		<td>1 pieza</td>
	</tr>
	<tr>
		<td>Manzana</td>
		<td>1 pieza pequeña</td>
		<td>Arroz con verduras</td>
		<td>1/2 taza</td>
	</tr>
	<tr>
		<td>Melon </td>
		<td>1 taza</td>
		<td>Sopa de pasta</td>
		<td>1/2 taza</td>
	</tr>
	<tr>
		<td>Naranja</td>
		<td>1 pieza mediana</td>
		<td>Avena con hojuelas</td>
		<td>1/3 taza</td>
	</tr>
	<tr>
		<td>Papaya</td>
		<td>1 taza</td>
		<td>Cereal integral</td>
		<td>3/4 taza</td>
	</tr>
	<tr>
		<td>Pera</td>
		<td>1 pieza pequeña</td>
		<td>Amaranto</td>
		<td>5 cucharadas</td>
	</tr>
	<tr>
		<td>Piña</td>
		<td>1 taza</td>
		<td>Pan integral</td>
		<td>1 Rebanada</td>
	</tr>
	<tr>
		<td>Uvas</td>
		<td>10 piezas</td>
		<td>Galletas integrales</td>
		<td>6 piezas</td>
	</tr>
	<tr>
		<td>Zapote</td>
		<td>1 pieza pequeña</td>
		<td>Elote entero</td>
		<td>1/2 pieza</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>Papa hervida</td>
		<td>90 gramos</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><u>LEGUMINOSAS</u></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Frijol</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Haba</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Lenteja</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Garbanzos</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Alberjones</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Soya</td>
		<td>30 gramos</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Soya hidratada</td>
		<td>1 1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Soya germinada</td>
		<td>1/2 taza</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><u>GRUPO DE GRASAS</u></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th colspan="3">Por cada ración de grasa puede consumir  5 gramos o una cucharadita cafetera de: Aceite de maíz, girasol, algodón, cártamo, soya, margarina.</th>
	</tr>
	<tr>
		<td>Aguacate</td>
		<td>40 gramos</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Nueces</td>
		<td>3 piezas</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Avellanas</td>
		<td>7 piezas</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>Almendras</td>
		<td>10 piezas</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><u>RECOMENDACIONES</u></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<th colspan="4">*Respete las cantidades de alimentación que se indique en su dieta.</th>
	</tr>
	<tr>
		<th colspan="4">*Coma la fruta y la verdura preferentemente cocida.</th>
	</tr>
	<tr>
		<th colspan="4">*No comer más cantidades de frutas de las indicadas.</th>
	</tr>
	<tr>
		<th colspan="4">*Si nunca ha realizado ejercicio inicie con 10 minutos de caminata en superficies planas, con calzado comodo y ropa adecuada y aumente progresivamente el tiempo de ejercicio paulatinamente.</th>
	</tr>
	<tr>
		<th colspan="4"><b>*ANTES DE REALIZAR CUALQUIER ACTIVIDAD FISICA O EJERCICIO CONSULTE A SU MEDICO.</b></th>
	</tr>
	<tr>
		<th colspan="4">*Asar, hervir, al vapor o al horno sus alimentos y evitar freír, capear o empanizar.</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ELABORO:</td>
		<th colspan="4" ></th>
	</tr>
</table>


EOD;

$pdf->writeHTML($despuesTabla, true, false, false, false, '');


//============================================================+
$pdf->SetFont('helvetica', '', 9);
$fAdultos=3;
$fMenores=5;
$escolaridad="superior";
$ocupacion="estudiante";
$NSS=12345678901;
$ejercicio="SI";
$datosPersonales2 = <<<EOD

		<p>NOMBRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $nombre &nbsp;&nbsp;&nbsp;&nbsp;NSS:&nbsp;&nbsp;&nbsp;&nbsp;$NSS&nbsp;&nbsp;&nbsp;&nbsp;FECHA:&nbsp;&nbsp;&nbsp;&nbsp; $fecha</p>
    <p lign="center"><b>DATOS DEL PACIENTE</b></p>
		<p>EDAD:&nbsp;&nbsp;&nbsp;&nbsp;$edad AÑOS &nbsp;&nbsp;&nbsp;&nbsp; ESCOLARIDAD:&nbsp;&nbsp;&nbsp;&nbsp;$escolaridad &nbsp;&nbsp;&nbsp;&nbsp; OCUPACION:&nbsp;&nbsp;&nbsp;&nbsp;$ocupacion  </p>
		<p>NUMERO DE FAMILIARES:&nbsp;&nbsp;&nbsp;&nbsp;ADULTOS:&nbsp;&nbsp;&nbsp;&nbsp;$fAdultos&nbsp;&nbsp;&nbsp;&nbsp; MENORES:&nbsp;&nbsp;&nbsp;&nbsp;$fMenores</p>
		<p>FACTORES QUE INTERVIENEN:&nbsp;&nbsp;&nbsp;&nbsp;   EJERCICIO:&nbsp;&nbsp;&nbsp;&nbsp; $ejercicio</p>
		<br>


EOD;

$pdf->writeHTML($datosPersonales2, true, false, false, false, '');





$pdf->SetFont('helvetica', '', 10);

$ANTECEDENTES = <<<EOD


		<p><b>ANTECEDENTES</b></p>
		<table border="0" style="background-color:#FFFFFF;border:NONE; solid #000000;color:#000000;width:100%" cellpadding="3" cellspacing="1">
			<tr>
				<td><b>NUTRICIONALES</b></td>
				<td><b>PATOLOGICOS</b></td>
				<td><b>HEREDITARIOS</b></td>
				<td><b>OTROS</b></td>
			</tr>
			<tr>
				<td>BAJO PESO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;X</td>
				<td>HIPERTENSION</td>
				<td>CANCER</td>
				<td>ALCOHOLISMO</td>
			</tr>
			<tr>
				<td>SOBREPESO	</td>
				<td>DIABETES</td>
				<td>GASTRITIS</td>
				<td>TABAQUISMO</td>
			</tr>
			<tr>
				<td>DESNUTRICION</td>
				<td>CARDIOPATIAS</td>
				<td>COLITIS</td>
				<td><b>ALERGIAS</b></td>
			</tr>
			<tr>
				<td>OBESIDAD</td>
				<td>NEFROPATIAS</td>
				<td></td>
				<td>MEDICAMENTOS</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<p><b>CANTIDAD DIARIA DE INGESTA DE ALIMENTOS</b></p>

EOD;

$pdf->writeHTML($ANTECEDENTES, true, false, false, false, '');



$pdf->SetFont('helvetica', '', 7);

$ANTECEDENTES = <<<EOD

<p></p>
		<table cellspacing="0" cellpadding="3" border="1" style="background-color:#FFFFFF;border-collapse:collapse;border:1px solid #000000;text-align: center,color:#000000;width:100%" >
			<tr>
				<td></td>
				<td><center>CARNE</center></td>
				<td>LECHE</td>
				<td>FRUTA</td>
				<td>VERDURAS</td>
				<td>CEREALES</td>
				<td>LEGUMINOSAS</td>
				<td>AZUCARES</td>
				<td>GRASAS</td>
			</tr>
			<tr>
				<td>DESAYUNO</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>COMIDA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>CENA</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>COLACIÓN</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>TOTAL</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>

		</table>

EOD;

$pdf->writeHTML($ANTECEDENTES, true, false, false, false, '');


$pdf->SetFont('helvetica', '', 9);

$aporteNutricional = <<<EOD

<table border="0" style="background-color:#FFFFFF;border:none; solid #000000;color:#000000;text-align:center;width:100%" cellpadding="1" cellspacing="0">
			<tr>
				<td>APORTE NUTRICIONAL</td>
				<td>GRAMOS</td>
				<td>%</td>
				<td>KILOCALORIAS</td>
			</tr>
			<tr>
				<td align="Left">HIDRATOS DE CARBONO</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="Left">PROTEINAS</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="Left">LIPIDOS</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td align="Left"><b>TOTALES</b></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>


EOD;
$pdf->writeHTML($aporteNutricional, true, false, false, false, '');



$pdf->SetFont('helvetica', '', 9);
$estatura="1.80";

$pAntropometrico = <<<EOD

<table cellspacing="0" cellpadding="3" border="1" style="background-color:#FFFFFF;border-collapse:collapse;border:1px solid #000000;text-align: center,color:#000000;width:100%" >
	<tr>
		<th colspan="2">VALOR INICIAL</th>
		<th colspan="5">MONITOREO</th>
	</tr>
	<tr>
		<td>P.A</td>
		<td>99</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>P.R</td>
		<td>50</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>% V.P</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ESTATURA</td>
		<td>$estatura</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>IMC</td>
		<td>150</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>PCT</td>
		<td>0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>PCSE</td>
		<td>0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>CMB</td>
		<td>0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ICC</td>
		<td>0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>COMPLEX</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>T.A</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>OTROS</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

EOD;
$pdf->writeHTML($pAntropometrico, true, false, false, false, '');




$pdf->SetFont('helvetica', '', 9);

$pBioquimico = <<<EOD


<table cellspacing="0" cellpadding="3" border="1" style="background-color:#FFFFFF;border-collapse:collapse;border:1px solid #000000;text-align: center,color:#000000;width:100%" >
	<tr>
		<td width="150" align="center">PERFIL BIOQUIMICO</td>
		<td width="100">REFERENCIA</td>
		<td width="80">VALOR INICIAL</td>
		<th width="310" colspan="4">FECHAS</th>

	</tr>
	<tr>
		<td >HEMOGLOBINA</td>
		<td>12.0-16.0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>HEMATOCITO</td>
		<td>36.0-47</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>LEUCOCITO</td>
		<td>4000-11200</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>GLUCOSA</td>
		<td>65-110</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>UREA</td>
		<td>14.0-44</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ACIDO URICO</td>
		<td>3.4-7.0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>CREATININA</td>
		<td>0.5-1.6</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>PROTEINAS TOTALES</td>
		<td>6.4-8.3</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ALBIMINA</td>
		<td>3.4- 5.0</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>BALANCE NITROGENADO</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>PERFIL DE LIPIDOS</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>COLESTEROL</td>
		<td>140-200</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>TRIGLICERIDOS</td>
		<td>40-160</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>ESPECIALES</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>OTROS</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

EOD;
$pdf->writeHTML($pBioquimico, true, false, false, false, '');







$pdf->SetFont('helvetica', '', 10);

$ANOTACIONES = <<<EOD

<table cellspacing="0" cellpadding="3" border="1" style="background-color:#FFFFFF;border-collapse:collapse;border:1px solid #000000;color:#000000;width:100%" >
	<tr>
		<td>
			<p>.</p>
			<p>.</p>
			<p>.</p>
			<p>.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>.</p>
			<p>.</p>
			<p>.</p>
			<p>.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>.</p>
			<p>.</p>
			<p>.</p>
			<p>.</p>
		</td>
	</tr>
	<tr>
		<td>
			<p>.</p>
			<p>.</p>
			<p>.</p>
			<p>.</p>
		</td>
	</tr>

</table>
<br>
<p>ELABORO:</p>

EOD;
$pdf->writeHTML($ANOTACIONES, true, false, false, false, '');



//Close and output PDF document
$pdf->Output('Reporte IMSS.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
