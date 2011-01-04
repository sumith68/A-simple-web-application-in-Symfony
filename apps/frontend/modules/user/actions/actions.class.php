<?php

/**
 * user actions.
 *
 * @package    my_proj
 * @subpackage user
 * @author     Sumith S.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
  
  public function executeIndex()
  {
    $this->form = new ValidatesForm();
  }

  public function executeNew($request)
  {
 
  }
  
  public function executeCreated($request)
  {
  $this->forward404Unless($request->isMethod('post'));

  $params= array(
      'uname'    => $request->getParameter('u_name'),
      'pword'   => $request->getParameter('p_word'),
    );

    $valid = new Validates();
    $valid->u_name = $params['uname'];
    $valid->p_word = $params['pword'];
    $valid->save();

  }
  
  public function executeSubmit($request)
  {
    $this->forward404Unless($request->isMethod('post'));
 
    $params= array(
      'u_name'    => $request->getParameter('u_name'),
      'p_word'   => $request->getParameter('p_word'),
  );
  $password = $params['p_word'];
  $username = $params['u_name'];
  $q = Doctrine_Query::create()
    ->select('p.p_word')
    ->from('Validates p')
    ->where('p.u_name = ? AND p.p_word = ?',array($username,$password));
  $results = $q->fetchArray();
  
  if (($results[0]['p_word']) == $password)
  { 
    $s = Doctrine_Query::create()
     ->select('m.*')
     ->from('Manager m') 
     ->where('m.assignsto = ?',$username);
    $tasks = $s->fetchArray();
    $this->redirect('user/thankyou?'.http_build_query($tasks));
  }
  else
  {
    $this->redirect('user/unauthorised');
  }

  }
  public function executeThankyou()
  {
 	
  }
  
  public function executeUnauthorised()
  {
   
  }      
  
  public function executeUser_update($request)
  {
     $this->forward404Unless($request->isMethod('post'));
      $params= array(
         'id' => $request ->getParameter('$u_id'),
         'status'  => $request->getParameter('cmbstatus'),
  );
  $h_id =$params['id'];
  $stat=$params['status'];
  Doctrine_Query::create()
  ->update('Manager m')
  ->set('m.status', '?',$stat)
  ->where('m.id = ?',$h_id)
  ->execute(); 

  }   

}





