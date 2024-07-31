<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar depedency injection</title>
</head>
<body>
    <?php
    class user
    {
        public $name, $email;
        
        public static $user=[];
        public function __construct($name =null, $email =null)
    {
        $this->name    = $name ;
        $this->email   = $email;
    }
    public static function create (array $data)
    {
        $user = new self($data['name'], $data['email']);
        self::$user[]=$user;
        return $user;
    }
    public static function all(){
        return self::$user;
    }
}
class request {
    protected $data;
    public function __construck(array $data){
        $this->data = $data;
    }
    public function validate(array $rules){
        $errors = [];
        foreach($rules as $field => $rules){
            if($rules === 'required' && empty($this->data[$field])){
                $errors[] = "The $field field is required.";
            }
        }
        if (!empty($errors)){
            throw new Exception(implode(",",$errors));
        }
        return $this->data;
    }
    public function input($key, $default = null){
        return $this->data[$key] ?? $default;
    }
}
class UserControler
{
    public function store(Request $request){
        $validated = $request->validate ([
            'name' => 'required',
            'email' => 'required',
        ]);
    }
    public function viewUser(){
        $user = user:: all();
        echo"<h1>User list</h1>";
        echo "<ul>";
        foreach ($User as $user){
            echo "<li>name :". htmlspecialchard($user->name) , "<li>email :". htmlspecialchard($user->email) 
        }
        echo "<ul>";
    }
}

    ?>
</body>
</html>