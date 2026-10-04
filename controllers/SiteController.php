<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Handle language switching (defaulting to ar-SA).
     */
    public function beforeAction($action)
    {
        $session = Yii::$app->session;
        $request = Yii::$app->request;

        $lang = $request->get('lang');
        if ($lang && in_array($lang, ['ar-SA', 'en-US'])) {
            $session->set('language', $lang);
        }

        if ($session->has('language')) {
            Yii::$app->language = $session->get('language');
        } else {
            Yii::$app->language = 'ar-SA';
        }

        return parent::beforeAction($action);
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
        return $this->render('index');
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
     * Booking Lead Action from Landing Page Form.
     */
    public function actionBookLead()
    {
        $request = Yii::$app->request;
        if ($request->isPost) {
            $post = $request->post('Lead');
            Yii::$app->session->setFlash('leadSubmitted', true);
        }
        return $this->redirect(['index']);
    }

    /**
     * ERP System Management Dashboard Action.
     */
    public function actionErpDashboard()
    {
        $this->layout = 'erp';
        $isArabic = strpos(Yii::$app->language, 'ar') === 0;

        if ($isArabic) {
            $jobs = [
                ['id' => 'JOB-9910', 'customer' => 'سعد العتيبي', 'location' => 'حي النخيل - فيلا 14', 'unit' => 'مكيف سبلت (دايكن 2 طن)', 'issue' => 'تسريب مياه وتنظيف فلاتر', 'tech' => 'أليكس ريفيرا', 'status' => 'مكتمل'],
                ['id' => 'JOB-9911', 'customer' => 'سارة الشمري', 'location' => 'حي الصحافة - مجمع الغرب', 'unit' => 'مكيف دولابي (قري 4 طن)', 'issue' => 'عطل في كاباستور الضواغط', 'tech' => 'ماركوس فانس', 'status' => 'قيد التنفيذ'],
                ['id' => 'JOB-9912', 'customer' => 'م. محمد الشهري', 'location' => 'حي العليا - برج 12B', 'unit' => 'مكيف كاسيت (LG إنفرتر)', 'issue' => 'صوت مرتفع في مضخة التصريف', 'tech' => 'أليكس ريفيرا', 'status' => 'تم التوجيه'],
                ['id' => 'JOB-9913', 'customer' => 'عبدالله الدوسري', 'location' => 'حي الياسمين - منزل 4', 'unit' => 'مكيف بكج مركزي (ترين 5 طن)', 'issue' => 'احتراق القاطع الكهربائي والثرموستات', 'tech' => 'دانيال كيم', 'status' => 'تم التوجيه'],
                ['id' => 'JOB-9914', 'customer' => 'نورة القحطاني', 'location' => 'طريق الملك فهد 88', 'unit' => 'لوحة كهربائية + سبلت', 'issue' => 'استبدال قاطع الصندوق الرئيسي', 'tech' => 'ماركوس فانس', 'status' => 'في الانتظار'],
            ];

            $leads = [
                ['name' => 'فهد المطيري', 'phone' => '0552345678', 'unit' => 'مكيف سبلت', 'location' => 'حي الملقا', 'time' => 'منذ 10 دقائق'],
                ['name' => 'أميرة الحربي', 'phone' => '0508765432', 'unit' => 'مكيف كاسيت سقف', 'location' => 'حي الروضة', 'time' => 'منذ 25 دقيقة'],
                ['name' => 'جاسم الزهراني', 'phone' => '0553459876', 'unit' => 'مكيف بكج مركزي', 'location' => 'حي الشاطئ', 'time' => 'منذ ساعة'],
                ['name' => 'كلثوم الغامدي', 'phone' => '0556543210', 'unit' => 'مكيف دولابي', 'location' => 'حي النزهة', 'time' => 'منذ ساعتين'],
            ];
        } else {
            $jobs = [
                ['id' => 'JOB-9910', 'customer' => 'David Warner', 'location' => 'Oakridge Villa 14', 'unit' => 'Split AC (Daikin 2-Ton)', 'issue' => 'Water Leak & Filter Wash', 'tech' => 'Alex Rivera', 'status' => 'Completed'],
                ['id' => 'JOB-9911', 'customer' => 'Sarah Jenkins', 'location' => 'West Oak Residency', 'unit' => 'Floor Standing (Gree 4-Ton)', 'issue' => 'Compressor Capacitor Failure', 'tech' => 'Marcus Vance', 'status' => 'In Progress'],
                ['id' => 'JOB-9912', 'customer' => 'Michael Chen', 'location' => 'Downtown Tower 12B', 'unit' => 'Ceiling Cassette (LG Inverter)', 'issue' => 'Drain Pump Noise', 'tech' => 'Alex Rivera', 'status' => 'Dispatched'],
                ['id' => 'JOB-9913', 'customer' => 'Robert Miller', 'location' => 'Pine Crest Home #4', 'unit' => 'Package Unit (Trane 5-Ton)', 'issue' => 'Thermostat & Breaker Trip', 'tech' => 'Daniel Kim', 'status' => 'Dispatched'],
                ['id' => 'JOB-9914', 'customer' => 'Emily Watson', 'location' => 'Sunset Boulevard 88', 'unit' => 'Electrical Panel + Split AC', 'issue' => 'Main Fuse Box Replacement', 'tech' => 'Marcus Vance', 'status' => 'Pending Dispatch'],
            ];

            $leads = [
                ['name' => 'Harrison Ford', 'phone' => '(555) 234-5678', 'unit' => 'Split AC Unit', 'location' => 'North Hills', 'time' => '10 mins ago'],
                ['name' => 'Amanda Seyfried', 'phone' => '(555) 876-5432', 'unit' => 'Ceiling Cassette Unit', 'location' => 'East Side', 'time' => '25 mins ago'],
                ['name' => 'James Wilson', 'phone' => '(555) 345-9876', 'unit' => 'Package Central Unit', 'location' => 'Lakeview Villa', 'time' => '1 hour ago'],
                ['name' => 'Clara Oswald', 'phone' => '(555) 654-3210', 'unit' => 'Floor Standing Unit', 'location' => 'Grand Heights', 'time' => '2 hours ago'],
            ];
        }

        return $this->render('erp-dashboard', [
            'jobs' => $jobs,
            'leads' => $leads,
        ]);
    }

    /**
     * Privacy Policy Page for Google Ads Compliance.
     */
    public function actionPrivacy()
    {
        return $this->render('privacy');
    }

    /**
     * Terms of Service Page for Google Ads Compliance.
     */
    public function actionTerms()
    {
        return $this->render('terms');
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
}
