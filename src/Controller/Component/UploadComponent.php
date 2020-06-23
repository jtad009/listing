<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Filesystem\Folder;
use Cake\Network\Exception;

/**
 * Upload component
 */
class UploadComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    public $components = ['Manipulator'];
    protected $_defaultConfig = [];
    public $max_files = 3;
    protected $dir = SHOUT_IMAGE_UPLOAD_PATH;

    /**
     * Upload multiple images at once
     * @param type $data the payload
     * @return string| null
     */
    public function uploadMultiple($data) {
        $filename = [];
        for ($i = 0; $i < count($data); $i++):
            if (!empty($data[$i]['name'])) :
                
                $filename[] = $this->upload($data[$i]);
            endif;
        endfor;
        return $filename;
    }

    /**
     * Upload Video or Mp3 Or Photo to server
     * @todo Imporve to work with jquery or angular js and also check file type
     * @param file $data path to file
     * @return string
     * @throws InternalErrorException
     */
    public function send($data, $type) {
        if($data['size'] == 0){
            return "";
        }
        if (!empty($data['name'])) {
             $this->Manipulator->setImageFile($data['tmp_name']);
             $filename = APP_NAME.'-'.substr(\Cake\Utility\Text::Uuid(),0,5).$this->getExtension($data['name']);
            switch ($type) {
                
                    case 'blogs':
                    $this->dir = SHOUT_IMAGE_UPLOAD_PATH.'/passport/blogs';
                   
                    $this->Manipulator->resample(1280,600, false);
                    //$this->Manipulator->crop();
                    $this->Manipulator->save($this->dir.DS.$filename);
                    $this->dir = SHOUT_IMAGE_UPLOAD_PATH.'/passport/blogs/400';
                   
                    $this->Manipulator->resample(612,400, false);
                    // $this->Manipulator->crop(0);
                    $this->Manipulator->save($this->dir.DS.$filename);

                    break;
                    case 'article_content':
                        $this->dir = SHOUT_IMAGE_UPLOAD_PATH.'/passport/blogs';
                       
                        $this->Manipulator->resample(640,480, false);
                        //$this->Manipulator->crop();
                        $this->Manipulator->save($this->dir.DS.$filename);
                      
                    break;
                    
                case 'logo':
                    $this->dir = SHOUT_IMAGE_UPLOAD_PATH.'/logo';
                   
                    $this->Manipulator->resample(100,100);
                    //$this->Manipulator->crop();
                    $this->Manipulator->save($this->dir.DS.$filename);
                    break;
            }
           // new Folder($this->dir, true); //create folder for upload if it doesnt exist
            return $filename;
        }
    }
    
    /**
     * Upload Image data to the server
     * @param type $data
     * @return string
     * @throws InternalErrorException
     */
    private function upload($data) {
        $allowed = array('png', 'jpg','jpeg','pdf','doc','docx','xls','xlsx','ppt','csv');
        if (!in_array(substr(strrchr($data['name'], '.'), 1), $allowed)):
            throw new InternalErrorException("Error Processing Request", 1);
        elseif (is_uploaded_file($data['tmp_name'])) :
            $filename = \Cake\Utility\Text::Uuid() . '-' . $data['name'];
            //echo $filename;
            move_uploaded_file($data['tmp_name'], $this->dir . DS . $filename);
        endif;
        return $filename;
    }

   
    
    /**
     * Get the extension for a file
     */
    private function getExtension($image){
        $temp = explode(".", $image);
        // Get extension.
        return '.'.end($temp);
  
    }
    
    public function savePassport($fname){
        $this->Manipulator->setImageFile($fname);
    }
}
