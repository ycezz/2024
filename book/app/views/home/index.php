
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container-xxl">
        <a href="javascript:void(0);" class="navbar-brand"
          ><span class="fw-bold text-secondary">
            <i class="bi bi-book-half"></i>
            the book 📖</span
          ></a
        >

        <!-- toggle button for mobile nav -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#main-nav"
          aria-controls="main-nav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar links -->
        <div
          class="collapse navbar-collapse justify-content-end align-center"
          id="main-nav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);" data-target="intro">About The Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);" data-target="pricing">Get in Touch</a>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="javascript:void(0);" data-target="pricing">Pricing</a>
            </li>
            <li class="nav-item d-md-none">
              <a class="nav-link" href="javascript:void(0);" data-target="contact">Contact</a>
            </li>
            <li class="nav-item ms-2 d-none d-md-inline">
              <a class="btn btn-secondary" href="javascript:void(0);" data-target="pricing">buy now</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- main image & intro text -->
    <section id="intro">
      <div class="container-lg">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-5 text-center text-md-start">
            <h1>
              <div class="display-2">Black-Belt</div>
              <div class="display-5 text-muted">Your coding skills</div>
            </h1>
            <p class="lead my-4 text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <a href="javascript:void(0);" class="btn btn-secondary btn-lg" data-target="pricing">Buy Now</a>
            <!-- open sidebar / offcanvas -->
            <a
              href="#sidebar"
              class="d-block mt-3"
              data-bs-toggle="offcanvas"
              role="button"
              aria-controls="sidebar"
            >
              Explore my other books
            </a>
          </div>
          <div class="col-md-5 text-center d-none d-md-block">
            <!-- tooltip -->
            <span
              class="tt"
              data-bs-placements="button"
              title="Net Ninja Book Cover"
            >
              <img class="img-fluid" src="<?= BASEURL ?>/img/ebook-cover.png" alt="" />
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- pricing plans -->
    <section id="pricing" class="bg-light mt-5">
      <div class="container-lg">
        <div class="text-center">
          <h2 class="pt-5">Pricing Plans</h2>
          <p class="lead text-muted">Choose a pricing plan to suit you.</p>

          <div class="row my-5 align-items-center justify-content-center g-0">
            <div class="col-8 col-lg-4 col-xl-3">
              <div class="card border-0">
                <div class="card-body text-center py-4">
                  <h4 class="card-title">Starter Edition</h4>
                  <p class="lead card-subtitle">eBook download only</p>
                  <p class="display-5 my-4 text-primary fw-bold">$12.99</p>
                  <p class="card-text mx-5 text-muted d-none d-lg-block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                  <a href="" class="btn btn-outline-primary btn-lg mt-3"
                    >Buy Now</a
                  >
                </div>
              </div>
            </div>

            <div class="col-9 col-lg-4">
              <div class="card border-primary border-2">
                <div class="card-header text-center text-primary">
                  Most Popular
                </div>
                <div class="card-body text-center py-5">
                  <h4 class="card-title">Complete Edition</h4>
                  <p class="lead card-subtitle">eBook download & all updates</p>
                  <p class="display-4 my-4 text-primary fw-bold">$18.99</p>
                  <p class="card-text mx-5 text-muted d-none d-lg-block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                  <a href="" class="btn btn-outline-primary btn-lg mt-3"
                    >Buy Now</a
                  >
                </div>
              </div>
            </div>

            <div class="col-8 col-lg-4 col-xl-3">
              <div class="card border-0">
                <div class="card-body text-center py-4">
                  <h4 class="card-title">Ultimate Edition</h4>
                  <p class="lead card-subtitle">download, updates & extras</p>
                  <p class="display-5 my-4 text-primary fw-bold">$24.99</p>
                  <p class="card-text mx-5 text-muted d-none d-lg-block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                  <a href="" class="btn btn-outline-primary btn-lg mt-3"
                    >Buy Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- topics at a glance -->
    <section id="topics">
      <div class="container-md">
        <div class="text-center">
          <h2>Inside the Book...</h2>
          <p class="lead text-muted">
            A quick glance at the topics you'll learn
          </p>
        </div>

        <div class="row my-5 g-5 justify-content-around align-items-center">
          <div class="col-6 col-lg-4">
            <img src="<?= BASEURL; ?>/img/kindle.png" class="img-fluid" alt="ebook" />
          </div>

          <div class="col-lg-6">
            <!-- accordion -->
            <div class="accordion" id="chapters">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-1">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#chapter-1"
                    aria-expanded="true"
                    aria-controls="chapter-1"
                  >
                    Chapter 1 - Your First Web Page
                  </button>
                </h2>
                <div
                  id="chapter-1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="heading-1"
                  data-bs-parent="#chapters"
                >
                  <div class="accordion-body">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Perspiciatis ab nisi, sunt harum, laudantium voluptas a
                      officiis doloribus omnis itaque consequuntur magnam
                      deleniti eaque! Dolorem error maiores facilis officia
                      dicta.
                    </p>
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Non a, magnam veritatis, odit molestias incidunt atque
                      facilis, esse in aliquid rerum natus amet laudantium
                      suscipit sint voluptatum! Earum, sint molestias.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-2">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#chapter-2"
                    aria-expanded="false"
                    aria-controls="chapter-2"
                  >
                    Chapter 2 - Mastering CSS
                  </button>
                </h2>
                <div
                  id="chapter-2"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading-2"
                  data-bs-parent="#chapters"
                >
                  <div class="accordion-body">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-3">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#chapter-3"
                    aria-expanded="false"
                    aria-controls="chapter-1"
                  >
                    Chapter 3 - The Power of JavaScript
                  </button>
                </h2>
                <div
                  id="chapter-3"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading-3"
                  data-bs-parent="#chapters"
                >
                  <div class="accordion-body">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-4">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#chapter-4"
                    aria-expanded="false"
                    aria-controls="chapter-4"
                  >
                    Chapter 4 - Storing Data (Firebase Databases)
                  </button>
                </h2>
                <div
                  id="chapter-4"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading-4"
                  data-bs-parent="#chapters"
                >
                  <div class="accordion-body">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="heading-5">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#chapter-5"
                    aria-expanded="false"
                    aria-controls="chapter-5"
                  >
                    Chapter 5 - User Authentication
                  </button>
                </h2>
                <div
                  id="chapter-5"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading-5"
                  data-bs-parent="#chapters"
                >
                  <div class="accordion-body">
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                    <p>
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                      Quis assumenda delectus sapiente quidem consequatur odit
                      adipisci necessitatibus nemo aliquid minus modi tempore
                      quibusdam quas vitae, animi ipsam nulla sunt alias.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact form -->
    <section id="contact" class="bg-light">
      <div class="container-lg">
        <div class="text-center">
          <h2 class="pt-5">Get in Touch</h2>
          <p class="lead">Questions to ask?</p>
        </div>

        <div class="row justify-content-center my-5">
          <div class="col-lg-6">
            <form>
              <label for="email" class="form-label">Email address:</label>
              <div class="mb-4 input-group">
                <span class="input-group-text">
                  <i class="bi bi-envelope-fill"></i>
                </span>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="e.g.mario@example.com"
                />
                <!-- tooltip -->
                <span class="input-group-text">
                  <span
                    class="tt"
                    data-bs-placements="buttom"
                    title="Enter an email address we can reply to."
                  >
                    <i class="bi bi-question-circle text-muted"></i>
                  </span>
                </span>
              </div>

              <label for="name" class="form-label">Name:</label>
              <div class="input-group mb-4">
                <span class="input-group-text">
                  <i class="bi bi-person-fill"></i>
                </span>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="e.g Mario"
                />
                <!-- tooltip -->
                <span class="input-group-text">
                  <span
                    class="tt"
                    data-bs-placements="buttom"
                    title="Pretty self explanatory really..."
                  >
                    <i class="bi bi-question-circle text-muted"></i>
                  </span>
                </span>
              </div>

              <label for="subject" class="form-label"
                >What is your question about?</label
              >
              <div class="input-group mb-4">
                <span class="input-group-text">
                  <i class="bi bi-chat-right-dots-fill"></i>
                </span>
                <select class="form-select" id="subject">
                  <option value="pricing">Pricing query</option>
                  <option value="content">Content query</option>
                  <option value="other">Other query</option>
                </select>
              </div>

              <div class="form-floating mb-4 mt-5">
                <textarea
                  name=""
                  id="query"
                  class="form-control"
                  style="height: 140px"
                ></textarea>
                <label for="query">Your query...</label>
              </div>

              <div class="mb-4 text-center">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Back to top button -->
<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
        <i class="fas fa-arrow-up"></i>
</button>


    
