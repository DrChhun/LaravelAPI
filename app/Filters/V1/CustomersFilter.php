<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomersFilter extends ApiFilter {
    //implemente safeparams for frontend developer
    protected $safeParams = [
        'id' => ['eq', 'ne'],
        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'gt']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    //implemete operator params
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];

    // public function transform(Request $request) {
    //     $eloQuery = [];

    //     foreach ($this->safeParams as $parm => $operators) {
    //         $query = $request->query($parm);
    //         if (!isset($query)) {
    //             continue;
    //         }

    //         $column = $this->columnMap[$parm] ?? $parm;

    //         foreach($operators as $operator) {
    //             if(isset($query[$operator])) {
    //                 $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
    //             }
    //         }
    //     }

    //     return $eloQuery;
    // }
}