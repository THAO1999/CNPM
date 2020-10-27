<?php
namespace common\models;

use yii\web\UploadedFile;
use Yii;
use yii\base\Model;
use frontend\models\Students;

class UploadForm extends Model
{

    public function Upload($model)
    {
        
        
       // $model = new OrganizationRequests();  // đã từng lỗ ở đây
        $fileUpload = UploadedFile::getInstance($model, 'imageFile');
        
        if(isset($fileUpload->size)){
           
            $fileUpload->saveAs(Yii::getAlias('@uploads/') . $fileUpload->baseName . '.' . $fileUpload->extension);
           
            return  $fileUpload->baseName. '.'.$fileUpload->extension;
          
        }       
    }
}
?>