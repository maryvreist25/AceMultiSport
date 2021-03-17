
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

</head>

<body>
    <div id="wrapper">

        <?php include '../header/header.html.php'; ?>

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
</body>

</html>