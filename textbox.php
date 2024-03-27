<?php include 'inc/header.php'; ?>
<style>
    .skill{
        background: gray;
        padding: 10px;
        border-radius: 0 0 8px 8px;
    }

    .skill ul{
        list-style-type: none;
    }

    .skill ul li{
        padding: 5px;
        cursor: pointer;
    }

    .skill ul li:hover{
        background: white;
    }
</style>
<h2>Topics: Auto Complete Textbox</h2>
<div class="content">
<form action="" method="post">
        <table>
            <tr>
                <td>Skills</td>
                <td>:</td>
                <td><input type="text" name="skill" id="skill" placeholder="Enter your skill" required>
                <div id="skill_status">

                </div>
            </td>
            </tr>

        </table>
</form>



</div>
<?php include 'inc/footer.php'; ?>