<?php
class Client
{
	public $name;
	public $lastOrder;
	public $money;

	public function about_client()
	{
		return "Клиент: $this->name<br>Последний заказ: $this->lastOrder<br>Деньги: $this->money<br><br><br>";
	}
	public function last_order($order)
	{
		$this->lastOrder = $order;
	}
	public function money($amount)
	{
		$this->money += $amount;
	}
}
?>