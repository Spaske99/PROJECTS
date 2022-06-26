<?php


class Product {

    /**
     * This attribute is barcode 
     * of product
     * @var int
     */
    protected $barCode;

    /**
     * This attribute is title 
     * of product
     * @var string
     */
    protected $title;

    /**
     * This attribute is price 
     * of product
     * @var float
     */
    protected $price;


    /**
     * Construct
     * 
     * @param int $barcode
     * @param string $title
     * @param float $price
     * 
     * @return void
     */
    public function __construct(int $barCode, string $title, float $price) {
        $this->setBarCode($barCode);
        $this->setTitle($title);
        $this->setPrice($price);
    }


    /**
     * This is geter of barcode
     * @return int $barcode
     */
    public function getBarCode(): int {
        return $this->barCode;
    }

    /**
     * This is geter of title
     * @return string $title
     */
    public function getTitle(): string {
        return $this->title;
    }

    /**
     * This is geter of price
     * @return float $price
     */
    public function getPrice(): float {
        return $this->price;
    }


    /**
     * This is seter of barCode
     * @param int $barcode
     * @return bool false if barcode is not ok
     * @return Product $this if barcode is ok
     */
    public function setBarCode(int $barCode): mixed {
        if (!is_int($barCode) || $barCode < 0) {
            return false;
        }
        $this->barCode = $barCode;
        return $this;
    }

    /**
     * This is seter of title
     * @param string $title
     * @return bool false if title is not ok
     * @return Product $this if title is ok
     */
    public function setTitle($title): mixed {
        if (!is_string($title) || empty($title)) {
            return false;
        }
        $this->title = $title;
        return $this;
    }

    /**
     * This is seter of price
     * @param float $price
     * @return bool false if price is not ok
     * @return Product $this if price is ok
     */
    public function setPrice($price): mixed {
        if (!is_numeric($price) || $price < 0) {
            return false;
        }
        $this->price = $price;
        return $this;
    }
}

class ShoppingCartItem {

    /**
     * @var Product
     */
    protected $product;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * Construct
     * 
     * @param Product $product
     * @param int $quantity
     * @return void
     */
    public function __construct(Product $product, int $quantity) {
        $this->setProduct($product);
        $this->setQuantity($quantity);
    }

    /**
     * This is geter of product
     * @return Product $product
     */
    public function getProduct() {
        return $this->product;
    }

    /**
     * This is geter of quantity
     * @return int $quantity
     */
    public function getQuantity() {
        return $this->quantity;
    }

    public function getSubtotal() {
        return $this->getProduct()->getPrice() * $this->getQuantity();
    }

    /**
     * This is seter of product
     * @param Product $product
     * @return bool false if product is not ok
     * @return ShoppingCartItem $this if product is ok
     */
    public function setProduct(Product $product) {
       if (!($product instanceof Product)) {
           return false;
       }
        $this->product = $product;
        return $this;
    }

    /**
     * This is seter of quantity
     * @param int $quantity
     * @return bool false if quantity is not ok
     * @return ShoppingCartItem $this if quantity is ok
     */
    public function setQuantity($quantity) {
        if (!is_numeric($quantity) || $quantity < 0) {
            return false;
        }
        $this->quantity = $quantity;
        return $this;
    }

}

class ShoppingCart {

    /**
     * @var ShoppingCartItem[]
     */
    protected $items = [];

    /**
     * This is geter of items
     * @return array $items
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * This is seter of quantity
     * @param Product $product
     * @param int $quantity = 1
     * @return ShoppingCart $this if quantity is ok
     */
    public function addProduct(Product $product, $quantity = 1) {
        $flag = false;
        foreach ($this->getItems() as $item) {
            if ($item->getProduct()->getBarCode() == $product->getBarCode()) {
                $item->setQuantity($item->getQuantity() + $quantity);
                $flag = true;
            }
        }
        if (!$flag) {
            $this->items[] = new ShoppingCartItem($product, $quantity);
        }
        return $this;
    }

    
    public function removeProduct(Product $product) {
        if($product instanceof Product) {
            foreach ($this->getItems() as $key => $item) {
                if ($item->getProduct()->getBarCode() == $product->getBarCode()) {
                    unset($this->items[$key]);
                }
            }
        }
        return $this;
    }
}

class Checkout {
    public function printCheck(ShoppingCart $shoppingCart) {
        ?>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-0pky">Barcode</th>
                    <th class="tg-0pky">Product</th>
                    <th class="tg-0pky">Price</th>
                    <th class="tg-0pky">Quantity</th>
                    <th class="tg-0lax">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                ?>
                <?php foreach ($shoppingCart->getItems() as $item) { ?>
                    <?php $subtotal = $item->getSubtotal(); ?>
                    <?php $total += $subtotal; ?>
                    <tr>
                        <td class="tg-0lax"><?php echo htmlspecialchars($item->getProduct()->getBarCode()); ?></td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($item->getProduct()->getTitle()); ?></td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($item->getProduct()->getPrice()); ?></td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($item->getQuantity()); ?></td>
                        <td class="tg-0lax"><?php echo htmlspecialchars($subtotal); ?></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td class="tg-0lax" colspan="3"></td>
                    <td class="tg-0lax">VAT/TOTAL</td>
                    <td class="tg-0lax"><?php echo htmlspecialchars($total); ?></td>
                </tr>
            </tbody>
        </table>
        <?php
    }

}

$p1 = new Product(123456, 'Mleko 1.5L', 150);
$p2 = new Product(223458, 'Sir 1kg', 400);
$p3 = new Product(923459, 'Mlecna cokolada 300g', 300);
$p4 = new Product(823450, 'Napolitanke', 220);
$p5 = new Product(323356, 'Zenski sampon', 550);

$cart1 = new ShoppingCart();

$cart1->addProduct($p1, 1)
        ->addProduct($p2)
        ->addProduct($p3, 1)
        ->addProduct($p4, 2)
        ->addProduct($p5, 1)
        ->addProduct($p1, 2)
        ->addProduct($p2, 1)
        ->removeProduct($p2)
        ->addProduct($p3, 2)
        ->addProduct($p2, 3)
        ->addProduct($p5, 2);

$chekout = new Checkout();

$chekout->printCheck($cart1);














// $product55 = new Product(153468, "Cokolada", 230);

// $shoppingcartitem = new ShoppingCartItem($product55, 5);

// $product550->getTitle();
// $shoppingcartitem->getProduct()->getTitle();