<?

class InquiryQuestion
{

    protected $_id;

    protected $_questionType;

    protected $_query;

    protected $_autofill;

    protected $_xmlAnswers;

    protected $_htmlAnswers;

    protected $_template;

    public function __construct($xmlNode)
    {
        $this->createTemplateInstance();
        
        $this->setId($xmlNode->attributes()->id)
            ->setQuestionType($xmlNode->attributes()->type)
            ->setQuery($this->prepareQuery($xmlNode->attributes()->query))
            ->setAutofill($this->_autofill = $xmlNode->attributes()->autofill)
            ->setXmlAnswers($xmlNode->answers)
            ->setHtmlAnswers($this->generateAnswersHtmlCode());
    }

    protected function prepareQuery($query)
    {
        $query = str_replace('|', '<br>', $query);
        return $query;
    }

    protected function generateAnswersHtmlCode()
    {
        $className = 'InquiryQuestionTypes' . ucfirst($this->_questionType);
        
        if (! class_exists($className)) {
            return $this->unsupportedQuestionTypeInfo($this->_questionType);
        }
        
        $questionTypeObject = new $className($this);
        $generateAnswersHtmlCode = $questionTypeObject->generateAnswerHtmlCode();
        
        return $generateAnswersHtmlCode;
    }

    protected function unsupportedQuestionTypeInfo($questionType)
    {
        return 'nieobsługiwany typ pytania - ' . $questionType;
    }

    public function setId($value)
    {
        $this->_id = (string) $value;
        return $this;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function setQuestionType($value)
    {
        $this->_questionType = $value;
        return $this;
    }

    public function getQuestionType()
    {
        return $this->_questionType;
    }

    public function setQuery($value)
    {
        $this->_query = $value;
        return $this;
    }

    public function getQuery()
    {
        return $this->_query;
    }

    public function setAutofill($value)
    {
        $this->_autofill = $value;
        return $this;
    }

    public function getAutofill()
    {
        return $this->_autofill;
    }

    public function setXmlAnswers($value)
    {
        $this->_xmlAnswers = $value;
        return $this;
    }

    public function getXmlAnswers()
    {
        return $this->_xmlAnswers;
    }

    public function setHtmlAnswers($value)
    {
        $this->_htmlAnswers = $value;
        return $this;
    }

    public function getHtmlAnswers()
    {
        return $this->_htmlAnswers;
    }

    public function getExtrasForAnswer($answerValue)
    {
        $answers = $this->getXmlAnswers();
        
        foreach ($answers->answer as $answer) {
            if ($answer->attributes()->value == $answerValue) {
                if (isset($answer->extras)) {
                    $extrasSet = $answer->extras;
                    return $extrasSet;
                }
            }
        }
        
        return null;
    }

    protected function createTemplateInstance()
    {
        $Template = new Smarty();
        $Template->template_dir = 'smarty_templates';
        $Template->compile_dir = INQUIRY_APP_ROOT_DIRECTORY . 'smarty_templates_c';
        $this->_template = $Template;
    }

    public function getTemplateInstance()
    {
        return $this->_template;
    }
}
