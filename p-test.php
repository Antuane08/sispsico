<meta charset="utf-8">
<?php 
include("conexion.php");
include("auth.php");
$codigo=$_SESSION["usuario"];
$preg1=$_POST["preg1"];
$preg2=$_POST["preg2"];
$preg3=$_POST["preg3"];
$preg4=$_POST["preg4"];
$preg5=$_POST["preg5"];
$preg6=$_POST["preg6"];
$preg7=$_POST["preg7"];
$preg8=$_POST["preg8"];
$preg9=$_POST["preg9"];
$preg10=$_POST["preg10"];
$preg11=$_POST["preg11"];
$preg12=$_POST["preg12"];
$preg13=$_POST["preg13"];
$preg14=$_POST["preg14"];
$preg15=$_POST["preg15"];
$preg16=$_POST["preg16"];
$preg17=$_POST["preg17"];
$preg18=$_POST["preg18"];
$preg19=$_POST["preg19"];
$preg20=$_POST["preg20"];
$preg21=$_POST["preg21"];
$preg22=$_POST["preg22"];
$preg23=$_POST["preg23"];
$preg24=$_POST["preg24"];
$preg25=$_POST["preg25"];
$preg26=$_POST["preg26"];
$preg27=$_POST["preg27"];
$preg28=$_POST["preg28"];
$preg29=$_POST["preg29"];
$preg30=$_POST["preg30"];
$preg31=$_POST["preg31"];
$preg32=$_POST["preg32"];
$preg33=$_POST["preg33"];
$preg34=$_POST["preg34"];
$preg35=$_POST["preg35"];
$preg36=$_POST["preg36"];
$preg37=$_POST["preg37"];
$preg38=$_POST["preg38"];
$preg39=$_POST["preg39"];
$preg40=$_POST["preg40"];
$preg41=$_POST["preg41"];
$preg42=$_POST["preg42"];
$preg43=$_POST["preg43"];
$preg44=$_POST["preg44"];
$preg45=$_POST["preg45"];
$preg46=$_POST["preg46"];
$preg47=$_POST["preg47"];
$preg48=$_POST["preg48"];
$preg49=$_POST["preg49"];
$preg50=$_POST["preg50"];
$preg51=$_POST["preg51"];
$preg52=$_POST["preg52"];
$preg53=$_POST["preg53"];
$preg54=$_POST["preg54"];
$preg55=$_POST["preg55"];
$preg56=$_POST["preg56"];
$preg57=$_POST["preg57"];
$preg58=$_POST["preg58"];
$preg59=$_POST["preg59"];
$preg60=$_POST["preg60"];



//////////////////////////////////////////////////////////////////////////////////////////


$columna0=$preg1+$preg6+$preg11+$preg16+$preg21+$preg26;
$columna1=$preg2+$preg7+$preg12+$preg17+$preg22+$preg27;
$columna2=$preg3+$preg8+$preg13+$preg18+$preg23+$preg28;
$columna3=$preg4+$preg9+$preg14+$preg19+$preg24+$preg29;
$columna4=$preg5+$preg10+$preg15+$preg20+$preg25+$preg30;
$columna5=$preg31+$preg36+$preg41+$preg46+$preg51+$preg56;
$columna6=$preg32+$preg37+$preg42+$preg47+$preg52+$preg57;
$columna7=$preg33+$preg38+$preg43+$preg48+$preg53+$preg58;
$columna8=$preg34+$preg39+$preg44+$preg49+$preg54+$preg59;
$columna9=$preg35+$preg40+$preg45+$preg50+$preg55+$preg60;


//////////////////////////////////////////////////////////////////////////////////////////


$columnas = array($columna0,$columna1, $columna2,$columna3,$columna4,$columna5,$columna6,$columna7,$columna8,$columna9);

rsort($columnas);
$maxi =  $columnas[0]; 
$maxi2 = $columnas[1]; 
$maxi3 = $columnas[2];
//////////////////////////////////////////////////////////////////////////////////////////

