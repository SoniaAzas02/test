<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     class Work{
        public $name;
        public $section;
        public $type;
     }
     $work2= new Work();
     $work2->name = "IT";
     $work2->section = "Web Development";
     $work2->type = "Back-End";
     
     echo "Name Of Department: " . $work2->name. "</br>";
     echo "Name Of Section: " . $work2->section . "</br>";
     echo "Join In: " .$work2->type;
      
      ?>
</body>
</html>