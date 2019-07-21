<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_harga".
 *
 * @property int $id
 * @property int $idproduk
 * @property int $harga
 * @property string $tglupdate
 */
class Harga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_harga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idproduk', 'harga'], 'required'],
            [['idproduk', 'harga'], 'integer'],
            [['tglupdate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idproduk' => 'Idproduk',
            'harga' => 'Harga',
            'tglupdate' => 'Tglupdate',
        ];
    }
}
