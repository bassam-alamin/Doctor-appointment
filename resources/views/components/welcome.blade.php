<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hospital </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="card-deck" style="margin: 1%">
    <a href="{{ url('doctors') }}" class="card-link">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Doctors</h5>
        <p class="card-text">Manage Doctors Details.</p>
      </div>
    </div>
    </a>
    <a href="{{ url('patients') }}" class="card-link">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Patients</h5>
        <p class="card-text">Manage Patient Details</p>
      </div>
    </div>
    </a>
    <a href="{{ url('appointments') }}" class="card-link">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Appointments</h5>
        <p class="card-text">Manage Appointments Details.</p>
      </div>
    </div>
    </a>
  </div>
</body>
</html>