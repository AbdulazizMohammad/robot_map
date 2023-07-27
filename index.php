<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Robot Controller</title>
    <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    <link rel="icon" type="image/png" href="imgs/robot-assistant.png" />
</head>

<body>
    <div class="top">
        <form action="insert_forward.php" method="POST" id="insertforward">
            <button type="submit" name='forward' value="f" id='insertforwardbutton' onclick="drawForward()">Forward</button>
        </form>
        <script>
            $(function() {
                $('#insertforwardbutton').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'insert_forward.php',
                        data: $('#insertforward').serialize(),
                        dataType: JSON,
                        success: function(data) {
                            s
                        }
                    });
                });
            });
        </script>
    </div>
    <div class="middle">
        <form action="insert_left.php" method="POST" id="insertleft">
            <button type="submit" name='left' value="l" id='insertleftbutton' onclick="drawLeft()">Left</button>
        </form>
        <script>
            $(function() {
                $('#insertleftbutton').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'insert_left.php',
                        data: $('#insertleft').serialize(),
                        dataType: JSON,
                        success: function(data) {
                            s
                        }
                    });
                });
            });
        </script>
        <form action="insert_stop.php" method="POST" id="insertstop">
            <button class="stop-button" type="submit" , name='stop' value="s" id='insertstopbutton'>Stop</button>
        </form>
        <script>
            $(function() {
                $('#insertstopbutton').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'insert_stop.php',
                        data: $('#insertstop').serialize(),
                        dataType: JSON,
                        success: function(data) {
                            s
                        }
                    });
                });
            });
        </script>
        <form action="insert_right.php" method="POST" id="insertright">
            <button class="right-button" type="submit" , name='right' value="r" onclick="drawRight()" id='insertrightbutton'>Right</button>
        </form>
        <script>
            $(function() {
                $('#insertrightbutton').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'insert_right.php',
                        data: $('#insertright').serialize(),
                        dataType: JSON,
                        success: function(data) {
                            s
                        }
                    });
                });
            });
        </script>
    </div>
    <div class="bottom">
        <form action="insert_backward.php" method="POST" id="insertbackward">
            <button type="submit" name='backward' value="b" onclick="drawBackward()" id='insertbackwardbutton'>Backward</button>
        </form>
        <script>
            $(function() {
                $('#insertbackwardbutton').on('click', function(event) {
                    event.preventDefault();
                    $.ajax({
                        type: 'post',
                        url: 'insert_backward.php',
                        data: $('#insertbackward').serialize(),
                        dataType: JSON,
                        success: function(data) {}
                    });
                });
            });
        </script>
    </div>
    <div class="clear">
        <button id="clearbutton" class="clear-button" onclick="clearCanvas()">Clear</button>
    </div>
    <canvas id="map" width="300" height="300"></canvas>
    <script>
        const canvas = document.getElementById("map");
        const ctx = canvas.getContext("2d");
        var px = 150,
            py = 150;
        ctx.beginPath();
        function drawForward() {
            ctx.moveTo(px, py);
            py -= 10;
            ctx.lineTo(px, py);
            ctx.stroke();
        }
        function drawBackward() {
            ctx.moveTo(px, py);
            py += 10;
            ctx.lineTo(px, py);
            ctx.stroke();
        }
        function drawRight() {
            ctx.moveTo(px, py);
            px += 10;
            ctx.lineTo(px, py);
            ctx.stroke();
        }
        function drawLeft() {
            ctx.moveTo(px, py);
            px -= 10;
            ctx.lineTo(px, py);
            ctx.stroke();
        }
        function clearCanvas(){
            px = py = 150;
            ctx.closePath();
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.beginPath();     
        }
    </script>
</body>

</html>