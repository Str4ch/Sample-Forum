<?php
session_start();
require_once 'Thread.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="../Styles.css"/>
    </head>
    <body id="bd">
        <?php
        echo '<p>';
        if (isset($_SESSION['user_id'])) {
            echo "<a href='logout.php'>Log out</a>";
        }
        else{
            echo "<a href='login.php'>Login</a>";
        }
        echo '</p>';
        ?>
            <?php
            $threads = Thread::getAllThreads();
            foreach ($threads as $thread) {
                echo '<a id="thread_a" href="readThread.php?id='.$thread['id'].'&topic='.$thread['topic'].'">';
                echo '<div id="thread">';

                echo '<p>Topic: '.$thread['topic'].'</p>';

                echo '<p>Author: '.$thread['author'].'</p>';

                echo '<p>Date: '.$thread['date'].'</p>';

                echo '</div>';
                echo '</a>';
            }
            ?>

        <div id="bottom-right">
            <?php
                echo '<form id="message" action="createThread.php" method="post">';
            ?>
            Create Thread<br>
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
            Topic:
            <br>
            <input type = "text" name = "topic" placeholder = "Enter topic" />
            <br>
            <input type = "submit">
            </form>

        </div>
    </body>
</html>
