

$('#frequency').change(function() {
    //show or hide Num per day depending on frequency of migranes
    console.log(this.value);
    if(this.value == 'Daily'){
        $('#numPerDay').show('slow');
    }else{
        $('#numPerDay').hide('slow');
    }
});

function validateForm() {
    //simple form validation to make sure that required fields have been filled
    let name = document.forms["participantForm"]["first_name"].value;
    let dob  = document.forms["participantForm"]["date_of_birth"].value;
    let freq = document.forms["participantForm"]["frequency"].value;
    let perD = document.forms["participantForm"]["daily"].value;

    $('.formInput').each(function(){
        $(this).removeClass('error');
    });
    
    result = true;

    if(name == "") {
        $('#name').addClass('error');
        result = false;
    }
    if(dob == ""){
        $('#dob').addClass('error');
        result = false;
    }
    if(freq == ""){
        $('#freq').addClass('error');
        result = false;
    }
    if(freq == 'Daily' && perD == ""){
        $('#numPerDay').addClass('error');
        result = false;
    }
    
    if(result){
        $('#participantForm').submit();
    }
}
