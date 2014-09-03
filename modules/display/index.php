<?php
// error_reporting(E_ERROR + E_PARSE + E_COMPILE_ERROR + E_USER_ERROR);
define('INQUIRY_APP_ROOT_DIRECTORY', '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);

require ('class/InquiryLoader.php');

require ('class/InquiryQuestion.php');

require ('class/InquiryQuestionTypesAbstract.php');
require ('class/InquiryQuestionTypesOneofmany.php');
require ('class/InquiryQuestionTypesNumber.php');
require ('class/InquiryQuestionTypesDate_year.php');
require ('class/InquiryQuestionTypesTextarea.php');
require ('class/InquiryQuestionTypesManyofmany.php');

require (INQUIRY_APP_ROOT_DIRECTORY . 'lib/smarty.phar');

$Template = new Smarty();
$Template->template_dir = 'smarty_templates';
$Template->compile_dir = INQUIRY_APP_ROOT_DIRECTORY . 'smarty_templates_c';

$Template->assign('INQUIRY_APP_ROOT_DIRECTORY', INQUIRY_APP_ROOT_DIRECTORY);

$inquiryFile = 'ankieta01.xml';

$inquiryLoader = new InquiryLoader(INQUIRY_APP_ROOT_DIRECTORY . 'data' . DIRECTORY_SEPARATOR . $inquiryFile);

$inquiryInfo = $inquiryLoader->getInquiryInfo();
$inquiryQuestionsArray = $inquiryLoader->getQuestionsArray();

$Template->assign('InquiryInfo', $inquiryInfo);
$Template->assign('Questions', $inquiryQuestionsArray);

$mainContent = $Template->fetch('inquiry.tpl');

$Template->assign('mainContent', $mainContent);
$Template->display('page.tpl');

?>