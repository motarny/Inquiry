<?php
class InquiryQuestionTypesOneofmany extends  InquiryQuestionTypesAbstract
{

    protected function prepareAnswersHtmlCode($questionObject)
    {
        $answers = $questionObject->getXmlAnswers()->answer;

        $answersDisplay = null;
        foreach($answers as $answer)
        {
            $tempAnswer = null;
            $tempAnswer['value'] = (string) $answer->attributes()->value;
            $tempAnswer['description'] = (string) $answer->attributes()->description;
            if ((string) $answer->attributes()->field != '') { $tempAnswer['field'] = (string) $answer->attributes()->field; } else { $tempAnswer['field'] = (string) $answer->attributes()->value;  }

            if (isset($answer->extras))
            {
                $tempAnswer['extras'] = $this->generateAnswersExtras($answer->extras);
            } else
                $tempAnswer['extras'] = null;

            $answersDisplay[] = $tempAnswer;
        }

        return $answersDisplay;

    }




}

