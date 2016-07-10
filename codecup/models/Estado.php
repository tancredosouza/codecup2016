<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%estado}}".
 *
 * @property integer $id
 * @property string $nome
 * @property string $uf
 * @property integer $pais
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%estado}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pais'], 'integer'],
            [['nome'], 'string', 'max' => 75],
            [['uf'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'uf' => 'Uf',
            'pais' => 'Pais',
        ];
    }
}
