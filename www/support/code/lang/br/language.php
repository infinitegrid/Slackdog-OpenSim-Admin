<?php
/*******************************************************************************
**	file:	language.php
********************************************************************************
**	author:	Luis Bernardo
**	date:	2003/12/18
********************************************************************************
**	$Revision: 1.1 $ on $Date: 2004/03/01 06:07:08 $ by $Author: lmpmbernardo $
*******************************************************************************/
// Nota: Isto assume que o sistema vai ser usado dentro de uma empresa e em
// vez de Empresas h� Escrit�rios. Se quiserem usar para v�rias empresas basta
// fazer um find & replace e mudar Escrit�rio para Empresa.
///////////////////////////////////////////////////////////////////////////////////////
/** [Common] ********************************************************/
$lang['submit']="Enviar";
$lang['add']="Adicionar";
$lang['update']="Atualizar";
$lang['cancel']="Cancelar";
$lang['delete']="Apagar";
$lang['edit']="Editar";
$lang['modify']="Alterar";
$lang['refresh']="Capturar";
$lang['reset']="Limpar";
$lang['id'] = "ID";


$lang['rank']="Ordem";
$lang['there_are']="H�";
$lang['sort_by']="Ordenar Por";
$lang['previous']="Anterior";
$lang['next']="Pr�ximo";
$lang['detail']="Detalhes";

$lang['success']="Sucesso";
$lang['all']="Todos";
$lang['from']="De";
$lang['to']="Para";

$lang['more_detail']="Mais Detalhes";
$lang['less_detail']="Menos Detalhes";

$lang['unknown']="desconhecido";

//////////////////////////////////////////////////////////////////////
/** [Login] *********************************************************/
$lang['login']="Login";
$lang['user_name']="Usu�rio";
$lang['password']="Senha";
$lang['lang']="Idioma";


///////////////////////////////////////////////////////////////////////////////////////
/** [Index] *********************************************************/
/** [Left Menu] *****************************************************/
$lang['administration']="Administra��o";
$lang['support']="Suporte";
$lang['text_who_online']="Quem est� online";
$lang['home']="Home";
$lang['logout']="Logout";
$lang['settings']="Configura��es";

// Ticket Options
$lang['ticket_options']="Configurar Ocorr�ncias";
$lang['ticket_categories']="Categoria das Ocorr�ncias";
$lang['ticket_priorities']="Prioridade das Ocorr�ncias";
$lang['ticket_status']="Estado das Ocorr�ncias";
$lang['ticket_platforms']="Plataforma das Ocorr�ncias";
//-- Supporter -----------------------------------------------------
$lang['ticket_management']="Gest�o das Ocorr�ncias";
$lang['create_ticket']="Criar Ocorr�ncia";
$lang['my_tickets']="Minhas Ocorr�ncias";
$lang['my_groups_tickets']="Ocorr�ncias dos Meus Grupos";
$lang['all_tickets']="Todas as Ocorr�ncias";
$lang['ticket_search']="Procurar Ocorr�ncia";


// Product Options
$lang['product_options']="Configurar Produtos";
$lang['product_modules']="M�dulos dos Produtos";
$lang['product_versions']="Vers�es dos Produtos";

// Supporter Management
$lang['supporter_management']="Gest�o de T�cnicos";
$lang['view_supporters']="Ver T�cnicos";
$lang['view_groups']="Ver Grupos";
$lang['add_supporter']="Adicionar T�cnico";
$lang['add_group']="Adicionar Grupo";

// FAQs Management
$lang['faqs_management']="Gest�o de FAQs";
$lang['view_faqs']="Ver FAQs";
$lang['add_faq']="Adicionar FAQ";
$lang['faq_categories']="Categoria de FAQs";

// Ticket Reporting
$lang['ticket_reporting']="Relat�rio das Ocorr�ncias";
$lang['cumulative_statistics']="Estat�sticas Todas/por T�cnico";
// not sure about this translation
$lang['pipeline_statistics']="Estat�sticas Todas/por Estado";
$lang['time_sheets']="Registos Hor�rios";

/** [Clients] *******************************************************/
$lang['client_management']="Gest�o de Usu�rios";
$lang['view_contacts']="Ver Contatos";
$lang['view_companies']="Ver Escrit�rios";
$lang['contact_search']="Procurar Contato";
$lang['add_contact']="Adicionar Contato";
$lang['add_company']="Adicionar Escrit�rio";