switch ($maxi) {
	case $columna0:
		$desc="Actividad al aire libre";	
		$interesesc="0<br/>-Ingenieros Agrónomos <br/> -Ingenieros Forestales <br/>-Ingenieros de minas <br/>-Ingenieros pesqueros <br/>-Geólogos <br/>-Oficiales de ejército,marina,aviación,policía <br/>-Profesores de educación fisica <br/>-Avicultores";
		break;
	
	case $columna1:
		$desc="Interés mecánico-constructivo";
		$interesesc="1<br/>-Ingenieros Civiles <br/>-Ingenieros Electricistas <br/>-Ingenieros Industriales <br/>-Ingenieros Mecánicos <br/>-Ingenieros Metalúrgicos <br/>-Ingenieros Químicos <br/>-Aviadores <br/>-Técnicos en radio y TV<br/>-Ebanistas";
		break;
	case $columna2:
		$desc="Interés por el cálculo";
		$interesesc="2<br/>-Auditores <br/>-Contadores Públicos <br/>-Economistas <br/>-Estadigrafos <br/>-Matemáticos <br/>-Funcionarios Bancario";
		break;
	case $columna3:
		$desc="Interés científico";
		$interesesc="3<br/>-Antropólogos <br/>-Astrónomos <br/>-Biólogos <br/>-Ingenieros electrónicos <br/>-Ingenieros químicos <br/>-Médicos <br/>-Odontólogos <br/>-Psicólogos <br/>-Químicos <br/>-Químicos farmaceúticos <br/>-Técnicos de laboratorio ";

		break;
	case $columna4:
		$desc="Interés persuasivo";
		$interesesc="4<br/>-Escritores <br/>-Abogados <br/>-Diplomáticos <br/>-Periodistas <br/>-Politícos <br/>-Agentes de seguros <br/>-Agentes de publicidad <br/>-Jefes de ventas <br/>-Locutores de radio y TV";
		break;
	
	case $columna5:
		$desc="Interés artístico-plástico";
		$interesesc="5<br/>-Arquitectos<br/>-Decoradores de Interiores <br/>-Dibujantes, pintores <br/>-Escultores, fotógrafos";
		break;
	case $columna6:
		$desc="Interés literario";
		$interesesc="6<br/>-Escritores<br/>-Juristas<br/>-Lingüistas <br/>-Periodistas <br/>-Profesores(letras)<br/>-Traductores";
		break;
	case $columna7:
		$desc="Interés musical";
		$interesesc="7<br/>-Compositores <br/>-Músicos <br/>-Profesores de música <br/>-Artistas de Ballet";
		break;
	case $columna8:
		$desc="Interés por el servicio social";
		$interesesc="8<br/>-Consejeros Vocacionales <br/>-Enfermeros(as) <br/>-Médicos <br/>-Pedagogos en general <br/> -Sacerdotes y religiosos";
		break;
	case $columna9:
		$desc="Interés por el trabajo de oficina";
		$interesesc="9<br/>-Archivistas <br/>-Contadores <br/>-Secretarios(as) <br/>-Taquígrafos(as) <br/>-Tenedores de libros";
		break;

}


