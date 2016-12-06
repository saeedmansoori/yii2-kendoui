<?php

namespace soluto\kendoui;

use yii\helpers\html;

class Widget extends \yii\base\Widget
{
    use PluginTrait;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = $this->getId();

        echo Html::tag('div', '', ['id' => $id]);

        $this->registerPlugin();
    }
}
