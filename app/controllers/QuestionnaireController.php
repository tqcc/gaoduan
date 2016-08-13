<?php

class QuestionnaireController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('questionnaire');
        parent::initialize();
    }

    /**
     * Action to register a new user
     */
    public function indexAction()
    {
        $form = new QuestionnaireForm;

        if ($this->request->isPost()) {

            $name = $this->request->getPost('name', array('string', 'striptags'));
            $email = $this->request->getPost('email', 'email');

            $user = new Users();
            $user->username = $username;
            $user->password = sha1($password);
            $user->name = $name;
            $user->email = $email;
            $user->created_at = new Phalcon\Db\RawValue('now()');
            $user->active = 'Y';
            if ($user->save() == false) {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error((string) $message);
                }
            } else {
                $this->tag->setDefault('email', '');
                $this->tag->setDefault('password', '');
                $this->flash->success('Thanks for sign-up, please log-in to start generating invoices');
                return $this->forward('session/index');
            }
        }

        $this->view->form = $form;
    }
}
