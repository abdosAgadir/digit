<?php

namespace Digital\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Digital\UserBundle\Entity\User;
use Digital\UserBundle\Form\UserType;
use Digital\UserBundle\Form\UserAuthType;
use Symfony\Component\HttpFoundation\Response;



class UserController extends Controller
{
    public function indexAction()
    {
		 $em=$this->getDoctrine()->getManager();
	     $repository=$em->getRepository('DigitalUserBundle:user'); 
	     $users=$repository->findAll();
		
        return $this->render('DigitalUserBundle:User:index.html.twig', array('users' => $users));
    }
	
	public function addAction(){
	
	  $user=new User();
	  
	  $form=$this->createForm(new UserType,$user);
	  
	   $request = $this->get('request');
		// On vérifie qu'elle est de type POST
	if ($request->getMethod() == 'POST') {

          $form->bind($request);

         if ($form->isValid()) {

			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
	
			return $this->redirect($this->generateUrl('user_display', array('id' => $user->getId())));
		}
    }
   
	   
         return $this->render('DigitalUserBundle:User:add.html.twig',array('form'=>$form->createView(),));
	
		
		
        //return $this->render('DigitalUserBundle:User:add.html.twig');
    }
	public function deleteAction($id)
    {
		$em=$this->getDoctrine()->getManager();
	     $repository=$em->getRepository('DigitalUserBundle:user'); 
	     $user=$repository->find($id);
		 $em->remove($user);
		 $em->flush();
		
	    return $this->redirect($this->generateUrl('user_homepage'));
        //return $this->render('DigitalUserBundle:User:delete.html.twig',array('id'=>$id));
    }
	public function displayAction($id){
	
	     $user=$this->getDoctrine()->getManager()->getRepository('DigitalUserBundle:user')->find($id);

	    if($user==null){
				throw $this->createNotFoundException('User[id='.$id.'] NOT FOUND !! .');		
	    }
	   return $this->render('DigitalUserBundle:User:display.html.twig',array('user'=>$user));
	    
      
    }
	public function updateAction($id)
    {
		
			
			$user=$this->getDoctrine()->getRepository("Digital\UserBundle\Entity\User")->find($id);
			$form=$this->createForm(new UserType,$user);

			 $request = $this->get('request');
			// On vérifie qu'elle est de type POST
		if ($request->getMethod() == 'POST') {

			  $form->bind($request);

			 if ($form->isValid()) {

				$em = $this->getDoctrine()->getManager();
				$em->persist($user);
				$em->flush();
				
				 return $this->render('DigitalUserBundle:User:display.html.twig',array('user'=>$user));
			 }
		}
			
			return $this->render('DigitalUserBundle:User:update.html.twig',array('form'=>$form->createView()));
		
    }
	
	public function menuAction(){
	 
	     $em=$this->getDoctrine()->getManager();
	     $repository=$em->getRepository('DigitalUserBundle:user'); 
	     $users=$repository->findAll();
	
	return $this->render('DigitalUserBundle:User:menu.html.twig',array('users'=>$users));
	
	}
	public function loginAction(){
	
		$user=new User();
	  
	  $form=$this->createForm(new UserAuthType,$user);
	  
	   $request = $this->get('request');
		// On vérifie qu'elle est de type POST
	  if ($request->getMethod() == 'POST') {

          $form->bind($request);

         if ($form->isValid()) {

			$em=$this->getDoctrine()->getManager();
	        $repository=$em->getRepository('DigitalUserBundle:user'); 
			$email = $form->get('email')->getData();
	        $user=$repository->findOneByEmail($email);
            return $this->render('DigitalUserBundle:User:point.html.twig',array('user'=>$user));
			//return $this->render('DigitalUserBundle:User:point.html.twig',array('user'=>$user));
		 }
     }
   
	   
         return $this->render('DigitalUserBundle:User:add.html.twig',array('form'=>$form->createView(),));
		
		
	}
	public function pointAction($id){
	
	   return new Response('ok point');
		//return $this->render('DigitalUserBundle:User:confirm.html.twig',array('id'=>$user));
	}
	
}
