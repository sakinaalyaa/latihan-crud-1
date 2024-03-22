<div class="row">
    <div class="col-lg-12 mb-12 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Data Pegawai</h5>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal-pegawai">Tambah Pegawai</button>
                        <div class="table-responsive">
                            <table id="tbl-pegawai" class="table table-boarded table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jk</th>
                                        <th>Alamat.</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $p)
                                    <tr>
                                        <td>{{ $i = !isset($i)? 1 : ++$i }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->jk }}</td>
                                        <td>{{ $p->alamat }}</td>
                                        <td>Edit | Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>