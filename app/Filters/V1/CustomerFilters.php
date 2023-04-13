<?php


namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class CustomerFilters extends ApiFilters {
     protected $safeParms = [
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalcode' => ['eq', 'gt', 'lt']
     ];

     protected $columMap = [
        'postalcode' => 'postal_code'
     ];

     protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
     ];

}