$lang['my_records']="Meus Registos";
$lang['edit_my_profile']="Alterar Perfil";
$lang['my_time_sheet']="Meus Registos Hor�rios";
$lang['my_ticket_statistics']="Minhas Estat�sticas";

$lang['knowledge_base']="Base de Conhecimento";
$lang['search_faqs']="Procurar FAQs";


///////////////////////////////////////////////////////////////////////////////////////
/** [Announcements] *************************************************/
$lang['announcements']="An�ncios";


///////////////////////////////////////////////////////////////////////////////////////
/** [Tickets] *******************************************************/
$lang['text_ticket_categories']="A ordem das Categorias das Ocorr�ncias � usada para prop�sitos de ordena��o.";
$lang['new_category']="Nova Categoria";

$lang['text_ticket_priorities']="A ordem das Prioridades das Ocorr�ncias � usada para prop�sitos de ordena��o. Quanto mais baixa a ordem, mais alta a prioridade.";
$lang['new_priority']="Prioridade Nova";

$lang['text_ticket_status']="A ordem dos Estados das Ocorr�ncias � usada para prop�sitos de ordena��o. Certifique-se que os <strong>ocorr�ncias encerradas t�m a ordem mais alta</strong>.";
$lang['new_status']="Novo Estado";

$lang['text_ticket_platform']="A ordem das Plataformas das Ocorr�ncias � usada para prop�sitos de ordena��o.";
$lang['new_platform']="Nova Plataforma";
//-- [Supporter] -----------------------------------------------------
$lang['ticket_created']="Ocorr�ncia criada";
$lang['assigned_to']="Atribu�do a";
$lang['text_take_a_look']="Por favor d� uma olhada nisto";
$lang['ticket']="Ocorr�ncia";
$lang['text_created_assigned']="criado e atribuido a si";
$lang['update_ticket']="Atualizar Ocorr�ncia";
$lang['ticket_information']="Informa��o da Ocorr�ncia";
$lang['ticket_id']="ID da Ocorr�ncia";
$lang['company']="Escrit�rio";
$lang['companies']="Escrit�rios";
$lang['date_created']="Data de Cria��o";
$lang['track_time']="Registo Hor�rio";
$lang['files']="Arquivos";
$lang['history']="Hist�rico";
$lang['transferred_to_'] = "Transferido para ";
$lang['please_take_over'] = "Por favor encarregue-se desta ocorr�ncia.";
$lang['ticket_reassigned'] = "Bilhete XXX re-atribu�do a si."; // DO NOT TRANSLATE XXX
$lang['_contact_changed_to'] = " Contato alterado para XXX."; // DO NOT TRANSLATE XXX
$lang['_priority_changed_to'] = " Prioridade alterada para XXX."; // DO NOT TRANSLATE XXX
$lang['_status_changed_to'] = " Estado alterado para XXX."; // DO NOT TRANSLATE XXX
$lang['email_sent'] = "E-mail Enviado";
$lang['ticket_history_log'] = "Hist�rico da Ocorr�ncia - Ocorr�ncia Nr.: ";
$lang['reverse'] = "Inverter";


$lang['my_tickets']="Minhas Ocorr�ncias";
$lang['contact_tickets']="Ocorr�ncias do Contato";
$lang['company_tickets']="Ocorr�ncias do Escrit�rio";
$lang['all_tickets']="Todas as Ocorr�ncias";
$lang['updated']="Atualizada";
$lang['text_ticket_search']="Insira um texto sobre a ocorr�ncia de que esteja � procura.";
$lang['keyword']="Palavra Chave";
$lang['number']="N�mero";
$lang['search']="Procurar";
$lang['created']="Criado";
$lang['text_search_results1']="Resultados da procura: ";
$lang['text_search_results2']="registros";

$lang['text_num_mins_worked']="Insira o tempo gasto - em minutos - que trabalhou para cada ocorr�ncia que quiser atualizar.";

///////////////////////////////////////////////////////////////////////////////////////
/** [Modules] *******************************************************/
$lang['new_module']="Novo M�dulo";
$lang['module']="m�dulo";
$lang['modules']="m�dulos";

