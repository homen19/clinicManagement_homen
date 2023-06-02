
function validation() {
    let firstname = document.form.firstname.value;
    let lastname = document.form.lastname.value;
    let contact = document.form.contact.value;
    let adhar = document.form.adhar.value;
    let problem = document.form.problem.value;
    let vill = document.form.vill.value;
    let district = document.form.district.value;
    let po = document.form.po.value;
    let pin = document.form.pin.value;


    console.log(firstname);
    console.log(lastname);
    

    if (firstname.length == "" && lastname.length == "" && contact.length == "" && adhar.length == "" &&  problem.length == "" && vill.length == "" && district.length == "" && po.length == "" && pin.length == "") {
        alert("Please complete the required fields");
        return false;
    }

}