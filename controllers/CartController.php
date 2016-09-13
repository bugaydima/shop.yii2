<?php
namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;
use Yii;

class CartController extends AppController
{
    
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $quanty = (int)Yii::$app->request->get('quanty');
        $quanty = !$quanty ? 1 : $quanty;
        
        $product = Product::findOne($id);
        
        if (empty($product)) return false;
        
        $session = Yii::$app->session;
        $session->open();
        
        $cart = new Cart();
        $cart->addToCart($product, $quanty);
        
        if (!Yii::$app->request->isAjax){
            return $this->redirect(Yii::$app->request->referrer);
        }
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        
        $session->remove('cart');
        $session->remove('cart.quanty');
        $session->remove('cart.summ');
        
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        
        $cart = new Cart();
        $cart->recalc($id);
        
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionShow()
    {
        $session = Yii::$app->session;
        $session->open();
        
        $this->layout = false;
        return $this->render('cart-modal', compact('session'));
    }
    
    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        
        $order = new Order();
        if ($order->load(Yii::$app->request->post()))
        {
            d(Yii::$app->request->post());
        }
        
        $this->setMetaTag('Корзина');
        return $this->render('view', compact('session', 'order'));
    }
}
