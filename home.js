function showTweet(tweet) {
  var tweetText = document.getElementById('tweet_text');
  var tweetDate = document.getElementById('tweet_date');
  var rawText = tweet[0].text;
  var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
  var text = rawText.replace(exp,"<a href='$1'>$1</a>");
  var date = new Date(tweet[0].created_at);
  tweetText.innerHTML = text;
  tweetDate.innerHTML = moment(date).fromNow();
  tweetDate.setAttribute('datetime', date.toISOString());
}
