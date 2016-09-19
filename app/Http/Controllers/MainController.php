<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Repository;

class MainController extends Controller
{
	
	private $repository;

	public function __Construct(Repository $repository)
	{
        $this->repository = $repository;
	}

    public function main()
    {
		$products = $this->repository->getActiveProducts();
		return view('pages.main')->with(compact('products'));
    }

	public function single(Request $request)
	{
		$title = str_replace('-', ' ', $request->path());
		$description = config('products.descriptions')[$request->route()->getName()];
		$search = str_replace('-', ' + ', $request->path());
		$products = $this->repository->search($search);
		return view('pages.category')->with(compact('products', 'title', 'description'));
	}

	public function max100()
	{
		$data = [
			'h1' => 'Discos SSD baratos',
			'h2' => '¿Cuales son los mejores discos ssd por menos de 100€?',
			'p'  => ''
		];
		$products = $this->repository->MaxPrice(100);
		return view('pages.category')->with(compact('products'));
	}

	public function max200()
	{
		$data = [
			'h1' => 'Discos SSD recomendados',
			'h2' => 'Valoramos los mejores discos SSD por menos de 200€',
			'p'  => ''
		];
		$products = $this->repository->MaxPrice(200);
		return view('pages.category')->with(compact('products'));
	}

	public function b128()
	{
		$products = $this->repository->Size(100,200);
		return view('pages.category')->with(compact('products'));
	}

	public function b256()
	{
		$products = $this->repository->Size(200,400);
		return view('pages.category')->with(compact('products'));
	}

	public function b512()
	{
		$products = $this->repository->Size(400,800);
		return view('pages.category')->with(compact('products'));
	}
	
	public function b1tb()
	{
		$products = $this->repository->Size(800,8000);
		return view('pages.category')->with(compact('products'));
	}	

	public function fm2()
	{
		$products = $this->repository->Format('M.2 Sata 3', 'M.2 PCIe');
		return view('pages.category')->with(compact('products'));
	}
}
