<?php
require_once 'Thread.php';
$threadId = $_GET['id'];
$topic = $_GET['topic'];
session_start();
?>
<html>
<head>
    <link rel="stylesheet" href="../Styles.css"/>
</head>
<body id="bd">
<div>
<?php
echo "<h1 style='color: azure'>" . $topic . "</h1>";
echo "<h2 style='color: azure'><a href='board.php'>Back to all threads</a></h2>";
$messages = Thread::GetThreadMessages($threadId);
foreach ($messages as $message) {
    echo '<div id="msg">';

    echo '<p> >> '.$message['id'].'</p>';

    if (($message['author'] == -1)){
        echo '<p> >Anon</p>';
    }
    else {
        echo '<p> > ' . $message['author'] . '</p>';
    }
    echo '<p>'.$message['message'].'</p>';

    echo '<p>Date: '.$message['date'].'</p>';

    echo '</div>';
}
?>
</div>
<div id="bottom-right">
    <?php
    echo '<form id="message" action="postMessage.php?thread_id='.$threadId.'&thread_name='.$_GET['topic'].'" method="post">';
    ?>

        Username:
        <?php
        if(isset($_SESSION['user_id']))
        {
            echo $_SESSION['username'].'<br>';
        }
        else{
            echo "Anon<br>";
        }
        ?>
        Message:
        <br>
        <textarea rows="4" cols="50" name="message" form="message" style="width: 400px; height: 200px"></textarea>
        <br>
        <input type = "submit">
    </form>

</div>
</body>
</html>
