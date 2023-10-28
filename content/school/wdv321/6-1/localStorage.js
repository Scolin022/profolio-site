/// ASSIGNMENT 6-1: DEMONSTRATE LOCAL STORAGE ///

// 1. JavaScript object created
// 2. Object pulled and contents displayed to user
// 3. If user does not confirm, user will be prompted to re-enter information
// and content will updated accordingly.
// 4. After information is updated, the object will be stored in local storage.



// localStorage.clear();
const formElem = document.querySelector('form');
const formDataObj = {
    firstName: '',
    lastName: '',
    prefContactMethod: '',
    Phone: '',
    Email: '',
};

formElem.addEventListener('submit', (e) => {
    e.preventDefault(); // Stops the default form submission behavior
    new FormData(formElem);
    formElem.reset();// Clears the form
});

formElem.addEventListener('formdata', (e) => {
    const data = e.formData;
    for (const [key, value] of data.entries()) {
        if (formDataObj.hasOwnProperty(key)) {
          formDataObj[key] = value;
        }
    }

    const userConfirmed = confirm('Does everything look right?' + JSON.stringify(formDataObj));
    if (userConfirmed) {
        localStorage.setItem('formDataObj', JSON.stringify(formDataObj));
        console.log(localStorage);
      } else {
        alert('Please re-enter your information.');
        localStorage.clear();
      }

//  If you wanted to change from JSON object to JS object.
    // testObj = JSON.parse(localStorage.getItem('formDataObj'));
    // console.log(testObj);


//  HTTP request to send data to server.
    // const request = new XMLHttpRequest();
    // request.open('POST', '/formhandler');
    // request.send(data);
});

//  Play around with later. Goal is to change whether email or number appears for
//  typing based on choice selected (email or number in this case).
    // function toggleContactOptions() {
    //     const contactMethod = document.getElementById('contact_methods').value;

    //     if (contactMethod == 'email') {
    //         console.log('email'); //works
    //     } else if (contactMethod == 'phone') {
    //         console.log('phone'); //works
    //     }
    // }


// Good stack overflow example of local storage and object. play around and modify
// as needed.
    // console.log('typeof formDataObj: ' + typeof formDataObj);

    // console.log('formDataObj properties:');

    // for (const prop in formDataObj) {
    //     console.log('  ' + prop + ': ' + formDataObj[prop]);
    // }

// Store object (formDataObj) in local storage
    // localStorage.setItem('formDataObj', formDataObj);

// Get object (formDataObj) from local storage
    // const retrievedObject = localStorage.getItem('formDataObj');

    // console.log('typeof retrievedObject: ' + typeof retrievedObject);
    // console.log('Value of retrievedObject: ' + retrievedObject);