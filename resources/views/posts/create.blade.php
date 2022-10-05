<!DOCTYPE HTML>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog</h1>
        <form action="/posts" method="POST">
         @csrf
         <div class="title">
             <h2>title</h2>
             <input type="text" name="post[title]" placeholder="タイトル"/>
         </div>
            <div class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="入力"></textarea>
            </div>
                <input type="submit" value="store"/>
                
        </form>
        <div class="footer">
            <a href="/">back</a>
        </div>
    </body>
    </html>