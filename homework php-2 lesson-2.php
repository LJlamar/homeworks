<?php
/*Александр Филин*/

/*По коду - постарался реализовать наследование абстрактного класса
Не смог понять/догадаться по пункту 1.д, в остальном вроде по делу, но если я неверно истолковал задание, прошу пояснить и привести пример правильного выполнения.*/

abstract class AbstractItem
{
    protected $price;
    protected $count1;
    protected $total;
    abstract public function total($count1, $price);
    
    
}

class WebItem extends AbstractItem{
    
    function total($count1, $price){
    $this->price = $price;
    $this->count1 = $count1;
    $this->total = $price/2 * $count1;
    echo "<p>Итоговая цена за $this->count1 мешков с песком при цене $this->price у.е. в цифровом варианте заказа составила: $this->total у.е.</p>";
    }
}

class CountItem extends AbstractItem{
    
    function total($count1, $price){
    $this->price = $price;
    $this->count1 = $count1;
    $this->total = $price * $count1;
    echo "<p>Итоговая цена за $this->count1 мешков с песком при цене $this->price у.е. составила: $this->total у.е.</p>";
    }
}

class WeightItem extends AbstractItem{
    
    function total($count1, $price){
    $this->price = $price;
    $this->count1 = $count1;
    $this->total = $price/100 * $count1;
    echo "<p>Итоговая цена за $this->count1 кг песка при цене $this->price у.е. за 100 кг составила: $this->total у.е.</p>";
    }
}

$a = new WebItem();
$a->total(1,60);

$b = new CountItem();
$b->total(5,60);

$c = new WeightItem();
$c->total(33,3897);

/* По пункту 2 задания: честно утянул с сайта https://codengineering.ru/, поскольку встрял с первым заданием значительно, такой вот текст по реализации Singleton через traits:*/

class HelloWorld 
{
    use Singleton;
    
    public function displayText() {
        echo 'Hello World!';
    }
}
HelloWorld::getInstance()->displayText();


/* Прошу при условии правильного решения сообщить что оно правильное, буду вникать. И думаю следует на занятии это свежим взглядом окинуть.*/