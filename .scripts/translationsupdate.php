<?php

/**
 * Script para actualizar las traducciones del mod Som Energia Translations
 */

if (php_sapi_name() !== 'cli') {
    exit();
}

define("TRANSLATIONS_MOD", "somenergia_translations");
define("FILE_EN", "en.php");
define("FILE_ES", "es.php");
define("FILE_CA", "ca.php");
define("FILE_EU", "eu_es.php");
define("FILE_GL", "gl.php");

define("FILE_START", "<?php\nreturn array(\n");
define("FILE_END", ");");


$modsToExclude = ['somenergia-upgrade', 'somenergia-customization',
    'somenergia_calendar', 'somenergia-theme', 'export_users_csv',
    'somenergia_drive', 'rm_group_reports', 'somenergia_index'];

echo "## Updating Mod Translations ##" . PHP_EOL;

$coreTranslationsFolder = realpath('./vendor/elgg/elgg/languages');
test_folder($coreTranslationsFolder, "Core Translations folder not found");

$modFolder = realpath('./mod');
test_folder($modFolder, "Mod folder not found");

$mods = get_mods($modFolder, $modsToExclude);

echo "=> Backup old English file" . PHP_EOL;
$englishTranslationFile = $modFolder . "/" . TRANSLATIONS_MOD . "/languages/" . FILE_EN;
test_file($englishTranslationFile, "Old English file not found");

$englishTranslationFileBackup = $modFolder . "/" . TRANSLATIONS_MOD . "/en.backup.php";
backup_file($englishTranslationFile, $englishTranslationFileBackup);

echo "=> Load Core English Translation File" . PHP_EOL;
$coreEnglishFile = $coreTranslationsFolder . "/" . FILE_EN;
test_file($coreEnglishFile, "Core English not found");
$englishTranslations = include $coreEnglishFile;

echo "=> Load Mods English Translations" . PHP_EOL;
foreach ($mods as $mod) {
    $modTranslationFile = $modFolder . "/" . $mod . "/languages/" . FILE_EN;
    if (is_file($modTranslationFile)) {
        echo "==> Load '$mod' English Translations" . PHP_EOL;
        if (is_old_translations($modTranslationFile)) {
            include $modTranslationFile;
        } else {
            $modEnglish = include $modTranslationFile;
            $englishTranslations = array_merge($englishTranslations, $modEnglish);
        }
    }
}

echo "=> Generate English Translation File" . PHP_EOL;
make_translation_file($englishTranslationFile, $englishTranslations);

echo "=> Backup old Spanish file" . PHP_EOL;
$spanishTranslationFile = $modFolder . "/" . TRANSLATIONS_MOD . "/languages/" . FILE_ES;
test_file($spanishTranslationFile, "Old Spanish file not found");

$spanishTranslationFileBackup = $modFolder . "/" . TRANSLATIONS_MOD . "/es.backup.php";
backup_file($spanishTranslationFile, $spanishTranslationFileBackup);

echo "=> Load Core Spanish Translation File" . PHP_EOL;
$coreSpanishFile = $coreTranslationsFolder . "/" . FILE_ES;
test_file($coreSpanishFile, "Core Spanish not found");
$spanishTranslations = include $coreSpanishFile;

echo "=> Load Mods Spanish Translations" . PHP_EOL;
foreach ($mods as $mod) {
    $modTranslationFile = $modFolder . "/" . $mod . "/languages/" . FILE_ES;
    if (is_file($modTranslationFile)) {
        echo "==> Load '$mod' Spanish Translations" . PHP_EOL;
        if (is_old_translations($modTranslationFile)) {
            include $modTranslationFile;
        } else {
            $modTranslation = include $modTranslationFile;
            $spanishTranslations = array_merge($spanishTranslations, $modTranslation);
        }
    }
}

echo "=> Override Spanish Translations" . PHP_EOL;
test_file($spanishTranslationFileBackup, "Spanish backup file not found");
$oldSpanishTranslations = include $spanishTranslationFileBackup;
$overridedSpanishTranslations = array_merge($spanishTranslations, $oldSpanishTranslations);

