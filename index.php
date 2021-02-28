<?php

header('Content-type: text/html; charset=utf-8');

//URL da API
$url = "http://ajax.googleapis.com/ajax/services/search/web?v=2.0&hl=pt-br&cr=countryBR&q=codigofonte.net";

// Enviando a requisição da URL via Curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, "http://seusite.com");
$body = curl_exec($ch);
curl_close($ch);
//Processando a string Json
$json = json_decode($body);

//Array com os resultados
$array = $json->responseData->results;

//Total de resultados retornados
$n_result = "Aproximadamente ".$json->responseData->cursor->estimatedResultCount;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Busca do Google Usando a API e PHP</title>
</head>
<body><center>

<?

//Imprimindo os resultados
echo "<div style='position:relative;width:80%;height:600px;text-align:left;'>";
foreach($array as $key){
//Div para cada resultado
echo "<div style='border:01px solid #CCCCCC;margin:02px;padding:02px;width:75%;'>";

$ret_url = $key->url;

echo "<a href=".$ret_url.">";
echo "<span style='color:blue;font-size:18px;font-weight:bold;'>".$key->title."</span>";
echo "</a>";
echo "<br/>";
echo "<span style='color:black;font-size:12px;'>".$key->content."</span>";
echo "<br/>";
echo "<span style='color:green;font-size:14px;font-weight:bold;'>".$key->visibleUrl."</span>";
echo "<br/>";
$cache = $key->cacheUrl;
echo "<a href=".$cache.">";
echo "<span style='color:#CCCCCC;font-size:12px;'>CACHE...</span>";
echo "</a>";
echo "</div>";
}
//Fim da lista de resultados

//Mostra o total de resultados encontrados
echo $n_result;

echo "</div>";


?>
</center></body>
</html>
