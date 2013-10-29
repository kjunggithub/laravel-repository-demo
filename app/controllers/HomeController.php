<?php

use Promo\Repositories\UserRepository;

class HomeController extends BaseController {

	protected $user;

	public function __construct(UserRepository $user)
	{
		$this->user = $user;
	}

	public function index()
	{
		$this->user->getHighest();
	}

}