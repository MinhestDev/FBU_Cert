<div id="searchResult"  class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h3 >Kết quả tìm kiếm</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">tenVBCC</th>
                            <th scope="col">soHieuVBCC</th>
                            <th scope="col">ngayCap</th>
                            <th scope="col">soDiem</th>
                            <th scope="col">hotenSV</th>
                            <th scope="col">ngaySinh</th>
                            <th scope="col">tenLop</th>
                            <th scope="col">tenNganh</th>
                            <th scope="col">diemTB</th>
                            <th scope="col">xepLoai</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $item)
                            <tr>
                                <th scope="col">{{ $loop->iteration }}</th>
                                <th scope="col">{{$item->tenVBCC}}</th>
                                <th scope="col">{{$item->soHieuVBCC}}</th>
                                <th scope="col">{{$item->ngayCap}}</th>
                                <th scope="col">{{$item->soDiem}}</th>
                                <th scope="col">{{$item->hotenSV}}</th>
                                <th scope="col">{{$item->ngaySinh}}</th>
                                <th scope="col">{{$item->tenLop}}</th>
                                <th scope="col">{{$item->tenNganh}}</th>
                                <th scope="col">{{$item->diemTB}}</th>
                                <th scope="col">{{$item->xepLoai}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
