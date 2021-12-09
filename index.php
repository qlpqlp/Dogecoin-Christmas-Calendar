<?php
/**
*   File: Index file of Dogecoin Christmas Calendar
*   Author: https://twitter.com/inevitable360 and all #Dogecoin friends and familly helped will try to find a way to put all names eheh!
*   Description: Real use case of the dogecoin.com CORE Wallet connected by RPC Calls using Old School PHP Coding with easy to learn steps (I hope lol)
*   License: Well, do what you want with this, be creative, you have the wheel, just reenvent and do it better! Do Only Good Everyday
*/
    // Now we include the basic configurations for Dogecoin Christmas Calendar
    include("inc/config.php");
    // Now we include the basic functions for Dogecoin Christmas Calendar
    include("inc/functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dogecoin Christmas Calendar</title>
  <meta name="author" content="All Dogecoin Community!">
  <meta name="generator" content="You!">
  <link href="favicon.ico" rel="icon" />
  <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
</head>
<body onclick="document.getElementById('dogecoin-jingle-bells-audio').play();">
<?php include("inc/menu.php"); ?>  
<div style="overflow: hidden; position: fixed; width: 100%; height: 100%">
  <div class="bg"></div>
  <div class="moon" style="text-align: center; padding-top: 10%"><span style="font-size: 60px; color: rgba(255, 255, 255, 1)"><?php if ($month == 12){?>Merry Christmas<br>Dogecoin Shibs <div style=" font-size: 30px">Click on the moon! Turn sound on!</div><?php }else{ ?>Hello Dogecoin Shibs! I'm buisy making presents for next Christmas, come back on December!<?php };?></span></div>
  <div class="starlink"></div>
  <div class="mars"></div>
  <div class="starship"></div>
  <div class="dogechristmas"></div>
</div>
<?php
if ($month == 12){
?>
              <audio id="dogecoin-jingle-bells-audio">
                <source src="sound/dogecoin_jingles.mp3" type="audio/mpeg"/>
              </audio>
  <div class="calendar-grid">
    <div class="day day-1">
      <label>
        <?php if ($day == 1){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">1</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 1){ ?>style="opacity: 1"<?php }; ?>>
          <div class="gingerbread-man-container">
            <div class="gingerbread-man">
              <div class="head">
                <div class="eyebrow eyebrow--left"></div>
                <div class="eyebrow eyebrow--right"></div>
                <div class="eye eye--left"></div>
                <div class="eye eye--right"></div>
                <div class="mouth">
                  <div class="mouth__lower-lip"></div>
                  <div class="mouth__left-lip"></div>
                  <div class="mouth__right-lip"></div>
                  <div class="mouth__upper-lip"></div>
                </div>
              </div>
              <div class="body">
                <div class="arm arm--left"></div>
                <div class="arm arm--right"></div>
                <div class="leg leg--left"></div>
                <div class="leg leg--right"></div>
                <div class="belt"></div>
                <div class="button button--top"></div>
                <div class="button button--bottom"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 1){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-2">
      <label>
        <?php if ($day == 2){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">2</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 2){ ?>style="opacity: 1"<?php }; ?>>
          <div class="snowflake-container">
            <div class="snowflake-resize">
              <div class="snowflake">
                <div class="side side-1">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
                <div class="side side-2">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
                <div class="side side-3">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
                <div class="side side-4">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
                <div class="side side-5">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
                <div class="side side-6">
                  <div class="side-l-1"></div>
                  <div class="side-r-1"></div>
                  <div class="side-l-2"></div>
                  <div class="side-r-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 2){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-3">
      <label>
        <?php if ($day == 3){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">3</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 3){ ?>style="opacity: 1"<?php }; ?>>
          <div class="stocking-container">
            <div class="stocking">
              <div class="stocking-hanger"></div>
              <div class="stocking-wool"></div>
              <div class="stocking-leg">
                <div class="stocking-heel"></div>
              </div>
              <div class="stocking-foot">
                <div class="stocking-heel"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 3){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-4">
      <label>
        <?php if ($day == 4){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">4</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 4){ ?>style="opacity: 1"<?php }; ?>>
          <div class="gift-box-day">
            <div class="gift-box-container">
              <div class="gift-box">
                <div class="gift-box__side gift-box__side--front"></div>
                <div class="gift-box__side gift-box__side--back"></div>
                <div class="gift-box__side gift-box__side--left"></div>
                <div class="gift-box__side gift-box__side--right"></div>
                <div class="gift-box__end gift-box__side--top"></div>
                <div class="gift-box__end gift-box__side--bottom"></div>
                <div class="gift-box-lid__side gift-box-lid__side--front"></div>
                <div class="gift-box-lid__side gift-box-lid__side--back"></div>
                <div class="gift-box-lid__side gift-box-lid__side--left"></div>
                <div class="gift-box-lid__side gift-box-lid__side--right"></div>
                <div class="gift-box-lid__end gift-box-lid__side--top"></div>
                <div class="ribbon-l" style="--gift-box-position: 0px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 1px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 2px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 3px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 4px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 5px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 6px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 7px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 8px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 9px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 10px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 11px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 12px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 13px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 14px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 15px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 16px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 17px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 18px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 19px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 20px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 21px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 22px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 23px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 24px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 25px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 26px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 27px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 28px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 29px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 30px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 31px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 32px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 33px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 34px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 35px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 36px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 37px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 38px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 39px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l" style="--gift-box-position: 40px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-l-end"></div>
                <div class="ribbon-r" style="--gift-box-position: 0px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 1px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 2px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 3px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 4px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 5px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 6px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 7px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 8px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 9px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 10px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 11px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 12px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 13px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 14px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 15px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 16px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 17px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 18px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 19px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 20px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 21px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 22px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 23px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 24px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 25px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 26px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 27px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 28px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 29px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 30px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 31px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 32px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 33px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 34px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 35px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 36px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 37px; border-color: var(--wrap-ribbon-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 38px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 39px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r" style="--gift-box-position: 40px; border-color: var(--gift-box-edge-color)"></div>
                <div class="ribbon-r-end"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 4){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-5">
      <label>
        <?php if ($day == 5){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">5</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 5){ ?>style="opacity: 1"<?php }; ?>>
          <div class="sledge-container">
            <div class="sledge">
              <div class="sledge-runner__front"></div>
              <div class="sledge-runner__front sledge-runner__front--top"></div>
              <div class="sledge-runner">
                <div class="sledge-runner__left-leg"></div>
                <div class="sledge-runner__right-leg"></div>
              </div>
              <div class="sledge-runner__back">
                <div class="sledge-runner__front"></div>
                <div class="sledge-runner__front sledge-runner__front--top"></div>
                <div class="sledge-runner">
                  <div class="sledge-runner__left-leg"></div>
                  <div class="sledge-runner__right-leg"></div>
                </div>
              </div>
              <div class="sledge-seat">
                <div class="sledge-top">
                  <div class="sledge-top__piece"></div>
                  <div class="sledge-top__piece"></div>
                  <div class="sledge-top__piece"></div>
                  <div class="sledge-top__piece"></div>
                  <div class="sledge-top__piece"></div>
                  <div class="sledge-top__piece"></div>
                </div>
                <div class="sledge-back">
                  <div class="sledge-back__piece"></div>
                  <div class="sledge-back__piece"></div>
                  <div class="sledge-back__piece"></div>
                  <div class="sledge-back__piece"></div>
                  <div class="sledge-back__piece"></div>
                  <div class="sledge-back__piece"></div>
                </div>
                <div class="sledge-side"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 5){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-6">
      <label>
        <?php if ($day == 6){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">6</div>
          <div class="back"></div>
        </div>
        <div class="inside" style="<?php if ($day > 6){ ?>opacity: 1;<?php }; ?>background-image: url(img/doge_birthday.png); background-size: cover; background-repeat: no-repeat">
         </div>
        <div class="title-container"><a href="https://twitter.com/cb_doge/status/1467489874328514563" target="_blank" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 6){ ?>id="DogePresent"<?php }; ?>title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-7">
      <label>
        <?php if ($day == 7){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">7</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 7){ ?>style="opacity: 1"<?php }; ?>>
          <div class="candle-container">
            <div class="candle">
              <div class="candle__body"></div>
              <div class="candle__bottom"></div>
              <div class="candle__wax-1"></div>
              <div class="candle__wax-2"></div>
              <div class="candle__wax-3"></div>
              <div class="candle-string"></div>
              <div class="candle__light">
                <div class="candle__flame">
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn burn-a"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                  <div class="candle__flame-burn"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 7){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-8">
      <label>
        <?php if ($day == 8){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">8</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 8){ ?>style="opacity: 1"<?php }; ?>>
          <div class="candycane-container">
            <div class="candycane">
              <div class="candycane__end candycane__end--top"></div>
              <div class="candycane__end candycane__end--bottom"></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 8){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-9">
      <label>
        <?php if ($day == 9){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">9</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 9){ ?>style="opacity: 1"<?php }; ?>>
          <div class="hot-chocolate-container">
            <div class="hot-chocolate">
              <div class="mug">
                <div class="mug__grip"></div>
                <div class="mug__contents">
                  <div class="mug__background">
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                    <div class="mug__background-curve"></div>
                  </div>
                  <div class="mug__shine"></div>
                  <div class="mug__shine--bottom"></div>
                </div>
                <div class="marshmallows">
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                  <div class="marshmallow"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 9){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-10">
      <label>
        <?php if ($day == 10){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">10</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 10){ ?>style="opacity: 1"<?php }; ?>>
          <div class="snowman-container">
            <div class="snowman">
              <div class="snowman__leg">O</div>
              <div class="snowman__stomach">O</div>
              <div class="snowman__head">O</div>
              <div class="snowman__button snowman__button-1">G</div>
              <div class="snowman__button snowman__button-2">@</div>
              <div class="snowman__button snowman__button-3">6</div>
              <div class="snowman__button snowman__button-4">D</div>
              <div class="snowman__nose">V</div>
              <div class="snowman__left-eye">*</div>
              <div class="snowman__right-eye">#</div>
              <div class="snowman__left-arm">Y</div>
              <div class="snowman__right-arm">F</div>
              <div class="snowman__hat">
                <div class="snowman__hat--base">M</div>
                <div class="snowman__hat--left">L</div>
                <div class="snowman__hat--right">J</div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 10){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-11">
      <label>
        <?php if ($day == 11){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">11</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 11){ ?>style="opacity: 1"<?php }; ?>>
          <div class="christmas-lights-container">
            <div class="christmas-lights">
              <div class="chord"></div>
              <div class="bulb bulb-1">
                <div class="light"></div>
              </div>
              <div class="bulb bulb-2">
                <div class="light"></div>
              </div>
              <div class="bulb bulb-3">
                <div class="light"></div>
              </div>
              <div class="bulb bulb-4">
                <div class="light"></div>
              </div>
              <div class="bulb bulb-5">
                <div class="light"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 11){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-12">
      <label>
        <?php if ($day == 12){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">12</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 12){ ?>style="opacity: 1"<?php }; ?>>
          <div class="polar-bear-container">
            <div class="polar-bear">
              <div class="polar-bear__body">
                <div class="polar-bear__foot polar-bear__foot--left">
                  <div class="polar-bear__print"></div>
                  <div class="polar-bear__fingers"></div>
                </div>
                <div class="polar-bear__foot polar-bear__foot--right">
                  <div class="polar-bear__print"></div>
                  <div class="polar-bear__fingers"></div>
                </div>
                <div class="polar-bear__arm--left"></div>
                <div class="polar-bear__arm--right"></div>
              </div>
              <div class="polar-bear__head">
                <div class="polar-bear__face"></div>
                <div class="polar-bear__scarf-line"></div>
                <div class="polar-bear__scarf"></div>
                <div class="polar-bear__scarf-end--left"></div>
                <div class="polar-bear__scarf-end--right"></div>
                <div class="polar-bear__ear polar-bear__ear--left"></div>
                <div class="polar-bear__ear polar-bear__ear--right"></div>
                <div class="polar-bear__eye polar-bear__eye--left"></div>
                <div class="polar-bear__eye polar-bear__eye--right"></div>
                <div class="polar-bear__lip polar-bear__lip--left"></div>
                <div class="polar-bear__lip polar-bear__lip--right"></div>
                <div class="polar-bear__nose"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 12){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-13">
      <label>
        <?php if ($day == 13){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">13</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 13){ ?>style="opacity: 1"<?php }; ?>>
          <div class="elf-hat-container">
            <div class="elf-hat">
              <div class="elf-hat__main"></div>
              <div class="elf-hat__main-shadow"></div>
              <div class="elf-hat__gold elf-hat__gold--main"></div>
              <div class="elf-hat__side">
                <div class="elf-hat__side__left"></div>
                <div class="elf-hat__side__right"></div>
                <div class="elf-hat__side__spikes"></div>
              </div>
              <div class="elf-hat__gold elf-hat__gold--left"></div>
              <div class="elf-hat__gold elf-hat__gold--left-center"></div>
              <div class="elf-hat__gold elf-hat__gold--right-center"></div>
              <div class="elf-hat__gold elf-hat__gold--right"></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 13){ ?>id="DogePresent"<?php }; ?>title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-14">
      <label>
        <?php if ($day == 14){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">14</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 14){ ?>style="opacity: 1"<?php }; ?>>
          <div class="ornaments-container">
            <div class="ornaments">
              <div class="branch branch-1">
                <div class="spikes-upper"></div>
                <div class="spikes-lower"></div>
                <div class="spikes-end"></div>
              </div>
              <div class="branch branch-2">
                <div class="spikes-upper"></div>
                <div class="spikes-lower"></div>
                <div class="spikes-end"></div>
              </div>
              <div class="ornament ornament-1">⭐
                <div class="hanger"></div>
              </div>
              <div class="ornament ornament-2">❄️
                <div class="hanger"></div>
              </div>
              <div class="ornament ornament-3">💜
                <div class="hanger"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 14){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-15">
      <label>
        <?php if ($day == 15){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">15</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 15){ ?>style="opacity: 1"<?php }; ?>>
          <div class="north-pole-container">
            <div class="north-pole">
              <div class="ground"></div>
              <div class="pole"></div>
              <div class="sign">North Pole
                <div class="icicle icicle-1"></div>
                <div class="icicle icicle-2"></div>
                <div class="icicle icicle-3"></div>
                <div class="icicle icicle-4"></div>
                <div class="icicle icicle-5"></div>
                <div class="ice-left"></div>
                <div class="ice-right"></div>
                <div class="snow"></div>
              </div>
              <div class="top"></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 15){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-16">
      <label>
        <?php if ($day == 16){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">16</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 16){ ?>style="opacity: 1"<?php }; ?>>
          <div class="skate-container">
            <div class="skate">
              <div class="skate-blade">
                <div class="skate-blade-holder-left"></div>
                <div class="skate-blade-holder-right"></div>
              </div>
              <div class="skate-boot-bottom"></div>
              <div class="skate-boot-back"></div>
              <div class="skate-boot-front"></div>
              <div class="skate-boot-main"></div>
              <div class="skate-boot-main-bottom"></div>
              <div class="skate-tie skate-tie--1"></div>
              <div class="skate-tie skate-tie--2"></div>
              <div class="skate-tie skate-tie--3"></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 16){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-17">
      <label>
        <?php if ($day == 17){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">17</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 17){ ?>style="opacity: 1"<?php }; ?>>
          <div class="shooting-star-container">
            <div class="shooting-star">
              <div class="shooting-star__tail"><span></span><span></span><span></span></div>
              <div class="shooting-star__star"><span></span><span></span><span></span><span></span><span></span></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 17){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-18">
      <label>
        <?php if ($day == 18){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">18</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 18){ ?>style="opacity: 1"<?php }; ?>>
          <div class="drum-container">
            <div class="drum">
              <div class="side">
                <div class="side__bottom"></div>
                <div class="side__top"></div>
                <div class="pattern pattern-1"></div>
                <div class="pattern pattern-2"></div>
                <div class="pattern pattern-3"></div>
                <div class="pattern pattern-4"></div>
                <div class="pattern pattern-5"></div>
                <div class="pattern pattern-6"></div>
              </div>
              <div class="top"></div>
              <div class="drum-stick drum-stick--left"></div>
              <div class="drum-stick-shadow drum-stick-shadow--left"></div>
              <div class="drum-stick drum-stick--right"></div>
              <div class="drum-stick-shadow drum-stick-shadow--right"></div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 18){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-19">
      <label>
        <?php if ($day == 19){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">19</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 19){ ?>style="opacity: 1"<?php }; ?>>
          <div class="sparkler-container">
            <div class="sparkler">
              <div class="stick"></div>
              <div class="gun-powder"></div>
              <div class="sparkler-light">
                <div class="spark spark-1" style="--spark-rotate: 10deg; --spark-delay: 850ms"></div>
                <div class="spark spark-2" style="--spark-rotate: 20deg; --spark-delay: 864ms"></div>
                <div class="spark spark-3" style="--spark-rotate: 30deg; --spark-delay: 525ms"></div>
                <div class="spark spark-4" style="--spark-rotate: 40deg; --spark-delay: 784ms"></div>
                <div class="spark spark-5" style="--spark-rotate: 50deg; --spark-delay: 460ms"></div>
                <div class="spark spark-6" style="--spark-rotate: 60deg; --spark-delay: 206ms"></div>
                <div class="spark spark-7" style="--spark-rotate: 70deg; --spark-delay: 794ms"></div>
                <div class="spark spark-8" style="--spark-rotate: 80deg; --spark-delay: 270ms"></div>
                <div class="spark spark-9" style="--spark-rotate: 90deg; --spark-delay: 299ms"></div>
                <div class="spark spark-10" style="--spark-rotate: 100deg; --spark-delay: 548ms"></div>
                <div class="spark spark-11" style="--spark-rotate: 110deg; --spark-delay: 819ms"></div>
                <div class="spark spark-12" style="--spark-rotate: 120deg; --spark-delay: 849ms"></div>
                <div class="spark spark-13" style="--spark-rotate: 130deg; --spark-delay: 219ms"></div>
                <div class="spark spark-14" style="--spark-rotate: 140deg; --spark-delay: 176ms"></div>
                <div class="spark spark-15" style="--spark-rotate: 150deg; --spark-delay: 497ms"></div>
                <div class="spark spark-16" style="--spark-rotate: 160deg; --spark-delay: 872ms"></div>
                <div class="spark spark-17" style="--spark-rotate: 170deg; --spark-delay: 836ms"></div>
                <div class="spark spark-18" style="--spark-rotate: 180deg; --spark-delay: 623ms"></div>
                <div class="spark spark-19" style="--spark-rotate: 190deg; --spark-delay: 301ms"></div>
                <div class="spark spark-20" style="--spark-rotate: 200deg; --spark-delay: 767ms"></div>
                <div class="spark spark-21" style="--spark-rotate: 210deg; --spark-delay: 18ms"></div>
                <div class="spark spark-22" style="--spark-rotate: 220deg; --spark-delay: 617ms"></div>
                <div class="spark spark-23" style="--spark-rotate: 230deg; --spark-delay: 831ms"></div>
                <div class="spark spark-24" style="--spark-rotate: 240deg; --spark-delay: 578ms"></div>
                <div class="spark spark-25" style="--spark-rotate: 250deg; --spark-delay: 712ms"></div>
                <div class="spark spark-26" style="--spark-rotate: 260deg; --spark-delay: 924ms"></div>
                <div class="spark spark-27" style="--spark-rotate: 270deg; --spark-delay: 361ms"></div>
                <div class="spark spark-28" style="--spark-rotate: 280deg; --spark-delay: 302ms"></div>
                <div class="spark spark-29" style="--spark-rotate: 290deg; --spark-delay: 93ms"></div>
                <div class="spark spark-30" style="--spark-rotate: 300deg; --spark-delay: 274ms"></div>
                <div class="spark spark-31" style="--spark-rotate: 310deg; --spark-delay: 587ms"></div>
                <div class="spark spark-32" style="--spark-rotate: 320deg; --spark-delay: 666ms"></div>
                <div class="spark spark-33" style="--spark-rotate: 330deg; --spark-delay: 184ms"></div>
                <div class="spark spark-34" style="--spark-rotate: 340deg; --spark-delay: 370ms"></div>
                <div class="spark spark-35" style="--spark-rotate: 350deg; --spark-delay: 634ms"></div>
                <div class="spark spark-36" style="--spark-rotate: 360deg; --spark-delay: 247ms"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 19){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-20">
      <label>
        <?php if ($day == 20){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">20</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 20){ ?>style="opacity: 1"<?php }; ?>>
          <div class="pom-hat-container">
            <div class="pom-hat"></div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 20){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-21">
      <label>
        <?php if ($day == 21){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">21</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 21){ ?>style="opacity: 1"<?php }; ?>>
          <div class="toy-train-container">
            <div class="toy-train">
              <div class="locomotive">
                <div class="chimney">
                  <div class="smoke"></div>
                  <div class="smoke"></div>
                  <div class="smoke"></div>
                </div>
                <div class="boiler"></div>
                <div class="front"></div>
                <div class="snow-breaker"></div>
                <div class="car-cabin">
                  <div class="window"></div>
                </div>
                <div class="side-bar"></div>
                <div class="car-bottom">
                  <div class="wheel"></div>
                  <div class="wheel"></div>
                  <div class="bumper bumper--back"></div>
                </div>
              </div>
              <div class="passanger-car">
                <div class="car-cabin">
                  <div class="window"></div>
                  <div class="window"></div>
                </div>
                <div class="side-bar"></div>
                <div class="car-bottom">
                  <div class="wheel"></div>
                  <div class="wheel"></div>
                  <div class="bumper bumper--back"></div>
                  <div class="bumper bumper--front"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 21){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-22">
      <label>
        <?php if ($day == 22){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">22</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 22){ ?>style="opacity: 1"<?php }; ?>>
          <div class="jingle-bells-container">
            <div class="jingle-bells">
              <div class="staff-lines">
                <div class="clef">&#119070;</div>
                <div class="bar">
                  <div class="note note--e note--a1">&#119135;</div>
                  <div class="note note--e note--a2">&#119135;</div>
                  <div class="note note--e note--a3">&#119134;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a4">&#119135;</div>
                  <div class="note note--e note--a5">&#119135;</div>
                  <div class="note note--e note--a6">&#119134;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a7">&#119135;</div>
                  <div class="note note--g note--a8">&#119135;</div>
                  <div class="note note--c note--a9">&#119135;</div>
                  <div class="note note--d note--a10">&#119135;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--full note--a11">&#119133;</div>
                </div>
                <div class="bar">
                  <div class="note note--f note--a12">𝅘𝅥</div>
                  <div class="note note--f note--a13">𝅘𝅥</div>
                  <div class="note note--f note--a14">𝅘𝅥</div>
                  <div class="note note--f note--a15">𝅘𝅥</div>
                </div>
                <div class="bar">
                  <div class="note note--f note--a16">&#119135;</div>
                  <div class="note note--e note--a17">&#119135;</div>
                  <div class="note note--e note--a18">&#119135;</div>
                  <div class="note note--e note--a19">&#119135;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a20">&#119135;</div>
                  <div class="note note--d note--a21">&#119135;</div>
                  <div class="note note--d note--a22">&#119135;</div>
                  <div class="note note--e note--a23">&#119135; </div>
                </div>
                <div class="bar">
                  <div class="note note--d note--a24">&#119134;</div>
                  <div class="note note--g note--a25">&#119134;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a26">&#119135;</div>
                  <div class="note note--e note--a27">&#119135;</div>
                  <div class="note note--e note--a28">&#119134;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a29">&#119135;</div>
                  <div class="note note--e note--a30">&#119135;</div>
                  <div class="note note--e note--a31">&#119134;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a32">&#119135;</div>
                  <div class="note note--d note--a33">&#119135;</div>
                  <div class="note note--d note--a34">&#119135;</div>
                  <div class="note note--e note--a35">&#119135;</div>
                </div>
                <div class="bar">
                  <div class="note note--e note--a36">&#119133;</div>
                </div>
                <div class="bar">
                  <div class="note note--f note--a37">&#119135;</div>
                  <div class="note note--f note--a38">&#119135;</div>
                  <div class="note note--f note--a39">&#119135;</div>
                  <div class="note note--f note--a40">&#119135;</div>
                </div>
                <div class="bar">
                  <div class="note note--f note--a41">&#119135;</div>
                  <div class="note note--e note--a42">&#119135;</div>
                  <div class="note note--e note--a43">&#119135;</div>
                  <div class="note note--e note--a44">&#119135;</div>
                </div>
                <div class="bar">
                  <div class="note note--g note--a45">&#119135;</div>
                  <div class="note note--g note--a46">&#119135;</div>
                  <div class="note note--f note--a47">&#119135;</div>
                  <div class="note note--d note--a48">&#119135; </div>
                </div>
                <div class="bar bar--end">
                  <div class="note note--c note--full note--a49">&#119133;</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 22){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-23">
      <label>
        <?php if ($day == 23){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">23</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 23){ ?>style="opacity: 1"<?php }; ?>>
          <div class="reindeer-container">
            <div class="reindeer">
              <div class="antler">
                <div class="hook"></div>
                <div class="hook"></div>
                <div class="hook"></div>
              </div>
              <div class="antler antler--right">
                <div class="hook"></div>
                <div class="hook"></div>
                <div class="hook"></div>
              </div>
              <div class="body">
                <div class="hand"></div>
                <div class="hand hand--right"></div>
                <div class="legs"></div>
                <div class="foot"></div>
                <div class="foot foot--right"></div>
              </div>
              <div class="head">
                <div class="ear"></div>
                <div class="ear ear--right"></div>
                <div class="face"></div>
                <div class="eye"></div>
                <div class="eye eye--right"></div>
                <div class="nose"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 23){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a>
        </div>
      </label>
    </div>
    <div class="day day-24">
      <label>
        <?php if ($day == 24){ ?><input type="checkbox" id="present"/><?php }; ?>
        <div class="door">
          <div class="front">24</div>
          <div class="back"></div>
        </div>
        <div class="inside" <?php if ($day > 24){ ?>style="opacity: 1"<?php }; ?>>
          <div class="christmas-tree-wrapper">
            <div class="christmas-tree-container">
              <div class="glow"></div>
              <div class="shadow"></div>
              <div class="christmas-tree">
                <div class="branches">
                  <div class="branch" style="height: 119px; width: 10px; transform: translateZ(2px) rotate(6.325255998696151deg)"></div>
                  <div class="branch" style="height: 118px; width: 10px; transform: translateZ(4px) rotate(176.20355056709766deg)"></div>
                  <div class="branch" style="height: 117px; width: 10px; transform: translateZ(6px) rotate(109.6877367437578deg)"></div>
                  <div class="branch" style="height: 116px; width: 10px; transform: translateZ(8px) rotate(263.98277924760146deg)"></div>
                  <div class="branch" style="height: 115px; width: 10px; transform: translateZ(10px) rotate(245.80884131313596deg)"></div>
                  <div class="branch" style="height: 114px; width: 10px; transform: translateZ(12px) rotate(125.90572930941963deg)"></div>
                  <div class="branch" style="height: 113px; width: 10px; transform: translateZ(14px) rotate(273.21498333556076deg)"></div>
                  <div class="branch" style="height: 112px; width: 10px; transform: translateZ(16px) rotate(60.67997228327881deg)"></div>
                  <div class="branch" style="height: 111px; width: 10px; transform: translateZ(18px) rotate(340.94130894257046deg)"></div>
                  <div class="branch" style="height: 110px; width: 10px; transform: translateZ(20px) rotate(358.31272470602437deg)"></div>
                  <div class="branch" style="height: 109px; width: 10px; transform: translateZ(22px) rotate(264.74066046683686deg)"></div>
                  <div class="branch" style="height: 108px; width: 10px; transform: translateZ(24px) rotate(218.5352326089175deg)"></div>
                  <div class="branch" style="height: 107px; width: 10px; transform: translateZ(26px) rotate(135.05308784302568deg)"></div>
                  <div class="branch" style="height: 106px; width: 10px; transform: translateZ(28px) rotate(278.23919757388694deg)"></div>
                  <div class="branch" style="height: 105px; width: 10px; transform: translateZ(30px) rotate(156.38982595573793deg)"></div>
                  <div class="branch" style="height: 104px; width: 10px; transform: translateZ(32px) rotate(296.3463072193019deg)"></div>
                  <div class="branch" style="height: 103px; width: 10px; transform: translateZ(34px) rotate(156.70257911091676deg)"></div>
                  <div class="branch" style="height: 102px; width: 10px; transform: translateZ(36px) rotate(14.595918663868028deg)"></div>
                  <div class="branch" style="height: 101px; width: 10px; transform: translateZ(38px) rotate(8.869677026848212deg)"></div>
                  <div class="branch" style="height: 100px; width: 10px; transform: translateZ(40px) rotate(174.9171097228975deg)"></div>
                  <div class="branch" style="height: 99px; width: 10px; transform: translateZ(42px) rotate(5.729161818545805deg)"></div>
                  <div class="branch" style="height: 98px; width: 10px; transform: translateZ(44px) rotate(170.20536938219462deg)"></div>
                  <div class="branch" style="height: 97px; width: 10px; transform: translateZ(46px) rotate(218.68798948817837deg)"></div>
                  <div class="branch" style="height: 96px; width: 10px; transform: translateZ(48px) rotate(261.49338982722264deg)"></div>
                  <div class="branch" style="height: 95px; width: 10px; transform: translateZ(50px) rotate(224.3346363610241deg)"></div>
                  <div class="branch" style="height: 94px; width: 10px; transform: translateZ(52px) rotate(207.45654077169283deg)"></div>
                  <div class="branch" style="height: 93px; width: 10px; transform: translateZ(54px) rotate(333.19890971006606deg)"></div>
                  <div class="branch" style="height: 92px; width: 10px; transform: translateZ(56px) rotate(186.56761360962392deg)"></div>
                  <div class="branch" style="height: 91px; width: 10px; transform: translateZ(58px) rotate(106.33803711997693deg)"></div>
                  <div class="branch" style="height: 90px; width: 10px; transform: translateZ(60px) rotate(93.0126410876416deg)"></div>
                  <div class="branch" style="height: 89px; width: 10px; transform: translateZ(62px) rotate(232.57620441584996deg)"></div>
                  <div class="branch" style="height: 88px; width: 10px; transform: translateZ(64px) rotate(0.6104872170300801deg)"></div>
                  <div class="branch" style="height: 87px; width: 10px; transform: translateZ(66px) rotate(357.73114971318057deg)"></div>
                  <div class="branch" style="height: 86px; width: 10px; transform: translateZ(68px) rotate(220.05523447210146deg)"></div>
                  <div class="branch" style="height: 85px; width: 10px; transform: translateZ(70px) rotate(254.11804574245093deg)"></div>
                  <div class="branch" style="height: 84px; width: 10px; transform: translateZ(72px) rotate(259.09608525934175deg)"></div>
                  <div class="branch" style="height: 83px; width: 10px; transform: translateZ(74px) rotate(242.8150499370437deg)"></div>
                  <div class="branch" style="height: 82px; width: 10px; transform: translateZ(76px) rotate(117.13001991060963deg)"></div>
                  <div class="branch" style="height: 81px; width: 10px; transform: translateZ(78px) rotate(325.19773131817914deg)"></div>
                  <div class="branch" style="height: 80px; width: 10px; transform: translateZ(80px) rotate(132.22442508381155deg)"></div>
                  <div class="branch" style="height: 79px; width: 10px; transform: translateZ(82px) rotate(296.0139598974918deg)"></div>
                  <div class="branch" style="height: 78px; width: 10px; transform: translateZ(84px) rotate(328.9066840131411deg)"></div>
                  <div class="branch" style="height: 77px; width: 10px; transform: translateZ(86px) rotate(302.04468152695426deg)"></div>
                  <div class="branch" style="height: 76px; width: 10px; transform: translateZ(88px) rotate(253.23424688827112deg)"></div>
                  <div class="branch" style="height: 75px; width: 10px; transform: translateZ(90px) rotate(24.124031584111055deg)"></div>
                  <div class="branch" style="height: 74px; width: 10px; transform: translateZ(92px) rotate(182.65533633036253deg)"></div>
                  <div class="branch" style="height: 73px; width: 10px; transform: translateZ(94px) rotate(286.33448264669545deg)"></div>
                  <div class="branch" style="height: 72px; width: 10px; transform: translateZ(96px) rotate(349.2152818988163deg)"></div>
                  <div class="branch" style="height: 71px; width: 10px; transform: translateZ(98px) rotate(72.37302866156895deg)"></div>
                  <div class="branch" style="height: 70px; width: 10px; transform: translateZ(100px) rotate(123.85544874487466deg)"></div>
                  <div class="branch" style="height: 69px; width: 10px; transform: translateZ(102px) rotate(329.35602927601116deg)"></div>
                  <div class="branch" style="height: 68px; width: 10px; transform: translateZ(104px) rotate(251.46534705377184deg)"></div>
                  <div class="branch" style="height: 67px; width: 10px; transform: translateZ(106px) rotate(24.050467737122837deg)"></div>
                  <div class="branch" style="height: 66px; width: 10px; transform: translateZ(108px) rotate(79.3626771598028deg)"></div>
                  <div class="branch" style="height: 65px; width: 10px; transform: translateZ(110px) rotate(255.26139433976758deg)"></div>
                  <div class="branch" style="height: 64px; width: 10px; transform: translateZ(112px) rotate(347.1350077061221deg)"></div>
                  <div class="branch" style="height: 63px; width: 10px; transform: translateZ(114px) rotate(146.7914467318125deg)"></div>
                  <div class="branch" style="height: 62px; width: 10px; transform: translateZ(116px) rotate(154.3262327849903deg)"></div>
                  <div class="branch" style="height: 61px; width: 10px; transform: translateZ(118px) rotate(142.69476522296824deg)"></div>
                  <div class="branch" style="height: 60px; width: 10px; transform: translateZ(120px) rotate(14.014799591050693deg)"></div>
                  <div class="branch" style="height: 59px; width: 10px; transform: translateZ(122px) rotate(235.03304290481177deg)"></div>
                  <div class="branch" style="height: 58px; width: 10px; transform: translateZ(124px) rotate(37.72843692049926deg)"></div>
                  <div class="branch" style="height: 57px; width: 10px; transform: translateZ(126px) rotate(197.7994902730588deg)"></div>
                  <div class="branch" style="height: 56px; width: 10px; transform: translateZ(128px) rotate(84.90239639515599deg)"></div>
                  <div class="branch" style="height: 55px; width: 10px; transform: translateZ(130px) rotate(41.53312096133106deg)"></div>
                  <div class="branch" style="height: 54px; width: 10px; transform: translateZ(132px) rotate(236.38020721487487deg)"></div>
                  <div class="branch" style="height: 53px; width: 10px; transform: translateZ(134px) rotate(331.4911278320273deg)"></div>
                  <div class="branch" style="height: 52px; width: 10px; transform: translateZ(136px) rotate(95.89659521491726deg)"></div>
                  <div class="branch" style="height: 51px; width: 10px; transform: translateZ(138px) rotate(261.187183487095deg)"></div>
                  <div class="branch" style="height: 50px; width: 10px; transform: translateZ(140px) rotate(122.04562650808563deg)"></div>
                  <div class="branch" style="height: 49px; width: 10px; transform: translateZ(142px) rotate(23.99659005239699deg)"></div>
                  <div class="branch" style="height: 48px; width: 10px; transform: translateZ(144px) rotate(181.3014486265227deg)"></div>
                  <div class="branch" style="height: 47px; width: 10px; transform: translateZ(146px) rotate(125.78535837354742deg)"></div>
                  <div class="branch" style="height: 46px; width: 10px; transform: translateZ(148px) rotate(290.24968824808997deg)"></div>
                  <div class="branch" style="height: 45px; width: 10px; transform: translateZ(150px) rotate(284.2070196555121deg)"></div>
                  <div class="branch" style="height: 44px; width: 10px; transform: translateZ(152px) rotate(58.18784688203332deg)"></div>
                  <div class="branch" style="height: 43px; width: 10px; transform: translateZ(154px) rotate(321.8925443350913deg)"></div>
                  <div class="branch" style="height: 42px; width: 10px; transform: translateZ(156px) rotate(304.51459024130486deg)"></div>
                  <div class="branch" style="height: 41px; width: 10px; transform: translateZ(158px) rotate(344.709710296371deg)"></div>
                  <div class="branch" style="height: 40px; width: 10px; transform: translateZ(160px) rotate(295.44067181934133deg)"></div>
                  <div class="branch" style="height: 39px; width: 10px; transform: translateZ(162px) rotate(238.16634318368796deg)"></div>
                  <div class="branch" style="height: 38px; width: 10px; transform: translateZ(164px) rotate(74.56807360493717deg)"></div>
                  <div class="branch" style="height: 37px; width: 10px; transform: translateZ(166px) rotate(123.8665603890022deg)"></div>
                  <div class="branch" style="height: 36px; width: 10px; transform: translateZ(168px) rotate(71.02818809786658deg)"></div>
                  <div class="branch" style="height: 35px; width: 10px; transform: translateZ(170px) rotate(239.7812446675063deg)"></div>
                  <div class="branch" style="height: 34px; width: 10px; transform: translateZ(172px) rotate(79.64975469545574deg)"></div>
                  <div class="branch" style="height: 33px; width: 10px; transform: translateZ(174px) rotate(232.7454559968957deg)"></div>
                  <div class="branch" style="height: 32px; width: 10px; transform: translateZ(176px) rotate(218.43639290588484deg)"></div>
                  <div class="branch" style="height: 31px; width: 10px; transform: translateZ(178px) rotate(245.64417143155507deg)"></div>
                  <div class="branch" style="height: 30px; width: 10px; transform: translateZ(180px) rotate(75.16581812008346deg)"></div>
                  <div class="branch" style="height: 29px; width: 10px; transform: translateZ(182px) rotate(164.46956703005588deg)"></div>
                  <div class="branch" style="height: 28px; width: 10px; transform: translateZ(184px) rotate(233.14649479310253deg)"></div>
                  <div class="branch" style="height: 27px; width: 10px; transform: translateZ(186px) rotate(47.207808427550255deg)"></div>
                  <div class="branch" style="height: 26px; width: 10px; transform: translateZ(188px) rotate(141.38404400456554deg)"></div>
                  <div class="branch" style="height: 25px; width: 10px; transform: translateZ(190px) rotate(291.6428371967336deg)"></div>
                  <div class="branch" style="height: 24px; width: 10px; transform: translateZ(192px) rotate(188.9323038362239deg)"></div>
                  <div class="branch" style="height: 23px; width: 10px; transform: translateZ(194px) rotate(14.365657741195292deg)"></div>
                  <div class="branch" style="height: 22px; width: 10px; transform: translateZ(196px) rotate(280.6693704495304deg)"></div>
                  <div class="branch" style="height: 21px; width: 10px; transform: translateZ(198px) rotate(258.77522248729827deg)"></div>
                  <div class="branch" style="height: 20px; width: 10px; transform: translateZ(200px) rotate(97.66040493619556deg)"></div>
                  <div class="branch" style="height: 19px; width: 10px; transform: translateZ(202px) rotate(144.65339400733146deg)"></div>
                  <div class="branch" style="height: 18px; width: 10px; transform: translateZ(204px) rotate(180.3707592016742deg)"></div>
                  <div class="branch" style="height: 17px; width: 10px; transform: translateZ(206px) rotate(253.2312168716752deg)"></div>
                  <div class="branch" style="height: 16px; width: 10px; transform: translateZ(208px) rotate(323.84607714466995deg)"></div>
                  <div class="branch" style="height: 15px; width: 10px; transform: translateZ(210px) rotate(83.75279873323231deg)"></div>
                  <div class="branch" style="height: 14px; width: 10px; transform: translateZ(212px) rotate(88.98528783306281deg)"></div>
                  <div class="branch" style="height: 13px; width: 10px; transform: translateZ(214px) rotate(287.5982829781373deg)"></div>
                  <div class="branch" style="height: 12px; width: 10px; transform: translateZ(216px) rotate(23.17580017295612deg)"></div>
                  <div class="branch" style="height: 11px; width: 10px; transform: translateZ(218px) rotate(243.7421247022631deg)"></div>
                </div>
                <div class="ct-ornaments">
                  <div class="ct-ornament" style="transform:
                          rotateZ(109.15837669750692deg) translateX(40.136419612115155px) translateZ(79.45432155153938px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(174.69624689112317deg) translateX(24.982314424606784px) translateZ(140.07074230157286px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(191.36583230303245deg) translateX(36.78869432258632px) translateZ(92.84522270965472px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(275.02365174573055deg) translateX(44.321953271798336px) translateZ(62.71218691280667px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(331.88824684866063deg) translateX(30.835290497721623px) translateZ(116.65883800911351px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(11.911085197733723deg) translateX(23.030155106032872px) translateZ(147.8793795758685px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(118.07128221821944deg) translateX(30.799210943283082px) translateZ(116.80315622686767px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(169.75841762836254deg) translateX(32.89586196731865px) translateZ(108.41655213072538px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(208.00581242106466deg) translateX(40.77288622390018px) translateZ(76.90845510439928px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(288.2541033514337deg) translateX(13.660779082621879px) translateZ(185.35688366951248px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(301.32267964279936deg) translateX(45.871916682909735px) translateZ(56.512333268361054px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(42.564935003088394deg) translateX(21.362079070918163px) translateZ(154.55168371632735px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(63.93727223126114deg) translateX(54.2196104973053px) translateZ(23.121558010778806px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(150.69001933537905deg) translateX(48.654918645468676px) translateZ(45.38032541812529px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(204.13492517278326deg) translateX(33.7069149273518px) translateZ(105.17234029059281px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(264.71383364957535deg) translateX(24.34264347402886px) translateZ(142.62942610388455px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(339.0552611269552deg) translateX(46.04526630895698px) translateZ(55.81893476417206px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(54.39702008100257deg) translateX(41.97894928412687px) translateZ(72.08420286349251px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(96.73438148595187deg) translateX(14.633306095484073px) translateZ(181.4667756180637px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(136.07086710556834deg) translateX(27.879522230990133px) translateZ(128.48191107603947px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(180.96896223619376deg) translateX(45.42426616589512px) translateZ(58.30293533641952px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(294.4565677571652deg) translateX(25.108758361762227px) translateZ(139.5649665529511px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(338.4723471707751deg) translateX(29.966824486054733px) translateZ(120.13270205578107px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(41.646269311969deg) translateX(39.09442961661415px) translateZ(83.62228153354341px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(97.74592082462436deg) translateX(47.13279016784903px) translateZ(51.46883932860388px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(160.2532001438013deg) translateX(34.437224961397234px) translateZ(102.25110015441106px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(227.25042907944663deg) translateX(44.1975043752485px) translateZ(63.20998249900599px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(292.81234660058794deg) translateX(36.711025222722924px) translateZ(93.1558991091083px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(323.0501575581301deg) translateX(32.80645311287648px) translateZ(108.77418754849406px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(10.464414778064002deg) translateX(15.223536205665695px) translateZ(179.10585517733722px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(106.89270843508997deg) translateX(46.55235101911423px) translateZ(53.790595923543094px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(129.27146469062652deg) translateX(21.230428870097057px) translateZ(155.07828451961177px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(203.24467665859925deg) translateX(20.393838012386496px) translateZ(158.42464795045402px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(265.64232845921333deg) translateX(34.13365570895421px) translateZ(103.46537716418318px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(338.43281482753827deg) translateX(33.92220658113608px) translateZ(104.31117367545569px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(56.19385986528329deg) translateX(25.232622817778754px) translateZ(139.06950872888498px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(63.27388218963444deg) translateX(11.452120140880751px) translateZ(194.191519436477px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(165.2464477876395deg) translateX(20.238630132446104px) translateZ(159.04547947021558px) rotateY(75deg)"></div>
                  <div class="ct-ornament" style="transform:
                          rotateZ(199.71458774579173deg) translateX(11.107140129842861px) translateZ(195.57143948062856px) rotateY(75deg)"></div>
                </div>
                <div class="tree-top">
                  <div class="star" style="transform: translateZ(225px) translateY(-4.25px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-4.5px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-4.75px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-5px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-5.25px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-5.5px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-5.75px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-6px) rotateX(-90deg)"></div>
                  <div class="star" style="transform: translateZ(225px) translateY(-6.25px) rotateX(-90deg)"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="title-container"><a href="#" target="" data-bs-toggle="modal" data-bs-target="#Doge4Kids" <?php if ($day == 24){ ?>id="DogePresent"<?php }; ?> title="<?php echo $click_alt_text ?>"><?php echo $click_text ?></a></div>
      </label>
    </div>
  </div>

<div class="modal fade" id="Doge4Kids" tabindex="-1" aria-labelledby="Doge4KidsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #D80B11; border: 5px solid #FFAD00; color: rgba(255, 255, 255, 1)">
      <div class="modal-header">
        <h5 class="modal-title" id="Doge4KidsLabel">Merry Cristmas litle Shib.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: #FFAD00"></button>
      </div>
      <div class="modal-body" style="font-family: Arial, Helvetica, sans-serif" id="ChristmasWindow">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #FFAD00; color: rgba(0, 0, 0, 1)">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
      $(document).ready(function(){
         $("#DogePresent").click(function () {
                $.ajax({
                    url: "inc/functions.php", // path to myphp file which returns the price
                    method: "post", // POST request
                    data: "christmas=1&ip=<?php echo getIPAddress(); ?>", // I retrieve this data in my$_POST variable in ajax.php : $_POST[id]
                    success: function(response) { // The function to execute if the request is a -success-, response will be the price
                        if (response == null){ alert('Much Sad! Such Try Later!'); }else{ $("#ChristmasWindow").html(response); };
                    }, error: function(){ alert('Much Sad! Such Try Later!'); }
                });
          });
        });
</script>
<?php }; ?>
</body>
</html>