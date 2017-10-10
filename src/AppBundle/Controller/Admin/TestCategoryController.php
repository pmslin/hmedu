<?php

namespace AppBundle\Controller\Admin;

class TestCategoryController extends BaseController
{
    public function indexAction()
    {
        return $this->forward('AppBundle:Admin/Category:embed', array(
            'group' => 'test',
            'layout' => 'admin/layout.html.twig',
            'menu' => 'admin_test_category_manage',
        ));
    }
}
