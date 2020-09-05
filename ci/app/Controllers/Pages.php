<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		echo view('home');
    }
    
	public function login()
	{
        $user = new \App\Models\Users();
        
        $incoming = $this->request->getPost();

        $id = $incoming['id'];
        $clearence = $user->where('user', $id)
                            ->findAll();
        echo ($clearence[0]['clearance']);
        // var_dump($clearence);
	}


}
