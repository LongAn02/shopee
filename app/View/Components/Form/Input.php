<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $title;
    public $name;
    public $type;
    public $val;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title,
        $name,
        $type,
        $val = ''
    ) {
        $this->title = $title;
        $this->name = $name;
        $this->type = $type;
        $this->val = $val;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
