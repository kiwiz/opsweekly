<?php

/**
 * This is a editor.
 */

require_once('editor.php');

class ExampleEditor extends Editor {
    const TYPE = 'example';

    /*
     * printEditor
     *  Return any html necessary to render the editor
     *
     * @return string Some html
     */
    public function printEditor() {
        return '';
    }

    /*
     * formatEntry
     *  Format the entry using this editor
     *
     * @param string $data The input data
     *
     * @return string The output format
     */
    public function formatEntry($data) {
        return '';
    }
}
