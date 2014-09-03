<?php

abstract class InquiryQuestionTypesAbstract
{

    protected $_template;
    protected $_questionObject;


    public function __construct(InquiryQuestion $questionObject)
    {
        $this->_template = $questionObject->getTemplateInstance();
        $this->_questionObject = $questionObject;
        
        $this->_template->assign('questionObject', $questionObject);
    }

    public function generateAnswerHtmlCode()
    {
        $answersHtmlContent = $this->prepareAnswersHtmlCode($this->_questionObject);
        $this->_template->assign('answers', $answersHtmlContent);

        $templateName = 'question_' . str_replace('InquiryQuestionTypes', '', get_class($this));
        return $this->_template->fetch($templateName . '.tpl');
    }

    protected function generateAnswersExtras($extrasNode)
    {
        $allSets = null;
        foreach ($extrasNode->set as $set) {
            $extrasInSetArray = null;
            foreach ($set->extra as $extraInSet) {
                $tempExtra = null;
                $tempExtra['query'] = (string) $extraInSet->attributes()->query;
                $tempExtra['type'] = (string) $extraInSet->attributes()->type;
                $tempExtra['field'] = (string) $extraInSet->attributes()->field;
                $extrasInSetArray[] = $tempExtra;
            }
            $allSets[] = $extrasInSetArray;
        }
        return $allSets;
    }

}
