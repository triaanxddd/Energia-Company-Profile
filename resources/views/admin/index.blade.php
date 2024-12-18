@extends('admin.layouts.app')

@section('container')
<style>
  .chartBox{
    min-width: 200px;
    min-height: 200px;
    width: auto;
  }

  .card-header{
    height: 60px;
  }

  #search_year{
    display: none;
  }
</style>

<div class="row row-cols-4" >
    <div class="col">
        <div class="card text-white bg-dark mb-3" >
          <div class="card-header">Total Visitors</div>
          <div class="card-body">
           <h2 class="text-center">{{ $views->count() }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-warning mb-3">
          <div class="card-header">Service Contents</div>
          <div class="card-body">
            <h2 class="text-center">{{ $services }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-success mb-3">
          <div class="card-header">Total Sertificates</div>
          <div class="card-body">
            <h2 class="text-center">{{ $sertificates }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-danger mb-3">
          <div class="card-header">Total Company Logos</div>
          <div class="card-body">
            <h2 class="text-center">{{ $companies }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-info mb-3">
          <div class="card-header">Total Porfolios (Gallery)</div>
          <div class="card-body">
            <h2 class="text-center">{{ $portfolios }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-secondary mb-3">
          <div class="card-header">Total News Release</div>
          <div class="card-body">
            <h2 class="text-center">{{ $news }}</h2>
          </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white bg-primary mb-3">
          <div class="card-header">Total Contacts</div>
          <div class="card-body">
            <h2 class="text-center">{{ $contacts }}</h2>
          </div>
        </div>
    </div>
</div>
<x-card>
  <div>
    <form action="{{ route('dashboard') }}" method="get">
      <div class="row">
        <div class="col-sm-1">
          <select name="filter_by" class="form-control" id="filter_by">
              <option value="year" {{ Request::get('filter_by') == 'year' ? 'selected' : '' }}>By Year</option>
              <option value="month" {{ Request::get('filter_by') == 'month' ? 'selected' : '' }}>By Month</option>
          </select>
        </div>
        <div class="col-sm-1" id="search_year" style="display:{{ Request::get('filter_by') == 'month' ? 'block' : 'hidden' }};">
          <select name="search_year" class="form-control">
                <option value="2023" >2023</option>
          </select>
        </div>
        <div class="col-sm-1">
          <button type="submit" class="btn btn-primary" style="padding: 8px 20px;">Search</button>
        </div>
      </div>
    </form>
  </div>
  <div class="chartBox">
    <canvas id="myChart"></canvas>
  </div>
</x-card>

<script>
  const ctx = document.getElementById('myChart');
  const listX = @json($listX);
  const listVisitor = @json($viewCounts);
  
  var filterBy = document.getElementById('filter_by');
  var searchYear = document.getElementById('search_year');

  // Create the chart instance
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: listX,
      datasets: [{
        label: 'Visitors',
        data: listVisitor,
        fill: false,
        borderWidth: 1,
        tension: 0.1,
        borderColor: 'rgb(75, 192, 192)'
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        }
      }
    }
  });

  // Add a resize event listener
  window.addEventListener('resize', function() {
    myChart.resize();
  });

  filterBy.onchange = function(){
    console.log(filterBy.value);

    if(filterBy.value == 'month'){
      searchYear.style.display = 'block';
    }
    else{
      searchYear.style.display = 'none';
    }
  }
</script>
@endsection