$lang['new_version']="Nova Vers�o";
$lang['version']="vers�o";
$lang['versions']="vers�es";


///////////////////////////////////////////////////////////////////////////////////////
/** [Supporters] ****************************************************/
$lang['confirmation']="Confirma��o";
$lang['q_are_you_sure']="Tem certeza?";
$lang['text_warning_del_supporter']="Aten��o: Remover um t�cnico n�o � aconselh�vel.<br/>Se houver ocorr�ncias associadas com o t�cnico o estado delas pode ficar inconsistente.";

$lang['last_name']="�ltimo Nome";
$lang['ticket_statistics']="Estat�sticas das Ocorr�ncias";
$lang['supporter_id']="ID do T�cnico";
$lang['name']="Nome";
$lang['phone']="Telefone";
$lang['email']="E-mail";
$lang['groups']="Grupos";

$lang['supporters']="T�cnicos";

$lang['enter_supporter_info']="Insirir Informa��o do T�cnico";
$lang['administrator']="Administrador";
$lang['supporter']="T�cnico";
$lang['add_supporter']="Adicionar T�cnico";
$lang['add_to_groups']="Adicionar aos Grupos";


// [In common.php]
$lang['supporter_info']="Informa��o do T�cnico";
$lang['fax']="Fax";
$lang['type']="Tipo";
$lang['comments']="Coment�rios";
$lang['modified_by']="Modificado por";
$lang['last_modified']="�ltima Modifica��o";

//-----------------
$lang['edit_supporter_info']="Alterar Informa��o do T�cnico";
$lang['first_name']="Primeiro Nome";
$lang['password_again']="Repita a Senha";
$lang['email_address']="Endere�o de E-mail";
$lang['text_leave_blank']="deixar em branco se n�o mudar";


///////////////////////////////////////////////////////////////////////////////////////
/** [Error and Success Messages] ************************************/
$lang['err_missing_info']="Faltam informa��es... por favor volte, insira o que falta e tente outra vez.";
$lang['err_user_exists']="J� existe algu�m com esse nome de t�cnico!";
$lang['err_password_mismatch']="As senhas n�o s�o iguais.";
$lang['err_group_exists']="J� existe um grupo com esse nome!";
$lang['err_company_exists']="J� existe um escrit�rio com esse nome!";

$lang['msg_supporter_updated']="Informa��o do T�cnico atualizada com sucesso.";
$lang['msg_added_successfully']="adicionado com sucesso";
$lang['msg_updated_successfully']="atualizado com sucesso";
$lang['msg_created_successfully']="criado com sucesso";
$lang['msg_deleted_successfully']="removido com sucesso";


///////////////////////////////////////////////////////////////////////////////////////
/** [Statistics] ****************************************************/
$lang['ticket_time_sheets']="Registos Hor�rios";
$lang['time_sheet_for']="Registos Hor�rios para ";
$lang['my_time_sheet']="Meus Registos Hor�rios";

$lang['ticket_id']="ID da Ocorr�ncia";
$lang['title']="T�tulo";
$lang['status']="Estado";
$lang['hours_worked']="Horas Gastas";
$lang['minutes_worked']="Minutos Gastos";

$lang['ticket_statistics']="Estat�sticas das Ocorr�ncias";
$lang['ticket_statistics_for']="Estat�sticas das Ocorr�ncias para ";
$lang['case']="Case";
$lang['open']="Aberta";
$lang['closed']="Encerrada";
$lang['total']="Total";
$lang['priorities']="Prioridades";
$lang['categories']="Categorias";
$lang['last_updated']="�ltima Atualiza��o";

$lang['opened_during']="Abertos Durante";
$lang['closed_during']="Encerrados Durante";
$lang['ticket_pipeline']="Ocorr�ncias por Estado";
$lang['avg_ticket_lifetime_weeks']="Vida M�dia das Ocorr�ncias em Semanas";
$lang['less_1']="Menos de Uma";
$lang['1_2']="Uma a Duas";
$lang['2_3']="Duas a Tr�s";
$lang['3_4']="Tr�s a Quatro";
$lang['more_4']="Mais de Quatro";

