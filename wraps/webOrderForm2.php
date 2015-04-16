<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Web Order Form - A Tapp Creation</title>
        <link rel="stylesheet" href="atcWOF.css">
    </head>

    <body>
        <header>
            <h1>Wrap Order Form</h1>
        </header>
        <form action="" method=post>
        <?php
            $numberOfWraps=filter_input(INPUT_POST,"numberOfWraps");
            $finalDescription=" ";
            for ($i=1;$i<=$numberOfWraps;$i++){
                print <<< HERE
                    <section>
                        <fieldset>
                            <legend>Wrap #$i Menu</legend>
                                <fieldset>
                                    <legend>Outside:</legend>
                                        <input type="radio" name="outside$i" value="regular">Regular
                                        <input type="radio" name="outside$i" value="wholeWheat">Whole Wheat
                                        <input type="radio" name="outside$i" value="spinach">Spinach
                                        <input type="radio" name="outside$i" value="tomato">Tomato
                                </fieldset>
                                <br>
                                <fieldset>
                                    <legend>Inside:</legend>
                                        <input type="radio" name="inside$i" value="gardenVegetable">Garden Vegetable
                                        <input type="radio" name="inside$i" value="californiaVeggie">California Veggie
                                        <input type="radio" name="inside$i" value="tuna">Tuna
                                </fieldset>
                                <br>
                        </fieldset>
                    </section>
HERE;
            };
        ?>
            <section>
                <fieldset>
                    <legend>Current Order</legend>
                    <br>
                    <button type="submit">Submit Order</button>&nbsp;<button type="reset">Delete Order</button>
                </fieldset>
            </section>
        </form>
        <footer>
            <small>2014 Copyright <a href="http://www.AndrewTapp.com">Avi Tapp</a></small>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="atcWOF.js"></script>
    </body>
</html>
