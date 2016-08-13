<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Radio;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;

class QuestionnaireForm extends Form
{

    public function initialize($entity = null, $options = null)
    {
        // Name
        $name = new Text('name');
        $name->setLabel('您的名字');
        $name->setFilters(array('striptags', 'string'));
        $this->add($name);


        // Email
        $email = new Text('email');
        $email->setLabel('邮箱');
        $email->setFilters('email');
        $email->addValidators(array(
            new PresenceOf(array(
                'message' => 'E-mail is required'
            )),
            new Email(array(
                'message' => 'E-mail is not valid'
            ))
        ));
        $this->add($email);


        //radio
        $radio1 = new Radio("brand1", ['name'=>'chastity', 'value'=>3]);
        $radio1->setLabel('接受');
        $radio2    = new Radio("brand2", ['name'=>'chastity', 'value'=>4]);
        $radio2->setLabel('不接受');

        $this->add($radio1);
        $this->add($radio2);

    }
}
