<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Submit extends Component
{
    public $name;
    public $title;
    public $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $title,
        $color
    ){
        $this->name = $name;
        $this->title = $title;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.submit');
    }
}
