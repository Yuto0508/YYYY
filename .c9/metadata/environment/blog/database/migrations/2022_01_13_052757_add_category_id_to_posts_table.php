{"filter":false,"title":"2022_01_13_052757_add_category_id_to_posts_table.php","tooltip":"/blog/database/migrations/2022_01_13_052757_add_category_id_to_posts_table.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":8,"column":4},"end":{"row":12,"column":7},"action":"remove","lines":["/**","     * Run the migrations.","     *","     * @return void","     */"],"id":2}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"remove","lines":["/"],"id":3},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"remove","lines":["/"]}],[{"start":{"row":15,"column":0},"end":{"row":20,"column":7},"action":"remove","lines":["","    /**","     * Reverse the migrations.","     *","     * @return void","     */"],"id":4}],[{"start":{"row":19,"column":13},"end":{"row":19,"column":14},"action":"remove","lines":["/"],"id":5},{"start":{"row":19,"column":12},"end":{"row":19,"column":13},"action":"remove","lines":["/"]}],[{"start":{"row":12,"column":12},"end":{"row":13,"column":61},"action":"insert","lines":["$table->integer('category_id')->unsigned();    //unsigned()型で定義","        //'category_id' は 'categoriesテーブル' の 'id' を参照する外部キーです"],"id":6}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":0},"end":{"row":24,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1642019309593,"hash":"9126927269f94830399a66af80a05b8ef40fed98"}