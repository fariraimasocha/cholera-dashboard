<?php

namespace App\Http\Controllers;

use App\Models\Cholera;
use App\Tables\Reports;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class ReportController extends Controller
{
    public function index(Request $request, Reports $table)
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%")
                        ->orWhere('hospital', 'LIKE', "%{$value}%")
                        ->orWhere('gender', 'LIKE', "%{$value}%")
                        ->orWhere('age', 'LIKE', "%{$value}%")
                        ->orWhere('province', 'LIKE', "%{$value}%")
                        ->orWhere('district', 'LIKE', "%{$value}%")
                        ->orWhere('status', 'LIKE', "%{$value}%")
                        ->orWhere('city', 'LIKE', "%{$value}%");
                });
            });
        });

        $patients = QueryBuilder::for(Cholera::class)
            ->allowedFilters([
                'name',
                'hospital',
                'gender',
                'age',
                'province',
                'district',
                'city',
                'status',
                $globalSearch,
            ])
            ->allowedSorts([
                'name',
                'hospital',
                'gender',
                'age',
                'province',
                'district',
                'city',
                'status',
            ])
            ->paginate(6)
            ->withQueryString();


        return view('reports.index', [
            'patients' => SpladeTable::for($patients)
                ->withGlobalSearch()
                ->column('id', sortable: true, searchable: true)

                ->column(
                    'name',
                    canBeHidden: false,
                    sortable: true,
                    searchable: true
                )
                ->column(
                    'province',
                    canBeHidden: false,
                    sortable: true,
                    searchable: true
                )
                ->selectFilter(
                    'status',
                    [
                        'deceased' => 'Deceased',
                        'recovered' => 'Recovered',
                        'suspected' => 'Suspected',
                        'confirmed' => 'Confirmed',
                    ],
                    'Status'
                )
                ->column('created_at', sortable: true, searchable: true)
                ->column('status', sortable: true, searchable: true)
                ->column('province', sortable: true, searchable: true)
        ]);

    }
}
