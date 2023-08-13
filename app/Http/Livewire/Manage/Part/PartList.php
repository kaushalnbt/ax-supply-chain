<?php

namespace App\Http\Livewire\Manage\Part;

use App\Models\Part;
use Livewire\Component;
use Livewire\WithPagination;

class PartList extends Component
{
    use WithPagination;

    protected $listeners = ['newPartCreated' => 'handleNewPartCreation'];

    public function render()
    {
        return view('livewire.manage.part.part-list',[
            'parts' => Part::paginate(10)
        ]);
    }

    public function handleNewPartCreation(){
        // $this->render();
        $this->gotoPage(Part::paginate(10)->lastPage());
    }
}
