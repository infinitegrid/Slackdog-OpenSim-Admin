<?php
/*******************************************************************************
**	file: language.php
********************************************************************************
**	author:	R�mi Porcedda
**	date:	12/12/2003
********************************************************************************
** $Revision: 1.3 $ on $Date: 2004/02/12 04:35:05 $ by $Author: lmpmbernardo $
*******************************************************************************/
////////////////////////////////////////////////////////////////////////////////
/** [Common] ********************************************************/
$lang['submit']="Valider";
$lang['add']="Ajouter";
$lang['update']="Mise � jour ";
$lang['cancel']="Annuler";
$lang['delete']="Supprimer";
$lang['edit']="Editer";
$lang['modify']="Modifier";
$lang['refresh']="Actualiser";
$lang['reset']="R�initialiser";
$lang['id'] = "N�";

$lang['rank']="Niveau";
$lang['there_are']="Il y a";
$lang['sort_by']="Trier par";
$lang['previous']="P�c�dent";
$lang['next']="Suivant";
$lang['detail']="D�tail";

$lang['success']="R�ussi";
$lang['all']="Tous";
$lang['from']="De";
$lang['to']="A";

$lang['more_detail']="Plus de d�tails";
$lang['less_detail']="Moins de d�tails";

$lang['unknown']="inconnu";


//////////////////////////////////////////////////////////////////////
/** [Login] *********************************************************/
$lang['login']="Connexion";
$lang['user_name']="Identifiant ";
$lang['password']="Mot de passe ";
$lang['lang']="Langue";
$lang['login_to']="Se connecter �";

$lang['err_login_failed']="Connexion refus�e";
$lang['err_username_incorrect']="Votre identifiant et/ou votre mot de passe sont incorrects.";



///////////////////////////////////////////////////////////////////////////////////////
/** [Index] *********************************************************/
/** [Left Menu] *****************************************************/
$lang['administration']="Administration";
$lang['support']="Support";
$lang['text_who_online']="Membres connect�s";
$lang['home']="Accueil";
$lang['logout']="D�connexion";
$lang['settings']="Pr�f�rences";

// Ticket Options
$lang['ticket_options']="Param�trage des Tickets";
$lang['ticket_categories']="Tickets : Cat�gories";
$lang['ticket_priorities']="Tickets : Priorit�s";
$lang['ticket_status']="Tickets : Statuts";
$lang['ticket_platforms']="Tickets : Plateformes";
//-- Supporter -----------------------------------------------------
$lang['ticket_management']="Gestion des Tickets";
$lang['create_ticket']="Cr�er un Ticket";
$lang['my_tickets']="Mes Tickets";
$lang['my_groups_tickets']="Mes Groupes de Tickets";
$lang['all_tickets']="Tout les Tickets";
$lang['ticket_search']="Recherche de Tickets";


// Product Options
$lang['product_options']="Param�trage des Produits";
$lang['product_modules']="Produits : Modules";
$lang['product_versions']="Produits : Versions";

// Supporter Management
$lang['supporter_management']="Gestion des Membres";
$lang['view_supporters']="Consulter les Membres";
$lang['view_groups']="Consulter les Groupes";
$lang['add_supporter']="Ajouter un Membre";
$lang['add_group']="Ajouter un Groupe";

// FAQs Management
$lang['faqs_management']="Gestion des FAQ";
$lang['view_faqs']="Consulter les FAQ";
$lang['add_faq']="Ajouter une Question";
$lang['faq_categories']="FAQ : Cat�gories";

// Ticket Reporting
$lang['ticket_reporting']="Statistiques sur les Tickets";
$lang['cumulative_statistics']="Statistiques globales";
// not sure about this translation
$lang['pipeline_statistics']="Tableau de bord";
$lang['time_sheets']="Suivi des t�ches";

/** [Clients] *******************************************************/
$lang['client_management']="Gestion des Contacts";
$lang['view_contacts']="Consulter les Contacts";
$lang['view_companies']="Consulter les Soci�t�s";
$lang['contact_search']="Rechercher un Contact";
$lang['add_contact']="Ajouter un Contact";
$lang['add_company']="Ajouter une Soci�t�";