//////////////////////////////////////////////////////////////////////////////////////////

 switch ($maxi2) {
	case $columna9:
		 $desc1="Interés por el trabajo de oficina";
		 $interesesc2="9<br/>-Archivistas <br/>-Contadores <br/>-Secretarios(as) <br/>-Taquígrafos(as) <br/>-Tenedores de libros";
	         break;
	case $columna8:
		 $desc1="Interés por el servicio social";
         $interesesc2="8<br/>-Consejeros Vocacionales <br/>-Enfermeros(as) <br/>-Médicos <br/>-Pedagogos en general <br/> -Sacerdotes y religiosos";
		     break;
	case $columna7:
		 $desc1="Interés musical";
		 $interesesc2="7<br/>-Compositores <br/>-Músicos <br/>-Profesores de música <br/>-Artistas de Ballet";
		     break;
	case $columna6:
		 $desc1="Interés literario";
		 $interesesc2="6<br/>-Escritores<br/>-Juristas<br/>-Lingüistas <br/>-Periodistas <br/>-Profesores(letras)<br/>-Traductores";
		     break;
	case $columna5:
         $desc1="Interés artístico-plástico";
         $interesesc2="5<br/>-Arquitectos<br/>-Decoradores de Interiores <br/>-Dibujantes, pintores <br/>-Escultores, fotógrafos";
		     break;
	case $columna4:
		 $desc1="Interés persuasivo";
		 $interesesc2="4<br/>-Escritores <br/>-Abogados <br/>-Diplomáticos <br/>-Periodistas <br/>-Politícos <br/>-Agentes de seguros <br/>-Agentes de publicidad <br/>-Jefes de ventas <br/>-Locutores de radio y TV";
		     break;
	case $columna3:
	     $desc1="Interés científico";
		 $interesesc2="3<br/>-Antropólogos <br/>-Astrónomos <br/>-Biólogos <br/>-Ingenieros electrónicos <br/>-Ingenieros químicos <br/>-Médicos <br/>-Odontólogos <br/>-Psicólogos <br/>-Químicos <br/>-Químicos farmaceúticos <br/>-Técnicos de laboratorio ";
		     break;	
	case $columna2:
	     $desc1="Interés por el cálculo";
		 $interesesc2="2<br/>-Auditores <br/>-Contadores Públicos <br/>-Economistas <br/>-Estadigrafos <br/>-Matemáticos <br/>-Funcionarios Bancario";
	         break;
	case $columna1:
	     $desc1="Interés mecánico-constructivo";
	     $interesesc2="1<br/>-Ingenieros Civiles <br/>-Ingenieros Electricistas <br/>-Ingenieros Industriales <br/>-Ingenieros Mecánicos <br/>-Ingenieros Metalúrgicos <br/>-Ingenieros Químicos <br/>-Aviadores <br/>-Técnicos en radio y TV<br/>-Ebanistas";
		     break;

	case $columna0:
         $desc1="Actividad al aire libre";	
         $interesesc2="0<br/>-Ingenieros Agrónomos <br/> -Ingenieros Forestales <br/>-Ingenieros de minas <br/>-Ingenieros pesqueros <br/>-Geólogos <br/>-Oficiales de ejército,marina,aviación,policía <br/>-Profesores de educación fisica <br/>-Avicultores";
		     break; 
         }	

//////////////////////////////////////////////////////////////////////////////////////////


