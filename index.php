<?php
require_once "lib/strings.php";
require_once "lib/currency.php";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Practical Metaphysics</title>
<style>
body {
  background-image: url('images/water-tile.jpg');
	margin: 0;
	padding: 0;
}

body, p, td, th, li, div, span, input, select, textarea {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: Black;
}

h1, h2, h3, h4, h5, h6 {
	color: #26a9e1;
}

h1, h2 {
	margin: 0 0 10px;
}

#main {
	width: 750px;
	border: solid 5px #26a9e1;
	-moz-border-radius: 20px;
  -webkit-border-radius: 20px;
	padding: 20px;
	margin: 20px auto;
	background-color: White;
}

#title {
	text-align: center;
}

#cover {
	border-width: 0;
}

#table1 {
	width: 100%;
}

#table1 td {
	vertical-align: top;
	text-align: center;
}

.greyBlock {
	border: solid 2px #26a9e1;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
	padding: 15px;
	background-color: #c7f2ff;
	color: Black;
	margin: auto;
}

.obtainDiv {
	width: 230px;
  text-align: center;
}

.obtainDiv ul {
  margin: 0;
  padding: 0 0 0 20px;
}

.obtainDiv li {
  text-align: left;
}

.reviewDiv {
  width: 366px;
  text-align: center;
}

#toc {
  width: 500px;
	margin: auto;
}

#toc li {
	color: Black;
}

a {
	text-decoration: none;
	color: #26a9e1;
	font-weight: bold;
}

a:hover {
	text-decoration: underline;
}

.price {
  font-weight: bold;
	color: Black;
	margin: 0 5px;
	line-height: 20px;
}

li {
	margin-bottom: 10px;
}

#downloadEbook {

  background-color: white;
  color: #26a9e1;
  border: solid 2px #26a9e1;

  padding: 5px 40px;
  font-size: 14px;
  width: 180px;
  
  text-align: center;
  
  -moz-border-radius:     10px;
  -webkit-border-radius:  10px;
  -khtml-border-radius:   10px;
  border-radius:          10px;
}

a#downloadEbook:hover {
  text-decoration: none;

  background-color: #26a9e1;
  color: white;
  border: solid 2px white;
  
}

</style>
</head>
<body>

