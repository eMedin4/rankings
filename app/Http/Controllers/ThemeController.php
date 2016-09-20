<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Repository;

class ThemeController extends Controller
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
		return view('pages.single')->with(compact('products', 'title', 'description'));
	}

}
