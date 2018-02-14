<?php 
echo '1.<br><br>';

$str = 'Дата 28-02-2018 является последним днем в месяце, а дата 07.02.2018 не является';

$patterns = array ('/(\d{1,2})([-\.])(\d{1,2})[-\.](\d{4})/','/^\s*{(\w+)}\s*=/');
$replace = array ('\4/\3/\1', '$\1 =');
echo preg_replace($patterns, $replace, $str);

echo '<br><br><br>2.<br>';

$string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$newString;

$vowels = ('/[aeiou]/');
// $vowels = ('/a/');

$words = array();
$words = preg_split('/ /', trim($string));

// echo '<pre>';
// var_dump($words);
// echo '</pre>';

foreach ($words as $key => $word) {
	// $counter = count(preg_match_all($vowels, $word));
	if(preg_match_all($vowels, $word, $matches) !== 0) {
		foreach ($matches as $match) {
				if ((count($match) % 2) == 0) {
					$newString = $newString . ' ' . $word;
				}
				unset($word);
		}
	}

}
echo $newString;