<?php
namespace Fbreuer\MetinCms\Controller;

use ActiveRecord\Model as ActiveRecord;

class AbstractController
{
    /**
     * @var \TYPO3Fluid\Fluid\View\TemplateView
     */
    protected $view;

    public function __construct() {
        $paths = new \TYPO3Fluid\Fluid\View\TemplatePaths();
        $paths->setTemplateRootPaths(array(
            ROOT_PATH . '/Templates/'
        ));
        $paths->setLayoutRootPaths(array(
            ROOT_PATH . '/Layouts/'
        ));
        $paths->setPartialRootPaths(array(
            ROOT_PATH . '/Partials/'
        ));

        $this->view = new \TYPO3Fluid\Fluid\View\TemplateView();
    }

    public function render($template) {
        $this->view->getTemplatePaths()->setTemplatePathAndFilename(ROOT_PATH . '/Templates/' . $template . '.html');
        echo $this->view->render();
    }
}