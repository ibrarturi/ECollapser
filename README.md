ECollapser Yii Extension
============

A wrapper for jQuery Collapser plugin

**Requirements**

Tested with Yii 1.1.12 and 1.1.14

**Installation**

* Extract the file under protected/extensions folder.


**Usage**

 * Default Usage


```
$this->widget('application.extensions.ecollapser.ECollapser', array(
    'target' => '.collapser'
));
```

 * Usage with optional parameters

```
$this->widget('application.extensions.ecollapser.ECollapser', array(
    'target' => '.collapser',
    'options' => array(
        'mode' => 'words',  // chars, words, lines, block
	      'truncate' => 20
    )
));
```

**Resources**

 * [Project Page](http://www.aakashweb.com/docs/jquery-collapser-docs/)
 * [Demo](http://www.aakashweb.com/demos/jquery-collapser/)
