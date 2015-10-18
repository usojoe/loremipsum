@extends("layouts.master")

@section("headlinetext2")
    Random User Creator
@stop

@section("subhead2")
    creation of reandom users</p>
@stop

@section("form2")
    <!--Random User Creation form-->
    <form>

            <label for="numberofusers">Users:</label>

            <input type="number" name="numberofusers" maxlength="100" min='1'
            <?php
                    if (!isset($_POST["randomuser"]))

                        echo $_POST["randomuser"];
                    else echo "this string";
                ?>


            <input id="birthday" type="checkbox" name="birthday"
                <?php
                    if (isset($_POST["birthday"]))
                        echo "checked";
                ?>
            <label for="birthday">birthday</label>

            <input id="profile" type="checkbox" name="profile"
                <?php
                    if (isset($_POST["profile"]))
                        echo "checked";
                ?>
            <label for="profile">Profile Description</label>

            <input type="submit" value="Generate">
        </p>
    </form>
@stop

@section("results2")



@stop

@section("footer")

@stop
