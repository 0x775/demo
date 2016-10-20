## 加载自定义类



####  文件存放路径
>自定义类文件(以及第三方类库)都存放在class目录下

<br>
*Tips:注意命名空间的使用*



######   示例
文件夹结构
   
        /path_to/class
	   			- AuthClass.php
  				/AliPay
        			- Pay.php
        			- Agent.php
        			- ...
    			
  			
  		
 
<br>
###### 4.3 AuthClass.php (单文件类)
    <?php
    class AuthClass {
        function getAuth(){
        	echo 'test';
        }
        ....
    }
    ?>  
    
######  单文件类使用
    <?php
    //控制器中使用
    class testController extends Controller {
    	function index(){
        	$auth= new AuthClass();
        	$auth->getAuth();
        	...
        }
        
        ....
    }
    ?>
    
<br><br><br>
######  Pay.php (第三方类库,带命名空间)
    <?php
    namespace AliPay; //如果类文件有包含在文件夹下面,需要引入命名空间
    class Pay {
        function onlinePay(){
        	echo 'test';
        }
        ....
    }
    ?>


######  第三方类(自定义类带命名空间)使用
    <?php
    //控制器中使用
    class testController extends Controller {
    	function index(){
        	$pay= new AliPay\Pay();
        	$pay->onlinePay();
        	...
        }
        
        ....
    }
    ?>
    	
    	
    	
    	
