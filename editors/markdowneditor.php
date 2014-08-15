<?php

include_once('markdown.php');
require_once('editor.php');

class MarkdownEditor extends Editor {
    const TYPE = 'markdown';

    public function printEditor() {
        return '';
    }
    public function formatEntry($data) {
        return Markdown($data);
    }
}
