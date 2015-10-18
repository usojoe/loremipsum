@extends("layouts.master")

@section("headlinetext1")
    Lorem Ipsum Generator
@stop

@section("subhead1")
    blocks of latin text
@stop

@section("form1")

    <form>

            <label for="blocks">Number of text blocks:</label>
            <input type="number" name="blocks" maxlength="100" min="1"

            <?php
                    if (!isset($_POST["blocks"]))
                        echo $_POST["blocks"];
                ?>

            <input id="blocks" type="submit" value="create">
        </p>
    </form>
@stop

@section("results1")

    <p id="blocks_generated" class="scrollbox"></p>

@stop



@section("footer")


@stop
