<?php

abstract class Editor {
    const TYPE = 'INVALID';

    abstract public function printEditor();
    abstract public function formatEntry($data);
}
