<?php

class WYSIWYGEditor {
    const TYPE = 'wysiwyg';

    public function printEditor() {
        return "<script>$('.textarea').wysihtml5({'image': false, 'color': false});</script>";
    }
    public function formatEntry($data) {
        return $data;
    }
}
