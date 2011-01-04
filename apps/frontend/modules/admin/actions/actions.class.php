<?php

/**
 * admin actions.
 *
 * @package    my_proj
 * @subpackage admin
 * @author     Sumith s.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class adminActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->managers = Doctrine_Core::getTable('Manager')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->manager = Doctrine_Core::getTable('Manager')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->manager);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ManagerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ManagerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($manager = Doctrine_Core::getTable('Manager')->find(array($request->getParameter('id'))), sprintf('Object manager does not exist (%s).', $request->getParameter('id')));
    $this->form = new ManagerForm($manager);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($manager = Doctrine_Core::getTable('Manager')->find(array($request->getParameter('id'))), sprintf('Object manager does not exist (%s).', $request->getParameter('id')));
    $this->form = new ManagerForm($manager);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($manager = Doctrine_Core::getTable('Manager')->find(array($request->getParameter('id'))), sprintf('Object manager does not exist (%s).', $request->getParameter('id')));
    $manager->delete();

    $this->redirect('admin/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $manager = $form->save();

      $this->redirect('admin/edit?id='.$manager->getId());
    }
  }
 public function executeManager_option($request)
 {

 }
 public function executeAuthen_manager($request)
 {


 }
 public function executeVerify($request)
 {

    $params= array(
      'uname'    => $request->getParameter('u_name'),
      'pword'   => $request->getParameter('p_word'),
    );
    
    if ($params['uname']=='admin' and $params['pword']=='admin')
    {
       $this->redirect('admin/manager_option');
    }
    else
    {
       $this->redirect('admin/not_authorised');
    } 
 }
 
 public function executeNot_authorised($request)
 {	

 }

}
