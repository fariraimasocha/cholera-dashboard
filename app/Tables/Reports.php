<?php

namespace App\Tables;

use App\Models\Cholera;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use Maatwebsite\Excel\Excel;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;


class Reports extends AbstractTable
{
    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Cholera::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name', 'hospital', 'gender', 'status', 'province', 'district', 'city'])
            ->column('id', sortable: true)
            ->column('name', sortable: true)
            ->column('hospital', sortable: true)
            ->column('gender', sortable: true)
            ->column('status', sortable: true)
            ->column('province', sortable: true)
            ->column('district', sortable: true)
            ->column('city', sortable: true)
            ->column('age', sortable: true)
            ->column('created_at', sortable: true)
            ->column('updated_at', sortable: true)
            ->selectFilter('gender', [
                'male' => 'Male',
                'female' => 'Female',
            ])
            ->selectFilter('status', [
                'deceased' => 'Deceased',
                'recovered' => 'Recovered',
                'suspected' => 'Suspected',
                'confirmed' => 'Confirmed',
            ])
            ->export(
                label: 'Excel Report',
                filename: 'reports.csv',
                type: Excel::CSV
            )
            ->paginate(10);
    }
}
