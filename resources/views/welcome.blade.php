<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        echo 70/60;
    ?>
</head>
<body>
    <div>Body in welcome</div>
    <div id="newpage">
        <newpage></newpage>
    </div>
    <div>
    <?php
    use App\Models\Series;
    use App\Models\Lesson;
        $paragraphs = json_encode(Series::find(1)->lessons);
        echo $paragraphs;
        // foreach ($paragraphs as $paragraph) {
        //     echo $paragraph;
        // }
    ?>
    </div>
</body>

<script src ="{{ mix('js/app.js') }}"></script>
</html>