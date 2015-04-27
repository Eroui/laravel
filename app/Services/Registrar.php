<?php namespace App\Services;

use App\Membre;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'nom' => 'required|max:255',
			'prenom' => 'required|max:255',
			'email' => 'required|email|max:255|unique:membres',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return Membre::create([
			'nom' => $data['nom'],
			'prenom' => $data['prenom'],
			'cin' => $data['cin'],
			'tel' => $data['tel'],
            'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
