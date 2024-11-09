<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ IHWAN IS 62</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
   
<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card-body">
                <form action="proses.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIDN</label>
                    <input type="text" name="Nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" name="Nama_Lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Rumpun</label>
                    <select name="Rumpun" id="" class="form-select">
                        <option value="">-Pilih Rumpun-</option>
                        <option value="Komputer">Komputer</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Perpajakan">Perpajakan</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Keuangan">Keuangan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="Tempat_Lahir" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="Tanggal_Lahir" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputPassword1">
                </div>

              
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis kelamin</label>
                    <br>
                    <input type="radio" value="Laki-Laki" name="Jenis_Kelamin" id="exampleInputPassword1"> Laki Laki
                    <input type="radio" value="Perempuan" name="Jenis_Kelamin" id="exampleInputPassword1"> Perempuan
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    
</body>
</html>