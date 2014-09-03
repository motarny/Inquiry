<?
class InquiryLoader
{

	private $_xmlInquiry;
	private $_questionsArray;
	private $_info;


	public function __construct($fileName)
	{
		$this->_xmlInquiry = simplexml_load_file($fileName);
		$this->setInquiryInfo();
		$this->generateQuestionsArray();
	}
	
	
 	public function getInquiryInfo()
 	{
 		return $this->_info;
 	}
	

 	public function getQuestionsArray()
 	{
 		return $this->_questionsArray;
 	}


 	
 	protected function setInquiryInfo()
 	{
 	    foreach ($this->_xmlInquiry->info->children() as $elementName => $elementValue)
 	    {
 	        $this->_info[$elementName] = str_replace('|', '<br>', $elementValue);
 	    }
 	}
 	
 	
 	protected function generateQuestionsArray()
 	{
 	    $questionsXmlInput = $this->_xmlInquiry->questions->question;
 	    $questionsArrayDisplayOutput = array ();
 	
 	    foreach ($questionsXmlInput as $questionXmlNode)
 	    {
 	        $questionOutputObject = new InquiryQuestion($questionXmlNode);
 	        $questionsArrayDisplayOutput[] = $questionOutputObject;
 	    }
 	
 	    $this->_questionsArray = $questionsArrayDisplayOutput;

 	}
 	
 	

}




