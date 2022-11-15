<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ArFont" id="defaultModalLabel ">التنبيهات</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @if(!empty($MyNotifications))
        <div class="modal-body">
          <div class="list-group list-group-flush my-n3">
           
            <div class="list-group-item bg-transparent">
            
              @foreach ($MyNotifications as $item)
 
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>{{$item['subject']}}</strong></small>
                      <div class="my-0 text-muted small">{{$item['content']}}</div>
                      <small class="badge badge-pill badge-light text-muted">{{$item['created_at']}}</small>
                    </div>
                  </div>

            @endforeach



 

            </div>
     
 
          </div> <!-- / .list-group -->
        </div>
        <div class="modal-footer">
          <a type="button" class="btn btn-secondary btn-block ArFont"   href="{{ route('NotifSeen') }}" >تم الاطلاع على التبيهات</a>
        </div>

   
        @endif

      </div>
    </div>
  </div>
   