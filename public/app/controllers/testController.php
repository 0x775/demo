<?php
use Illuminate\Pagination\Paginator;

class testController extends Controller {
    function index(){
        //echo 'test.index';
        var_dump($this->config('mongodb')->connection);
        exit;

        //MyClass::test();
        //$s= new MyClass();
        //$s->test();

        $a = new DemoClass\UserClass();
        $a->test();

/*
        getMongo();

        fun2();

        MyClass::test();

        $a= new MyClass();
        $a->test();

*/



        //echo $this->Config('dasdas')->domain;
        //MyDemo::findOne();

        //$a= MMongo::getObject();
        //$this->loadDB();
        //var_dump($this->db->admin->findOne());
        //$this->loadDB();
        //$a=$this->db;
        //var_dump($this->db->admin->findOne());
        //$obj=$this->db->admin->findOne();
        //var_dump($obj);

        //$c = DemoModel::count();
        //var_dump($c);
        //$c= new DemoModel();
        //$aa=$c->where('zone_id','700')->count();
        //echo $aa;

        //$aa= $c->where('zone_id','700')->first()->toarray();
       // var_dump($aa);

        //$users = $c->where('zone_id','700')->paginate(15);
        //var_dump($users);
    }
        /*
        //echo $GLOBALS['app']->name;exit;
        //var_dump($GLOBALS);exit;
        foreach($GLOBALS as $k=>$value) {
            var_dump($value);
          
            if((object)$value == (object)(Mongo)){
                echo 'find';
            }
            
        }
        exit;
        //$a= new Users();
        //$a->listss();
        var_dump(Route::$asRoutes);exit;

        $connection = new Mongo("192.168.1.198:27017");
        $db = $connection->demo; //选择数据库  
        $collection = $db->admin;
        //$obj = $collection->findOne();  
        //var_dump( $obj );
        $a=$db->admin->find();
        foreach ($a as $id => $value) {  
    echo "$id: ";  
    var_dump( $value );  
} 
    }
*/
}


?>