$lang['my_records']="Mes Enregistrements";
$lang['edit_my_profile']="Modifier mon Profil";
$lang['my_time_sheet']="Mes T�ches";
$lang['my_ticket_statistics']="Mes statistiques";

$lang['knowledge_base']="Base de connaissance";
$lang['search_faqs']="Rechercher dans les FAQ";


///////////////////////////////////////////////////////////////////////////////////////
/** [Announcements] *************************************************/
$lang['announcements']="Messages";


///////////////////////////////////////////////////////////////////////////////////////
/** [Tickets] *******************************************************/
$lang['text_ticket_categories']="Les niveaux des Cat�gories des Tickets sont utilis�s afin de permettre des tris.";
$lang['new_category']="Nouvelle Cat�gorie";

$lang['text_ticket_priorities']="Les niveaux de Priorit� des Tickets sont utilis�s afin de permettre des tris. Plus le niveau est petit, plus la priorit� est �lev�e.";
$lang['new_priority']="Nouvelle Priorit�";

$lang['text_ticket_status']="Les niveaux des Statuts des Tickets sont utilis�s afin de permettre des tris. Assurez vous que <strong>les tickets trait�s ont le niveau le plus �lev�</strong>.";
$lang['new_status']="Nouveau Statut";

$lang['text_ticket_platform']="Les niveaux des Plateformes des Tickets sont utilis�s afin de permettre des tris.";
$lang['new_platform']="Nouvelle Plateforme";
//-- [Supporter] -----------------------------------------------------
$lang['ticket_created']="Ticket cr��";
$lang['assigned_to']="Attribu� �";
$lang['text_take_a_look']="Veuillez pr�ter attention � cel�";
$lang['ticket']="Ticket";
$lang['text_created_assigned']="cr�� et vous est attribu�";
$lang['update_ticket']="Mettre � jour le Ticket";
$lang['ticket_information']="Information sur le Ticket";
$lang['ticket_id']="N� de Ticket";
$lang['company']="Soci�t�";
$lang['companies']="Soci�t�s";
$lang['date_created']="Date de cr�ation";
$lang['track_time']="Temps pass�";
$lang['files']="Fichiers";
$lang['history']="Historique";
$lang['transferred_to_'] = "Transf�r� � ";
$lang['please_take_over'] = "Veuillez prendre en charge ce ticket.";
$lang['ticket_reassigned'] = "Le Ticket XXX vous est r�attribu�."; // DO NOT TRANSLATE XXX
$lang['_contact_changed_to'] = " Le Contact est devenu XXX."; // DO NOT TRANSLATE XXX
$lang['_priority_changed_to'] = " La Priorit� est devenue XXX."; // DO NOT TRANSLATE XXX
$lang['_status_changed_to'] = " Le Statut est devenu XXX."; // DO NOT TRANSLATE XXX
$lang['email_sent'] = "Courriel envoy�";
$lang['ticket_history_log'] = "Historique des Tickets - N� de Ticket : ";
$lang['reverse'] = "Tri inverse";

$lang['my_tickets']="Mes Tickets";
$lang['contact_tickets']="Tickets par Contacts";
$lang['company_tickets']="Tickets par Soci�t�s";
$lang['all_tickets']="Tous les Tickets";
$lang['updated']="Mis � jour";
$lang['text_ticket_search']="Saisissez une information quelconque recherch�e dans un des tickets.";
$lang['keyword']="Mots cl�s";
$lang['number']="Num�ro";
$lang['search']="Recherche";
$lang['created']="Cr�� le";

$lang['records_found']="Records found: ";

$lang['text_num_mins_worked']="Saisissez le temps pass� en minutes pour chaque ticket que vous voulez mettre � jour.";


///////////////////////////////////////////////////////////////////////////////////////
/** [Modules] *******************************************************/
$lang['new_module']="Nouveau Module";
$lang['module']="module";
$lang['modules']="modules";

$lang['new_version']="Nouvelle Version";
$lang['version']="version";
$lang['versions']="versions";


///////////////////////////////////////////////////////////////////////////////////////
/** [Supporters] ****************************************************/
$lang['confirmation']="Confirmation";
$lang['q_are_you_sure']="Etes-vous sure ?";
$lang['text_warning_del_supporter']="Attention : La suppression d'un membre n'est pas conseill�e.<br/>S'il existe des Tickets affect�s � ce membre, leur statut risque de devenir incoh�rent.";

