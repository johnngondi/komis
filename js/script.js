	function showExamine() {
		// hide find form and show examination form
		var diagform = document.getElementById('diagnose');
		$(diagform).addClass('hidden');
		$(diagform).removeClass('visible');

		var examine = document.getElementById('examine');
		$(examine).addClass('visible');
		$(examine).removeClass('hidden');
	}

	function showDrugs() {
		// hide disease form and show drug form
		var diseaseform = document.getElementById('disease');
		$(diseaseform).addClass('hidden');
		$(diseaseform).removeClass('visible');

		var drugform = document.getElementById('drug');
		$(drugform).addClass('visible');
		$(drugform).removeClass('hidden');
	}

	function showAlt(id) {
		// hide show the altform

		var altform = document.getElementById('alt');
		document.getElementById('id').value = id;
		$(altform).removeClass('hidden');
		$(altform).addClass('visible');
	}

	function openDialog(){
		$("#fileToUpload").trigger("click");
	}

	function printDoc(){
		window.print();
	}

	function newTab(urls){
		var win = window.open(urls, '_blank');
	}

	function resetPass(who) { 
		var id = document.getElementById('idnumber').value;
	    window.location.href="resetpass.php?idnumber="+id+"&&role="+who; 
	}

	function redirect () {
		window.location.href="back.php";
	}

	function validateLogin() {
		var validValueID = 0;
		var validValuePass = 0;
		var idnumber = document.getElementById('idnumber');
		var pass = document.getElementById('password');

		var regnumber = document.getElementById('idnumber').value;			
		var password = document.getElementById('password').value;

		if (regnumber == "") {					
			$(idnumber).addClass("error");	
			validValueID = 0;

		}else {	
			$(idnumber).removeClass("error");		
			validValueID = 1;
	    
		}
		if (password == "") {						
			$(pass).addClass("error");	
			validValuePass = 0;

		}else {	
			$(pass).removeClass("error");	
			validValuePass = 1;
	    
		}

		if (validValueID == 0 || validValuePass == 0) {
			document.getElementById('status').innerHTML = "Fill in the Highlighted Blanks";
		}else{
			document.loginform.submit();
		}
	}

	function validateFind() {
		var validValueID = 0;
		var staffid = document.getElementById('staffid');

		var valstaffID = document.getElementById('staffid').value;	
		
		if (valstaffID == "") {					
			$(staffid).addClass("error");	
			validValueID = 0;

		}else {	
			$(staffid).removeClass("error");		
			validValueID = 1;
	    
		}

		if (validValueID == 0 ) {
			document.getElementById('status').innerHTML = "Enter ID";
		}else{
			document.checkform.submit();
		}
	}


	function validateChangePass () {
		var validValueOldPass = 0;
		var validValuePass = 0;
		var validValueConfirm = 0;

		var oldPass = document.getElementById('oldpass');
		var pass = document.getElementById('password');
		var confirm = document.getElementById('confirm');

		var oldPassValue = oldPass.value;
		var valpass = pass.value;
		var valconfirm = confirm.value;

		if (oldPassValue == "") {
			$(oldPass).addClass("error");
		
		}else{
			$(oldPass).removeClass("error");
			validValueOldPass = 1;
		}

		if (valpass == "" || valpass.length < 8) {						
			$(pass).addClass("error");	
			validValuePass = 0;
			passstatus = "Password should be 8 or more Characters";

		}else {	
			$(pass).removeClass("error");	
			validValuePass = 1;
	    
		}
		
		if (valconfirm != valpass ) {						
			$(confirm).addClass("error");	
			validValueConfirm = 0;
			passstatus = "Passwords don't Match";

		}else {	
			$(confirm).removeClass("error");	
			validValueConfirm = 1;
	    
		}

		if (validValueOldPass == 0 || validValuePass == 0 || validValueConfirm == 0) {
			if (passstatus == "") {				
			document.getElementById('status').innerHTML = "Fill in the Highlighted Fields";

			}else{
			document.getElementById('status').innerHTML = "Enter valid values in Highlighted Fields. "+passstatus;	

			}

		}else{
			document.changepassform.submit();
		}
	}

	function validateRegister(income) {
	
		var validValueRole = 0;
		var validValueStaffID = 0;
		var validValueHos = 0;

		var passstatus = "";
		var validValueID = 0;
		var validValuenames = 0;
		var validValueGender = 0;
		var validValueEmail = 0;
		var validValuePass = 0;
		var validValueConfirm = 0;
		var validValueTerms = 0;

		var role;
		var hospital;
		var staffID;

		var valrole;
		var valhospital;
		var valstaffID;

		if (income == "staff") {
			validValueID = 1;

			role = document.getElementById('role');
			valrole = role.value;

			staffID = document.getElementById('staffid');
			valstaffID = staffID.value;

			hospital = document.getElementById('hospital');
			valhospital = hospital.value;

		}else{
			validValueStaffID = 1;
			validValueRole = 1;
			validValueHos = 1
		}


		if (income == "staff") {
			
		}else{
			var idnumber = document.getElementById('idnumber');
			var validnumber = eval(document.getElementById('idnumber').value);

		}

		var names = document.getElementById('names');
		var gender = document.getElementById('gender');
		var email = document.getElementById('email');
		var pass = document.getElementById('password');
		var confirm = document.getElementById('confirm');
		var terms = document.getElementById('terms');
		var term = document.getElementById('term');
			
		var valnames = document.getElementById('names').value;	
		var valgender = document.getElementById('gender').value;
		var valemail = document.getElementById('email').value;	
		var valpass = document.getElementById('password').value;
		var valconfirm = document.getElementById('confirm').value;

		if (income == "staff") {

			if (valrole == "") {					
				$(role).addClass("error");	
				validValueRole = 0;

			}else {	
				$(role).removeClass("error");		
				validValueRole = 1;
		    
			}

			if (valstaffID == "") {
				$(staffID).addClass("error");	
				validValueRole = 0;

			}else{
				$(staffID).removeClass("error");	
				validValueRole = 1;

			}

			if (valhospital == "") {
				$(hospital).addClass("error");	
				validValueHos = 0;

			}else{
				$(hospital).removeClass("error");	
				validValueHos = 1;

			}

		}else{

			if (validnumber == null) {					
				$(idnumber).addClass("error");	
				validValueID = 0;

			}else {	
				$(idnumber).removeClass("error");		
				validValueID = 1;
		    
			}
		}


		if (valnames == "") {						
			$(names).addClass("error");	
			validValuenames = 0;

		}else {	
			$(names).removeClass("error");	
			validValuenames = 1;
	    
		}

		if (valgender == "") {						
			$(gender).addClass("error");	
			validValueGender = 0;

		}else {	
			$(gender).removeClass("error");	
			validValueGender = 1;
	    
		}

		if (valemail == "") {						
			$(email).addClass("error");	
			validValueEmail = 0;

		}else {	
			$(email).removeClass("error");	
			validValueEmail = 1;
	    
		}
		
		if (valpass == "" || valpass.length < 8) {						
			$(pass).addClass("error");	
			validValuePass = 0;
			passstatus = "Password should be 8 or more Characters";
		}else {	
			$(pass).removeClass("error");	
			validValuePass = 1;
	    
		}
		
		if (valconfirm == "" || valconfirm.length < 8 ) {						
			$(confirm).addClass("error");	
			validValueConfirm = 0;
		}else if (valconfirm != valpass ) {						
			$(confirm).addClass("error");	
			validValueConfirm = 0;
			passstatus = "Passwords don't Match";

		}else {	
			$(confirm).removeClass("error");	
			validValueConfirm = 1;
	    
		}

		if (terms.checked) {		
			validValueTerms = 1;
			$(term).removeClass("error");		

		}else {		
			validValueTerms = 0;			
			$(term).addClass("error");		    
		}

		if (validValueID == 0 || validValuenames ==0 || validValueGender == 0 || validValueRole == 0 || validValueEmail == 0 || validValuePass == 0 || validValueConfirm == 0 || validValueTerms == 0) {
			if (passstatus == "") {				
			document.getElementById('status').innerHTML = "Fill in the Highlighted Fields";

			}else{
			document.getElementById('status').innerHTML = "Enter valid values in Highlighted Fields. "+passstatus;	

			}

		}else{
			document.regform.submit();
		}
	}

	function validateUpdate (who) {
		
		var validValuenames = 0;
		var validValueEmail = 0;
		var validValueHos = 0;

		var names = document.getElementById('names');
		var email = document.getElementById('email');

		var valnames = names.value;	
		var valemail = email.value;	

		if (who == "staff") {

			var hospital = document.getElementById('hospital');

			var valhospital = hospital.value;		

			if (valhospital == "") {					
				$(hospital).addClass("error");	
				validValueHos = 0;

			}else {	
				$(hospital).removeClass("error");		
				validValueHos = 1;
		    
			}

		}else{		
				validValueHos = 1;
			
		}

		if (valnames == "") {						
			$(names).addClass("error");	
			validValuenames = 0;

		}else {	
			$(names).removeClass("error");	
			validValuenames = 1;
	    
		}

		if (valemail == "") {						
			$(email).addClass("error");	
			validValueEmail = 0;

		}else {	
			var okMail = validateEmail(valemail);
			if (okMail == false) {									
				$(email).addClass("error");	
				validValueEmail = 0;
			}else{
				$(email).removeClass("error");	
				validValueEmail = 1;
			}
	    
		}
		
		if (validValuenames ==0 || validValueEmail == 0 || validValueHos == 0) {
						
			document.getElementById('status').innerHTML = "Fill in valid values in the Highlighted Fields";

		}else{
			document.updateform.submit();
		}
	}

	function validateDrugDisease(){
		var validValueDrug = 0;
		var validValueCat = 0;
		var validValueName = 0;

		var id = document.getElementById('id');
		var category = document.getElementById('category');
		var name = document.getElementById('name');

		var valid = id.value;	
		var valcategory = category.value;	
		var valname = name.value;
		

		if (valname == "") {					
			$(name).addClass("error");	
			validValueName = 0;

		}else {	
			$(name).removeClass("error");		
			validValueName = 1;
		    
		}

		if (valid == "") {						
			$(id).addClass("error");	
			validValueDrug = 0;

		}else {	
			$(id).removeClass("error");	
			validValueDrug = 1;
	    
		}

		if (valcategory == "") {						
			$(category).addClass("error");	
			validValueCat = 0;

		}else {	
			$(category).removeClass("error");	
			validValueCat = 1;
	    
		}
		
		if (validValueDrug ==0 || validValueCat == 0 || validValueName == 0) {
						
			document.getElementById('status').innerHTML = "Fill in the Highlighted Fields";

		}else{
			document.addnewform.submit();
		}
	}

	function validateExam () {
		var validValueExam = 0;

		var exam = document.getElementById('examination');
		var valexam = exam.value;

		if (valexam == "") {
			$(exam).addClass('error');
			document.getElementById('statusexam').innerHTML = "Enter Examination information about the Patient.";
		
		}else{
			var okExam = validateEntry ();
			if (okExam == false) {
				$(exam).addClass('error');
	        	document.getElementById('statusexam').innerHTML = "Enter Valid characters. <br> They Include: letters, numbers, comma(,), period(.), fullcolon(:), semmicolon(;), hyphen(-) and forwardslash(/) only.";

			}else{

				$(exam).removeClass('error');
				document.examineform.submit();
			}			
			
		}
	}

	function validateEntry () {

		var exam = document.getElementById('examination');
		var data = exam.value;
		var re = /^[a-zA-Z0-9\s \/.:;,-]+$/;
		if (data != "") {
			var OK = re.test(data); 

	        if (!OK) { 
	        	document.getElementById('statusexam').innerHTML = "Enter Valid characters. <br> They Include: letters, numbers, comma(,), period(.), fullcolon(:), semmicolon(;), hyphen(-) and forwardslash(/) only.";
	         	$(exam).addClass('error'); 
	         	return false;
			}else{
				document.getElementById('statusexam').innerHTML = "";
				$(exam).removeClass('error'); 
				return true;
			}
		}
		
        
	}

	function validateEmail(emailval) {
    var x = emailval;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return false;
    }else{
    	return true;
    }
}


	// Function to check letters and numbers  
// function alphanumeric(inputtxt)  
// {  
//  var letterNumber = /^[0-9a-zA-Z]+$/;  
//  if((inputtxt.value.match(letterNumber))   
//   {  
//    return true;  
//   }  
// else  
//   {   
//    alert("message");   
//    return false;   
//   }  
//   }