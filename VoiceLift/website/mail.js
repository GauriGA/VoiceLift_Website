const firebaseConfig = {
    apiKey: "AIzaSyAXWeHFzitwsfwSzqXdVJQYymR7wDb7Hxc",
    authDomain: "voicelift-contact.firebaseapp.com",
    databaseURL: "https://voicelift-contact-default-rtdb.firebaseio.com",
    projectId: "voicelift-contact",
    storageBucket: "voicelift-contact.appspot.com",
    messagingSenderId: "213638953603",
    appId: "1:213638953603:web:98ee4395bb668f2e7b79b6",
    measurementId: "G-2L9X3R1BGG"
  };
  
  // initialize firebase
  firebase.initializeApp(firebaseConfig);
  
  // reference your database
  var contactFormDB = firebase.database().ref("contactForm");
  
  document.getElementById("contactForm").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    var name = getElementVal("name");
    var emailid = getElementVal("emailid");
    var msgContent = getElementVal("msgContent");
  
    saveMessages(name, emailid, msgContent);
  
    //   enable alert
    document.querySelector(".alert").style.display = "block";
  
    //   remove the alert
    setTimeout(() => {
      document.querySelector(".alert").style.display = "none";
    }, 3000);
  
    //   reset the form
    document.getElementById("contactForm").reset();
  }
  
  const saveMessages = (name, emailid, msgContent) => {
    var newContactForm = contactFormDB.push();
  
    newContactForm.set({
      name: name,
      emailid: emailid,
      msgContent: msgContent,
    });
  };
  
  const getElementVal = (id) => {
    return document.getElementById(id).value;
  };
