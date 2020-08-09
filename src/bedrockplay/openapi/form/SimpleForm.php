<?php

declare(strict_types=1);

namespace bedrockplay\openapi\form;

/**
 * Class SimpleForm
 * @package bedrockplay\openapi\form
 */
class SimpleForm extends Form {
    /**
     * Form constructor.
     * @param string $title
     * @param string $content
     */
    public function __construct(string $title = "TITLE", string $content = "Content") {
        $this->data["type"] = "form";
        $this->data["title"] = $title;
        $this->data["content"] = $content;
    }

    /**
     * @param string $text
     */
    public function addButton(string $text) {
        $this->data["buttons"][] = ["text" => $text];
    }
}