$lang['last_name']="Nom ";
$lang['ticket_statistics']="Statistiques sur le Ticket";
$lang['supporter_id']="N� de Membre ";
$lang['name']="Nom ";
$lang['phone']="T�l�phone ";
$lang['email']="Courriel ";
$lang['groups']="Groupes ";

$lang['supporters']="Membres";

$lang['enter_supporter_info']="Saisissez les Informations pour le membre";
$lang['administrator']="Administrateur";
$lang['supporter']="Membre ";
$lang['add_supporter']="Ajouter un Membre";
$lang['add_to_groups']="Ajouter aux Groupes";


// [In common.php]
$lang['supporter_info']="Informations pour le Membre";
$lang['fax']="Fax ";
$lang['type']="Type ";
$lang['comments']="Commentaires ";
$lang['modified_by']="Modifi� par ";
$lang['last_modified']="Derni�re Modification ";

//-----------------
$lang['edit_supporter_info']="Editer les Information du Membre";
$lang['first_name']="Pr�nom ";
$lang['password_again']="Confirmez le Mot de Passe ";
$lang['email_address']="Adresse de Courriel ";
$lang['text_leave_blank']="Laissez � blanc pour ne pas changer";


///////////////////////////////////////////////////////////////////////////////////////
/** [Error and Success Messages] ************************************/
$lang['err_missing_info']="Il manque des informations...Cliquez sur le bouton 'Pr�c�dent' de votre navigateur et r�essayez.";
$lang['err_user_exists']="Un membre ayant le m�me nom existe d�j� !";
$lang['err_password_mismatch']="Les 'Mot de Passe' ne correspondent pas.";
$lang['err_group_exists']="Un groupe ayant le m�me nom existe d�j� !";
$lang['err_company_exists']="Une soci�t� ayant le m�me nom existe d�j� !";
$lang['err_email_exists']="Un membre ayant la m�me adresse de courriel existe d�j� !";

$lang['msg_supporter_updated']="Mise � jour des information du Membre r�ussie.";
$lang['msg_added_successfully']="ajout� avec succ�s";
$lang['msg_updated_successfully']="mis � jour avec succ�s";
$lang['msg_created_successfully']="cr�� avec succ�s";
$lang['msg_deleted_successfully']="suppression r�ussie";
$lang['msg_profile_updated']="Votre profil a �t� mis � jour avec succ�s.";


////////////////////////////////////////////////////////////////////////////////
/** [Statistics] ****************************************************/
$lang['ticket_time_sheets']="Suivi des t�ches";
$lang['time_sheet_for']="Suivi des t�ches pour ";
$lang['my_time_sheet']="Mes t�ches";

$lang['ticket_id']="N� de Ticket ";
$lang['title']="Intitul� ";
$lang['status']="Statut ";
$lang['hours_worked']="Temps pass� (H)";
$lang['minutes_worked']="Temps pass� (M)";

$lang['ticket_statistics']="Statistiques";
$lang['ticket_statistics_for']="Statistiques pour ";
$lang['case']="Objet";
$lang['open']="Ouverts";
$lang['closed']="Termin�s";
$lang['total']="Total";
$lang['priorities']="Priorit�s";
$lang['categories']="Cat�gories ";
$lang['last_updated']="Derni�re Mise � Jour";

$lang['opened_during']="Ouverts";
$lang['closed_during']="Ferm�s";
$lang['ticket_pipeline']="Tableau de bord";
$lang['avg_ticket_lifetime_weeks']="Dur�e de vie moyenne des Tickets par semaines";
$lang['less_1']="Moins d'Une";
$lang['1_2']="Une � Deux";
$lang['2_3']="Deux � Trois";
$lang['3_4']="Trois � Quatre";
$lang['more_4']="Plus de Quatre";

////////////////////////////////////////////////////////////////////////////////
/** [Time Sheets] ****************************************************/
$lang['track_time_ticket_id'] = "Temps pass� - N� de Ticket : ";

