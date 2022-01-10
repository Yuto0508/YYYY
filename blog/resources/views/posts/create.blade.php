<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    
    <body>
       <h1>Blog Name</h1>
        <form action="/posts" method="POST" >
    
    @csrf
    <div class="title">
        <h2>Title</h2>
        <input type="text" name="post[title]" placeholder="タイトル"value="{{ old('post.title') }}"/><br>
        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
    </div><br>
    
    <div class="body"> 
        <h3>Body</h3>
        <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。">{{ old('post.body') }}</textarea><br>
        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
    </div><br>
        <input type="submit" value="保存"/>
</form>
        <div class='back'>[<a href='/'>back</a>]</div>
    </body>
</html>