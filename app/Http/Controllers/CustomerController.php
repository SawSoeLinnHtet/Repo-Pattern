<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
  public function index()
  {
    $customers = Customer::orderBy('name')
    ->where('active',1)
    ->with('user')
    ->get()
    ->map(function($customers){
      return[
        'customer_id' => $customers->id,
        'name' => $customers->name,
        'created_by' => $customers->user->email,
        'last_updated' => $customers->updated_at->diffForHumans(),
      ];
    });

    return $customers;
  }
}