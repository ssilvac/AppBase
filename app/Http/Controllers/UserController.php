<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Gate;
use Styde\Html\Facades\Alert;

class UserController extends Controller {

	public function index() {

		$users = User::paginate();

		return view('admin/users/index', compact('users'));
	}

	public function edit($id) {

		$usuario = User::findOrFail($id);

		if (Gate::denies('update', $usuario)) {

			Alert::danger('No tienes permisos para editar este usuario');

			return redirect('admin/users');
		}

		return $usuario->name;

	}
}
