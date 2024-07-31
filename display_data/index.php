<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8"
    <meta name="viewport" content="width=device, initial -scale=1.0">
    <title>Belajar Komponen</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
<h1>Belajar menggunakan Komponen</h1>
<!-- <?php
   class User
   {
    //properti global
    public $id,$name,$age,$address;

    //melakukan konstruksi
    public function __construct(
        $id      = null,
        $name    = null ,
        $age     = null ,
        $address = null)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->age      = $age;
        $this->address  = $address;
    }
}

class Students
{
    public $id,$nama,$nilai_pbo,$nilai_web,$nilai_pkk, $kelas;

    public function __construct($dataStudents = [])
    {
        $this->id        = $dataStudents ['id'] ?? null;
        $this->nama      = $dataStudents ['nama'] ?? null;
        $this->nilai_pbo = $dataStudents ['nilai_pbo'] ?? null;
        $this->nilai_web = $dataStudents ['nilai_web'] ?? null;
        $this->nilai_pkk = $dataStudents ['nilai_pkk'] ?? null;
        $this->kelas     = $dataStudents ['kelas'] ?? null;

    }
    public function calculateAverage(){
        return($this->nilai_pbo+$this->nilai_web+$this->nilai_pkk)/3;
    }
    public function calculateGrade(){
        $average = $this->calculateAverage();
        if($average >= 90 && $average       <= 100){
            return 'A';
        }elseif ($average >= 86 && $average <= 90){
            return 'B+';
        }elseif ($average >= 81 && $average <= 86){
            return 'B';
        }elseif ($average >= 75 && $average <= 81){
            return 'C';
        }elseif ($average >= 70 && $average <= 75){
            return 'D';
        }else{
            return 'remedial';
        }
    }
}
$dataStudents = [
    [
        'id'        => 1,
        'nama'      => 'Asep',
        'nilai_pbo' => 69,
        'nilai_web' => 80,
        'nilai_pkk' => 85,
        'kelas'     => 'XI RPL'
    ],
    [
        'id'        => 2,
        'nama'      => 'niaa',
        'nilai_pbo' => 69,
        'nilai_web' => 69,
        'nilai_pkk' => 96,
        'kelas'     => 'XI RPL'
    ],
    [
        'id'        => 3,
        'nama'      =>'rioo',
        'nilai_pbo' => 86,
        'nilai_web' => 50,
        'nilai_pkk' => 69,
        'kelas'     => 'XI RPL'
    ],
    [
        'id'        => 4,
        'nama'      => 'mioo',
        'nilai_pbo' => 0,
        'nilai_web' => 35,
        'nilai_pkk' => 0.69,
        'kelas'     => 'XI RPL'
    ],
    [
        'id'        => 5,
        'nama'      => 'tono',
        'nilai_pbo' => 25,
        'nilai_web' => 75,
        'nilai_pkk' => 69,
        'kelas'     => 'XI RPL'
    ],
    [
        'id'        => 6,
        'nama'      => 'Tika',
        'nilai_pbo' => 90,
        'nilai_web' => 80,
        'nilai_pkk' => 85,
        'kelas'     => '12 RPL'
    ],
    [
        'id'        => 7,
        'nama'      => 'Tian',
        'nilai_pbo' => 35,
        'nilai_web' => 79,
        'nilai_pkk' => 100,
        'kelas'     => '12 RPL'
    ],
    [
        'id'        => 8,
        'nama'      => 'Miko',
        'nilai_pbo' => 90,
        'nilai_web' => 69,
        'nilai_pkk' => 70,
        'kelas'     => '12 RPL'
    ],
    [
        'id'        => 9,
        'nama'      => 'tono',
        'nilai_pbo' => 100,
        'nilai_web' => 100,
        'nilai_pkk' => 90,
        'kelas'     => '12 RPL'
    ],
    [
        'id'        => 10,
        'nama'      => 'Sifa',
        'nilai_pbo' => 95,
        'nilai_web' => 86,
        'nilai_pkk' => 82,
        'kelas'     => '12 RPL'
    ],
];
$students     = new Students ();
$listStudents = [];

foreach ($dataStudents as $Students){
   $dataStudents    = new Students ($Students);
   $listStudents[]  = $dataStudents;
}
$datasiswaXIIRPL = [];
foreach($listStudents as $Students){
   if ($Students->kelas == "12 RPL"){
    $datasiswaXIIRPL[] = $Students;
   }
}
$datasiswaXIRPL = [];
foreach($listStudents as $Students){
   if ($Students->kelas == "XI RPL"){
    $datasiswaXIRPL[] = $Students;
   }
}
 
?>
<h2>Jumlah semua data siswa        :  <?php echo count($listStudents)?></h2>
<h2>Jumlah data siswa kelas 11 RPL :  <?php echo count($datasiswaXIRPL)?></h2>
<h2>Jumlah data siswa kelas 12 RPL :  <?php echo count($datasiswaXIIRPL)?></h2>

<?php 
    $datasiswakelasXIIRPL = [];

    foreach ($listStudents as $Students){
        
        $rata_rata = $Students->calculateAverage();
        $grade     = $Students->calculateGrade();
        $BilBULAT  = round ($rata_rata);
    
    ?>
    
        <hr>
        <p> ID         : <?php echo $Students->id; ?> </php>
        <p> NAMA       : <?php echo $Students->nama; ?> </p>
        <p> NILAI PBO  : <?php echo $Students->nilai_pbo; ?> </p>
        <p> NILAI WEB  : <?php echo $Students->nilai_web; ?> </p>
        <p> NILAI PKK  : <?php echo $Students->nilai_pkk; ?> </p>
        <p> KELAS      : <?php echo $Students->kelas; ?> </p>
        <p> Rata-Rata  : <?php echo $BilBULAT;?> </p>
        <p> Grade      : <?php echo $grade; ?> </p>
       
        ";
    <?php }
    ?>   -->

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai Web
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai Pbo
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai PKK
                </th>
                <th scope="col" class="px-6 py-3">
                    Nilai Rata-rata
                </th>
                <th scope="col" class="px-6 py-3">
                    Predikat
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(count($listStudents)>0){
                // melakukan looping atau membongkar data
                foreach($listStudents as $key => $Students){
                    $rata_rata = $Students->calculateAverage();
                    $grade     = $Students->calculateGrade();
                    $BilBULAT  = round ($rata_rata);
                    ?>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <?php echo $key + 1;?>
                </th>
                <td class="px-6 py-4">
                <?php echo $Students->nama;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $Students->kelas;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $Students->nilai_web;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $Students->nilai_pbo;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $Students->nilai_pkk;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $BilBULAT;?>
                </td>
                <td class="px-6 py-4">
                <?php echo $grade;?>
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
           
                    <?php
                }
            }else{
                echo "
                <div>
                Data Belum Ada
                </div>
                ";
            }
            ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Laptop
                </th>
                <td class="px-6 py-4">
                Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
           
        </tbody>
    </table>
</div>

<?php

    
    ?>  
</body>
</html>