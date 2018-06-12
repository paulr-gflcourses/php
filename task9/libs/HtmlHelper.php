<?php
class HtmlHelper
{

    public static function getSelectMulti($name, $elems, $selected)
    {
        $selectMulti = "<select multiple name='$name"."[]'>\n";
        foreach ($elems as $el) 
        {
            if (array_search($el, $selected)!==false)
            {
                $selectMulti .= "<option selected>$el</option>\n";
            }else
            {
                $selectMulti .= "<option>$el</option>\n";
            }
        }
        $selectMulti .= "</select>\n\n";
        return $selectMulti;
    }

    public static function getTable($name, $tableAr)
    {
        $table = "<table border='1' name='$name'>\n";
        foreach ($tableAr as $row)
        {
            $table .= "<tr>\n";
            foreach ($row as $cell)
            {
                $table .= "<td>$cell</td>\n";
            }
            $table .= "</tr>\n";
        }
        $table .= "</table>\n\n";
        return $table;
    }

    public static function getMarkeredList($name, $array)
    {
        $list = "<ul name='$name'>\n";
        foreach ($array as $el) 
        {
            $list .= "<li>$el</li>\n";
        }
        $list .= "</ul>\n\n";
        return $list;
    }

    public static function getNumberedList($name, $array)
    {
        $list = "<ol name='$name'>\n";
        foreach ($array as $el) 
        {
            $list .= "<li>$el</li>\n";
        }
        $list .= "</ol>\n\n";
        return $list;

    }

    public static function getDefinitions($name, $dict)
    {
        $def = "<dl name='$name'>\n";
        foreach ($dict as $key=>$val) 
        {
            $def .= "<dt>$key</dt>\n";
            $def .= "<dd>$val</dd>\n";
        }

        $def .= "</dl>\n\n";
        return $def;
    }

    public static function getRadioButtons($name, $options, $selected)
    {
        $radio = "";
        foreach ($options as $el) 
        {
            if ($el === $selected)
            {
                $radio .= "<p><input name='$name' type='radio' checked value='$el'>$el</p>\n";
            }else
            {
                $radio .= "<p><input name='$name' type='radio' value='$el'>$el</p>\n";
            }
        }
        return $radio."\n\n";
    }


    public static function getCheckboxes($name, $options, $selected)
    {
        $checkboxes = "";
        foreach ($options as $el) {
            if (array_search($el, $selected)!==false)
            {
                $checkboxes .= "<p><input name='$name' type='checkbox' checked value='$el'>$el</p>\n";
            }else
            {
                $checkboxes .= "<p><input name='$name' type='checkbox' value='$el'>$el</p>\n";
            }
        }
        return $checkboxes."\n\n";
    }


}

?>