<div id='main'>

  <h1 id='title'>Practical Metaphysics by Shaun Moss - Out Now!</h1>

  <table id='table1' border='0' cellspacing='0' cellpadding='5'>
    <tr>
      <td>
        <a href="free-ebooks/ShaunMoss-PracticalMetaphysics.pdf">
        <img id='cover' src="images/PracticalMetaphysics-front-cover(400w).jpg" /></a><br><br>

        <div class='reviewDiv greyBlock'>
          <h2>Write a Review</h2>
          <p>Have you read the book? I'll be so grateful if you write a brief review on 
          <a href='http://www.lulu.com/content/paperback-book/practical-metaphysics/7933983'>lulu</a>
          or <a href='http://www.amazon.com/Practical-Metaphysics-Shaun-Moss/dp/1445232715#books-entity-teaser'>Amazon</a>.
          (But only if you liked it :)
          </p>
        </div>

      </td>
      <td>
        <div class='obtainDiv greyBlock'>
          <h2>Electronic Version</h2>
          <p>
            <strong>Practical Metaphysics</strong> is now available as a free PDF ebook! You will need
            <a href='http://get.adobe.com/reader/' target="_blank">Adobe Reader</a> or something like that to read it.
          </p>
          <p style='line-height: 32px; margin-bottom: 0; text-align: center;'><a id='downloadEbook' href='free-ebooks/ShaunMoss-PracticalMetaphysics.pdf'>Download</a></p>

          <!--
          <a href='http://www.lulu.com/product/download/practical-metaphysics/6030632'>Visit the
          listing page</a> or click the shiny button below for an instant download:</a>
          <br><br>
          <a href="http://www.lulu.com/commerce/index.php?fBuyContent=6030632">
            <img src="images/lulu-blue.png" border="0"
            alt="Support independent publishing: Buy this book on Lulu."></a>
          <br><br>
          Price: <span class='price'>US$13.99</span>
          <br><br>
          At current rates, this is around:<br>
          <span class='price'>A$<?php //echo number_format(convertCurrency(13.99, 'USD', 'AUD'), 2); ?></span>
          <span class='price'>NZ$<?php //echo number_format(convertCurrency(13.99, 'USD', 'NZD'), 2); ?></span>
          <span class='price'>C$<?php //echo number_format(convertCurrency(13.99, 'USD', 'CAD'), 2); ?></span><br>
          <span class='price'>&euro;<?php //echo number_format(convertCurrency(13.99, 'USD', 'EUR'), 2); ?></span>
          <span class='price'>&pound;<?php //echo number_format(convertCurrency(13.99, 'USD', 'GBP'), 2); ?></span>
          <span class='price'>Rs.<?php //echo number_format(convertCurrency(13.99, 'USD', 'INR'), 0); ?></span><br>
          -->
        </div>

        <br>

        <div class='obtainDiv greyBlock'>
          <h2>Printed Version</h2>
          Don't like to read on the computer?  You can buy a printed version of
          <strong>Practical Metaphysics</strong> from <a href="http://www.lulu.com">lulu.com</a>,
          high-quality print-on-demand service.<br><br>
          <a href='http://www.lulu.com/content/paperback-book/practical-metaphysics/7933983'>Visit the
          listing page</a> (which has reviews), or click this button to buy now:</a>
          <br><br>
          <a href="http://www.lulu.com/commerce/index.php?fBuyContent=7933983">
            <img src="images/lulu-blue.png" border="0"
            alt="Support independent publishing: Buy this book on Lulu."></a>
          <br><br>
          Price: <span class='price'>US$21.98</span>
          <br>(not including postage)
          <br><br>
          At current rates, this is around:<br>
          <span class='price'>A$<?php echo number_format(convertCurrency(21.98, 'USD', 'AUD'), 2); ?></span>
          <span class='price'>NZ$<?php echo number_format(convertCurrency(21.98, 'USD', 'NZD'), 2); ?></span>
          <span class='price'>C$<?php echo number_format(convertCurrency(21.98, 'USD', 'CAD'), 2); ?></span><br>
          <span class='price'>&euro;<?php echo number_format(convertCurrency(21.98, 'USD', 'EUR'), 2); ?></span>
          <span class='price'>&pound;<?php echo number_format(convertCurrency(21.98, 'USD', 'GBP'), 2); ?></span>
          <span class='price'>Rs.<?php echo number_format(convertCurrency(21.98, 'USD', 'INR'), 0); ?></span><br>
          
          <h3>Now also available at:</h3>
          
          <p style='margin: 10px 0 5px;'><a href='http://www.amazon.com/Practical-Metaphysics-Shaun-Moss/dp/1445232715'><img src='images/amazon-btn.png'></a></p>
          <p style='margin: 10px 0 5px;'><a href='http://www.barnesandnoble.com/w/practical-metaphysics-shaun-moss/1019724001'><img src='images/Barnes-Noble-btn.png'></a></p>
          
          
        </div>

      </td>
    </tr>
  </table>

  <br><br>

  <h2>What's It About, Anyway?</h2>

  <p>
  My background is in science and computers, but when some spiritual things happened to me when I was
  25, I was forced to take a closer look at how the universe really works.  During the subsequent 13
  years I researched both modern and ancient philosophy, physics, religion, spirituality, psychology
  and success principles. I moved around a lot, worked many different roles, was a Christian for a
  while, participated in various aspects of the New Age community and a major UFO research group, and
  became a qualified personal trainer.</p>

  <p>For most of this time I suffered terribly from hearing voices, suicidal depression,
  isolation, and feelings of loneliness, worthlessness and fear. It's been an experience that has
  nearly driven me around the twist, but it also catalysed an awful lot of thinking, soul-searching,
  research, and ultimately deep subconsious healing and forgiveness. These mental health issues,
  combined with my scientific/technical education and the world wide web, led me to develop my own
  unique philosophy about the universe, drawing ideas from science, religion and philosophy. I came to
  believe that what we call God is not separate from science, but can be understood scientifically, as
  can many other spiritual phenomena.</p>

  <p>The book is organised into 3 sections. In the first section I do my best to explain my ideas
  using concepts from physics, mathematics, astronomy and computer science. In the second section, I
  talk about some of the things I've learned about healing the mind. The third section discusses ways
  of using this new understanding of the mind and the universe to change your life.</p>

  <p>I really hope you like the book; or at least, not hate it :)  I put a lot of work into it,
  and the whole process was very difficult. It isn't perfect, not by a long shot. It is
  self-published - I did all the editing, the cover design, the images, everything, and I have no
  experience. It needs professional attention, and when the time is right I may organise that
  and release a 2nd edition. Also, my philosophy has evolved since writing the book, and there are
  a few things I would like to change. You've been warned! Having said that, I've had mostly positive
  feedback so far, and I truly believe that it contains some unique and original ideas about the
  universe, the mind and our planet, and that it will be of genuine value to anyone who reads it.
  Enjoy!</p>

  <br>

  <div id='toc' class='greyBlock'>
    <h1>Table of Contents:</h1>
    <h2>Foreword</h2>
    <h2>Introduction</h2>
    <h3>1.Introduction to Metaphysics</h3>
    <ul>
      <li>What is Metaphysics?</li>
      <li>Thoughts on Science</li>
      <li>Thoughts on Religion</li>
      <li>Why This Book?</li>
      <li>Organisation of This Book</li>
    </ul>
    <br/>
    <h2>Theory</h2>
    <h3>1.The Thinking Universe</h3>
    <ul>
      <li>The Planetary Brain</li>
      <li>The Thinking Galaxy</li>
      <li>The Infinite Brain of the Universe</li>
    </ul>
    <h3>2.Quantum Physics</h3>
    <ul>
      <li>Matter and Energy</li>
      <li>Collapsing the Wave Function</li>
      <li>A Universe of Thought</li>
      <li>It's Just Our Interpretation</li>
    </ul>
    <h3>3.The Mind Field</h3>
    <ul>
      <li>Fields</li>
      <li>Vibration</li>
      <li>The Illusion of Separation</li>
      <li>We Are More Than Bodies</li>
      <li>There Is Only One Mind</li>
      <li>The Ego</li>
    </ul>
    <h3>4.The Law of Attraction</h3>
    <ul>
      <li>The Morphogenic Field</li>
      <li>Thoughts are Electromagnetic</li>
      <li>Opposites Attract</li>
      <li>How It Works</li>
    </ul>
    <h3>5.The Holographic Universe</h3>
    <ul>
      <li>Holograms</li>
      <li>Every Part Reflects the Whole</li>
      <li>Fractals</li>
      <li>The Word of God</li>
      <li>What's Outside is Inside</li>
      <li>Dimensions</li>
    </ul>
    <h3>6.The Subconscious Mind</h3>
    <ul>
      <li>Group Minds</li>
      <li>The Planetary Mind</li>
      <li>One With Everything</li>
      <li>The Soul</li>
      <li>Reincarnation</li>
      <li>The Hundredth Monkey</li>
    </ul>
    <h3>7.Extra-Sensory Perception</h3>
    <ul>
      <li>The Sixth Sense</li>
      <li>Emotions</li>
      <li>Telepathy</li>
    </ul>
    <h3>8.Ancient Wisdom</h3>
    <ul>
      <li>Hermetic Principles</li>
      <li>Physics and Eastern Philosophy</li>
      <li>Physics and Christianity</li>
    </ul>
    <h3>9.Summary</h3>
    <br/>
    <h2>Preparation</h2>
    <h3>1.Purpose, Plan and Passion</h3>
    <ul>
      <li>Purpose</li>
      <li>Plan</li>
      <li>Passion</li>
      <li>Knowing Our Purpose</li>
      <li>Making Decisions</li>
    </ul>
    <h3>2.Happiness</h3>
    <ul>
      <li>Appreciation</li>
      <li>Good and Bad</li>
      <li>Service</li>
      <li>Backwards Thinking</li>
      <li>The Bigger Picture</li>
      <li>Right Action</li>
      <li>Service to Self</li>
    </ul>
    <h3>3.Forgiveness</h3>
    <ul>
      <li>It's All You</li>
      <li>Forgiveness is the Key</li>
      <li>The Disappearance of the Universe</li>
      <li>Separation</li>
      <li>Curing Guilt</li>
      <li>The Value of Mistakes</li>
      <li>Innocence</li>
    </ul>
    <h3>4.Healing</h3>
    <ul>
      <li>Emotional Freedom Technique</li>
    </ul>
    <h3>5.Thought Control</h3>
    <h3>6.Summary</h3>
    <br/>
    <h2>Application</h2>
    <h3>1.Goals</h3>
    <ul>
      <li>Setting Goals</li>
      <li>Write Your Goals Down</li>
      <li>Be Specific</li>
      <li>Set Dates</li>
      <li>Be Realistic</li>
      <li>Set Goals You're Prepared to Earn</li>
      <li>Always Remember Your Primary Goal</li>
    </ul>
    <h3>2.Keys to Success</h3>
    <ul>
      <li>Attitude</li>
      <li>Belief</li>
      <li>Imagination</li>
      <li>Action</li>
      <li>Desire</li>
      <li>Planning</li>
      <li>Deservability</li>
      <li>Consistency</li>
      <li>Discipline</li>
      <li>Inspiration</li>
      <li>Information</li>
      <li>Communication</li>
      <li>Teamwork</li>
      <li>Altruism</li>
      <li>Focus</li>
      <li>Confidence</li>
      <li>Talent</li>
      <li>Persistence</li>
      <li>Patience</li>
      <li>Reputation</li>
      <li>Gratitude</li>
      <li>Love</li>
    </ul>
    <h3>3.Obstacles to Success</h3>
    <ul>
      <li>Fear</li>
      <li>Doubt</li>
      <li>Laziness</li>
      <li>Double Negatives</li>
      <li>Constraints of the Shared Dream</li>
      <li>Restriction</li>
      <li>Regret</li>
    </ul>
    <h3>4.Money</h3>
    <ul>
      <li>Personal Values</li>
      <li>How to Obtain Money</li>
      <li>Receiving Money</li>
      <li>Give More Than What You're Paid For In Money</li>
      <li>Maximising Your Results</li>
      <li>Overcoming Greed</li>
      <li>The Root of All Evil</li>
    </ul>
    <h3>5.Compassion</h3>
    <br/>
    <h2>Conclusion</h2>
    <h2>Would You Like to Know More?</h2>
    <h3>1.Books</h3>
    <h3>2.Links</h3>
  </div>

  <p>
  <a href='<?php echo htmlentitiesall('mailto:shaun@astromultimedia.com') ?>'>Feel free to email me</a>
  </p>

  <p>
  Catch me on Skype at <strong>mossy2100</strong>
  </p>

  <p>
  I'm extremely active on <a href='http://facebook.com/mossy2100'>facebook</a>.
  I also have a <a href='http://twitter.com/mossy2100'>twitter</a> account (although I don't tweet much).
  </p>

  <p>Have a great day!<br>
  Mossy
  </p>

  <p><img src="images/ShaunMoss.jpg" /></p>


  <br>

  <div class='greyBlock'>
    <h3 style='color: Black'>More Free E-books</h3>
    <p>I can't even begin to tell you how awesome these 3 books are. They are all extremely
    famous and contain absolutely priceless information. And here they are, for you, free! It's
    like I just gave you 3 big lumps of gold! :o)</p>
    <ul>
    <li><a href='free-ebooks/NapoleonHill-ThinkAndGrowRich.pdf'>Napoleon Hill - Think and Grow Rich</a></li>
    <li><a href='free-ebooks/WallaceDWattles-TheScienceOfGettingRich.pdf'>Wallace D. Wattles - The Science of Getting Rich</a></li>
    <li><a href='free-ebooks/JamesAllen-AsAManThinketh.pdf'>James Allen - As A Man Thinketh</a></li>
    </ul>
  </div>

</div>

      
</body>
</html>
