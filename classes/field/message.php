<?php

namespace Nos\Form;

class Field_Message extends Field_Abstract
{
    /**
     * Gets the HTML content
     *
     * @return array
     */
    public function getHtml()
    {
        // Gets the HTML tag to use
        if (in_array($this->field->field_style, array('p', 'h1', 'h2', 'h3'))) {
            $tag = $this->field->field_style;
        } else {
            $tag = 'p';
        }

        // Builds the HTML attributes
        $html_attrs = array(
            'id' => $this->getHtmlId(),
            'class' => 'label_text '.$this->field->field_technical_css,
        );

        return array(
            'callback' => 'html_tag',
            'args' => array($tag, $html_attrs, nl2br($this->field->field_message)),
        );
    }

    /**
     * Gets the HTML preview
     *
     * @return string
     */
    public function getPreviewHtml()
    {
        return html_tag($this->field->field_style ?: 'p', array(), nl2br($this->field->field_message));
    }

    /**
     * Gets the label
     *
     * @return string
     */
    public function getLabel()
    {
        return '';
    }
}
