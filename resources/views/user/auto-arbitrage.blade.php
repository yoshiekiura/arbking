@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1> Automated Inplay Arbitrage</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>          
        <li class="breadcrumb-item">Auto arbitrage</li>
        </ul>
      </div>
     
     
  <!-- Navs-->
    
    <div class="row justify-content-center">
      <div class="col-lg-12 mb-3">
        <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item"><a class="nav-link active"  data-toggle="tab"  href="#auto_arbitrage">Automated Inplay Arbitrage</a></li>
              </ul>
            </div>
            <div class="card-body">
               <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="auto_arbitrage">
                    <div class="alert alert-light border-secondary shadow" role="alert">
                      <div class="row" style="margin-top: 10px;">
                      <div class="col-md-12">
          <div class="alert alert-light border-secondary shadow">
            <table class="table table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Deposit Amount ($)</th>
                  <th>Current Balance ($)</th>
                  <th>Status</th>
                  <th>Next Arbitrage starts</th>
                  <th>Action1</th>
                  <th>Action2</th>


                </tr>
              </thead>
              <tbody>
                <tr>
                <td>500</td>
                <td>2000</td>
                <td>Inactive</td>
                <td>12/8/19</td>
                <td><a class="btn btn-info" id="demoSwal" href="#">Withdraw</a> </td>
                <td><a class="btn btn-info"  href="#">Activate</a> </td>


              </tr>
              </tbody>
              </div>
              </div>
                      </div>
                    </div>
                </div>

          
                </div>
                </div>  
                  </div>
                </div>   
</main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
    
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "Withdrawal will deactivate your Auto Arb account, you will have to manually activate the account if you want to join in again after withdrawal",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "I understand, continue!",
      		cancelButtonText: "Cancel withdrawal.",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Withdrawal is successful!", "Your account has been deducted.", "success");
      		} else {
      			swal("Withdrawal is cancelled", "You are still in the game ", "error");
      		}
      	});
      });
    </script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    
  </body>

  @stop