<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter {
    //implemente safeparams for frontend developer
    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDate' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_edate',
        'paidDate' => 'paid_date'
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