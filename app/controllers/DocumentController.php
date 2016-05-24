<?php 
class DocumentController extends BaseController {
   
   	public function getCV () {
		return View::make('edufiles.cv');
	}

	public function getCertificate () {
		return View::make('edufiles.certificate');
	}


	public function getReferences() {
      return View::make('edufiles.references');
    }

    public function getMyRecentProjects()	{
		
		return View::make('projects.myworks');
	}


	public function getMyCoverLetter()	{
		
		return View::make('edufiles.cover');
	}



















	// public function getTest() {

	// 	$filename = 'mycv.pdf';
	// 	$path = storage_path().DIRECTORY_SEPARATOR.$filename;

	// 	return Response::make(file_get_contents($path), 200, [
	//     	'Content-Type' => 'application/pdf',
	//     	'Content-Disposition' => 'inline; '.$filename,
	// 	]);
		
		
	// }

}