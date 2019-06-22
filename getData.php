function getData($url)
{
$ch=curl_init();
curl_setopt($ch,CURLOPT_RETURTRANSNSFER,1);
curl_setopt($ch,CURLOPT_HEADER,1);
curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0");
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch,CURLOPT_URL,$url);
$content=curl_exec($ch);
curl_close($ch);
return $content;
}