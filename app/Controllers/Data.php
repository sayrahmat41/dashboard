<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;
use App\Libraries\Make_bread;
use http\Url;

class Data extends BaseController
{
	public function index()
	{
		if(!session()->get('isLoggedIn')){
			return  redirect()->to(base_url().'/auth');
		}
		$data=[
			'heading' =>'List Data',
		];
        // first load the library breadcrumb
		$make_bread = new Make_bread;
        // add the first crumb, the segment being added to the previous crumb's URL
		$make_bread->add('List Data', 'data', TRUE);
        // now, let's store the output of the breadcrumb in a variable and show it  inside a view
		$breadcrumb = $make_bread->output();
		$data['breadcrumb'] =$breadcrumb;
		$model = new  DataModel();
		$getdata = $model->findAll();
		$data['data'] = $getdata;

		return view('data/list',$data);
	}

	public function add()
	{
		if(!session()->get('isLoggedIn')){
			return  redirect()->to(base_url().'/auth');
		}

        // first load the library breadcrumb
		$make_bread = new Make_bread;
        // add the first crumb, the segment being added to the previous crumb's URL
		$make_bread->add('Data', 'data', TRUE);
		$make_bread->add('Add', 'add', TRUE);
        // now, let's store the output of the breadcrumb in a variable and show it  inside a view
		$breadcrumb = $make_bread->output();
		$data=[
			'heading' =>'Add Data',
		];
		$data['breadcrumb'] =$breadcrumb;
		helper(['form']);

		if ($this->request->getMethod()=='post'){
			$rules = [
				'nama_anak'         => 'required',
				'alamat'            => 'required',
				'berat_badan'            => 'required|numeric',
				'lingkar_lengan_atas'         => 'required|numeric',
				'lingkar_kepala' => 'required|numeric',
				'lingkar_perut' => 'required|numeric',
			];

			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new DataModel();
				$isiData = [
					'nama_anak'        => $this->request->getVar('nama_anak'),
					'alamat'           => $this->request->getVar('alamat'),
					'berat_badan'           => $this->request->getVar('berat_badan'),
					'tinggi_badan'           => $this->request->getVar('berat_badan'),
					'lingkar_lengan_atas'        => $this->request->getVar('lingkar_lengan_atas'),
					'lingkar_kepala'        => $this->request->getVar('lingkar_kepala'),
					'lingkar_perut' => $this->request->getVar('lingkar_perut'),
					'hepatitis_b'=> $this->request->getVar('hepatitis_b'),
					'polio'=> $this->request->getVar('polio'),
					'bcg'=> $this->request->getVar('bcg'),
					'dtp'=> $this->request->getVar('dtp'),
					'hib'=> $this->request->getVar('hib'),
					'pcv'=> $this->request->getVar('pcv'),
					'rotavirus'=> $this->request->getVar('rotavirus'),
					'influenza'=> $this->request->getVar('influenza'),
					'campak'=> $this->request->getVar('campak'),
					'mmr'=> $this->request->getVar('mmr'),
					'tifoid'=> $this->request->getVar('tifoid'),
					'hepatitis_a'=> $this->request->getVar('hepatitis_a'),
					'varisela'=> $this->request->getVar('varisela'),
					'hpv'=> $this->request->getVar('hpv'),
					'japanese_encephalitis'=> $this->request->getVar('japanese_encephalitis'),
					'dangue'=> $this->request->getVar('dangue'),

				];

				// echo json_encode($isiData);
				$sql=$model->insert($isiData);
				// echo $sql;
				$session = session();
				$session->setFlashdata('success', 'Successfully add data');
				return redirect()->to(base_url().'/data');
			}

		}


		return view('data/add',$data);
	}
	public function edit($id = null)
	{
		if(!session()->get('isLoggedIn')){
			return  redirect()->to(base_url().'/auth');
		}
        // first load the library breadcrumb
		$make_bread = new Make_bread;
        // add the first crumb, the segment being added to the previous crumb's URL
		$make_bread->add('Data', 'data', TRUE);
		$make_bread->add('Edit', 'edit', TRUE);
        // now, let's store the output of the breadcrumb in a variable and show it  inside a view
		$breadcrumb = $make_bread->output();
		$data=[
			'heading' =>'Update User Information',
		];
		$data['breadcrumb'] =$breadcrumb;
		helper(['form']);
		$model = new DataModel();
		$isiData = $model->where('id',$id)->first();
		$data['isiData'] =$isiData;


		return view('data/update',$data);
	}
	public function update($id = null){
		if ($this->request->getMethod()=='post'){
			$rules = [
				'nama_anak'         => 'required',
				'alamat'            => 'required',
				'berat_badan'            => 'required|numeric',
				'lingkar_lengan_atas'         => 'required|numeric',
				'lingkar_kepala' => 'required|numeric',
				'lingkar_perut' => 'required|numeric',
			];
			if(!$this->validate($rules)){
				$data['validation'] = $this->validator;
			}else{
				$model = new DataModel();
				$isiData = [
					'id'       => $id,
					'nama_anak'        => $this->request->getVar('nama_anak'),
					'alamat'           => $this->request->getVar('alamat'),
					'berat_badan'           => $this->request->getVar('berat_badan'),
					'tinggi_badan'           => $this->request->getVar('berat_badan'),
					'lingkar_lengan_atas'        => $this->request->getVar('lingkar_lengan_atas'),
					'lingkar_kepala'        => $this->request->getVar('lingkar_kepala'),
					'lingkar_perut' => $this->request->getVar('lingkar_perut'),
					'hepatitis_b'=> $this->request->getVar('hepatitis_b'),
					'polio'=> $this->request->getVar('polio'),
					'bcg'=> $this->request->getVar('bcg'),
					'dtp'=> $this->request->getVar('dtp'),
					'hib'=> $this->request->getVar('hib'),
					'pcv'=> $this->request->getVar('pcv'),
					'rotavirus'=> $this->request->getVar('rotavirus'),
					'influenza'=> $this->request->getVar('influenza'),
					'campak'=> $this->request->getVar('campak'),
					'mmr'=> $this->request->getVar('mmr'),
					'tifoid'=> $this->request->getVar('tifoid'),
					'hepatitis_a'=> $this->request->getVar('hepatitis_a'),
					'varisela'=> $this->request->getVar('varisela'),
					'hpv'=> $this->request->getVar('hpv'),
					'japanese_encephalitis'=> $this->request->getVar('japanese_encephalitis'),
					'dangue'=> $this->request->getVar('dangue'),
				];

				echo $model->save($isiData);
				$session = session();
				$session->setFlashdata('success', 'Successfully updated data');
				return redirect()->to(base_url().'/data/edit/'.$id);

			}
		}
	}
	public function delete($id = null){
		$model = new DataModel();
		$data['product'] =$model->where('id',$id)->delete($id);
		$session = session();
		$session->setFlashdata('success', 'Successfully delete data');
		return redirect()->to(base_url().'/data');
	}   
}
