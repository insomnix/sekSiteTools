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

$tplJs = $modx->getOption('tplJs',$scriptProperties,'google.analytics');
$accountNumber = $modx->getOption('accountNumber',$scriptProperties,'');
$domainName = $modx->getOption('domainName',$scriptProperties,'');

$js_template = $seksitetools->getChunk($tplJs, array(
    'accountNumber' => $accountNumber,
    'domainName' => $domainName
));
$modx->regClientScript($js_template);

return '';