<?php
/**
 * Inquiry - Display Module
 * Moduł Display służy do wyświetlenia wygenerowanej z XML ankiety.
 * 
 * @link        http://github.com/motarny/Inquiry/modules/display
 * @author      Marcin Klimczuk
 */

// Przyszłościowo - zdefiniujmy główny folder przyszłej aplikacji 
define('INQUIRY_APP_ROOT_DIRECTORY', '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);


// TODO - autoloader klas
require ('class/InquiryLoader.php');
require ('class/InquiryQuestion.php');
require ('class/InquiryQuestionTypesAbstract.php');
require ('class/InquiryQuestionTypesOneofmany.php');
require ('class/InquiryQuestionTypesNumber.php');
require ('class/InquiryQuestionTypesDate_year.php');
require ('class/InquiryQuestionTypesTextarea.php');
require ('class/InquiryQuestionTypesManyofmany.php');
require (INQUIRY_APP_ROOT_DIRECTORY . 'lib/smarty.phar');

// Przygotuj objekt obsługi szablonów Smarty
$Template = new Smarty();
    $Template->template_dir = 'smarty_templates';
    $Template->compile_dir = INQUIRY_APP_ROOT_DIRECTORY . 'smarty_templates_c';


// Dodaj główny folder aplikacji do Smarty 
$Template->assign('INQUIRY_APP_ROOT_DIRECTORY', INQUIRY_APP_ROOT_DIRECTORY);

// Pobierz plik z ankieta do wyświetlenia - na razie bez żadnych zabezpieczeń, do testów
$inquiryFile = $_GET['ankieta'];
$inquiryFileFullPath = INQUIRY_APP_ROOT_DIRECTORY . 'data' . DIRECTORY_SEPARATOR . $inquiryFile;
if (!file_exists($inquiryFileFullPath))
{
    die('Nie odnaleziono pliku z ankietą.');
}

// Utwórz obiekt klasy InquiryLoader i wczytaj XML z ankietą
$inquiryLoader = new InquiryLoader($inquiryFileFullPath);

// Pobierz z InquiryLoadera informacje o ankiecie
$inquiryInfo = $inquiryLoader->getInquiryInfo();

// Wygeneruj pytania i odpowiedzi w ankiecie 
$inquiryQuestionsArray = $inquiryLoader->getQuestionsArray();

// Przypisz odczytane dane do Smarty
$Template->assign('InquiryInfo', $inquiryInfo);
$Template->assign('Questions', $inquiryQuestionsArray);

// Wygeneruj zawartość ankiety do wyświetlenia
$mainContent = $Template->fetch('inquiry.tpl');

// Przypisz zawartość ankiety do zmiennej mainContent w głównym szablonie i wyświetl
$Template->assign('mainContent', $mainContent);
$Template->display('page.tpl');

?>