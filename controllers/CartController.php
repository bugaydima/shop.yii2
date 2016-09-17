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
            $order->qty = $_SESSION['cart.quanty'];
            $order->sum = $_SESSION['cart.summ'];
            if ($order->save())
            {
                $this->saveOrderItems($_SESSION['cart'], $order->id);
                Yii::$app->session->setFlash('success', 'Спасибо, Ваш заказ принят. В ближайшее время наши менеджеры обязательно свяжутся с Вами.');
                
                Yii::$app->mailer->compose('order_mail', ['session' => $session])
                        ->setFrom(['bugaydima@yandex.ru' => 'shop.local'])
                        ->setTo($order->email)
                        ->setSubject('Заказ')
                        ->send();
                
                $session->remove('cart');
                $session->remove('cart.quanty');
                $session->remove('cart.summ');
                return $this->refresh();
            }else {
                Yii::$app->session->setFlash('error', 'Ошибка оформления заказа.');
            }
        }
        
        $this->setMetaTag('Корзина');
        return $this->render('view', compact('session', 'order'));
    }
    
    protected function saveOrderItems($items, $order_id)
    {
        
        foreach ($items as $id => $item)
        {
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['quanty'];
            $order_items->sum_item = $item['quanty'] * $item['price'];
            $order_items->save();
        }
    }
}
