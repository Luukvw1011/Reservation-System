<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title>Reserve a Table</title>
  @vite(['resources/css/app.css'])

</head>
<body>

  <!-- Header -->
  <header class="site-header">
    <div class="container nav">
      <a class="brand" href="/">
        <span class="brand-mark" aria-hidden="true">
          <!-- simple fork icon -->
          <svg width="18" height="18" viewBox="0 0 24 24" fill="#fff" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 2a1 1 0 011 1v6a2 2 0 104 0V3a1 1 0 112 0v6a4 4 0 11-8 0V3a1 1 0 011-1zM12 14a1 1 0 011 1v5a2 2 0 11-4 0v-5a1 1 0 112 0v5a0 0 0 100 0V15a1 1 0 011-1z"/>
          </svg>
        </span>
        <span>TableTime</span>
      </a>
      <div class="nav-actions-restaurants">
        <span>For restaurants</span>
        <div class="btn-group">
            <a href="#">Sign in</a>
            <a href="#">Create account</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero / Search -->
  <section class="hero">
    <div class="container">
      <h1 class="headline">Find and reserve your table</h1>
      <p class="sub">Search by city, date, and time. Instant confirmation.</p>

      <form class="search-card" action="#" method="get">
        <div class="search-row">
          <div class="field">
            <label class="label" for="where">Location</label>
            <input class="input" id="where" name="where" placeholder="City or neighborhood">
          </div>
          <div class="field">
            <label class="label" for="date">Date</label>
            <input class="input" type="date" id="date" name="date">
          </div>
          <div class="field">
            <label class="label" for="time">Time</label>
            <input class="input" type="time" id="time" name="time">
          </div>
          <div class="field">
            <label class="label" for="size">Party size</label>
            <select class="select" id="size" name="size">
              <option>2</option><option>3</option><option>4</option>
              <option>5</option><option>6</option><option>7+</option>
            </select>
          </div>
          <div class="field" style="align-self:end">
            <button class="search-btn" type="submit">Find tables</button>
          </div>
        </div>
      </form>

      <div class="list-head">
        <div class="list-title">Popular nearby</div>
        <div class="filters" aria-label="Quick filters">
          <button class="chip" type="button">$$ • Mid-range</button>
          <button class="chip" type="button">Outdoor</button>
          <button class="chip" type="button">Date night</button>
          <button class="chip" type="button">Vegan</button>
        </div>
      </div>

      <!-- Cards grid (replace with a Blade loop later) -->
      <div class="grid" role="list">
        <!-- Card -->
        <article class="card" role="listitem">
          <div class="card-media">
            <div class="badge">Modern European • $$$</div>
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1200&auto=format&fit=crop" alt="Canal House interior">
          </div>
          <div class="card-body">
            <div class="card-top">
              <h3 class="card-title">Canal House</h3>
              <div class="rating" aria-label="Rating 4.9 out of 5">4.9</div>
            </div>
            <div class="meta">Prinsengracht 88, 1015CD • 0.8 km</div>
            <div class="card-foot">
              <span class="avail" style="color:#92400e;background:#fffbeb;border-color:#fde68a">Few tables left</span>
              <a class="btn btn--primary btn--tiny" href="#">View times</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container foot">
      <div>© {{ date('Y') }} TableTime</div>
      <div><a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Contact</a></div>
    </div>
  </footer>
</body>
</html>
