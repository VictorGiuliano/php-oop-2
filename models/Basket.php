<?
require_once __DIR__ . '/Product.php';
class Basket extends Product
{

    public $color;

    public function __construct($name, $price, $img, Category $category, $color, $type, $dimension)
    {
        parent::__construct($name, $price, $img, $category, $type, $dimension);
        $this->color = $color;
    }
    public function InfoProduct()
    {
        $category_animal = $this->category->animal;
        return "Prodotto per:$category_animal - Nome prodotto: $this->name colore: $this->color - Prezzo : $this->price - $this->img - Tipo: $this->type - Dimension: $this->dimension";
    }
}
