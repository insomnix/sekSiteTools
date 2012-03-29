<?php
/**
 * Site Tools
 *
 * Copyright 2012 by Stephen Smith <ssmith@seknetsolutions.com>
 *
 * sekSiteTools is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * sekSiteTools is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * sekSiteTools; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package seksitetools
 */

$seksitetools = $modx->getService('seksitetools','sekSiteTools',$modx->getOption('seksitetools.core_path',null,$modx->getOption('core_path').'components/seksitetools/').'model/seksitetools/',$scriptProperties);
if (!($seksitetools instanceof sekSiteTools)) return '';

$cssUrl = $seksitetools->config['cssUrl'].'web/';

$tplPrintDiv = $modx->getOption('tplPrintDiv',$scriptProperties,'printdiv');
$divID = $modx->getOption('divID',$scriptProperties,'');
$linkText = $modx->getOption('linkText',$scriptProperties,'');
$tplJs = $modx->getOption('tplJs',$scriptProperties,'printdiv.js');
$width = $modx->getOption('width',$scriptProperties,'100');
$height = $modx->getOption('height',$scriptProperties,'100');
$cssFile = $modx->getOption('cssFile',$scriptProperties,$cssUrl.'printdiv.css');

$modx->regClientCSS($cssFile);
$js_template = $seksitetools->getChunk($tplJs, array(
    'width' => $width,
    'height' => $height,
    'cssFile' => $cssFile
));
$modx->regClientScript($js_template);

$link_template =  $seksitetools->getChunk($tplPrintDiv, array(
    'divID' => $divID,
    'linkText' => $linkText
));
return $link_template;