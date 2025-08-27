<html>
    <body>
        <h1>Hello, from Hezekiah Sarita!</h1>
    </body>
    <?php
    echo "Hello World!";
    ?>

    <br>
    
    <?php
    $x = 15;
    $y = 3;
    $sum = $x + $y;

    echo "The sum is $sum.";

    if($y % $x == 0) {
        echo "$y is a factor of $x";
    }else{
        echo "$y is not a factor 0f $x";
    }
    ?>
    <?php
        for($i = 1; $i <= 10; $i++){
            echo "$i <br>";
        }
    ?>
    <?php
    for($i; $i <= 100; $i++){
        if($i % 3 == 0|| $i % 5 == 0){
            echo "$i";
        }
    }
    ?>
    <?php
        $products = array("Product A", "Product B", "Product C");
        foreach($products as $p){
            echo "$p <br>";
        }     
    ?>
    <h3>My First PHP Program</h3>
    <?php    
        $products = array("name"=> "Product A", "price"=>10.50, "stock"=>12);
        echo $products["name"]
    ?>
    <?php
        $products = array(
            array("name"=> "Product A", "price"=>10.50, "stock"=>12),
            array("name"=> "Product B", "price"=>5.60, "stock"=>7),
            array("name"=> "Product C", "price"=>7.00, "stock"=>5)
        );
        foreach($products as $p){
            echo $p["name"] . " is " . $p["price"] . " pesos <br>";
        }
    ?>
</html>
