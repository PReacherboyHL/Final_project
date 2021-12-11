function validate() {
    // checking and wrong for empty feilds in first name  
    let fnameTest = document.myForm.fname.value.search(/[a-zA-Z]/g)
    if (document.myForm.fname.value == "" || fnameTest == -1) {
        alert("First name can only be letters");
        document.myForm.fname.focus();
        return false;
    }

    // checking and wrong for empty feilds in first name  
    let lnameTest = document.myForm.lname.value.search(/[a-zA-Z]/g)
    if (document.myForm.lname.value == "" || lnameTest == -1) {
        alert("Last name can only be letters");
        document.myForm.lname.focus();
        return false;
    }


    // checking and wrong for empty feilds in email 
    let emailTest = document.myForm.email.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]/)
    if (document.myForm.email.value == "" || emailTest == -1) {
        alert("Enter a valid email");
        document.myForm.email.focus();
        return false;
    }

    let numberTest = document.myForm.number.value.search(/[0-9]/g)
    if (document.myForm.number.value == "" || numberTest == -1) {
        alert("Enter only numbers for telephone number");
        document.myForm.number.focus();
        return false;
    }
    
    let groups_idTest = document.myForm.groups_id.value.search(/[0-9]/g)
    if (document.myForm.groups_id.value == "" || groups_idTest == -1) {
    alert("Id can only be numbers");
    document.myForm.groups_id.focus();
    return false;
    }
    
    let ClassidTest = document.myForm.Classid.value.search(/[0-9]/g)
if (document.myForm.Classid.value == "" || ClassidTest == -1) {
    alert("Last name can only be letters");
    document.myForm.Classid.focus();
    return false;
}


// let CoursenameTest = document.myForm.Coursename.value.search(/[a-zA-Z]/g)
// if (document.myForm.Coursename.value == "" || CoursenameTest == -1) {
//     alert("Last name can only be letters");
//     document.myForm.Coursename.focus();
//     return false;
}

// let student_idTest = document.myForm.student_id.value.search(/[0-9]/g)
// if (document.myForm.student_id.value == "" || student_idTest == -1) {
//     alert("only numbers");
//     document.myForm.student_id.focus();
//     return false;
// }

if (document.myForm.student_id.value == "" || document.myForm.student_id.value.search(/^[0-9]+$/)) {
    alert("Id can only be numbers");
    document.myForm.student_id.focus();
    return false;
}
