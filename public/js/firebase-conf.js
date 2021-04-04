 // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCxA_u**************************",
    authDomain: "larav**************************",
    databaseURL: "https://l**************************",,
    projectId: "laravelfcm-2bfc2",
    storageBucket: "laravel**************************",,
    messagingSenderId: "9717**************************",,
    appId: "1:9717**************************",,
    measurementId: "G-0W**************************",
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var URL = $('meta[name="baseURL"]').attr('content');

  console.log("Firebase started.");

  // Facebook
  var facebookProvider = new firebase.auth.FacebookAuthProvider();

  var googleProvider = new firebase.auth.GoogleAuthProvider();
