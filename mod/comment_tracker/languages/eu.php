<?php
/**
 * comment_tracker language extender
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version 1.0
 * @author Akhilesh @ Cubet Technologies
 */

    $euskera = array(
        'comments' => 'Iruzkinak',
        'comment:notification:settings' => 'Iruzkinen abisuak',
        'comment:notification:settings:description' => 'Esan noiz iruzkinak argitaratzen diren zuk harpidetu dituzun gaietan.',
        'comment:notification:settings:how' => 'Aukera ezazu zure komunikazio-era',
        'comment:notification:settings:linktext' => 'Ikus itzazu harpidetu egin dituzun gai guztiak',
        'comment:subscriptions' => 'Harpidetzak',
        'comment:subscriptions:none' => 'Ez dago jarduneko harpidetzarik',
        'comment:subscribe:tooltip' => 'Harpidetu jakinarazpenak jasotzeko gai honi buruzko iruzkinak eginez gero',
        'allow:comment:notification' => 'Jakinarazpenak aktibatu nahi al dituzu? ',
        'email:content:type' => 'Jaso nahi al duzu emailak HTML formatuan? ',
        'text:email' => 'Ez',
        'html:email' => 'Bai',
        'comment:subscribe' => 'Harpidetu',
        'comment:unsubscribe' => 'Harpidetza indargabetu',
        'comment:subscribe:long' => 'Harpidetu jakinarazpenak egiteko',
        'comment:unsubscribe:long' => 'Indargabetu jakinarazpenak egiteko',
        'comment_tracker:setting:autosubscribe' => 'Auto-harpidetza nik iruzkindu dudan edukira?',
        'show:subscribers' => 'Erakutsi harpidedunak',
        'comment:subscribe:success' => 'Eduki edota gai honetara arrakastatsu harpidetu egin duzu.',
        'comment:subscribe:failed' => 'Barkatu! Ezin duzu eduki edota gai honetara harpidetu.',
        'comment:subscribe:entity:not:access' => 'Barkatu! Ezin dugu aurkitu edukia edota gaia arrazoiren batengatik.',
        'comment:unsubscribe:success' => 'Eduki edota gai honetatik arrakastatsu indargabetu egin duzu.',
        'comment:unsubscribe:failed' => 'Barkatu! Ezin duzu eduki edota gai honetatik indargabetu.',
        'comment:unsubscribe:not:valid:url' => 'Barkatu! Hau ez da baliozko URLa eduki edota gai honetatik indargabetzeko.',
        'comment:unsubscribe:entity:not:access' => 'Barkatu! Ezin dugu edukia edota gaia aurkitu.',
        'comment_tracker:setting:show_button' => 'Erakutsi harpidetu/indargabetu botoia iruzkinen gainetik?',
        'comment_tracker:item' => 'item',
        
        'comment:notify:subject:groupforumtopic' => '%s eztabaidari erantsirik %s taldean %s',
        'comment:notify:subject:comment' => '%s iruzkindurik  %s "%s"',
        'comment:notify:subject:comment:group' => '%s iruzkindurik %s "%s" taldean %s',
        
        
        /* Legacy stuff - @TODO - see what's safe to delete */
        'comment:notify:subject' => 'Iruzkin berri bat badago %s',
        'comment:notify:group:subject' => 'Iruzkin berri bat badago eztabaidan %s',
        'comment:notify:body:web' => 'Kaixo %s,
<br/>Iruzkin berri bat badago %s
<br/>%s idatzi zuen: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.<br/>
Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s<br/>
</font>
        ',
            'comment:notify:group:body:web' => 'Kaixo %s,
<br/>Iruzkin berri bat badago eztabaidan %s
<br/>%s idatzi zuen: %s
<br/>%s
<br/>
<font color="#888888" size="2">
Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.<br/>
Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s<br/>
</font>
        ',
        'comment:notify:body:email:text' => 'Hi %s,

Iruzkin berri bat badago %s

%s idatzi zuen: %s

%s

Goraintziak,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Adi egon, zure edukia edota gaia ikusi baino lehen sisteman sar zenezake.

Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.

Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s
</font>
        ',
            'comment:notify:group:body:email:text' => 'Kaixo %s,

Iruzkin berri bat badago eztabaidan %s

%s idatzi zuen: %s

%s

Goraintziak,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Adi egon, zure edukia edota gaia ikusi baino lehen sisteman sar zenezake.

Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.

Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s
</font>
        ',
    
    'comment:notify:body:email:html' => '
<div>
    <div>Kaixo %s,</div>
    <div>Iruzkin berri bat badago %s</div>
    <div>%s idatzi zuen: %s</div>
    <div>%s</div>
    <div>&nbsp;</div>
    <div>Goraintziak,</div></div>
    <div>%s</div>
    <div>&nbsp;</div>
    <div style="border-top:1px solid #CCCCCC;color:#888888;">
        <div>Adi egon, zure edukia edota gaia ikusi baino lehen sisteman sar zenezake.</div>
        <div>Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.</div>
        <div>Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s</div>
    </div>
</div>
        ',
            'comment:notify:group:body:email:html' => '
<div>
    <div>Kaixo %s,</div>
    <div>Iruzkin berri bat badago eztabaidan %s</div>
    <div>%s idatzi zuen: %s</div>
    <div>%s</div>
    <div>&nbsp;</div>
    <div>Goraintziak,</div>
    <div>%s</div>
    <div style="border-top:1px solid #CCCCCC;color:#888888;">
        <div>Adi egon, zure edukia edota gaia ikusi baino lehen sisteman sar zenezake.</div>
        <div>Jakinarazpen hau jaso egin duzu eduki edota gai honetara harpideturik edo tartean sarturik zaudelako.</div>
        <div>Zure jakinarazpenen lehentasunak aldatzeko, mesedez klikatu hemen: %s</div>
    </div>
</div>
        ',
    );
                    
add_translation("eu",$euskera);
