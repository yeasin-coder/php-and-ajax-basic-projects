<?php include 'inc/header.php'; ?>

<style>
    #messages{
        background: gray;
        padding: 20px;
        border-radius: 10px;
        width: 240px;
    }

    ul{
        list-style-type: none;
    }

    ul li{
        padding: 5px 0;
    }
</style>

<h2>Topics: Auto Refresh Div Content</h2>
<div class="content">
<form action="" method="post">
        <table>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td><textarea name="body" id="body" cols="30" rows="10" placeholder="Write your message here"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="post" id="post" value="Post"></td>
            </tr>

        </table>
</form>

<div id="messages">

</div>



</div>
<?php include 'inc/footer.php'; ?>