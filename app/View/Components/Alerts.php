<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class Alerts extends Component
{
    public $message;
    public $status;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        if (Session::has('success')) {
            $this->message = Session::get('success');
            $this->status = 'success';
        } elseif (Session::has('error')) {
            $this->message = Session::get('error');
            $this->status = 'danger';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts');
    }
}
