
@extends("staff")


  @section("title") Publications @stop

@section("body")


        
       
      



        
           <div ><div>   <h6 class="m-0 font-weight-bold text-primary" style="font-size:15px;">Toutes les publications :<b><h3 style="color:green;font-size:32px;"> @if(  $count !== null) {{ $count }} @endif </h3></b>   </h6></div>
            <div style="float:right;margin-right:13px;margin-bottom:12px"> <a href="ajouterPublicationForm"> <button type="button" style="font-size:17px;"  class="btn btn-info">ajouter une publication</button></a></div></div>
          
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="background:rgba(2,3,4,.1);">
                    <tr>
                      <th>Id</th>
                     <th>Prix</th>
                        <th>Date</th>
                        <th>Article</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot style="background:rgba(2,3,4,.1);">
                    <tr>
                      <th>Id</th>
                      <th>Prix</th>
                        <th>Date</th>
                        <th>Article</th>
                      <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody >
                  <?php    $i=0; ?>
                  @foreach($publications  as $publication)
                  
                      <tr>
                      <td>{{ $publication->id }}</td>
                      <td>{{ $publication->prix }}</td>
                       <td>{{ $publication->date }}</td>
                       @if( $articles !== null )
                        <td><?php echo $articles[$i]; ?></td>
                        @endif
                        <?php    $i++; ?>
                      <td style="width:390px;">
                      
                      <div>
                      
                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="afficherPublication">
                      @csrf
                      <input type="hidden"  name="id" value={{ $publication->id }}/>
                       <input type="submit" style="font-size:16px;" value="afficher" class="btn btn-success"/>
                      </form>
                      </div>
                     

                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="modifierPublicationForm">
                      <input type="hidden"  name="id" value={{ $publication->id }}/>
                      @csrf
                       <input style="font-size:16px;" type="submit" value="modifier" class="btn btn-secondary"/>
                      </form>
                      </div>

                      <div style="float:left;margin-left:20px;">
                      <form method="get" action="supprimerPublication">
                      @csrf
                      <input type="hidden" name="id"  value={{ $publication->id }}/>
                      <input style="font-size:16px;" type="submit" onclick="return confirm('Etes vous sure de supprimer ?')" value="supprimer" class="btn btn-danger"/>
                      </form>
                      </div>
                      
                      </div>

                      </td>
                    </tr>

@endforeach
  
                    </tbody>
                </table>
              </div>
            </div>
          
         


@stop


