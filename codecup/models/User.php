<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord;
use \yii\web\IdentityInterface;
/**
 * This is the model class for table "{{%tbl_user}}".
 *
 * @property integer $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property integer $cidade
 * @property integer $estado
 * @property string $universidade
 * @property string $foto
 * @property string $data_cadastro
 */
class Users extends ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'email', 'senha', 'cidade', 'estado', 'universidade'], 'required'],
            [['cidade', 'estado'], 'integer'],
            [['data_cadastro'], 'safe'],
            [['nome', 'email', 'universidade'], 'string', 'max' => 100],
            [['senha'], 'string', 'max' => 20],
            [['foto'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'senha' => 'Senha',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'universidade' => 'Universidade',
            'foto' => 'Foto',
            'data_cadastro' => 'Data Cadastro',
        ];
    }
}
