<?php
namespace UploadFile;

class UploadFile {

    function test(){
        echo 'uploadfile-test';
    }

    function checkDirectory($path){
        try{
            if(!is_dir($path)) {
                mkdir($path, 0777, true);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    function uploadPic($file_str,$path,$new_file_name='') {
        $this->checkDirectory($path);

        $storage = new \Upload\Storage\FileSystem($path);
        $file = new \Upload\File($str, $storage);

        $file_name = $new_file_name ？ $new_file_name : time();
        $file->setName($file_name);
        
        //验证文件上传
        $file->addValidations(array(
                //指定文件类型
                new \Upload\Validation\Mimetype(array('image/png', 'image/jpg', 'image/jpeg', 'image/gif')),
                //指定文件大小
                new \Upload\Validation\Size('5M')
        ));

        //上传文件
        try {
            //成功
            $file->upload();
            //文件名和扩展名
            $file_name = $file->getNameWithExtension();
        } catch (\Exception $e) {
            //失败!
            $errors = $file->getErrors();
        }
        return $file_name;
        
    }
}

?>