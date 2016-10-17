<?php
function phparray_jscript($array, $jsarray)
{
    function loop_through($array,$dimen,$localarray)
    {
        foreach($array as $key => $value)
        {
            if(is_array($value))
            {
                echo ($localarray.$dimen."[\"$key\"] = new Array();\n");
                loop_through($value,($dimen."[\"".$key."\"]"),$localarray);
            }
            else
            {
                echo ($localarray.$dimen."[\"$key\"] = \"$value\";\n");
            }
        }
    }

    echo "<script language=\"Javascript1.1\">\n";
    echo "var $jsarray = new Array();\n";
    loop_through($array,"",$jsarray);
    echo "</script>";
}
?>

