<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use app\models\Order;
?>
<div class="container">
    <?php if(!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr>
                    <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 50]) ?></td>
                    <td><a href="<?= Url::to(['product/view', 'id' => $id]) ?>"><?= $item['name']?></a></td>
                    <td><?= $item['quanty']?></td>
                    <td><?= $item['price']?></td>
                    <td><?= $item['quanty'] * $item['price']?></td>
                    <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                </tr>
            <?php endforeach?>
                <tr>
                    <td colspan="4">Итого: </td>
                    <td><?= $session['cart.quanty']?></td>
                </tr>
                <tr>
                    <td colspan="4">На сумму: </td>
                    <td><?= $session['cart.summ']?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr>
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($order, 'name'); ?>
        <?= $form->field($order, 'email'); ?>
        <?= $form->field($order, 'phone'); ?>
        <?= $form->field($order, 'address'); ?>
        <?= Html::submitButton('Заказать', ['class' => 'btn btn-success']); ?>
    <?php ActiveForm::end(); ?>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif;?>
</div>