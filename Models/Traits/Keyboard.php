<?php
/**
 *trait Keyboard
 */
trait Keyboard
{
    protected string $type = 'HP';
    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
}