echo "=> Remove unused Spanish Translations" . PHP_EOL;
$spanishTranslationsToRemove = array_diff_key($overridedSpanishTranslations, $englishTranslations);
$spanishTranslationsClean = array_diff_key($overridedSpanishTranslations, $spanishTranslationsToRemove);

echo "=> Generate Spanish Translation File" . PHP_EOL;
make_translation_file($spanishTranslationFile, $spanishTranslationsClean);

echo "=> Generate Spanish TODO file" . PHP_EOL;
$spanishTranslationsTodoFile = $modFolder . "/" . TRANSLATIONS_MOD . "/es.todo.php";
$spanishTranslationsTodo = array_diff_key($englishTranslations, $spanishTranslationsClean);
make_translation_file($spanishTranslationsTodoFile, $spanishTranslationsTodo);

echo "=> Backup old Catalan file" . PHP_EOL;
$catalanTranslationFile = $modFolder . "/" . TRANSLATIONS_MOD . "/languages/" . FILE_CA;
test_file($catalanTranslationFile, "Old Catalan file not found");
$catalanTranslationFileBackup = $modFolder . "/" . TRANSLATIONS_MOD . "/ca.backup.php";
backup_file($catalanTranslationFile, $catalanTranslationFileBackup);

echo "=> Load Core Catalan Translation File" . PHP_EOL;
$coreCatalanFile = $coreTranslationsFolder . "/" . FILE_CA;
$catalanTranslations = [];
if (is_file($coreCatalanFile)) {
    $catalanTranslations = include $coreCatalanFile;
}

echo "=> Load Mods Catalan Translations" . PHP_EOL;
foreach ($mods as $mod) {
    $modTranslationFile = $modFolder . "/" . $mod . "/languages/" . FILE_CA;
    if (is_file($modTranslationFile)) {
        echo "==> Load '$mod' Catalan Translations" . PHP_EOL;
        if (is_old_translations($modTranslationFile)) {
            include $modTranslationFile;
        } else {
            $modTranslation = include $modTranslationFile;
            $catalanTranslations = array_merge($spanishTranslations, $modTranslation);
        }
    }
}

echo "=> Override Catalan Translations" . PHP_EOL;
test_file($catalanTranslationFileBackup, "Catalan backup file not found");
$oldCatalanTranslations = include $catalanTranslationFileBackup;
$overriddenCatalanTranslations = array_merge($catalanTranslations, $oldCatalanTranslations);

echo "=> Remove unused Catalan Translations" . PHP_EOL;
$catalanTranslationsToRemove = array_diff_key($overriddenCatalanTranslations, $englishTranslations);
$catalanTranslationsClean = array_diff_key($overriddenCatalanTranslations, $catalanTranslationsToRemove);

echo "=> Generate Catalan Translation File" . PHP_EOL;
make_translation_file($catalanTranslationFile, $catalanTranslationsClean);

echo "=> Generate Catalan TODO file" . PHP_EOL;
$catalanTranslationsTodoFile = $modFolder . "/" . TRANSLATIONS_MOD . "/ca.todo.php";
$catalanTranslationsTodo = array_diff_key($englishTranslations, $catalanTranslationsClean);
make_translation_file($catalanTranslationsTodoFile, $catalanTranslationsTodo);

echo "=> Backup old Basque file" . PHP_EOL;
$basqueTranslationFile = $modFolder . "/" . TRANSLATIONS_MOD . "/languages/" . FILE_EU;
test_file($basqueTranslationFile, "Old Basque file not found");
$basqueTranslationFileBackup = $modFolder . "/" . TRANSLATIONS_MOD . "/eu_es.backup.php";
backup_file($basqueTranslationFile, $basqueTranslationFileBackup);

echo "=> Load Core Basque Translation File" . PHP_EOL;
$coreBasqueFile = $coreTranslationsFolder . "/" . FILE_EU;
$basqueTranslations = [];
if (is_file($coreBasqueFile)) {
    $basqueTranslations = include $coreBasqueFile;
}

