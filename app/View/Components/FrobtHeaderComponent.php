<?php


namespace App\View\Components;


use App\Models\Settings;
use Closure;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FrobtHeaderComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    // Bileşen içinde $settings değişkenini aktarmak için (compact kullanarak):
    public function render(): View|Closure|string
    {
        $settings = Settings::first();
        return view('components.frobt-header-component', compact('settings'));
    }


}
