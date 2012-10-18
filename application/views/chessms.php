<script type="text/javascript">
var games = [];
</script>

<h3>Ongoing Games</h3>
<h4>(the columns are labeled a-h from left, and the rows are labeled 1-8 from bottom)</h4>
<div class="row">
<div class="span4">

<?
foreach ($gameList as $game) { 
    $url = $game[0];
    $fen = $game[1];
?>
    <div id="chessboard-<?=$url?>"></div> (URL: <a href="/game/<?=$url?>"><?=$url?></a>)
    <br /><br />
    <script type="text/javascript">games.push(['<?=$url?>', '<?=$fen?>'])</script>
<?
}
?>

</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $.each(games, function(i, v) {
        $('#chessboard-' + v[0]).chess({
            fen: v[1]
        });
    });
});
</script>