echo "=> Load Mods Basque Translations" . PHP_EOL;
foreach ($mods as $mod) {
    $modTranslationFile = $modFolder . "/" . $mod . "/languages/" . FILE_EU;
    if (is_file($modTranslationFile)) {
        echo "==> Load '$mod' Basque Translations" . PHP_EOL;
        if (is_old_translations($modTranslationFile)) {
            include $modTranslationFile;
        } else {
            $modTranslation = include $modTranslationFile;
            $basqueTranslations = array_merge($basqueTranslations, $modTranslation);
        }
    }
}

echo "=> Override Basque Translations" . PHP_EOL;
test_file($basqueTranslationFileBackup, "Basque backup file not found");
$oldBasqueTranslations = include $basqueTranslationFileBackup;
$overriddenBasqueTranslations = array_merge($basqueTranslations, $oldBasqueTranslations);

echo "=> Remove unused Basque Translations" . PHP_EOL;
$basqueTranslationsToRemove = array_diff_key($overriddenBasqueTranslations, $englishTranslations);
$basqueTranslationsClean = array_diff_key($overriddenBasqueTranslations, $basqueTranslationsToRemove);

echo "=> Generate Basque Translation File" . PHP_EOL;
make_translation_file($basqueTranslationFile, $basqueTranslationsClean);

echo "=> Generate Basque TODO file" . PHP_EOL;
$basqueTranslationsTodoFile = $modFolder . "/" . TRANSLATIONS_MOD . "/eu_es.todo.php";
$basqueTranslationsTodo = array_diff_key($englishTranslations, $basqueTranslationsClean);
make_translation_file($basqueTranslationsTodoFile, $basqueTranslationsTodo);

echo "=> Backup old Galician file" . PHP_EOL;
$galicianTranslationFile = $modFolder . "/" . TRANSLATIONS_MOD . "/languages/" . FILE_GL;
test_file($galicianTranslationFile, "Old Galician file not found");
$galicianTranslationFileBackup = $modFolder . "/" . TRANSLATIONS_MOD . "/gl.backup.php";
backup_file($galicianTranslationFile, $galicianTranslationFileBackup);

echo "=> Load Core Galician Translation File" . PHP_EOL;
$coreGalicianFile = $coreTranslationsFolder . "/" . FILE_GL;
$galicianTranslations = [];
if (is_file($coreGalicianFile)) {
    $galicianTranslations = include $coreGalicianFile;
}

echo "=> Load Mods Galician Translations" . PHP_EOL;
foreach ($mods as $mod) {
    $modTranslationFile = $modFolder . "/" . $mod . "/languages/" . FILE_GL;
    if (is_file($modTranslationFile)) {
        echo "==> Load '$mod' Galician Translations" . PHP_EOL;
        if (is_old_translations($modTranslationFile)) {
            include $modTranslationFile;
        } else {
            $modTranslation = include $modTranslationFile;
            $galicianTranslations = array_merge($galicianTranslations, $modTranslation);
        }
    }
}

echo "=> Override Galician Translations" . PHP_EOL;
test_file($galicianTranslationFileBackup, "Galician backup file not found");
$oldGalicianTranslations = include $galicianTranslationFileBackup;
$overriddenGalicianTranslations = array_merge($galicianTranslations, $oldGalicianTranslations);

echo "=> Remove unused Galician Translations" . PHP_EOL;
$galicianTranslationsToRemove = array_diff_key($overriddenGalicianTranslations, $englishTranslations);
$galicianTranslationsClean = array_diff_key($overriddenGalicianTranslations, $galicianTranslationsToRemove);

echo "=> Generate Galician Translation File" . PHP_EOL;
make_translation_file($galicianTranslationFile, $galicianTranslationsClean);

echo "=> Generate Galician TODO file" . PHP_EOL;
$galicianTranslationsTodoFile = $modFolder . "/" . TRANSLATIONS_MOD . "/gl.todo.php";
$galicianTranslationsTodo = array_diff_key($englishTranslations, $galicianTranslationsClean);
make_translation_file($galicianTranslationsTodoFile, $galicianTranslationsTodo);

