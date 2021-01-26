<?php
$heart = "\u{2764}";
$tel = "\u{260F}";
$smile = "\u{1F600}";

echo $heart;
echo '<br/>';
echo $tel;
echo '<br/>';
echo $smile;
echo '<br/>';

$name = array('type' => array('model' => 'whoops'));
$car = array(
    'type' => array(
        'brand' => 'Volkswagen',
        'model' => 'Jetta',
        'year' => 2010
    )
);
$whoops = "How'd we get here?";

#in php5 it'll be evalueted as
echo ${$name['type']['model']};