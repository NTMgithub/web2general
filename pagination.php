
<div id="pagination">
<?php
        if ($trang > 1 && $sotrang > 1){
    echo '<a  href="?per_page='.$so1trang.'& page='.($trang-1).'">Prev</a>  ';
}
 
// Lặp khoảng giữa
for ($i = 1; $i <= $sotrang; $i++){
    
    //  hiển thị thẻ a
    if($trang==$i)
    {
        echo '<a style="background-color:red"  >'.$i.'</a>  ';
    }
    else {
        echo '<a   href="?per_page='.$so1trang.' & page='.$i.'">'.$i.'</a>  ';
    }
        
    
}
 
    //hiển thị nút next
if ($trang<$sotrang){
    echo '<a  href="?per_page='.$so1trang.' & page='.($trang+1).'">Next</a>  ';
}  
?>     
</div>
<style>
    #pagination a {
    text-decoration: none;
    cursor: pointer;
    color: black;
    float: left;
    padding: 8px 16px;
    border: 1px solid #999499;
    font-weight: bold;
}
</style>