<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Article</title>
    </head>
    <body>
        @if(isset($articles))
	        <ul>
	        @foreach($articles as $article)
	            <li>{{$article->title}}</li>
	            <p>{{$article->content}}</p>
	        @endforeach
	        </ul>
   		@endif
    </body>
</html>
