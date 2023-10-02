<!DOCTYPE html>
<html lang="pl">
<head>
    <meta http-equiv="content-type" content="pl" charset="utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ankieta</title>
    <?php
        $con = mysqli_connect("localhost","root","","ankieta");
        $result = mysqli_query($con,"SELECT * FROM pytanie");
        $data = $result->fetch_all(MYSQLI_ASSOC);
    ?>
</head>
<body>
    <div id="questions">
        <?php foreach($data as $row): ?>
            <form method="POST" action="addToCount.php">
                <input type="hidden" id="id" value="<?= htmlspecialchars($row['id']) ?>" />
                <h1><?= htmlspecialchars($row['tresc']) ?></h1>

                <input type="checkbox" id="answA"/>
                <label for="answA"><?= htmlspecialchars($row['answerA']) ?></label>
                
                <input type="checkbox" id="answB"/>
                <label for="answB"><?= htmlspecialchars($row['answerB']) ?></label>
                
                <input type="checkbox" id="answC"/>
                <label for="answC"><?= htmlspecialchars($row['answerC']) ?></label>
                
                <input type="checkbox" id="answD"/>
                <label for="answD"><?= htmlspecialchars($row['answerD']) ?></label>

                <input type="submit" value="Send Answer">
            </form>
        <?php endforeach ?>
    </div>
    <!-- <div>
        Mądry
    </div> -->
</body>
</html>