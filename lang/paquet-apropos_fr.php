<?php

// Ceci est un fichier langue de SPIP -- This is a SPIP language file
// 
///  Fichier produit par PlugOnet
// Module: paquet-apropos
// Langue: fr
// Date: 17-10-2011 12:32:15
// Items: 2

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

// A
	'apropos_description' => 'Liste les plugins actifs et affiche une description sommaire de ceux-ci.

    

    Il sert &agrave; afficher sur une page de type &laquo;&nbsp;&agrave; propos du site&nbsp;&raquo; un r&eacute;capitulatif des plugins actifs, y compris l\'icone de ceux-ci.

    <br />

	Vous pouvez utiliser la nouvelle balise #APROPOS dans vos squelettes. Cette balise a diff&eacute;rents param&egrave;tres : <br />

	<code>#APROPOS{liste}</code> pour retourner la liste des plugins, <br />

	<code>#APROPOS{nombre}</code> pour n\'afficher que le nombre de plugins ET de plugins verrouill&eacute;s actifs.<br />

	<code>#APROPOS{plugins}</code> pour n\'afficher que le nombre de plugins actifs.<br />

	<code>#APROPOS{extensions}</code> pour n\'afficher que le nombre de plugins verrouill&eacute;s actifs.<br />

	<code>#APROPOS{adisposition}</code> pour afficher le nombre de plugins dans le dossier plugins.<br />

	<code>#APROPOS{disponible}</code> pour afficher le nombre total de plugins verrouill&eacute;s et de plugins de votre configuration.<br />

	Pour personnaliser ce qui est affich&eacute; avant et apr&egrave;s la liste des plugins actifs, modifiez le fichier modeles/apropos_liste.html que vous aurez pr&eacute;alablement copi&eacute; dans le dossier squelettes/modeles.

	<br />
Dans un article, &eacute;crivez :<br>

	<code><apropos|liste></code> pour afficher la liste des plugins et plugins verrouill&eacute;s actifs ;<br />

	<code><apropos|nombre></code> pour n\'afficher que le nombre de plugins ET de plugins verrouill&eacute;s actifs ;<br />

	<code><apropos|plugins></code> pour n\'afficher que le nombre de plugins actifs ;<br />

	<code><apropos|extensions></code> pour n\'afficher que le nombre de plugins verrouill&eacute;s actifs ; <br />
	
	<code><apropos|adisposition></code> pour n\'afficher que le nombre de plugins dans le dossier plugins ;<br />
	
	<code><apropos|disponible></code> pour n\'afficher que le nombre total de plugins verrouill&eacute;s et de plugins de votre configuration.<br />

	<code><apropos|prefixe=le prefixe du plugin></code> si vous souhaitez afficher la description compl&egrave;te d\'un plugin sp&eacute;cifique, &eacute;crivez <code><apropos|prefixe=le prefixe du plugin></code>. Ainsi, par exemple, pour afficher dans un article la description compl&egrave;te de ce plugin, utilisez <code><apropos|prefixe=apropos></code>.<hr />',
	'apropos_slogan' => 'Liste les plugins actifs et affiche une description sommaire de ceux-ci',
);
?>