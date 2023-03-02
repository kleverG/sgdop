
<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SGDOP - {{ $title ?? '' }}</title>
        <meta name="description" content="{{ $metaDescription ?? 'Default meta description'}}"/>
    
    </head>
    
    <body>
         
        {{--@include('partials.navigation')--}}
        <x-layouts.navigation/>

        @if(session('status'))
            <div>{{session('status') }} </div>
        @endif

        {{ $slot }}

    </body>
    
</html>
