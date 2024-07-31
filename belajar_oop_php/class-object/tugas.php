<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8"
    <meta name="viewport" content="width=device, initial -scale=1.0">
    <title>class-object</title>
   
</head>
<body>
    <h1>Class post</h1>
    <?php
    //pengertian class -> blue print atau cetakan 
    class Post {
        // deklarasi properti global
       public $id,$title,$user_id, $description;
    }
    //melakukan instantiasi
    //mekakukan transform dari sebuah class kesebuah object
   $post = new Post ();

   //melakukan pemberian nilai
   $postId = $post -> id = 1;
   $posttitle = $post -> title = "lakzla";
   $postuser_id = $post -> user_id = "0";
   $postdescription = $post -> description = "cihiwwww";

   $post1 = new Post ();

   $post1Id2 = $post1 -> id = 2;
   $post1title2 = $post1 -> title = "lalala";
   $post1user_id2 = $post1 -> user_id = 5;
   $post1description2 = $post1 -> description = "offff";

    ?>
    <h3>Data User</h3>
    <p>Id : <?php echo $postId ?></p>
    <p>title: <?php echo $posttitle ?></p>
    <p>userid : <?php echo $postuser_id?></p>
    <p>description : <?php echo $postdescription?></p>
    <hr>
    <h3>Data Admin</h3>
    <p>Id : <?php echo $post1Id2 ?></p>
    <p>title: <?php echo $post1title2?></p>
    <p>Admin_id : <?php echo $post1user_id2?></p>
    <p>description : <?php echo $post1description2?></p>
    
</body>
</html>