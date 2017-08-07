<?php
define('LAN_MENTIONS_PREF_TAB_MAIN', 'Main');
define('LAN_MENTIONS_PREF_TAB_ATWHO', 'Suggestion Pop-up');
define('LAN_MENTIONS_PREF_LBL_ACTIVE', 'Enable/Disable');
define('LAN_MENTIONS_PREF_LBL_CONTEXTS', 'Parse \'mentions\' in these contexts:');
define('LAN_MENTIONS_PREF_LBL_GLOBAL_LIBS', 'Use global path for JS libraries:');
define('LAN_MENTIONS_PREF_LBL_ATWHO_MINCHARS', '<p>Min. number of characters to input after <kbd>@</kbd> to show suggestion popup-list.</p><kbd>Range: 0 - 20, Recommended: 2</kbd>');
define('LAN_MENTIONS_PREF_LBL_ATWHO_MAXCHARS', '<p>Max number of char. after <kbd>@</kbd> that would be matched to populate suggestion</p>  <kbd>Upto: 20</kbd>');
define('LAN_MENTIONS_PREF_LBL_ATWHO_LIMIT', '<p>Number of username entries to show in popup-list</p><kbd>Recommended: 5</kbd>');
define('LAN_MENTIONS_PREF_LBL_ATWHO_HIGHLIGHT', 'Highlight first entry in popup-list:');
define('LAN_MENTIONS_PREF_LBL_CHATBOX_EMAIL', 'Email notification for chatbox mentions');
define('LAN_MENTIONS_PREF_LBL_COMMENT_EMAIL', 'Email notification for comment mentions');
define('LAN_MENTIONS_PREF_LBL_FORUMTOPIC_EMAIL', 'Email notification for forum new topic mentions');
define('LAN_MENTIONS_PREF_LBL_FORUMREPLY_EMAIL', 'Email notification for forum reply mentions');
define('LAN_MENTIONS_PREF_LBL_EMAIL_SUBJECT', 'Email subject-line text:');

define('LAN_MENTIONS_PREF_LBL_HINT_ACTIVATION', 'Turn On/Off Mentions Globally');
define('LAN_MENTIONS_PREF_LBL_HINT_CONTEXT', 'In what text-parse/output-filter context mentions is called.');
define('LAN_MENTIONS_PREF_LBL_HINT_GLOBAL_LIBS', 'Turn this on if you wish to share Caret.js and At.js libraries with other e107 plugins and/or theme.');
define('LAN_MENTIONS_PREF_LBL_HINT_ATWHO_MINCHAR', 'Minimum number of characters required to input after `@` sign to show suggestion popup-list (0 - 20):');
define('LAN_MENTIONS_PREF_LBL_HINT_ATWHO_MAXCHAR', 'Max number of characters after `@` that would be matched to populate suggestion.');
define('LAN_MENTIONS_PREF_LBL_HINT_ATWHO_LIMIT', 'Number of username entries to show in suggestion popup-list');
define('LAN_MENTIONS_PREF_LBL_HINT_ATWHO_HIGHLIGHT', 'Toggle highlight on/off for the first entry in popup-list.');
define('LAN_MENTIONS_PREF_LBL_HINT_CHATBOX_EMAIL', 'Turn on email notification for chatbox mentions.');
define('LAN_MENTIONS_PREF_LBL_HINT_COMMENT_EMAIL', 'Turn on email notification for comment mentions.');
define('LAN_MENTIONS_PREF_LBL_HINT_FORUMTOPIC_EMAIL', 'Turn on email notification for new forum topic mentions.');
define('LAN_MENTIONS_PREF_LBL_HINT_FORUMREPLY_EMAIL', 'Turn on email notification for forum reply mentions.');
define('LAN_MENTIONS_PREF_LBL_HINT_EMAIL_SUBJECT', 'You can use the text macro <kbd>{MENTIONER}</kbd> in subject-line text, and it will be substituted with actual mentioner\'s username in the email subject field.');


define('LAN_MENTIONS_PREF_VAL_CONTEXT_01', 'Forum + Chatbox');
define('LAN_MENTIONS_PREF_VAL_CONTEXT_02', 'Forum + Chatbox + Comments');
define('LAN_MENTIONS_PREF_VAL_CONTEXT_03', 'Forum + Chatbox + Comments + News');


define('LAN_MENTIONS_INFO_MENU_TITLE', 'Project Info');

define('LAN_MENTIONS_INFO_MENU_LOGO', '<div style="text-align: center"><img src="http://www.e107.space/projects/mentions/svg" alt="Mentions" width="128" height="128"></div>');
define('LAN_MENTIONS_INFO_MENU_SUBTITLE', '<br><h5>Project repo on GitHub:</h5>');
define('LAN_MENTIONS_INFO_MENU_SUBTITLE_DEV', '<h5>Developer:</h5>');
define('LAN_MENTIONS_INFO_MENU_DEV', '<p><small>Arun S. Sekher</small></p>');
define('LAN_MENTIONS_INFO_MENU_GITHUB_BUTTONS_SCRIPT', '<script async defer src="https://buttons.github.io/buttons.js"></script>');
define('LAN_MENTIONS_INFO_MENU_REPO_BUTTON_FOLLOW', '<a class="github-button" href="https://github.com/arunshekher" aria-label="Follow @arunshekher on GitHub">Follow</a>');
define('LAN_MENTIONS_INFO_MENU_REPO_URL', '<p><kbd style="word-wrap: break-word"><a href="http://github.com/arunshekher/mentions" target="_blank">http://github.com/arunshekher/mentions</a></kbd></p>');
define('LAN_MENTIONS_INFO_MENU_REPO_BUTTON_WATCH', '<a class="github-button" href="https://github.com/arunshekher/mentions/subscription" data-icon="octicon-eye" aria-label="Watch arunshekher/mentions on GitHub">Watch</a>');
define('LAN_MENTIONS_INFO_MENU_REPO_BUTTON_STAR', ' <a class="github-button" href="https://github.com/arunshekher/mentions" data-icon="octicon-star" aria-label="Star arunshekher/mentions on GitHub">Star</a>');
define('LAN_MENTIONS_INFO_MENU_REPO_BUTTON_ISSUE', ' <a class="github-button" href="https://github.com/arunshekher/mentions/issues" data-icon="octicon-issue-opened" aria-label="Issue arunshekher/mentions on GitHub">Issue</a>');

define('LAN_MENTIONS_FORK_RIBBON', '<a href="https://github.com/you"><img style="position: static; top: 0; left: 0; border: 0; float: left;" src="https://camo.githubusercontent.com/82b228a3648bf44fc1163ef44c62fcc60081495e/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_red_aa0000.png"></a>');
