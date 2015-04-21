<?php


/**
 * @RoutePrefix("/index")
 */
class IndexController extends \Phalcon\Mvc\Controller
{
	/**
	 * @Route("/index")
	 */
    public function indexAction()
    {
    	d($this->dispatcher);
        d($this->dispatcher->getControllerName());
    	echo "strissng";
    }
    /**
     * @Route("/some")
     */
    public function someAction()
    {
    	echo "myaction";
    }

}