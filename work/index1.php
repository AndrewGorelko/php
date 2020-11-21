<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form method="post">
    <?php //echo time() ?>
    <div>
        <script src="1.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <input class="textview" type="text" id="content" name="content" value="<?php echo $res2 ?>">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


        <!--        форма шлет значение инпута с атрибутом name, имя обязательно-->

    </div>

    <div>
        <input type="button" value="1" class="buton">
        <input type="button" value="2" class="buton">
        <input type="button" value="3" class="buton">
        <input type="button" value="+" class="buton">
    </div>

    <div>
        <input type="button" value="4" class="buton">
        <input type="button" value="5" class="buton">
        <input type="button" value="6" class="buton">
        <input type="button" value="-" class="buton">
    </div>

    <div>
        <input type="button" value="7" class="buton">
        <input type="button" value="8" class="buton">
        <input type="button" value="9" class="buton">
        <input type="button" value="*" class="buton">
    </div>

    <div>
        <input type="button" value="=" class="res">
        <input type="button" value="/" class="buton">
        <input type="button" value="C" class="del">
    </div>
<!--    <script type="text/javascript">-->
<!---->
<!--        $('.res').on('click', function () {-->
<!--        //     $.ajax({-->
<!--        //         method: "POST",-->
<!--        //         url: "post.php",-->
<!--        //         data: {-->
<!--        //             'content': $('#content').val()-->
<!--        //         },-->
<!--        //         success: function (result) {-->
<!--        //             $('#content').val(result);-->
<!--        //         }-->
<!--        //     });-->
<!--        //-->
<!--        // });-->
<!--        //-->
<!--        // $('.buton').on('click', function () {-->
<!--        //     var butonval = $(this).val();-->
<!--        //     var inputvalue = $('#content').val();-->
<!--        //     var newvalue = inputvalue + butonval;-->
<!--        //     $('#content').val(newvalue);-->
<!--        // });-->
<!--        //-->
<!--        // $('.del').on('click', function () {-->
<!--        //     $('#content').val('');-->
<!--        // })-->
<!---->
<!--            $.ajax({-->
<!--                method: "GET",-->
<!--                url: "post.php",-->
<!---->
<!--                success: function (result) {-->
<!--                    console.log (result);-->
<!--                }-->
<!--            });-->
<!---->
<!---->
<!--    </script>-->


</form>

</body>
</html>