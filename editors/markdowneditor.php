<?php

include_once('markdown.php');

class MarkdownEditor {
    const TYPE = 'markdown';

    public function printEditor() {
        return '';
    }
    public function formatEntry($data) {
        return Markdown($data);
    }
}
