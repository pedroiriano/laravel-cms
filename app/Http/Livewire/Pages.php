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

    public function create()
    {
        Page::create($this->modelData());
        $this->modalFormVisible = false;
    }
    
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
     * Data for the Model Mapped in this Component
     *
     * @return void
     */
    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
        ];
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
