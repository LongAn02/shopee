<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Erro extends Component
{
    public $msg;

    public $desc;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $msg,
        $desc
    ) {
        $this->msg = $msg;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.erro');
    }

    const EMPTY_TABLE = 'Empty table';
    const DESC = 'There is currently no data you need to see';
}
