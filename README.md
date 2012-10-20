# [Ches(s]ms)
#### (chess emm ess)
#### Chess against a computer through SMS using Twilio.

Author: Jahn Veach &lt;v64@v64.net&gt;  
License: Public domain  
Website: https://github.com/v64/chessms  

### Purpose
This was hurriedly cobbled together from 6pm to 11:45pm on 10/17/2012 at the TwilioCon 2012 Hackathon. There are bugs, kludges, hardcoded paths, unused variables, multi-page functions, and other monstrosities in this codebase. Also, it works.

### Summary
Using Twilio and the Stockfish Chess Engine, you can text 'play' to 262-67-CHESS (but see [TODO](#todo) below) and the application texts you back a URL to a page with a chess board of your game (although, there are people who can visualize the game mentally without the use of a board). As you text in moves, Stockfish replies with its own moves and your chess board updates. The main page of the application has boards for all games currently in progress. For a screenshot of the main page, see [main_page.png](https://raw.github.com/v64/chessms/master/main_page.png), and for the individual game page, see [game_page.png](https://raw.github.com/v64/chessms/master/game_page.png).

### Example
Here's an example text session:  
Me texting 262-67-CHESS: play  
[Ches(s]ms): Hello! Text back moves in algebraic notation (e4) or square to square (e2 e4). A URL for your game board is coming.  
[Ches(s]ms): Here's the URL for your game board as promised: http://chessms.v64.net/game/njsef  
Me: c4  
[Ches(s]ms): The computer replies e7 to e5. Your move!  
Me: Nf3  
[Ches(s]ms): The computer replies b8 to c6. Your move!  

### TODO
Unfortunately, I didn't have enough time at the hackathon to put the code on a public web server, so I ran my demo off my laptop. As a result, texting 262-67-CHESS currently returns an error. As soon as I have a chance to put the code somewhere public, you'll be able to give it a try yourself.

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

I don't know what the licenses are on any of the above projects, so I'm throwing [Ches(s]ms) into the public domain for simplicity's sake. Enjoy!

### Great Minds Think Alike
Interestingly enough, [Chad Selph](https://github.com/chadselph) of Twilio heard about my project and by complete coincidence, he had also developed a Twilio chess SMS app called "ChesSMS". However, instead of a web interface for the board, he did some very clever work with Unicode to text the board back to you!
