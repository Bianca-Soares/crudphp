function DBClose(){
    @mysqli_close($link) or die(mysqli_error($link));
}