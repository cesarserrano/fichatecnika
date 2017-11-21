<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
    </head>
<body>
<h1>Ficha Tecnika</h1>
<form action="insert.php" method="post">
Eu, <input type="text" name="nome" />, trabalhei na função de <input type="text" name="funcao" /> na peça <input type="text" name="peca" /> do Grupo <input type="text" name="grupo" />
<input type="submit" />
</form>
<br>
-----------------------------------------------
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Procure..." />
        <div class="result"></div>
    </div>
</body>
</html>
</body>
</html>
