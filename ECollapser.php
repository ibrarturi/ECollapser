<?php

/**
 * Wrapper for Jquery plugin Collapser
 *
 * @author turi
 */
class ECollapser extends CWidget {

    /**
     * 
     * @var string CSS class name or Element Id 
     */
    public $target = '.collapser';

    /**
     *
     * @var array options array to pass jquery plugin 
     */
    public $options = array();

    /**
     * Init widget
     */
    public function init() {
        parent::init();

        $options_default = array(
            'mode' => 'words',  // chars, words, lines, block
            'speed' => 'slow',
            'truncate' => 20,
            'ellipsis' => '...',
            'effect' => 'fade',
            'controlBtn' => 'dsfdsf',
            'showText' => 'Show more',
            'hideText' => 'Hide text',
            'showClass' => 'show-class',
            'hideClass' => 'hide-class',
            'atStart' => 'hide',
            'lockHide' => false,
            'dynamic' => false,
            'changeText' => false,
            'beforeShow' => null,
            'afterShow' => null,
            'beforeHide' => null,
            'afterHide' => null
        );
        $this->options = array_merge($options_default, $this->options);

        $this->registerClientScript();
    }

    protected function registerClientScript() {
        $cs = Yii::app()->getClientScript();
        $scriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.ecollapser.resources'));


        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($scriptUrl . '/jquery.collapser.min.js', CClientScript::POS_END);
    }

    public function run() {
        $options = (isset($this->options)) ? $this->options : array();

        $js = "$('{$this->target}').collapser(" . CJavaScript::encode($options) . ");";

        $cs = Yii::app()->clientScript;
        $cs->registerScript('collapser', $js, CClientScript::POS_READY);
    }

}

?>