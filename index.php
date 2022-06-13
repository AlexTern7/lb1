<?php
require_once __DIR__ . "/Lesson.php";
$lesson = new Lesson();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab1</title>
</head>
<body>
<?php
if (isset($_POST["group"])) {
    $lesson->findGroup($_POST["group"]);
} elseif (isset($_POST["teacher"])) {
    $lesson->findTeacher($_POST["teacher"]);
} elseif (isset($_POST["auditorium"])) {
    $lesson->findAuditorium($_POST["auditorium"]);
} elseif (isset($_POST["week_dayAdd"])) {
    $lesson->addLesson($_POST["week_dayAdd"], $_POST["lesson_numberAdd"], $_POST["auditoriumAdd"], $_POST["discipleAdd"], $_POST["typeAdd"], $_POST["teacherAdd"], $_POST["groupAdd"]);
}
?>
<br>
<form action="" method="post">
    <select name="group">
        <?php
        $lesson->groups();
        ?>
    </select>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post">
    <select name="teacher">
        <?php
        $lesson->teachers();
        ?>
    </select>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post">
    <select name="auditorium">
        <?php
        $lesson->auditoriums();
        ?>
    </select>
    <input type="submit"><br>
</form>
<br>
<form action="" method="post">
    <input type="text" name="week_dayAdd" placeholder="Add Week Day"><br>
    <input type="number" name="lesson_numberAdd" placeholder="Add Lesson Number"><br>
    <input type="text" name="auditoriumAdd" placeholder="Add Auditorium"><br>
    <input type="text" name="discipleAdd" placeholder="Add Discipline"><br>
    <input type="text" name="typeAdd" placeholder="Add Type"><br>
    <select name="teacherAdd">
        <?php
        $lesson->teachers();
        ?>
    </select>
    <select name="groupAdd">
        <?php
        $lesson->groups();
        ?>
    </select>
    <input type="submit" value="Добавить"><br>
</form>
</body>
</html>
