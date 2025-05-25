<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>To My Dearest Girlfriend</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');
  body {
    margin: 0;
    background: linear-gradient(135deg, #fce1f3, #f9d6e8);
    font-family: 'Poppins', sans-serif;
    color: #6a0d4e;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    overflow-x: hidden;
  }
  header {
    text-align: center;
    padding: 2rem 1rem 1rem;
  }
  header h1 {
    font-weight: 600;
    font-size: 3rem;
    margin-bottom: 0.25rem;
    letter-spacing: 0.05em;
  }
  header p {
    font-weight: 300;
    font-size: 1.25rem;
    color: #822659;
    margin-top: 0;
  }
  section.message {
    background: #fff0f6;
    border-radius: 20px;
    padding: 2rem 3rem;
    max-width: 600px;
    margin: 1rem 1rem 3rem;
    box-shadow: 0 15px 25px rgba(138, 17, 71, 0.15);
    font-size: 1.2rem;
    line-height: 1.6;
  }
  section.message p {
    margin: 1rem 0;
  }
  .heart {
    font-size: 3rem;
    color: #d6336c;
    animation: pulse 2s infinite;
    margin-top: 1rem;
  }
  @keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
  }
  footer {
    text-align: center;
    font-size: 1rem;
    color: #73254c;
    margin-bottom: 2rem;
  }
  button {
    display: block;
    margin: 2rem auto 0;
    background-color: #d6336c;
    border: none;
    color: white;
    font-size: 1.2rem;
    padding: 0.75rem 2rem;
    border-radius: 40px;
    box-shadow: 0 6px 14px rgba(214, 51, 108, 0.4);
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    font-weight: 600;
  }
  button:hover {
    background-color: #a82254;
    box-shadow: 0 8px 20px rgba(168, 34, 84, 0.6);
  }
  .surprise-message {
    text-align: center;
    font-size: 1.4rem;
    margin-top: 1.5rem;
    color: #822659;
    opacity: 0;
    transform: translateY(15px);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
  .surprise-message.show {
    opacity: 1;
    transform: translateY(0);
  }
  .surprise-image {
    display: none;
    margin-top: 1.5rem;
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }
  /* small floating hearts animation */
  .floating-heart {
    position: fixed;
    font-size: 1.5rem;
    color: #d6336c;
    animation: floatUp 6s linear infinite;
    user-select: none;
  }
  @keyframes floatUp {
    0% {
      transform: translateY(100vh) translateX(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-10vh) translateX(30px) scale(1.3);
      opacity: 0;
    }
  }
</style>
</head>
<body>
<header>
  <h1>To My Dearest Girlfriend</h1>
  <p>You are my heart, my joy, and my inspiration</p>
  <div class="heart">❤️</div>
</header>

<section class="message">
    <p>I just want to take a moment to tell you how proud I am of you.</p>

    <p>Every single day, I see you putting your heart and soul into your schoolwork balancing deadlines, pushing through stress, and staying committed even when it’s tough. And through it all, you still manage to smile, to laugh, and to be the incredibly kind and beautiful person I fell in love with.</p>

    <p>I admire your strength, your determination, and your brilliance. You’re doing more than just getting through you’re growing, achieving, and becoming even more amazing with each passing day.</p>

    <p>Congratulations on everything you’ve accomplished so far, and keep going because I believe in you with all my heart. I'm always here, cheering you on, supporting you, and loving you endlessly.</p>

    <p>You’ve got this. And I’ve got you. ❤️</p>

    <p class="footer">Forever proud,<br>Forever yours.</p>
</section>

<button id="surpriseBtn">Click for a Surprise</button>
<div class="surprise-message" id="surpriseMessage">
  Congratulations for Everything that you do Im So Proud of you 🌞💖
</div>
<img src="photo_2025-05-06_20-21-59.jpg" alt="A special image" class="surprise-image" id="surpriseImage" />

<script>
  const surpriseBtn = document.getElementById('surpriseBtn');
  const surpriseMessage = document.getElementById('surpriseMessage');
  const surpriseImage = document.getElementById('surpriseImage');

  surpriseBtn.addEventListener('click', () => {
    surpriseMessage.classList.toggle('show');
    surpriseImage.style.display = surpriseImage.style.display === 'none' || surpriseImage.style.display === '' ? 'block' : 'none';
  });

  // Create floating hearts randomly on the screen
  function createFloatingHeart() {
    const heart = document.createElement('div');
    heart.textContent = '❤️';
    heart.classList.add('floating-heart');
    heart.style.left = Math.random() * window.innerWidth + 'px';
    heart.style.animationDuration = (4 + Math.random() * 3) + 's';
    heart.style.fontSize = (12 + Math.random() * 20) + 'px';
    document.body.appendChild(heart);

    setTimeout(() => {
      heart.remove();
    }, 7000);
  }

  setInterval(createFloatingHeart, 800);
</script>
</body>
</html>
