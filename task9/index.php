<?php
include_once "config.php";
include_once "libs/HtmlHelper.php";

$selectMulti = HtmlHelper::getSelectMulti("persons", array('John', 'Ann', 'Mike', 'Julie'), array('Ann','Julie'));
$table = HtmlHelper::getTable("matrix",[['','a','b','c','d'],['a',1,2,3,4],['b',5,6,7,8],['c',9,10,11,12],['d',13,14,15,16]]);
$markeredList = HtmlHelper::getMarkeredList('markeredList',['one','two','three','four','five']);
$numList = HtmlHelper::getNumberedList('numberedList',['one','two','three','four','five']);
$terms = array('recover'=>'to become completely well again after an illness or injury',
    'undertake'=>'to do or begin to do something, especially something that will take a long time or be difficult',
    'regret'=>'a feeling of sadness about something sad or wrong or about a mistake that you have made, and a wish that it could have been different and better',
    'derive sth from sth'=>'to get something from something else'
);
$definitions = HtmlHelper::getDefinitions('terms',$terms);
$radio = HtmlHelper::getRadioButtons('radios',array('one','two','three','four','five'),'four');
$checkboxes = HtmlHelper::getCheckboxes('checkboxes',array('one','two','three','four','five'), array('four','five'));

include_once TEMPLATE;

?>
