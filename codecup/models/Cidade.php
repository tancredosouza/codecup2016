<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%cidade}}".
 *
 * @property integer $id
 * @property string $nome
 * @property integer $estado
 */
class Cidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cidade}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'integer'],
            [['nome'], 'string', 'max' => 120],
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
            'estado' => 'Estado',
        ];
    }
}
