<!DOCTYPE html>
<!-- Ace Multisport
file: contact.php
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

    <div id="wrapper">

        <?php include 'includes/header.html.php'; ?>

        <h2 class="contact_email">Contact Us</h2>

            <p>Please let us know if you have questions or need information on an upcoming event for Ace in the Hole MultiSport Events.  Use this form to email us. </p>

                <form action="mailto:mary.reist@pcc.edu" method="post" enctype="text/plain">
                    Name:<br>
                    <input type="text" name="name"><br>
                    E-mail:<br>
                    <input type="text" name="mail"><br>
                    Question or Comment:<br>
                    <input type="text" name="comment" size="50"><br><br>
                    <input type="submit" value="Send">
                    <input type="reset" value="Reset">
                </form>

            <p>We will get back to you as soon as possible</p>

    </div>

    <?php include 'includes/footer.html.php'; ?>

</body>

</html>