if ($maxi==$columna0 && $maxi2==$columna1 || $maxi2==$columna0 && $maxi==$columna1 ) {
	$comb="01 Ingenieros agrónomos (maquinarias agrícolas), civiles, (hidráulica, transportes), de minas, navales, de petróleo. Topógrafos.";
}
elseif ($maxi==$columna0 && $maxi2==$columna2 || $maxi2==$columna0 && $maxi==$columna2) {
	$comb="02 Ingenieros agrónomos (estadística, economía), Meteorólogos.";
}
elseif ($maxi==$columna0 && $maxi2==$columna3 || $maxi2==$columna0 && $maxi==$columna3 ) {
	$comb="03 Ingenieros agrónomos (fitotecnia, parasitología), forestales, sanitarios. Arqueólogos. Geólogos. Médicos veterinarios.";
}
elseif ($maxi==$columna0 && $maxi2==$columna8 || $maxi2==$columna0 && $maxi==$columna8) {
	$comb="08 Profesores de educación física, Trabajadores sociales.";
}
elseif ($maxi==$columna1 && $maxi2==$columna2 || $maxi2==$columna1 && $maxi==$columna2) {
	$comb="12 Ingenieros civiles, electricistas, electrónicos, mecánicos.";
}
elseif ($maxi==$columna1 && $maxi2==$columna3 || $maxi2==$columna1 && $maxi==$columna3) {
	$comb="13 Ingenieros civiles, electricistas, electrónicos, industriales, mecánicos, químicos, Geólogos, Odontólogos, Optómetras, Técnicos de laboratorio.";
}
elseif ($maxi==$columna1 && $maxi2==$columna4 || $maxi2==$columna1 && $maxi==$columna4) {
	$comb="14 Ingenieros industriales. Personal de venta de maquinarias, automóviles, etc.";
}
elseif ($maxi==$columna1 && $maxi2==$columna5 || $maxi2==$columna1 && $maxi==$columna5) {
	$comb="15 Arquitectos, Ingenieros textiles, Profesores de artes manuales.";
}
elseif ($maxi==$columna1 && $maxi2==$columna7 || $maxi2==$columna1 && $maxi==$columna7) {
	$comb="17 Ingenieros de sonido.";
}
elseif ($maxi==$columna1 && $maxi2==$columna8 || $maxi2==$columna1 && $maxi==$columna8) {
	$comb="18 Profesores de materias técnicas.";
}
elseif ($maxi==$columna2 && $maxi2==$columna3 || $maxi2==$columna2 && $maxi==$columna3) {
	$comb="23 Ingenieros (véase 13), Astrónomos, Economistas, Físicos, Matemáticos, Químicos.";
}
elseif ($maxi==$columna2 && $maxi2==$columna4 || $maxi2==$columna2 && $maxi==$columna4) {
	$comb="24 Administradores de negocios, Economistas.";
}
elseif ($maxi==$columna2 && $maxi2==$columna5 || $maxi2==$columna2 && $maxi==$columna5) {
	$comb="25 Arquitectos, Ingenieros civiles.";
}
elseif ($maxi==$columna2 && $maxi2==$columna8 || $maxi2==$columna2 && $maxi==$columna8) {
	$comb="28 Economistas, Profesores (matemáticas, materias comerciales).";
}
elseif ($maxi==$columna2 && $maxi2==$columna9 || $maxi2==$columna2 && $maxi==$columna9) {
	$comb="29 Contadores públicos, Empleados bancarios, Tenedores de libros.";
}
elseif ($maxi==$columna3 && $maxi2==$columna4 || $maxi2==$columna3 && $maxi==$columna4) {
	$comb="34 Especialistas en ciencias sociales, Farmacéuticas, Profesores (ciencias).";
}
elseif ($maxi==$columna3 && $maxi2==$columna5 || $maxi2==$columna3 && $maxi==$columna5) {
	$comb="35 Arquitectos-urbanistas, Arqueólogos, Médicos-cirujanos, Odontólogos.";
}
elseif ($maxi==$columna3 && $maxi2==$columna6 || $maxi2==$columna3 && $maxi==$columna6) {
	$comb="36 Filologos, Médicos, Psicólogos, Sociólogos.";
}
elseif ($maxi==$columna3 && $maxi2==$columna7 || $maxi2==$columna3 && $maxi==$columna7) {
	$comb="37 Ingenieros de sonido.";
}
elseif ($maxi==$columna3 && $maxi2==$columna8 || $maxi2==$columna3 && $maxi==$columna8) {
	$comb="38 Consejeros vocacionales, Médicos, Psicólogos, Profesores (ciencias).";
}
elseif ($maxi==$columna4 && $maxi2==$columna5 || $maxi2==$columna4 && $maxi==$columna5) {
	$comb="45 Decoradores de interiores, Dibujantes publicitarios, Directores de cine y TV.";
}
elseif ($maxi==$columna4 && $maxi2==$columna6 || $maxi2==$columna4 && $maxi==$columna6 ) {
	$comb="46 Escritores, Diplomáticos, Juristas, Periodistas, Profesores (letras).";
}
elseif ($maxi==$columna4 && $maxi2==$columna7 || $maxi2==$columna4 && $maxi==$columna7) {
	$comb="47 Actores y actrices, Directores musicales, Profesores de música y canto.";
}
elseif ($maxi==$columna4 && $maxi2==$columna8 || $maxi2==$columna4 && $maxi==$columna8) {
	$comb="48 Consejeros vocacionales, Juristas, Periodistas, Trabajadores sociales.";
}
elseif ($maxi==$columna4 && $maxi2==$columna9 || $maxi2==$columna4 && $maxi==$columna9 ) {
	$comb="49 Administradores de negocios, Diplomáticos.";
}
elseif ($maxi==$columna5 && $maxi2==$columna6 || $maxi2==$columna5 && $maxi==$columna6) {
	$comb="56 Actores  y actrices, Escritores.";
}
elseif ($maxi==$columna5 && $maxi2==$columna8 || $maxi2==$columna5 && $maxi==$columna8) {
	$comb="58 Profesores de artes manuales.";
}
elseif ($maxi==$columna6 && $maxi2==$columna7 || $maxi2==$columna6 && $maxi==$columna7) {
	$comb="67 Actores y actrices, Profesores de música y canto.";
}
elseif ($maxi==$columna6 && $maxi2==$columna8 || $maxi2==$columna6 && $maxi==$columna8) {
	$comb="68 <br> Especialistas en ciencias sociales, Profesores (letras y ciencias sociales).";
}
elseif ($maxi==$columna6 && $maxi2==$columna9 || $maxi2==$columna6 && $maxi==$columna9) {
	$comb="69 Bibliotecarios, Secretarios.";
}
elseif ($maxi==$columna7 && $maxi2==$columna8 || $maxi2==$columna7 && $maxi==$columna8) {
	$comb="78 Profesores (música, baile).";
}
elseif ($maxi==$columna8 && $maxi2==$columna9 || $maxi2==$columna8 && $maxi==$columna9) {
	$comb="89 Profesores de materias comerciales.";
}

