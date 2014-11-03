# Yii2 Bootstrap radio list widget

## Usage example

~~~php
echo $form->field($model,'list')->widget
(
    'kolyunya\yii2\widgets\bootstrap\RadioList',
    [
        'items' =>
        [
            'value-1' => 'label-1',
            'value-2' => 'label-2',
            'value-3' => 'label-3'
        ],
        'select' => 'value-1',
        'type' => 'primary',
        'size' => 'default'
    ]
);
~~~
