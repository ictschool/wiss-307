<?php
if(isset($_POST['name']) && isset($_POST['email']) && count(Filter::email($_POST['email']))>0){

}else{
    header("location: " . Path::url("contact"));
}
?>
