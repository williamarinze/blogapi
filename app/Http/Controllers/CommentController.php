<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laraquick\Controllers\Traits\Api;

class CommentController extends Controller
{
	use Api;

    public function model() {
    return Post::class;
  }

  public function validationRules(array $data, $id = null) {
    return [
      'comment' => 'required|string',
    ];
  }
}
