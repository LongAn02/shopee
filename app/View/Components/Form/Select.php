<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $dataOption;
    public $label;
    public $value;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $dataOption,
        $label,
        $value,
        $title
    ){
        $this->name = $name;
        $this->dataOption = $dataOption;
        $this->label = $label;
        $this->value = $value;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
