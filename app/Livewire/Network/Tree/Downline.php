<?php

namespace App\Livewire\Network\Tree;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Downline extends Component
{
//    public $currentUser;
//    public $children; // level 1
//    public $grandchildren; // Property to hold grandchildren
//    public $greatGrandchildren; // Property to hold great-grandchildren
//    public $greatGreatGrandchildren; // Property to hold great-great-grandchildren
//    public $greatGreatGreatGrandchildren; // Property to hold great-great-great-grandchildren
//
//    public function mount()
//    {
//        // Get the current authenticated user
//        $this->currentUser = auth()->user();
//        // Load the first two children
//        if ($this->currentUser) {
//            $this->children = $this->currentUser->children()->take(2)->get();
//            $this->grandchildren = collect(); // Initialize as an empty collection
//            $this->greatGrandchildren = collect(); // Initialize as an empty collection
//            $this->greatGreatGrandchildren = collect(); // Initialize as an empty collection
//            $this->greatGreatGreatGrandchildren = collect(); // Initialize as an empty collection
//
//            // Load the first two grandchildren for each child
//            foreach ($this->children as $child) {
//                $grandchildCollection = $child->children()->take(2)->get(); // Get first two grandchildren
//                $this->grandchildren = $this->grandchildren->merge($grandchildCollection); // Merge into the main grandchildren collection
//
//                // Load the first two great-grandchildren for each grandchild
//                foreach ($grandchildCollection as $grandchild) {
//                    $greatGrandchildCollection = $grandchild->children()->take(2)->get(); // Get first two great-grandchildren
//                    $this->greatGrandchildren = $this->greatGrandchildren->merge($greatGrandchildCollection); // Merge into the main great-grandchildren collection
//
//                    // Load the first two great-great-grandchildren for each great-grandchild
//                    foreach ($greatGrandchildCollection as $greatGrandchild) {
//                        $greatGreatGrandchildCollection = $greatGrandchild->children()->take(2)->get(); // Get first two great-great-grandchildren
//                        $this->greatGreatGrandchildren = $this->greatGreatGrandchildren->merge($greatGreatGrandchildCollection); // Merge into the main great-great-grandchildren collection
//
//                        // Load the first two great-great-great-grandchildren for each great-great-grandchild
//                        foreach ($greatGreatGrandchildCollection as $greatGreatGrandchild) {
//                            $greatGreatGreatGrandchildCollection = $greatGreatGrandchild->children()->take(2)->get(); // Get first two great-great-great-grandchildren
//                            $this->greatGreatGreatGrandchildren = $this->greatGreatGreatGrandchildren->merge($greatGreatGreatGrandchildCollection); // Merge into the main great-great-great-grandchildren collection
//                        }
//                    }
//                }
//            }
//        } else {
//            $this->children = collect();
//            $this->grandchildren = collect();
//            $this->greatGrandchildren = collect();
//            $this->greatGreatGrandchildren = collect();
//            $this->greatGreatGreatGrandchildren = collect();
//        }
//    }

    public $currentUser;
    public $LevelOneCollection;
    public $LevelTwoCollection; // Collection for Level Two children
    public $LevelTwoChildrenCollections = []; // Array to hold collections of Level Two children's children

    public function mount()
    {
        $this->getCurrentUserWithChildren();
    }

    public function getCurrentUserWithChildren()
    {
        // Fetch the current authenticated user with their children
        $this->currentUser = Auth::user()->load('children');

        // Limit LevelOneCollection to only the first two children
        $this->LevelOneCollection = $this->currentUser->children->take(2);

        // Initialize LevelTwoCollection
        $this->LevelTwoCollection = collect();

        // Get first two children of each child in LevelOneCollection
        foreach ($this->LevelOneCollection as $child) {
            // Load the children of each child and take the first two
            $firstTwoChildren = $child->children->take(2);
            // Merge into LevelTwoCollection
            $this->LevelTwoCollection = $this->LevelTwoCollection->merge($firstTwoChildren);
        }

        // Now, fetch children for each child in LevelTwoCollection
        foreach ($this->LevelTwoCollection as $index => $levelTwoChild) {
            // Store the first two children of each Level Two child in an array
            $this->LevelTwoChildrenCollections[$index] = $levelTwoChild->children->take(2);
        }
    }

    public function render()
    {
        return view('livewire.network.tree.downline', [
            'currentUser' => $this->currentUser,
            'levelOne' => $this->LevelOneCollection,
            'levelTwo' => $this->LevelTwoCollection, // Pass Level Two collection to the view
            'levelTwoChildrenCollections' => $this->LevelTwoChildrenCollections, // Pass Level Two children's collections to the view
        ]);
    }

}
