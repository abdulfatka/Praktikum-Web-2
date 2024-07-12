@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Rombel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../admin">Beranda</a></li>
                            <li class="breadcrumb-item active">Rombongan Belajar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">


                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="my-4">Daftar Rombongan Belajar</h1>
                    <a href="{{ route('rombongan_belajars.create') }}" class="btn btn-primary mb-4">Tambah Rombel</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Tahun Masuk</th>
                                <th>IDN Dosen PA</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_rombongan_belajar as $rombongan_belajar)
                            <tr>
                                <td>{{ $rombongan_belajar->id }}</td>
                                <td>{{ $rombongan_belajar->kode }}</td>
                                <td>{{ $rombongan_belajar->thn_masuk }}</td>
                                <td>{{ $rombongan_belajar->dosen_pa }}</td>
                                <td>
                                    <a href="{{ route('rombongan_belajars.show', $rombongan_belajar->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('rombongan_belajars.edit', $rombongan_belajar->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('rombongan_belajars.destroy', $rombongan_belajar->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin untuk menghapus Rombel ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')