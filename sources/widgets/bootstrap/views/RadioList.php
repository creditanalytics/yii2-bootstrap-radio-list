<?php

echo \yii\helpers\Html::activeRadioList
(
    $model,
    $attribute,
    $items,
    [
        'class' => 'btn-group',
        'data-toggle' => 'buttons',
        'item' => function ( $index , $label , $name , $checked , $value )
        {
            return \yii\helpers\Html::radio
            (
                $name,
                $checked,
                [
                    'value' => $value,
                    'label' => $label,
                    'container' => false,
                    'labelOptions' =>
                    [
                        'class' => $checked ? "btn btn-{$this->context->type} btn-{$this->context->size} active"
                                            : "btn btn-{$this->context->type} btn-{$this->context->size}",
                    ],
                ]
            );
        }
    ]
);
