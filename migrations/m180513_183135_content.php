<?php

use yii\db\Migration;    
    
class m180513_183135_content extends Migration
{
    public function up()
    {
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
			'surname' => $this->string(128)->notNull(),
			'birthday' => $this->date(128)->notNull(),
			'school' => $this->string(128)->notNull(),
			'start_date' => $this->date(128)->notNull(),
			'graduation_year' => $this->date(128),
			'job' => $this->string(128),
			'company' => $this->string(128),
			'department' => $this->string(128),
			'phone_number' => $this->string(128)->notNull(),
			'mail_address' => $this->string(128)->notNull(),
			'abilities' => $this->string(128),
			'experiences' => $this->string(128),
			'hobbies' => $this->string(128),
			'link' => $this->string(128),
			'photo' => $this->string(128),
			
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
		
		
       
    }

    public function down()
    {
        $this->dropTable('profile');
        
    }
}   
