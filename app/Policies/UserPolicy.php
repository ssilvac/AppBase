<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {
	use HandlesAuthorization;

	public function update($user, $usuario) {
		# user autentificado / user a editar

		return $user->isAdmin() || $user->isSelf($usuario);
	}
}
