<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- MDBootstrap -->
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          data-mdb-collapse-init
          class="navbar-toggler"
          type="button"
          data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img
              src="data:image/png;base64,iVBORw0KGgoA
              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"
              height="15"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projects</a>
            </li>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    
        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <!-- Icon -->
          <a class="text-reset me-3" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
    
          <!-- Notifications -->
          <div class="dropdown">
            <a
              data-mdb-dropdown-init
              class="text-reset me-3 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              aria-expanded="false"
            >
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </div>
          <!-- Avatar -->
          <div class="dropdown">
            <a
              data-mdb-dropdown-init
              class="dropdown-toggle d-flex align-items-center hidden-arrow"
              href="#"
              id="navbarDropdownMenuAvatar"
              role="button"
              aria-expanded="false"
            >
              <img
                src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                class="rounded-circle"
                height="25"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuAvatar"
            >
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
       <div class="row">
          <div class="text-center  mt-4 col-md-5 offset-3  fw:bold"
              style="padding: 10px;padding-top: 10px;border-radius:5px;font-weight:bold">       
          </div>
          <button type="button" class="btn btn-info col-md-1 offset-2 mt-4" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#staticBackdrop">Ajouter</button>
       </div>

<div
    class="modal fade"
    id="staticBackdrop"
    data-mdb-backdrop="static"
    data-mdb-keyboard="false"
    tabindex="-1"
    aria-labelledby="staticBackdropLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form>
              <!-- prenom input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" name="prenom"/>
                <label class="form-label" for="form2Example1">Prenom</label>
              </div>
              <!-- nom input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example1" class="form-control" name="nom"/>
                <label class="form-label" for="form2Example1">Nom</label>
              </div>
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email"/>
                <label class="form-label" for="form2Example1">Email address</label>
              </div>

              
        </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" data-mdb-ripple-init>Ajouter</button>
        </div>
      </div>
    </div>
</div>

    <div class="container">
    @yield('content')
    </div>

    <!-- Navbar -->
<!-- Navbar -->
    <!-- MDBootstrap -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
</body>
</html>
