<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('m_pdf');

	}
 
    public function index()
    {
        $data = [];
        //load the view and saved it into $html variable
        $html=$this->load->view('welcome_message', $data, true);
 
        //this the the PDF filename that user will get to download
        $pdfFilePath = "pdf/hello.pdf";
 
        //load mPDF library
        
 
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html);
 
        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "S");        

// Sends output inline to browser
		// $mpdf = new mPDF();
		// $mpdf->WriteHTML('Hello World');

		// $mpdf->Output();

    }
}