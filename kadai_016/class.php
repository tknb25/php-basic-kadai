<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       class Food {
           public $name;
           public $price;

            public function show_price(string $price) {
                $this->price = $price;
                echo $this->price . '<br>';
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
       }

       class Animal {
            public $name;
            public $height;
            public $weight;

            public function show_height(string $height) {
                $this->height = $height;
                echo $this->height . '<br>';
            }

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
       }

        $curry = new Food('カレー', 500);
        print_r($curry);
        echo '<br>';

        $curry->show_price(600);

        $dog = new Animal('犬', 50, 20);
        print_r($dog);
        echo '<br>';

        $dog->show_height(60);
       ?>
   </p>

</body>

</html>