//////////////////////////////////////////////////////////////////////////////////////////

if ($maxi==$maxi3 && $maxi3==$maxi2 ) {
	
	$desc="";
	$interesesc="";
	$desc1="";
	$interesesc2="";
	$comb="";
	$reco="Realizar un test de inteligencia multiple";
}
else if ($maxi2==$maxi3) {
	$desc="";
	$interesesc="";
	$desc1="";
	$interesesc1="";
	$interesesc2="";
	$comb="";
	$reco="Realizar un test de inteligencia multiple";

}
else{
    $reco="El test cumple";
}


//////////////////////////////////////////////////////////////////////////////////////////



$sql= "update  k_test set  estado_test= 'inhabilitado', r1= $preg1, r2=$preg2 , r3=$preg3  , r4=$preg4 , r5=$preg5, r6=$preg6, r7=$preg7, r8=$preg8 , r9=$preg9 , r10=$preg10 , r11=$preg11 , r12=$preg12 , r13=$preg13 , r14=$preg14 , r15=$preg15 , r16=$preg16 , r17=$preg17 , r18=$preg18 , r19=$preg19 , r20=$preg20 , r21=$preg21 , r22=$preg22 , r23=$preg23 , r24=$preg24 , r25=$preg25 , r26=$preg26 , r27=$preg27 , r28=$preg28 , r29=$preg29, r30=$preg30 , r31=$preg31 , r32=$preg32 , r33=$preg33 , r34=$preg34 , r35=$preg35 , r36=$preg36 , r37=$preg37, r38=$preg38 , r39=$preg39 , r40=$preg40 , r41=$preg41 , r42=$preg42 , r43=$preg43 , r44=$preg44 , r45=$preg45 , r46=$preg46 , r47=$preg47 , r48=$preg48 , r49=$preg49 , r50=$preg50 , r51=$preg51 , r52=$preg52 , r53=$preg53 , r54=$preg54 , r55=$preg55 , r56=$preg56 , r57=$preg57 , r58=$preg58 , r59=$preg59 , r60=$preg60  where codalumno=$codigo and estado_test='habilitado'";


//////////////////////////////////////////////////////////////////////////////////////////



$sql2 = "insert into k_resultado(codalumno, resultadoc0, resultadoc1, resultadoc2, resultadoc3 , resultadoc4, resultadoc5, resultadoc6, resultadoc7, resultadoc8, resultadoc9, descripcion1,    descripcion2, intereses_actividades1, intereses_actividades2, combinacion_intereses, recomendacion) values('$codigo',$columna0, $columna1, $columna2, $columna3, $columna4, $columna5, $columna6, $columna7, $columna8,$columna9,'$desc','$desc1','$interesesc','$interesesc2','$comb','$reco' )";


mysql_query($sql,$cn);
mysql_query($sql2,$cn);



header('location:principalalum.php');
 ?>


