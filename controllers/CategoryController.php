<?php
namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->asarray()->all();
        $this->setMetaTag('E-Shopper');
        
        return $this->render('index', compact('hits'));
    }
    public function actionView($id) 
    {
        $category = Category::findOne($id);
        if (empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории не существует.');
        
        $query = Product::find()->where(['category_id' => $id]);
        
        $pages = new Pagination(['totalCount' => $query->count(),
                                 'pageSize' => 6, 
                                 'forcePageParam' => false,
                                 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        
                
        
        $this->setMetaTag('E-Shopper | ' . $category['name'], $category['keywords'], $category['description']);
        
        return $this->render('view', compact('products', 'pages', 'category'));
    }
    public function actionSearch()
    {
        $quest = trim(Yii::$app->request->get('q'));
        if (!$quest)
            return $this->render('search', [$this->view->title = 'E-Shopper | Поиск']);
        
        $query = Product::find()->where(['like', 'name', $quest]);
        $pages = new Pagination(['totalCount' => $query->count(),
                                 'pageSize' => 6, 
                                 'forcePageParam' => false,
                                 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        
        $this->view->title = 'E-Shopper | Поиск';
        return $this->render('search', compact('products', 'pages', 'quest'));
    }
}
