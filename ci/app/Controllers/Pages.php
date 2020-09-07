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
        $design = new \App\Models\Designs();
        
        $incoming = $this->request->getPost();

        $id = $incoming['id'];
        $clearence = $user->where('user', $id)
                            ->findAll();
        $clearance = $clearence[0]['clearance'];
        $business = $clearence[0]['cards'];

        if ($clearance == 999) {
            $data = [
            'business' => $user->findAll(),
            ];

            echo view('dashboard', $data);
        } elseif ($clearance == 11) {
            $data = [
                'designs' => $design->where('business', $business)->findAll(),
            ];

            echo view('general', $data);
        }
        
        
    }
    
	public function addbiz()
	{
        $user = new \App\Models\Users();
        
        $incoming = $this->request->getPost();
        $name = $incoming['name'];
        $fname = $incoming['fname'];
        $number = substr(uniqid(), -4, 4) ;

        $data = [
            'user' => $name.$number,
            'clearance' => 11,
            'name' => $fname,
            'cards' => $name,
        ];
        $user->save($data);

        $this->bizlists();
    }
    
	public function newdiz()
	{
        $design = new \App\Models\Designs();
        
        $incoming = $this->request->getPost();
        $business = $incoming['business'];
        $designName = $incoming['designName'];
        $source = $incoming['source'];

        $data = [
            'business' => $business,
            'design' => $designName,
            'source_code' => $source,
        ];
        $design->save($data);

        $this->bizlists();
    }
    
	public function bizlists()
	{
        $user = new \App\Models\Users();
        $data = [
            'users' => $user->where('clearance', 11)->findAll(),
        ];
        echo view('lists', $data);
	}
    
	public function designs()
	{
        $design = new \App\Models\designs();
        $incoming = $this->request->getGet();

        $id = $incoming['sku'];
        $data = [
            'designs' => $design->where('id', $id)->findAll(),
        ];
        echo view('designpage', $data);
	}


}
