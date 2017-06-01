<?php

namespace ESF\EspaceAbonneBundle\Controller;



#FORM 
use ESF\EspaceAbonneBundle\Form\ContactType;
use ESF\EspaceAbonneBundle\Form\InscriptionType;
use ESF\EspaceAbonneBundle\Form\EA_PhysiqueType;
use ESF\EspaceAbonneBundle\Form\EA_MoraleType;
use ESF\EspaceAbonneBundle\Form\EA_LangueType;
use ESF\EspaceAbonneBundle\Form\UserType;
use ESF\EspaceAbonneBundle\Form\EA_ImageType;
use ESF\EspaceAbonneBundle\Form\EA_Demande_InscriptionType;
use ESF\EspaceAbonneBundle\Form\EA_Document_InscriptionType;
use ESF\EspaceAbonneBundle\Form\EA_DocumentType;
use ESF\EspaceAbonneBundle\Form\T_UniversiteType;
use ESF\EspaceAbonneBundle\Form\T_Formation_UniversiteType;
use ESF\EspaceAbonneBundle\Form\T_Langue_UniversiteType;
use ESF\EspaceAbonneBundle\Form\T_Document_UniversiteType;

#FORM Inscription 
use ESF\EspaceAbonneBundle\Form\InscriptionUniversiteType;
use ESF\EspaceAbonneBundle\Form\InscriptionLangueType;

#ENTITY
use ESF\EspaceAbonneBundle\Entity\EA_FAQ;
use ESF\EspaceAbonneBundle\Entity\EA_Physique;
use ESF\EspaceAbonneBundle\Entity\EA_Morale;
use ESF\EspaceAbonneBundle\Entity\EA_Langue;
use ESF\EspaceAbonneBundle\Entity\User;
use ESF\EspaceAbonneBundle\Entity\EA_Image;
use ESF\EspaceAbonneBundle\Entity\EA_Demande_Inscription;
use ESF\EspaceAbonneBundle\Entity\EA_Document_Inscription;
use ESF\EspaceAbonneBundle\Entity\EA_Document;
use ESF\EspaceAbonneBundle\Entity\T_Universite;
use ESF\EspaceAbonneBundle\Entity\T_Formation_Universite;
use ESF\EspaceAbonneBundle\Entity\T_Langue_Universite;
use ESF\EspaceAbonneBundle\Entity\T_Document_Universite;

#SYMFONY
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

#FOSUserBundle
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;

