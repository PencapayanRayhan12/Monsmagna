<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Mons Magna</title>
  <link rel="stylesheet" href="{{ asset('contact.css')}}"> ⁠
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
  <!-- Social Media -->
  <div class="medsos">
    <div class="container">
      <ul>
        <li>
          <a href="#" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- Header -->
  <header>
    <div class="container">
    ⁠<h1><a href="/">MONS MAGNA</a></h1> ⁠
      <ul>
                <li><a  href="/">HOME</a></li>
                <li><a  href="/about">ABOUT</a></li>   
                <li><a  href="/product">PRODUCT</a></li>  
                <li><a  href="/tambahproduct">TAMBAH PRODUCT</a></li>  
                <li><a  href="/blog">BLOG</a></li>     
                <li class="active"><a  href="/contact">CONTACT</a></li> 
      </ul>
    </div>
  </header>

  <div class="contact-container">
    <div class="contact-left">
      <div class="image-container">
        <img src="img/contact.jpeg" alt="Contact Image">
      </div>
    </div>

    <div class="contact-right">
      <div class="form-container">
        <h2>Contact Us</h2>
        <form action="#">
          <label>Full Name</label>
          <input type="text" name="name" placeholder="Name" required>
          
          <label>Email</label>
          <input type="email" name="email" placeholder="you@example.com" required>
          
          <label>Message</label>
          <textarea name="message" rows="4" placeholder="Write your message..." required></textarea>
          
          <button type="submit">Contact Us</button>
        </form>
        
        <div class="info">
          <p><strong>Contact:</strong> monsmagna@gmail.com</p>
          <p><strong>Based in:</strong> Jakarta, Indonesia</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>