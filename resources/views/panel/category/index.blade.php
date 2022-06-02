@extends('layouts.panel')

@section('main')
<div class="container">
<table class="table"><br><br>
    <thead class="thead-dark"><br><br>
      <tr>
        <th scope="col">شماره دسته بندی</th>
        <th scope="col">نام محصول</th>
        <th scope="col">برند</th>
        <th scope="col">زمان</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categorys as $Category)
      <tr>
        <th scope="row">1</th>
        <td>شیر</td>
        <td>کاله</td>
        <td>22.22.3</td>
      </tr>
    </tbody>
    @endforeach
  </table>

</div>
@endsection