{"filter":false,"title":"web.php","tooltip":"/blog/routes/web.php","undoManager":{"mark":20,"position":20,"stack":[[{"start":{"row":13,"column":0},"end":{"row":15,"column":3},"action":"remove","lines":["Route::get('/', function () {","    return view('welcome');","});"],"id":2},{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":["\\"]}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"remove","lines":["\\"],"id":3}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":45},"action":"insert","lines":["Route::get('/posts', 'PostController@index');"],"id":4}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":3},"action":"insert","lines":["Route::get('/', function() {","    return view('posts/index');","});"],"id":5}],[{"start":{"row":14,"column":3},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":16,"column":17},"end":{"row":16,"column":18},"action":"remove","lines":["s"],"id":7},{"start":{"row":16,"column":16},"end":{"row":16,"column":17},"action":"remove","lines":["t"]},{"start":{"row":16,"column":15},"end":{"row":16,"column":16},"action":"remove","lines":["s"]},{"start":{"row":16,"column":14},"end":{"row":16,"column":15},"action":"remove","lines":["o"]},{"start":{"row":16,"column":13},"end":{"row":16,"column":14},"action":"remove","lines":["p"]}],[{"start":{"row":16,"column":40},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":17,"column":0},"end":{"row":17,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":9}],[{"start":{"row":12,"column":0},"end":{"row":14,"column":3},"action":"remove","lines":["Route::get('/', function() {","    return view('posts/index');","});"],"id":10}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":11}],[{"start":{"row":13,"column":40},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":12}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":51},"action":"insert","lines":["Route::get('/posts/{post}', 'PostController@show');"],"id":13}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["}"],"id":14},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["t"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["s"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["o"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["p"]},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"remove","lines":["{"]}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":["c"],"id":15},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["r"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["e"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["a"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["e"],"id":16}],[{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"remove","lines":["w"],"id":17},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"remove","lines":["o"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"remove","lines":["h"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"remove","lines":["s"]}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["i"],"id":18},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"insert","lines":["n"]}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":46},"action":"remove","lines":["in"],"id":19},{"start":{"row":14,"column":44},"end":{"row":14,"column":49},"action":"insert","lines":["index"]}],[{"start":{"row":14,"column":48},"end":{"row":14,"column":49},"action":"remove","lines":["x"],"id":20},{"start":{"row":14,"column":47},"end":{"row":14,"column":48},"action":"remove","lines":["e"]},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"remove","lines":["d"]},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"remove","lines":["n"]},{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"remove","lines":["i"]}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["c"],"id":21},{"start":{"row":14,"column":45},"end":{"row":14,"column":46},"action":"insert","lines":["r"]},{"start":{"row":14,"column":46},"end":{"row":14,"column":47},"action":"insert","lines":["e"]}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":47},"action":"remove","lines":["cre"],"id":22},{"start":{"row":14,"column":44},"end":{"row":14,"column":50},"action":"insert","lines":["create"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":5,"column":37},"end":{"row":5,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1641551452955,"hash":"ad273e25da807fded7e75c59ec45f3d507521291"}