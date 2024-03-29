<?php

use Phalcon\Mvc\Controller;
use Phalcon\Tag;


class ControllerBase extends Controller
{

    protected function initialize()
    {
        $this->tag->prependTitle('真命天奴 | ');
        $this->view->setTemplateAfter('main');
    }

    protected function forward($uri)
    {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
    	return $this->dispatcher->forward(
    		array(
    			'controller' => $uriParts[0],
    			'action' => $uriParts[1],
                'params' => $params
    		)
    	);
    }
}
