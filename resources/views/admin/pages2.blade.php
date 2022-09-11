
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
@include('admin.css')
<style type="text/css">
    .dis_das
    {
     text-align: center;
     padding-top: 20px;
    }
    .tab_des
    {
        width: 100%;
        padding-bottom: 40px;

    }
</style>

</head>

<body>

  <!-- ======= Header ======= -->




@include('admin.header')
  <!-- ======= Sidebar ======= -->
 @include('admin.sidebarr')
 <main id="main" class="main">

    <div class="pagetitle">
          <div class="dis_das">
            <h1>New Hos</h1>

            <form action="{{ url('/add_hos') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Mettez Le Nom ici">
                <input type="date" name="date" placeholder="Mettez Le Nom ici">
                <input type="time" name="heur" placeholder="Mettez Le Nom ici">
                <input type="submit" class="btn btn-primary" name="submit" value="ici">
            </form>
            <table class="tab_des">
                <tr>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>L heur</th>
                </tr>
                @foreach ($det as $det)

                <tr>
                    <td>{{ $det->name }}</td>
                    <td>{{ $det->date }}</td>
                    <td>{{ $det->heur }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ url('update_hos',$det->id) }}">Modifie</a>
                    </td>
                </tr>
                @endforeach

            </table>
          </div>
    </div>
 </main>
 @include('admin.js')
</body>

</html>
