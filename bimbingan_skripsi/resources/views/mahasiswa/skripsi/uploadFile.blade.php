
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Upload File</h4>
          </div>
        <div class="modal-body">
          <form action="" method="post">
              @include('mahasiswa.layout.form')
              {{ csrf_field() }}
          </form>
        </div>
        <div class="modal-footer">
        </div>
      </div>

  </div>
</div>