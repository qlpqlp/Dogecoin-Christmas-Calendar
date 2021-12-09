<?php
/**
*   File: Default Configuration of Dogecoin Calendar
*   Author: https://twitter.com/inevitable360 and all #Dogecoin friends and familly helped will try to find a way to put all names eheh!
*   Description: Real use case of the dogecoin.com CORE Wallet connected by RPC Calls using Old School PHP Coding with easy to learn steps (I hope lol)
*   License: Well, do what you want with this, be creative, you have the wheel, just reenvent and do it better! Do Only Good Everyday
*   By default only a Twitter user (Sending and Reciving the Dogecoin TIP) that has more then 69 Followers and Following more then 69 users and the account is at least 4 weeks, 6 days and 9 hours hold, can send the TIP, all the rest is restricted
*/
    // Add your Data Base credentials here!
    $dbhost = "localhost";  // put here you database adress
    $dbname = ""; // your DB name
    $dbuser = ""; // your DB username
    $dbpass = ""; // your DB password

    // Add your Dogecoin Core Node credentials here!
    $rpcuser = "";
    $rpcpassword = "";
    $dogecoinCoreProtocol = "http://";
    $dogecoinCoreServer = "";
    $dogecoinCoreServerPort = 22555;
    // DANGER |||| DANGER |||| DANGER |||| DANGER
    $UnlockDogecoinWalletPassword = ""; // only used to actually send $DOGE, if you have your Dogecoin Core Wallet Encrypted like you should have :)
    // DANGER |||| DANGER |||| DANGER |||| DANGER

    // Add your Twitter Dev credentials here! Apply for a Dev account here: https://dev.twitter.com/apps/
    $TwitterAccessToken = "";
    $TwitterAccessTokenSecret = "";
    $TwitterConsumerKey = "";
    $TwitterConsumerSecret = "";

    // What Word to find on Twitter to show the last post on Doge Nodes Map?
    $amountDoge = 1; // the amout of $Doge to offer on each CristmasWindows Open, wen validated
    $amountPresents = 10; // the amount of presents to give per day
    $TwitterSpecialTag = "DogePresent"; // the hashtag to activate the search of sending $Doge Tips

    // text to display after open the windows to click on it
    $click_text = "Such Present! Much Click";
    // Alternative text to display on mouse houver after open the windows to click on it
    $click_alt_text = "Merry Christmas, you just won 1 Doge! Click to add your Wallet Address";
?>