<?php

namespace App\Classes;

class UploadFile {
  protected $fileName;
  protected $max_filesize = 2097152;
  protected $extension;
  protected $path;
    /** 
    * Get the name of the file
    * @return mixed
    */
    public function getName(){
    
      return $this->fileName;

    }

    /** 
    * Set the name of the file
    * @param file $file
    * @param string $name
    */

    public function setName($file, $name = ''){

      if($name === '') {

        $name = pathinfo($file, PATHINFO_FILENAME);

      }
    
      $name = strtolower(\str_replace(['-', ' '], '-', $name0)); 
      $hash = md5(microtime());
      $ext = $this->fileExtension($file);
      $this->fileName = "{$name}-{$hash}-{$ext}";
    }

    /** 
    * Set file extension
    * @param file $file
    * @return  mixed
    */

    public function fileExtension($file) {
    
      return $this->extention = pathinfo($file, PATH_EXTENSION);
      
    }

/** 
    * Validate file size
    * @param file $file
    * @return bool
    */
    
    public static function fileSize($file){
    
      $fileobj = new static;

      return $file > $fileobj->max_filesize ? true : false;
      
    }

    /** 
    * Validate file to upload
    * @param file $file
    * @param bool
    */

    public static function isImage($file){
      $fileobj = new static;
      $ext =  $fileobj->fileExtension($file);
      $validExt = array('jpg', 'jpeg', 'png', 'bmp', 'gif');
              //made to lowercase in couse of PNG case
      if(!in_array(strtolower($ext), $validExt)) {

        return false;

      }

      return true;
      
    }
    /** 
    * returns the image path
    * @return mixed
    */

    public function path() {

      return $this->path;
      
    }

    

    public static function move($temp_path, $folder, $file, $new_name) {
    
      $fileObj = new static;
      $ds = DIRECTORY_SEPARATOR;
      
      $fileObj->setName($file, $new_name);
      $file_name = $fileObj->getName(); 

      if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
      }

      $fileObj->path = "{$folder}{$ds}{$fileName}";

      $absolute_path = BASE_PATH."{$ds}uploads{$ds}$fileObj->path";
      if(move_uploaded_file($temp_path, $absolute_path)) {
        return $fileObj();
      }

      return null;
    }

}


?>