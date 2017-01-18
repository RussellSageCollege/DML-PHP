# WinDSX wrapper class.

This class wraps a few functions around the commands in WinDSX's markup language.

Usage:

```php

use Edu\Sage\Wrapper\DML as DML;

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
