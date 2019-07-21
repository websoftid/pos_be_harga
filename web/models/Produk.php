<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_produk".
 *
 * @property int $id
 * @property int $idkategori
 * @property string $kode
 * @property string $produk
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idkategori', 'kode', 'produk'], 'required'],
            [['idkategori'], 'integer'],
            [['kode', 'produk'], 'string', 'max' => 30],
            [['kode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idkategori' => 'Idkategori',
            'kode' => 'Kode',
            'produk' => 'Produk',
        ];
    }
}
