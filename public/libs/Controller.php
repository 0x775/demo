<?php

class BaseController {
    public $config;
    public $db;
    public function __construct(){
        //TODO
    }

    public function config($conf){
        $res=include BASE_PATH.'/config/'.$conf.'.php';
        //$this->config = $this->config ? (object)array_merge((array)$this->config,(array)$res) : (object)$res;
        return (object)$res;
    }
/*
    public function __call($fun,$arguments){
        if(!in_array($fun,array("index","create","show","store","edit","update","delete"))) 
            throw new Exception("function failed!");
    }
*/
    /*
    public function index(){}    
    public function create(){}    
    public function show($id){}  
    public function store(){}    
    public function edit($id){}    
    public function save($id){}
    public function delete($id){}
    */
}

class Controller extends BaseController {
    public function __construct(){
        parent::__construct();

        $this->loader = new Twig_Loader_Filesystem(__DIR__.'/../app/views');
        $this->twig = new Twig_Environment($this->loader, array(
              //'cache' => __DIR__.'/../app/storage/views',
              'auto_reload' => true
        ));

        $function = new Twig_SimpleFunction('reverse_url', function($url) {
            //return array_search($url,Route::$asRoutes);
            $uri = array_search($url,Route::$asRoutes);

            $arr=func_get_args();
            array_shift($arr);
            
            $pattern='/\(.*?\)/';
            while (preg_match($pattern,$uri)) {
                $uri=preg_replace($pattern,array_shift($arr), $uri,1);
            }
            return $uri;
        });
        $this->twig->addFunction($function);
    }

    public function render($template_name,$array=array()){
        echo $this->twig->render($template_name, $array);
    }

    public function locals($var=null, $exc=null){
        if(!$var) $var = get_defined_vars();
        if (!$exc) $exc = array('GLOBALS', '_FILES', '_COOKIE', '_POST', '_GET','request');
        $vars = array();
        foreach ($var as $key => $value) {
            if (!in_array($key, $exc))
                $vars[$key] = $value;
        }
        return $vars;
    }

}




































/*
Twig
1: add Filter
    $filter = new Twig_SimpleFilter('rot13', function ($string) {
            return 'filter->'.$string;
    });
    $this->twig->addFilter($filter);

2: add Function
    $function = new Twig_SimpleFunction('demo', function($str) {
            return 'function_demo->'.$str;
    });
    $this->twig->addFunction($function);


*/



?>