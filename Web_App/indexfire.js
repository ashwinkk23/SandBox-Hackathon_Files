 var config = {
    apiKey: "AIzaSyD5Edrh6XkrljQ5iMRiYWX52j2MWPGolpo",
    authDomain: "messenger6-4aab4.firebaseapp.com",
    databaseURL: "https://messenger6-4aab4.firebaseio.com",
    storageBucket: "messenger6-4aab4s.appspot.com"
  };
  firebase.initializeApp(config); 



var msg = document.getElementById("msg");
var submitbtn = document.getElementById("submitbtn");

function submit() {

    var firebaseRef = firebase.database().ref();
    
    firebaseRef.child("Text").set("swafdw3");
}