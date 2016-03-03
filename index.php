<?php
//переворот списка это явно задача не на php шника. Переворот массива без array_reverse это можно понять.
//хотя вариантов много, этот самый простой
function reverse($arr)
{
	$temp = new SplDoublyLinkedList();
	$arr->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO); //режим пробежки по списку 
 
     for ($arr->rewind(); $arr->valid(); $arr->next()) { //начиная от первого , пока список не будет пустым
	 $temp->push($arr->current());
   }
   return $temp;
}
$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');
$list->push('d');
$list->push('e');
$list= reverse($list);
var_dump($list);

?>
