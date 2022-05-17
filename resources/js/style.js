

$('#frequency').change(function() {
    //show or hide Num per day depending on frequency of migranes
    console.log(this.value);
    if(this.value == 'Daily'){
        $('#numPerDay').show();
    }else{
        $('#numPerDay').hide();
    }
});

function validateForm() {
    //simple form validation to make sure that required fields have been filled
    let name = document.forms["participantForm"]["first_name"].value;
    let dob  = document.forms["participantForm"]["date_of_birth"].value;
    let freq = document.forms["participantForm"]["frequency"].value;
    let perD = document.forms["participantForm"]["daily"].value;

    if(name == "") {
      alert("Name must be filled out");
      return false;
    }
    if(dob == ""){
        alert("Date Of Birth must be filled out");
        return false;
    }
    if(freq == ""){
        alert("Frequency must be filled out");
        return false;
    }
    if(freq == 'Daily' && perD == ""){
        alert("Amount per day must be filled out");
        return false;
    }
}