////////////////////////////////////////////////////////////////////////////////
/** [Time Sheets] ****************************************************/
$lang['track_time_ticket_id'] = "Registo de Tempos - Ocorr�ncia Nr.: ";

////////////////////////////////////////////////////////////////////////////////
/** [Files] ****************************************************/
$lang['files_ticket_id'] = "Arquivos - Ocorr�ncia Nr.: ";
$lang['add_file'] = "Adicionar Arquivo";
$lang['ticket_detail'] = "Ocorr�ncia";
$lang['file'] = "Arquivo";
$lang['upload'] = "Carregar";
$lang['no_files'] = "N�o h� arquivos associados a esta Ocorr�ncia.";
$lang['posted_by'] = "Arquivado a XXX por YYY."; // DO NOT TRANSLATE XXX AND YYY


///////////////////////////////////////////////////////////////////////////////////////
/** [Groups] ********************************************************/
$lang['group_id']="Nr. do Grupo";
$lang['text_warning_del_group']="Aten��o: Remover um grupo n�o remove os t�cnicos que pertencem ao grupo.<br/>Mas n�o � aconselh�vel se houver bilhetes associados com os t�cnicos deste grupo.";

$lang['group_name']="Nome do Grupo";
$lang['edit_group_info']="Alterar Informa��o do Grupo";
$lang['choose_supporters']="Escolha de T�cnicos";

$lang['enter_group_info']="Insira Informa��o do Grupo";

// [In common.php]
$lang['group_info']="Informa��o do Grupo";


///////////////////////////////////////////////////////////////////////////////////////
/** [FAQs] **********************************************************/
$lang['faqs']="FAQs";
$lang['question']="Pergunta";
$lang['category']="Categoria";
$lang['new_category']="Nova Categoria";
$lang['compose_faq']="Compor FAQ";
$lang['answer']="Resposta";
$lang['add_faq']="Adicionar FAQ";
$lang['faq_detail']="Detalhe da FAQ";
$lang['faq_id']="ID da PMF";
$lang['edit_faq']="Alterar FAQ";
$lang['faq_search']="Procurar FAQ";
$lang['text_enter_keyword']="Insira uma palavra chave";


///////////////////////////////////////////////////////////////////////////////////////
/** [Control] *******************************************************/
$lang['control_panel']="Painel de Controle";
$lang['setting']="Par�metro";
$lang['value']="Valor";
$lang['helpdesk_name']="Nome do Helpdesk";
$lang['administrator_email']="E-mail do Administrador";
$lang['helpdesk_on-off']="Helpdesk Aberto/Fechado";
$lang['reason_helpdesk_off']="Se o helpdesk estiver fechado, por favor insira uma explica��o";
$lang['num_supporters_per_page']="N�mero de T�cnicos/Contatos por p�gina";
$lang['num_groups_per_page']="N�mero de Grupos/Escrit�rios por p�gina";
$lang['num_tickets_per_page']="N�mero de Ocorr�ncias por p�gina";
$lang['num_announcements_to_list']="N�mero de An�ncios vis�veis";
$lang['time_tracking_status']="Monitora��o dos Tempos";
$lang['products_options_status']="Utiliza��o dos Produtos";
$lang['smtp_status']="Uso de E-mail";
$lang['who_online_status']="Quem est� Online";
$lang['system_statistics']="Estat�sticas das Ocorr�ncias";
$lang['submit_changes']="Enviar Altera��es";
$lang['automatic_mail_notification']="Notifica��o Autom�tica por E-mail dos T�cnicos";


///////////////////////////////////////////////////////////////////////////////////////
/** [Contact] *******************************************************/
$lang['contact_id']="ID do Contato";
$lang['group']="Grupo";
$lang['client']="Contato";
$lang['contact']="Contato";
$lang['priority']="Prioridade";
$lang['platform']="Platforma";
$lang['description']="Descri��o";
$lang['version']="Vers�o";
$lang['product_id']="ID do Produto";
$lang['ticket_modules']="M�dulos";
$lang['email_contact']="E-mail do Contato";
$lang['time_spent']="Tempo Gasto";
$lang['text_minutes_spent']="minutos gastos na ocorr�ncia desde a �ltima atualiza��o";
//-- [Supporter] -----------------------------------------------------
$lang['contact_info']="Informa��o do Contato";
$lang['view_tickets']="Ver Ocorr�ncias";
$lang['edit_contact_info']="Alterar Informa��o do Contato";
$lang['msg_warning_del_contact']="Aten��o: Remover um contato n�o � aconselhavel.<br/>Se houver ocorr�ncias associadas a este contato eles podem ficar inconsistentes.";
//$lang['contact_search']="Procure Contacto";
$lang['text_contact_search']="Insira qualquer informa��o sobre um contato em particular que esteja a procurando.";
$lang['enter_contact_info']="Insira Informa��o do Contato";


