<?php

namespace App\Livewire\Network\Tree;

use Livewire\Component;

class Downline extends Component
{
    public $currentUser;
    public $children; // level 1
    public $grandchildren; // Property to hold grandchildren
    public $greatGrandchildren; // Property to hold great-grandchildren
    public $greatGreatGrandchildren; // Property to hold great-great-grandchildren
    public $greatGreatGreatGrandchildren; // Property to hold great-great-great-grandchildren

    public function mount()
    {
        // Get the current authenticated user
        $this->currentUser = auth()->user();

        // Load the first two children
        if ($this->currentUser) {
            $this->children = $this->currentUser->children()->take(2)->get();
            $this->grandchildren = collect(); // Initialize as an empty collection
            $this->greatGrandchildren = collect(); // Initialize as an empty collection
            $this->greatGreatGrandchildren = collect(); // Initialize as an empty collection
            $this->greatGreatGreatGrandchildren = collect(); // Initialize as an empty collection

            // Load the first two grandchildren for each child
            foreach ($this->children as $child) {
                $grandchildCollection = $child->children()->take(2)->get(); // Get first two grandchildren
                $this->grandchildren = $this->grandchildren->merge($grandchildCollection); // Merge into the main grandchildren collection

                // Load the first two great-grandchildren for each grandchild
                foreach ($grandchildCollection as $grandchild) {
                    $greatGrandchildCollection = $grandchild->children()->take(2)->get(); // Get first two great-grandchildren
                    $this->greatGrandchildren = $this->greatGrandchildren->merge($greatGrandchildCollection); // Merge into the main great-grandchildren collection

                    // Load the first two great-great-grandchildren for each great-grandchild
                    foreach ($greatGrandchildCollection as $greatGrandchild) {
                        $greatGreatGrandchildCollection = $greatGrandchild->children()->take(2)->get(); // Get first two great-great-grandchildren
                        $this->greatGreatGrandchildren = $this->greatGreatGrandchildren->merge($greatGreatGrandchildCollection); // Merge into the main great-great-grandchildren collection

                        // Load the first two great-great-great-grandchildren for each great-great-grandchild
                        foreach ($greatGreatGrandchildCollection as $greatGreatGrandchild) {
                            $greatGreatGreatGrandchildCollection = $greatGreatGrandchild->children()->take(2)->get(); // Get first two great-great-great-grandchildren
                            $this->greatGreatGreatGrandchildren = $this->greatGreatGreatGrandchildren->merge($greatGreatGreatGrandchildCollection); // Merge into the main great-great-great-grandchildren collection
                        }
                    }
                }
            }
        } else {
            $this->children = collect(); // No user is authenticated
            $this->grandchildren = collect(); // No user is authenticated
            $this->greatGrandchildren = collect(); // No user is authenticated
            $this->greatGreatGrandchildren = collect(); // No user is authenticated
            $this->greatGreatGreatGrandchildren = collect(); // No user is authenticated
        }
    }

    public function render()
    {
        return view('livewire.network.tree.downline');
    }
}
