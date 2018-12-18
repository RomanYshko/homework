<?php

namespace app\controllers;

use app\models\Chart;
use app\models\Courses;
use app\models\Multimedia;
use app\models\Reviews;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Post;
use yii\helpers\Url;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        Yii::$app->log->targets['debug'] = null;
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $query = Courses::find();

        $courses = $query->orderBy('id DESC')->all();

        $arrCourse = [];

        foreach ($courses as $course){
            $arrCourse[] = [
                'data'      => $course['data'],
                'img'       => $course['img'],
                'title'     => $course['title'],
                'price'     => $course['price'],
                'url'       =>  Url::to(['article', 'id' => $course['id']]),
            ];
        }



        $query = Chart::find();

        $chartCourses = $query->orderBy('id DESC')->all();

        return $this->render('index', [
            'courses'       => $arrCourse,
            'chartCourses'  => $chartCourses,
        ]);
    }


    public function actionArticle(){

        $query = Post::find();

        $post = $query->where(['courses_id' => $_GET['id']])->one();



        return $this->render('article',[

            'post' => $post
        ]);
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionCourse(){

        $query = Courses::find();

        $courses = $query->all();

        $arrCourse = [];

        foreach ($courses as $course){
            $arrCourse[] = [
                'data'      => $course['data'],
                'img'       => $course['img'],
                'title'     => $course['title'],
                'price'     => $course['price'],
                'url'       =>  Url::to(['article', 'id' => $course['id']]),
            ];
        }


        return $this->render('course',[

            'courses' => $arrCourse

        ]);
    }



    public function actionGallery(){


        $query = Multimedia::find();


        $multimedia = $query->orderBy('id DESC')->all();

        return $this->render('gallery',[

            'multimedia' => $multimedia

        ]);
    }


    public function actionReview(){

        $query = Reviews::find();

        $reviews = $query->all();


        return $this->render('review',[
            'reviews' => $reviews
        ]);
    }

    public function actionContacts(){

        return $this->render('contacts');
    }

    public function actionEmail(){



        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $address = "Marinayshko@gmail.com";
        $mes = "Тема: Заявка !\nТелефон: $phone\nИмя: $name";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'From: <'.$address.'>' . "\r\n";
        $sub='Заявка от клиента'; //сабж

        mail($address, $sub, $mes, $headers);


        ini_set('short_open_tag', 'On');
        header('Refresh: 3; URL=/');

        return $this->render('email',[
        ]);
    }

}