///////////////////////////////////////////////////////////////////////////////////////
/** [Company] *******************************************************/
$lang['enter_company_info']="Insira Informa��o do Escrit�rio";
$lang['company_name']="Nome do Escrit�rio";
$lang['address']="Endere�o";
$lang['add_company']="Adicionar Escrit�rio";
$lang['company_id']="ID do Escrit�rio";
$lang['main_contact']="Contato Principal";
$lang['company_info']="Informa��o do Escrit�rio";
$lang['contacts']="Contatos";

////////////////////////////////////////////////////////////////////////////////
/** [Address Book] *******************************************************/
$lang['address_book'] = "Lista de Endere�os";
$lang['last_first_name'] = "�ltimo, Primeiro Nome";

////////////////////////////////////////////////////////////////////////////////
/** [Company Statistics] *******************************************************/
$lang[company_statistics] = "Estat�sticas por Empresas";
$lang[tickets] = "Bilhetes";
$lang[first_ticket] = "Primeiro Bilhete";
$lang[last_ticket] = "�ltimo Bilhete";

////////////////////////////////////////////////////////////////////////////////
/** [Installation] *******************************************************/
$lang['installation'] = "Instala��o";
$lang['step_one'] = "Primeiro Passo: Criar Tabelas";
$lang['step_one_text'] = "O sistema est� pronto para instalar o software de helpdesk. <br>Clique <b>NEXT</b> para criar as tabelas do banco de dados."; // DO NOT TRANSLATE NEXT
$lang['step_two'] = "Segundo Passo: Conta do Administrador";
$lang['company_comments'] = "Comment�rios do Escrit�rio";
$lang['required_field'] = "Campo Obrigat�rio";
$lang['press_back_button'] = "Por favor clique no bot�o Back do browser para corrigir o problema.";
$lang['step_three'] = "Terceiro Passo: Configurar";
$lang['step_three_text'] = "Voc� instalou o software de helpdesk e criou a conta do Administrador.<br>Agora deve fazer LOGIN e configurar as op��es das ocorr�ncias."; // DO NOT TRANSLATE LOGIN
$lang['install_error'] = "A informa��o XXX n�o est� presente ou � incorreta."; // DO NOT TRANSLATE XXX

//insert some data into the platforms table.
$lang['generic'] = "Gen�rico";
$lang['pc'] = "PC";
$lang['macintosh'] = "Macintosh";

//insert some data into the categories table.
$lang['big_problem'] = "Problema Grande";
$lang['small_problem'] = "Problema Pequeno";
$lang['other_problem'] = "Outro Problema";

//insert some data into the priorities table.
$lang['critical'] = "Cr�tica";
$lang['high'] = "Alta";
$lang['medium'] = "M�dia";
$lang['low'] = "Baixa";

//insert some data into the status table.
$lang['open'] = "Aberta";
$lang['in_progress'] = "Em Progresso";
$lang['waiting_for_response'] = "Esperando por resposta";
$lang['closed'] = "Encerrada";

//insert default contact for inactive contacts company
$lang['defaultcontact'] = "Este contato n�o pode ser alterado!";
//insert inactive contacts company
$lang['inactivecontacts'] = "Este escrit�rio n�o pode ser alterado!";
$lang['inactivecontactsaddress'] = "Este escrit�rio virtual serve como dep�sito de contatos que n�o est�o associados com nenhum escrit�rio.";
//insert welcome message in the announcements table
$lang['welcome'] = "Bem-vindo! Obrigado por ter instalado MyHelpdesk! Visite <a href=http://www.sourceforge.net/projects/myhelpdesk/>MyHelpdesk</a> no site da SourceForge se tiver alguma pergunta.";

?>