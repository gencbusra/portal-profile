<?php

namespace kouosl\profile\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\profile\models\Profile;

/**
 * ProfileSearch represents the model behind the search form of `vendor\kouosl\profil\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['name',  'surname', 'birthday', 'school', 'start_date', 'graduation_year', 'job', 'company', 'department', 'mail_address', 'abilities', 'experiences', 'hobbies', 'link', 'photo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profile::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'surname' => $this->surname,
            'birthday' => $this->birthday,
            'start_date' => $this->start_date,
            'graduation_year' => $this->graduation_year,
            'phone_number' => $this->phone_number,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'school', $this->school])
            ->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'company', $this->company])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'mail_address', $this->mail_address])
            ->andFilterWhere(['like', 'abilities', $this->abilities])
            ->andFilterWhere(['like', 'experiences', $this->experiences])
            ->andFilterWhere(['like', 'hobbies', $this->hobbies])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
