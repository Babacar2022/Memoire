
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
    .div_center
    {
        text-align: center;
        padding-top: 60px;
    }
  .h1_text
  {
   font-size: 40px;
   padding-bottom: 40px;
  }
  .text_input
  {
    color: black;
  }
  .tab_dis
  {
    text-align: center;
    width: 50%;
    margin: auto;
    padding-top: 40px;
    border: white;
  }
</style>

</head>

<body>

@include('admin.header')
  <!-- ======= Sidebar ======= -->
  <div class="div_center">
    <h1 class="h1_text">Ajouter un gategory</h1>

    <form action="{{ url('add_catagory3') }}" method="POST" enctype="multipart/form-data">
        @csrf
     <div>
        <input class="text_input" type="text" name="nom" placeholder="Nom">
        <input class="text_input" type="date" name="date" placeholder="Date">
        <input class="text_input" type="submit" class="btn btn-primary" name="submit" value="Entre">

     </div>
   </form>
  <table class="tab_dis">
    <tr>
        <th>Nom</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    @foreach ($form  as $form)

    <tr>
        <td>{{ $form->nom }}</td>
        <td>{{ $form->date }}</td>
        <td>
           <a class="btn btn-danger" href="{{ url('delete',$form->id) }}">Supprimer</a>
        </td>
    </tr>
    @endforeach

   </table>
  </div>
 @include('admin.sidebarr')
  <!-- ======= Footer ======= -->
  @include('admin.footer')
  <!-- Vendor JS Files -->
 @include('admin.js')
</body>

</html>
