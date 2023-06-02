

function validation() {
    let firstname = document.form.firstname.value;
    let lastname = document.form.lastname.value;
    let email = document.form.email.value;
    let contact = document.form.contact.value;
    let gender = document.form.gender.value;
    let dob = document.form.dob.value;
    let doj = document.form.doj.value;
    let specialization = document.form.specialization.value;


    console.log(firstname);
    console.log(lastname);
    

    if (firstname.length == "" && lastname.length == "" && email.length == "" && contact.length == "" && (gender == null || gender.length == "") && dob.length == "" && doj.length == "" && specialization.length == "") {
        alert("Please complete the required fields");
        return false;
    }

}