<?php

/**
 * 
 * @author Orest Hrycyna <orest.hrycyna@surfdome.com>
 */
class Item {

	public $name;
	public $sku;
	public $price;
	public $quantity;
	public $product_id;
	
	/**
	 * Custom fields
	 */
	public $shipmentRef;

	public function getFields() {
		return array(
			'name' => $this->name,
			'size' => $this->size,
			'sku' => $this->sku,
			'price' => $this->price,
			'product_id' => $this->sku,
			'quantity' => $this->quantity
		);
	}
	
}
?>