<?php

namespace backend\controllers;

use common\models\Aboutme;
use backend\models\AboutmeSearch;
use mysqli;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AboutmeController implements the CRUD actions for Aboutme model.
 */
class TestController extends Controller
{
    public function actionIndex()
    {
            $servername = "localhost";
            $username = "root";
            $password = "q2.aH5u$8K/Wy*N";

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            echo "Connected successfully";
    }
}