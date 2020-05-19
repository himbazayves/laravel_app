


            

       

        




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>INGABO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
  
    <link rel="stylesheet" href="wow/wow.min.js">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link href="{{asset('select2/select2.min.css')}}" rel="stylesheet" media="all">


  


    
   

    <style>

.card1 {
        margin: 0 auto; /* Added */
      
        
}

    </style>


<style>
  /*
  Read more here 
  http://codeconvey.com/animated-css3-checkbox-styling/
  */
  @import url(http://fonts.googleapis.com/css?family=Open+Sans);
  @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
  
  
  /*Page styles*/
  html { height: 100%; }
  
 
  
  /*Chickky Checkboxes styles*/
  .chickyboxes {
     
      float: left;
      padding: 5%;
      width: 100%;
      
  }
  .chickyboxes input[type="checkbox"] { display: none; }
  .chickyboxes input[type="checkbox"] + label {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 20px;
    font: 14px/20px 'Open Sans', Arial, sans-serif;
  
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
  }
  .chickyboxes input[type="checkbox"] + label:last-child { margin-bottom: 0; }
  .chickyboxes input[type="checkbox"] + label:before {
    content: '';
    display: block;
    width: 20px;
    height: 20px;
    border: 1px solid blue;
    position: absolute;
    left: 0;
    top: 0;
    opacity: .6;
    -webkit-transition: all .12s, border-color .08s;
    transition: all .12s, border-color .08s;
  }
  .chickyboxes input[type="checkbox"]:checked + label:before {
    width: 10px;
    top: -5px;
    left: 5px;
    opacity: 1;
    border-top-color: transparent;
    border-left-color: transparent;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  
  /*Flat UI Design Checkboxes*/
  .flatboxes {
  
      float: left;
      padding: 5%;
      width: 40%;
      height:100px;	
  }
  .flatboxes p {
      display: block;
      height: 30px;
      vertical-align: middle;
  }
  .flatboxes [type="checkbox"]:not(:checked),
  .flatboxes [type="checkbox"]:checked {
    position: absolute; 
    left: -9999px;
  }
  .flatboxes [type="checkbox"]:not(:checked) + label,
  .flatboxes [type="checkbox"]:checked + label {
    position: relative;
    padding-left: 95px;
    cursor: pointer;
    color:#ddd;
  }
  .flatboxes [type="checkbox"]:not(:checked) + label:before,
  .flatboxes [type="checkbox"]:checked + label:before,
  .flatboxes [type="checkbox"]:not(:checked) + label:after,
  .flatboxes [type="checkbox"]:checked + label:after {
    content: '';
    position: absolute;
  }
  .flatboxes [type="checkbox"]:not(:checked) + label:before,
  .flatboxes [type="checkbox"]:checked + label:before {
    left: 0; top: 0;
    width: 80px; height: 30px;
    background: #DDDDDD;
    transition: background-color .2s;
  }
  .flatboxes [type="checkbox"]:not(:checked) + label:after,
  .flatboxes [type="checkbox"]:checked + label:after {
    width: 30px; height: 30px;
    transition: all .2s;
    background: #7F8C9A;
    top: 0; left: 0;
  }
  
  /* on checked */
  .flatboxes [type="checkbox"]:checked + label:before {
    background:#34495E; 
  }
  .flatboxes [type="checkbox"]:checked + label:after {
    background: #6cc0e5;
    top: 0; left: 51px;
  }
  
  .flatboxes [type="checkbox"]:checked + label .ui,
  .flatboxes [type="checkbox"]:not(:checked) + label .ui:before,
  .flatboxes [type="checkbox"]:checked + label .ui:after {
    position: absolute;
    left: 6px;
    width: 65px;
    font-size: 14px;
    font-weight: bold;
    line-height: 22px;
    transition: all .2s;
  }
  
  .flatboxes [type="checkbox"]:not(:checked) + label .ui:before {
    font-family: 'FontAwesome';
    content: "\f00d";
    left: 46px;
    margin-top: 3px;
  }
  .flatboxes [type="checkbox"]:checked + label .ui:after {
    font-family: 'FontAwesome';
    content: "\f00c";
    color: #6cc0e5;
    margin-top: 3px;
    left: 12px;
  }
  .flatboxes [type="checkbox"]:focus + label:before {
    border: 0; outline: 0;
    box-sizing: border-box;
  }
  
  
  
  /*Juice Checkboxes*/
  .juiceboxes {
      background: #3f3f3f none repeat scroll 0 0;
      float: left;
      padding: 5%;
      width: 40%;
      height:100px;
  }
  .juiceboxes input[type='radio'],
  .juiceboxes input[type='checkbox'] {
    display: none;
    cursor: pointer;
  }
  .juiceboxes input[type='radio']:focus, input[type='radio']:active,
  .juiceboxes input[type='checkbox']:focus,
  .juiceboxes input[type='checkbox']:active {
    outline: none;
  }
  .juiceboxes input[type='radio'] + label,
  .juiceboxes input[type='checkbox'] + label {
    cursor: pointer;
    display: inline-block;
    position: relative;
    padding-left: 30px;
    margin-right: 10px;
    color: #ddd;
  }
  .juiceboxes input[type='radio'] + label:before, input[type='radio'] + label:after,
  .juiceboxes input[type='checkbox'] + label:before,
  .juiceboxes input[type='checkbox'] + label:after {
    content: '';
    font-family: helvetica;
    display: inline-block;
    width: 20px;
    height: 20px;
    left: 0;
    bottom: 0;
    text-align: center;
    position: absolute;
  }
  .juiceboxes input[type='radio'] + label:before,
  .juiceboxes input[type='checkbox'] + label:before {
    background-color: #fafafa;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }
  .juiceboxes input[type='radio'] + label:after,
  .juiceboxes input[type='checkbox'] + label:after {
    color: #fff;
  }
  .juiceboxes input[type='radio']:checked + label:before,
  .juiceboxes input[type='checkbox']:checked + label:before {
    -moz-box-shadow: inset 0 0 0 10px #6cc0e5;
    -webkit-box-shadow: inset 0 0 0 10px #6cc0e5;
    box-shadow: inset 0 0 0 10px #6cc0e5;
  }
  /*Checkbox Specific styles*/
  
  .juiceboxes input[type='checkbox'] + label:hover:after, 
  .juiceboxes input[type='checkbox']:checked + label:after {
    content: "\2713";
    line-height: 18px;
    font-size: 14px;
  }
  .juiceboxes input[type='checkbox'] + label:hover:after {
    color: #c7c7c7;
  }
  .juiceboxes input[type='checkbox']:checked + label:after, 
  .juiceboxes input[type='checkbox']:checked + label:hover:after {
    color: #fff;
  }
  
  /* demo */
  .codeconveyHeader {
      margin: 0 auto;
      text-align: center;
  }
  
  .codeconveyHeader h1 {
      color: #fff;
      font-size: 2em;
      font-weight: 700;
      margin: 50px 0 40px;
  }
  
  .codeconveyHeader h1 span {
      display: block;
      padding: 0 0 0.6em 0.1em;
      font-size: 0.6em;
      opacity: 0.7;
  }
  .demo {
    font-family: 'Raleway', sans-serif;
      color:#fff;
      display: block;
      margin: 0 auto;
      padding: 15px 0;
      text-align: center;
  }
  .demo a{
    font-family: 'Raleway', sans-serif;
  color: #2ecc71;		
  }
  
  
  



.light {
--primary: hsl(250, 100%, 44%);
--other: hsl(0, 0%, 14%);


}


/* label */
label {
display: flex;
justify-content: flex-start;
align-items: center;
flex-wrap: nowrap;

margin: 12px 0;

cursor: pointer;
position: relative;
}


/* input */
.input {
opacity: 0;
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
z-index: -1;
}


/* .design */
.design {
width: 16px;
height: 16px;

border: 1px solid var(--other);
border-radius: 100%;
margin-right: 16px;

position: relative;
}

.design::before,
.design::after {
content: "";
display: block;

width: inherit;
height: inherit;

border-radius: inherit;

position: absolute;
transform: scale(0);
transform-origin: center center;
}

.design:before {
background: var(--other);
opacity: 0;
transition: .3s;
}

.design::after {
background: var(--primary);
opacity: .4;
transition: .6s;
}


/* .text */
.text {
color: var(--other);
font-weight: bold;
}


/* checked state */
input:checked+.design::before {
opacity: 1;
transform: scale(.6);
}


/* other states */
input:hover+.design,
input:focus+.design {
border: 1px solid var(--primary);
}

input:hover+.design:before,
input:focus+.design:before {
background: var(--primary);
}

input:hover~.text {
color: var(--primary);
}

input:focus+.design::after,
input:active+.design::after {
opacity: .1;
transform: scale(2.6);
}


.footer {
position: fixed;
left: 0;
bottom: 0;
width: 100%;
background-color: red;
color: white;
text-align: center;
}


</style>



    
  </head>
  <body>
  @yield('content')
  

  </div>  

    


     

  
  <script src="js/jquery-3.3.1.min.js"></script>

 
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function(){
  
  
      $(document).on('click', '.add', function(){
    var html = '';
    html +='<tr>'
      html +='<td>'
    html += ' <input class="col-md-12" placeholder="amazina"  type="hidden" class="form-control name="loop[]"  />';
    html += '<div class="form-group"> <input placeholder="amazina"  type="text" class="form-control form-control-sm" name="name[]"  /> </div>';
    html += '<div class="form-group"> <input placeholder="email"  type="text" name="email[]" class="form-control " /> </div>';
    html += '<div class="form-group"> <input type="text" placeholder="telephone"  name="tel[]" class="form-control " /> </div>';
    html += '<div class="form-group"> <button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fa fa-minus"></i></button></div></td></tr>';
   
   
    $('#item_table').append(html);
   });
   
     
     $(document).on('click', '.remove', function(){
      $(this).closest('tr').remove();
     });
     
     $('#insert_form').on('submit', function(event){
      event.preventDefault();
      var error = '';
      $('.item_name').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Name at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.item_quantity').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Enter Item Quantity at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      
      $('.item_unit').each(function(){
       var count = 1;
       if($(this).val() == '')
       {
        error += "<p>Select Unit at "+count+" Row</p>";
        return false;
       }
       count = count + 1;
      });
      var form_data = $(this).serialize();
      if(error == '')
      {
       $.ajax({
        url:"insert.php",
        method:"POST",
        data:form_data,
        success:function(data)
        {
         if(data == 'ok')
         {
          $('#item_table').find("tr:gt(0)").remove();
          $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
         }
        }
       });
      }
      else
      {
       $('#error').html('<div class="alert alert-danger">'+error+'</div>');
      }
     });
     
    });
    </script>



<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    };
    date_input.datepicker(options);


    $('.js-example-basic-single').select2();
  });





  
</script>




<script src="{{asset('select2/select2.min.js')}}"></script>





<script>

  function myFunction() {

     
    var input, filter, table, tr, td, i;
    input = document.getElementById("mylist");
    filter = input.value;
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  
  
  
  </script>



<script>

  function myFunction1() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
  }

  

  
  
  
  
  
  
  
      </script>







  </body>
</html>