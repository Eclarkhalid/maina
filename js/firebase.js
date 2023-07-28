let firebaseConfig = {
    apiKey: "AIzaSyBkGbyWINGf3MVEjGcwgZNU2GOzo61qzAc",
    authDomain: "recipe-app-3adae.firebaseapp.com",
    projectId: "recipe-app-3adae",
    storageBucket: "recipe-app-3adae.appspot.com",
    messagingSenderId: "369320531537",
    appId: "1:369320531537:web:a55da4a6cc919890388a70"
};

firebase.initializeApp(firebaseConfig);

let db = firebase.firestore();