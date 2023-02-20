<?
include __DIR__ . '/Category.php';
class Product
{
    public $name;
    public $price;
    public $img;
    public $category;

    function __construct($name, $price, $img, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
    }
    public function InfoProduct()
    {
        $category_animal = $this->category->animal;
        return "Prodotto per:$category_animal - $this->name - Prezzo : $this->price - $this->img";
    }
}
