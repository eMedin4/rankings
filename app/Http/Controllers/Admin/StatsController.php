<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\Repository;


class StatsController extends Controller
{

	private $repository;

	public function __Construct(Repository $repository)
	{
        $this->repository = $repository;
	}

    public function stats()
    {



    }

    public function scrap()
    {

    }

}
