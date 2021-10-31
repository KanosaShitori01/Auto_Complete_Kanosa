$(document).ready(function(){
    $('#search_input').keyup(function(){
        let query = $(this).val().trim();
        console.log(query);
        if(query != ""){
            $.ajax({
                url:"search.php",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').fadeIn();
                    $('#result').html(data);
                }
            })
        }
        else{
            $('#result').fadeOut();
            $('#result').html("");
        }
    })
    $(document).on('click', 'li', function(){
        let res = $(this).text().trim();
        $('#search_input').val(res);
        $('#result').fadeOut();
    })
});