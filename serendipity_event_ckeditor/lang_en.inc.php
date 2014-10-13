<?php

/**
 *  @file lang_en.inc.php 1.4.10 2014-10-11 Ian
 *  @version 1.4.10
 *  @author Translator Name <yourmail@example.com>
 *  EN-Revision: Revision of lang_en.inc.php
 */

@define('PLUGIN_EVENT_CKEDITOR_NAME', 'CKEditor');
@define('PLUGIN_EVENT_CKEDITOR_DESC', 'Uses CKEditor as the default WYSIWYG editor. For any JS-Editor usage: Recommended! After installation, go to the configuration screen of this plugin for further instructions.');
@define('PLUGIN_EVENT_CKEDITOR_REVISION_TITLE', '<h3>This Plugin includes:</h3>');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL', '<h2>Installation</h2>
<div class="msg_notice">
    <p><span class="icon-attention"></span> <strong>Dependencies:</strong> Disable global body, extended and nugget parsing in the <strong>NL2BR</strong> plugin, <strong>OR</strong> by entry with entryproperties plugin event <strong>and/or</strong> for staticpages by entry "Perform Markup Transformations" option!</p>
</div>
<ol style="line-height: 1.6">
    <li>To allow other plugins to use or hook into the editor, place this (CKEditor) plugin near the end of your plugin list.</li>
    <li>Make sure to enable WYSIWYG mode in your personal preferences.</li>
</ol>
<div class="cke_config_block msg_dialogue">
    <h3>Manually extending with CKEDITOR Plugins</h3>
    <ol style="line-height: 1.6">
        <li>Define manually added Plugins (analog to <em>{ name: \'mediaembed\' },</em>) to the <em>CKEDITOR.config.toolbarGroups = [...]</em> definition, in the cke_config.js.</li>
        <li>Add (append) the plugin name (analog to mediaembed) to <em>var extraPluginList = \'...\'</em> definition, in the cke_plugin.js.</li>
    </ol>

    <h3>Upgrading</h3>
    <p>This Plugin will provide Updates via Spartacus close to new CKEDITOR releases.</p>
    <p>It is not advised to use or install any customized CKEDITOR releases, since this will lead to undesirable side effects with this Plugins configuration.</p>
</div>');
@define('PLUGIN_EVENT_CKEDITOR_CONFIG', '');
@define('PLUGIN_EVENT_CKEDITOR_INSTALL_PLUGPATH', 'HTTP path to s9y plugins directory');
@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION', 'Disable Advanced-Content-Filter (ACF)?');
@define('PLUGIN_EVENT_CKEDITOR_TOOLBAR_OPTION', 'Use default 2-liner toolbar-group linebreak?');

@define('PLUGIN_EVENT_CKEDITOR_CODEBUTTON_OPTION', 'Allow code toolbar button?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION', 'Allow additional prettify css/js in frontend?');
@define('PLUGIN_EVENT_CKEDITOR_PRETTIFY_OPTION_BLAHBLAH', 'For upgraders only! Keeps backward compatibility for old entries with code.');
@define('PLUGIN_EVENT_CKEDITOR_OPTION_BLAHBLAH', 'Usually: ');

@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION', 'Force install process (in emergencies)');
@define('PLUGIN_EVENT_CKEDITOR_FORCEINSTALL_OPTION_BLAHBLAH', 'Only on upgrade failures: Force the immediate zip deflation of ');

@define('PLUGIN_EVENT_CKEDITOR_CKEACF_OPTION_BLAHBLAH', 'The CKEDITOR built-in "Housekeeper" filter restricts custom html markup to follow its rules! Normally this is good and you will want to keep it working in the backyard and use the already built-in workarounds for certain markup, like "iframe"d media via the "Embed Media"-button, or "audio" and "other Serendipity" tags via the "Sourcecode-view"-mode. Please also read: "http://docs.ckeditor.com/?_escaped_fragment_=/guide/dev_advanced_content_filter#!/guide/dev_advanced_content_filter".');

@define('PLUGIN_EVENT_CKEDITOR_SETTOOLBAR_OPTION', 'Choose preset toolbars');

