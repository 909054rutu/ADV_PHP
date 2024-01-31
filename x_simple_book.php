<?php
$xml=simplexml_load_file("x_book.xml");
if(!$xml)
die("file not found");
foreach($xml->book as $s)
{
    echo("<br><br>Title=".$s->title);
    echo("<br><br>Author=".$s->author);
    echo("<br><br>Price=".$s->price);
}