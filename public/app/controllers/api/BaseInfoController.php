<?php
namespace api;
class BaseInfoController extends \Controller {
    function index(){
        $content="<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; 五龙河风景区位于十堰郧西，是一个神秘清幽的峡谷世界，纵贯鄂陕、地裂五河，被誉为鄂西北的“九寨沟”。这里有着丰富的龙文化和神文化，距今约100万年前的古猿人和59种生物化石，就发现在五龙河流域的安家乡神雾岭白龙洞。 景区主要河流五龙河，发源于秦岭南麓鄂陕交界的天池岭，是著名的“七夕”天河上游的一条重要支流。整条河流，终年水流湍急，水质清澈，水量稳定。景区因五龙而祥瑞、因道仙而扬名、因古猿而神圣、因奇秀而清雅，是当之无愧的休闲度假、返璞归真的人间天堂。 &nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;五龙河旅游风景区由天乐谷、飞龙谷、织女谷、封神谷、忘忧谷五大峡谷组成。每个峡谷都具有自己特别的风景、蕴含自己独有的文化、印证自己独特的传说。天乐谷内满目葱翠，壁立千仞，河水清幽，鸟语花香，是荡舟戏水，垂钓观鱼，登高放歌的人间天堂。 飞龙谷自天地玄黄石至三清潭止，全长1.5公里。谷中山恋叠嶂，河谷迂徐，麻柳围滩，溪水清涟，是降香祈福、陶冶情操、修身养性的绝佳去处。织女谷因传说织女下凡在此沐浴而得名，这里沟谷幽深，秀峰蔚起，瀑潭成串，碧水清澈。 封神谷因武王伐纣、 旌麾东指、兵马过处、遗址犹存而得。</li>";
        //$content = "<span>aaaa</span>";
        $this->render('wap/base_info.htm',array("content"=>$content));
    }
}


?>