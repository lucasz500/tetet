<?php
set_time_limit(0);

for ($i=216008090;$i<216008160;$i++)
{

$url="https://player.vimeo.com/video/$i";


        $fp = file_get_contents($url);
        if (!$fp) 
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res) 
            return null; 

        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
       
		//if (strpos($title, 'tricia Di D.') !== false) {
echo $url ." :x:x: ". $title;
		echo "<br>";
//}
}
?>