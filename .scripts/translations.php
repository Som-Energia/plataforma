<?php

$mod = $argv[1];
echo "Test Mod $mod Translations" . PHP_EOL;

$translationsDir = realpath('mod/' . $mod . '/languages');
if (!is_dir($translationsDir)) {
    error_log("Translations folder not found");
    exit(1);  
}

echo "Test load English" . PHP_EOL;
$english = include $translationsDir . '/en.php';
echo "English Count: " . count($english) . PHP_EOL;

echo "Test load Spanish" . PHP_EOL;
$spanish = include $translationsDir . '/es.php';
echo "Spanish Count: " . count($spanish) . PHP_EOL;

echo "Test load Catalan" . PHP_EOL;
$catalan = include $translationsDir . '/ca.php';
echo "Catalan Count: " . count($catalan) . PHP_EOL;

echo "Test load Basque" . PHP_EOL;
$basque = include $translationsDir . '/eu_es.php';
echo "Basque Count: " . count($catalan) . PHP_EOL;

echo "Test load Galician" . PHP_EOL;
$galician = include $translationsDir . '/gl.php';
echo "Galician Count: " . count($catalan) . PHP_EOL;

//$spanishDiff = array_diff_key($english, $spanish);
//echo "Keys not availables in Spanish" . PHP_EOL;
//foreach ($spanishDiff as $key => $value) {
//    echo $key . " : " . $value . PHP_EOL;
//}

