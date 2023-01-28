<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $heading;

    /**
     * The alert message.
     *
     * @var string
     */
    public $footer;
    /**
     * Create a new component instance.
     * @param  string  $heading
     * @param  string  $footer
     *
     * @return void
     */
    public function __construct($heading, $footer)
    {
        $this->heading = $heading;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table');
    }
}
