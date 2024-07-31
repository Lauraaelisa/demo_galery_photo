<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device, initial -scale=1.0">
    <title>class-object</title>
    
</head>
<body>
    <h1>Belajar class object</h1>
    <?php
    //pengertian class -> blue print atau cetakan 
    class User {
        // deklarasi properti global
       public $id, $user_name, $umur;
    }
    //melakukan instantiasi
    //mekakukan transform dari sebuah class kesebuah object
   $user = new User ();


   // tugas 1 buat satu class dengan class post yang memiliki 4 properti global (id,titile,user_id,description)
   //tugas 2 buat objek berdasarkan class yang telah dibuat berikan nilai pada setiap properti yang dimiliki dan tampilkan semua data dalam
   //melakukan pemberian nilai
   $userId = $user -> id = 1;
   $userName = $user -> user_name = "Lula";
   $userumur = $user -> umur = 15;

   $userId2 = $user -> id= 2;
   $userName2 = $user -> user_name= "Paula";
   $userumur2 = $user -> umur = 20;
    ?>
    <h1>Data User</h1>
    <p>nama : <?php echo $userName ?></p>
    <p>id: <?php echo $userId ?></p>
    <p>umur : <?php echo $userumur ?></p>
    <hr>
    <p>nama : <?php echo $userName2?></p>
    <p>id: <?php echo $userId2?></p>
    <p>umur : <?php echo $userumur2 ?></p>

    
</body>
</html>