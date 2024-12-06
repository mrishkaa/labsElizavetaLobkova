<?php
class Product
{
	public $name;
	public $description;
	public $price;
	public $country;

	public function about_product()
	{
		return "Имя: $this->name<br>Описание: $this->description<br>Цена: $this->price<br>Страна производителя: $this->country<br><br><br>";
	}
	public function new_information($name, $description, $country)
	{
		$this->name = $name;
		$this->description = $description;
		$this->country = $country;
	}
	public function new_cost($new_price)
	{
		$this->price = $new_price;
	}
}
?>