var user = firebase.auth().signInAnonymously();
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    var isAnonymous = user.isAnonymous;
    user_id = user.uid;
  } else {
    // User is signed out.
  }
});

function writeUserData(message) {
  db_ref.push({
      user_id: user_id,
      message: message
  });
}