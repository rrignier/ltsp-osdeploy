<?php
# ################################ GPL STUFF ################################
#
# ********************************* ENGLISH *********************************
# 
# --- Copyright notice :
# 
# Copyright 2003, 2004, 2005 G�rard Milhaud - Fr�d�ric Bloise
# 
# 
# --- Statement of copying permission
# 
# This file is part of JeDDLaJ.
# 
# JeDDLaJ is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
# 
# JeDDLaJ is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License
# along with JeDDLaJ; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
# 
# *********** TRADUCTION FRAN�AISE PERSONNELLE SANS VALEUR L�GALE ***********
#
# --- Notice de Copyright :
# 
# Copyright 2003, 2004, 2005 G�rard Milhaud - Fr�d�ric Bloise
# 
# 
# --- D�claration de permission de copie
# 
# Ce fichier fait partie de JeDDLaJ.
# 
# JeDDLaJ est un logiciel libre : vous pouvez le redistribuer ou le modifier
# selon les termes de la Licence Publique G�n�rale GNU telle qu'elle est
# publi�e par la Free Software Foundation ; soit la version 2 de la Licence,
# soit (� votre choix) une quelconque version ult�rieure.
# 
# JeDDLaJ est distribu� dans l'espoir qu'il soit utile, mais SANS AUCUNE
# GARANTIE ; sans m�me la garantie implicite de COMMERCIALISATION ou 
# d'ADAPTATION DANS UN BUT PARTICULIER. Voir la Licence publique G�n�rale GNU
# pour plus de d�tails.
# 
# Vous devriez avoir re�u une copie de la Licence Publique G�n�rale GNU avec 
# JeDDLaJ ; si �a n'�tait pas le cas, �crivez � la Free Software Foundation,
# Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
# 
# ############################ END OF GPL STUFF #############################



function entete($auteur,$css,$title){
        print("<HTML><HEAD>\n");
	print("<META http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-15\">\n");
	print("<LINK REL=STYLESHEET TYPE=\"text/css\" HREF=$css TITLE=$css />\n");
	print("<!--[if IE]><LINK REL=\"shortcut icon\" TYPE=\"image/x-icon\" HREF=\"ICONES/favicon.ico\" /><![endif]-->\n");
	print("<LINK REL=\"icon\" TYPE=\"image/png\" HREF=\"ICONES/favicon.png\">\n");
	print("<TITLE>$title</TITLE>\n");
	print("<META NAME=\"Author\" CONTENT=$auteur>\n");
        print("</HEAD><BODY>\n");
}


function PiedPage(){
        print("</BODY>\n");
        print("</HTML>\n");
}

function EnteteFormulaire($method, $action)
{
	print("<FORM METHOD=$method ACTION=$action>\n");
}

function FinFormulaire()
{
	print("</FORM>\n");
}

function EnteteTable($extra)
{
	print("<TABLE $extra>\n");
}
function FinTable(){
	echo "</TABLE>\n";
}

?>
