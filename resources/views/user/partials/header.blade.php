
<nav class="navbar navbar-fixed-top navbar-no-bg " role="navigation">
            <!-- style="background:#dfeece !important;" -->
            <div class="container">
                <div class="navbar-header header-height">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<h1 style="color:blue;">Online Complain Registration form</h1>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-left">

                    </ul>
                    <ul class="nav  navbar-nav navbar-right" style="    margin-top: -15px;">
                        <li class="menutop"><a href="/index">Home Page </a>
                        </li>
                        <li class="menutop"><a href="/contact">Contact </a>
                        </li>
                        <!-- Button trigger modal -->
                        <li class="menutop">
                        
                        
                        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Apply for complain
</button></li>


                        
                    </ul>
                </div>

            </div>
        </nav>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><p style="color:blue;">Apply for complain</p></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" enctype= "multipart/form-data"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter NID number</label>
            <input name="complaintnumber" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        </form>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>


                        
                    
