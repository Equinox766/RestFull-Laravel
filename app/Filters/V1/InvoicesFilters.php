<?php


namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class InvoicesFilters extends ApiFilters {
     protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt','gt','lte','gte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq', 'lt','gt','lte','gte'],
        'paidDate' => ['eq', 'lt','gt','lte','gte'],
     ];

     protected $columMap = [
        'postalcode' => 'postal_code',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
     ];

     protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
     ];
}