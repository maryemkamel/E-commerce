<?php
namespace app\View\Componenets;
use Illuminate\View\Component;
class BaseLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     * 
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.base');
    }
}
