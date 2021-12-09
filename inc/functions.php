<?php
/**
*   File: functions
*   Author: https://twitter.com/inevitable360 and all #Dogecoin friends and familly helped will try to find a way to put all names eheh!
*   Description: Real use case of the dogecoin.com CORE Wallet connected by RPC Calls using Old School PHP Coding with easy to learn steps (I hope lol)
*   License: Well, do what you want with this, be creative, you have the wheel, just reenvent and do it better! Do Only Good Everyday
*/

    // we only allow to run on December
    if (date("m") != 12){ exit(); };

    // because we load an ajax event we have to set up a path to inc
    $inc = "inc/";

    // if the Cristmas Calendar is Open and clicked we generate the Wallet we load the config file
      if (isset($_POST["christmas"])){
        //ini_set('display_errors', 1);
        // Now we include the basic configurations for Doge Nodes Map
        include("config.php");
        $inc = "";
      };

    // we get the current day and month to enable only the calendar windows current day
    $day = date("j");
    $month = date("m");

    // Include the Dogecoin Core Bridge
    include($inc.'vendors/jsonRPCClient.php');
    $DogePHPbridgeCommand = new jsonRPCClient($dogecoinCoreProtocol.$rpcuser.':'.$rpcpassword.'@'.$dogecoinCoreServer.':'.$dogecoinCoreServerPort);

    // Include the Twitter API Framework
    require_once($inc.'vendors/TwitterAPIExchange.php');

    // we include the QR Code generator lib
    include($inc.'vendors/phpqrcode/qrlib.php');

    // Add the PDO DB Connection
    $db = 'mysql:host='.$dbhost.';dbname='.$dbname;
    $opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false, ];
    try {
      $pdo = new PDO($db, $dbuser, $dbpass, $opt);
      }
    catch (PDOException $e) {
      echo '<br>DB Error: ' . $e->getMessage() . '<br><br>'; echo '<br>This page will auto refresh in 5 seconds to check if the issue is resolved!'; header("Refresh:5"); exit();
     };

    // if cron is runnin, we search Twitter and send Tips
    If (isset($cron)){

        // Whe check if the TIP was alredy send to this tweet, to not doble send $Doge
        $db = $pdo->query("SELECT * FROM chirstmas where validated = 0");

        while ($row = $db->fetch()) {
        // we reset the amount to make sure it will give to everyone that publich the Tweet validating code
        $amount = $amountDoge;

        $present_id = $row["id"];
        $wallet = $row["wallet"];
        $TwitterSpecialTag = $row["unic"];

        // we set the twitter API credentials from config.php
        $TwitterSettings = array(
            'oauth_access_token' => $TwitterAccessToken,
            'oauth_access_token_secret' => $TwitterAccessTokenSecret,
            'consumer_key' => $TwitterConsumerKey,
            'consumer_secret' => $TwitterConsumerSecret
        );
        $twitter = new TwitterAPIExchange($TwitterSettings);

        // now we send the request to get the all Tweets with the correct #hastag $TwitterSpecialTag
        $tweet = json_decode($twitter->setGetfield('query='.$TwitterSpecialTag.'&max_results=100&expansions=author_id&tweet.fields=created_at,referenced_tweets&place.fields=name&user.fields=username')->buildOauth('https://api.twitter.com/2/tweets/search/recent', 'GET')->performRequest());

        // we get the total of tweets and users found
        $total = count($tweet->data);
        $totalusers = count($tweet->includes->users);

        // we go tru all tweets to find new users to validate Dogecoin Christmas Presents
        for ($i = 0; $i < $total; $i++ ) {

            // we check if the user has an account with more than 30 days and if it follows more then 100 users and is followed by at leat 100 users, because of fake accounts and abusers
                $tweetUser = json_decode($twitter->setGetfield('user.fields=created_at,public_metrics')->buildOauth('https://api.twitter.com/2/users/'.$tweet->data[$i]->author_id, 'GET')->performRequest());

                if (time() > strtotime($tweetUser->data->created_at . ' +30 day') and $tweetUser->data->public_metrics->followers_count > 69 and $tweetUser->data->public_metrics->following_count > 69){

                    // We only allow Tips on New Tweets and Replies!
                    $type = "tweet";
                    if (isset($tweet->data[$i]->referenced_tweets[0]->type)){
                        $type = $tweet->data[$i]->referenced_tweets[0]->type;
                    };

                    // Whe check if the user alredy recived a Dogecoin Calendar Present
                    $dbu = $pdo->query("SELECT * FROM chirstmas where twitter_user_id = '".$tweet->data[$i]->author_id."' limit 1");
                    if ($dbu->fetch()){
                        $amount = 0;
                    };

                    // if type retweet, we dont validate and dont send 1 Doge
                    if ($type == "retweeted"){ $amount = 0; };

                        // We make sure there is a twitter ID
                        if (isset($tweet->data[$i]->id)){
                            // We only allow sending $Doge if its only 1 $Doge
                            if ($amount > 0){
                                $username = "";
                                // we go tru all ~user tweets to find the correct username
                                for ($iusers = 0; $iusers < $totalusers; $iusers++ ) {
                                    if ($tweet->includes->users[$iusers]->id == $tweet->data[$i]->author_id){
                                        $username = $tweet->includes->users[$iusers]->username;
                                    };
                                };
                                /*** HERE IT IS THE SIMPLICITY OF DOGECOIN CORE COMMANDS ***/
                                // Need to unlock wallet before any transactions
                                $DogePHPbridgeCommand->walletpassphrase($UnlockDogecoinWalletPassword, 60);

                                // Now we send the command to send $Doge to the Shib
                                $transaction_id = $DogePHPbridgeCommand->sendtoaddress($wallet, $amount, "TwitterID:".$tweet->data[$i]->id, $username." From: ".date('Y')." Calendar");
                                /*** END OF THE SIMPLICITY OF DOGECOIN CORE COMMANDS ***/
                                if (isset($transaction_id)){
                                  // we update the wallet to validated to make user that was alredy sent 1 Doge
                                  $pdo->query("UPDATE chirstmas SET
                                  transaction_id = '".$transaction_id."',
                                  twitter_id = '".$tweet->data[$i]->id."',
                                  twitter_user_id = '".$tweet->data[$i]->author_id."',
                                  twitter_user = '".$username."',
                                  validated = '1',
                                  date = '".date('Y-m-d H:i:s')."'
                                  WHERE id = '".$present_id."' limit 1");
                                };



                        };
                    };
                };
        };

};

    }else{

      // we try to get the user IP address just to make sure there is no abuse usage
      function getIPAddress() {

         //whether ip is from the share internet
          if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
              $ip = $_SERVER['HTTP_CLIENT_IP'];
          }
          //whether ip is from the proxy
          elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
           }
          //whether ip is from the remote address
          else{
              $ip = $_SERVER['REMOTE_ADDR'];
          }
           return $ip;
      };

      // if the Cristmas Calendar is Open and clicked we generate the Wallet and send the Private Key
      if (isset($_POST["christmas"])){

          // make sure no one tries to send an invalid command on IP Post :)
             if (filter_var($_POST["ip"], FILTER_VALIDATE_IP)) {
                $ip = $_POST["ip"];
             };

                    // Whe check if the user alredy recived a Dogecoin Calendar Present
                    $dbu = $pdo->query("SELECT * FROM chirstmas where ip = '".$ip."' limit 1");
                    if ($dbu->fetch()){

// the message to display on the Calender, wen oppening
$message = "
Sorry litle Shib, you alredy asked for your Christmas Dogecoin Present! Try again next Christmas.
<br><br>
<br>
Do Only Good Everyday!";

echo $message;
exit();


                    };


            // Whe check how much presents was alredy sent today
            $dbu = $pdo->query("SELECT * FROM chirstmas where date > '".date('Y-m-d 00:00:00')."' and date < '".date('Y-m-d H:i:s')."'");
            $totalPresents = count($dbu->fetchAll());

          // if total presents sent is less ten total presents you can send per day, then we generate the wallet
          if ($totalPresents < $amountPresents){
             /*** HERE IT IS THE SIMPLICITY OF DOGECOIN CORE COMMANDS ***/
             // Need to unlock wallet before generate a wallet and get private keys
             $DogePHPbridgeCommand->walletpassphrase($UnlockDogecoinWalletPassword, 60);

              // we generate a new Dogecoin Address
              $wallet = $DogePHPbridgeCommand->getnewaddress("Calendar->".time());

              // we get the Private Key from the generated Wallet
              $privatekey = $DogePHPbridgeCommand->dumpprivkey($wallet);

              // unic id for Twitter Present Validation
              $unicp = uniqid();

              // unic ID for Private Key QR image name
              $unic = uniqid();

              // search Twitter for this unic Hash, to validate the 1 Doge send
              $TwitterSpecialTag = $TwitterSpecialTag.$unicp;

              // the path to save the temporary PrivateKey QR Codeimage
              $path = 'qr/';
              // the path + image name to save
              $file = $path."DogecoinPrivateKey".$unic.".png";
              // the size of the QR code
              $ecc = 'L';
              // the pixels size of the QR Code image
              $pixel_Size = 5;
              // the frame size of the QR Code image
              $frame_size = 5;
              // We generate the QR code qith the Private Key and save as an image to send
              QRcode::png($privatekey, $file, $ecc, $pixel_Size, $frame_size);

              $db = $pdo->query("INSERT INTO `chirstmas` (
              `ip`,
              `unic`,
              `wallet`,
              `date`
              ) VALUES (
              '$ip',
              '$TwitterSpecialTag',
              '$wallet',
              '".date('Y-m-d H:i:s')."'
              );");

          }else{
// the message to display on the Calender, wen oppening
$message = "
Sorry litle Shib, the 10 presents where alredy gived for today try again tomorow.
<br><br>
<br>
Do Only Good Everyday!";

echo $message;
exit();
          };

// the message to display on the Calender, wen oppening
$message = "
This is an unic Christmas Present, Much Original, Such Private.
<br>
Its for your kids present/future or your love ones that never use Dogecoin.
<br>
Print the Private key or QR Code, put in an envelope and go hide on your Christmas Tree.
<br><br>
1- Your new Dogecoin Address: ".$wallet."
<br>Scan the QR code below or click on it to save the image, it contains the private key. If you loose you cant recive the 1 Doge present on that Address.
<br><br>
<p style='text-align: center'><a download='DogecoinPrivateKey".$unic.".png' href='inc/".$file."' target='_blank'><img src='inc/".$file."'></a></p>
<br><br>
2- <a class='btn btn-primary' href='https://twitter.com/intent/tweet?hashtags=MerryChristmas%20to%20all,Dogecoin%20familly,".$TwitterSpecialTag."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i> Click here to send a Tweet to validate.</a>
Only after you tweet, the Address can recive the 1 Doge. Only Twitter accounts with more then 69 followers/following and more then 4 weeks old, can recive the 1 Doge on the Address to present Spam and Abuse usage.
<br>
<br>
3- If its all ok, you will recive 1 Doge on your address after a few minuts of posting on Twitter on step 2, then just import the QR Code containing the private key to a <a class='btn btn-warning' href='https://dogecoin.com/#wallets' target='_blank'>Dogecoin wallet</a>.";

echo $message;

      }
    };
?>