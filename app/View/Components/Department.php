<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Department as DepartmentModel;

class Department extends Component
{
    public $departments;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->departments = DepartmentModel::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.department');
    }
}
