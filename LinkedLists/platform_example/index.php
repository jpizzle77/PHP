<?php


Class Node
    {

    public function __construct($val)
        {
            $this->value = $val;
            $this->next = null;
        }
    }

Class SinglyLinkedList
    {

    public function __construct()
        {
            $this->head = null;
            $this->tail = null;
        }
   }

/*$list = new SinglyLinkedList();
$list->head = new Node('Alice');
var_dump($list->next) . "heres the head " . '<br>';


echo '<br>';
$list->head->next = new Node('Chad');
var_dump($head->next->value);
$list->head->next->next = new Node('Debra');
var_dump($head->next->value);
//var_dump($list);*/

$node1 = new Node("cat");
var_dump($node1);
$node2 = new Node("dog");
var_dump($node2);
$node3 = new Node("lion");
$node4 = new Node("wolf");


$node1->next = $node2;

var_dump($node1->next);







?>