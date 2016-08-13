<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->tag->setTitle('琅嬛福地===>高端SM会所');
        parent::initialize();
    }

    public function indexAction()
    {
        if (!$this->request->isPost()) {
            $this->flash->notice('致力打造国内最高端SM会所');
        }
    }
}
