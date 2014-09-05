<?php
/**
 * InquiryQuestionTypesAbstract
 *
 * Klasa abstrakcyjna generatorów odpowiedzi dla różnych rodzajów pytań.
 *
 * @link        http://github.com/motarny/Inquiry/modules/display
 * @author      Marcin Klimczuk
 */

abstract class InquiryQuestionTypesAbstract
{

    /**
     * @var InquiryQuestion
     */
    protected $_questionObject;
    
    /**
     * @var Smarty
     */
    protected $_template;


    /**
     * Konstruktor dziedziczony przez każdą klasę potomną.
     * 
     * @param InquiryQuestion $questionObject
     */
    public function __construct(InquiryQuestion $questionObject)
    {
        // Tworzy instancję Smarty
        $this->createTemplateInstance();
        
        $this->_questionObject = $questionObject;
        
        $this->_template->assign('questionObject', $questionObject);
    }

    
    /**
     * Wymagana metoda typu pytania generująca dane dla szablonu .tpl danego typu
     */
    protected function prepareAnswersDataForTemplate(InquiryQuestion $questionObject)
    {
        return '';
    }
    
    
    /**
     * Główna metoda generująca kod HTML dla dostępnych odpowiedzi do danego pytania.
     * Zwraca gotowy kod HTML jako string.
     * 
     * @return string
     */
    public function generateAnswerHtmlCode()
    {
        // Generowaniem danych do szablonu odpowiedzi zajmują się metody klas
        // odpowiedzialne za konkretny typ pytania.
        $answersHtmlContent = $this->prepareAnswersDataForTemplate($this->_questionObject);
        $this->_template->assign('answers', $answersHtmlContent);

        // Wygenerowane dane przypisz do szablonu Smarty danego typu pytania.
        $templateName = 'question_' . str_replace('InquiryQuestionTypes', '', get_class($this));
        
        // Zwróć gotowy kod HTML wygenerowany z szablonu danego typu pytania.
        return $this->_template->fetch($templateName . '.tpl');
    }
    

    /**
     * Standardowa metoda do generowania odpowiedzi dodatkowych.
     * 
     * @param SimpleXMLElement $extrasNode
     * @return Ambigous <NULL, string>
     */
    protected function generateAnswersExtras($extrasNode)
    {
        $allSets = null;
        foreach ($extrasNode->set as $set) {
            $extrasInSetArray = null;
            foreach ($set->extra as $extraInSet) {
                unset($tempExtra);
                $tempExtra['query']     = (string) $extraInSet->attributes()->query;
                $tempExtra['type']      = (string) $extraInSet->attributes()->type;
                $tempExtra['field']     = (string) $extraInSet->attributes()->field;
                
                $extrasInSetArray[] = $tempExtra;
            }
            $allSets[] = $extrasInSetArray;
        }
        return $allSets;
    }
    
    
    /**
     * Tworzy instancję Smarty i przypisuje do właściwości _template (protected)
     */
    private function createTemplateInstance()
    {
        $Template = new Smarty();
        $Template->template_dir = 'smarty_templates';
        $Template->compile_dir = INQUIRY_APP_ROOT_DIRECTORY . 'smarty_templates_c';
        $this->_template = $Template;
    }

    
    /**
     * Getter dla instancji Smarty
     * 
     * @return Smarty
     */
    protected function getTemplateInstance()
    {
        return $this->_template;
    }
    
    

}
