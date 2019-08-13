
<form method="post">
    <?php //echo time() ?>
    <div>
        <input class="textview" type="text" id="content" name="content" value="<?php echo $res2 ?>">

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


</form>

<script type="text/javascript">

    $('.res').on('click', function () {
        $.ajax({
            method: "POST",
            url: "/ajax/post.php",
            data: {
                'content': $('#content').val()
            },
            success: function (result) {
                $('#content').val(result);
            }
        });

    });

    $('.buton').on('click', function () {
        var butonval = $(this).val();
        var inputvalue = $('#content').val();
        var newvalue = inputvalue + butonval;
        $('#content').val(newvalue);
    });

    $('.del').on('click', function () {
        $('#content').val('');
    })

</script>
