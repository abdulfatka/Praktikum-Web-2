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
                        <h1>Mahasiswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../admin">Beranda</a></li>
                            <li class="breadcrumb-item active">Mahasiswa</li>
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
                    <h1 class="my-4">Daftar Mahasiswa</h1>
                    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary mb-4">Tambah Mahasiswa</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>IPK</th>
                                <th>Program Studi</th>
                                <th>Rombongan Belajar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_mahasiswa as $mahasiswa)
                            <tr>
                                <td>{{ $mahasiswa->id }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->tmp_lahir }}</td>
                                <td>{{ $mahasiswa->tgl_lahir }}</td>
                                <td>{{ $mahasiswa->ipk }}</td>
                                <td>{{ $mahasiswa->prodi_id }}</td>
                                <td>{{ $mahasiswa->rombel_id }}</td>
                                <td>
                                    <a href="{{ route('mahasiswas.show', $mahasiswa->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                    <form action="{{ route('mahasiswas.destroy', $mahasiswa->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin untuk menghapus mahasiswa ini?')">Hapus</button>
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