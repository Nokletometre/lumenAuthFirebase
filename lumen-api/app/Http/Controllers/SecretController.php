<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;


use App\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SecretController extends Controller
{
  public function index(Request $request)
  {
    return new Response('Hello ' . $request->user()->name,
      200, ['Content-Type', 'text/plain']);
  }

  public function pub()
  {
    return new Response('Hello World', 200, ['Content-Type', 'text/plain']);

  }
}
