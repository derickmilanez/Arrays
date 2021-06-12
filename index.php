<html>
<head></head>
<body>
<?php
$dadodeteste = array();
$dadodeteste["palavra in english"] = "toy";
$dadodeteste["numero"] = "55";
$dadodeteste["jogo foda"] = "smash bros";
unset($dadodeteste["jogo foda"]);
foreach ($dadodeteste as $key => $value){
	echo "$key"." : "."$value"."<br>";
}
/*
$dadoes = array("dado gigante","dado grande","dado enorme","mini dado","mini dado","chester");
$dadoes[] = "joyster";
$dadoes[] = "sei lá mano kkk";
$unique = array_unique($dadoes);
foreach ($unique as $key => $value){
	echo "$value"."<br>";
}
$dadinhos = array("curso" => "astrologistica","número" => "255","palavra foda" => "biotônico");
foreach ($dadinhos as $key => $value){
	echo "$key"." : "."$value"."<br>";
}
$dados = array("sonic","fotocópia","comissão européia");
foreach ($dados as $key => $value){
	echo "dados[$key]=$value<br>";
}

echo $dados[0]."<br>".$dados[1]."<br>".$dados[2]."<br>";
*/
?>
</body>
</html>