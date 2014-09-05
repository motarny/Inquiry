<?

/**
 * InquiryLoader
 * 
 * Klasa wczytująca plik XML z ankietą oraz generująca pytania
 * i odpowiedzi do wyświetlenia.
 * 
 * @link        http://github.com/motarny/Inquiry/modules/display
 * @author      Marcin Klimczuk
 */

class InquiryLoader
{

    /**
     * @var SimpleXMLElement
     */
    private $_xmlInquiry;

    /**
     * @var array
     */
    private $_questionsArray;

    /**
     * @var SimpleXMLElement
     */
    private $_info;

    /**
     * Tworzy obiekt InquiryLoader, pobiera informacje o ankiecie i generuje pytania.
     * 
     * @param string $fileName Ścieżka i nazwa pliku XML z ankietą
     */
    public function __construct($fileName)
    {
        $this->_xmlInquiry = simplexml_load_file($fileName);
        $this->setInquiryInfo();
        $this->generateQuestionsArray();
    }

    /**
     * Getter dla informacji o ankiecie
     * 
     * @return SimpleXMLElement
     */
    public function getInquiryInfo()
    {
        return $this->_info;
    }

    /**
     * Zwraca tablicę z wygenerowanymi pytaniami - do wyświetlenia.
     * 
     * @return array
     */
    public function getQuestionsArray()
    {
        return $this->_questionsArray;
    }

    /**
     * Pobiera z _xmlInquiry informacje opisowe o ankiecie i przypisuje do _info
     */
    protected function setInquiryInfo()
    {
        foreach ($this->_xmlInquiry->info->children() as $elementName => $elementValue) {
            $this->_info[$elementName] = str_replace('|', '<br>', $elementValue);
        }
    }

    /**
     * Metoda wywołująca odpowiednie generatory pytań i odpowiedzi
     * 
     * @return array
     */
    protected function generateQuestionsArray()
    {
        $questionsXmlInput = $this->_xmlInquiry->questions->question;
        $questionsArrayDisplayOutput = array();
        
        foreach ($questionsXmlInput as $questionXmlNode) {
            $questionOutputObject = new InquiryQuestion($questionXmlNode);
            $questionsArrayDisplayOutput[] = $questionOutputObject;
        }
        
        $this->_questionsArray = $questionsArrayDisplayOutput;
    }
}




