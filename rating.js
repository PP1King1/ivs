function validateForm() {
    
    var question1 = document.forms["rating"]["question1"].value;
    var question2 = document.forms["rating"]["question2"].value;
    var question3 = document.forms["rating"]["question3"].value;
    var question4 = document.forms["rating"]["question4"].value;
    
    
    if (question1 == "" || question2 == "" || question3 == "" || question4 == "") {
      alert("Bitte alle Fragen ausfüllen");
      return false;
    }
} 