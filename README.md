# [Ches(s]ms)
#### Chess against a computer through SMS using Twilio.

Author: Jahn Veach &lt;v64@v64.net&gt;
License: Public domain
Website: https://github.com/v64/chessms

### Purpose
This was hurriedly cobbled together from 6pm to 11:45pm on 10/17/2012 at the TwilioCon 2012 Hackathon. There are bugs, kludges, hardcoded paths, unused variables, multi-page functions, and other monstrosities in this codebase. Also, it works.

### Summary
Using Twilio and the Stockfish Chess Engine, you were able to text 'play' to 262-67-CHESS and the application would text you back a URL to a page with a chess board of your game (although, there are people who can visualize the game mentally without the use of a board). As you texted in moves, Stockfish would reply with its own moves and your chess board would update. The main page of the application had boards for all games currently in progress. The project has screenshots of these two pages.

### Example
Here's an example text session:
Me texting 262-67-CHESS: play
[Ches(s]ms): Hello! Text back moves in algebraic notation (e4) or square to square (e2 e4). A URL for your game board is coming.
[Ches(s]ms): Here's the URL for your game board as promised: http://smschess.sparedev.com/game/njsef
Me: c4
[Ches(s]ms): The computer replies e7 to e5. Your move!
Me: Nf3
[Ches(s]ms): The computer replies b8 to c6. Your move!

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
