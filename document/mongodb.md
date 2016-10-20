# Mongodb

<br>  

## 支持Mongodb

**github**: <https://github.com/purekid/mongodm>


#### 1：首先检测服务器环境是否支持mongodb 


*检测phpinfo() 输出支持mongodb*
  
    
      
        
        

#### 2：安装支持

> composer require "purekid/mongodm"  
> 或者直接修改composer.json文件，加入 "purekid/mongodm": "dev-master"

#### 3: 下载并载入模块文件
>composer update


#### 4: 使用

######   4.1 增加配置文件
config文件夹下面增加mongodb的配置文件
   
        <?php
	   		return [
  				'connection' => array(
        			'hostnames' => 'localhost',
        			'database'  => 'demo',
        			'options'  => array()
    			)
  			];
  		?>
 
<br>
######  4.2 修改入口
bootstrap.php文件 下面增加一行引入配置  
``` \Purekid\Mongodm\MongoDB::setConfigBlock('default',require BASE_PATH.'/config/mongodb.php'); ```
<br><br>
###### 4.3 编写Model
    <?php
    use Purekid\Mongodm\Model;
    class Users extends Model{
        static $collection = "admin";
    }
    ?>  
    
###### 4.4 Controller使用
    <?php
		class UserApiController extends BaseController {
    	function userLogin(){
        	$users = Users::all();
        	print_r($users);
    	}
	}
	?>


###### 4.5 CRUD
    1. 新建Create
    	$user = new User();
    	$user->name = "Michael";
    	$user->age = 18;
    	$user->save();
    	
    2. 更新Update
    	$user->update(array('age'=>18,'hobbies'=>array('music','game'))); 
    	$user->save();
    	
    3. 查找
    	$user = User::one(array('name'=>"zhangsan"));
    	
    4. 删除
    	$user = User::one();
    	$user->delete();
    	
    	
    	
    	
###### 4.6 更多操作
> See: <https://github.com/purekid/mongodm>
    	
