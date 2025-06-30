// install event
self.addEventListener('install', evt => {
  // console.log('service worker installed');
});

// activate event
self.addEventListener('activate', evt => {
  // console.log('service worker activated');
});

// fetch event
self.addEventListener('fetch', evt => {
  // console.log('fetch event', evt);
});

importScripts('https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.1/firebase-messaging.js');

var config = {
    apiKey: "AIzaSyBS9JEM2s_UDzyVk9wkvdnaBGY-frtTciM",
    authDomain: "posproject-dda66.firebaseapp.com",
    projectId: "posproject-dda66",
    storageBucket: "posproject-dda66.appspot.com",
    messagingSenderId: "696336100297",
    appId: "1:696336100297:web:78802d30bd61902bd09618",
    measurementId: "G-XW0CRSGHT4"
 };

firebase.initializeApp(config);
const messaging = firebase.messaging();