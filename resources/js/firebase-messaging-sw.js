// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getMessaging } from "firebase/messaging/sw";
import { onMessage, getToken} from "firebase/messaging";




// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDxWBYNX_GkuxY6TtbJfNf_rVMmJnvhdHU",
  authDomain: "ms-todo-131d2.firebaseapp.com",
  projectId: "ms-todo-131d2",
  storageBucket: "ms-todo-131d2.appspot.com",
  messagingSenderId: "486693360539",
  appId: "1:486693360539:web:0cb4495a29bbb8c9df473e",
  measurementId: "G-V4X99YGEC1"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);
onMessage(messaging, (payload) => {
  console.log('Message received. ', payload);
  // ...
});
getToken(messaging, { vapidKey: 'BN0EuDDsbnpe3Bn1Yl7uG00mzGKc-4rJ10_-LLdKO30ID-JfdEqAYVG_VJJsb6Brl_opzlag7072BfSAgjDj6QE' }).then((currentToken) => {
  if (currentToken) {
    // Send the token to your server and update the UI if necessary
    // ...
    console.log(currentToken)
  } else {
    // Show permission request UI
    console.log('No registration token available. Request permission to generate one.');
    // ...
  }
}).catch((err) => {
  console.log('An error occurred while retrieving token. ', err);
  // ...
});
