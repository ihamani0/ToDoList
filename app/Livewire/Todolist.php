<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\TodoList as TDL;

class Todolist extends Component
{
    use WithPagination;
    #[Rule('required|min:3|max:50')]
    public $name;
    public $serach;

    public $editeNewID;

    #[Rule('required|min:3|max:50')]
    public $editeNewName;

    public function Create(){

        //validete input
        //create
        //flash
        $valideted = $this->validateOnly('name');

        TDL::create($valideted);

        unset($this->name);

        $this->resetPage();
        session()->flash('create' , 'Created ! ');

    }

    public function delete($todoID){
        TDL::findOrFail($todoID)->delete();
    }

    public function Checked($todoID){
      $status =  TDL::findOrFail($todoID) ;
        $status->status = !( $status->status) ;
        $status->save();


    }

    public function Edite($todoID){
        $this->editeNewID = $todoID ;
        $this->editeNewName = TDL::findOrFail($todoID)->name;
}

public function Reseter(){
        unset($this->editeNewID  , $this->editeNewName);
}

public function Update(){
        $this->validateOnly($this->editeNewName);
        TDL::findOrFail($this->editeNewID)->update([
            'name' => $this->editeNewName
        ]) ;

        unset($this->editeNewID  , $this->editeNewName);

}



    public function render()
    {
        return view('livewire.todolist' ,
        [
            'Todos' => TDL::latest()
                ->where('name' , 'like' , '%'.$this->serach.'%')
                ->paginate(5),
        ]
        );
    }
}
