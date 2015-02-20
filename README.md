# Yii2-wizard [![Latest Stable Version](https://poser.pugx.org/chd7well/yii2-wizard/v/stable.svg)](https://packagist.org/packages/chd7well/yii2-wizard) [![Total Downloads](https://poser.pugx.org/chd7well/yii2-wizard/downloads.svg)](https://packagist.org/packages/chd7well/yii2-wizard) [![License](https://poser.pugx.org/chd7well/yii2-wizard/license.svg)](https://packagist.org/packages/chd7well/yii2-wizard)

A wizard for multi form input!


> **NOTE:** Module is in initial development. Anything may change at any time.

If you want to use more menues as the mainmenu (sys_menu_type.ID=1) then you must define a module parameter '7well/smartmenu/onlymainmenu' = 0 at bootstrap!

##Quick Start
```
  $tabs = [
  		[
  			'tabtitle'=>'Test1',
  			'tabcontent'=>'<h2>Test1</h2>blabla',		
  		],
  		[
  		'tabtitle'=>'Test2',
  		'tabcontent'=>'<h2>Test2</h2>blabla',
  		],
  		[
  		'tabtitle'=>'Test3',
  		'tabcontent'=>'<h2>Test3</h2>blabla',
  		],
  ];
    
   echo Wizard::widget(['tabs'=>$tabs]);
  ```
    
## Roadmap
- Tests
- Documentation

## Documentation

[Installation instructions](doc/installation.md) | [Definitive guide to Yii2-smartmenu](doc/README.md)

## Contributing

Contributing instructions are located in [CONTRIBUTING.md](CONTRIBUTING.md) file.

## License

Yii2-smartmenu is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md) for details.

