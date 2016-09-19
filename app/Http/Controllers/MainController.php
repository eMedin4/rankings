<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Repository;

class MainController extends Controller
{
	
	private $repository;
	private $request;

	public function __Construct(Repository $repository, Request $request)
	{
        $this->repository = $repository;
        $this->request = $request;
	}

    public function main()
    {
		$products = $this->repository->getActiveProducts();
		return view('pages.main')->with(compact('products'));
    }

	public function single()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$search = str_replace('-', ' + ', $this->request->path());
		$products = $this->repository->search($search);
		return view('pages.category')->with(compact('products', 'content'));
	}

	public function max100()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->MaxPrice(10000);
		return view('pages.category')->with(compact('products', 'content'));
	}

	public function max200()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->MaxPrice(20000);
		return view('pages.category')->with(compact('products', 'content'));
	}

	public function b128()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(100,200);
		return view('pages.category')->with(compact('products', 'content'));
	}

	public function b256()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(200,400);
		return view('pages.category')->with(compact('products', 'content'));
	}

	public function b512()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(400,800);
		return view('pages.category')->with(compact('products', 'content'));
	}
	
	public function b1tb()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(800,8000);
		return view('pages.category')->with(compact('products', 'content'));
	}	

	public function fm2()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Format('M.2 Sata 3', 'M.2 PCIe');
		return view('pages.category')->with(compact('products', 'content'));
	}
}
