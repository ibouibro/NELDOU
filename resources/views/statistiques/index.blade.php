
@extends("staff")


@section("title")  Statistiques d'activités @stop

@section("body")

<div class="card shadow " style="margin-top:50px;min-height:800px;overflow:scroll;">
          <div class="card-header py-3">
         <div ><div>   <h1 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Statistiques des ventes  </h1></div>
        </div>
          </div>
          <div class="card-body" >



Filtrez !

<form action="statAction" method="get">

                 <div class="form-group">
                        <label class="control-label" for="user">Catégorie d'Article :</label> 
                        <select class="form-control" name="categorie"   >

@foreach($categories as $categorie)

<option>{{$categorie}}</option>
@endforeach
</select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="user">Pour le mois de :</label> 
                        <select class="form-control" name="mois"   >

@foreach($Mois as $mois)

<option>{{$mois}}</option>
@endforeach
</select>
                    </div>
              
               <div class="form-group">
                        <label class="control-label" for="username"> Année</label>
                        <input class="form-control" type="number" name="annee" required />
                    </div>
                    </form>

                    <hr/>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="background:rgba(2,3,4,.1);">
                    <tr>
                      <th>Mois de vente</th>
                     <th>Nombre de ventes</th>
                        <th>Catégorie</th>
                        <th>Montant</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tfoot style="background:rgba(2,3,4,.1);">
                    <tr>
                    <th>Mois de vente</th>
                     <th>Nombre de ventes</th>
                        <th>Catégorie</th>
                        <th>Montant</th>
                      
                    </tr>
                  </tfoot>
                  <tbody >
                  @if(isset($stats))
                  @foreach($stats  as $stat)
                  
                      <tr>
                      <td>{{ $stat->mois }}</td>
                      <td>{{ $stat->nombre }}</td>
                       <td>{{ $stat->cat }}</td>
                       <td>{{ $stat->montant }}</td>
                       
                     

                
                    </tr>

@endforeach
@endif
  
                    </tbody>
                </table>
</div>
          
           
          </div>
           
        

    


@stop

