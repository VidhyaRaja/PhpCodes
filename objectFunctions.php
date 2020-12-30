<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Funtions</title>
</head>
<body>
    <?php
        class Student{
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            // Object Functions
            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jim", "Bussiness", 2.9);
        $student2 = new Student("Pam", "Art",3.6);

        echo $student2->hasHonors();

    ?>
</body>
</html>