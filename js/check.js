function validateform()
{
    var name=document.forms["Form"]["firstname"].value;
    var sex=document.forms["Form"]["sex"].value;
    var email=document.forms["Form"]["email"].value;
    var password=document.forms["Form"]["password"].value;
    var birthday=document.forms["Form"]["birthday"].value;
    var format=/[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
    var format_email=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    if(name!="")
    {
        if(format.test(name))
        {
            alert("Tên đăng nhập không được chứa kí tự đặc biệt");
            return false;
        }
        else if(name.length<3)
        {
            alert("Tên đăng nhập phải lớn hơn 3 kí tự");
            return false;
        }
    }
    if(name=="")
    {
        alert("Tên không được để trống");
        return false;
    }
    if(email!="")
    {
        if(format_email.test(email)==false)
        {
            alert("email không đúng định dạng");
            return false;
        }
    }
    if(email=="")
    {
        alert("Email không được để trống");
        return false;
    }
    if(password=="")
    {
        alert("Password không được để trống");
        return false;
    }
    if(password!="")
    {
        if(password.length<4)
        {
            alert("Password phải từ 5 kí tự");
            return false;
        }
    }
   /* if(birthday=="")
    {
        alert("Ngày sinh không được để trống");
        return false;
    }*/
   /* if(name!="" && email!="" && password !="" )
    {
       // window.location='check.php';
        return false;
    }*/

}

 function validate()
 {
     var name=document.forms["Forms"]["loginname"].value;
     var loginpassword=document.forms["Forms"]["loginpassword"].value;
     var format=/[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
     if(name!="")
     {
         /*if(name.length<3)
         {
             alert("Tên đăng nhập không được quá ngắn");
             return false;
         }
         else */if(format.test(name))
         {
             alert("Tên đăng nhập không được chứa kí tự đặc biệt");
             return false;
         }
    }
    if(name=="")
    {
        alert("Tên đăng nhập không được để trống");
        return false;
    }
    /*if(loginpassword.length<4)
    {
        alert("Password phải từ 5 kí tự trở đi");
        return false;
    }*/
     if(loginpassword=="")
     {
        alert("Password không được để trống");
         return false;
    }
 }


 function validateAdress()
 {
     var firstname=document.forms["Formadress"]["firstname"].value;
     var phone=document.forms["Formadress"]["phone"].value;
     //var address=document.getElementById["adress"].value;
     var format=/[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
     if(firstname=="")
     {
         alert("Tên người nhận không được để trống");
         return false;
     }
     if(firstname!="")
     {
         if(firstname.length<3)
         {
             alert("Tên người nhận không được quá ngắn");
             return false;
         }
         else if(format.test(firstname))
         {
             alert("Tên người nhận được chứa kí tự đặc biệt");
             return false;
         }
     }
     if(phone=="")
     {
         alert("Số điện thoại không được để trống");
         return false;
     }
     /*if(address=="")
     {
         alert("Địa chỉ không được để trống");
         return false;
     }*/
     if(firstname!="" && phone!="")
     {
         window.location='checkout-shipping.php';
         return false;
     }
 }