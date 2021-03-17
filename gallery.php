<!DOCTYPE html>
<!-- Ace Multisport
file: gallery.php
Programmer:  Mary Reist
Date 3/10/21
-->

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style.less" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js</script>

    <title>Ace in the Hole Multisport Events Weekend Assets</title>

</head>

<body>

<div id="container">

    <?php include 'includes/header.html.php'; ?>

    <script>
    $dirname = "images/";
    $images = glob($dirname);
    $ignore = Array(".", "..");
        foreach($images as $curimg){
        if(!in_array($curimg, $ignore)) {
        echo "<img src='images/$curimg' /><br>\n";
    }
    }
    </script>

        <div class="gallery">

            <img src="images/ace1.jpg" alt="Triathlon Swim Start">
            <img src="images/ace2.jpg" alt="Disabled Participant">
            <img src="images/ace3.jpg" alt="Cycling Finish">
            <img src="images/ace4.jpg" alt="Triathlong Swim Start two">
            <img src="images/ace5.jpg" alt="Cyclists with sun in background">
            <img src="images/ace6.jpg" alt="Triathlon Winners Circle">
            <img src="images/ace7.jpg" alt="Crowd high fiving a woman runner">
            <img src="images/ace8.jpg" alt="Runners on dirt path">
            <img src="images/ace9.jpg" alt="Finish line for wheelchair race">
            <img src="images/ace10.jpg" alt="Marathon Finish Line with Winner">
            <img src="images/ace11.jpg" alt="Runners in Race">
            <img src="images/ace12.jpg" alt="Cyclists on a curve track">
            <img src="images/ace13.jpg" alt="Marathon Race start with thousands">
            <img src="images/ace14.jpg" alt="Women Runners on a curve">
            <img src="images/ace15.jpg" alt="Family Fun Race Participants">
            <img src="images/ace16.jpg" alt="Marathoners on asphalt">
            <img src="images/ace17.jpg" alt="Marathoners wearing orange We Run shirts">
            <img src="images/ace18.jpg" alt="Marathoners on roadway">
            <img src="images/bike-thon-1.jpg" alt="Cyclists in Old Town">
            <img src="images/kid-run.jpg" alt="Teenagers race participants">
            <img src="images/race-1.jpg" alt="Marathon Team in race">
            <img src="images/thon-1.jpg" alt="Marathon Lead Group">
            <img src="images/track.jpg" alt="Track starter at the block ">
            <img src="images/wheelchair.jpg" alt="Wheelchair Participants">

        </div>

    <?php include 'includes/footer.html.php'; ?>

</div>

</body>

</html>