class BackController extends Controller
{
	/*
	* Permet de rediriger l'utilisateur sur son Profil après authentification.
	*/
	public function indexAction()
	{
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('This user does not have access to this section.');
			}
			else {
				return $this->redirectToRoute('esf_espace_abonne_monProfil');
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:index.html.twig');		
		}
	}

	/*
	* Permet d'afficher et d'éditer le Profil de l'utilisateur authentifié.
	*/
	public function monprofilAction(Request $request)
	{ 
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
				return $this->redirectToRoute('fos_user_security_login');
			}
			else {

				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$imageUser = $em->getRepository('ESFEspaceAbonneBundle:EA_Image')->findOneById($user->getPhysique()->getImage());

				$form = $this->createform(UserType::class, $user);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$user = $form->getData();
					$em->persist($user);
					$em->flush();

					$this->addFlash('notice','Modifcation enregistrée avec succès !');
				}

				return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig', array(
					'form' => $form->createView(),
					'imageUser'=> $imageUser,
					));				
			}	
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:index.html.twig');		
		}    
	}

	/*
	* Permet d'afficher et d'éditer le mot de passe de l'utilisateur authentifié.
	*/
	public function mesparametresMDPAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				/** @var $dispatcher EventDispatcherInterface */
				$dispatcher = $this->get('event_dispatcher');

				$event = new GetResponseUserEvent($user, $request);
				$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_INITIALIZE, $event);

				if (null !== $event->getResponse()) {
					return $event->getResponse();
				}

				/** @var $formFactory FactoryInterface */
				$formFactory = $this->get('fos_user.change_password.form.factory');

				$form = $formFactory->createForm();
				$form->setData($user);

				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					/** @var $userManager UserManagerInterface */
					$userManager = $this->get('fos_user.user_manager');

					$event = new FormEvent($form, $request);
					$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

					$userManager->updateUser($user);

					if (null === $response = $event->getResponse()) {
						$url = $this->generateUrl('esf_espace_abonne_mesParametresMDP');
						$response = new RedirectResponse($url);
					}

					$dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
					return $response;
				}

				return $this->render('ESFEspaceAbonneBundle:Back:mesparametresMDP.html.twig', array(
					'form' => $form->createView(),
					));
			}			
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher et d'éditer l'adresse email de l'utilisateur authentifié.
	*/
	public function mesparametresMAILAction(Request $request)
	{    
		try {

			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				/** @var $dispatcher EventDispatcherInterface */
				$dispatcher = $this->get('event_dispatcher');

				$event = new GetResponseUserEvent($user, $request);
				$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

				if (null !== $event->getResponse()) {
					return $event->getResponse();
				}

				/** @var $formFactory FactoryInterface */
				$formFactory = $this->get('fos_user.profile.form.factory');

				$form = $formFactory->createForm();
				$form->setData($user);

				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					/** @var $userManager UserManagerInterface */
					$userManager = $this->get('fos_user.user_manager');

					$event = new FormEvent($form, $request);
					$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

					$userManager->updateUser($user);

					if (null === $response = $event->getResponse()) {
						$url = $this->generateUrl('esf_espace_abonne_mesParametresMAIL');
						$response = new RedirectResponse($url);
					}

					$dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

					return $response;
				}

				return $this->render('ESFEspaceAbonneBundle:Back:mesparametresMAIL.html.twig', array(
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher et d'éditer les documents personnel lié à l'utilisateur authentifié.
	*/
	public function mesdocumentsAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {

				$user = $this->getUser();
				$form = $this->createform(UserType::class, $user);

				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$user = $form->getData();
					$em = $this->getDoctrine()->getManager();
					$em->persist($user);
					$em->flush();

					$this->addFlash('notice','Documents bien enregistrée.');
					return $this->redirectToRoute('esf_espace_abonne_mesDocuments');
				}

				return $this->render('ESFEspaceAbonneBundle:Back:mesdocuments.html.twig', array(
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher les demandes d'inscription lié à l'utilisateur authentifié.
	*/
	public function mesdemandesAction()
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$physique = $em->getRepository('ESFEspaceAbonneBundle:EA_Physique')->findOneById($user->getPhysique()->getId());

				$listDemandeInscription = $em->getRepository('ESFEspaceAbonneBundle:EA_Demande_Inscription')->getDemandesIncriptions($physique->getId());

				return $this->render('ESFEspaceAbonneBundle:Back:mesdemandes.html.twig', array(
					'listDemandeInscription' => $listDemandeInscription,
					));		
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher le détails de la demande d'inscription lié à l'utilisateur authentifié.
	*/
	public function detailsdemandesAction(EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				return $this->render('ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'éditer la demande d'inscription lié à l'utilisateur authentifié.
	*/
	public function modifierdemandesAction(Request $request, EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				if (isset($eA_Demande_Inscription)) {
					$type = $eA_Demande_Inscription->getType();
					$etat = $eA_Demande_Inscription->getEtat();
					$etablissement = $eA_Demande_Inscription->getEtablissement();
					$formation = $eA_Demande_Inscription->getFormation();
					$langue = $eA_Demande_Inscription->getLangue();
					$partenaire = $eA_Demande_Inscription->getPartenaire();
				}

				$editForm = $this->createForm(EA_Demande_InscriptionType::class, $eA_Demande_Inscription);
				$editForm->handleRequest($request);

				if ($editForm->isSubmitted() && $editForm->isValid()) {

					$eA_Demande_Inscription->setType($type);
					$eA_Demande_Inscription->setEtat($etat);
					$eA_Demande_Inscription->setEtablissement($etablissement);
					$eA_Demande_Inscription->setFormation($formation);
					$eA_Demande_Inscription->setLangue($langue);
					$eA_Demande_Inscription->setPartenaire($partenaire);

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$this->addFlash('notice','Modifcation bien enregistrée.');
					return $this->redirectToRoute('esf_espace_abonne_modifierDemandes', array('id' => $eA_Demande_Inscription->getId()));
				}

				return $this->render('ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'editForm' => $editForm->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher une aide contextuel à l'utilisateur authentifié.
	*/
	public function aideAction()
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$em = $this->getDoctrine()->getManager();
				$listFAQ = $em->getRepository('ESFEspaceAbonneBundle:EA_FAQ')->findAll();

				return $this->render('ESFEspaceAbonneBundle:Back:aide.html.twig', array(
					'listFAQ' => $listFAQ,
					));		
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet l'envoi de mail vers le support à l'utilisateur authentifié.
	*/
	public function contactAction(Request $request)
	{
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$form = $this->createForm(ContactType::class,null,array(
					'action' => $this->generateUrl('esf_espace_abonne_contact'),
					'method' => 'POST'
					));

				if ($request->isMethod('POST')) {
					$form->handleRequest($request);
					if($form->isValid()){
						if($this->sendEmail($form->getData())){
							$this->addFlash('notice','Email envoyé.');
							return $this->redirectToRoute('esf_espace_abonne_contact');
						} else{
							var_dump("Errooooor");
						}
					}
				}

				return $this->render('ESFEspaceAbonneBundle:Back:contact.html.twig', array(
					'form' => $form->createView()
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet la création d'une demande d'inscription à l'universite à l'utilisateur authentifié.
	*/
	public function universiteOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionUniversiteType::class);
				$form->handleRequest($request);

				if ($request->isXmlHttpRequest()) {

					if ($request->get('langue') !== null) {

						$idLangue = $request->get('langue');

						if (isset($idLangue)) {

							$data = $this
							->getDoctrine()
							->getManager()
							->getRepository('ESFEspaceAbonneBundle:T_Formation_Universite')
							->findOneById($idLangue);

							return new JsonResponse($data);
						}


					}elseif ($request->get('formation') !== null) {
						$formations = $request->get('formation');
					}
					
					
				} elseif ($form->isSubmitted() && $form->isValid()) {
					if ($form->get('langue')->getData() !== null && $form->get('formation')->getData() !== null && $form->get('nometablissement')->getData() !== null) {

						$formation = $form->get('formation')->getData()->getFormation();
						$langue = $form->get('langue')->getData()->getLangue();
						$nomEtablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
						
						$eA_Demande_Inscription = new EA_Demande_Inscription();
						$eA_Demande_Inscription->setPhysique($user->getPhysique());
						$eA_Demande_Inscription->setType('Universite');
						$eA_Demande_Inscription->setEtat('Creation');
						$eA_Demande_Inscription->setEtablissement($nomEtablissement);
						$eA_Demande_Inscription->setFormation($formation);
						$eA_Demande_Inscription->setLangue($langue);

						$em = $this->getDoctrine()->getManager();
						$em->persist($eA_Demande_Inscription);
						$em->flush();

						$idEtablissement = $form->get('nometablissement')->getData()->getId();
						$document = $em->getRepository('ESFEspaceAbonneBundle:T_Document_Universite')
						->getDocumentIncription($idEtablissement);

						return $this->render('ESFEspaceAbonneBundle:Back:universiteTwo.html.twig', array(
							'document' => $document,
							'eA_Demande_Inscription' => $eA_Demande_Inscription,
							));	
					}					
				}
				return $this->render('ESFEspaceAbonneBundle:Back:universiteOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	public function universiteTwoAction(Request $request, EA_Demande_Inscription $eA_Demande_Inscription)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				if (isset($eA_Demande_Inscription)) {
					$type = $eA_Demande_Inscription->getType();
					$etat = $eA_Demande_Inscription->getEtat();
					$etablissement = $eA_Demande_Inscription->getEtablissement();
					$formation = $eA_Demande_Inscription->getFormation();
					$langue = $eA_Demande_Inscription->getLangue();
					$partenaire = $eA_Demande_Inscription->getPartenaire();
				}

				$form = $this->createForm(EA_Demande_InscriptionType::class, $eA_Demande_Inscription);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$eA_Demande_Inscription->setType($type);
					$eA_Demande_Inscription->setEtat($etat);
					$eA_Demande_Inscription->setEtablissement($etablissement);
					$eA_Demande_Inscription->setFormation($formation);
					$eA_Demande_Inscription->setLangue($langue);
					$eA_Demande_Inscription->setPartenaire($partenaire);

					$document = $form->getData();
					$em = $this->getDoctrine()->getManager();
					$em->persist($document);
					$em->flush();

					$user = $this->getUser();
					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					$this->get('mailer')->send($message);

					return $this->redirectToRoute('esf_espace_abonne_mesDemandes');
				}

				return $this->render('ESFEspaceAbonneBundle:Back:universiteThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}



	/*
	* Permet la création d'une demande d'inscription à un cours de langue à l'utilisateur authentifié.
	*/
	public function langueOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {

				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();
				$form = $this->createform(InscriptionLangueType::class);

				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					if ($form->get('langue')->getData()->getRaisonSocial() !== null && $form->get('pays')->getData()->getRaisonSocial() !== null && $form->get('raisonsocial')->getData()->getRaisonSocial() !== null) {

						$langue = $form->get('langue')->getData()->getRaisonSocial();
						$pays = $form->get('pays')->getData()->getRaisonSocial();
						$raisonsocial = $form->get('raisonsocial')->getData()->getRaisonSocial();
						
						$raisonSocialId = $form->get('raisonsocial')->getData()->getId();
						$document = $em->getRepository('ESFEspaceAbonneBundle:T_Document_Universite')
						->getDocumentIncription($raisonSocialId);

						return $this->render('ESFEspaceAbonneBundle:Back:langueTwo.html.twig', array(
							'form' => $form->createView(),
							'document' => $document,
							));	
					}
				}
				return $this->render('ESFEspaceAbonneBundle:Back:langueOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	public function langueTwoAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$eA_Demande_Inscription = new EA_Demande_Inscription();
				$form = $this->createForm(EA_Demande_InscriptionType::class, $eA_Demande_Inscription);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$user = $this->getUser();
					$em = $this->getDoctrine()->getManager();
					$physique = $em->getRepository('ESFEspaceAbonneBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
					$eA_Demande_Inscription->setPhysique($physique);
					$eA_Demande_Inscription->setType('langue');
					$eA_Demande_Inscription->setEtat('creation');

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					$this->get('mailer')->send($message);

					return $this->redirectToRoute('esf_espace_abonne_mesDemandes');
				}

				return $this->render('ESFEspaceAbonneBundle:Back:langueThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet la création d'une demande d'inscription à logement universite ou partenaire à l'utilisateur authentifié.
	*/
	public function logementOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionType::class);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					if ($form->get('nometablissement')->getData()->getNomEtablissement() !== null) {

						$nometablissement = $form->get('nometablissement')->getData()->getNomEtablissement();
						$universiteId = $form->get('nometablissement')->getData()->getId();

						$document = $em->getRepository('ESFEspaceAbonneBundle:T_Document_Universite')
						->getDocumentIncription($universiteId);

						return $this->render('ESFEspaceAbonneBundle:Back:logementTwo.html.twig', array(
							'form' => $form->createView(),
							'document' => $document,
							));	
					}
				}
				return $this->render('ESFEspaceAbonneBundle:Back:logementOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	public function logementTwoAction(Request $request)
	{
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {    
				$eA_Demande_Inscription = new EA_Demande_Inscription();
				$form = $this->createForm(EA_Demande_InscriptionType::class, $eA_Demande_Inscription);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$user = $this->getUser();
					$em = $this->getDoctrine()->getManager();
					$physique = $em->getRepository('ESFEspaceAbonneBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
					$eA_Demande_Inscription->setPhysique($physique);
					$eA_Demande_Inscription->setType('logement');
					$eA_Demande_Inscription->setEtat('creation');

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					$this->get('mailer')->send($message);					

					return $this->redirectToRoute('esf_espace_abonne_mesDemandes');
				}
				return $this->render('ESFEspaceAbonneBundle:Back:logementThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet la création d'une demande d'inscription à un cours de préparation à l'utilisateur authentifié.
	*/
	public function preparationOneAction(Request $request)
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {  
				$user = $this->getUser();
				$em = $this->getDoctrine()->getManager();

				$form = $this->createform(InscriptionType::class);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {
					$typePreparation = $form->get('typePreparation')->getData();
					$universiteId = 1; //$form->get('typePreparation')->getData()->getId();

					$document = $em->getRepository('ESFEspaceAbonneBundle:T_Document_Universite')
					->getDocumentIncription($universiteId);

					return $this->render('ESFEspaceAbonneBundle:Back:preparationTwo.html.twig', array(
						'form' => $form->createView(),
						'document' => $document,
						));	
				}

				return $this->render('ESFEspaceAbonneBundle:Back:preparationOne.html.twig', array(
					'form' => $form->createView(),
					));	
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	public function preparationTwoAction(Request $request)
	{    

		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {  
				$eA_Demande_Inscription = new EA_Demande_Inscription();
				$form = $this->createForm(EA_Demande_InscriptionType::class, $eA_Demande_Inscription);
				$form->handleRequest($request);

				if ($form->isSubmitted() && $form->isValid()) {

					$user = $this->getUser();
					$em = $this->getDoctrine()->getManager();
					$physique = $em->getRepository('ESFEspaceAbonneBundle:EA_Physique')->findOneById($user->getPhysique()->getId());
					$eA_Demande_Inscription->setPhysique($physique);
					$eA_Demande_Inscription->setType('preparation');
					$eA_Demande_Inscription->setEtat('creation');

					$em = $this->getDoctrine()->getManager();
					$em->persist($eA_Demande_Inscription);
					$em->flush();

					$email = $user->getEmail();
					$utilisateur = $user->getUserName();
					$typeInscription = $eA_Demande_Inscription->getType();

					$message = \Swift_Message::newInstance();
					$message->setSubject('Inscription à ' . $eA_Demande_Inscription->getType());
					$message->setFrom('dudeego.contact@gmail.com');
					$message->setTo($email);
					$message->setBody('Information : l\'utilisateur '. $utilisateur . ' souhaite s\'inscrire à ' . $typeInscription);
					$this->get('mailer')->send($message);

					return $this->redirectToRoute('esf_espace_abonne_mesDemandes');
				}

				return $this->render('ESFEspaceAbonneBundle:Back:preparationThree.html.twig', array(
					'eA_Demande_Inscription' => $eA_Demande_Inscription,
					'form' => $form->createView(),
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet d'afficher un lien de redirection vers l'inscription d'une mutuelle étudiante,
	* avec un code de promotion à l'utilisateur authentifié.
	*/
	public function mutuelleAction()
	{    
		try {
			if (!is_object($this->getUser()) || !$this->getUser() instanceof UserInterface) {
				throw new AccessDeniedException('Accès à cette page, le droit tu n\'as pas.');
			}
			else {  
				$em = $this->getDoctrine()->getManager();
				$morale = $em->getRepository('ESFEspaceAbonneBundle:EA_Morale')->getMutuel('AVA');

				return $this->render('ESFEspaceAbonneBundle:Back:mutuelle.html.twig', array(
					'morale' => $morale,
					));
			}
		} catch (Exception $e) {
			$this->addFlash('notice', $e);
			return $this->render('ESFEspaceAbonneBundle:Back:monprofil.html.twig');
		}
	}

	/*
	* Permet l'envoi de mail.
	* tableau de données : sujet, email utilisateur, message.
	*/
	private function sendEmail($data){

		$message = \Swift_Message::newInstance()
		->setSubject($data["subject"])
		->setFrom('dudeego.contact@gmail.com')
		->setTo($data["email"])
		->setBody($data["message"])
		;

		return $this->get('mailer')->send($message);
	}

}