
@extends("staff")


@section("title") Syracuse zone @stop

@section("body")


      
     
    


<div class="card shadow " style="margin-top:50px;min-height:800px;overflow:scroll;">
          <div class="card-header py-3">
        
          <div style="float:right;"> 

        
        
          <form method="POST" action="syracuse">
          <input type="number" name= "nombre">
          <Button type="submit">afficher resultat  </Button>   
</form>  

          </div>
          <div class="card-body" >
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead style="background:rgba(2,3,4,.1);">
                  <tr>
                  <th>indice décroissant</th>
                    <th>nombre</th>
                      <th>puissance</th>
                    <th>somme puissances</th>
                    <th>resultat</th>
                  </tr>
                </thead>
                <tfoot style="background:rgba(2,3,4,.1);">
                  <tr>
                  <th>indice décroissant</th>
                    <th>nombre</th>
                      <th>puissance</th>
                    <th>somme puissances</th>
                    <th>resultat</th>
                  </tr>
                </tfoot>
                <tbody >
                <?php dd($liste); ?>
                
                @foreach($liste as $valeur)
                
                    <tr>
                    <td>{{  }}</td>
                    <td><?php ?></td>
                     <td><?php ?> }}</td>
                     <td>{{ <?php ?> }}</td>
                     <td>{{ <?php ?> }}</td>
               
                  </tr>
@endforeach


                  </tbody>
              </table>
            </div>
          </div>
        </div>
       


@stop


