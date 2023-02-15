<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pages extends Component
{
    public $modalFormVisible = false;
    public $slug;
    public $title;
    public $content;
    
    /**
     * Show the Form Modal or Create the Function
     *
     * @return void
     */
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }
    
    /**
     * The Livewire Render Function
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.pages');
    }
}