////////////////////////////////////////////////////////////////////////////////
/** [Files] ****************************************************/
$lang['files_ticket_id'] = "Fichiers - N� de Ticket : ";
$lang['add_file'] = "Ajouter un Fichier";
$lang['ticket_detail'] = "D�tail du Ticket";
$lang['file'] = "Fichier";
$lang['upload'] = "Envoyer";
$lang['no_files'] = "Il n'existe pas de fichiers associ�s � ce ticket.";
$lang['posted_by'] = "Envoy� le XXX par YYY."; // DO NOT TRANSLATE XXX AND YYY

///////////////////////////////////////////////////////////////////////////////////////
/** [Groups] ********************************************************/
$lang['group_id']="N� de Groupe";
$lang['text_warning_del_group']="Attention : Supprimer un groupe ne supprime pas les membres du groupe.<br/>Mais il est d�conseill� d'attribuer des tickets aux membres de ce groupe.";

$lang['group_name']="Nom du Groupe";
$lang['edit_group_info']="Editer les Informations du Groupe";
$lang['choose_supporters']="Choisir des Membres";

$lang['enter_group_info']="Saisissez les Informations du Groupe";

// [In common.php]
$lang['group_info']="Information du Groupe";


///////////////////////////////////////////////////////////////////////////////////////
/** [FAQs] **********************************************************/
$lang['faqs']="FAQ";
$lang['question']="Question ";
$lang['category']="Cat�gorie ";
$lang['new_category']="Nouvelle Cat�gorie";
$lang['compose_faq']="Soumettre un FAQ";
$lang['answer']="R�pondre";
$lang['add_faq']="Ajouter un FAQ";
$lang['faq_detail']="D�tail d'un FAQ";
$lang['faq_id']="N� de FAQ";
$lang['edit_faq']="Editer un FAQ";
$lang['faq_search']="Rechercher un FAQ";
$lang['text_enter_keyword']="Saisissez un mot cl�";


///////////////////////////////////////////////////////////////////////////////////////
/** [Control] *******************************************************/
$lang['control_panel']="Pr�f�rences";
$lang['setting']="Param�tres";
$lang['value']="Valeur";
$lang['helpdesk_name']="Nom du Helpdesk ";
$lang['administrator_email']="Adresse de courriel de l'Administrateur ";
$lang['helpdesk_on-off']="Helpdesk Activ�/D�sactiv� ";
$lang['reason_helpdesk_off']="Si votre helpdesk est d�sactiv�, veuillez renseigner une raison ";
$lang['num_supporters_per_page']="Nombre de Membres/Contacts par pages ";
$lang['num_groups_per_page']="Nombre de Groupes/Soci�t�s par pages ";
$lang['num_tickets_per_page']="Nombre de Tickets par pages ";
$lang['num_announcements_to_list']="Nombre de messages � afficher ";
$lang['time_tracking_status']="G�rer les temps de traitement ";
$lang['products_options_status']="G�rer les Produits ";
$lang['smtp_status']="Activer SMTP ";
$lang['who_online_status']="Afficher les Membres connect�s ";
$lang['system_statistics']="Statistiques Syst�me ";
$lang['submit_changes']="Appliquer les modifications";
$lang['automatic_mail_notification']="Activer la notification par courriel aux membres ";


///////////////////////////////////////////////////////////////////////////////////////
/** [Contact] *******************************************************/
$lang['contact_id']="N� de Contact ";
$lang['group']="Groupe ";
$lang['client']="Soci�t� ";
$lang['contact']="Contact ";
$lang['priority']="Priorit� ";
$lang['platform']="Plateforme ";
$lang['description']="Description ";
$lang['version']="Version ";
$lang['product_id']="N� de Produit ";
$lang['ticket_modules']="Modules ";
$lang['email_contact']="Adresse de courriel du Contact ";
$lang['time_spent']="Temps pass� ";
$lang['text_minutes_spent']="minutes pass�es pour le ticket depuis la derni�re mise � jour";
//-- [Supporter] -----------------------------------------------------
$lang['contact_info']="Informations pour le Contact";
$lang['view_tickets']="Consulter les Tickets";
$lang['edit_contact_info']="Editer les Informations du Contact";
$lang['msg_warning_del_contact']="Attention : Supprimer un contact n'est pas conseill�.<br/>S'il existe des tickets asoci�s au contact, leur �tat peut devenir incoh�rent.";
$lang['contact_search']="Rechercher un Contact";
$lang['text_contact_search']="Saisissez une information quelconque pour le contact que vous recherchez.";
$lang['enter_contact_info']="Saisissez les Informations du Contact";


