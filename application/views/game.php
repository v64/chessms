<h4>the columns are labeled a-h from left, and the rows are labeled 1-8 from bottom</h4>
<h5>if you have no idea what you're doing, here are some moves for you: e4, Nf3, g3, Bg2</h5>
<div id="chessboard"></div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#chessboard').chess({
            fen: '<?=$fen?>'
        });
    });
</script>
