<?php

namespace App\Livewire\Admin\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserList extends DataTableComponent
{
    protected $model = User::class;
    protected $index = 0;

    public function configure(): void
    {
        $this->setPrimaryKey('id');

        // Check the role of the authenticated user and set query accordingly

    }
    public function builder(): Builder
    {
        if (auth()->user()->hasRole('admin-tps')) {

            return User::query()->whereHas('roles', function ($query) {
                $query->whereIn('name', ['admin-tps', 'tps']);
            });
        } elseif (auth()->user()->hasRole('super-admin')) {
            // Display all users for 'superadmin'
            return User::query();
        }
    }
    public function updatedPage()
    {
        $this->updateIndex();
    }
    private function updateIndex()
    {
        $this->index = $this->page > 1 ? ($this->page - 1) * $this->perPage : 0;
    }
    public function columns(): array
    {
        return [
            Column::make("#", "id")->format(fn() => ++$this->index),
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Email', 'email')->sortable(),
            Column::make('Role', 'updated_at')
                ->format(function ($value, $row, Column $column) {
                    return $row->getRoleNames()->first();
                })
                ->html()
                ->searchable(),
            Column::make('Handle TPS', 'handleTps.region_nm'),
            Column::make('Action', 'id')->view('components.table-action'),
        ];
    }
}
