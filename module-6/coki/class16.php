<?php
setcookie('data', 'hello world', time() + 300);
setrawcookie('data2', rawurlencode('Nasir'), time()+300);
// setcookie('array',array(1,'hasan'),time()+300);
setcookie("array[id]",1,time()+300);
setcookie("array[name]",'Hasan',time()+300);

foreach($_COOKIE['array'] as $key=>$value){
    echo $key." = ".$value."<br/>";
}
?>

<script src="
https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js
"></script>
<script>
    alert(Cookies.get(data2));
</script>