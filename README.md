# WinDSX Library PHP

Library used to generate WinDSX DML.

Install:

```bash
composer require the-sage-colleges/dml-php;
```

Usage:

```php
<?php

use Sage\DSX\DML;

class foo {
	public function bar() {

        $dml = new DML();

        $dml_cmds = array();
        $dml_cmds[] =  $dml->set_table('users');
        $dml_cmds[] = $dml->set_id('99999000');
        $dml_cmds[] = $dml->cmd_delete();

        $cmd_string = implode("\n", $dml_cmds);

        // Write commands to dsx directory
    }
}

```
