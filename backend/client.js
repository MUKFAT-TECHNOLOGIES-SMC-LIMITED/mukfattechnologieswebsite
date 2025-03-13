  
     function loadtime(startTime,endTime){
        loadTime = Math.round(endTime - startTime)/ 1000;
        if(loadTime >3){
      
          msg="a slow network has been detected";
         colour ="error";
         alertshowa(msg,colour);
        }
        
      }

      function validateInputs(inputs) {
    
        var error = false;
      
        inputs.each(function() {
          var input = $(this);
      
          if (input.val() === '') {
            input.css('border-color', 'red');
            input.after('<span class="error">This field is required.</span>');
            error = true;
          }
          else {
            input.css('border-color', '');
            input.next('.error').remove();
          }
        });
      
        return !error;
      }



        
function alertnote(caller,message){
 if(caller == "success"){
 document.getElementById('messagearea').style = "color: #fff; background: #059652; text-align: center;padding: 15px;font-weight: 600;";
 document.getElementById('messagearea').innerHTML =message;
 }else if(caller == "error"){
  document.getElementById('messagearea').style = "color: #fff; background: #df1529; text-align: center;padding: 15px;font-weight: 600;";
  document.getElementById('messagearea').innerHTML =message;
 }else{
  document.getElementById('messagearea').style ="";
 }
}



function booknow() { 

  

    if( 
        
validateInputs($('#name'))&&

validateInputs($('#email'))&&

validateInputs($('#clientcontact'))&&

validateInputs($('#company'))&&

validateInputs($('#service'))&&

validateInputs($('#message'))
  ) { 

    form = new FormData();
    
form.append('name', $('#name').val()); 

form.append('email', $('#email').val()); 

form.append('contact', $('#clientcontact').val()); 

form.append('company', $('#company').val()); 

form.append('service', $('#service').val()); 

form.append('message', $('#message').val()); 

  
   form.append('key', 'createclient');

  
    $.ajax({
        url:"backend/clientcontrol.php",
           processData: false,
           contentType: false,
           method:"POST",
           type:"POST",
           dataType:'text',
           data:form,
           beforeSend: function() {
            startTimeclassrooms = performance.now();
            $('#booknowbutton').text('booking...');
            $('#booknowbutton').prop('disabled', true);
            $("#bookingtitle").html("ADD classrooms");
          },
           success:function(response)
           {
            $('#booknowbutton').text('BOOKED');
            $('#booknowbutton').prop('disabled', false);
               var json = JSON.parse(response);
               var status = json.status;
               
               if(status=='true'){
              
               
               
                document.getElementById('bookingform').reset();
                   
                state = true;
                msg =  json.msg;
                
                alertnote("success",msg)
                endTimeclassrooms = performance.now();
            loadtime(startTimeclassrooms,endTimeclassrooms);
               }
               else if(state=='sessionout'){
                window.location.assign("lock.php");
                endTimeclassrooms = performance.now();
            loadtime(startTimeclassrooms,endTimeclassrooms);
               }
               
               else{
                state = false;
                msg =  json.msg;
                alertnote("error",msg);
                $('#booknowbutton').text('booking...');
                $('#booknowbutton').prop('disabled', false);
                endTimeclassrooms = performance.now();
                loadtime(startTimeclassrooms,endTimeclassrooms); 
               }
            },
            error: function (request, status, error) {
                
                state = false;
                $('#booknowbutton').text('booking...');
                $('#booknowbutton').prop('disabled', false);
                
                alertnote("error","please connect to the internets");
                endTimeclassrooms = performance.now();
                loadtime(startTimeclassrooms,endTimeclassrooms);
               
            },
       });
    }
     } 




    
    
