<?php

namespace App;

use SplQueue;

class SquareDance implements Gender
{
    protected SplQueue $danceMale;
    protected SplQueue $danceFemale;

    public function __construct()
    {
        $this->danceMale = new SplQueue();
        $this->danceFemale = new SplQueue();
    }

    public function addDancer($dancer)
    {
        if ($dancer->getGender() === Gender::MALE) {
            $this->danceMale->enqueue($dancer->getName());
        } else {

            $this->danceFemale->enqueue($dancer->getName());
        }
    }

    public function getDancer(): string
    {
        while (!$this->isMaleEmpty() || !$this->isFemaleEmpty()) {
            if ($this->isMaleEmpty()) {
                return count($this->danceMale) . " Nam dang cho" . "<br>";
            }
            if ($this->isFemaleEmpty()) {
                return count($this->danceFemale) . " Nu dang cho" . "<br>";
            }
            echo $this->danceMale->dequeue() . " cap cung voi " . $this->danceFemale->dequeue() . "<br>";
        }
    }

    public function isMaleEmpty(): bool
    {
       return $this->danceMale->isEmpty();
    }

    public function isFemaleEmpty(): bool
    {
        return $this->danceFemale->isEmpty();
    }

}