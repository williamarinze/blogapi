<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    use Api;

    public function model() {
    return Post::class;
  }

  public function validationRules(array $data, $id = null) {
    return [
      'name' => 'required|string',
      'email' => 'required|email',
      'password'=> 'required|password'
    ];
  }
}
