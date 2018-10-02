<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderProducts".
 *
 * @property int $id
 * @property string $productName
 * @property int $quantity
 * @property int $orderId
 *
 * @property Orders $order
 */
class OrderProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderProducts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productName', 'quantity', 'orderId'], 'required'],
            [['productName'], 'string'],
            [['quantity', 'orderId'], 'integer'],
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['orderId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'productName' => 'Product Name',
            'quantity' => 'Quantity',
            'orderId' => 'Order ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'orderId']);
    }
}
