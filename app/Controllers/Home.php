<?php

namespace App\Controllers;

class Home extends BaseController
{	

	public function index()
	{	
		$dados['cep'] = null;

		if ($this->request->getMethod() === 'post') {	
			$retorno = $this->getCep($this->request->getVar('cep'));		

			if (!isset($retorno->erro)) {
				$dados['cep'] = $retorno;
			} else {
				echo "<script>alert('Digite um CEP válido!')</script>";
			}			
		}

		return view('home', $dados);
	}


	public function getCep($cep)
	{		
		$client = \Config\Services::curlrequest();						

		$link = "https://viacep.com.br/ws/{$cep}/json/";	
		
		$headers = [
			'User-Agent' => 'testing/1.0',
			'Accept'     => 'application/json',
			'X-Foo'      => ['Bar', 'Baz']
		];

		$retorno = $client->request('GET', $link, ['headers' => $headers]);	

		return json_decode($retorno->getBody());
		
	}
	

}
