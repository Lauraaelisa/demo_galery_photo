<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Statik properties</title>
</head>
<body>
    <?php
    class parentClass
    {
        //deklarasi properti blobal
        public static $judul = "hy, ini properti static dari" . __CLASS__;
        public static function display()
        {
            echo self::$judul;
        }
    }
        class ChildClass extends parentClass
        {
            public static $judul = "hy, ini properti static dari" . __CLASS__;

            public static function display()
            {
                echo parent::$judul;
            }
            public static function displayformChild()
            {
                echo self::display();
            }
        }
        $obj = new parentClass;
        $obj2 = new ChildClass;
    
    ?>
    <h1> <?php echo ChildClass::displayformChild()?></h1>
   
    
</body>
</html>