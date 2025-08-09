<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ender The Man</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Poppins', sans-serif; background:#0f0f0f; color:#fff; line-height:1.6; }

    
    header {
      position:relative;
      background:url('pic1.jpg') center/cover no-repeat;
      height:90vh;
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      text-align:center;
      padding:0 20px;
      overflow:hidden;
    }
    header::before {
      content:"";
      position:absolute;
      top:0; left:0; right:0; bottom:0;
      background:rgba(0,0,0,0.55);
    }
    header h1, header p, header a {
      position:relative;
      z-index:1;
    }
    header h1 { font-size:3rem; font-weight:600; margin-bottom:10px; animation:fadeIn 1s ease-out; }
    header p { font-size:1.2rem; max-width:600px; margin-bottom:20px; animation:fadeIn 1.5s ease-out; }
    .btn {
      display:inline-block;
      background:linear-gradient(90deg,#ff0000,#ff4d4d);
      color:#fff;
      padding:12px 24px;
      border-radius:8px;
      text-decoration:none;
      font-weight:600;
      transition:0.3s;
      animation:fadeIn 2s ease-out;
    }
    .btn:hover { opacity:0.85; }

    
    section { padding:60px 20px; max-width:1200px; margin:auto; }
    h2 { font-size:2rem; text-align:center; margin-bottom:40px; }

   
    .about { text-align:center; max-width:800px; margin:auto; animation:fadeUp 1s ease-out; }

   
    .videos {
      display:grid;
      grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
      gap:20px;
      animation:fadeUp 1.2s ease-out;
    }
    .videos iframe {
      width:100%;
      aspect-ratio:16/9;
      border:none;
      border-radius:12px;
      box-shadow:0 4px 15px rgba(0,0,0,0.4);
      transition:transform 0.3s;
    }
    .videos iframe:hover { transform:scale(1.02); }

    
    .socials { text-align:center; margin-top:30px; animation:fadeUp 1.3s ease-out; }
    .socials a {
      margin:0 10px;
      display:inline-block;
      font-size:1.8rem;
      color:#fff;
      text-decoration:none;
      transition:0.3s;
    }
    .socials a:hover { color:#ff4d4d; }

    
    .contact { text-align:center; animation:fadeUp 1.4s ease-out; }
    .contact a { color:#ff4d4d; text-decoration:none; }

 
    footer {
      background:#1a1a1a;
      padding:20px;
      text-align:center;
    }
    .coffee {
      display:inline-block;
      background:linear-gradient(90deg,#ffdd00,#ffaa00);
      color:#05060a;
      padding:10px 18px;
      border-radius:6px;
      text-decoration:none;
      font-weight:600;
      margin-top:10px;
      transition:0.3s;
    }
    .coffee:hover { opacity:0.85; }

    
    @keyframes fadeIn {
      from { opacity:0; transform:translateY(-20px); }
      to { opacity:1; transform:translateY(0); }
    }
    @keyframes fadeUp {
      from { opacity:0; transform:translateY(20px); }
      to { opacity:1; transform:translateY(0); }
    }
  </style>
</head>
<body>


  <header>
    <h1>Ender The Man</h1>
    <p>YouTuber, tartalomkészítő. Remélem egy jó benyomást nyújt! :)</p>
    <a href="https://www.youtube.com/@endertheman" target="_blank" class="btn">Subscribe :)</a>
  </header>


  <section class="about">
    <h2>Rólam</h2>
    <p>Ender The Man vagyok egy pici youtuber aki szeret kódokat írni és videót vágni. Szeretem a vizet a levegőt és természetesen az albániai csípősborsot (nem tudom van e ilyen).</p>
  </section>


  <section>
    <h2>Legújabb videóim</h2>
    <div class="videos">
      <iframe src="https://www.youtube.com/watch?v=UrD4A_kZi20" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/watch?v=xrcalkToLSQ&t=9s" allowfullscreen></iframe>
      <iframe src="https://www.youtube.com/watch?v=LcxenDYSVHk&t=15s" allowfullscreen></iframe>
    </div>
  </section>

  
  <section>
    <h2>Kövess a közösségi oldalakon</h2>
    <div class="socials">
      <a href="https://www.youtube.com/@endertheman/featured" target="_blank">📺Youtube</a>
      <a href="https://discord.gg/zn2y2As8hw" target="_blank">💬Discord</a>
    </div>
  </section>

  
  <section class="contact">
    <h2>Támogatás</h2>
    <a href="buymeacoffee.com/bonsairio9a" target="_blank" class="coffee">☕ Buy Me a Coffee</a>
  </section>

  
  <footer>
    <div>© 2025 Ender The Man</div>
  </footer>

</body>
</html>
