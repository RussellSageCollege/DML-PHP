<?php

/**
 * Created by PhpStorm.
 * User: melon
 * Date: 6/11/15
 * Time: 9:57 AM
 *
 * This is a wrapper around the WinDSX Markup Language, http://www.dsxinc.com/Docs/databasemgmtapi.pdf
 */
class DML
{

    /**
     * @param string $identifier
     * @return string
     */
    public function set_id($identifier = '')
    {
        return 'I L1 U1 ^' . $identifier . '^^^';
    }

    /**
     * @param string $table_name
     * @return string
     */
    public function set_table($table_name = '')
    {
        return 'T ' . $table_name;
    }

    /**
     * @param string $field_name
     * @param string $field_value
     * @return string
     */
    public function set_field($field_name = '', $field_value = '')
    {
        return 'F ' . $field_name . ' ^' . $field_value . '^^^';
    }

    /**
     * @return string
     */
    public function cmd_write()
    {
        return 'W';
    }

    /**
     * @return string
     */
    public function cmd_delete()
    {
        return 'D';
    }

    /**
     * @return string
     */
    public function cmd_update()
    {
        return 'U';
    }

    /**
     * @return string
     */
    public function cmd_print()
    {
        return 'P';
    }

}