<div class="field">
    <label class="label" for="name">Name</label>

    <div class="control">
        <input class="input" type="text" name="name" id="name" value="{{ old('name') ?? $stadium->name ?? '' }}">

        @error('name')
        <p>{{$errors->first('name')}}</p>
        @enderror
    </div>
</div>



<div class="field">
    <label class="label" for="capacity">Capacity</label>


    <div class="control">
        <input class="input" name="capacity" id="capacity" value="{{old('capacity') ?? $stadium->capacity ?? ''}}">

        @error('name')
        <p>{{$errors->first('capacity')}}</p>
        @enderror
    </div>
</div>


<div class="field">
    <label class="label" for="body">Body</label>


    <div class="control">
        <input class="input" name="body" id="capacity" value="{{old('body') ?? $stadium->body ?? ''}}">

        @error('name')
        <p>{{$errors->first('body')}}</p>
        @enderror
    </div>
</div>

<div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit">Submit</button>
    </div>
</div>
