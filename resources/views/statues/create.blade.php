<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>New statue</h1>

    <!-- Összes Hiba egy helyen
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    -->


    <form method='POST' action="{{ route('statues.store') }}">
        @csrf
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ old('person') }}">
            <!-- Hiba specifikus helyen  -->
            @error('person')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ old('height') }}">
            @error('height')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ old('price') }}">
            @error('price')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>
</body>
</html>
