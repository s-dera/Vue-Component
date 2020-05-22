<?php

namespace Acme\ColorPicker;

use Laravel\Nova\Fields\Field;

class ColorPicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color-picker';

    public function chose(array $chose)
    {
        return $this->withMeta(['chose' => $chose]);
    }
}
