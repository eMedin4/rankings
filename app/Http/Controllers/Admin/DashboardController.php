<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Repository;

class DashboardController extends Controller
{

	private $repository;

	public function __Construct(Repository $repository)
	{
        $this->repository = $repository;
	}

    public function main()
    {
    	$products = $this->repository->getProducts();
		return view('pages.dashboard')->with(compact('products'));
    }

    public function stats()
    {
    	$stats = config('products.stats');
    	foreach ($stats as $stat) {
    		$this->repository->setStats($stat);
    	}
    }

}
