<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
    </head>
    
    <body>
       <h1>編集画面</h1>
       <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST" >
             @csrf
            @method('PUT')
    <div class='content__title'>
        <h2>タイトル</h2>
        <input type="text" name="post[title]" placeholder="タイトル"value="{{ $post->title }}"/><br>
        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
    </div><br>
    
    <div class="content__body"> 
        <h3>本文</h3>
        <textarea name="post[body]" placeholder="今日も一日お疲れさまでした。">{{ $post->title }}</textarea>
        <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
    </div><br>
        <input type="submit" value="update"/>
</form>
        <div class='back'>[<a href='/posts/{{$post->id}}'>back</a>]</div>
    </body>
</html>