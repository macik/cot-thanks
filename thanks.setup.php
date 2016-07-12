<?php
/* ====================
[BEGIN_COT_EXT]
Code=thanks
Name=Thanks
Category=community-social
Description=Users can thank each other for pages, posts and comments
Version=1.5.2
Date=2016-06-30
Author=Trustmaster & Cotonti team
Copyright=All rights reserved (c) Vladimir Sibirov 2011-2016
Notes=BSD License
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=RW
Lock_members=12345
Requires_modules=users
Recommends_modules=page,forums
Recommends_plugins=comments
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
maxday=01:string::10:Max thanks a user can give a day
maxuser=02:string::5:Max thanks a day a user can give to a particular user
maxrowsperpage=03:string::20:Max thanks displayed per page
comorder=04:radio::0:Sort comments by thanks
short=05:radio::0: Short string - only user name, no date stamp
count_last_days=06:string::730:Show rating list based on last ## days
show_totals=07:radio::1:Adds total thanks data to rating
[END_COT_EXT_CONFIG]
==================== */

defined('COT_CODE') or die('Wrong URL');

