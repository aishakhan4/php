  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.html"><img src="img/ds.png" alt="DS" id="ds_img" style="width: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;DigitalSpirit</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="overflow: scroll; margin-top:120px;">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fas fa-user-alt"></i>&nbsp;&nbsp;
            
            <span class="nav-link-text">Interns  </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="personalintern.php">Personal Information</a>
            </li>
            <li>
              <a href="proffesionalintern.php">Proffesional Information</a>
            </li>
            <li>
              <a href="showintern.php">Show Interns</a>
            </li>
           
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fas fa-user-tie"></i>&nbsp;&nbsp;
            <span class="nav-link-text">Employees</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
           <li>
              <a href="personalemp.php">Personal Information</a>
            </li>
             <li>
              <a href="proffesionalemp.php">Proffesional Information</a>
            </li>
            <li>
              <a href="refferenceemp.php"> Refference</a>
            </li>
            <li>
              <a href="showemp.php">Show Employees</a>
            </li>
            <li>
              <a href="skillemp.php">Skills Employees</a>
            </li>
             <li>
              <a href="companydetails.php">Company Details</a>
            </li>
            
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
           <i class="fas fa-users"></i>&nbsp;&nbsp;
            <span class="nav-link-text">Trainees</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="personaltraine.php">Personal Information</a>
            </li>
            <li>
              <a href="proffesionaltraine.php">Proffesional Information</a>
            </li>
            
            <li>
              <a href="showtraine.php">Show Trainees</a>
            
          </ul>
        </li>
       
      </ul>
     
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          
        </li>
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
