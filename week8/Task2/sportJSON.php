
<a href="sport.php?category=sport">Sport news</a> | <a href="politic.php?category=politics">Politic news</a><br/><br/>
<a href="sportJSON.php?category=sport&format=json">Sport news (JSON)</a> | <a href="politicJSON.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
$p=array($news['sport'][0],$news['politics'][1]);
echo json_encode($p);
?>