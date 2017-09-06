<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http"></script>

<script>
    var i = i;
    $(document).ready(function(){
        setInterval(function(){
            $.get("brad65.php"), function (data, status){
                $("#dataarea").html(data);
            });
                        },3000);
    });
</script>

<h1>Shappo Shappo</h1>
<hr/>
<div id="dataarea"></div>