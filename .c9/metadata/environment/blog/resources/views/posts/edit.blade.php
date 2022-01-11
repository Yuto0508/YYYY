{"filter":false,"title":"edit.blade.php","tooltip":"/blog/resources/views/posts/edit.blade.php","undoManager":{"mark":55,"position":55,"stack":[[{"start":{"row":0,"column":0},"end":{"row":28,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","    </head>","    ","    <body>","       <h1>Blog Name</h1>","        <form action=\"/posts\" method=\"POST\" >","    ","    @csrf","    <div class=\"title\">","        <h2>Title</h2>","        <input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\"value=\"{{ old('post.title') }}\"/><br>","        <p class=\"title__error\" style=\"color:red\">{{ $errors->first('post.title') }}</p>","    </div><br>","    ","    <div class=\"body\"> ","        <h3>Body</h3>","        <textarea name=\"post[body]\" placeholder=\"今日も一日お疲れさまでした。\">{{ old('post.body') }}</textarea><br>","        <p class=\"body__error\" style=\"color:red\">{{ $errors->first('post.body') }}</p>","    </div><br>","        <input type=\"submit\" value=\"保存\"/>","</form>","        <div class='back'>[<a href='/'>back</a>]</div>","    </body>","</html>"],"id":1}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"remove","lines":["f"],"id":2},{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"remove","lines":["r"]},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"remove","lines":["s"]},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"remove","lines":["c"]},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"remove","lines":["@"]}],[{"start":{"row":10,"column":45},"end":{"row":11,"column":12},"action":"insert","lines":["","            "],"id":3}],[{"start":{"row":11,"column":12},"end":{"row":12,"column":26},"action":"insert","lines":[" @csrf","            @method('PUT')"],"id":4}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "],"id":5},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"remove","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":26},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"remove","lines":["T"],"id":6},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"remove","lines":["S"]},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"remove","lines":["O"]},{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"remove","lines":["P"]}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"insert","lines":["P"],"id":7},{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":["O"]},{"start":{"row":10,"column":40},"end":{"row":10,"column":41},"action":"insert","lines":["S"]},{"start":{"row":10,"column":41},"end":{"row":10,"column":42},"action":"insert","lines":["T"]}],[{"start":{"row":10,"column":28},"end":{"row":10,"column":44},"action":"insert","lines":["/{{ $post->id }}"],"id":8}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":22},"action":"remove","lines":["\"title\""],"id":9}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":31},"action":"insert","lines":["'content__title'"],"id":10}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"remove","lines":["e"],"id":11},{"start":{"row":14,"column":15},"end":{"row":14,"column":16},"action":"remove","lines":["l"]},{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"remove","lines":["t"]},{"start":{"row":14,"column":13},"end":{"row":14,"column":14},"action":"remove","lines":["i"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"remove","lines":["T"]}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":16},"action":"insert","lines":["タイトル"],"id":12}],[{"start":{"row":15,"column":71},"end":{"row":15,"column":94},"action":"remove","lines":["{{ old('post.title') }}"],"id":13}],[{"start":{"row":15,"column":71},"end":{"row":15,"column":89},"action":"insert","lines":["{{ $post->title }}"],"id":14}],[{"start":{"row":21,"column":65},"end":{"row":21,"column":87},"action":"remove","lines":["{{ old('post.body') }}"],"id":15}],[{"start":{"row":21,"column":65},"end":{"row":21,"column":83},"action":"insert","lines":["{{ $post->title }}"],"id":16}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":88},"action":"remove","lines":["<p class=\"title__error\" style=\"color:red\">{{ $errors->first('post.title') }}</p>"],"id":17}],[{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"remove","lines":["y"],"id":18},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"remove","lines":["d"]},{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"remove","lines":["o"]},{"start":{"row":19,"column":16},"end":{"row":19,"column":17},"action":"remove","lines":["b"]}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":29},"action":"insert","lines":["content__body"],"id":19}],[{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"remove","lines":["y"],"id":20},{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"remove","lines":["d"]},{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"remove","lines":["o"]},{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"remove","lines":["B"]}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":14},"action":"insert","lines":["本文"],"id":21}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["存"],"id":22},{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"remove","lines":["保"]}],[{"start":{"row":24,"column":36},"end":{"row":24,"column":37},"action":"insert","lines":["u"],"id":23},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"insert","lines":["p"]},{"start":{"row":24,"column":38},"end":{"row":24,"column":39},"action":"insert","lines":["d"]},{"start":{"row":24,"column":39},"end":{"row":24,"column":40},"action":"insert","lines":["a"]}],[{"start":{"row":24,"column":40},"end":{"row":24,"column":41},"action":"insert","lines":["t"],"id":24},{"start":{"row":24,"column":41},"end":{"row":24,"column":42},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":25},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":10,"column":0},"end":{"row":10,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":10,"column":7},"end":{"row":10,"column":28},"action":"insert","lines":["<div class=\"content\">"],"id":26}],[{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"remove","lines":["e"],"id":27},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["m"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["a"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["N"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"remove","lines":[" "]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"remove","lines":["g"]},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"remove","lines":["o"]},{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"remove","lines":["l"]}],[{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"remove","lines":["B"],"id":28}],[{"start":{"row":9,"column":11},"end":{"row":9,"column":15},"action":"insert","lines":["編集画面"],"id":29}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":86},"action":"remove","lines":["<p class=\"body__error\" style=\"color:red\">{{ $errors->first('post.body') }}</p>"],"id":30},{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "],"id":31},{"start":{"row":22,"column":98},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":97},"end":{"row":22,"column":98},"action":"remove","lines":[">"],"id":32},{"start":{"row":22,"column":96},"end":{"row":22,"column":97},"action":"remove","lines":["r"]},{"start":{"row":22,"column":95},"end":{"row":22,"column":96},"action":"remove","lines":["b"]},{"start":{"row":22,"column":94},"end":{"row":22,"column":95},"action":"remove","lines":["<"]}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "],"id":33},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":96},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"insert","lines":["p"],"id":34},{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"insert","lines":["o"]},{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"insert","lines":["s"]},{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"insert","lines":["t"]}],[{"start":{"row":25,"column":37},"end":{"row":25,"column":41},"action":"remove","lines":["post"],"id":35},{"start":{"row":25,"column":37},"end":{"row":25,"column":41},"action":"insert","lines":["post"]}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"insert","lines":["-"],"id":36},{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":["."]},{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"insert","lines":["i"]}],[{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"insert","lines":["d"],"id":37}],[{"start":{"row":25,"column":43},"end":{"row":25,"column":45},"action":"remove","lines":["id"],"id":38},{"start":{"row":25,"column":43},"end":{"row":25,"column":45},"action":"insert","lines":["id"]}],[{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"remove","lines":["."],"id":39}],[{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":[">"],"id":40}],[{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"remove","lines":["d"],"id":41},{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"remove","lines":["i"]},{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"remove","lines":[">"]},{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"remove","lines":["-"]},{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"remove","lines":["t"]},{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"remove","lines":["s"]},{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"remove","lines":["o"]},{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"remove","lines":["p"]}],[{"start":{"row":25,"column":37},"end":{"row":25,"column":38},"action":"insert","lines":["p"],"id":42},{"start":{"row":25,"column":38},"end":{"row":25,"column":39},"action":"insert","lines":["o"]},{"start":{"row":25,"column":39},"end":{"row":25,"column":40},"action":"insert","lines":["s"]},{"start":{"row":25,"column":40},"end":{"row":25,"column":41},"action":"insert","lines":["t"]}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"insert","lines":["s"],"id":43}],[{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":["/"],"id":44}],[{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"insert","lines":["{"],"id":45},{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"insert","lines":["{"]},{"start":{"row":25,"column":45},"end":{"row":25,"column":46},"action":"insert","lines":["}"]},{"start":{"row":25,"column":46},"end":{"row":25,"column":47},"action":"insert","lines":["}"]}],[{"start":{"row":25,"column":45},"end":{"row":25,"column":46},"action":"insert","lines":["$"],"id":46},{"start":{"row":25,"column":46},"end":{"row":25,"column":47},"action":"insert","lines":["p"]},{"start":{"row":25,"column":47},"end":{"row":25,"column":48},"action":"insert","lines":["o"]},{"start":{"row":25,"column":48},"end":{"row":25,"column":49},"action":"insert","lines":["s"]},{"start":{"row":25,"column":49},"end":{"row":25,"column":50},"action":"insert","lines":["t"]}],[{"start":{"row":25,"column":50},"end":{"row":25,"column":51},"action":"insert","lines":["-"],"id":47},{"start":{"row":25,"column":51},"end":{"row":25,"column":52},"action":"insert","lines":[">"]},{"start":{"row":25,"column":52},"end":{"row":25,"column":53},"action":"insert","lines":["i"]}],[{"start":{"row":25,"column":53},"end":{"row":25,"column":54},"action":"insert","lines":["d"],"id":48}],[{"start":{"row":25,"column":52},"end":{"row":25,"column":54},"action":"remove","lines":["id"],"id":49},{"start":{"row":25,"column":52},"end":{"row":25,"column":54},"action":"insert","lines":["id"]}],[{"start":{"row":21,"column":8},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "],"id":51},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":8},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":21,"column":94},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":86},"action":"insert","lines":["<p class=\"body__error\" style=\"color:red\">{{ $errors->first('post.body') }}</p>"],"id":53}],[{"start":{"row":16,"column":96},"end":{"row":16,"column":97},"action":"insert","lines":["7"],"id":54},{"start":{"row":16,"column":97},"end":{"row":17,"column":0},"action":"insert","lines":["",""]},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":88},"action":"insert","lines":["<p class=\"title__error\" style=\"color:red\">{{ $errors->first('post.title') }}</p>"],"id":55}],[{"start":{"row":16,"column":96},"end":{"row":16,"column":97},"action":"remove","lines":["7"],"id":56}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":46.400001525878906,"selection":{"start":{"row":12,"column":13},"end":{"row":13,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1641826013116,"hash":"cb917e775a3dc3a79aaa88d9f8cb9c0e7dbfa001"}