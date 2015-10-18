@extends("layouts.master")

@section("form1")
    <form>

            <label for="submit">Number of text blocks:</label>
            <input type="number" name="submit" maxlength="100" min="1">

            <?php
                    if (!isset($_POST["blocks"]))
                        echo $_POST["blocks"];
                ?>

            <input type="submit" class="btn-btnprimary" value="create">
        </p>
    </form>
@stop

@section("results1")

{{ '$results1' }}

@stop

@section("footer")

{{ '$footer' }}

@stop
