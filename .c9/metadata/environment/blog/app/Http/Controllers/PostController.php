{"filter":false,"title":"PostController.php","tooltip":"/blog/app/Http/Controllers/PostController.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"remove","lines":[":"],"id":14}],[{"start":{"row":4,"column":12},"end":{"row":4,"column":13},"action":"insert","lines":[";"],"id":15}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":16}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":17}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":24},"action":"remove","lines":[" return $post->get();"],"id":18}],[{"start":{"row":11,"column":3},"end":{"row":11,"column":63},"action":"insert","lines":["return view('posts/index')->with(['posts' => $post->get()]);"],"id":19}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":2},"action":"remove","lines":["public function index(Post $post)"," {","   return view('posts/index')->with(['posts' => $post->get()]);"," }"],"id":22}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","}"],"id":23}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"remove","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getByLimit()]);","}"],"id":24}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":2},"action":"insert","lines":["public function index(Post $post)","{","    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","} "],"id":25}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":1},"action":"insert","lines":[" "],"id":26}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":[" "],"id":27}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["1"],"id":28}],[{"start":{"row":12,"column":3},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":13,"column":1},"end":{"row":16,"column":1},"action":"insert","lines":["public function show(Post $post)","{","    return view('posts/show')->with(['post' => $post]);","}"],"id":30}],[{"start":{"row":15,"column":54},"end":{"row":15,"column":55},"action":"remove","lines":[";"],"id":31},{"start":{"row":15,"column":53},"end":{"row":15,"column":54},"action":"remove","lines":[")"]},{"start":{"row":15,"column":52},"end":{"row":15,"column":53},"action":"remove","lines":["]"]},{"start":{"row":15,"column":51},"end":{"row":15,"column":52},"action":"remove","lines":["t"]},{"start":{"row":15,"column":50},"end":{"row":15,"column":51},"action":"remove","lines":["s"]},{"start":{"row":15,"column":49},"end":{"row":15,"column":50},"action":"remove","lines":["o"]},{"start":{"row":15,"column":48},"end":{"row":15,"column":49},"action":"remove","lines":["p"]},{"start":{"row":15,"column":47},"end":{"row":15,"column":48},"action":"remove","lines":["$"]},{"start":{"row":15,"column":46},"end":{"row":15,"column":47},"action":"remove","lines":[" "]},{"start":{"row":15,"column":45},"end":{"row":15,"column":46},"action":"remove","lines":[">"]},{"start":{"row":15,"column":44},"end":{"row":15,"column":45},"action":"remove","lines":["="]},{"start":{"row":15,"column":43},"end":{"row":15,"column":44},"action":"remove","lines":[" "]},{"start":{"row":15,"column":42},"end":{"row":15,"column":43},"action":"remove","lines":["'"]},{"start":{"row":15,"column":41},"end":{"row":15,"column":42},"action":"remove","lines":["t"]},{"start":{"row":15,"column":40},"end":{"row":15,"column":41},"action":"remove","lines":["s"]},{"start":{"row":15,"column":39},"end":{"row":15,"column":40},"action":"remove","lines":["o"]},{"start":{"row":15,"column":38},"end":{"row":15,"column":39},"action":"remove","lines":["p"]},{"start":{"row":15,"column":37},"end":{"row":15,"column":38},"action":"remove","lines":["'"]},{"start":{"row":15,"column":36},"end":{"row":15,"column":37},"action":"remove","lines":["["]},{"start":{"row":15,"column":35},"end":{"row":15,"column":36},"action":"remove","lines":["("]},{"start":{"row":15,"column":34},"end":{"row":15,"column":35},"action":"remove","lines":["h"]},{"start":{"row":15,"column":33},"end":{"row":15,"column":34},"action":"remove","lines":["t"]},{"start":{"row":15,"column":32},"end":{"row":15,"column":33},"action":"remove","lines":["i"]},{"start":{"row":15,"column":31},"end":{"row":15,"column":32},"action":"remove","lines":["w"]},{"start":{"row":15,"column":30},"end":{"row":15,"column":31},"action":"remove","lines":[">"]},{"start":{"row":15,"column":29},"end":{"row":15,"column":30},"action":"remove","lines":["-"]},{"start":{"row":15,"column":28},"end":{"row":15,"column":29},"action":"remove","lines":[")"]},{"start":{"row":15,"column":27},"end":{"row":15,"column":28},"action":"remove","lines":["'"]},{"start":{"row":15,"column":26},"end":{"row":15,"column":27},"action":"remove","lines":["w"]},{"start":{"row":15,"column":25},"end":{"row":15,"column":26},"action":"remove","lines":["o"]},{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":["h"]},{"start":{"row":15,"column":23},"end":{"row":15,"column":24},"action":"remove","lines":["s"]},{"start":{"row":15,"column":22},"end":{"row":15,"column":23},"action":"remove","lines":["/"]},{"start":{"row":15,"column":21},"end":{"row":15,"column":22},"action":"remove","lines":["s"]},{"start":{"row":15,"column":20},"end":{"row":15,"column":21},"action":"remove","lines":["t"]},{"start":{"row":15,"column":19},"end":{"row":15,"column":20},"action":"remove","lines":["s"]}],[{"start":{"row":15,"column":18},"end":{"row":15,"column":19},"action":"remove","lines":["o"],"id":32},{"start":{"row":15,"column":17},"end":{"row":15,"column":18},"action":"remove","lines":["p"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"remove","lines":["'"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"remove","lines":["("]},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"remove","lines":["w"]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":["e"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":["i"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["v"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":[" "]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["n"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["r"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["u"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["t"]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["e"]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":["r"]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["d"],"id":33},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["d"]}],[{"start":{"row":15,"column":6},"end":{"row":15,"column":8},"action":"insert","lines":["()"],"id":34}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["$"],"id":35}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["$"],"id":36},{"start":{"row":15,"column":7},"end":{"row":15,"column":12},"action":"insert","lines":["$post"]}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":[";"],"id":37}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":[";"],"id":38}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":[";"],"id":39}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":[";"],"id":40},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"remove","lines":[")"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"remove","lines":["t"]},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"remove","lines":["s"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["o"]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["p"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"remove","lines":["$"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["("]},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["d"]},{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"remove","lines":["d"]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":56},"action":"insert","lines":[" return view('posts/show')->with(['post' => $post]);"],"id":41}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["1"],"id":43}],[{"start":{"row":16,"column":1},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":44}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":1},"action":"insert","lines":[" "],"id":45},{"start":{"row":17,"column":1},"end":{"row":17,"column":2},"action":"insert","lines":["p"]},{"start":{"row":17,"column":2},"end":{"row":17,"column":3},"action":"insert","lines":["u"]}],[{"start":{"row":17,"column":1},"end":{"row":17,"column":3},"action":"remove","lines":["pu"],"id":46},{"start":{"row":17,"column":1},"end":{"row":17,"column":7},"action":"insert","lines":["public"]}],[{"start":{"row":17,"column":7},"end":{"row":17,"column":8},"action":"insert","lines":[" "],"id":47},{"start":{"row":17,"column":8},"end":{"row":17,"column":9},"action":"insert","lines":["f"]},{"start":{"row":17,"column":9},"end":{"row":17,"column":10},"action":"insert","lines":["u"]}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":10},"action":"remove","lines":["fu"],"id":48},{"start":{"row":17,"column":8},"end":{"row":17,"column":16},"action":"insert","lines":["function"]}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":[" "],"id":49},{"start":{"row":17,"column":17},"end":{"row":17,"column":18},"action":"insert","lines":["c"]},{"start":{"row":17,"column":18},"end":{"row":17,"column":19},"action":"insert","lines":["r"]},{"start":{"row":17,"column":19},"end":{"row":17,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":17},"end":{"row":17,"column":20},"action":"remove","lines":["cre"],"id":50},{"start":{"row":17,"column":17},"end":{"row":17,"column":23},"action":"insert","lines":["create"]}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":25},"action":"insert","lines":["()"],"id":51}],[{"start":{"row":17,"column":25},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"insert","lines":["{"],"id":53},{"start":{"row":18,"column":2},"end":{"row":18,"column":3},"action":"insert","lines":["}"]}],[{"start":{"row":18,"column":2},"end":{"row":20,"column":1},"action":"insert","lines":["","     "," "],"id":54}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"insert","lines":["r"],"id":55},{"start":{"row":19,"column":6},"end":{"row":19,"column":7},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":5},"end":{"row":19,"column":7},"action":"remove","lines":["re"],"id":56},{"start":{"row":19,"column":5},"end":{"row":19,"column":11},"action":"insert","lines":["return"]}],[{"start":{"row":19,"column":11},"end":{"row":19,"column":12},"action":"insert","lines":[" "],"id":57},{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"insert","lines":["v"]},{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"insert","lines":["i"]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":14},"action":"remove","lines":["vi"],"id":58},{"start":{"row":19,"column":12},"end":{"row":19,"column":16},"action":"insert","lines":["view"]}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":18},"action":"insert","lines":["()"],"id":59}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["c"],"id":60},{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["r"]},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":20},"action":"remove","lines":["cre"],"id":61},{"start":{"row":19,"column":17},"end":{"row":19,"column":23},"action":"insert","lines":["create"]}],[{"start":{"row":19,"column":17},"end":{"row":19,"column":18},"action":"insert","lines":["'"],"id":62}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":25},"action":"insert","lines":["'"],"id":63}],[{"start":{"row":19,"column":26},"end":{"row":19,"column":27},"action":"insert","lines":[";"],"id":64}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":19},"action":"insert","lines":["p"],"id":65},{"start":{"row":19,"column":19},"end":{"row":19,"column":20},"action":"insert","lines":["o"]},{"start":{"row":19,"column":20},"end":{"row":19,"column":21},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":18},"end":{"row":19,"column":21},"action":"remove","lines":["pos"],"id":66},{"start":{"row":19,"column":18},"end":{"row":19,"column":23},"action":"insert","lines":["posts"]}],[{"start":{"row":19,"column":23},"end":{"row":19,"column":24},"action":"insert","lines":["/"],"id":67}],[{"start":{"row":20,"column":2},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":68},{"start":{"row":21,"column":0},"end":{"row":21,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":21,"column":1},"end":{"row":26,"column":1},"action":"insert","lines":["public function store(Request $request, Post $post)","{","    $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);","}"],"id":69}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["　"],"id":70}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"remove","lines":["　"],"id":71}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":[" "],"id":72}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":[" "],"id":73},{"start":{"row":22,"column":1},"end":{"row":22,"column":2},"action":"insert","lines":[" "]}],[{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":[" "],"id":74}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["5"],"id":75}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["5"],"id":76}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["1"],"id":77}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["1"],"id":78}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["2"],"id":79}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["2"],"id":80}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["3"],"id":81}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["3"],"id":82}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["1"],"id":83},{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"insert","lines":["0"]}],[{"start":{"row":23,"column":4},"end":{"row":25,"column":43},"action":"remove","lines":["$input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);"],"id":84}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["d"],"id":85},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":8},"action":"insert","lines":["()"],"id":86}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["$"],"id":87}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"remove","lines":["$"],"id":88},{"start":{"row":23,"column":7},"end":{"row":23,"column":15},"action":"insert","lines":["$request"]}],[{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["-"],"id":89},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":[">"]}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["a"],"id":90},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["l"]},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["l"]}],[{"start":{"row":23,"column":20},"end":{"row":23,"column":22},"action":"insert","lines":["()"],"id":91}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":[";"],"id":92}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"remove","lines":[";"],"id":93},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"remove","lines":[")"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"remove","lines":[")"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"remove","lines":["("]},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"remove","lines":["l"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"remove","lines":["l"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":["a"]},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"remove","lines":[">"]},{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"remove","lines":["-"]},{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"remove","lines":["t"]},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"remove","lines":["s"]},{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"remove","lines":["e"]},{"start":{"row":23,"column":11},"end":{"row":23,"column":12},"action":"remove","lines":["u"]},{"start":{"row":23,"column":10},"end":{"row":23,"column":11},"action":"remove","lines":["q"]},{"start":{"row":23,"column":9},"end":{"row":23,"column":10},"action":"remove","lines":["e"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"remove","lines":["r"]},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"remove","lines":["$"]}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"remove","lines":["("],"id":94},{"start":{"row":23,"column":5},"end":{"row":23,"column":6},"action":"remove","lines":["d"]},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":["d"]}],[{"start":{"row":23,"column":4},"end":{"row":25,"column":43},"action":"insert","lines":["$input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);"],"id":95}],[{"start":{"row":23,"column":3},"end":{"row":25,"column":43},"action":"remove","lines":[" $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);"],"id":96}],[{"start":{"row":23,"column":3},"end":{"row":23,"column":4},"action":"insert","lines":["d"],"id":97},{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":5},"end":{"row":23,"column":7},"action":"insert","lines":["()"],"id":98}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"insert","lines":["&"],"id":99},{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"insert","lines":["\\"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"insert","lines":["$"]}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"remove","lines":["$"],"id":100},{"start":{"row":23,"column":8},"end":{"row":23,"column":16},"action":"insert","lines":["$request"]}],[{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["-"],"id":101},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["."]}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"remove","lines":["."],"id":102}],[{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":[">"],"id":103}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["a"],"id":104},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["l"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["l"]}],[{"start":{"row":23,"column":21},"end":{"row":23,"column":23},"action":"insert","lines":["()"],"id":105}],[{"start":{"row":23,"column":7},"end":{"row":23,"column":8},"action":"remove","lines":["\\"],"id":106},{"start":{"row":23,"column":6},"end":{"row":23,"column":7},"action":"remove","lines":["&"]}],[{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":[";"],"id":107}],[{"start":{"row":23,"column":3},"end":{"row":23,"column":23},"action":"remove","lines":["dd($request->all());"],"id":108}],[{"start":{"row":23,"column":3},"end":{"row":25,"column":43},"action":"insert","lines":[" $input = $request['post'];","    $post->fill($input)->save();","    return redirect('/posts/' . $post->id);"],"id":109}],[{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"remove","lines":["0"],"id":112},{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"remove","lines":["1"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":28},"action":"remove","lines":["use Illuminate\\Http\\Request;"],"id":113}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":43},"action":"insert","lines":["use App\\Http\\Requests\\PostRequest; // useする"],"id":114}],[{"start":{"row":5,"column":42},"end":{"row":5,"column":43},"action":"remove","lines":["る"],"id":115},{"start":{"row":5,"column":41},"end":{"row":5,"column":42},"action":"remove","lines":["す"]},{"start":{"row":5,"column":40},"end":{"row":5,"column":41},"action":"remove","lines":["e"]},{"start":{"row":5,"column":39},"end":{"row":5,"column":40},"action":"remove","lines":["s"]},{"start":{"row":5,"column":38},"end":{"row":5,"column":39},"action":"remove","lines":["u"]},{"start":{"row":5,"column":37},"end":{"row":5,"column":38},"action":"remove","lines":[" "]},{"start":{"row":5,"column":36},"end":{"row":5,"column":37},"action":"remove","lines":["/"]},{"start":{"row":5,"column":35},"end":{"row":5,"column":36},"action":"remove","lines":["/"]},{"start":{"row":5,"column":34},"end":{"row":5,"column":35},"action":"remove","lines":[" "]}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":74},"action":"remove","lines":["getPaginateByLimit"],"id":116}],[{"start":{"row":11,"column":56},"end":{"row":11,"column":67},"action":"insert","lines":["getPaginate"],"id":117}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":51},"action":"remove","lines":["Request $request, Post $post"],"id":118}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":55},"action":"insert","lines":["Post $post, PostRequest $request"],"id":119}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":21,"column":55},"end":{"row":21,"column":55},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1641818907639,"hash":"ec79318fb0191bd4eb2654b803c16035fe61e7c0"}