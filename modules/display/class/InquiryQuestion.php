<?
/**
 * InquiryQuestion
 *
 * Generuje obiekty - pojedyncze pytania wraz z możliwymi odpowiedziami.
 *
 * @link        http://github.com/motarny/Inquiry/modules/display
 * @author      Marcin Klimczuk
 */

class InquiryQuestion
{

    /**
     * @var string
     */
    protected $_id;

    /**
     * @var string
     */
    protected $_questionType;

    /**
     * @var string
     */
    protected $_query;

    /**
     * @var string
     */
    protected $_autofill;

    /**
     * @var SimpleXMLElement
     */
    protected $_xmlAnswers;

    /**
     * @var string
     */
    protected $_htmlAnswers;

    
    /**
     * Konstruktor - tworzy obiekt InquiryQuestion - pojedyncze pytanie ankietowe
     * wraz z możliwymi odpowiedziami.
     * 
     * @param SimpleXMLElement $xmlNode
     */
    public function __construct($xmlNode)
    {
        // Na podstawie elementu SimpleXmlElement przypisuje parametry
        $this->setId($xmlNode->attributes()->id)
            ->setQuestionType($xmlNode->attributes()->type)
            ->setQuery($this->prepareQuery($xmlNode->attributes()->query))
            ->setAutofill($this->_autofill = $xmlNode->attributes()->autofill)
            ->setXmlAnswers($xmlNode->answers)
            ->setHtmlAnswers($this->generateAnswersHtmlCode());
    }

    /**
     * Prosta metoda formatująca treść pytania
     * 
     * @param string $query
     * @return string
     */
    protected function prepareQuery($query)
    {
        $query = str_replace('|', '<br>', $query);
        return $query;
    }

    /**
     * Metoda tworząca kod HTML odpowiedzi danego pytania.
     * Na podstawie typu pytania (_questionType) tworzy instancję odpowiedniej
     * klasy (typ pytania), która generuje kod HTML.
     * 
     * @return string - Gotowy do wyświetlenia kod HTML
     */
    protected function generateAnswersHtmlCode()
    {
        // Utwórz nazwę klasy dla danego typu pytania.
        $className = 'InquiryQuestionTypes' . ucfirst($this->_questionType);
        
        // Jeśli nie ma takiej klasy, zwróć odpowiednie info.
        if (! class_exists($className)) {
            return $this->unsupportedQuestionTypeInfo($this->_questionType);
        }
        
        // Jeśli klasa istnieje, stwórz jej instancję i wywołaj generator HTML danej klasy.
        // Wszystkie typy dziedziczą po klasie InquiryQuestionTypesAbstract.
        $questionTypeObject = new $className($this);
        $generateAnswersHtmlCode = $questionTypeObject->generateAnswerHtmlCode();
        
        return $generateAnswersHtmlCode;
    }

    /**
     * Zwraca informację o nieobsługiwanym typie pytania ankietowego.
     * 
     * @param string $questionType
     * @return string
     */
    protected function unsupportedQuestionTypeInfo($questionType)
    {
        return 'nieobsługiwany typ pytania - ' . $questionType;
    }

    
    // Gettery i settery
    
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


}
