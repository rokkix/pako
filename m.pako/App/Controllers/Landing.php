<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.08.2016
 * Time: 12:03
 */

namespace App\Controllers;
use App\Core\Mvc\Controller;
use App\Models\Image;

use App\Models\Mail;


class Landing extends Controller
{
    public function beforeAction() {}

    protected function actionAll(){

        $this->view->test = Image::getImage();
		
       // var_dump($test); die;
       // var_dump(Image::getImageBigPaths());
        //$this->view->news = NewsModel::findAll();
        $this->view->display(__DIR__ . '/../Views/landing/index.php');
    }
	
	   protected function actionMail() {

        $data = $_POST;
        $mail = new Mail;
        $mail->fill($data)->mailSend();

        $this->redirect('/');
    }

   // protected function actionAdd() {
       // $this->view->display(__DIR__ . '/../Views/add.php');
   // }

   // protected function actionUpl(){
       // var_dump($_FILES['upl']);die;
       // Image::Upload($_FILES);
        
  //  }
}
