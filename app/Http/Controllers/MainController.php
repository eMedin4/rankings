<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Repositories\Repository;
use App\Mail\ContactMail;

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
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.main')->with(compact('products', 'updated'));
    }

	public function single()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$search = str_replace('-', ' + ', $this->request->path());
		$products = $this->repository->search($search);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function max100()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->MaxPrice(10000);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function max200()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->MaxPrice(20000);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function b128()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(100,200);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function b256()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(200,400);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function b512()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(400,800);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}
	
	public function b1tb()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Size(800,8000);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}	

	public function fm2()
	{
		$content = config('products.descriptions')[$this->request->route()->getName()];
		$products = $this->repository->Format('M.2 Sata 3', 'M.2 PCIe');
		dd($products);
		$updated = $products->sortBy('updated_at')->first()->updated_at;
		return view('pages.category')->with(compact('products', 'content', 'updated'));
	}

	public function legal()
	{
		return view('pages.legal');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function postContact()
	{
		$this->validate($this->request, [
	        'name' => 'required|max:50',
	        'email' => 'email|required|max:255',
	        'comment' => 'required|max:5000',
	    ],[
	    	'name.required' => 'Por favor introduce tu nombre',
	    	'email.required' => 'Por favor introduce tu email',
	    	'email.email' => 'Tu email no tiene un formato válido',
	    	'comment.required' => 'Por favor escribe tu comentario'
	    ]);
	    Mail::to('elann2013@gmail.com')->send(new ContactMail($this->request->all()));
		return view('emails.success');
	}
}
