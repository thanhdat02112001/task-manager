// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getMessaging} from "firebase/messaging";




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

if (app.messaging.isSupported()) {
  console.log('support')
}