////////////////////////////////////////////////////////////////////////////////
/** [Company] *******************************************************/
$lang['enter_company_info']="Saisissez les Informations de la Soci�t�";
$lang['company_name']="Nom de la Soci�t�";
$lang['address']="Adresse";
$lang['add_company']="Ajouter une Soci�t�";
$lang['company_id']="N� de Soci�t�";
$lang['main_contact']="Contact Principal";
$lang['company_info']="Informations pour la Soci�t�";
$lang['contacts']="Contacts";
$lang['edit_company_info']="Editer les Informations de la Soci�t�";
$lang['text_warning_del_company']="Attention : Les contacts rattach�s � une soci�t� ne sont pas supprim�s mais d�plac�s vers les contacts non affect�s � une soci�t�.<br/>Mais supprimer une soci�t� n'est pas conseill�.<br/>S'il existe des tickets associ�s � cette soci�t�, leur �tat peut devenir incoh�rent.";

////////////////////////////////////////////////////////////////////////////////
/** [Address Book] *******************************************************/
$lang['address_book'] = "Address Book";
$lang['last_first_name'] = "Last, First Name";

////////////////////////////////////////////////////////////////////////////////
/** [Company Statistics] *******************************************************/
$lang[company_statistics] = "Company Statistics";
$lang[tickets] = "Tickets";
$lang[first_ticket] = "First Ticket";
$lang[last_ticket] = "Last Ticket";

////////////////////////////////////////////////////////////////////////////////
/** [Installation] *******************************************************/
$lang['installation'] = "Installation";
$lang['step_one'] = "1�re Etape : Cr�er les Tables";
$lang['step_one_text'] = "Vous �tes maintenant pr�t � commencer l'installation du logiciel 'MyHelpDesk'.<br>Cliquez sur <b>Suivant</b> pour cr�er toutes les tables de la base de donn�es.";
$lang['step_two'] = "2�me Etape : Configurer le compte Administrateur";
$lang['company_comments'] = "Commentaires pour la Soci�t�";
$lang['required_field'] = "Champs obligatoires";
$lang['press_back_button'] = "Cliquez sur le bouton 'Pr�c�dent' de votre navigateur pour corriger le probl�me.";
$lang['step_three'] = "3�me Etape : Fin d'installation";
$lang['step_three_text'] = "Vous venez d'installer le logiciel 'MyHelpDesk' et de cr�er le compte Administrateur.<br>Vous devez maintenant vous connecter en tant que LOGIN et cr�er une structure pour les Tickets."; // DO NOT TRANSLATE LOGIN
$lang['install_error'] = "L'information pour XXX est manquante ou incorrecte."; // DO NOT TRANSLATE XXX

//insert some data into the platforms table.
$lang['generic'] = "G�n�rique";
$lang['pc'] = "PC";
$lang['macintosh'] = "Macintosh";

//insert some data into the categories table.
$lang['big_problem'] = "Gros Probl�me";
$lang['small_problem'] = "Petit Probl�me";
$lang['other_problem'] = "Autre Probl�me";

//insert some data into the priorities table.
$lang['critical'] = "Critique";
$lang['high'] = "Elev�";
$lang['medium'] = "Normal";
$lang['low'] = "Faible";

//insert some data into the status table.
$lang['open'] = "Ouvert";
$lang['in_progress'] = "En cours";
$lang['waiting_for_response'] = "Attente d'une r�ponse";
$lang['closed'] = "Termin�";

//insert default contact for inactive contacts company
$lang['defaultcontact'] = "Ce contact ne peut pas �tre modifi� !";
//insert inactive contacts company
$lang['inactivecontacts'] = "Cette soci�t� ne peut pas �tre modifi�e !";
$lang['inactivecontactsaddress'] = "Cette soci�t� virtuelle sert au regroupement des contacts non attach�s � une soci�t�.";
//insert welcome message in the announcements table
$lang['welcome'] = "Bienvenue ! Merci d'avoir install� MyHelpdesk ! Consultez <a href=http://www.sourceforge.net/projects/myhelpdesk/>MyHelpdesk</a> sur SourceForge si vous avez des questions.";

?>
