<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax Overview</title>
</head>
<body>
    <?php ?>
    <?   ?>
    <%    %>
    <script language="PHP"></script>

    <?
    # This is a comment, and
    # This is the second line of the comment
    // This is a comment too . Each style comments only
    print "An example with single line comments";
    
    ?>

    <?
    /* This is a comment with multiple
    linezzzz */
    
    ?>

    <?
    print<<<END
    This uses the "here document" syntax
    weiird
    END;

    print "this pans multiple lines. The newslines
    will be output as well";
    ?>

    <?php
    $four = 2 + 2;//single spaces
    $four   =   2   +   2 ;//spaces and tabs
    $four =
    2+
    2;// multiple lines
    ?>

    <?php 
    $capital = 67;
    print("Variable capital is $capital<br>");
    print("Variable capital is $CaPiTaL<br>");

    $greeting = "Welcome to PHP!";
    ?>

   <?php
   if(3 == 2 + 1)
    print("Good - I haven't totally lost my mind.<br>");

    if(3 == 2 + 1)
    {
        print("Good - I haven't totally");
        print("lost my mind.<br>");
    }
   ?> 

</body>
</html>