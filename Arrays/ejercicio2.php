<?php 


$pais =array('Mexico'=> 'Monterrey' ."&nbsp"."&nbsp".'Queretaro'."&nbsp"."&nbsp".'Guadalajara', 'Peru'=> 'Lima'."&nbsp"."&nbsp".'Ica'."&nbsp"."&nbsp".'Trujillo', 'Colombia'=> 'Bogota' ."&nbsp"."&nbsp". 'Cartagena'."&nbsp"."&nbsp".'Medellin', 'Brazil'=> 'Sao Paulo'."&nbsp"."&nbsp".'Rio de Janeiro'."&nbsp"."&nbsp".'Salvador de Bahia', 'Argentina'=> 'Buenos Aires'."&nbsp"."&nbsp".'Cordoba'."&nbsp"."&nbsp".'Salta');

foreach ($pais as $paises => $ciudad) {
	echo $paises .":"."&nbsp"."&nbsp"."&nbsp"."&nbsp"."&nbsp". $ciudad . '<br>'. '<br>';
}

 ?>