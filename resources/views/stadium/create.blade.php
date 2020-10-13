@extends('layouts.app')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>Add Stadium</h1>


            <form action="">
                <div class="field">
                    <label class="label" for="name">Name</label>

                    <div class="control">
                        <input class="input" type="text" name="name" id="name">
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="capacity">Capacity</label>


                    <div class="control">
                        <textarea class="textarea" name="capacity" id="capacity"></textarea>
                    </div>

                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>


                    <div class="control">
                        <textarea class="textarea" name="body" id="body"></textarea>
                    </div>

                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>




@endsection

