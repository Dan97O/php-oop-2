<?php
/**
 *trait Keyboard
 */
trait Keyboard
{
    protected string $type = 'HP';
    public function getTypeKeyboard(string $type = '')
    {
        return $this->type;
    }
}