echo "=> Remove English Backup File" . PHP_EOL;
unlink($englishTranslationFileBackup);
echo "=> Remove Spanish Backup File" . PHP_EOL;
unlink($spanishTranslationFileBackup);
echo "=> Remove Catalan Backup File" . PHP_EOL;
unlink($catalanTranslationFileBackup);
echo "=> Remove Basque Backup File" . PHP_EOL;
unlink($basqueTranslationFileBackup);
echo "=> Remove Galician Backup File" . PHP_EOL;
unlink($galicianTranslationFileBackup);

echo PHP_EOL;
echo "## Updated Mod Translations ##" . PHP_EOL;
echo "=> English translations funded: " . count($englishTranslations) . PHP_EOL;
echo "=> Spanish translations funded: " . count($spanishTranslationsClean) . PHP_EOL;
echo "=> Spanish translations to translate : " . count($spanishTranslationsTodo) . PHP_EOL;
echo "=> Catalan translations funded: " . count($catalanTranslationsClean) . PHP_EOL;
echo "=> Catalan translations to translate : " . count($catalanTranslationsTodo) . PHP_EOL;
echo "=> Basque translations funded: " . count($basqueTranslationsClean) . PHP_EOL;
echo "=> Basque translations to translate : " . count($basqueTranslationsTodo) . PHP_EOL;
echo "=> Galician translations funded: " . count($galicianTranslationsClean) . PHP_EOL;
echo "=> Galician translations to translate : " . count($galicianTranslationsTodo) . PHP_EOL;

function add_translation($language, $content) {
    if ($language == "en") {
        global $englishTranslations;
        $englishTranslations = array_merge($englishTranslations, $content);
    } elseif ($language == "es") {
        global $englishTranslations;
        $spanishTranslations = array_merge($spanishTranslations, $content);
    } elseif ($language == "ca") {
        global $catalanTranslations;
        $catalanTranslations = array_merge($catalanTranslations, $content);
    } elseif ($language == "eu") {
        global $basqueTranslations;
        $basqueTranslations = array_merge($basqueTranslations, $content);
    } elseif ($language == "eu_es") {
        global $basqueTranslations;
        $basqueTranslations = array_merge($basqueTranslations, $content);
    } elseif ($language == "gl") {
        global $galicianTranslations;
        $galicianTranslations = array_merge($galicianTranslations, $content);
    }
}

function make_translation_file($translationFile, $translations) {
    $fileStream = fopen($translationFile, "w") or die("Unable to open file!");
    fwrite($fileStream, FILE_START);
    foreach ($translations as $key => $value) {
        $translationValue = str_replace("'", "\'", stripslashes($value));
        $translation = "'$key' => '" . $translationValue  . "',\n";
        fwrite($fileStream, $translation);
    }
    fwrite($fileStream, FILE_END);
    close_file($fileStream);
}

function is_old_translations($file) {
    return preg_match('/add_translation/', file_get_contents($file));
}

function get_mods($modFolder, $modsToExclude) {
    $temporalMods = [];
    $iterator = new DirectoryIterator($modFolder);
    foreach ($iterator as $file) {
        if (!$file->isDot() && $file->isDir()) {
            $filename = $file->getFilename();
            if ($filename != TRANSLATIONS_MOD && !is_excluded($modsToExclude, $filename)) {
                array_push($temporalMods, $filename);
            }
        }
    }
    return $temporalMods;
}

function is_excluded($modsToExclude, $mod) {
    foreach ($modsToExclude as $key => $toExclude) {
        if ($toExclude === $mod) {
            return true;
        }
    }
    return false;
}

function close_file($fileStream, $error_message = 'Error') {
    if (!fclose($fileStream)) {
        error_log($error_message);
        exit(1);
    }
}

function backup_file($file, $newfile, $error_message = 'Error') {
    if (!copy($file, $newfile)) {
        error_log($error_message);
        exit(1);
    }
}

function test_file($file, $error_message) {
    if (!is_file($file)) {
        error_log($error_message);
        exit(1);
    }
}

function test_folder($folder, $error_message) {
    if (!is_dir($folder)) {
        error_log($error_message);
        exit(1);
    }
}
