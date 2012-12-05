# [Ches(s]ms)
#### Chess against a computer through SMS using Twilio. Pronounced "chess emm ess".

Author: Jahn Veach &lt;j@hnvea.ch&gt;  
License: Public domain  
Demo: http://chessms.v64.net/  
Source: https://github.com/v64/chessms  

### Purpose
This was hurriedly cobbled together from 6pm to 11:45pm on 10/17/2012 at the TwilioCon 2012 Hackathon. There are bugs, kludges, hardcoded paths, unused variables, multi-page functions, and other monstrosities in this codebase. Also, it works.

### Summary
Using Twilio and the Stockfish Chess Engine, you can text 'play' to 262-67-CHESS (262-672-4377) and the application texts you back a URL to a page with a chess board of your game (although, there are people who can visualize the game mentally without the use of a board). As you text in moves, Stockfish replies with its own moves and your chess board updates. The main page of the application has boards for all games currently in progress. For a screenshot of the main page, see [main_page.png](https://raw.github.com/v64/chessms/master/main_page.png), and for the individual game page, see [game_page.png](https://raw.github.com/v64/chessms/master/game_page.png).

### Example
Here's an example text session. If you'd like to try it yourself, text 'play' to 262-672-4377 and visit [http://chessms.v64.net/](http://chessms.v64.net/).  
  
Me texting 262-67-CHESS: play  
[Ches(s]ms): Hello! Text back moves in algebraic notation (e4) or square to square (e2 e4). A URL for your game board is coming.  
[Ches(s]ms): Here's the URL for your game board as promised: http://chessms.v64.net/game/bksxy  
Me: d4  
[Ches(s]ms): The computer replies g8 to f6. Your move!  
Me: c4  
[Ches(s]ms): The computer replies e7 to e6. Your move!  

### Acknowledgements
Couldn't have done it without these projects:

* CodeIgniter: http://codeigniter.com/
* RedBeanPHP: http://redbeanphp.com/
* Bootstrap: http://twitter.github.com/bootstrap/
* Twilio: http://www.twilio.com/
* Twilio PHP: http://github.com/twilio/twilio-php/
* jQuery: http://jquery.com/
* jChess: http://github.com/bmarini/jchess/
* Games_Chess: http://pear.php.net/package/Games_Chess/
* Stockfish Chess Engine: http://stockfishchess.org/
* Hakre's PHP on Heroku tutorial: http://hakre.wordpress.com/2012/05/20/php-on-heroku-again/

I don't know what the licenses are on any of the above projects, so I'm throwing [Ches(s]ms) into the public domain for simplicity's sake. Enjoy!

### Great Minds Think Alike
Interestingly enough, [Chad Selph](https://github.com/chadselph) of Twilio heard about my project and by complete coincidence, he had also developed a Twilio chess SMS app called [ChesSMS](https://github.com/twilio/chessms). However, instead of a web interface for the board, he did some very clever work with Unicode to text the board back to you! He talked about the [technical details](http://www.twilio.com/engineering/2012/11/08/adventures-in-unicode-sms) on Twilio's engineering blog.
