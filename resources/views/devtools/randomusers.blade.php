@extends("layouts.master")

@section("form2")
    <!--Random User Creation form-->
    <form method="POST" action='devtools.create'>

            <label for="numberofusers">Users:</label>

            <input id="numberofusers" type="number" name="numberofusers" maxlength="100" min='1'>

            <?php
                    if (isset($_POST["numberofusers"]))

                        echo $faker->name, "\n";
}
                ?>

                <input id="image" type="checkbox" name="image">

                    <?php
                        if (isset($_POST["image"]))
                            echo "checked";
                    ?>

                <label for="image">Image?</label>

                <input id="address" type="checkbox" name="address">

                    <?php
                        if (isset($_POST["address"]))
                            echo "checked";
                    ?>

                <label for="address">Address?</label>

            <input id="birthday" type="checkbox" name="birthday">

                <?php
                    if (isset($_POST["birthday"]))
                        echo "checked";
                ?>

            <label for="birthday">Birthday?</label>

            <input id="profile" type="checkbox" name="profile">

                <?php
                    if (isset($_POST["profile"]))
                        echo "checked";
                ?>

            <label for="profile">Full Profile Description?</label>

            <input type="submit" class="btn btn-primary" value="Generate">
        </p>
    </form>
@stop

@section("results2")


@stop

@section("footer")

@stop
